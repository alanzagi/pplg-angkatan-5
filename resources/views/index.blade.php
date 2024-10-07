<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Flowbite CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    {{-- TailwindCSS --}}
    @vite('resources/css/app.css')
    {{-- CSS Vanilla from public --}}
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .font-poppins {
            font-family: "Poppins", sans-serif;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }

        .background {
            position: fixed;
            width: 100vw;
            max-width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            background: #4e54c8;
            overflow: hidden;
        }

        .background li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 19s linear infinite;
        }




        .background li:nth-child(0) {
            left: 49%;
            width: 177px;
            height: 177px;
            bottom: -177px;
            animation-delay: 1s;
        }

        .background li:nth-child(1) {
            left: 41%;
            width: 109px;
            height: 109px;
            bottom: -109px;
            animation-delay: 1s;
        }

        .background li:nth-child(2) {
            left: 21%;
            width: 187px;
            height: 187px;
            bottom: -187px;
            animation-delay: 4s;
        }

        .background li:nth-child(3) {
            left: 68%;
            width: 162px;
            height: 162px;
            bottom: -162px;
            animation-delay: 3s;
        }

        .background li:nth-child(4) {
            left: 84%;
            width: 148px;
            height: 148px;
            bottom: -148px;
            animation-delay: 12s;
        }

        .background li:nth-child(5) {
            left: 89%;
            width: 191px;
            height: 191px;
            bottom: -191px;
            animation-delay: 19s;
        }

        .background li:nth-child(6) {
            left: 41%;
            width: 172px;
            height: 172px;
            bottom: -172px;
            animation-delay: 11s;
        }

        .background li:nth-child(7) {
            left: 42%;
            width: 129px;
            height: 129px;
            bottom: -129px;
            animation-delay: 22s;
        }

        .background li:nth-child(8) {
            left: 2%;
            width: 96px;
            height: 96px;
            bottom: -96px;
            animation-delay: 35s;
        }

        .background li:nth-child(9) {
            left: 72%;
            width: 143px;
            height: 143px;
            bottom: -143px;
            animation-delay: 1s;
        }

        .background li:nth-child(10) {
            left: 80%;
            width: 142px;
            height: 142px;
            bottom: -142px;
            animation-delay: 10s;
        }

        .background li:nth-child(11) {
            left: 82%;
            width: 157px;
            height: 157px;
            bottom: -157px;
            animation-delay: 55s;
        }

        .background li:nth-child(12) {
            left: 11%;
            width: 195px;
            height: 195px;
            bottom: -195px;
            animation-delay: 50s;
        }

        .background li:nth-child(13) {
            left: 47%;
            width: 108px;
            height: 108px;
            bottom: -108px;
            animation-delay: 35s;
        }

        .background li:nth-child(14) {
            left: 67%;
            width: 103px;
            height: 103px;
            bottom: -103px;
            animation-delay: 17s;
        }

        .background li:nth-child(15) {
            left: 45%;
            width: 172px;
            height: 172px;
            bottom: -172px;
            animation-delay: 74s;
        }

        .background li:nth-child(16) {
            left: 89%;
            width: 182px;
            height: 182px;
            bottom: -182px;
            animation-delay: 56s;
        }

        .background li:nth-child(17) {
            left: 70%;
            width: 155px;
            height: 155px;
            bottom: -155px;
            animation-delay: 67s;
        }

        .background li:nth-child(18) {
            left: 53%;
            width: 160px;
            height: 160px;
            bottom: -160px;
            animation-delay: 13s;
        }

        .background li:nth-child(19) {
            left: 87%;
            width: 201px;
            height: 201px;
            bottom: -201px;
            animation-delay: 36s;
        }

        .background li:nth-child(20) {
            left: 19%;
            width: 216px;
            height: 216px;
            bottom: -216px;
            animation-delay: 70s;
        }

        .gradient-background {
            background: linear-gradient(155deg, #4e54c8, #714ec8, #fe00ed);
            background-size: 180% 180%;
            animation: gradient-animation 18s ease infinite;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    <title></title>
</head>

<body class="font-poppins">
    <div class="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </div>

    <main>
        <section class="h-screen flex items-center justify-center relative z-10">
            <div class="text-white text-center">
                <h2 class="text-md font-medium md:text-lg">Hi, Visitor!</h2>
                <h1
                    class="text-6xl font-bold uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)] md:text-7xl">
                    Welcome</h1>

                <h2 class="uppercase font-medium text-xl tracking-widest md:text-2xl">To XI PPLG</h2>
            </div>
        </section>

        <section class="relative z-10">
            <div class="px-10 py-20 space-y-12">
                <div class="text-center">
                    <h2 class="text-2xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        Wonderful
                    </h2>
                    <h1
                        class="text-3xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)] md:text-5xl">
                        Class Gallery</h1>
                </div>

                <div class="grid grid-cols-1 gap-y-6 md:grid-cols-3 md:gap-x-6 md:gap-y-10">
                    <div
                        class="aspect-[16/9] bg-black overflow-hidden rounded-lg drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        <img src="{{ asset('images/foto.jpg') }}" alt="Foto"
                            class="w-full h-full object-cover transition duration-400 opacity-90 hover:scale-110">
                    </div>

                    <div
                        class="aspect-[16/9] bg-black overflow-hidden rounded-lg drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        <img src="{{ asset('images/foto.jpg') }}" alt="Foto"
                            class="w-full h-full object-cover transition duration-400 opacity-90 hover:scale-110">
                    </div>

                    <div
                        class="aspect-[16/9] bg-black overflow-hidden rounded-lg drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        <img src="{{ asset('images/foto.jpg') }}" alt="Foto"
                            class="w-full h-full object-cover transition duration-400 opacity-90 hover:scale-110">
                    </div>
                </div>
            </div>
        </section>

        <section class="relative z-10">
            <div class="px-10 py-20 space-y-10">
                <div class="text-center">
                    <h2 class="text-2xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        Every Day
                    </h2>
                    <h1 class="text-3xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        Schedule
                    </h1>
                </div>

                <div class="px-24 space-y-4 lg:px-80">
                    @php
                        $currentDay = \Carbon\Carbon::now()->format('l');
                    @endphp

                    @if ($currentDay == 'Monday')
                        <div class="text-center">
                            <div>
                                <h1
                                    class="text-xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                                    {{ $currentDay }}</h1>
                            </div>
                        </div>

                        <div class="font-medium text-sm text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>Sejarah</p>
                                <p>07:00 - 08:30</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Basis Data</p>
                                <p>08:30 - 10:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>10:00 - 10:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Basis Data</p>
                                <p>10:20 - 11:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>PPL</p>
                                <p>11:00 - 12:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>12:20 - 13:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>PPL</p>
                                <p>12:20 - 15:00</p>
                            </div>
                            <hr class="border">
                        </div>
                    @elseif ($currentDay == 'Tuesday')
                        <div class="text-center">
                            <div>
                                <h1
                                    class="text-xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                                    {{ $currentDay }}</h1>
                            </div>
                        </div>

                        <div class="font-medium text-sm text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>Agama</p>
                                <p>07:00 - 09:15</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Basis Data</p>
                                <p>09:15 - 10:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>10:00 - 10:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Basis Data</p>
                                <p>10:20 - 12:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>12:20 - 13:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Bahasa Inggris</p>
                                <p>12:20 - 15:00</p>
                            </div>
                            <hr class="border">
                        </div>
                    @elseif ($currentDay == 'Wednesday')
                        <div class="text-center">
                            <div>
                                <h1
                                    class="text-xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                                    {{ $currentDay }}</h1>
                            </div>
                        </div>

                        <div class="font-medium text-sm text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>PJOK</p>
                                <p>07:00 - 08:30</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>PWPB</p>
                                <p>08:30 - 10:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>10:00 - 10:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>PWPB</p>
                                <p>10:20 - 12:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>12:20 - 13:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>PWPB</p>
                                <p>12:20 - 15:00</p>
                            </div>
                            <hr class="border">
                        </div>
                    @elseif ($currentDay == 'Thursday')
                        <div class="text-center">
                            <div>
                                <h1
                                    class="text-xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                                    {{ $currentDay }}</h1>
                            </div>
                        </div>

                        <div class="font-medium text-sm text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>PBO</p>
                                <p>07:00 - 10:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>10:00 - 10:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Bahasa Indonesia</p>
                                <p>10:20 - 12:20</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>12:20 - 13:00</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Matematika</p>
                                <p>12:20 - 15:00</p>
                            </div>
                            <hr class="border">
                        </div>
                    @elseif ($currentDay == 'Friday')
                        <div class="text-center">
                            <div>
                                <h1
                                    class="text-xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                                    {{ $currentDay }}</h1>
                            </div>
                        </div>

                        <div class="font-medium text-sm text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>PPKN</p>
                                <p>07:00 - 08:15</p>
                            </div>
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>P5</p>
                                <p>08:15 - 09:30</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Istirahat</p>
                                <p>09:30 - 09:50</p>
                            </div>
                            <hr class="border">
                            <div class="flex justify-between my-4">
                                <p>Mandarin</p>
                                <p>09:50 - 11:00</p>
                            </div>
                            <hr class="border">
                        </div>
                    @else
                        <div class="text-center">
                            <div>
                                <h1
                                    class="text-xl font-medium uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                                    {{ $currentDay }}</h1>
                            </div>
                        </div>

                        <div class="font-medium text-sm text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            <hr class="border border-1">
                            <div class="flex justify-between my-4">
                                <p>Belajar Di Rumah</p>
                                <p>07:00 - 15:00</p>
                            </div>
                            <hr class="border border-1">
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-transparent relative z-10 border-t border-white">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('images/pplglogo.png') }}"
                            class="h-8 me-3 rounded-full drop-shadow-[0_0_5px_rgba(255,255,255,1)]" alt="Alan Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">XI
                            PPLG</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2
                            class="mb-6 text-sm font-semibold text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)] uppercase">
                            Created By</h2>
                        <ul class="text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)] font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Alan "Zagi"</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2
                            class="mb-6 text-sm font-semibold uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                            Follow us</h2>
                        <ul class="text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)] font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/alanzagi" class="hover:underline">Github</a>
                            </li>
                            <li>
                                <a href="https://instagram.com/famousclass_xi_pplg"
                                    class="hover:underline">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-white sm:text-center">© 2024 <a
                        href="https:/instagram.com/famousclass_xi_pplg" target="_blank"
                        class="text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)] hover:underline">Kelas
                        XI PPLG 5</a> | Dikelola oleh <a href="https://instagram.com/alanzagi" target="_blank"
                        class="hover:underline text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">Alan
                        "Zagi"</a></span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-white hover:drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-white hover:drop-shadow-[0_0_10px_rgba(255,255,255,1)] ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-white hover:drop-shadow-[0_0_10px_rgba(255,255,255,1)] ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-white hover:drop-shadow-[0_0_10px_rgba(255,255,255,1)] ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.449c-.902-.62.069-.607.069-.607a2.078 2.078 0 0 1 1.514 1.017 2.091 2.091 0 0 0 2.87.817 2.085 2.085 0 0 1 .622-1.313c-2.2-.25-4.513-1.101-4.513-4.902a3.84 3.84 0 0 1 1.025-2.661A3.573 3.573 0 0 1 5.128 3s.831-.266 2.726 1.014a9.324 9.324 0 0 1 4.969 0C15.719 2.734 16.55 3 16.55 3a3.564 3.564 0 0 1 .102 2.614 3.837 3.837 0 0 1 1.023 2.661c0 3.81-2.319 4.647-4.525 4.892a2.353 2.353 0 0 1 .674 1.827c0 1.32-.012 2.381-.012 2.707 0 .267.179.576.684.478A10.014 10.014 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    {{-- Flowbite CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
