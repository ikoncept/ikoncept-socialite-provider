# Ikoncept Socialite Provider

v1.0.0


Add the provider in `app/Providers/EventServiceProvider.php`:

```php
    protected $listen = [
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            'Ikoncept\IkonceptSocialiteProvider\IkonceptExtendSocialite@handle',
        ],
    ];
```

Add ikoncept to the services array in `config/services.php`:

```php
    'ikoncept' => [
        'client_id' => env('IKONCEPT_CLIENT_ID'),         // Your Ikoncept Client ID
        'client_secret' => env('IKONCEPT_CLIENT_SECRET'), // Your Ikoncept Client Secret
        'redirect' => 'http://ikoncept.se/login/ikoncept/callback'
    ],

```
*Note that the redirect has to match with the configured redirect path in the OAuth server (auth.ikoncept.nu)*
