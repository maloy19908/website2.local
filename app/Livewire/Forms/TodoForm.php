<?php

namespace App\Livewire\Forms;

use App\Models\Todo;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TodoForm extends Form {

    public ?Todo $todo = null;

    #[Validate]
    public $name;

    public $content;

    public function store() {
        $this->validate();
        Todo::create($this->all());
        $this->reset();
    }

    public function update() {
        $this->todo->update($this->all());
    }
    public function setTodo(Todo $todo) {
        $this->todo = $todo;
        $this->name = $todo->name;
        $this->content = $todo->content;
    }

    public function rules() {
        return [
            'name' => [
                'required',
                Rule::unique('todos')->ignore($this->todo),
            ],
            'content' => 'required|min:5',
        ];
    }
}
