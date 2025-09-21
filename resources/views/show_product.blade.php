<x-layouts>
<div class="load"></div>
<div class="relative h-56 w-full bg-murky-800 lg:h-[340px]">
    <img src="{{ asset('assets/banner_game/1239D2F64D74D301CC8F.webp') }}" class="object-cover object-center" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"/>
    <div class="container relative top-10 z-20 flex h-full w-full flex-col justify-end gap-4 py-4 md:top-[5rem] lg:py-8">
        <article class="flex items-start gap-4">
            <div class="product-thumbnail-container">
                <img src="{{ asset('assets/thumbnail/clash_of_clans-14a2-original.webp') }}" width="300" height="300" class="z-20 -mb-14 aspect-square w-32 rounded-2xl object-cover shadow-2xl md:-mb-20 md:w-60" style="color: transparent;" alt="clash_of_clans-14a2-original">
            </div>
        </article>
    </div>
</div>
<div class="bg-title-product min-h-[120px] shadow-2xl md:min-h-[140px]">
    <div class="container">
        <div class="ml-[8.5rem] pt-4 md:ml-[15.5rem] md:pt-5">
            <div>
                <h1 class="truncate text-base font-semibold text-white md:text-2xl">{{ $product->name }}</h1>
                <p class="truncate text-xs text-white md:text-base">{{ $product->vendor->name }}</p>
            </div>
            <div class="py-4 sm:py-0 hidden md:block sm:block lg:block">
                <div class="mt-4 flex flex-col gap-2 text-xs sm:flex-row sm:items-center sm:gap-8 sm:text-sm/6">
                    <div class="flex items-center gap-2">
                        <img alt="" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" class="ml-1.5 size-6" src="../assets/image/lightning.gif" style="color: transparent;">
                        <span class="font-semibold ">Instant</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img alt="" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="ml-1.5 size-6" src="../assets/image/contact-support.gif" style="color: transparent;">
                        <span class="font-semibold ">Layanan 24/7</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <img alt="Secure" loading="lazy" width="24" height="24" decoding="async" class="ml-1.5 size-6" src="../assets/image/secure.gif" style="color: transparent;">
                        <span class="font-semibold whitespace-nowrap">Pembayaran Aman!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 sm:py-0 sm:hidden md:hidden lg:hidden">
            <div class="mt-4 flex gap-2 justify-evenly text-xs sm:flex-row sm:items-center sm:gap-8 sm:text-sm/6">
                <div class="flex items-center gap-1">
                    <img alt="" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" class="ml-1.5 size-6" src="../assets/image/lightning.gif" style="color: transparent;">
                    <span class="font-semibold whitespace-nowrap">Instant</span>
                </div>
                <div class="flex items-center gap-2">
                    <img alt="" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="ml-1.5 size-6" src="../assets/image/contact-support.gif" style="color: transparent;">
                    <span class="font-semibold ">Layanan 24/7</span>
                </div>
                <div class="flex items-center gap-1">
                    <img alt="Secure" loading="lazy" width="24" height="24" decoding="async" class="ml-1.5 size-6" src="../assets/image/secure.gif" style="color: transparent;">
                    <span class="font-semibold whitespace-nowrap">Pembayaran Aman!</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container grid grid-cols-3 gap-8 pb-8 pt-8">
    <div class="col-span-3 md:col-span-1">
        <div class="sticky top-24 flex flex-col space-y-4">
            <button
                class="flex w-full justify-between rounded-lg bg-murky-800 px-4 py-2 text-left text-sm font-medium text-white duration-200 ease-in-out focus:outline-none"
                id="toggleButton" type="button" aria-expanded="false" data-headlessui-state="open"
                aria-controls="headlessui-disclosure-panel-:r6r:">
                <span>Deskripsi dan cara melakukan transaksi</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                    class="rotate-180 transform h-5 w-5 text-white">
                    <path fill-rule="evenodd"
                        d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="dropdownContent" class="pt-1 text-sm text-murky-200 hidden">
                <div class="rounded-lg bg-murky-800">
                    <div class="prose prose-sm px-4 py-2 pb-8 text-xs text-white sm:px-6">
                        <div>
                            <p>Cara Topup :</p>
                            <ol>
                                <li>Masukkan ID</li>
                                <li>Pilih nominal</li>
                                <li>Pilih metode pembayaran</li>
                                <li>Tulis kode promo (Jika ada)</li>
                                <li>Masukkan No. whatsapp</li>
                                <li>Klik pesan sekarang &amp; lakukan pembayaran</li>
                                <li>Selesai</li>
                            </ol>
                        </div>
                        <div class="mt-2 flex flex-col border-t border-dashed  text-card-foreground">
                            <p> Note:&nbsp;<br> Jika Mengalami Kendala Silahkan hub CS <a
                                href="https://t.me/mongedev" target="_blank">Telegram</a> dan CS <a href="https://wa.me/" target="_blank">WhatsApp</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 hidden rounded-xl bg-murky-800 shadow-2xl md:block">
                <div class="flex border-b border-murky-600">
                    <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
                        <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16"
                            style="border-top-left-radius: 12px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Ulasan
                        </h3>
                    </div>
                </div>
                <div class="flow-root p-6">
                    <div class="flex flex-col overflow-hidden ">
                        <div class="mx-6 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" class="h-8 w-8 flex-shrink-0 text-yellow-400">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div><span class="text-5xl text-besar">0.0</span> / 5.0
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="mx-6 flex items-center justify-center text-xs font-bold">
                                0% pembeli merasa puas dengan produk ini.
                            </div>
                            <div class="mx-6 flex items-center justify-center gap-2 text-xs">Dari 0
                                Ulasan.
                            </div>
                        </div>
                    </div>
                    <style>
                        .progress {
                        transition: width 0.5s ease-in-out;
                        }
                    </style>
                    <div class="flex flex-col overflow-hidden pt-6">
                        <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                            <li class="rating-item"
                                style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div class="rating-value"
                                    style="width: 30px; text-align: right; margin-right: 10px;">
                                    5
                                </div>
                                <div class="star-rating"
                                    style="display: flex; align-items: center; margin-right: 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true"
                                        style="height: 20px; width: 20px; color: #ffc107;">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="bar"
                                    style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                    <div class="progress"
                                        style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                    </div>
                                </div>
                                <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                    0
                                </div>
                            </li>
                        </ul>
                        <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                            <li class="rating-item"
                                style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div class="rating-value"
                                    style="width: 30px; text-align: right; margin-right: 10px;">
                                    4
                                </div>
                                <div class="star-rating"
                                    style="display: flex; align-items: center; margin-right: 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true"
                                        style="height: 20px; width: 20px; color: #ffc107;">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="bar"
                                    style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                    <div class="progress"
                                        style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                    </div>
                                </div>
                                <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                    0
                                </div>
                            </li>
                        </ul>
                        <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                            <li class="rating-item"
                                style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div class="rating-value"
                                    style="width: 30px; text-align: right; margin-right: 10px;">
                                    3
                                </div>
                                <div class="star-rating"
                                    style="display: flex; align-items: center; margin-right: 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true"
                                        style="height: 20px; width: 20px; color: #ffc107;">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="bar"
                                    style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                    <div class="progress"
                                        style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                    </div>
                                </div>
                                <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                    0
                                </div>
                            </li>
                        </ul>
                        <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                            <li class="rating-item"
                                style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div class="rating-value"
                                    style="width: 30px; text-align: right; margin-right: 10px;">
                                    2
                                </div>
                                <div class="star-rating"
                                    style="display: flex; align-items: center; margin-right: 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true"
                                        style="height: 20px; width: 20px; color: #ffc107;">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="bar"
                                    style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                    <div class="progress"
                                        style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                    </div>
                                </div>
                                <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                    0
                                </div>
                            </li>
                        </ul>
                        <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                            <li class="rating-item"
                                style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div class="rating-value"
                                    style="width: 30px; text-align: right; margin-right: 10px;">
                                    1
                                </div>
                                <div class="star-rating"
                                    style="display: flex; align-items: center; margin-right: 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true"
                                        style="height: 20px; width: 20px; color: #ffc107;">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="bar"
                                    style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                    <div class="progress"
                                        style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                    </div>
                                </div>
                                <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                    0
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="py-4">
                        <div class="rounded-md border-l-4 border-yellow-400 bg-yellow-100 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        class="h-5 w-5 text-yellow-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">Belum ada ulasan dan penilaian.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end pt-5 mt-5">
                        <a class="inline-flex items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input hover:bg-accent/75 hover:text-accent-foreground h-8 rounded-md px-4 bg-secondary/50 pr-3 flex items-center gap-2"
                            type="button" href="reviews.html" style="outline: none;">
                            <span>Lihat semua ulasan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right h-4 w-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="col-span-3 flex flex-col space-y-8 md:col-span-2">
        <div class="rounded-xl bg-murky-800 shadow-2xl" id="section-input">
            <input type="hidden" id="nominal">
            <input type="hidden" id="metode">
            <input type="hidden" id="ktg_tipe" value="game">
            <div class="flex border-b border-murky-600">
                <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
                    <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                        <span class="font-bold text-xl italic">1</span>
                    </div>
                    <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Masukkan Data Akun Kamu</h3>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 p-4 sm:px-6 sm:pb-4">
                <div>
                    <label for="user_id"
                        class="block text-xs font-medium text-white pb-2"></label>
                    <div class="flex flex-col items-start">
                        <input
                            class="relative block w-full appearance-none border border-murky-600 bg-melpa-800 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 rounded-md"
                            type="number" id="user_id" name="user_id"
                            placeholder="Masukkan ID Game" />
                    </div>
                </div>
            </div>
            <div class="px-4 pb-4 text-[10px] sm:px-6 sm:pb-6">
                <div class="flex items-center gap-2 rounded-md bg-primary-5400 px-4 py-3 text-xs/6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-4 w-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4"></path>
                        <path d="M12 8h.01"></path>
                    </svg>
                    <div>
                        <p style="color: #000;">
                        <p><em>Kesalahan dalam input ID bukan merupakan tanggung jawab dari kami, jadi pastikan anda sudah input ID dengan benar!</em></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end section input-->
        <div class="rounded-xl bg-murky-800 shadow-2xl" id="section-nominal">
            <div class="flex border-b border-murky-600">
                <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
                    <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                        <span class="font-bold text-xl italic">2</span>
                    </div>
                    <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Pilih Nominal Topup</h3>
                </div>
            </div>
            <div id="paketList" x-data="{ selectedPaket: 'all', selectedProduct: '' }" class="p-4 sm:p-6">
                <h3 class="font-semibold mt-4">Pilih Paket</h3>
                <!-- Tombol Pilihan -->
                <div class="scroll-container">
                    <button @click="selectedPaket = 'all'" class="button-3d">Semua</button>
                    <button @click="selectedPaket = 0" class="button-3d">
                    💎 Top Up Instant
                    </button>
                </div>
                <!-- Data Semua Paket -->
                <div id="itemList" class="flex flex-col space-y-4 sm:p-1">
                    <!-- Semua Paket -->
                    <div x-show="selectedPaket === 'all'">
                        <section>
                            <h3 class="font-semibold mt-4">💎 Top Up Instant</h3>
                            <div id="radiogroup-0" role="radiogroup" aria-labelledby="label-0">
                                <div id="specialList" class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3" role="none">
                                    <div 
                                        x-bind:class="{ 'ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': selectedProduct === '1434', 'bg-murky-200': selectedProduct !== '1434' }" 
                                        data-layanan="Clash of Clans 80 Gems" 
                                        class="relative flex product-list cursor-pointer rounded-xl border border-transparent bg-murky-200 p-2.5 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out" 
                                        id="product-1434" 
                                        product-id="1434" 
                                        role="radio" 
                                        aria-checked="false" 
                                        name="nominal" 
                                        value="1434" 
                                        tabindex="0" 
                                        aria-labelledby="label-1434" 
                                        aria-describedby="description-1434" 
                                        @click="selectedProduct = '1434'">
                                        <input type="radio" name="nominal" value="1434" class="peer hidden" />
                                        <span class="flex flex-1">
                                            <span class="flex flex-col justify-between">
                                                <span class="trunc block text-xs text-murky-800 font-semibold" id="namalayanan">
                                                Clash of Clans 80 Gems
                                                </span>
                                                <div>
                                                    <span
                                                        class="mt-1 flex items-center text-xs font-semibold text-murky-600 harga">Rp&nbsp;17.250</span>
                                                </div>
                                            </span>
                                        </span>
                                        <div class="flex aspect-square w-8 items-center">
                                            <img alt="Clash of Clans 80 Gems" fetchpriority="high"
                                                width="300" height="300" decoding="async"
                                                data-nimg="1" class="object-contain object-right"
                                                sizes="80vh"
                                                x-bind:class="{ '': selectedProduct === '1434', '': selectedProduct !== '1434' }"
                                                src="../assets/product_logo/XRB3BIYtsk113cy.webp"
                                                style="color: transparent;" />
                                        </div>
                                    </div>
                                    <div 
                                        x-bind:class="{ 'ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': selectedProduct === '1433', 'bg-murky-200': selectedProduct !== '1433' }" 
                                        data-layanan="Clash of Clans 500 Gems" 
                                        class="relative flex product-list cursor-pointer rounded-xl border border-transparent bg-murky-200 p-2.5 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out" 
                                        id="product-1433" 
                                        product-id="1433" 
                                        role="radio" 
                                        aria-checked="false" 
                                        name="nominal" 
                                        value="1433" 
                                        tabindex="0" 
                                        aria-labelledby="label-1433" 
                                        aria-describedby="description-1433" 
                                        @click="selectedProduct = '1433'">
                                        <input type="radio" name="nominal" value="1433" class="peer hidden" />
                                        <span class="flex flex-1">
                                            <span class="flex flex-col justify-between">
                                                <span class="trunc block text-xs text-murky-800 font-semibold" id="namalayanan">
                                                Clash of Clans 500 Gems
                                                </span>
                                                <div>
                                                    <span
                                                        class="mt-1 flex items-center text-xs font-semibold text-murky-600 harga">Rp&nbsp;84.050</span>
                                                </div>
                                            </span>
                                        </span>
                                        <div class="flex aspect-square w-8 items-center">
                                            <img alt="Clash of Clans 500 Gems" fetchpriority="high"
                                                width="300" height="300" decoding="async"
                                                data-nimg="1" class="object-contain object-right"
                                                sizes="80vh"
                                                x-bind:class="{ '': selectedProduct === '1433', '': selectedProduct !== '1433' }"
                                                src="../assets/product_logo/XRB3BIYtsk113cy.webp"
                                                style="color: transparent;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Paket Berdasarkan Pilihan -->
                    <section 
                        x-show="selectedPaket === 0" 
                        x-transition 
                        :style="selectedPaket === 0 ? '' : 'display: none;'"
                        style="transform-origin: center center; transition-delay: 0s; transition-property: opacity, transform; transition-duration: 0.15s; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); opacity: 1; transform: scale(1);">
                        <h3 class="font-semibold mt-4">💎 Top Up Instant</h3>
                        <div id="radiogroup-0" role="radiogroup" aria-labelledby="label-0">
                            <div id="specialList" class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3" role="none">
                                <div 
                                    x-bind:class="{ 'ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': selectedProduct === '1434', 'bg-murky-200': selectedProduct !== '1434' }" 
                                    data-layanan="Clash of Clans 80 Gems" 
                                    class="relative flex product-list cursor-pointer rounded-xl border border-transparent bg-murky-200 p-2.5 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out" 
                                    id="product-1434" 
                                    product-id="1434" 
                                    role="radio" 
                                    aria-checked="false" 
                                    name="nominal" 
                                    value="1434" 
                                    tabindex="0" 
                                    aria-labelledby="label-1434" 
                                    aria-describedby="description-1434" 
                                    @click="selectedProduct = '1434'">
                                    <input type="radio" name="nominal" value="1434" class="peer hidden" />
                                    <span class="flex flex-1">
                                        <span class="flex flex-col justify-between">
                                            <span class="trunc block text-xs text-murky-800 font-semibold" id="namalayanan">
                                            Clash of Clans 80 Gems
                                            </span>
                                            <div>
                                                <span
                                                    class="mt-1 flex items-center text-xs font-semibold text-murky-600 harga">Rp&nbsp;17.250</span>
                                            </div>
                                        </span>
                                    </span>
                                    <div class="flex aspect-square w-8 items-center">
                                        <img alt="Clash of Clans 80 Gems" fetchpriority="high"
                                            width="300" height="300" decoding="async"
                                            data-nimg="1" class="object-contain object-right"
                                            sizes="80vh"
                                            x-bind:class="{ '': selectedProduct === '1434', '': selectedProduct !== '1434' }"
                                            src="../assets/product_logo/XRB3BIYtsk113cy.webp"
                                            style="color: transparent;" />
                                    </div>
                                </div>
                                <div 
                                    x-bind:class="{ 'ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': selectedProduct === '1433', 'bg-murky-200': selectedProduct !== '1433' }" 
                                    data-layanan="Clash of Clans 500 Gems" 
                                    class="relative flex product-list cursor-pointer rounded-xl border border-transparent bg-murky-200 p-2.5 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out" 
                                    id="product-1433" 
                                    product-id="1433" 
                                    role="radio" 
                                    aria-checked="false" 
                                    name="nominal" 
                                    value="1433" 
                                    tabindex="0" 
                                    aria-labelledby="label-1433" 
                                    aria-describedby="description-1433" 
                                    @click="selectedProduct = '1433'">
                                    <input type="radio" name="nominal" value="1433" class="peer hidden" />
                                    <span class="flex flex-1">
                                        <span class="flex flex-col justify-between">
                                            <span class="trunc block text-xs text-murky-800 font-semibold" id="namalayanan">
                                            Clash of Clans 500 Gems
                                            </span>
                                            <div>
                                                <span
                                                    class="mt-1 flex items-center text-xs font-semibold text-murky-600 harga">Rp&nbsp;84.050</span>
                                            </div>
                                        </span>
                                    </span>
                                    <div class="flex aspect-square w-8 items-center">
                                        <img alt="Clash of Clans 500 Gems" fetchpriority="high"
                                            width="300" height="300" decoding="async"
                                            data-nimg="1" class="object-contain object-right"
                                            sizes="80vh"
                                            x-bind:class="{ '': selectedProduct === '1433', '': selectedProduct !== '1433' }"
                                            src="../assets/product_logo/XRB3BIYtsk113cy.webp"
                                            style="color: transparent;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="popup-structure popup-slide flex min-h-full items-center justify-center p-4 text-center sm:p-0"
            id="popupppp">
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                    <div class="relative w-full transform overflow-hidden rounded-lg bg-murky-900 text-left shadow-xl transition-all sm:my-8 sm:max-w-3xl !rounded-2xl opacity-100 translate-y-0 sm:scale-100"
                        id="headlessui-dialog-panel-weekly-diamond-pass" data-headlessui-state="open">
                        <div class="absolute right-0 top-0 block pr-4 pt-4">
                        </div>
                        <div class="w-full pb-4 flex flex-col items-center justify-center">
                            <h2 class="max-w-xl pt-1 text-center text-sm font-semibold text-white mt-4">WEEKLY
                                DIAMOND PASS
                            </h2>
                            <div class="object-center mt-4 flex items-center justify-center">
                                <img src="../assets/product_logo/HHXD3iCbM3Tu2hv.html" class="object-center"
                                    style="color: transparent; width: 30%; height: auto;" alt="" />
                            </div>
                            <div
                                class="w-full max-w-none prose prose-sm px-4 py-4 text-xs text-white flex items-center justify-center">
                                <div
                                    class="border-murky-600 prose prose-sm flex w-full flex-col rounded-xl border border-dashed px-4 py-3 text-xs text-foreground prose-p:my-0" >
                                    <div>
                                        <p class="selectable-text copyable-text iq0m558w g0rxnol2"
                                            dir="ltr"><span class="selectable-text copyable-text">Informasi
                                            Penting Sebelum Pembelian Weekly Daily Pass</span>
                                        </p>
                                        <p class="selectable-text copyable-text iq0m558w g0rxnol2"
                                            dir="ltr">
                                            <span
                                                class="selectable-text copyable-text g33ro0j9 ag95hn57">1.</span><span
                                                class="selectable-text copyable-text"> Batas Maksimal Pembelian:
                                            Pembelian tidak diizinkan jika telah melebihi batas 70
                                            hari.<br /></span>
                                            <span
                                                class="selectable-text copyable-text g33ro0j9 ag95hn57">2.</span><span
                                                class="selectable-text copyable-text"> Kuota Pembelian: Perhatikan
                                            kuota tersedia. Contoh: (5/10) berarti Anda dapat membeli 5 kali
                                            lagi.<br /></span>
                                            <span
                                                class="selectable-text copyable-text g33ro0j9 ag95hn57">3.</span>
                                            <span class="selectable-text copyable-text"> Bonus dari Pembelian:
                                            Setiap pembelian Weekly Diamond Pass menyelesaikan misi topup 100
                                            dan langsung memberikan 80 Diamonds.<br /></span>
                                            <span
                                                class="selectable-text copyable-text g33ro0j9 ag95hn57">4.</span>
                                            <span class="selectable-text copyable-text"> Kebijakan Refund: Jika
                                            pembelian dilakukan setelah mencapai batas maksimal (0/10), uang
                                            akan dikembalikan 90% sebagai konsekuensi.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center bg-secondary px-4 py-2 rounded-xl">
                                <button class="inline-flex items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-8 " type="button" name="popup" id="closePopupButton">
                                OK, Saya Mengerti
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-xl bg-murky-800 shadow-2xl" id="section-payment-channel">
            <div class="flex border-b border-murky-600">
                <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
                    <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                        <span class="font-bold text-xl italic">3</span>
                    </div>
                    <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Pilih Metode Pembayaran</h3>
                </div>
            </div>
            <div id="skeleton-loaderr"
                class="skeleton-loader grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 px-4 mt-4 py-4">
                <div class="ph-item melpaaaaaa">
                    <div class="ph-col-12">
                        <div class="ph-picture"></div>
                        <div class="ph-row">
                            <div class="ph-col-12"></div>
                        </div>
                    </div>
                </div>
                <div class="ph-item melpaaaaaa">
                    <div class="ph-col-12">
                        <div class="ph-picture"></div>
                        <div class="ph-row">
                            <div class="ph-col-12"></div>
                        </div>
                    </div>
                </div>
                <div class="ph-item melpaaaaaa">
                    <div class="ph-col-12">
                        <div class="ph-picture"></div>
                        <div class="ph-row">
                            <div class="ph-col-12"></div>
                        </div>
                    </div>
                </div>
                <div class="ph-item melpaaaaaa">
                    <div class="ph-col-12">
                        <div class="ph-picture"></div>
                        <div class="ph-row">
                            <div class="ph-col-12"></div>
                        </div>
                    </div>
                </div>
            </div>
            <dl id="paymentList" class="flex w-full flex-col space-y-4 p-4 sm:p-6 hidden"
                x-data="{ selected: null, paymentSelected: '' }">
                <!--saldo1-->
                <div x-data="{ showPopup: false}">
                    <div
                        class="relative flex cursor-pointer rounded-xl border border-transparent bg-murky-200 p-3 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out melpa-sabled" @click="showPopup = true">
                        <div class="flex items-center gap-2 max-w-xs">
                            <img src="../assets/image/coin.webp" alt="Coin" width="45"
                                height="40" />
                            <div>
                                <span class="block  text-xs font-semibold text-murky-800 sm:text-sm"
                                    id="headlessui-label-:riu:">CUPU COIN (Bebas Biaya Admin)</span>
                                <p class="block text-xxs text-murky-800 sm:text-xs"
                                    id="SALDO">Rp 0</p>
                            </div>
                        </div>
                        <div class="max-w-xs">
                            <div class="relative text-sm font-semibold text-murky-800 sm:text-base" >
                            </div>
                        </div>
                        <div class="flex aspect-square w-8 items-center">
                            <div
                                class="w-[4rem] absolute aspect-square -top-[9px] -right-[9px] overflow-hidden rounded-sm">
                                <div class="absolute top-0 left-0 bg-orange-500 h-2 w-2"></div>
                                <div class="absolute bottom-0 right-0 bg-orange-500 h-2 w-2"></div>
                                <div
                                    class="absolute block w-square-diagonal py-1 text-center text-xxs font-semibold uppercase bottom-0 right-0 rotate-45 origin-bottom-right shadow-sm bg-orange-500 text-white">
                                    BEST PRICE
                                </div>
                            </div>
                        </div>
                        <div class="popular-tag-container">
                            <div class="popular-tag-content">
                                <div class="rate">🔥LEBIH HEMAT</div>
                            </div>
                            <div class="popular-tag-overlay"></div>
                        </div>
                    </div>
                    <div class="relative z-50 font-sans" x-show="showPopup" x-cloak @click.away="showPopup = false" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-black/80"></div>
                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="text-text-color relative transform overflow-hidden rounded-md border bg-popover px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-sky-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-sky-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path>
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:mt-5">
                                        <h3 class="text-lg font-semibold leading-6">Ups! Kamu Belum Login</h3>
                                        <p class="pt-2 text-sm md:text-base">Untuk Melakukan Pembelian Menggunakan CUPU COIN, Silahkan Login atau Daftar Terlebih Dahulu!</p>
                                    </div>
                                    <div class="mt-5 grid gap-3 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                                        <a href="sign-in.html" target="_blank" class="inline-flex items-center justify-center bg-primary-500 text-primary-foreground hover:bg-primary/90 h-8 rounded-md px-3"> Login </a>
                                        <a href="sign-up.html" target="_blank" class="inline-flex items-center justify-center bg-primary-500 text-primary-foreground hover:bg-primary/90 h-8 rounded-md px-3"> Daftar </a>
                                        <div class="col-span-2">
                                            <button @click="showPopup = false" class="inline-flex items-center justify-center bg-destructive text-destructive-foreground hover:bg-destructive/90 h-8 rounded-md px-3 w-full"> Cancel </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--saldo1-->
                <!--QRIS-->
                <div x-bind:class="{ 'bg-white bj-shadow': paymentSelected === 'QRIS', 'bg-murky-200': paymentSelected !== 'QRIS' }"
                    class="relative flex cursor-pointer method-list rounded-xl border border-transparent bg-murky-200 p-4 shadow-sm outline-none md:p-4 hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                    role="radio" aria-checked="false" method-id="QRIS"
                    name="paymentMethod" @click="paymentSelected = 'QRIS'">
                    <div class="flex items-center gap-2 max-w-xs">
                        <input type="radio" id="method_51" name="paymentMethod"
                            value="QRIS" class="peer hidden" />
                        <label for="method_51"></label>
                        <img src="../assets/payment/Logo%20QRIS.png" alt="qris" width="55"
                            height="40" />
                        <div>
                            <span
                                class="block font-bjcredits text-xs font-semibold text-murky-800 sm:text-sm"
                                id="headlessui-label-:riu:">QRIS</span>
                            <p class="block text-xxs text-murky-800 sm:text-xs"
                                id="QRIS">Rp 0</p>
                        </div>
                    </div>
                    <div class="max-w-xs">
                        <div class="relative text-sm font-semibold text-murky-800 sm:text-base">
                        </div>
                    </div>
                    <div class="flex aspect-square w-8 items-center">
                        <div
                            class="w-[4rem] absolute aspect-square -top-[9px] -right-[9px] overflow-hidden rounded-sm">
                            <div class="absolute top-0 left-0 bg-orange-500 h-2 w-2"></div>
                            <div class="absolute bottom-0 right-0 bg-orange-500 h-2 w-2"></div>
                            <div
                                class="absolute block w-square-diagonal py-1 text-center text-xxs font-semibold uppercase bottom-0 right-0 rotate-45 origin-bottom-right shadow-sm bg-orange-500 text-white">
                                BEST PRICE
                            </div>
                        </div>
                    </div>
                    <div class="popular-tag-container">
                        <div class="popular-tag-content">
                            <div class="rate">🔥LEBIH CEPAT</div>
                        </div>
                        <div class="popular-tag-overlay"></div>
                    </div>
                </div>
                <!--end QRIS-->
                <!-- E-Wallet -->
                <div class="flex w-full transform flex-col justify-between rounded-xl bg-murky-600 text-left text-sm font-medium text-white duration-300 focus:outline-none accordion-header"
                    data-state="">
                    <dt>
                        <button class="w-full disabled:opacity-75" id="disclosure-button-1" type="button"
                            @click="selected !== 3 ? selected = 3 : selected = null" aria-expanded="false"
                            aria-controls="disclosure-panel-1">
                            <div class="flex w-full justify-between px-4 py-2">
                                <span class="transform text-base font-medium leading-7 duration-300">
                                    <div>E-Wallet</div>
                                </span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        class="h-6 w-6 transform duration-300"
                                        x-bind:class="selected == 3 ? 'rotate-180' : 'rotate-0'">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 "
                            x-ref="container1"
                            x-bind:style="selected == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' :
                            'max-height: 0'"
                            style="max-height: 239px;">
                            <div class="px-4 pt-2 pb-4 text-sm text-murky-300" id="disclosure-panel-1">
                                <div id="radiogroup-1" role="radiogroup" aria-labelledby="label-1">
                                    <div id="eWalletList"
                                        class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 xl:grid-cols-3"
                                        role="none">
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'GOPAY', 'bg-murky-200': paymentSelected !== 'GOPAY' }"
                                            method-id="GOPAY"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out "
                                            id="radio-group-GOPAY" role="radio"
                                            aria-checked="false" method-id="GOPAY"
                                            id="method_120" name="paymentMethod"
                                            value="GOPAY" tabindex="0"
                                            aria-labelledby="label-GOPAY:"
                                            aria-describedby="description-GOPAY"
                                            @click="paymentSelected = 'GOPAY'">
                                            <input type="radio" id="method_120"
                                                name="paymentMethod" value="GOPAY"
                                                class="peer hidden" />
                                            <label for="method_120"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Gopay
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="GOPAY"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/64fb349fefc6ce687700ea8724a37d19.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'GOPAY', 'grayscale': paymentSelected !== 'GOPAY' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'OVOPUSH', 'bg-murky-200': paymentSelected !== 'OVOPUSH' }"
                                            method-id="OVOPUSH"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out "
                                            id="radio-group-OVOPUSH" role="radio"
                                            aria-checked="false" method-id="OVOPUSH"
                                            id="method_121" name="paymentMethod"
                                            value="OVOPUSH" tabindex="0"
                                            aria-labelledby="label-OVOPUSH:"
                                            aria-describedby="description-OVOPUSH"
                                            @click="paymentSelected = 'OVOPUSH'">
                                            <input type="radio" id="method_121"
                                                name="paymentMethod" value="OVOPUSH"
                                                class="peer hidden" />
                                            <label for="method_121"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        OVO
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="OVOPUSH"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/Logo_ovo_purple.svg.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'OVOPUSH', 'grayscale': paymentSelected !== 'OVOPUSH' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'SHOPEEPAY', 'bg-murky-200': paymentSelected !== 'SHOPEEPAY' }"
                                            method-id="SHOPEEPAY"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out "
                                            id="radio-group-SHOPEEPAY" role="radio"
                                            aria-checked="false" method-id="SHOPEEPAY"
                                            id="method_122" name="paymentMethod"
                                            value="SHOPEEPAY" tabindex="0"
                                            aria-labelledby="label-SHOPEEPAY:"
                                            aria-describedby="description-SHOPEEPAY"
                                            @click="paymentSelected = 'SHOPEEPAY'">
                                            <input type="radio" id="method_122"
                                                name="paymentMethod" value="SHOPEEPAY"
                                                class="peer hidden" />
                                            <label for="method_122"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Shopee Pay
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="SHOPEEPAY"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/9a8849fb68683ccaed7483d827d07b39.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'SHOPEEPAY', 'grayscale': paymentSelected !== 'SHOPEEPAY' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'DANA', 'bg-murky-200': paymentSelected !== 'DANA' }"
                                            method-id="DANA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out "
                                            id="radio-group-DANA" role="radio"
                                            aria-checked="false" method-id="DANA"
                                            id="method_123" name="paymentMethod"
                                            value="DANA" tabindex="0"
                                            aria-labelledby="label-DANA:"
                                            aria-describedby="description-DANA"
                                            @click="paymentSelected = 'DANA'">
                                            <input type="radio" id="method_123"
                                                name="paymentMethod" value="DANA"
                                                class="peer hidden" />
                                            <label for="method_123"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        DANA
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="DANA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/39dfa0a150297717e71239f0cd215f75.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'DANA', 'grayscale': paymentSelected !== 'DANA' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'LINKAJA', 'bg-murky-200': paymentSelected !== 'LINKAJA' }"
                                            method-id="LINKAJA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out "
                                            id="radio-group-LINKAJA" role="radio"
                                            aria-checked="false" method-id="LINKAJA"
                                            id="method_124" name="paymentMethod"
                                            value="LINKAJA" tabindex="0"
                                            aria-labelledby="label-LINKAJA:"
                                            aria-describedby="description-LINKAJA"
                                            @click="paymentSelected = 'LINKAJA'">
                                            <input type="radio" id="method_124"
                                                name="paymentMethod" value="LINKAJA"
                                                class="peer hidden" />
                                            <label for="method_124"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        LinkAja
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="LINKAJA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/b951de09eee40c57a3b570ecf396f119.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'LINKAJA', 'grayscale': paymentSelected !== 'LINKAJA' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 w-full rounded-b-md bg-murky-300"
                            x-ref="logo3" x-bind:style="selected == 3 ? 'max-height: 0' : 'max-height: 30px'"
                            x-bind:class="selected == 3 ? 'px-0 py-0' : 'px-4 pt-2.5 pb-5'">
                            <div class="flex justify-end gap-x-2">
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/64fb349fefc6ce687700ea8724a37d19.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Gopay" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/Logo_ovo_purple.svg.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="OVO" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/9a8849fb68683ccaed7483d827d07b39.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Shopee Pay" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/39dfa0a150297717e71239f0cd215f75.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="DANA" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/b951de09eee40c57a3b570ecf396f119.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="LinkAja" />
                                </div>
                            </div>
                        </div>
                    </dt>
                </div>
                <!-- Virtual Account -->
                <div class="flex w-full transform flex-col justify-between rounded-xl bg-murky-600 text-left text-sm font-medium text-white duration-300 focus:outline-none accordion-header"
                    data-state="">
                    <dt>
                        <button class="w-full disabled:opacity-75" id="disclosure-button-2" type="button"
                            @click="selected !== 5 ? selected = 5 : selected = null" aria-expanded="false"
                            aria-controls="disclosure-panel-2">
                            <div class="flex w-full justify-between px-4 py-2">
                                <span class="transform text-base font-medium leading-7 duration-300">
                                    <div>Virtual Account</div>
                                </span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        class="h-6 w-6 transform duration-300"
                                        x-bind:class="selected == 5 ? 'rotate-180' : 'rotate-0'">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                            x-ref="container2"
                            x-bind:style="selected == 5 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' :
                            'max-height: 0'"
                            style="max-height: 239px;">
                            <div class="px-4 pt-2 pb-4 text-sm text-murky-300" id="disclosure-panel-2">
                                <div id="radiogroup-2" role="radiogroup" aria-labelledby="label-2">
                                    <div id="virtualAccountList"
                                        class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 xl:grid-cols-3"
                                        role="none">
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'BRIVA', 'bg-murky-200': paymentSelected !== 'BRIVA' }"
                                            method-id="BRIVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-BRIVA" role="radio"
                                            aria-checked="false" method-id="BRIVA"
                                            id="method_126" name="paymentMethod"
                                            value="BRIVA" tabindex="0"
                                            aria-labelledby="label-BRIVA:"
                                            aria-describedby="description-BRIVA"
                                            @click="paymentSelected = 'BRIVA'">
                                            <input type="radio" id="method_126"
                                                name="paymentMethod" value="BRIVA"
                                                class="peer hidden" />
                                            <label for="method_126"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        BRI
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="BRIVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/065303bb0d98a0e72292e93b90045d18.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'BCAVA', 'bg-murky-200': paymentSelected !== 'BCAVA' }"
                                            method-id="BCAVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-BCAVA" role="radio"
                                            aria-checked="false" method-id="BCAVA"
                                            id="method_127" name="paymentMethod"
                                            value="BCAVA" tabindex="0"
                                            aria-labelledby="label-BCAVA:"
                                            aria-describedby="description-BCAVA"
                                            @click="paymentSelected = 'BCAVA'">
                                            <input type="radio" id="method_127"
                                                name="paymentMethod" value="BCAVA"
                                                class="peer hidden" />
                                            <label for="method_127"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        BCA
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="BCAVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/f16b7a44e94da7632dfc672b6dbcf525.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'BNIVA', 'bg-murky-200': paymentSelected !== 'BNIVA' }"
                                            method-id="BNIVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-BNIVA" role="radio"
                                            aria-checked="false" method-id="BNIVA"
                                            id="method_128" name="paymentMethod"
                                            value="BNIVA" tabindex="0"
                                            aria-labelledby="label-BNIVA:"
                                            aria-describedby="description-BNIVA"
                                            @click="paymentSelected = 'BNIVA'">
                                            <input type="radio" id="method_128"
                                                name="paymentMethod" value="BNIVA"
                                                class="peer hidden" />
                                            <label for="method_128"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        BNI
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="BNIVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/ce2ecb5af35f8ed39f3e3eced974a70c.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'MANDIRIVA', 'bg-murky-200': paymentSelected !== 'MANDIRIVA' }"
                                            method-id="MANDIRIVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-MANDIRIVA" role="radio"
                                            aria-checked="false" method-id="MANDIRIVA"
                                            id="method_129" name="paymentMethod"
                                            value="MANDIRIVA" tabindex="0"
                                            aria-labelledby="label-MANDIRIVA:"
                                            aria-describedby="description-MANDIRIVA"
                                            @click="paymentSelected = 'MANDIRIVA'">
                                            <input type="radio" id="method_129"
                                                name="paymentMethod" value="MANDIRIVA"
                                                class="peer hidden" />
                                            <label for="method_129"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Mandiri
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="MANDIRIVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/Bank_Mandiri_logo_2016.svg.webp"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'CIMBVA', 'bg-murky-200': paymentSelected !== 'CIMBVA' }"
                                            method-id="CIMBVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-CIMBVA" role="radio"
                                            aria-checked="false" method-id="CIMBVA"
                                            id="method_130" name="paymentMethod"
                                            value="CIMBVA" tabindex="0"
                                            aria-labelledby="label-CIMBVA:"
                                            aria-describedby="description-CIMBVA"
                                            @click="paymentSelected = 'CIMBVA'">
                                            <input type="radio" id="method_130"
                                                name="paymentMethod" value="CIMBVA"
                                                class="peer hidden" />
                                            <label for="method_130"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        CIMB
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="CIMBVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/f7dd3b47f32b2ce56dec828255b4ba7a.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'BNCVA', 'bg-murky-200': paymentSelected !== 'BNCVA' }"
                                            method-id="BNCVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-BNCVA" role="radio"
                                            aria-checked="false" method-id="BNCVA"
                                            id="method_131" name="paymentMethod"
                                            value="BNCVA" tabindex="0"
                                            aria-labelledby="label-BNCVA:"
                                            aria-describedby="description-BNCVA"
                                            @click="paymentSelected = 'BNCVA'">
                                            <input type="radio" id="method_131"
                                                name="paymentMethod" value="BNCVA"
                                                class="peer hidden" />
                                            <label for="method_131"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        BNC / NEO
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="BNCVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/ebdff869a4fdc5c694aaa31a4c7b2940.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'PERMATAVA', 'bg-murky-200': paymentSelected !== 'PERMATAVA' }"
                                            method-id="PERMATAVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-PERMATAVA" role="radio"
                                            aria-checked="false" method-id="PERMATAVA"
                                            id="method_135" name="paymentMethod"
                                            value="PERMATAVA" tabindex="0"
                                            aria-labelledby="label-PERMATAVA:"
                                            aria-describedby="description-PERMATAVA"
                                            @click="paymentSelected = 'PERMATAVA'">
                                            <input type="radio" id="method_135"
                                                name="paymentMethod" value="PERMATAVA"
                                                class="peer hidden" />
                                            <label for="method_135"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Permata
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="PERMATAVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/szezRhAALB1583408731.webp"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'MUAMALATVA', 'bg-murky-200': paymentSelected !== 'MUAMALATVA' }"
                                            method-id="MUAMALATVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-MUAMALATVA" role="radio"
                                            aria-checked="false" method-id="MUAMALATVA"
                                            id="method_136" name="paymentMethod"
                                            value="MUAMALATVA" tabindex="0"
                                            aria-labelledby="label-MUAMALATVA:"
                                            aria-describedby="description-MUAMALATVA"
                                            @click="paymentSelected = 'MUAMALATVA'">
                                            <input type="radio" id="method_136"
                                                name="paymentMethod" value="MUAMALATVA"
                                                class="peer hidden" />
                                            <label for="method_136"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Muamalat
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="MUAMALATVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/GGwwcgdYaG1611929720.webp"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'BSIVA', 'bg-murky-200': paymentSelected !== 'BSIVA' }"
                                            method-id="BSIVA"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-BSIVA" role="radio"
                                            aria-checked="false" method-id="BSIVA"
                                            id="method_137" name="paymentMethod"
                                            value="BSIVA" tabindex="0"
                                            aria-labelledby="label-BSIVA:"
                                            aria-describedby="description-BSIVA"
                                            @click="paymentSelected = 'BSIVA'">
                                            <input type="radio" id="method_137"
                                                name="paymentMethod" value="BSIVA"
                                                class="peer hidden" />
                                            <label for="method_137"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        BSI
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div
                                                                class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh">
                                                                <h6 class="hargapembayaran"
                                                                    id="BSIVA"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/tEclz5Assb1643375216.webp"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 w-full rounded-b-md bg-murky-300"
                            x-ref="logo5" x-bind:style="selected == 5 ? 'max-height: 0' : 'max-height: 30px'"
                            x-bind:class="selected == 5 ? 'px-0 py-0' : 'px-4 pt-2.5 pb-5'">
                            <div class="flex justify-end gap-x-2">
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/065303bb0d98a0e72292e93b90045d18.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="BRI" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/f16b7a44e94da7632dfc672b6dbcf525.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="BCA" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/ce2ecb5af35f8ed39f3e3eced974a70c.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="BNI" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/Bank_Mandiri_logo_2016.svg.webp"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Mandiri" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/f7dd3b47f32b2ce56dec828255b4ba7a.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="CIMB" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/ebdff869a4fdc5c694aaa31a4c7b2940.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="BNC / NEO" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/szezRhAALB1583408731.webp"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Permata" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/GGwwcgdYaG1611929720.webp"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Muamalat" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/tEclz5Assb1643375216.webp"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="BSI" />
                                </div>
                            </div>
                        </div>
                    </dt>
                </div>
                <!-- Convenience Store -->
                <!-- Convenience Store -->
                <div class="flex w-full transform flex-col justify-between rounded-xl bg-murky-600 text-left text-sm font-medium text-white duration-300 focus:outline-none accordion-header"
                    data-state="">
                    <dt>
                        <button class="w-full disabled:opacity-75" id="disclosure-button-3" type="button"
                            @click="selected !== 4 ? selected = 4 : selected = null" aria-expanded="false"
                            aria-controls="disclosure-panel-3">
                            <div class="flex w-full justify-between px-4 py-2">
                                <span class="transform text-base font-medium leading-7 duration-300">
                                    <div>Convenience Store</div>
                                </span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        class="h-6 w-6 transform duration-300"
                                        x-bind:class="selected == 4 ? 'rotate-180' : 'rotate-0'">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                            x-ref="container3"
                            x-bind:style="selected == 4 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' :
                            'max-height: 0'"
                            style="max-height: 239px;">
                            <div class="px-4 pt-2 pb-4 text-sm text-murky-300" id="disclosure-panel-3">
                                <div id="radiogroup-3" role="radiogroup" aria-labelledby="label-3">
                                    <div id="convenienceStoreList"
                                        class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 xl:grid-cols-3"
                                        role="none">
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'ALFAMART', 'bg-murky-200': paymentSelected !== 'ALFAMART' }"
                                            method-id="ALFAMART"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-ALFAMART" role="radio"
                                            aria-checked="false" method-id="ALFAMART"
                                            id="method_132" name="paymentMethod"
                                            value="ALFAMART" tabindex="0"
                                            aria-labelledby="label-ALFAMART:"
                                            aria-describedby="description-ALFAMART"
                                            @click="paymentSelected = 'ALFAMART'">
                                            <input type="radio" id="method_132"
                                                name="paymentMethod" value="ALFAMART"
                                                class="peer hidden" />
                                            <label for="method_132"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Alfamart
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh"
                                                                id="">
                                                                <h6 class="hargapembayaran"
                                                                    id="ALFAMART"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/0932396b5975cc0bd27a885539283b51.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'INDOMARET', 'bg-murky-200': paymentSelected !== 'INDOMARET' }"
                                            method-id="INDOMARET"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-INDOMARET" role="radio"
                                            aria-checked="false" method-id="INDOMARET"
                                            id="method_133" name="paymentMethod"
                                            value="INDOMARET" tabindex="0"
                                            aria-labelledby="label-INDOMARET:"
                                            aria-describedby="description-INDOMARET"
                                            @click="paymentSelected = 'INDOMARET'">
                                            <input type="radio" id="method_133"
                                                name="paymentMethod" value="INDOMARET"
                                                class="peer hidden" />
                                            <label for="method_133"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Indomaret
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh"
                                                                id="">
                                                                <h6 class="hargapembayaran"
                                                                    id="INDOMARET"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/5ad59de08cb178e08ff5a33449755e76.png"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                        <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'ALFAMIDI', 'bg-murky-200': paymentSelected !== 'ALFAMIDI' }"
                                            method-id="ALFAMIDI"
                                            class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out"
                                            id="radio-group-ALFAMIDI" role="radio"
                                            aria-checked="false" method-id="ALFAMIDI"
                                            id="method_134" name="paymentMethod"
                                            value="ALFAMIDI" tabindex="0"
                                            aria-labelledby="label-ALFAMIDI:"
                                            aria-describedby="description-ALFAMIDI"
                                            @click="paymentSelected = 'ALFAMIDI'">
                                            <input type="radio" id="method_134"
                                                name="paymentMethod" value="ALFAMIDI"
                                                class="peer hidden" />
                                            <label for="method_134"></label>
                                            <span class="flex w-full">
                                                <span class="flex w-full flex-col justify-between">
                                                    <div>
                                                        <span
                                                            class="block text-xs font-semibold text-murky-800">
                                                        Alfamidi
                                                        </span>
                                                        <span
                                                            class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>
                                                        <hr>
                                                    </div>
                                                    <div class="flex w-full items-center justify-between">
                                                        <div class="mt-1">
                                                            <div class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh"
                                                                id="">
                                                                <h6 class="hargapembayaran"
                                                                    id="ALFAMIDI"></h6>
                                                            </div>
                                                        </div>
                                                        <div class="relative aspect-[6/2] w-10">
                                                            <img src="../assets/payment/aQTdaUC2GO1593660384.webp"
                                                                x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }"
                                                                class="object-scale-down grayscale-0"
                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative overflow-hidden transition-all max-h-0 w-full rounded-b-md bg-murky-300"
                            x-ref="logo4" x-bind:style="selected == 4 ? 'max-height: 0' : 'max-height: 30px'"
                            x-bind:class="selected == 4 ? 'px-0 py-0' : 'px-4 pt-2.5 pb-5'">
                            <div class="flex justify-end gap-x-2">
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/0932396b5975cc0bd27a885539283b51.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Alfamart" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/5ad59de08cb178e08ff5a33449755e76.png"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Indomaret" />
                                </div>
                                <div class="relative aspect-[6/2] w-10">
                                    <img class="object-scale-down" src="../assets/payment/aQTdaUC2GO1593660384.webp"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                        alt="Alfamidi" />
                                </div>
                            </div>
                        </div>
                    </dt>
                </div>
                <!-- pulsa -->
                <!--<div class="flex w-full transform flex-col justify-between rounded-xl bg-murky-600 text-left text-sm font-medium text-white duration-300 focus:outline-none accordion-header" data-state="">-->
                <!--  <dt>-->
                <!--    <button class="w-full disabled:opacity-75" id="disclosure-button-3" type="button" @click="selected !== 9 ? selected = 9 : selected = null" aria-expanded="false" aria-controls="disclosure-panel-3">-->
                <!--      <div class="flex w-full justify-between px-4 py-2">-->
                <!--        <span class="transform text-base font-medium leading-7 duration-300">-->
                <!--          <div>Pulsa</div>-->
                <!--        </span>-->
                <!--        <span class="ml-6 flex h-7 items-center">-->
                <!--          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 transform duration-300" x-bind:class="selected == 9 ? 'rotate-180' : 'rotate-0'">-->
                <!--            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>-->
                <!--          </svg>-->
                <!--        </span>-->
                <!--      </div>-->
                <!--    </button>-->
                <!--    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" x-bind:style="selected == 9 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : 'max-height: 0'" style="max-height: 239px;">-->
                <!--      <div class="px-4 pt-2 pb-4 text-sm text-murky-300" id="disclosure-panel-3">-->
                <!--        <div id="radiogroup-3" role="radiogroup" aria-labelledby="label-3">-->
                <!--          <div id="convenienceStoreList" class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-2 xl:grid-cols-3" role="none"> -->
                <!--                                                                          -->
                <!--          <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'SMARTFREN', 'bg-murky-200 ': paymentSelected !== 'SMARTFREN' }" method-id="SMARTFREN" class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out" id="radio-group-SMARTFREN" role="radio" aria-checked="false" method-id="SMARTFREN" id="method_125" name="paymentMethod" value="SMARTFREN" tabindex="0" aria-labelledby="label-SMARTFREN:" aria-describedby="description-SMARTFREN" @click="paymentSelected = 'SMARTFREN'">-->
                <!--              <input type="radio" id="method_125" name="paymentMethod" value="SMARTFREN" class="peer hidden" />-->
                <!--              <label for="method_125"></label>-->
                <!--              <span class="flex w-full">-->
                <!--                <span class="flex w-full flex-col justify-between">-->
                <!--                  <div>-->
                <!--                    <span class="block text-xs font-semibold text-murky-800">-->
                <!--                      Smartfren-->
                <!--                    </span>-->
                <!--                    <span class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>-->
                <!--                     <hr>-->
                <!--                  </div>-->
                <!--                  <div class="flex w-full items-center justify-between">-->
                <!--                    <div class="mt-1">-->
                <!--                      <div class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh" id="">-->
                <!--                        <h6 class="hargapembayaran" id="SMARTFREN"></h6>-->
                <!--                      </div>-->
                <!--                    </div>-->
                <!--                    <div class="relative aspect-[6/2] w-10">-->
                <!--                      <img src="/assets/payment/551-3543px-smartfren2015.svg.png" x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }" class="object-scale-down grayscale-0" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />-->
                <!--                    </div>-->
                <!--                  </div>-->
                <!--                </span>-->
                <!--              </span>-->
                <!--            </div>
                    -->
                <!--          <div x-bind:class="{ 'bg-white bj-shadow ring-2 ring-primary-500 ring-offset-2 ring-offset-murky-800 duration-300 ease-in-out': paymentSelected === 'TELKOMSEL', 'bg-murky-200 ': paymentSelected !== 'TELKOMSEL' }" method-id="TELKOMSEL" class="method-list relative flex cursor-pointer overflow-hidden payment-method rounded-xl border border-transparent p-2.5 shadow-sm outline-none md:p-4 bg-white bj-shadow hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-murky-800 duration-300 ease-in-out" id="radio-group-TELKOMSEL" role="radio" aria-checked="false" method-id="TELKOMSEL" id="method_138" name="paymentMethod" value="TELKOMSEL" tabindex="0" aria-labelledby="label-TELKOMSEL:" aria-describedby="description-TELKOMSEL" @click="paymentSelected = 'TELKOMSEL'">-->
                <!--              <input type="radio" id="method_138" name="paymentMethod" value="TELKOMSEL" class="peer hidden" />-->
                <!--              <label for="method_138"></label>-->
                <!--              <span class="flex w-full">-->
                <!--                <span class="flex w-full flex-col justify-between">-->
                <!--                  <div>-->
                <!--                    <span class="block text-xs font-semibold text-murky-800">-->
                <!--                      Telkomsel-->
                <!--                    </span>-->
                <!--                    <span class="mt-0 flex items-center text-xxs text-murky-600">Di cek otomatis</span>-->
                <!--                     <hr>-->
                <!--                  </div>-->
                <!--                  <div class="flex w-full items-center justify-between">-->
                <!--                    <div class="mt-1">-->
                <!--                      <div class="relative z-30 mt-0 text-xs font-semibold leading-4 text-murky-800  text-dark.meltihhh" id="">-->
                <!--                        <h6 class="hargapembayaran" id="TELKOMSEL"></h6>-->
                <!--                      </div>-->
                <!--                    </div>-->
                <!--                    <div class="relative aspect-[6/2] w-10">-->
                <!--                      <img src="/assets/payment/Telkomsel_(2021).svg (1).png" x-bind:class="{ 'grayscale-0': paymentSelected === 'QRIS', 'grayscale': paymentSelected !== 'QRIS' }" class="object-scale-down grayscale-0" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />-->
                <!--                    </div>-->
                <!--                  </div>-->
                <!--                </span>-->
                <!--              </span>-->
                <!--            </div>
                    </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div class="relative overflow-hidden transition-all max-h-0 w-full rounded-b-md bg-murky-300" x-ref="logo4" x-bind:style="selected == 9 ? 'max-height: 0' : 'max-height: 30px'" x-bind:class="selected == 9 ? 'px-0 py-0' : 'px-4 pt-2.5 pb-5'">-->
                <!--      <div class="flex justify-end gap-x-2">                                                                 <div class="relative aspect-[6/2] w-10">-->
                <!--          <img class="object-scale-down" src="/assets/payment/551-3543px-smartfren2015.svg.png" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" alt="Smartfren" />-->
                <!--        </div>
                    <div class="relative aspect-[6/2] w-10">-->
                <!--          <img class="object-scale-down" src="/assets/payment/Telkomsel_(2021).svg (1).png" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" alt="Telkomsel" />-->
                <!--        </div>
                    </div>-->
                <!--    </div>-->
                <!--  </dt>-->
                <!--</div>-->
            </dl>
        </div>
        <div class="rounded-xl bg-murky-800 shadow-2xl" id="promooo">
            <div class="flex border-b border-murky-600">
                <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
                    <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                        <span class="font-bold text-xl italic">4</span>
                    </div>
                    <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Kode Promo </h3>
                </div>
            </div>
            <div class="p-4 sm:px-6 sm:pb-6">
                <label for="voucher" class="block text-xs font-medium text-white pb-2">Kode Promo</label>
                <div class="flex items-center space-x-2">
                    <div class="grow">
                        <div class="flex flex-col items-start">
                            <input
                                class="relative block w-full appearance-none border border-murky-600 bg-melpa-800 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 rounded-md"
                                type="text" id="voucher" name="voucher"
                                placeholder="Masukkan Kode Promo Anda" required />
                        </div>
                    </div>
                    <button type="button" id="btn-check"
                        class="flex items-center justify-center rounded-md bg-primary-5400 py-2 px-4 text-xs font-semibold text-white hover:bg-orange-400 disabled:cursor-not-allowed disabled:opacity-75">
                    Gunakan </button>
                </div>
                <div class="mt-2"></div>
                <p class="flex items-center gap-2 rounded-md bg-primary-5400 px-4 py-3 text-xs/6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-4 w-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4"></path>
                        <path d="M12 8h.01"></path>
                    </svg>
                    <span>Ikuti sosial media kami untuk mendapatkan info kode promo terbaru!</span>
                </p>
                <!-- <div class="pt-2 text-xs text-red-500"></div>
                    <div x-data="{ showPopup: false }"><button @click="showPopup = true"
                        class="inline-flex items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary-5400 text-primary-foreground hover:bg-primary/90 h-8 rounded-md px-3 gap-2 pl-3"
                        type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-ticket-percent h-4 w-4">
                            <path
                                d="M2 9a3 3 0 1 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z">
                            </path>
                            <path d="M9 9h.01"></path>
                            <path d="m15 9-6 6"></path>
                            <path d="M15 15h.01"></path>
                        </svg><span>Pakai Promo Yang Tersedia</span></button>
                    <div x-show="showPopup" x-transition="" class="fixed inset-0 flex items-center justify-center z-50"
                        style="display: none;">
                        <div class="fixed inset-0 bg-black opacity-75"></div>
                        <div
                            class="relative w-full max-w-md p-4 bg-accent rounded-md shadow-xl sm:my-8 opacity-100 transform transition-all sm:scale-100">
                            <div class="absolute right-0 top-0 pr-4 pt-4"><button @click="showPopup = false"
                                    class="rounded-md bg-background text-foreground hover:text-foreground/75 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-background"
                                    aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg></button></div>
                            <h2 class="pb-2 pt-4 text-center text-sm font-semibold leading-6 text-foreground">Promo yang
                                tersedia</h2>
                            <div class="px-4 pb-4">
                                <div role="radiogroup"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <style>
                    .bg-accent {
                        background-color: hsl(0deg 0% 44.09%);
                    }
                    
                    .opacity-50 {
                        opacity: .5;
                    }
                    
                    .bg-muted {
                        background-color: hsl(0deg 0% 5.67%);
                    }
                    
                    .bg-black {
                        background-color: rgba(0, 0, 0, .8);
                    }
                    </style> -->
            </div>
        </div>
        <div class="rounded-xl bg-murky-800 shadow-2xl jumpToWhatsApp" id="whatsappp">
            <div class="flex border-b border-murky-600">
                <div class="flex flex-row items-center gap-1 bg-[#ffc007] text-darkColor rounded-md">
                    <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                        <span class="font-bold text-xl italic">5</span>
                    </div>
                    <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Nomor WhatsApp</h3>
                </div>
            </div>
            <div class="p-4 sm:px-6">
                <label for="nomor" class="block text-xs font-medium text-white pb-2">No. WhatsApp</label>
                <input type="number" id="nomor" autocomplete="off" name="whatsapp"
                    placeholder="Masukkan Nomor WhatsApp Anda"
                    class="relative block w-full appearance-none border border-murky-600 bg-melpa-800 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 rounded-md"
                    value="" id="phoneNumberInput" />
                <span class="text-xxs italic">** Contoh : 0821xxxxxxxx</span>
                <p class="flex items-center gap-2 rounded-md bg-primary-5400 px-4 py-3 text-xs/6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-4 w-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4"></path>
                        <path d="M12 8h.01"></path>
                    </svg>
                    <span>Bukti transaksi akan kami kirimkan melalui whatsapp yang sudah anda isi di atas.</span>
                </p>
            </div>
        </div>
        <div
            class="sticky inset-x-0 bottom-0 z-10 shad sticky bottom-0 rounded-md pb-4 flex flex-col gap-4">
            <div class=" space-y-0">
                <div class="rounded-lg border border-dashed bg-murky-800 p-2 text-sm  rounded-lg md:hidden initial-element"
                    style="display: flex;">
                    <div class="flex w-full flex-col space-y-0">
                        <div class="rounded-md p-4">
                            <div class="text-center">Belum ada item produk yang dipilih.</div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border border-dashed bg-secondary p-2 text-sm text-secondary-foreground md:hidden selected-element "
                    style="display: none;">
                    <div class="mb-1 aspect-square timmel-5">
                        <img alt="icon" sizes="100vw" src="../assets/thumbnail/clash_of_clans-14a2-original.webp" width="80"
                            height="100" decoding="async" data-nimg="1"
                            class="aspect-square timmel-5 rounded-lg object-cover" loading="lazy"
                            style="color: transparent">
                    </div>
                    <div class="flex w-full flex-col space-y-1 ml-3">
                        <div class="text-xs font-semibold cana select glowing-text">Clash of Clans</div>
                        <div class="flex items-center gap-2 pt-0.5 font-semibold">
                            <p class="text-xs font-semibold text-warning text-amber-300 selected-order"></p>
                            <span>-</span>
                            <div class="text-xs  select text-white" id="pesan"></div>
                        </div>
                        <p class="text-xxs italic text-murky-300">**Waktu proses instan</p>
                        <div class="flex w-full items-center">
                            <p class="text-xs italic select"></p>
                        </div>
                    </div>
                </div>
                <div class="mt-4"></div>
                <div class="relative">
                    <button
                        class="inline-flex items-center justify-center rounded-md bg-primary-5400 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-500 disabled:cursor-not-allowed disabled:opacity-75 btn-order relative flex w-full gap-2 overflow-hidden"
                        type="button" id="order-check">
                        <svg width="24" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5209 6.87109H8.47891C5.67599 6.87109 3.91895 8.8558 3.91895 11.6636V16.206C3.91895 19.0148 5.66724 20.9985 8.47891 20.9985H16.5199C19.3316 20.9985 21.0818 19.0148 21.0818 16.206V11.6636C21.0818 8.8558 19.3316 6.87109 16.5209 6.87109Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path opacity="0.4" d="M9.38477 11.1445C9.45871 11.8684 9.79338 12.5173 10.275 13.0096C10.8509 13.5748 11.639 13.928 12.5019 13.928C14.116 13.928 15.443 12.7119 15.6191 11.1445" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path opacity="0.4" d="M16.3702 6.87115C16.3702 4.7337 14.6375 3 12.4991 3C10.3616 3 8.62891 4.7337 8.62891 6.87115" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span>Pesan Sekarang!</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-4 block rounded-xl bg-murky-800 shadow-2xl md:hidden">
            <div class="flex border-b border-murky-600">
                <div class="flex flex-row items-center gap-1 text-darkColor rounded-md">
                    <div class="items-center justify-start flex bg-gradient-to-b from-murky-800 to-murky-800 clip-path-number p-4 h-12 w-16" style="border-top-left-radius: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            class="h-4 w-4">
                            <path fill-rule="evenodd"
                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Ulasan</h3>
                </div>
            </div>
            <div class="flow-root p-6">
                <div class="flex flex-col  overflow-hidden ">
                    <div class="mx-6 flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" class="h-8 w-8 flex-shrink-0 text-yellow-400">
                            <path fill-rule="evenodd"
                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div><span class="text-5xl text-besar">0.0</span>
                            <span> / </span><span>5.0</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="mx-6 flex items-center justify-center text-xs font-bold">
                            0% pembeli merasa puas dengan produk
                            ini.
                        </div>
                        <div class="mx-6 flex items-center justify-center gap-2 text-xs">Dari
                            0 Ulasan.
                        </div>
                    </div>
                </div>
                <div class="flex flex-col  overflow-hidden pt-6">
                    <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                        <li class="rating-item"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <div class="rating-value"
                                style="width: 30px; text-align: right; margin-right: 10px;">
                                5
                            </div>
                            <div class="star-rating"
                                style="display: flex; align-items: center; margin-right: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true"
                                    style="height: 20px; width: 20px; color: #ffc107;">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="bar"
                                style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                <div class="progress"
                                    style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                </div>
                            </div>
                            <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                0
                            </div>
                        </li>
                    </ul>
                    <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                        <li class="rating-item"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <div class="rating-value"
                                style="width: 30px; text-align: right; margin-right: 10px;">
                                4
                            </div>
                            <div class="star-rating"
                                style="display: flex; align-items: center; margin-right: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true"
                                    style="height: 20px; width: 20px; color: #ffc107;">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="bar"
                                style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                <div class="progress"
                                    style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                </div>
                            </div>
                            <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                0
                            </div>
                        </li>
                    </ul>
                    <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                        <li class="rating-item"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <div class="rating-value"
                                style="width: 30px; text-align: right; margin-right: 10px;">
                                3
                            </div>
                            <div class="star-rating"
                                style="display: flex; align-items: center; margin-right: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true"
                                    style="height: 20px; width: 20px; color: #ffc107;">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="bar"
                                style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                <div class="progress"
                                    style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                </div>
                            </div>
                            <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                0
                            </div>
                        </li>
                    </ul>
                    <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                        <li class="rating-item"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <div class="rating-value"
                                style="width: 30px; text-align: right; margin-right: 10px;">
                                2
                            </div>
                            <div class="star-rating"
                                style="display: flex; align-items: center; margin-right: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true"
                                    style="height: 20px; width: 20px; color: #ffc107;">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="bar"
                                style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                <div class="progress"
                                    style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                </div>
                            </div>
                            <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                0
                            </div>
                        </li>
                    </ul>
                    <ul class="rating-list" style="list-style-type: none; padding-left: 0;">
                        <li class="rating-item"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <div class="rating-value"
                                style="width: 30px; text-align: right; margin-right: 10px;">
                                1
                            </div>
                            <div class="star-rating"
                                style="display: flex; align-items: center; margin-right: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true"
                                    style="height: 20px; width: 20px; color: #ffc107;">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="bar"
                                style="flex-grow: 1; height: 10px; background-color: #ddd; border-radius: 5px; overflow: hidden;">
                                <div class="progress"
                                    style="height: 100%; background-color: #ffc107; border-radius: 5px; width: 0%;">
                                </div>
                            </div>
                            <div class="count" style="width: 50px; margin-left: 0px; text-align: right;">
                                0
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="py-4">
                    <div class="rounded-md border-l-4 border-yellow-400 bg-yellow-100 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="h-5 w-5 text-yellow-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700">Belum ada ulasan dan penilaian.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end pt-5 mt-5">
                    <a class="inline-flex items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input hover:bg-accent/75 hover:text-accent-foreground h-8 rounded-md px-4 bg-secondary/50 pr-3 flex items-center gap-2"
                        type="button" href="reviews.html" style="outline: none;">
                        <span>Lihat semua ulasan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right h-4 w-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </ul>
</div>
<script>
    document.getElementById('searchProds').addEventListener('input', function() {
        var lottieContainer = document.getElementById('lottie-container');
        if (lottieContainer) {
            lottieContainer.style.display = 'none';
        }
    });
</script> 
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('[name="nominal"]').forEach(function(e) {
            e.addEventListener("click", function() {
                let e;
                (e = document.getElementById("section-payment-channel")) && e.scrollIntoView({
                    behavior: "smooth"
                })
            })
        })
    });
    var listGroupItems = document.querySelectorAll(".method-list");
    listGroupItems.forEach(function(e) {
        e.addEventListener("click", function() {
            var e = this.querySelector(".text-xs").textContent.trim();
            document.querySelector("#pesan").textContent = e, showSelectedElement()
        })
    }), window.onload = function() {
        var e = document.getElementById("nomor"),
            t = localStorage.getItem("savedNumber");
        t && (e.value = t), e.addEventListener("input", function() {
            localStorage.setItem("savedNumber", e.value)
        })
    }, document.addEventListener("DOMContentLoaded", function() {
        let e = document.getElementById("section-payment-channel"),
            t = document.getElementById("whatsappp");
    
        function n(e, t) {
            let n = e.getBoundingClientRect(),
                o = window.scrollY || window.pageYOffset,
                i = n.top + o - window.innerHeight / 2 + n.height / 2;
            window.scrollTo({
                top: i,
                behavior: "smooth"
            }), t && "function" == typeof t && setTimeout(t, 100)
        }
        document.querySelectorAll(".bg-product").forEach(function(t) {
            t.addEventListener("click", function() {
                n(e)
            })
        }), document.querySelectorAll(".method-list").forEach(function(o) {
            o.addEventListener("click", function() {
                n(e, function() {
                    n(t)
                })
            })
        })
    }), window.addEventListener("load", function() {
        setTimeout(function() {
            document.getElementById("skeleton-loaderr").style.display = "none", document.getElementById(
                "paymentList").classList.remove("hidden")
        }, 1500)
    });
</script>        
<script>
    function showInitialElement() {
        var e = document.querySelector(".initial-element"),
            t = document.querySelector(".selected-element");
        e.style.display = "flex", t.style.display = "none"
    }
    
    function showSelectedElement() {
        var e = document.querySelector(".initial-element"),
            t = document.querySelector(".selected-element");
        e.style.display = "none", t.style.display = "flex"
    }
    
    function updateSelectedElement(e, t) {
        var l = document.querySelector(".text-xs.font-semibold.selected-order"),
            n = document.querySelector(".text-xs.font-semibold.text-warning.selected-order");
        document.querySelector(".flex.w-full.items-center p.text-xs.italic"), l.textContent = e, n.textContent = t
    }
    
    function updateSelectedElements(e) {
        document.querySelector(".text-xs.font-semibold.text-warning.selected-order").textContent = e
    }
    var listGroupItems = document.querySelectorAll(".method-list");
    listGroupItems.forEach(function(e) {
        e.addEventListener("click", function() {
            // Memprioritaskan elemen dengan class tertentu jika ada, jika tidak maka cek elemen <p>
            var selectedText = this.querySelector(".h6") ? 
                this.querySelector(".h6").textContent :
                this.querySelector(".hargapembayaran") ? 
                    this.querySelector(".hargapembayaran").textContent :
                    this.querySelector("p") ? 
                        this.querySelector("p").textContent : "";
    
            // Hanya panggil fungsi jika ada teks yang ditemukan
            if (selectedText) {
                updateSelectedElements(selectedText);
                showSelectedElement();
            }
        });
    });
    var productListItems = document.querySelectorAll(".product-list");
    productListItems.forEach(function(e) {
        e.addEventListener("click", function() {
            var e;
            updateSelectedElement(this.querySelector("#namalayanan").textContent, this.querySelector(
                ".harga") ? this.querySelector(".harga").textContent : this.querySelector(
                ".text-dark.meltih").textContent), showSelectedElement(), document.querySelector(
                ".selected-order").style.display = "block"
        })
    }), showInitialElement();
</script>
<script>
    const paymentMethods = {"QRIS":{"id":51,"name":"QRIS","images":"\/assets\/payment\/Logo QRIS.png","code":"QRIS","keterangan":"Di cek otomatis","tipe":"qris","payment":"tokopay","fee_percent":"0.70","fix_fee":"100.00","created_at":"2023-03-05T23:59:32.000000Z","updated_at":"2025-05-31T05:31:47.000000Z"},"SALDO":{"id":118,"name":"Saldo","images":"\/assets\/payment\/coin.webp","code":"SALDO","keterangan":"Di cek otomatis","tipe":"SALDO","payment":"saldo","fee_percent":"0.00","fix_fee":"0.00","created_at":"2025-05-16T23:57:02.000000Z","updated_at":"2025-06-11T12:00:12.000000Z"},"GOPAY":{"id":120,"name":"Gopay","images":"\/assets\/payment\/64fb349fefc6ce687700ea8724a37d19.png","code":"GOPAY","keterangan":"Di cek otomatis","tipe":"e-walet","payment":"tokopay","fee_percent":"3.00","fix_fee":"0.00","created_at":"2025-05-31T05:28:59.000000Z","updated_at":"2025-05-31T05:28:59.000000Z"},"OVOPUSH":{"id":121,"name":"OVO","images":"\/assets\/payment\/Logo_ovo_purple.svg.png","code":"OVOPUSH","keterangan":"Di cek otomatis","tipe":"e-walet","payment":"tokopay","fee_percent":"2.50","fix_fee":"0.00","created_at":"2025-05-31T05:33:27.000000Z","updated_at":"2025-05-31T05:33:27.000000Z"},"SHOPEEPAY":{"id":122,"name":"Shopee Pay","images":"\/assets\/payment\/9a8849fb68683ccaed7483d827d07b39.png","code":"SHOPEEPAY","keterangan":"Di cek otomatis","tipe":"e-walet","payment":"tokopay","fee_percent":"2.50","fix_fee":"0.00","created_at":"2025-05-31T05:34:41.000000Z","updated_at":"2025-05-31T05:34:41.000000Z"},"DANA":{"id":123,"name":"DANA","images":"\/assets\/payment\/39dfa0a150297717e71239f0cd215f75.png","code":"DANA","keterangan":"Di cek otomatis","tipe":"e-walet","payment":"tokopay","fee_percent":"2.50","fix_fee":"0.00","created_at":"2025-05-31T05:35:56.000000Z","updated_at":"2025-05-31T05:35:56.000000Z"},"LINKAJA":{"id":124,"name":"LinkAja","images":"\/assets\/payment\/b951de09eee40c57a3b570ecf396f119.png","code":"LINKAJA","keterangan":"Di cek otomatis","tipe":"e-walet","payment":"tokopay","fee_percent":"3.00","fix_fee":"0.00","created_at":"2025-05-31T05:37:05.000000Z","updated_at":"2025-05-31T05:37:05.000000Z"},"SMARTFREN":{"id":125,"name":"Smartfren","images":"\/assets\/payment\/551-3543px-smartfren2015.svg.png","code":"SMARTFREN","keterangan":"Di cek otomatis","tipe":"pulsa","payment":"tokopay","fee_percent":"25.00","fix_fee":"0.00","created_at":"2025-05-31T05:38:35.000000Z","updated_at":"2025-05-31T05:38:35.000000Z"},"BRIVA":{"id":126,"name":"BRI","images":"\/assets\/payment\/065303bb0d98a0e72292e93b90045d18.png","code":"BRIVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tokopay","fee_percent":"0.00","fix_fee":"3000.00","created_at":"2025-05-31T05:40:53.000000Z","updated_at":"2025-05-31T05:40:53.000000Z"},"BCAVA":{"id":127,"name":"BCA","images":"\/assets\/payment\/f16b7a44e94da7632dfc672b6dbcf525.png","code":"BCAVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tokopay","fee_percent":"0.00","fix_fee":"4200.00","created_at":"2025-05-31T05:43:30.000000Z","updated_at":"2025-05-31T05:43:30.000000Z"},"BNIVA":{"id":128,"name":"BNI","images":"\/assets\/payment\/ce2ecb5af35f8ed39f3e3eced974a70c.png","code":"BNIVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tokopay","fee_percent":"0.00","fix_fee":"3500.00","created_at":"2025-05-31T05:45:02.000000Z","updated_at":"2025-05-31T05:45:02.000000Z"},"MANDIRIVA":{"id":129,"name":"Mandiri","images":"\/assets\/payment\/Bank_Mandiri_logo_2016.svg.webp","code":"MANDIRIVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tokopay","fee_percent":"0.00","fix_fee":"3500.00","created_at":"2025-05-31T05:45:42.000000Z","updated_at":"2025-05-31T05:45:42.000000Z"},"CIMBVA":{"id":130,"name":"CIMB","images":"\/assets\/payment\/f7dd3b47f32b2ce56dec828255b4ba7a.png","code":"CIMBVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tokopay","fee_percent":"0.00","fix_fee":"2500.00","created_at":"2025-05-31T05:46:16.000000Z","updated_at":"2025-05-31T05:46:16.000000Z"},"BNCVA":{"id":131,"name":"BNC \/ NEO","images":"\/assets\/payment\/ebdff869a4fdc5c694aaa31a4c7b2940.png","code":"BNCVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tokopay","fee_percent":"0.00","fix_fee":"3000.00","created_at":"2025-05-31T05:46:45.000000Z","updated_at":"2025-05-31T05:46:45.000000Z"},"ALFAMART":{"id":132,"name":"Alfamart","images":"\/assets\/payment\/0932396b5975cc0bd27a885539283b51.png","code":"ALFAMART","keterangan":"Di cek otomatis","tipe":"convenience-store","payment":"tokopay","fee_percent":"0.00","fix_fee":"3000.00","created_at":"2025-05-31T05:47:57.000000Z","updated_at":"2025-05-31T05:47:57.000000Z"},"INDOMARET":{"id":133,"name":"Indomaret","images":"\/assets\/payment\/5ad59de08cb178e08ff5a33449755e76.png","code":"INDOMARET","keterangan":"Di cek otomatis","tipe":"convenience-store","payment":"tokopay","fee_percent":"0.00","fix_fee":"3000.00","created_at":"2025-05-31T05:48:17.000000Z","updated_at":"2025-05-31T05:48:17.000000Z"},"ALFAMIDI":{"id":134,"name":"Alfamidi","images":"\/assets\/payment\/aQTdaUC2GO1593660384.webp","code":"ALFAMIDI","keterangan":"Di cek otomatis","tipe":"convenience-store","payment":"tripay","fee_percent":"0.00","fix_fee":"3500.00","created_at":"2025-05-31T23:12:37.000000Z","updated_at":"2025-05-31T23:12:37.000000Z"},"PERMATAVA":{"id":135,"name":"Permata","images":"\/assets\/payment\/szezRhAALB1583408731.webp","code":"PERMATAVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tripay","fee_percent":"0.00","fix_fee":"4250.00","created_at":"2025-05-31T23:14:10.000000Z","updated_at":"2025-05-31T23:14:10.000000Z"},"MUAMALATVA":{"id":136,"name":"Muamalat","images":"\/assets\/payment\/GGwwcgdYaG1611929720.webp","code":"MUAMALATVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tripay","fee_percent":"0.00","fix_fee":"4250.00","created_at":"2025-05-31T23:14:49.000000Z","updated_at":"2025-05-31T23:14:49.000000Z"},"BSIVA":{"id":137,"name":"BSI","images":"\/assets\/payment\/tEclz5Assb1643375216.webp","code":"BSIVA","keterangan":"Di cek otomatis","tipe":"virtual-account","payment":"tripay","fee_percent":"0.00","fix_fee":"4250.00","created_at":"2025-05-31T23:15:42.000000Z","updated_at":"2025-05-31T23:15:42.000000Z"},"TELKOMSEL":{"id":138,"name":"Telkomsel","images":"\/assets\/payment\/Telkomsel_(2021).svg (1).png","code":"TELKOMSEL","keterangan":"Di cek otomatis","tipe":"pulsa","payment":"tokopay","fee_percent":"32.00","fix_fee":"0.00","created_at":"2025-06-01T10:16:49.000000Z","updated_at":"2025-06-01T10:16:49.000000Z"}}        
</script>
<script>
    function changeHarga(a) {
        // Validasi input harga awal
        a = parseFloat(a);
        if (isNaN(a) || a < 0) a = 0;
    
        // Ambil metode pembayaran yang dipilih
        const selectedRadio = document.querySelector('[name="paymentMethod"]:checked');
        const selectedMethodCode = selectedRadio ? selectedRadio.value : 'default';
    
        // Ambil data metode pembayaran dari object JS
        const method = paymentMethods[selectedMethodCode] || { fix_fee: 0, fee_percent: 0 };
        const fixFee = parseFloat(method.fix_fee) || 0;
        const feePercent = parseFloat(method.fee_percent) || 0;
    
        // Hitung subtotal dulu: harga + fix_fee
        const subtotal = a + fixFee;
    
        // Lalu hitung fee dari subtotal
        const feeValue = subtotal * (feePercent / 100);
    
        // Total akhir
        const totalAmount = subtotal + feeValue;
        const totalInt = Math.round(totalAmount);
    
        // Format ke Rupiah
        function formatToRupiah(a) {
            return "Rp " + a.toLocaleString("id-ID", {
                maximumFractionDigits: 0
            })
        }
    
        // Update semua elemen HTML berdasarkan metode pembayaran
        for (let code in paymentMethods) {
            const m = paymentMethods[code];
            const fixFeeNow = parseFloat(m.fix_fee || 0);
            const feePercentNow = parseFloat(m.fee_percent || 0);
    
            const subtotalNow = a + fixFeeNow;
            const feeValueNow = subtotalNow * (feePercentNow / 100);
            const totalNow = subtotalNow + feeValueNow;
            const roundedNow = Math.round(totalNow);
    
            $(`#${code.toUpperCase()}`).html(formatToRupiah(roundedNow));
        }
    }
    
    function formatToRupiah(a) {
        return "Rp " + a.toLocaleString("id-ID", {
            maximumFractionDigits: 0
        })
    }
    
    function validateQtyInput(a) {
        a.value.includes("-") && (a.value = a.value.replace("-", "")), a.value < 1 ? a.value = 1 : a.value > 30 && (a
            .value = 30)
    }
    
    function scrollToElement(a) {
        $("html, body").animate({
            scrollTop: $("#" + a).offset().top
        }, 1e3)
    }
    
    function showToast(t, type = "error") {
        var a = document.getElementById("react-notif"),
            e = document.createElement("div");
        e.className = "toast";
        if (type === "success") {
            e.classList.add("success");
        }
        var o = document.createElement("div");
        o.className = "toast-icon";
        if (type === "success") {
            o.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" width="16" color="rgba(34, 197, 94, 0.8)"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>';
        } else {
            o.innerHTML = '<div class="alertmelpaa"></div>';
        }
        var i = document.createElement("div");
        i.className = "toast-message";
        i.textContent = t;
        e.appendChild(o);
        e.appendChild(i);
        a.appendChild(e);
        setTimeout(function () {
            e.remove();
        }, 3e3);
    }
    $(".accordion-button").css("pointer-events", "none"), $(".accordion-header").addClass("hide-payment"), $(
        ".product-list").click(function() {
        let a = $(this).attr("product-id");
        $(".product-list").removeClass("active"), $(this).addClass("active"), $("#nominal").val(a), $.ajax({
            url: "https://cupu.me/id/harga",
            dataType: "json",
            type: "POST",
            data: {
                _token: "UcRxuSOMWedgwfwTgQJMYjsiTjMQHqiRmu0tHztQ",
                nominal: a
            },
            success: function(a) {
                void 0 !== a.harga && !isNaN(a.harga) && parseFloat(a.harga) >= 0 && changeHarga(a
                    .harga)
            }
        })
    }), $(".accordion-header").click(function() {
        0 === $(".product-list.active").length && (showToast("Mohon untuk pilih item terlebih dahulu"),
            scrollToElement("section-nominal"))
    }), $(".method-list").click(function() {
        let a = $(this).attr("method-id");
        $(".method-list").removeClass("active"), $(this).addClass("active"), $("#metode").val(a)
    }), $("#order-check").on("click", function() {
        var a = $("#user_id").val(),
            t = $("#zone").val(),
            o = $("#email_joki").val(),
            e = $("#password_joki").val(),
            i = $("#loginvia_joki").val(),
            n = $("#nickname_joki").val(),
            l = $("#request_joki").val(),
            r = $("#catatan_joki").val(),
            s = $("#tglmain_joki").val(),
            c = $("#jambooking_joki").val(),
            h = $("#nominal").val(),
            m = $("#qty").val(),
            u = $("#metode").val(),
            d = $("#nomor").val(),
            k = $("#voucher").val(),
            v = $("#ktg_tipe").val();
        if ("joki" === v || "vilogml" === v) {
            if (!o || !e || !i || !n) {
                showToast("Silahkan isi data akun terlebih dahulu.");
                return
            }
        } else if ("jokigendong" === v) {
            if (!s || !c || !i || !n) {
                showToast("Silahkan isi data akun terlebih dahulu.");
                return
            }
        } else if (!a && !t) {
            showToast("Mohon isi UID atau Zone");
            return
        }
        if (!h || !u || !d) {
            showToast("Silahkan isi data akun terlebih dahulu.");
            return
        }
        if (!d) {
            showToast("Silahkan lengkapi nomor WhatsApp");
            return
        }
        $.ajax({
            url: "https://cupu.me/id/konfirmasi-data",
            dataType: "JSON",
            type: "POST",
            data: {
                _token: "UcRxuSOMWedgwfwTgQJMYjsiTjMQHqiRmu0tHztQ",
                uid: a,
                zone: t,
                service: h,
                payment_method: u,
                nomor: d,
                email_joki: o,
                password_joki: e,
                loginvia_joki: i,
                nickname_joki: n,
                request_joki: l,
                catatan_joki: r,
                tglmain_joki: s,
                jambooking_joki: c,
                qty: m,
                ktg_tipe: v,
                voucher: k
            },
            beforeSend: function() {
                $(".load").addClass("show")
            },
            success: function(p) {
                $(".load").removeClass("show"), p.status ? Swal.fire({
                    html: `${p.data}`,
                    showCancelButton: !0,
                    confirmButtonText: "Pesan Sekarang",
                    cancelButtonText: "Batalkan",
                    customClass: {
                        htmlContainer: "swal-text"
                    }
                }).then(p => {
                    if (p.isConfirmed) {
                        var f = $("#nick").text();
                        $.ajax({
                            url: "https://cupu.me/id",
                            dataType: "JSON",
                            type: "POST",
                            data: {
                                _token: "UcRxuSOMWedgwfwTgQJMYjsiTjMQHqiRmu0tHztQ",
                                nickname: f,
                                uid: a,
                                zone: t,
                                service: h,
                                payment_method: u,
                                nomor: d,
                                voucher: k,
                                email_joki: o,
                                password_joki: e,
                                loginvia_joki: i,
                                nickname_joki: n,
                                request_joki: l,
                                catatan_joki: r,
                                tglmain_joki: s,
                                jambooking_joki: c,
                                qty: m,
                                ktg_tipe: v
                            },
                            beforeSend: function() {
                                $(".load").addClass("show")
                            },
                            success: function(a) {
                                $(".load").removeClass("show"), a.status ? (
                                        showToast("Berhasil membuat pesanan!",
                                            "success"), window.location =
                                        `/id/invoices/${a.order_id}`) :
                                    showToast("Terdapat kesalahan!", "error")
                            },
                            error: function(a) {
                                $(".load").removeClass("show"), console.log(a)
                            }
                        })
                    }
                }) : Swal.fire({
                    title: "Oops...",
                    text: p.data || "User ID tidak ditemukan.",
                    icon: "error"
                })
            },
            error: function(a) {
                $(".load").removeClass("show"), 422 === a.status ? Swal.fire({
                    title: "Oops...",
                    text: "Pastikan anda sudah mengisi semua data yang diperlukan.",
                    icon: "error"
                }) : Swal.fire({
                    title: "Oops...",
                    text: "Terjadi kesalahan. Silakan coba lagi.",
                    icon: "error"
                })
            }
        })
    }), $("#btn-check").on("click", function() {
        var a = $("#voucher").val(),
            t = $("#nominal").val();
    
        function o() {
            $("#notification").remove()
        }
        $.ajax({
            url: "https://cupu.me/check-voucher",
            dataType: "JSON",
            type: "POST",
            data: {
                _token: "UcRxuSOMWedgwfwTgQJMYjsiTjMQHqiRmu0tHztQ",
                voucher: a,
                service: t
            },
            success: function(a) {
                showToast("Promo berhasil digunakan", "success");
            },
            error: function(a) {
                showToast("Promo tidak tersedia", "error");
            }
        }), $(document).on("click", "#closeNotification", function() {
            o()
        })
    });
</script>
<script>
    const toggleButton = document.getElementById('toggleButton');
    const dropdownContent = document.getElementById('dropdownContent');
    toggleButton.addEventListener('click', function() {
        const expanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
        toggleButton.setAttribute('aria-expanded', !expanded);
        dropdownContent.classList.toggle('hidden');
    });
</script>
</x-layouts>