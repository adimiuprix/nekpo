<div class="relative z-50" role="dialog" tabindex="-1" x-show="isSearchModalOpen" x-on:click.away="isSearchModalOpen = false" x-cloak x-transition>
    <div class="fixed inset-0 z-50 overflow-hidden p-4 py-20 sm:py-20 sm:px-6 md:p-20">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity opacity-100" x-show="isSearchModalOpen" x-cloak x-on:click="isSearchModalOpen=false"></div>
        <div
            class="mx-auto max-w-2xl transform divide-y divide-gray-500 divide-opacity-10 overflow-hidden rounded-md bg-murky-700 bg-opacity-80 shadow-2xl ring-1 ring-black ring-opacity-5 backdrop-blur backdrop-filter transition-all opacity-100 scale-100"
            id="dialog-panel-:r4g:"
            data-state="open"
        >
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-white text-opacity-40">
                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                </svg>
                <form>
                    <input
                        class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-white focus:ring-0 sm:text-sm"
                        placeholder="Cari Game, item, Voucher"
                        id="searchProds"
                        role="combobox"
                        type="text"
                        name="q"
                        aria-expanded="false"
                        aria-autocomplete="list"
                        value=""
                        aria-controls="combobox-options-:r4i:"
                        tabindex="0"
                    />
                </form>
            </div>
            <ul class="resultsearch max-h-80 scroll-py-2 divide-y divide-gray-500 divide-opacity-10 overflow-y-auto">
                <div class="flex flex-col gap-2 items-center justify-center py-5" id="lottie-container">
                    <span class="text-base text-center opacity-70 py-4">Produk Belum Anda Cari</span>
                </div>
            </ul>
        </div>
    </div>
</div>
