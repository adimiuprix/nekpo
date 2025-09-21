<x-layouts>
    <section id="winrate" class="relative overflow-hidden">
        <div class="mx-auto w-full max-w-xl space-y-8 px-4 pt-10 pb-48">
            <div>
                <a href="/" style="outline: none;">
                    <img src="{{ asset('assets/logo/drgedrg.gif') }}" width="300" height="300" alt="WeJizy." class="mx-auto h-32 w-auto" style="color: transparent;" />
                </a>
                <h2 class="mt-2 text-center text-3xl font-bold tracking-tight text-white">Kalkulator Win Rate</h2>
                <p class="mt-2 text-center text-sm text-white">
                    Digunakan untuk menghitung total jumlah pertandingan yang harus diambil untuk mencapai target tingkat kemenangan yang diinginkan.
                </p>
            </div>
            <form class="mt-8 space-y-6">
                <div class="space-y-6 rounded-md shadow-sm">
                    <div class="flex flex-col gap-y-2">
                        <label for="total-match" class="block text-xs font-medium text-white">Total Pertandingan Anda Saat Ini</label>
                        <div class="flex flex-col items-start">
                            <input
                                class="relative block w-full appearance-none rounded-none border border-murky-600 bg-murky-700 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent !rounded-md"
                                type="text"
                                id="tMatch"
                                placeholder="Contoh: 223"
                                name="total-match"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="total-winrate" class="block text-xs font-medium text-white">Total Win Rate Anda Saat Ini</label>
                        <div class="flex flex-col items-start">
                            <input
                                class="relative block w-full appearance-none rounded-none border border-murky-600 bg-murky-700 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent !rounded-md"
                                type="text"
                                id="tWr"
                                placeholder="Contoh: 54"
                                name="total-winrate"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="winrate-request" class="block text-xs font-medium text-white">Win Rate Total yang Anda Inginkan</label>
                        <div class="flex flex-col items-start">
                            <input
                                class="relative block w-full appearance-none rounded-none border border-murky-600 bg-murky-700 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent !rounded-md"
                                type="text"
                                id="wrReq"
                                placeholder="Contoh: 70"
                                name="winrate-request"
                            />
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-x-4">
                    <button
                        class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 group relative flex w-full"
                        type="button"
                        id="hasil"
                    >
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-primary-600 transition-colors group-hover:text-primary-500">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"
                                ></path>
                            </svg>
                        </span>
                        Hitung
                    </button>
                </div>
                <div class="flex items-center gap-x-4">
                    <a class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-400 group relative flex w-full outline-none" href="/id/joki-ranked">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-primary-600 transition-colors group-hover:text-primary-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                            </svg>
                        </span>
                        Joki Ranked
                    </a>
                    <a class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-400 group relative flex w-full outline-none" href="id/joki-gendong">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-primary-600 transition-colors group-hover:text-primary-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                            </svg>
                        </span>
                        Joki Gendong
                    </a>
                </div>
            </form>
            <div class="rounded-md border border-transparent bg-murky-700 p-4 text-center text-sm font-semibold uppercase ring-2 ring-primary-500 resultDiv" style="display: none;">
                <!--Dynamic content will be inserted here -->
            </div>
        </div>
    </section>
    <script type="text/javascript">
        // Variables
        const tMatch = document.querySelector("#tMatch");
        const tWr = document.querySelector("#tWr");
        const wrReq = document.querySelector("#wrReq");
        const hasil = document.querySelector("#hasil");
        const resultDiv = document.querySelector(".resultDiv");

        // Hide the resultDiv initially
        resultDiv.style.display = "none";

        // Functions
        function res() {
            const resultNum = rumus(tMatch.value, tWr.value, wrReq.value);
            const text = `Anda memerlukan sekitar ${resultNum} tanpa lose untuk mendapatkan ${wrReq.value}% Win Rate.`;
            resultDiv.innerHTML = text;

            // Show the resultDiv
            resultDiv.style.display = "block";
        }

        function rumus(tMatch, tWr, wrReq) {
            let tWin = tMatch * (tWr / 100);
            let tLose = tMatch - tWin;
            let sisaWr = 100 - wrReq;
            let wrResult = 100 / sisaWr;
            let seratusPersen = tLose * wrResult;
            let final = seratusPersen - tMatch;
            return Math.round(final);
        }

        // Main
        window.addEventListener("load", init);

        function init() {
            load();
            eventListener();
        }

        function load() {}

        function eventListener() {
            hasil.addEventListener("click", res);
        }
    </script>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="-mt-8 transition delay-150 duration-300 ease-in-out print:hidden md:-mt-24">
        <path d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#000" fill-opacity="1" class="path-0 transition-all bg-gradient-to-l delay-150 duration-300 ease-in-out"></path>
    </svg>
</x-layouts>