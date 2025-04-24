<?php

namespace h4zz4rddev\Seat\SeatBuybackV2;

use Seat\Services\AbstractSeatPlugin;

class SeatBuybackV2ServiceProvider extends AbstractSeatPlugin
{
    public function boot(): void
    {
        $this->add_routes();

        $this->add_publications();

        $this->add_views();

        $this->add_translations();
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/seatbuybackv2.config.php', 'seatbuybackv2.config');
        $this->mergeConfigFrom(__DIR__ . '/Config/seatbuybackv2.locale.php', 'seatbuybackv2.locale');

        // Overload sidebar with your package menu entries
        $this->mergeConfigFrom(__DIR__ . '/Config/Menu/package.sidebar.php', 'package.sidebar');

        // Register generic permissions
        $this->registerPermissions(__DIR__ . '/Config/Permissions/seatbuybackv2.php', 'seatbuybackv2');
    }

    public function getName(): string
    {
        return 'Seat Buyback V2';
    }

    public function getPackageRepositoryUrl(): string
    {
        return "https://github.com/H4zz4rdDev/seat-buyback-v2";
    }

    public function getPackagistPackageName(): string
    {
        return "seat-buyback-v2";
    }

    public function getPackagistVendorName(): string
    {
        return "h4zz4rddev";
    }

    /**
     * Include routes.
     */
    private function add_routes(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    /**
     * Add content which must be published (generally, configuration files or static ones).
     */
    private function add_publications(): void
    {
        $this->publishes([
            __DIR__ . '/resources/css' => public_path('web/css'),
            __DIR__ . '/resources/img' => public_path('web/img'),
            __DIR__ . '/resources/js' => public_path('web/js'),
        ], ['public', 'seat']);
    }

    /**
     * Import translations.
     */
    private function add_translations(): void
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'SeatBuybackV2');
    }

    /**
     * Import views.
     */
    private function add_views(): void
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'SeatBuybackV2');
    }
}