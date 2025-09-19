<div
    id="popupp"
    x-data="{ open: false, dontShowAgain: localStorage.getItem('dontShowPopup') === 'true' }"
    x-init="if (!dontShowAgain) { setTimeout(() => open = true, 100) }"
    @keydown.escape.window="open = false"
    @click.outside="open = false"
    class="relative z-50 font-sans"
    x-cloak
    >
    <div
        class="fixed inset-0 bg-black/80 transition-opacity"
        x-show="open"
        x-transition:enter="transition-opacity ease-out duration-500"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
        @click="open = false"
        ></div>
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="open" x-cloak>
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                @click.outside="open = false"
                class="relative w-full transform overflow-hidden rounded-2xl bg-accent text-left shadow-xl transition-all sm:my-8 sm:max-w-3xl"
                x-show="open"
                x-transition:enter="transition-all ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition-all ease-in duration-500"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                >
                <div class="absolute right-0 top-0 z-40 block pr-4 pt-4">
                    <button type="button" @click="open = false" class="rounded-md bg-murky-500 text-white ring-1 focus:ring-primary-400 focus:ring-offset-2 focus:ring-offset-murky-800">
                        <span class="sr-only">Close</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="w-full pb-4">
                    <div>
                        <img
                            alt=""
                            fetchpriority="high"
                            width="0"
                            height="0"
                            decoding="async"
                            class="object-center"
                            sizes="100vw"
                            srcset="/assets/banner/banner pop up.png"
                            src="assets/banner/banner%20pop%20up.png"
                            style="color: transparent; width: 100%; height: auto;"
                            />
                    </div>
                    <div class="relative flex flex-col items-center pt-4 text-foreground">
                        <div class="flex w-full items-center justify-center px-4">
                            <div class="col-span-2 -mt-3 flex w-full flex-col items-center justify-center !text-xxs">
                                <h2 class="max-w-xl pt-1 text-center text-sm font-semibold">PENGUMUMAN</h2>
                            </div>
                        </div>
                        <!-- Gunakan x-html untuk menampilkan HTML mentah dari deskripsi -->
                        <div class="prose prose-sm px-4 pb-4 text-xs text-foreground">
                            <p class="text-white" x-html="`&lt;p&gt;Halo!!!&amp;nbsp;&lt;/p&gt;&lt;p&gt;Selamat datang di demo website &lt;a href=_/___strong_CUPU.html
                                STORE&lt;/strong&gt;&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;Jika anda ingin memulai bisnis dengan membuat website seperti ini, kami bisa membantunya. Silahkan hubungi kami melalui kontak berikut
                                ini&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;a href=_https_/t.me/mongedev___strong_Telegram_/strong__/a__/li__li__a.html href=_https_/neoera.id___strong_Website_/strong__/a__/li__/ul_%60_.html>
                                </div>
                                <div class="flex w-full items-center justify-start px-4 pb-2">
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    id="dontShowPopup"
                                    class="h-4 w-4 cursor-pointer rounded border bg-background text-primary focus:ring-primary focus:ring-offset-background"
                                    x-model="dontShowAgain"
                                    @change="localStorage.setItem('dontShowPopup', dontShowAgain ? 'true' : 'false'); if(dontShowAgain) { open = false }"
                                    />
                                <label class="block text-xs font-medium text-foreground ml-3 block select-none text-sm text-foreground !text-xxs !ml-2">Jangan tampilkan lagi</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>