<section class="relative mb-4 bg-transparent py-4 shadow-2xl">
    <div id="hero" class="hero-swiper swiper container swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div id="heroo" class="swiper-wrapper" aria-live="on">
            @foreach ($banners as $index => $banner)
            <div class="swiper-slide swiper-slide-active swiper-slide-next" style="width: 470px; margin-right: 64px;" role="group" aria-label="{{ $index + 1 }} / {{ $banners->count() }}" data-swiper-slide-index="{{ $index }}">
                <img src="{{ asset('public/assets/banner/' . $banner->image) }}" class="w-full h-auto object-cover rounded-3xl" alt="{{ $banner->title ?? 'banner ' . ($index + 1) }}" />
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="hidden items-center justify-end space-x-2 md:flex"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>

    @include('partials.circle-area')

</section>