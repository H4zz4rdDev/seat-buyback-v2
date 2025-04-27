<?php

namespace h4zz4rddev\Seat\SeatBuybackV2\Http\Controllers;

class BuybackV2DashboardController
{
    public function getHome(){
        return view('seatbuybackv2::buybackv2');
    }
}