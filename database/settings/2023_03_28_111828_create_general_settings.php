<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Add You');
        $this->migrator->add('general.contact_email', 'Addyou@gmail.com');
        $this->migrator->add('general.white_logo', 'Add-You-Black.png');
        $this->migrator->add('general.black_logo', 'Add-You-Black(light).png');
        $this->migrator->add('general.copyright', 'AddYou');
        $this->migrator->add('general.contact_phone', '01552149985');
        $this->migrator->add('general.newsletter', 'TestTestTestTestTestTest');
        $this->migrator->add('general.about', 'TestTestTestTestTestTest');
    }
};
