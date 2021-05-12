# SMS API Package for Laravel

The Laravel Service Provider that allows you to use [SMSFactor PHP Client library](https://github.com/smsfactor/smsfactor-php-sdk).

In order to use it, make sure to have an account. You can register [here](https://www.smsfactor.com/en/registration/?utm_source=github&utm_campaign=Inscription&spid=17146). Once your account is created, you need to generate your first [API token](https://dev.smsfactor.com/en/api/sms/token/create-token).
You can find the complete documentation of our API [here](https://dev.smsfactor.com/).

# Installation

We recommend using [Composer](https://getcomposer.org/) to install the PHP client library to your project.

    composer require smsfactor/smsfactor-laravel

**Laravel 5.5+**

If you're using Laravel 5.5 or above, the package will automatically register the ```SMSFactor``` provider and facades.

**Laravel 5.4 and below**

Add ```SMSFactor\Laravel\SMSFactorServiceProvider``` to the providers array in your ```config/app.php```:
```php
'providers' => [
    // Other service providers...
    SMSFactor\Laravel\SMSFactorServiceProvider::class,
],
```

If you want to use the a facade interface, you can ```use``` any of them depending on your need:

```php
use SMSFactor\Laravel\Facade\Account;
use SMSFactor\Laravel\Facade\Campaign;
use SMSFactor\Laravel\Facade\ContactList;
use SMSFactor\Laravel\Facade\Message;
use SMSFactor\Laravel\Facade\Webhook;
use SMSFactor\Laravel\Facade\Token;
```

Or add any alias in your ```config/app.php```:

```php
'aliases' => [
    ...
    'SMSFactor' => SMSFactor\Laravel\Facade\Account::class,
    'SMSFactor' => SMSFactor\Laravel\Facade\Campaign::class,
    'SMSFactor' => SMSFactor\Laravel\Facade\ContactList::class,
    'SMSFactor' => SMSFactor\Laravel\Facade\Message::class,
    'SMSFactor' => SMSFactor\Laravel\Facade\Webhook::class,
    'SMSFactor' => SMSFactor\Laravel\Facade\Token::class,
],
```

# Configuration

You can use ```artisan vendor:publish``` to copy the distribution configuration file to your app's config directory:
```
php artisan vendor:publish
```

Then update ```config/smsfactor.php``` with your token.

# Usage

To use the SMSFactor Client Library you can use the facades, or request an instance from the service container:

```php
$response = Message::send([
	'to' => '33600000000',
	'text' => 'Have you ever danced with the devil in the pale moonlight ?'
]);
print_r($response->getJson()); //In case you don't receive your text, printing the API response might be useful
```

or 

```php
$account = app('SMSFactor\Message');
$response = $account->send([
	'to' => '33600000000',
	'text' => 'Have you ever danced with the devil in the pale moonlight ?'
]);
print_r($response->getJson());
```
