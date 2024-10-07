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
    </style>
    <title></title>
</head>

<body class="font-poppins">
    <main>
        <section class="background">
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
            <section class="h-screen flex items-center justify-center">
                <div class="text-white text-center">
                    <h2 class="text-md font-medium">Hi, Visitor!</h2>
                    <h1 class="text-6xl font-bold uppercase text-white drop-shadow-[0_0_10px_rgba(255,255,255,1)]">
                        Welcome</h1>

                    <h2 class="uppercase font-medium text-xl tracking-widest">To XI PPLG</h2>
                </div>
            </section>
        </section>
    </main>

    {{-- Flowbite CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
