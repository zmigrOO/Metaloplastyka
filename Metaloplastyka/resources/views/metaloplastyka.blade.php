<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="h-full w-full -z-10 fixed bg-welding"></div>
    <div class="fixed h-1/10 z-20 w-full bg-opacity-80 bg-stone-400">
        <div class="relative -translate-y-1/2 top-1/2 w-fit">
            <span class="mr-4 text-4xl">Metaloplastyka</span>
        </div>
        <div class="absolute -translate-y-1/2 right-0">
            <ul class="md:px-2 ml-auto md:flex md:space-x-2 absolute md:relative top-full left-0 right-0">
                <li>
                    <a href="/hurtownia" class="flex md:inline-flex p-4 items-center hover:bg-gray-50">
                        <span>Hurtownia</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center hover:bg-gray-50">
                        <span>Products</span>
                    </a>
                </li>
                <li class="relative menu_item">
                    <a href="#"
                        class="flex justify-between md:inline-flex p-4 items-center hover:bg-gray-50 space-x-2">
                        <span>Service</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24">
                            <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                        </svg>
                    </a>
                    <ul
                        class="dropdown_item transition duration-300 md:absolute z-10 top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
                        <li>
                            <a href="#" class="flex px-4 py-3 z-10 hover:bg-gray-50">
                                Web development
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                Web Design
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                Machine Learning
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center hover:bg-gray-50">
                        <span>About us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <main class="h-9/10 w-full fixed bottom-0 -z-0 overflow-y-scroll bg-stone-300 bg-opacity-75">
        {{ $slot }}
        <footer class="bg-stone-500 block w-full bg-opacity-75">coded with laravel by Patryk Żmigrodzki @2023</footer>
    </main>
    </div>
</body>

</html>
