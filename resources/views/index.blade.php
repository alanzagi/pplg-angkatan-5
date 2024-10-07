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






    {{-- Flowbite CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
