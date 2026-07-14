<?php

declare(strict_types=1);

namespace Bites\GoogleTranslate;

use Bites\Base\Services\BitesServiceProvider;
use Bites\GoogleTranslate\Actions\DiscoverLanguageSwitcher;

class GoogleTranslateServiceProvider extends BitesServiceProvider
{
    protected string $configFile =
        __DIR__ . '/../config/bites.php';

    protected string $viewsPath =
        __DIR__ . '/../resources/views';

    protected string $iconsPath =
        __DIR__ . '/../resources/svg';

    public function boot(): void
    {
        parent::boot();

        app(DiscoverLanguageSwitcher::class)->execute();
    }
}
