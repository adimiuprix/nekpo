<div x-data="drawerMenu()" x-cloak @open-menu.window="open = $event.detail.open" @keydown.window.tab="usedKeyboard = true" @keydown.escape="open = false" x-init="init()">
    <div x-show.transition.opacity.duration.500="open" @click="open = false" class="fixed z-40 inset-0 bg-opacity-25 blur"></div>

    <div class="fixed inset-0 z-50 transition duration-300 left-0 top-0 transform w-full max-w-xs h-screen bg-secondary pb-12 shadow-xl overflow-y-auto" :class="{'-translate-x-full': !open}">
        <div class="relative flex w-full flex-col">
            <div class="flex flex-row-reverse items-center justify-between p-4">
                <button
                    type="button"
                    class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-murky-400 hover:ring-primary-500 hover:ring-offset-2"
                    @click="open = false"
                    x-ref="closeButton"
                    :class="{'focus:outline-none': !usedKeyboard}"
                    tabindex="0"
                >
                    <span class="sr-only">Close menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <button
                    type="button"
                    class="absolute right-4 top-4 rounded-lg opacity-70 ring-offset-white transition-opacity hover:opacity-100 focus:outline-none disabled:pointer-events-none data-[state=open]:bg-slate-100 dark:data-[state=open]:bg-slate-800 text-white-500 text-2xl bg-primary-500 p-1.5"
                    @click="open = false"
                    x-ref="closeButton"
                    :class="{'focus:outline-none': !usedKeyboard}"
                    tabindex="0"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x h-4 w-4">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
                <div class="flex">
                    <a href="index.html" style="outline: none;">
                        <span class="sr-only"> Neoera Store</span>
                        <img src="assets/logo/drgedrg.gif" class="h-7 w-auto" width="100" height="43" style="color: transparent;" alt="Neoera Store" />
                    </a>
                </div>
            </div>

            @include('aside_menu')

            <div class="space-y-2 p-4">
                <div>
                    <a class="group flex items-center justify-between rounded-md py-2 px-4 font-medium text-white hover:bg-murky-700 outline-none" href="id/sign-in.html">
                        <span>Masuk</span>
                        <svg width="18" height="18" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.791 12.1207H2.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M11.8643 9.20471L14.7923 12.1207L11.8643 15.0367" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                opacity="0.4"
                                d="M7.25879 7.62988C7.58879 4.04988 8.92879 2.74988 14.2588 2.74988C21.3598 2.74988 21.3598 5.05988 21.3598 11.9999C21.3598 18.9399 21.3598 21.2499 14.2588 21.2499C8.92879 21.2499 7.58879 19.9499 7.25879 16.3699"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a class="group flex items-center justify-between rounded-md py-2 px-4 font-medium text-white hover:bg-murky-700 outline-none" href="id/sign-up.html">
                        <span>Daftar</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Iconly/Two-tone/Add User</title>
                            <g id="Iconly/Two-tone/Add-User" stroke="none" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="Add-User" transform="translate(2.000000, 2.000000)" stroke="currentColor" stroke-width="1.5">
                                    <path
                                        d="M7.8766,13.2062 C4.0326,13.2062 0.7496,13.7872 0.7496,16.1152 C0.7496,18.4432 4.0126,19.0452 7.8766,19.0452 C11.7216,19.0452 15.0036,18.4632 15.0036,16.1362 C15.0036,13.8092 11.7416,13.2062 7.8766,13.2062 Z"
                                        id="Stroke-1"
                                    ></path>
                                    <path
                                        d="M7.8766,9.8859 C10.3996,9.8859 12.4446,7.8409 12.4446,5.3179 C12.4446,2.7949 10.3996,0.7499 7.8766,0.7499 C5.3546,0.7499 3.30957019,2.7949 3.30957019,5.3179 C3.3006,7.8319 5.3306,9.8769 7.8456,9.8859 L7.8766,9.8859 Z"
                                        id="Stroke-3"
                                        opacity="0.400000006"
                                    ></path>
                                    <line x1="17.2037" y1="6.6691" x2="17.2037" y2="10.6791" id="Stroke-5"></line>
                                    <line x1="19.2496" y1="8.674" x2="15.1596" y2="8.674" id="Stroke-7"></line>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
