<x-auth-layout>
    <div class="mx-auto w-full max-w-md space-y-8 mt-5">

        <div>
            <h2 class="mt-2 text-2xl font-bold tracking-tight text-white sm:text-3xl">Masuk</h2>
            <p class="mt-2 text-sm text-white">Masuk dengan akun yang telah Anda daftarkan.</p>
        </div>

        <form action="https://cupu.me/id/sign-in" method="post" class="mt-8 space-y-6">
            @csrf
            <div class="space-y-3 rounded-md shadow-sm">

                <x-input label="User ID" type="text" id="username" name="username" placeholder="Masukkan ID Game" :required="true" />
                
                <div x-data="{ isPassword: true }">
                    <label for="password" class="block text-xs font-medium text-white pb-2">Kata sandi</label>
                    <div class="relative">
                        <div class="flex flex-col items-start">
                            <input
                                class="relative block w-full appearance-none border border-murky-600 bg-melpa-800 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 rounded-md"
                                :type="isPassword ? 'password' : 'text'"
                                id="password"
                                autocomplete="current-password"
                                placeholder="Kata sandi"
                                name="password"
                                type="password"
                            />
                        </div>
                        <button type="button" class="absolute top-0 right-4 z-20 h-full text-white" @click="isPassword = !isPassword">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                                class="h-4 w-4 block"
                                :class="{'hidden': !isPassword, 'block': isPassword}"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"
                                ></path>
                            </svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                                class="h-4 w-4 hidden"
                                :class="{'hidden': isPassword, 'block': !isPassword}"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                ></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <span class="text-xs text-rose-500"></span>
                </div>
                <div class="relative flex justify-end text-sm">
                    <a class="text-decoration-none text-danger text-xs font-medium" style="color: #ff7c7c;" href="https://cupu.me/id/forgot-password">Forgot Password?</a>
                </div>
                <a class="text-decoration-none text-danger text-xs font-medium" style="color: #ff7c7c;" href="https://cupu.me/id/forgot-password"><br /> </a>
            </div>
            <a class="text-decoration-none text-danger text-xs font-medium" style="color: #ff7c7c;" href="https://cupu.me/id/forgot-password">
                <div class="flex items-center justify-between"></div>
                <div></div>
                <div>
                    <button
                        class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-500 disabled:cursor-not-allowed disabled:opacity-75 group relative flex w-full"
                        type="submit"
                        name="tombol"
                        value="submit"
                    >
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                                class="h-5 w-5 text-white transition-colors group-hover:text-primary-500"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                ></path>
                            </svg>
                        </span>
                        Masuk
                    </button>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 text-foreground">Belum memiliki akun?</span>
                </div>
            </a>
            <a
                class="items-center justify-center rounded-md px-4 py-2 text-sm font-medium duration-300 group relative flex w-full bg-primary-500 text-muted-foreground hover:bg-muted/75"
                href="https://cupu.me/id/sign-up"
                style="outline: none;"
            >
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        class="h-5 w-5 text-background transition-colors group-hover:text-muted-foreground"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"
                        ></path>
                    </svg>
                </span>
                Daftar
            </a>
            <div class="mt-3"></div>
        </form>

    </div>
</x-auth-layout>