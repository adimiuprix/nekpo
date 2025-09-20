{{-- Daftar Populer --}}
<div id="content-melpa" class="container">
    <div class="mb-5">
        <h3 class="text-lg font-semibold leading-relaxed tracking-wider flex">
            <lottie-player src="https://lottie.host/105ce5c3-7e93-4dbc-bfc8-6e4c816320e5/8kDtYqEr0W.json" speed="0.8" style="width: 25px; height: 25px;" loop autoplay direction="1" mode="normal"> </lottie-player>
            POPULER SEKARANG!
        </h3>
        <p class="pl-6 text-xs">Beberapa produk yang paling populer saat ini.</p>
    </div>
    <div class="grid grid-cols-2 gap-3 md:gap-4 lg:grid-cols-3 mt-3">
        @foreach ($populars as $pop)
        <x-populers :product="$pop->product" :vendor="$pop->vendor" />
        @endforeach
    </div>
</div>
{{-- Daftar Populer --}}