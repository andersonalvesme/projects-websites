<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $phone = '5548996653912';
        $data = [
            'phone_formated' => '(048) 99665 - 3912',
            'phone' => $phone,
            'skype' => 'skype:live:.cid.cf2ec78ba1f081c0?chat',
            'whatsapp' => 'https://api.whatsapp.com/send?phone=' . $phone . '&text=Oi.%20Quero%20saber%20mais%20sobre%20os%20produtos.',
            'email' => 'contato@cronus.one'
        ];

        View::share('data', $data);
    }
}
