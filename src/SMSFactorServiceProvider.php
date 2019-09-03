<?php

namespace SMSFactor\Laravel;

use Illuminate\Support\ServiceProvider;
use SMSFactor\SMSFactor;
use SMSFactor\Account;
use SMSFactor\Campaign;
use SMSFactor\ContactList;
use SMSFactor\Message;
use SMSFactor\Token;
use SMSFactor\Webhook;

use Log;

class SMSFactorServiceProvider extends ServiceProvider
{

    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        Account::class      => Account::class,
        Campaign::class     => Campaign::class,
        ContactList::class  => ContactList::class,
        Message::class      => Message::class,
        Token::class        => Token::class,
        Webhook::class      => Webhook::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        SMSFactor::setApiToken(config('smsfactor.api_token'));
        SMSFactor::setApplicationCode(17);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/smsfactor.php' => config_path('smsfactor.php'),
        ]);
    }
}
