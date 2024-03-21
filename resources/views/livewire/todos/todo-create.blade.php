<div>
    <form wire:submit="save">
        <input type="text" wire:model="form.name">
        <div>
            @error('form.name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <textarea wire:model="form.content"></textarea>
        <div>
            @error('form.content')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">
            Save
            <div class="spinner-border" role="status" wire:loading>
                <span class="visually-hidden">Loading...</span>
            </div>
        </button>
    </form>
</div>
