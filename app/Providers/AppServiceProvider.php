<?php

namespace App\Providers;

use App\Components\Logger\FactoryMethod\DBSender;
use App\Components\Logger\FactoryMethod\EmailSender;
use App\Components\Logger\FactoryMethod\FileSender;
use App\Components\Logger\FactoryMethod\SenderInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SenderInterface::class, function ($app) {
            // Отримуємо тип сендера з конфігурації
            $type = config('custom-logger.default');

            // Вибираємо конкретний клас на основі типу
            return match ($type) {
                'email' => new EmailSender(),
                'file' => new FileSender(),
                'db' => new DBSender(),
                default => throw new \InvalidArgumentException("Unknown sender type: {$type}"),
            };
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
