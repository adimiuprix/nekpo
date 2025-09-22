@props(['id', 'name', 'price'])
<div
    x-bind:class="{ 'ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': selectedProduct === '{{ $id }}', 'bg-murky-200': selectedProduct !== '{{ $id }}' }"
    data-layanan="Startlight Member"
    class="relative flex product-list cursor-pointer rounded-xl border border-transparent bg-murky-200 p-2.5 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800"
    id="product-{{ $id }}"
    product-id="{{ $id }}"
    role="radio"
    aria-checked="false"
    name="nominal"
    value="{{ $id }}"
    tabindex="{{ $id }}"
    aria-labelledby="label-{{ $id }}"
    aria-describedby="description-{{ $id }}"
    x-on:click="selectedProduct = '{{ $id }}'"
>
    <input type="radio" name="nominal" value="{{ $id }}" class="peer hidden">
    <span class="flex flex-1">
        <span class="flex flex-col justify-between">
            <span class="trunc block text-xs text-murky-800 font-semibold" id="namalayanan">{{ $name }}</span>
            <div>
                <span class="mt-1 flex items-center text-xs font-semibold text-murky-600 harga">Rp{{ $price }}</span>
            </div>
        </span>
    </span>
    <div class="flex aspect-square w-8 items-center">
        <img alt="Startlight Member" width="300" height="300" class="object-contain object-right" sizes="80vh" x-bind:class="{ '': selectedProduct === '{{ $id }}', '': selectedProduct !== '{{ $id }}' }" src="/assets/product_logo/btVKAaXvDBxzMk3.webp" style="color: transparent;">
    </div>
</div>