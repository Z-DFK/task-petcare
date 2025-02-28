<?php

namespace App\Livewire;

use App\Jobs\SendTelegramMessage;
use Livewire\Component;

class ContactForm extends Component
{
    public $surname;
    public $name;
    public $patronymic;
    public $email;
    public $phone;
    public $comment;

    protected $rules = [
        "surname"=> "required|min:3",
        "name"=> "required|min:3 ",
        "patronymic"=> "max:50",
        "email"=> "required|min:3|email",
        "phone"=> "required|max:11|min:3",
        "comment"=> "required|min:3"
    ];
    protected $messages = [
        "surname.required"=> "Поле 'Фамилия' обязательно для заполнения",
        "surname.min"=> "Поле 'Фамилия' должно содержать минимум 3 символа",
        "name.required"=> "Поле 'Имя' обязательно для заполнения",
        "name.min"=> "Поле 'Имя' должно содержать минимум 3 символа",
        "patronymic.min"=> "Поле 'Отчество' должно содержать максимум 50 символа",
        "email.required"=> "Поле 'Эл. Почта' обязательно для заполнения",
        "email.min"=> "Поле 'Эл. Почта' должно содержать минимум 3 символа",
        "email.email"=> "Поле 'Эл. Почта' должно содержать верный адресс Э.П",
        "phone.required"=> "Поле 'Телефон' обязательно для заполнения",
        "phone.min"=> "Поле 'Телефон' должно содержать минимум 3 символа",
        "phone.max"=> "Поле 'Телефон' должно содержать максимум 50 символа",
        "comment.required"=> "Поле 'Сообщение' обязательно для заполнения",
        "comment.min"=> "Поле 'Сообщение' должно содержать минимум 3 символа",
    ];

    public function submit()
    {
        $this->validate();

        dispatch(new SendTelegramMessage($this->surname, $this->name, $this->patronymic, $this->email, $this->phone, $this->comment))->handle();

        $this->reset(['surname', 'name', 'patronymic', 'email', 'phone','comment']);
        session()->flash("message", "Заявка успешно отправлена");
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
