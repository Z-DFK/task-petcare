<div>
    <x-container>
        @if (session()->has("message"))
            <div class="bg-green-500 text-black text-xl">
                {{session('message')}}
            </div>
        @endif
        <form class="bg-gray-200 text-center flex flex-col items-center" wire:submit.prevent="submit">
            <div>
                <label for="name">Фамилия</label>
                <input type="text" class="ml-5 bg-white pb-2 pt-2 pl-2" wire:model="surname" id="surname" placeholder="Введите">
                @error('surname') <span class="text-blue-800">{{$message}}</span> @enderror
            </div>
            <div class="mt-5">
                <label for="name">Имя</label>
                <input type="text" class="ml-14 bg-white pb-2 pt-2 pl-2" wire:model="name" id="name" placeholder="Введите">
                @error('name') <span class="text-blue-800">{{$message}}</span> @enderror
            </div>
            <div class="mt-5">
                <label for="name">Отчество</label>
                <input type="text" class="ml-5 bg-white pb-2 pt-2 pl-2" wire:model="patronymic" id="patronymic" placeholder="Введите">
                @error('patronymic') <span class="text-blue-800">{{$message}}</span> @enderror
            </div>
            <div class="mt-5">
                <label for="name">Эл. почта</label>
                <input type="mail" class="ml-5 bg-white pb-2 pt-2 pl-2" wire:model="email" id="email" placeholder="Введите">
                @error('email') <span class="text-blue-800">{{$message}}</span> @enderror
            </div>
            <div class="mt-5">
                <label for="name">Телефон</label>
                <input type="phone" class="ml-7 bg-white pb-2 pt-2 pl-2" wire:model="phone" id="phone" placeholder="Введите">
                @error('phone') <span class=" text-blue-800">{{$message}}</span> @enderror
            </div>
            <div class="mt-5">
                <label for="name">Оставить комментарий</label>
                <textarea class="ml-5 bg-white pb-2 pt-2 pl-2" wire:model="comment" id="comment" placeholder="Введите"></textarea>
                @error('comment') <span class="text-blue-800">{{$message}}</span> @enderror
            </div>
            <button class="bg-orange-400 mt-10 flex mb-10 items-center gap-3 text-center text-white rounded-full px-[30px] py-[12px] border border-orange-400 cursor-pointer" type="submit">Оставить заявку</button>
        </form>
    </x-container>
</div>
