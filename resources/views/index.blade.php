<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - WebStation Bali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-color60">
    {{-- Navbar --}}
    <section class="container mx-auto">
        <div class="fixed container mx-auto md:mx-auto w-full px-10 flex justify-between  py-2 items-center text-sm text-white bg-color30#2"
            data-aos="fade-down" data-aos-duration="1500">
            <div
                class="flex justify-center items-center space-x-2 hover:drop-shadow-lg transition ease-in-out duration-400">
                <img src="assets/logo/logo.svg" alt="Logo" width="40px" height="40px">
                <span class="text-sm font-bold hidden md:inline">WebStation Bali</span>
            </div>
            <div>
                <ul class="hidden lg:flex justify-center items-center text-xs space-x-9">
                    <a href="#" class="underline">Home</a>
                    <a href="#"
                        class="hover:underline hover:text-color30#1 transition ease-in-out duration-200">Our
                        Services</a>
                    <a href="#"
                        class="hover:underline hover:text-color30#1 transition ease-in-out duration-200">Why
                        Us</a>
                    <a href="#"
                        class="hover:underline hover:text-color30#1 transition ease-in-out duration-200">News</a>
                    <a href="#"
                        class="hover:underline hover:text-color30#1 transition ease-in-out duration-200">About
                        Us</a>
                    <a href="#"
                        class="hover:underline hover:text-color30#1 transition ease-in-out duration-200">Contact Us</a>
                </ul>
            </div>
            <div class="hidden lg:flex justify-center items-center space-x-3 text-xs">
                <a href="#"
                    class="py-3 px-7 bg-color10 border-2 border-color10 rounded-full font-medium hover:text-slate-400 transition ease-in-out duration-300">Login</a>
                <a href="#"
                    class="py-3 px-7 border-2 border-color10 rounded-full font-medium hover:text-slate-400 transition ease-in-out duration-300">Register</a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8 lg:hidden" id="toggleMobile">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <div class="lg:hidden h-screen bg-color30#1 flex justify-center items-center" id="menuMobile"
            data-aos="fade-down" data-aos-duration="1500">
            <ul class="lg:hidden text-center space-y-10">
                <a href="#" class="underline block ">Home</a>
                <a href="#"
                    class="hover:underline block hover:text-color30#1 transition ease-in-out duration-200">Our
                    Services</a>
                <a href="#"
                    class="hover:underline block hover:text-color30#1 transition ease-in-out duration-200">Why
                    Us</a>
                <a href="#"
                    class="hover:underline block hover:text-color30#1 transition ease-in-out duration-200">News</a>
                <a href="#"
                    class="hover:underline block hover:text-color30#1 transition ease-in-out duration-200">About
                    Us</a>
                <a href="#"
                    class="hover:underline block hover:text-color30#1 transition ease-in-out duration-200">Contact
                    Us</a>
            </ul>
        </div>
    </section>
    {{-- End Navbar --}}

    {{-- Hero Section --}}
    <section class="h-screen w-screen">
        <div class="container mx-auto">

        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Footer --}}
    {{-- End Footer --}}

    {{-- Etc --}}
    {{-- End Etc --}}

    {{-- Script --}}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $("#menuMobile").hide();
            $("#toggleMobile").click(function() {
                $("#menuMobile").slideToggle(500);
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
