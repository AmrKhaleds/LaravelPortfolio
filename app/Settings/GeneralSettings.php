<?php
    // use Spatie\LaravelSettings\Settings;
    use Spatie\LaravelSettings\Settings;

    class GeneralSettings extends Settings
    {
        public string $site_name;
        public string $contact_email;
        public string $white_logo;
        public string $black_logo;
        public string $copyright;
        public int $contact_phone;
        public string $newsletter;
        public string $about;

        public static function group(): string
        {
            return 'general';
        }
    }
    