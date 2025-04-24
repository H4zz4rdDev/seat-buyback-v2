<?php

namespace h4zz4rddev\Seat\SeatBuybackV2;

use Seat\Services\AbstractSeatPlugin;

class SeatBuybackV2ServiceProvider extends AbstractSeatPlugin
{
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
}