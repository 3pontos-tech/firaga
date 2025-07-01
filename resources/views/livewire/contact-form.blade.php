<form method="POST" class="space-y-6" wire:submit.prevent="submit">

    <div class="grid grid-cols-1 gap-6">
        <div class="space-y-2">
            <label for="name" class="text-base font-medium text-base-content">Seu nome*</label>

            <input id="name" name="name" type="text" placeholder="João Rockfeller" required wire:model.lazy="name"
                class="bg-gray-100 border-0 h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-gray-300 mt-[15px]" />
            @error('name') <span class="error text-error">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label for="email" class="text-base font-medium text-base-content">Seu email*</label>
            <input id="email" name="email" type="email" placeholder="joaorockfeller@gmail.com" required
                wire:model.lazy="email"
                class="bg-gray-100 border-0 h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-gray-300 mt-[15px]" />
            @error('email') <span class="error text-error">{{ $message }}</span> @enderror

        </div>

        <div class="space-y-2">
            <label for="phoneNumber" class="text-base font-medium text-base-content">Seu telefone*</label>
            <input id="phoneNumber" type="tel" max="19" inputmode="numeric" placeholder="11912345678"
                wire:model.lazy="phoneNumber"
                class="bg-gray-100 border-0 h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-gray-300 mt-[15px]">
            @error('phoneNumber') <span class="error text-error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="intent" class="text-base font-medium text-base-content">Qual intuito desta mensagem*</label>
            <select id="intent" name="messageIntent" required wire:model.lazy="messageIntent"
                class="bg-gray-100 border-0 h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-gray-300 mt-[15px]">
                <option value="" disabled>Selecione uma opção</option>
                @foreach ($intents as $intent)
                    <option value="{{ $intent->value }}" {{ $intent === $messageIntent ? 'selected' : '' }}>
                        {{ $intent->label() }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="space-y-2">
            <label for="preference" class="text-base font-medium text-base-content">Como prefere que entremos em
                contato?</label>
            <select id="preference" name="contactPreference" wire:model.lazy="contactPreference"
                class="bg-gray-100 border-0 h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-gray-300 mt-[15px]">
                <option value="" disabled>Selecione uma opção</option>
                @foreach ($preferences as $preference)
                    <option value="{{ $preference->value }}" {{ $preference === $contactPreference ? 'selected' : '' }}>
                        {{ $preference->label() }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="space-y-2">
        <label for="userMessage" class="text-base font-medium text-base-content">Mensagem*</label>
        <textarea id="userMessage" name="userMessage" required wire:model.lazy="userMessage"
            placeholder="Gostaria de saber mais sobre renda fixa e passiva"
            class="bg-gray-100 border-0 min-h-[120px] w-full resize-none rounded-md px-4 py-2 text-base focus:outline-none focus:ring-2 focus:ring-gray-300 mt-[15px]"></textarea>
        @error('userMessage') <span class="error text-error">{{ $message }}</span> @enderror

    </div>

    @if (session()->has('error'))
        <div class="bg-error text-error-content px-4 py-2 rounded">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('message'))
        <div class="bg-success text-success-content px-4 py-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <div class="pt-4">
        <button type="submit"
            class="bg-primary cursor-pointer hover:bg-secondary text-base-content px-8 py-3 rounded-md text-base font-semibold w-[180px]">
            Enviar
        </button>
    </div>
</form>
