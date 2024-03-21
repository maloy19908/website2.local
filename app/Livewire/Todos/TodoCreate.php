<?php

namespace App\Livewire\Todos;

use App\Livewire\Forms\TodoForm;
use Livewire\Component;

class TodoCreate extends Component
{
    public TodoForm $form;

    public function save() {
        $this->form->store();
        $this->dispatch('todoCreate');
    }
    public function render() {
        return view('livewire.todos.todo-create');
    }
}
