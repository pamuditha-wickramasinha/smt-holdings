<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    */
    'company_name'        => env('COMPANY_NAME', 'SMT Holdings'),
    'company_description' => env('COMPANY_DESCRIPTION', 'SMT Holdings specializing in interlock paving, building and road construction and all civil works.'),
    'company_address'     => env('COMPANY_ADDRESS', '159/2, Wilaththawa, Bingiriya'),
    'company_location'    => env('COMPANY_LOCATION', 'Bingiriya, Sri Lanka'),
    'company_email'       => env('COMPANY_EMAIL', 'smtholdings@gmail.com'),
    'company_phone'       => env('COMPANY_PHONE', '+94774415869'),
    'company_phone_alt'   => env('COMPANY_PHONE_ALT', '+94774473518'),
    'company_whatsapp'    => env('COMPANY_WHATSAPP', '94774415869'),
    'company_facebook'    => env('COMPANY_FACEBOOK', 'https://www.facebook.com/share/18N1XuZ9D5/'),
    'company_tiktok'      => env('COMPANY_TIKTOK', 'https://www.tiktok.com/@smt.holdings'),

    /*
    |--------------------------------------------------------------------------
    | Site Color Scheme
    |--------------------------------------------------------------------------
    | Change these values in .env to restyle the entire website instantly.
    | PRIMARY_COLOR   = main accent (buttons, highlights, icons)
    | SECONDARY_COLOR = secondary button background
    | DARK_COLOR      = dark background sections
    | ACCENT_HOVER_COLOR = hover state color
    */
    'primary_color'      => env('PRIMARY_COLOR', '#F5BF23'),
    'secondary_color'    => env('SECONDARY_COLOR', '#292929'),
    'dark_color'         => env('DARK_COLOR', '#222222'),
    'accent_hover_color' => env('ACCENT_HOVER_COLOR', '#222222'),

];
