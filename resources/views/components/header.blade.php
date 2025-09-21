<header class="sticky z-40 w-full flex-none backdrop-blur duration-500 ease-in-out print:hidden top-0 mt-0" style="z-index: 50;">
    <div class="container flex h-16 items-center justify-between gap-4">
        <div class="flex items-center justify-start">
            <a href="{{ route('home') }}" style="outline: none;">
                <span class="sr-only">Neoera Store</span>
                <img alt="Neoera Store" fetchpriority="high" width="1000" height="1000" decoding="async" data-nimg="1" class="h-9 w-auto lg:h-10" src="{{ asset('assets/logo/drgedrg.gif') }}" style="color: transparent;" />
            </a>
        </div>

        <div class="flex flex-1 items-center justify-end gap-2">
            <x-input_search />
            <x-language_switcher />
            <button
                type="button"
                class="rounded-xl bg-primary-500 p-2 text-white lg:hidden"
                x-data="{ usedKeyboard: false }"
                @keydown.window.tab="usedKeyboard = true"
                role="button"
                @click="$dispatch('open-menu', { open: true })"
                :class="{ 'focus:outline-none': !usedKeyboard } "
            >
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                    ></path>
                </svg>
            </button>
        </div>

    </div>

    @include('partials.navbar')

</header>
