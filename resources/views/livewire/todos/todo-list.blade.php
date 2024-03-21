<div class="row">
    @forelse ($todos as $todo)
    <livewire:todos.todo-item :$todo :key="$todo->id"/>
    @empty
        Нет заметок
    @endforelse
</div>

