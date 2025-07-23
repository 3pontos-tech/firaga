<div class="container mx-auto px-4 max-w-4xl">
    <form method="POST" class="space-y-6" wire:submit.prevent="submit">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="name" class="font-medium text-text-high">Nome</label>

                <input id="name" name="name" type="text" placeholder="João Rockfeller" required
                    wire:model.lazy="name"
                    class="bg-elevation-01dp border border-outline-low h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-brand-primary mt-[15px] placeholder:text-text-medium" />
                @error('name')
                    <span class="error text-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="email" class="font-medium text-text-high">Email</label>
                <input id="email" name="email" type="email" placeholder="joaorockfeller@gmail.com" required
                    wire:model.lazy="email"
                    class="bg-elevation-01dp border border-outline-low h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-brand-primary mt-[15px] placeholder:text-text-medium" />
                @error('email')
                    <span class="error text-error">{{ $message }}</span>
                @enderror

            </div>

            <div class="space-y-2 md:col-span-2">
                <label for="phoneNumber" class="font-medium text-text-high">Telefone</label>
                <input id="phoneNumber" type="tel" max="19" inputmode="numeric" placeholder="11912345678"
                    wire:model.lazy="phoneNumber"
                    class="bg-elevation-01dp border border-outline-low h-12 w-full rounded-md px-4 text-base focus:outline-none focus:ring-2 focus:ring-brand-primary mt-[15px] placeholder:text-text-medium">
                @error('phoneNumber')
                    <span class="error text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="space-y-2">
            <label for="userMessage" class="font-medium text-text-high">Mensagem</label>
            <textarea id="userMessage" name="userMessage" required wire:model.lazy="userMessage"
                placeholder="Gostaria de saber mais sobre renda fixa e passiva"
                class="bg-elevation-01dp border border-outline-low min-h-[120px] w-full resize-none rounded-md px-4 py-2 text-base focus:outline-none focus:ring-2 focus:ring-brand-primary mt-[15px] placeholder:text-text-medium"></textarea>
            @error('userMessage')
                <span class="error text-error">{{ $message }}</span>
            @enderror

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

        <div class="pt-4 flex justify-center md:justify-start">
            <x-layout.shared.button type="submit"
                class="bg-primary cursor-pointer hover:bg-secondary text-base-content px-8 py-3 rounded-md text-base font-semibold w-full md:w-[180px]">
                Enviar
            </x-layout.shared.button>
        </div>
    </form>
</div>
