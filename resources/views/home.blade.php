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
                        @foreach($categories as $cat)
                        <x-category_tab 
                            category="{{ $cat->child }}" 
                            :active="$loop->first">
                            {{ $cat->name }}
                        </x-category_tab>
                        @endforeach
                    </div>
                    <x-scroll_button direction="right" />
                </div>
                <!-- Tab Product End -->

                <div class="my-8">
                    @foreach($categories as $cat)
                        <div 
                            id="headlessui-tabs-panel-{{ $cat->child }}" 
                            role="tabpanel" 
                            aria-labelledby="headlessui-tabs-tab-{{ $cat->child }}" 
                            data-tabs-content
                            style="{{ $loop->first ? '' : 'display: none;' }}">
                            
                            <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 sm:gap-x-6 sm:gap-y-8 lg:grid-cols-5 xl:grid-cols-6" id="game-{{ $cat->id }}">
                                @foreach($cat->products as $product)
                                    <x-item_collection :product=$product />
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


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