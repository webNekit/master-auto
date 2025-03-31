<?php

namespace App\Livewire\Form;

use App\Models\Callback;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ], [
            'name.required' => 'Поле имени обязательно для заполнения',
            'name.min' => 'Имя должно содержать минимум :min символа',
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Введите корректный email адрес',
            'message.required' => 'Поле сообщения обязательно для заполнения',
            'message.min' => 'Сообщение должно содержать минимум :min символов',
        ]);
        Callback::create($validated);
        $this->reset(['name', 'email', 'message']);
        session()->flash('message', 'Сообщение успешно отправлено!');
    }

    public function render()
    {
        return view('livewire.form.contact');
    }
}
