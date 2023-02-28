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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    
    <body class="font-sans antialiased space-y-2 bg-fixed bg-cover bg-no-repeat bg-[url('https://img.freepik.com/fotos-gratis/colheita-de-macarrao-e-vegetais_23-2147694057.jpg?w=826&t=st=1676648831~exp=1676649431~hmac=29aa4376a9248edf689361116e86ffd000a9e684a1173988e33b0a85c32ed393')]">

        <header class="bg-gray-400 font-sans leading-normal tracking-normal pb-16 mb-12">
            <nav class="flex items-center justify-between flex-wrap bg-orange-600 p-5 fixed w-full z-10 top-0 pr-10">
                <div class="flex items-center flex-shrink-0 text-white mr-6">

                <div class="shrink-0 flex items-center">
                    <a href="{{ route('page.index') }}">
                        <x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                </div>
        
                <div class="block lg:hidden">
                    <button id="nav-toggle" class="flex items-center px-4 py-4 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
        
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <a class="inline-block text-slate-50 no-underline hover:text-neutral-800 hover:text-underline py-2 px-4" href="{{Route('recipes.index') }}">Receitas</a>
                        </li>

                        @if (Route::has('login'))
                        @auth
                        <li class="mr-3">
                            <a class="inline-block text-Black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('users.index')}}">Users</a>
                        </li>

                        <li class="mr-3">
                            <a class="inline-block text-Black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href=" {{route('dashboard')}}">Dashboard</a>
                        </li>

                        
                        <li class="mr-3">
                        
                            <a href="{{route('profile.edit')}}" class="inline-block text-Black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Meu perfil</a>
                            
                        </li>
                        
                        <li class="mr-3">
                            <form method="POST" action="{{ route('logout') }}">
                              @csrf

                                @if (auth()->user()->image)
                                
                              
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4">
                                    <img src=" {{ asset('/storage/'.auth()->user()->image) }}" width="50px" height="50px" class="rounded-full" alt="log-out">
                                </a>
                            
                                @else
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4">
                                
                                <img src=" https://ionicframework.com/docs/img/demos/avatar.svg " width="50px" height="auto" class="rounded-full" alt="log-out">
                                </a>               
                                
                                @endif
                            </form>
                        </li>

                        
                        @else
                        <li class="mr-3">
                            <a class="inline-block text-black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('login')}}">Log-in</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block text-black-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="https://www.youtube.com/c/ReceitaF%C3%A1cil_jl" target="_blank">Youtube</a>
                        </li>

                        @endauth
                        @endif

                    </ul>
                </div>
            </nav>

            

        </header>
        
        <div class="place-content-center py-5 max-w-full max-h-full">
            @yield('body')
        </div>

        <footer class="p-2 bg-white sm:p-6 dark:bg-orange-600">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('page.index') }}">
                        <x-application-logo class="block h-15 w-auto fill-current text-gray-800" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Receita Fácil</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-200">
                            <li class="mb-4">
                                <a href="https://instagram.com/receitaa.facil?igshid=YmMyMTA2M2Y=" class="hover:underline" target="_blank">Instagram</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.facebook.com/receitafacilcasalfranca/" class="hover:underline" target="_blank">Facebook</a>
                            </li>
                            <li>
                                <a href="https://receitafaciljl.wixsite.com/nossaloja" class="hover:underline" target="_blank">Loja</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline">Noz-holding™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/receitafacilcasalfranca/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://instagram.com/receitaa.facil?igshid=YmMyMTA2M2Y=" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="https://www.youtube.com/c/ReceitaF%C3%A1cil_jl" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z"/></svg>
                        <span class="sr-only">Youtube</span>
                    </a>
                </div>
            </div>
        </footer>

        <script>
            //Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function(){
                document.getElementById("nav-content").classList.toggle("hidden");
            }
        </script>
    </body>
</html>