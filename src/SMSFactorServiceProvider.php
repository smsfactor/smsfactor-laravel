<?php

namespace SMSFactor\Laravel;

use Illuminate\Support\ServiceProvider;
use SMSFactor\SMSFactor;

use Log;

class SMSFactorServiceProvider extends ServiceProvider
{

    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        'SMSFactor\Account'      => 'SMSFactor\Account',
        'SMSFactor\Campaign'     => 'SMSFactor\Campaign',
        'SMSFactor\ContactList'  => 'SMSFactor\ContactList',
        'SMSFactor\Message'      => 'SMSFactor\Message',
        'SMSFactor\Token'        => 'SMSFactor\Token',
        'SMSFactor\Webhook'      => 'SMSFactor\Webhook'
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
