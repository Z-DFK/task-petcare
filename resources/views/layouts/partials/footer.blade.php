<footer class="bg-gray-400" id="footer">
    <x-container>
        <div class="flex gap-3 items-center justify-between max-w-full px-3 py-6 rounded-full">
            <div aria-label="Логотип" class=" shrink-0">
                <a aria-label="На главную" href="{{ route('page.home')}}" class="">
                    <img src="{{ asset('images/Logos.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </a>
            </div>
            <ul class="flex gap-3 text-2xl bg-black">
                <li ></li>
                <li ></li>
                <li ></li>
            </ul>
        </div>
    </x-container>
</footer>
