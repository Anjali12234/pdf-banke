<?php

namespace App\Providers;

use App\Models\Link;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
{

    public function boot(): void
    {

        $footerLinks = Link::latest()->limit(5)->get();
        View::share('footerLinks', $footerLinks);
    }
}
