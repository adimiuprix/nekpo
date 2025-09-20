@props(['product'])
<a href="" class="melpazoom">
    <div
        class="group category-item relative overflow-hidden rounded-xl bg-muted transition-transform duration-300 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-900"
        style="display: block;"
        >
        <div class="w-full aspect-square">
            <img
                alt="FREE FIRE"
                data-nimg="{{ $product->id }}"
                class="h-full w-full object-cover object-center"
                src="{{ asset('public/assets/thumbnail/' . ltrim($product->image_path, '/')) }}"
                style="color: transparent;"
                />
        </div>
        <div class="bg-murky-900 py-2">
            <div class="flex flex-col px-3 py-1">
                <h2 class="truncate text-sm font-semibold text-foreground sm:text-base">{{ $product->name }}</h2>
                <p class="truncate text-xxs text-foreground sm:text-xs">Garena</p>
            </div>
        </div>
    </div>
</a>
<style>
    .category-item:hover {
    transform: rotate(3deg);
    }
</style>