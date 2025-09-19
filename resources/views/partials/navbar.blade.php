<nav class="container flex justify-between hidden lg:block w-full md:flex print:hidden h-16">
    <div class="flex h-full gap-3">

        <x-topnav :link="route('home')" :active="request()->is('/')">
            <x-slot name="icon">
                <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M16.5209 6.87109H8.47891C5.67599 6.87109 3.91895 8.8558 3.91895 11.6636V16.206C3.91895 19.0148 5.66724 20.9985 8.47891 20.9985H16.5199C19.3316 20.9985 21.0818 19.0148 21.0818 16.206V11.6636C21.0818 8.8558 19.3316 6.87109 16.5209 6.87109Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        opacity="0.4"
                        d="M9.38477 11.1445C9.45871 11.8684 9.79338 12.5173 10.275 13.0096C10.8509 13.5748 11.639 13.928 12.5019 13.928C14.116 13.928 15.443 12.7119 15.6191 11.1445"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path opacity="0.4" d="M16.3702 6.87115C16.3702 4.7337 14.6375 3 12.4991 3C10.3616 3 8.62891 4.7337 8.62891 6.87115" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </x-slot>
            Beranda
        </x-topnav>
        <x-topnav :link="route('invoices')" :active="request()->is('invoices')">
            <x-slot name="icon">
                <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.129 10.3728L21.1106 8.05801C21.1038 5.1517 19.2891 3.10258 16.3799 3.10939L8.05695 3.12982C5.15647 3.13664 3.34282 5.19353 3.34963 8.10082L3.36812 15.9421C3.37493 18.8485 5.18955 20.8976 8.09879 20.8908L12.0121 20.8713"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.6179 18.5669C18.3705 19.8143 16.3477 19.8143 15.1003 18.5669C13.852 17.3195 13.852 15.2967 15.1003 14.0493C16.3477 12.8019 18.3705 12.8019 19.6179 14.0493C20.8653 15.2967 20.8653 17.3195 19.6179 18.5669Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path d="M19.6172 18.5669L21.3483 20.2978" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.4" d="M15.0331 3.11035L15.0497 9.69846L12.2523 8.78677L9.43747 9.715L9.42969 3.13468" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </x-slot>
            Cek Transaksi
        </x-topnav>
        <x-topnav :link="route('price_list')" :active="request()->is('price-list')">
            <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                />
            </svg>
            </x-slot>
            Daftar Harga
        </x-topnav>
        <x-topnav :link="route('leaderboard')" :active="request()->is('leaderboard')">
            <x-slot name="icon">
                <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.67637 14.6445H5.44301C4.66172 14.6445 4.02832 15.2779 4.02832 16.0592V19.5852C4.02832 20.3636 4.66464 20.9999 5.44301 20.9999H19.5578C20.3361 20.9999 20.9725 20.3636 20.9725 19.5852V17.9419C20.9725 17.1606 20.3391 16.5272 19.5578 16.5272H15.3244"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        opacity="0.4"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12.8887 3.2372L13.5357 4.53124C13.5999 4.6587 13.7225 4.74627 13.8646 4.7667L15.3133 4.97492C15.5478 5.00605 15.7132 5.22108 15.6821 5.45653C15.6694 5.55188 15.6247 5.6414 15.5546 5.70853L14.5067 6.71555C14.4036 6.81284 14.3569 6.95587 14.3812 7.09597L14.6293 8.51747C14.6673 8.75488 14.5057 8.97768 14.2683 9.01563C14.1759 9.0312 14.0796 9.01466 13.9959 8.97087L12.7019 8.3005C12.5744 8.23434 12.4236 8.23434 12.2961 8.3005L11.0011 8.97185C10.789 9.08374 10.5254 9.00298 10.4135 8.79087C10.3687 8.7072 10.3531 8.61088 10.3677 8.51747L10.6158 7.09695C10.6402 6.95684 10.5935 6.81381 10.4903 6.71555L9.44148 5.7095C9.27121 5.54507 9.26635 5.27362 9.43078 5.10237C9.49791 5.03329 9.58742 4.98756 9.68277 4.97492L11.1315 4.7667C11.2736 4.74724 11.3962 4.6587 11.4604 4.53124L12.1093 3.2372C12.2203 3.02218 12.4859 2.93753 12.7009 3.04942C12.7817 3.09126 12.8468 3.15645 12.8887 3.2372Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        d="M15.3238 20.9994V13.0006C15.3238 12.2193 14.6904 11.5859 13.9091 11.5859H11.0905C10.3121 11.5859 9.67578 12.2223 9.67578 13.0006V20.9994"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </svg>
            </x-slot>
            Papan Peringkat
        </x-topnav>

        <div class="relative flex" x-data="{ open: false }" x-on:keydown.escape.prevent.stop="open = false" x-on:focusin.window="if (! $refs.panel.contains(event.target)) open = false" x-id="['dropdown-button']">
            <div class="relative flex">
                <button
                    x-ref="button"
                    x-on:click="open = !open"
                    :aria-expanded="open.toString()"
                    :aria-controls="$id('dropdown-button')"
                    type="button"
                    class="relative z-10 -mb-px flex items-center space-x-2 border-b-2 pt-px bg-transparent text-sm font-medium outline-none transition-colors duration-200 ease-out border-transparent hover:border-primary-500 hover:text-primary-300"
                >
                    <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.001 21H8.56634C5.61823 21 3.7832 18.9188 3.7832 15.9736V8.02638C3.7832 5.08119 5.61823 3 8.56634 3H17.001C19.9492 3 21.7832 5.08119 21.7832 8.02638V15.9736C21.7832 18.9188 19.9394 21 17.001 21Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path opacity="0.4" d="M18.1351 15.3438H14.5264" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.5492 7.9043L14.998 10.4554" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path opacity="0.4" d="M11.0404 9.1628H7.43164M9.23601 7.35938V10.9681" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.5121 16.6429L7.96094 14.0918M10.5121 14.0918L7.96094 16.6429" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>Kalkulator</span>
                </button>
            </div>
            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top
                x-on:click.outside="open = false"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute -left-[130%] z-10 mt-[4.25rem] w-screen max-w-[360px] transform px-2 sm:px-0 opacity-100 translate-y-0"
            >
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <div class="relative grid gap-6 bg-murky-800 px-2 py-3 sm:gap-8 sm:p-6">
                        <a
                            class="-m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-murky-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500"
                            href="{{ route('winrate') }}"
                            style="outline: none;"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 flex-shrink-0 text-primary-500">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"
                                ></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-white">Win Rate</p>
                                <p class="text-mukry-200 mt-1 text-sm">Digunakan untuk menghitung total jumlah match yang harus ditempuh untuk mencapai target win rate yang diinginkan.</p>
                            </div>
                        </a>
                        <a
                            class="-m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-murky-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500"
                            href="{{ route('magicwheel') }}"
                            style="outline: none;"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 flex-shrink-0 text-primary-500">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"
                                ></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-white">Magic Wheel</p>
                                <p class="text-mukry-200 mt-1 text-sm">Digunakan untuk mengetahui total maksimal diamond yang dibutuhkan untuk mendapatkan skin Legends.</p>
                            </div>
                        </a>
                        <a
                            class="-m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-murky-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500"
                            href="{{ route('zodiac') }}"
                            style="outline: none;"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 flex-shrink-0 text-primary-500">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"
                                ></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-white">Zodiac</p>
                                <p class="text-mukry-200 mt-1 text-sm">Digunakan untuk mengetahui total diamond maksimal yang dibutuhkan untuk mendapatkan skin Zodiacs.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ml-auto flex h-full items-center justify-between space-x-2">
            <div class="desktop-only"></div>
            <div class="lg:flex space-x-2 lg:flex-1 lg:items-center lg:justify-end gap-2"></div>

            <div class="flex h-full justify-end gap-2">
                <x-topnav_action :link="route('signin')">
                    <x-slot name="icon">
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
                    </x-slot>
                    Masuk
                </x-topnav_action>
                <x-topnav_action :link="route('signup')">
                    <x-slot name="icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                    </x-slot>
                    Daftar
                </x-topnav_action>
            </div>
        </div>

    </div>
</nav>
