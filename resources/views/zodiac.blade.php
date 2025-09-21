<x-layouts>
    <section id="zodiac" class="relative overflow-hidden">
        <div class="mx-auto w-full max-w-xl space-y-8 px-4 pt-24 pb-48">
            <div>
                <a href="/" style="outline: none;">
                    <img src="{{ asset('assets/logo/drgedrg.gif') }}" width="300" height="300" class="mx-auto h-32 w-auto" style="color: transparent;" alt="WeJizy." />
                </a>
                <h2 class="mt-2 text-center text-3xl font-bold tracking-tight text-white">Kalkulator Zodiac</h2>
                <p class="mt-2 text-center text-sm text-white">
                    Digunakan untuk mengetahui total maksimal diamond yang dibutuhkan untuk mendapatkan skin Zodiac.
                </p>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true" />
                <div class="space-y-4 rounded-md shadow-sm">
                    <div class="flex flex-col gap-y-2">
                        <label for="range" class="block text-xs font-medium text-white">Geser sesuai dengan Titik Zodiac Anda</label>
                        <input type="range" class="range-lg h-2 w-full cursor-pointer appearance-none rounded-lg bg-murky-200 accent-primary-500" min="0" max="99" value="50" id="jangkauanku" onchange="ButtonShow(this.value)" />
                        <div class="flex items-center justify-between pt-4">
                            <div class="font-semibold">Poin Bintang Kamu <span class="text-primary-500" id="poinBintang">50</span></div>
                            <div class="font-semibold">Membutuhkan Maksimal <span class="text-primary-500" id="JmlDiamond">850</span> Diamond</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-x-4">
                    <a
                        class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-400 group relative flex w-full outline-none"
                        href="https://melpa.cloud/id/mobile-legends"
                    >
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-primary-600 transition-colors group-hover:text-primary-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                            </svg>
                        </span>
                        Top Up Diamond Sekarang!
                    </a>
                </div>
            </form>
        </div>
    </section>
    <script>
        function updateValues() {
            const rangeSlider = document.getElementById("jangkauanku");
            const poinBintang = document.getElementById("poinBintang");
            const jmlDiamond = document.getElementById("JmlDiamond");

            const point = rangeSlider.value;
            poinBintang.innerHTML = point;

            let result;
            if (point < 90) {
                result = Math.ceil(((2000 - point * 20) * 850) / 1000);
            } else {
                result = Math.ceil(2000 - point * 20);
            }

            jmlDiamond.innerHTML = result;
        }
        document.getElementById("jangkauanku").oninput = updateValues;
        document.addEventListener("DOMContentLoaded", updateValues);
    </script>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="-mt-8 transition delay-150 duration-300 ease-in-out print:hidden md:-mt-24">
        <path d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#000" fill-opacity="1" class="path-0 transition-all bg-gradient-to-l delay-150 duration-300 ease-in-out"></path>
    </svg>
</x-layouts>