<div class="rounded-xl bg-murky-800 shadow-2xl" id="section-nominal">
    <div class="flex border-b border-murky-600">
        <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
            <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                <span class="font-bold text-xl italic">2</span>
            </div>
            <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Pilih Nominal Topup</h3>
        </div>
    </div>

    <div id="paketList" x-data="{ selectedPaket: 0, selectedProduct: '' }" class="p-4 sm:p-6">
        <h3 class="font-semibold mt-4">Pilih Paket</h3>

        <!-- Tombol Pilihan -->
        <div class="scroll-container">
            <button x-on:click="selectedPaket = 0" :class="selectedPaket === 0 ? 'button-3d active' : 'button-3d'">Semua</button>
            @foreach ($product->bundles as $bundle)
            <button x-on:click="selectedPaket = {{ $bundle->id }}" :class="selectedPaket === {{ $bundle->id }} ? 'button-3d active' : 'button-3d'">{{ $bundle->name }}</button>
            @endforeach
        </div>

        <!-- Data Paket -->
        <div id="itemList" class="flex flex-col space-y-4 sm:p-1">

            <!-- Semua Paket -->
            <section x-show="selectedPaket === 0" x-transition>
                @foreach ($product->bundles as $bundle)
                <h3 class="font-semibold mt-4">{{ $bundle->name }}</h3>
                <div id="radiogroup-all-{{ $bundle->id }}" 
                     role="radiogroup" 
                     aria-labelledby="label-all-{{ $bundle->id }}">
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($bundle->items as $item)
                            <x-offer id="{{ $item->id }}" name="{{ $item->name }}" price="{{ $item->price }}" />
                        @endforeach
                    </div>
                </div>
                @endforeach
            </section>

            <!-- Bundle tertentu (dinamis) -->
            @foreach ($product->bundles as $bundle)
            <section x-show="selectedPaket === {{ $bundle->id }}" x-transition>
                <h3 class="font-semibold mt-4">{{ $bundle->name }}</h3>
                <div id="radiogroup-{{ $bundle->id }}" 
                     role="radiogroup" 
                     aria-labelledby="label-{{ $bundle->id }}">
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($bundle->items as $item)
                            <x-offer id="{{ $item->id }}" name="{{ $item->name }}" price="{{ $item->price }}" />
                        @endforeach
                    </div>
                </div>
            </section>
            @endforeach

        </div>

    </div>
</div>
