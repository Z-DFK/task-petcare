<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendTelegramMessage implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $surname;
    protected $name;
    protected $patronymic;
    protected $email;
    protected $phone;
    protected $comment;
    protected $botToken;
    protected $chatId;

    public function __construct($name, $email, $phone, $comment, $surname, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->email = $email;
        $this->phone = $phone;
        $this->comment = $comment;
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
        $this->chatId = env('TELEGRAM_CHAT_ID');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $text = "Новое сообщение от: {$this->surname}\n\n{$this->name}\n\n{$this->patronymic}\n\n{$this->email}\n\n{$this->phone}\n\n{$this->comment}\n\n";

        // Отправка сообщения в Telegram
        Http::post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
            'chat_id' => $this->chatId,
            'text' => $text,
        ]);
    }
}
