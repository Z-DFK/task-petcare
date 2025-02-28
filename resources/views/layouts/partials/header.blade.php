<header aria-label="Шапка сайта" class="mt-[35px] absolute top-0 right-0 left-0" id="header">
    <x-container>
        <div class="max-w-full px-3 py-6 rounded-full flex items-center justify-between">
            <div aria-label="Логотип" class=" shrink-0">
                <a aria-label="На главную" href="{{ route('page.home')}}" class="">
                    <img src="{{ asset('images/Logos.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </a>
            </div>
            {{-- navvvvv --}}

            <nav aria-label="Навигация" class="hidden md:block">
                <menu aria-label="Меню навигации" class="flex items-center gap-10">
                    <li aria-label="Элемент меню навигации" class="inline-flex">
                        <a aria-label="Product" href="#!" class="text-gray-300 font-medium transition-colors hover:text-orange-400">About Us</a>
                    </li>
                    <li aria-label="Элемент меню навигации" class="inline-flex">
                        <a aria-label="Services" href="#!" class="text-gray-300 font-medium transition-colors hover:text-orange-400">Services</a>
                    </li>
                    <li aria-label="Элемент меню навигации" class="inline-flex">
                        <a aria-label="Product" href="#!" class="text-gray-300 font-medium transition-colors hover:text-orange-400">Pricing</a>
                    </li>
                    <li aria-label="Элемент меню навигации" class="inline-flex">
                        <a aria-label="About" href="#!" class="text-gray-300 font-medium transition-colors hover:text-orange-400">Groomers</a>
                    </li>
                </menu>
            </nav>

            <button aria-label='Открыть модальное окно' class="bg-orange-400 flex items-center gap-3 text-center text-white rounded-full px-[30px] py-[12px] border border-orange-400 cursor-pointer">
                Get Member
            </button>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-orange-400 flex items-center gap-3 text-center text-white rounded-full px-[30px] py-[12px] border border-orange-400 cursor-pointer">Личный кабинет</a>
                @else
                    <a href="{{ route('login') }}" class="bg-orange-400 flex items-center gap-3 text-center text-white rounded-full px-[30px] py-[12px] border border-orange-400 cursor-pointer">Войти</a>
                    @if(Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-orange-400 flex items-center gap-3 text-center text-white rounded-full px-[30px] py-[12px] border border-orange-400 cursor-pointer">Зарегистрироваться</a>
                    @endif
                @endauth
            @endif
        </div>
    </x-container>
</header>
