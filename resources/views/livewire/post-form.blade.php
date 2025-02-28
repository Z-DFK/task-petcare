<div>
    <form wire:submit.prevent='submit'>
        <div>
            <input type="text" wire:model='title' id="title">
            @error('title')
                {{$message}}
            @enderror
        </div>
        <div>
            <textarea id="description" wire:model='description' cols="30" rows="10"></textarea>
        </div>
        <div>
            <textarea id="content" wire:model='content' cols="30" rows="10"></textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" wire:model="is_active"> Активен
            </label>
        </div>
        <button type="submit">Сохранить</button>
    </form>
</div>
