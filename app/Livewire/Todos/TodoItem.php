<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\On;

class TodoItem extends Component {
    public $todo;
    public $edit = false;

    public function todoEdit() {
        $this->edit = true;
        $this->dispatch('todoEdit', todoId: $this->todo->id);
    }
    #[On('todoUpdate')]
    public function todoSave() {
        $this->edit = false;
    }
    public function todoDelete() {
        $this->todo->delete();
        $this->dispatch('todoDelete');
    }
    public function mount(Todo $todo) {
        $this->todo = $todo;
    }
    public function render() {
        return view('livewire.todos.todo-item');
    }
}
