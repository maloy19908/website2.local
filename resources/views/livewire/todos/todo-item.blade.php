<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-body">

            @if ($this->edit)
                <livewire:todos.todo-update :$todo>
            @else
            <h4>{{ $todo->name }}</h4>
            <p class="card-text">
                {{ $todo->content }}
            </p>
            @endif
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button class="btn btn-sm btn-outline-secondary" wire:click="todoEdit">изменить</button>
                    <button class="btn btn-sm btn-outline-secondary" wire:click="todoDelete">удалить</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>