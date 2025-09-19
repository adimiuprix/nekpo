            <div class="relative w-full hidden md:flex">
                <div class="relative w-full space-y-2">
                    <input
                        type="text"
                        class="inline-block h-9 w-full rounded-md bg-muted/50 pl-9 text-sm focus:border-primary-500 focus:outline-none focus:ring-primary-500 placeholder:text-white disabled:cursor-not-allowed disabled:opacity-75"
                        placeholder="Cari Game, Item, Voucher"
                        id="searchProdsdekstop"
                        role="combobox"
                        name="q"
                        aria-expanded="false"
                        aria-autocomplete="list"
                        aria-controls="combobox-options-:r4i:"
                        tabindex="0"
                        aria-label="Cari produk"
                    />
                    <ul class="resultsearchdekstop absolute top-full left-0 w-full max-h-80 scroll-py-2 divide-y divide-gray-500 divide-opacity-10 overflow-y-auto bg-primary-x backdrop-blur shadow-md rounded-md z-30"></ul>
                </div>
            </div>

            <button
                x-on:click="isSearchModalOpen = true"
                type="button"
                class="text-sm lg:hidden font-medium text-white border border-secondary-600 outline-none duration-300 hover:bg-secondary-500 focus:bg-secondary-500 focus-visible:bg-secondary-500 h-9 rounded-xl px-3 py-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 sm:h-4 sm:w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
            </button>
            <main class="relative">
                <div id="app"></div>
            </main>
