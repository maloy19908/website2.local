<?php

namespace App\Livewire\Todos;

use App\Livewire\Forms\TodoForm;
use App\Models\Todo;
use Livewire\Component;

class TodoUpdate extends Component
{
    public TodoForm $form;

    public function save() {
        $this->form->update();
        $this->dispatch('todoUpdate');
    }
    public function mount(Todo $todo) {
        $this->form->setTodo($todo);
    }
    public function render() {
        return view('livewire.todos.todo-create');
    }
}
