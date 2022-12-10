<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx'])
        
    </head>
    
    <body class="font-sans antialiased space-y-2">

        <header class="bg-gray-400 font-sans leading-normal tracking-normal pb-20 mb-10">
            <nav class="flex items-center justify-between flex-wrap bg-orange-600 p-5 fixed w-full z-10 top-0 pr-10">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <a class="text-white no-underline hover:text-white hover:no-underline" href="{{route('page.index')}}">
                        <span class="text-4xl pl-2 dark:hover:text-black"><i class="em em-grinning"></i> Receita Fácil</span>
                    </a>
                </div>
        
                <div class="block lg:hidden">
                    <button id="nav-toggle" class="flex items-center px-4 py-4 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
        
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <a class="inline-block text-slate-50 no-underline hover:text-neutral-800 hover:text-underline py-2 px-4" href="#">Receitas</a>
                        </li>

                        @if (Route::has('login'))
                        @auth
                        <li class="mr-3">
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('users.index')}}">Users</a>
                        </li>

                        <li class="mr-3">
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Dashboard</a>
                        </li>
                        <li class="mr-3">
                            <!-- Dropdown Cofigurations -->
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-orange-800 dark:hover:bg-orange-900 dark:focus:ring-orange-800" type="button">{{ Auth::user()->name }} <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownMenu" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton">
                                  <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                  </li>
                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="mr-3">
                            <a class="inline-block text-black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/login">Log-in</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block text-black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="https://www.youtube.com/c/ReceitaF%C3%A1cil_jl">Youtube</a>
                        </li>

                        @endauth
                        @endif

                    </ul>
                </div>
            </nav>

            

        </header>
        
        <div class="place-content-center">
            @yield('body')
        </div>


        <script>
            //Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function(){
                document.getElementById("nav-content").classList.toggle("hidden");
            }
        </script>
    </body>
</html>
