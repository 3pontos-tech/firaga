import curses
import subprocess

def exibir_menu(stdscr, opcoes, titulo="Selecione uma opção:"):
    curses.curs_set(0)
    selecionada = 0
    while True:
        stdscr.clear()
        stdscr.addstr(f"{titulo}\n\n")
        for idx, opcao in enumerate(opcoes):
            if idx == selecionada:
                stdscr.addstr(f"> {opcao}\n", curses.A_REVERSE)
            else:
                stdscr.addstr(f"  {opcao}\n")
        key = stdscr.getch()
        if key == curses.KEY_UP and selecionada > 0:
            selecionada -= 1
        elif key == curses.KEY_DOWN and selecionada < len(opcoes) - 1:
            selecionada += 1
        elif key in [curses.KEY_ENTER, 10, 13]:
            return selecionada

def input_text(stdscr, prompt):
    curses.echo()
    stdscr.clear()
    stdscr.addstr(prompt)
    stdscr.refresh()
    texto = stdscr.getstr().decode('utf-8')
    curses.noecho()
    return texto

def main(stdscr):
    options1 = ['Criar uma branch', 'Fazer um commit', 'Sair']
    select1 = exibir_menu(stdscr, options1, "Selecione uma opção:")

    if select1 == 0:
        options2 = ['feat', 'fix', 'docs', 'style', 'refactor', 'perf', 'test', 'chore']
        select2 = exibir_menu(stdscr, options2, "Selecionar o tipo da branch:")
        nome_branch = input_text(stdscr, "Digite o nome da branch: ")
        branch_final = f"{options2[select2]}/{nome_branch}"
        # Cria a branch localmente
        result = subprocess.run(['git', 'checkout', '-b', branch_final], capture_output=True, text=True)
        stdscr.clear()
        if result.returncode == 0:
            stdscr.addstr(f"Branch criada: {branch_final}\n")
        else:
            stdscr.addstr(f"Erro ao criar branch:\n{result.stderr}\n")
        stdscr.getch()
    elif select1 == 1:
        options3 = ['feat', 'fix', 'docs', 'style', 'refactor', 'perf', 'test', 'chore']
        select3 = exibir_menu(stdscr, options3, "Selecionar o tipo do commit:")
        mensagem_commit = input_text(stdscr, "Digite a mensagem do commit: ")
        commit_final = f"{options3[select3]}: {mensagem_commit}"
        # Faz o commit (assume que já houve git add)
        result = subprocess.run(['git', 'commit', '-m', commit_final], capture_output=True, text=True)
        stdscr.clear()
        if result.returncode == 0:
            stdscr.addstr(f"Commit realizado: {commit_final}\n")
        else:
            stdscr.addstr(f"Erro ao fazer commit:\n{result.stderr}\n")
        stdscr.getch()
    elif select1 == 2:
        stdscr.addstr("Saindo...\n")
        stdscr.getch()
        return

curses.wrapper(main)
