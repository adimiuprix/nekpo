<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <meta http-equiv="Content-Security-Policy" content="object-src 'none'" />
        <meta http-equiv="Content-Security-Policy" content="base-uri 'self'" />
        <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload" />
        <meta http-equiv="X-Content-Type-Options" content="nosniff" />
        <meta http-equiv="X-XSS-Protection" content="1; mode=block" />
        <!-- SEO Meta Tags -->
        <meta name="theme-color" content="#ffffff" />
        <meta property="og:title" content="CUPU STORE -  Platform Top Up Game Termurah Se-Indonesia" />
        <meta property="og:type" content="website" />
        <meta property="og:keywords" content="Cupu Store,topupml,topupff,ff,ml,topup murah, Cupu,internasional" />
        <meta property="og:description" content="Layanan top up game dan voucher terlengkap dengan proses yang cepat dan aman buka 24 Jam dengan channel pembayaran terlengkap Indonesia." />
        <meta property="og:url" content="" />
        <meta property="og:image" content="{{ asset('assets/logo/ysirfuf.png') }}" />
        <meta name="title" content="CUPU STORE -  Platform Top Up Game Termurah Se-Indonesia" />
        <meta name="description" content="Layanan top up game dan voucher terlengkap dengan proses yang cepat dan aman buka 24 Jam dengan channel pembayaran terlengkap Indonesia." />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/logo/ysirfuf.png') }}" />
        <!-- Title -->
        <title>CUPU STORE - Platform Top Up Game Termurah Se-Indonesia</title>
        <!-- Stylesheets and Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/placeholder-loading/0.7.0/placeholder-loading.min.css" />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&amp;display=swap");

            :root {
                --warna_1: #262727;
                --warna_2: #262727;
                --warna_3: #a58c6f;
                --warna_4: #262727;
                --gradient-theme: linear-gradient(to right, var(--warna_1) 0%, var(--warna_2) 50%, var(--warna_2) 100%);
            }
        </style>
        <style>
            .bg-primary-400 {
            background-color: var(--warna_1);
            }
            .rounded-\[9999px\],
            .rounded-full {
            border-radius: 9999px;
            }
            .w-1\/4 {
            width: 25%;
            }
            .h-1 {
            height: 0.25rem;
            }
            .bg-murky-9000 {
            --tw-bg-opacity: 1;
            background-color: var(--warna_4);
            }
            .hover\:animate-bounce:hover {
            animation: bounce 1s;
            }
            .to-black {
            --tw-gradient-to: #000 var(--tw-gradient-to-position);
            }
            .chat-sdk-container {
            position: fixed;
            z-index: 9999;
            font-family: "Inter", sans-serif;
            }
            .chat-sdk-button {
            border-radius: 9999px;
            background-color: oklch(84.26% 0.086 219.81);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            padding: 0.75rem;
            position: relative;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('assets/css/x0xx0x0x0x0xx0.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/0xx00xxx0x00x0tmplttm0x0xxzx0xxXx0x0xx0xx.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/0x0x0x00ordr0x0x.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/0x0x0x0x00xx00x0x0x0x00x0x0x0x0x0x00xxx.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/oxooxoxoxoxordxoxoxxo.css') }}" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.0/dist/cdn.min.js"></script>
    </head>
    <body class="bg-gradient-theme text-white antialiased">

        <x-search />

        <main class="relative">

            <x-header />

            @include('mobile_navigation')

            {{ $slot }}

            <x-footer />
            <!-- Customer Service Floating Chat -->
            <a href="https://wa.me/" id="chat-container" class="chat-sdk-container" style="bottom: 1rem; right: 1rem;">
                <div class="chat-sdk-button">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: oklch(25.62% 0 0); width: 20px; height: 20px;">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 14v-3a8 8 0 1 1 16 0v3"></path>
                        <path d="M18 19c0 1.657 -2.686 3 -6 3"></path>
                        <path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z"></path>
                        <path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z"></path>
                    </svg>
                </div>
            </a>

        </main>
        <!-- JavaScript Libraries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.lottielab.com/s/lottie-player@1.x/player-web.min.js"></script>
        <script src="{{ asset('assets/js/oo324ddod2323sd2d2mppmx.js') }}"></script>
        <script src="assets/js/main.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            var delay = (function () {
                var e = 0;
                return function (r, a) {
                    clearTimeout(e), (e = setTimeout(r, a));
                };
            })();
            $("#searchProds").keyup(function () {
                let e = $(this).val();
                e.length < 1
                    ? ($(".resultsearch").removeClass("show"), $(".resultsearch li").remove())
                    : delay(function () {
                        $.ajax({
                            url: "https://cupu.me/id/cari/index",
                            method: "POST",
                            data: {
                                data: e,
                            },
                            beforeSend: function () {
                                $(".resultsearch li").remove();
                            },
                            success: function (e) {
                                $(".resultsearch").append(e), $(".resultsearch").addClass("show");
                            },
                        });
                    }, 100);
            });

            document.getElementById("searchProds").addEventListener("input", function () {
                var lottieContainer = document.getElementById("lottie-container");
                if (lottieContainer) {
                    lottieContainer.style.display = "none";
                }
            });

            document.addEventListener("DOMContentLoaded", function () {
                let t = document.querySelectorAll("[data-tabs-toggle]"),
                    e = document.querySelectorAll("[data-tabs-content]"),
                    a = t[0],
                    l = document.querySelector(a.getAttribute("data-tabs-toggle"));
                a.classList.add("active"),
                    (a.style.backgroundColor = "var(--warna_3)"),
                    (l.style.display = "block"),
                    t.forEach(function (a) {
                        a.addEventListener("click", function () {
                            e.forEach(function (t) {
                                t.style.display = "none";
                            }),
                                t.forEach(function (t) {
                                    t.classList.remove("active"), (t.style.backgroundColor = "var(--warna_1)");
                                });
                            let a = this.getAttribute("data-tabs-toggle"),
                                l = document.querySelector(a);
                            (l.style.display = "block"), this.classList.add("active"), (this.style.backgroundColor = "var(--warna_3)");
                        });
                    });
            });

            function updateTimer() {}
            document.addEventListener("DOMContentLoaded", function () {
                updateTimer();
            });
        </script>
    </body>
</html>
