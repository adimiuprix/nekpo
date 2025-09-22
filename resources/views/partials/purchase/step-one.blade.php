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
        <x-input type="number" id="user_id" name="user_id" label="User ID" placeholder="Ketikan ID" />
        <x-input type="number" id="zone" name="zone_id" label="Server" placeholder="Ketikan Server" />
    </div>
    <div class="px-4 pb-4 text-[10px] sm:px-6 sm:pb-6">
        <x-alert warning="Kesalahan dalam input ID bukan merupakan tanggung jawab dari kami, jadi pastikan anda sudah input ID dengan benar!" />
    </div>
</div>