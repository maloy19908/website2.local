<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\On;

class TodoList extends Component {
    #[On('todoDelete')]
    #[On('todoUpdate')]
    #[On('todoCreate')]
    public function render() {
        $todos = Todo::all();
        return view('livewire.todos.todo-list',[
            'todos'=>$todos,
        ]);
    }
}
