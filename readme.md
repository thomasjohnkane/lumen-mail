## Lumen PHP Framework - Mailer App

1. install lumen `composer global require "laravel/lumen-installer=~1.0"`

2. Create new lumen service `lumen new mailerapp` (named mailerapp)

3. In bootstrap/app.php, uncomment line 81 `$app->register(App\Providers\AppServiceProvider::class);`

4. In bootstrap/app.php, uncomment line 22 `$app->withFacades();`

5. In bootstrap/app.php, uncomment line 5 `Dotenv::load(__DIR__.'/../');`

6. In the terminal require mail `composer require illuminate/mail` (should download version ~5.1)

>Note: this installs a few other dependencies like swiftmailer

7. Update .env file to have appropriate username/password/etc for MAIL_DRIVER, MAIL_HOST, etc...

8. Take a look at the '/' route where I am sending out a raw mail string to myself

>NOTE: I used the key route to generate a random string that I pasted into my app_key .env because Lumen does not have the key:generate artisan command, but this does not seem to be required.


