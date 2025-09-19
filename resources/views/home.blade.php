<x-layouts>

    @include('partials.sliders')
    <div class="flex flex-col gap-y-8 pb-8 pt-4 sm:p-0 md:pt-8">
        @include('partials.popular-list')
        <section id="mobile-game" class="relative w-full overflow-hidden pb-6 md:pb-8 lg:pb-10 bg-secondary-950">
            <div class="container mx-auto">
                <!-- Tab Product -->
                <div class="flex items-center gap-2">
                    <x-scroll_button direction="left" />
                    <div class="tabs-container flex overflow-x-auto scroll-smooth">
                        <x-category_tab category="game" active>Topup Game</x-category_tab>
                        <x-category_tab category="app">App premium</x-category_tab>
                        <x-category_tab category="emoney">E wallet</x-category_tab>
                        <x-category_tab category="pulsa">Pulsa & data</x-category_tab>
                    </div>
                    <x-scroll_button direction="right" />
                </div>
                <!-- Tab Product End -->
                <div class="my-8">
                    <div id="headlessui-tabs-panel-game" role="tabpanel" aria-labelledby="headlessui-tabs-tab-game" data-tabs-content style="display: none;">
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 sm:gap-x-6 sm:gap-y-8 lg:grid-cols-5 xl:grid-cols-6" id="game">
                            <x-item_collection />
                            <x-item_collection />
                            <x-item_collection />
                            <x-item_collection />
                            <x-item_collection />
                        </div>
                        <div class="text-center mt-3" id="buttonContainer2">
                            <div class="justify-content-center">
                                <button
                                    class="inline-flex items-center justify-center melpazoom rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-murky-800/75 disabled:cursor-not-allowed disabled:opacity-75 lg:border lg:border-murky-800/75 lg:bg-transparent lg:hover:bg-murky-800"
                                    id="showAllButton2"
                                    aria-label="Tampilkan Lainnya"
                                    type="button"
                                    >
                                Tampilkan Lainnya...
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="headlessui-tabs-panel-app" role="tabpanel" aria-labelledby="headlessui-tabs-tab-app" data-tabs-content style="display: none;">
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 sm:gap-x-6 sm:gap-y-8 lg:grid-cols-5 xl:grid-cols-6"></div>
                    </div>
                    <div id="headlessui-tabs-panel-emoney" role="tabpanel" aria-labelledby="headlessui-tabs-tab-emoney" data-tabs-content style="display: none;">
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 sm:gap-x-6 sm:gap-y-8 lg:grid-cols-5 xl:grid-cols-6"></div>
                    </div>
                    <div id="headlessui-tabs-panel-pulsa" role="tabpanel" aria-labelledby="headlessui-tabs-tab-pulsa" data-tabs-content style="display: none;">
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 sm:gap-x-6 sm:gap-y-8 lg:grid-cols-5 xl:grid-cols-6">
                            <a href="id/axis.html" class="melpazoom">
                                <div class="group category-item relative overflow-hidden rounded-xl bg-muted transition-transform duration-300 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-900" style="display: block;">
                                    <div class="w-full aspect-square">
                                        <img
                                            alt="AXIS"
                                            fetchpriority="high"
                                            decoding="async"
                                            data-nimg="1"
                                            class="h-full w-full object-cover object-center"
                                            srcset="/assets/thumbnail/31d5a34c-1f54-4258-a2e8-24af07c5f6ba.webp"
                                            src="assets/thumbnail/31d5a34c-1f54-4258-a2e8-24af07c5f6ba.webp"
                                            style="color: transparent;"
                                            />
                                    </div>
                                    <div class="bg-murky-900 py-2">
                                        <div class="flex flex-col px-3 py-1">
                                            <h2 class="truncate text-sm font-semibold text-foreground sm:text-base">AXIS</h2>
                                            <p class="truncate text-xxs text-foreground sm:text-xs">PT XL Axiata Tbk</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="id/byu.html" class="melpazoom">
                                <div
                                    class="group category-item relative overflow-hidden rounded-xl bg-muted transition-transform duration-300 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-900"
                                    style="display: block;"
                                    >
                                    <div class="w-full aspect-square">
                                        <img
                                            alt="by.U"
                                            fetchpriority="high"
                                            decoding="async"
                                            data-nimg="1"
                                            class="h-full w-full object-cover object-center"
                                            srcset="/assets/thumbnail/2e6a3fce-efd0-4890-abbe-1081c75dc16f.webp"
                                            src="assets/thumbnail/2e6a3fce-efd0-4890-abbe-1081c75dc16f.webp"
                                            style="color: transparent;"
                                            />
                                    </div>
                                    <div class="bg-murky-900 py-2">
                                        <div class="flex flex-col px-3 py-1">
                                            <h2 class="truncate text-sm font-semibold text-foreground sm:text-base">by.U</h2>
                                            <p class="truncate text-xxs text-foreground sm:text-xs">Telkomsel</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="id/indosat.html" class="melpazoom">
                                <div
                                    class="group category-item relative overflow-hidden rounded-xl bg-muted transition-transform duration-300 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-900"
                                    style="display: block;"
                                    >
                                    <div class="w-full aspect-square">
                                        <img
                                            alt="INDOSAT"
                                            fetchpriority="high"
                                            decoding="async"
                                            data-nimg="1"
                                            class="h-full w-full object-cover object-center"
                                            srcset="/assets/thumbnail/e99ca93f-8866-4fa7-ad9e-5f1418259633.webp"
                                            src="assets/thumbnail/e99ca93f-8866-4fa7-ad9e-5f1418259633.webp"
                                            style="color: transparent;"
                                            />
                                    </div>
                                    <div class="bg-murky-900 py-2">
                                        <div class="flex flex-col px-3 py-1">
                                            <h2 class="truncate text-sm font-semibold text-foreground sm:text-base">INDOSAT</h2>
                                            <p class="truncate text-xxs text-foreground sm:text-xs">PT Indosat Tbk</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="id/telkomsel.html" class="melpazoom">
                                <div
                                    class="group category-item relative overflow-hidden rounded-xl bg-muted transition-transform duration-300 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-900"
                                    style="display: block;"
                                    >
                                    <div class="w-full aspect-square">
                                        <img
                                            alt="TELKOMSEL"
                                            fetchpriority="high"
                                            decoding="async"
                                            data-nimg="1"
                                            class="h-full w-full object-cover object-center"
                                            srcset="/assets/thumbnail/70afd9ec-bf9f-4ff2-89ed-99a3f61c1bdf.webp"
                                            src="assets/thumbnail/70afd9ec-bf9f-4ff2-89ed-99a3f61c1bdf.webp"
                                            style="color: transparent;"
                                            />
                                    </div>
                                    <div class="bg-murky-900 py-2">
                                        <div class="flex flex-col px-3 py-1">
                                            <h2 class="truncate text-sm font-semibold text-foreground sm:text-base">TELKOMSEL</h2>
                                            <p class="truncate text-xxs text-foreground sm:text-xs">PT Telekomunikasi Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const panelTopup = document.getElementById("game");
                const items = panelTopup.querySelectorAll(".category-item");
                const showAllButton = document.getElementById("showAllButton2");
                const buttonContainer = document.getElementById("buttonContainer2");
            
                let visibleItems = 10;
            
                function updateVisibility() {
                    items.forEach((item, index) => {
                        item.style.display = index < visibleItems ? "block" : "none";
                    });
            
                    if (items.length <= 12) {
                        buttonContainer.style.display = "none";
                    } else {
                        buttonContainer.style.display = visibleItems >= items.length ? "none" : "block";
                    }
                }
            
                updateVisibility();
            
                showAllButton.addEventListener("click", () => {
                    visibleItems += 12;
                    updateVisibility();
                });
            });
        </script>

        @include('partials.popup')
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="-mt-8 transition delay-150 duration-300 ease-in-out print:hidden md:-mt-24">
            <path
                d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z"
                stroke="none"
                stroke-width="0"
                fill="#000"
                fill-opacity="1"
                class="path-0 transition-all bg-gradient-to-l delay-150 duration-300 ease-in-out"
                >
            </path>
        </svg>
    </div>

</x-layouts>