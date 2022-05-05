<?php

namespace Laravia\Tweety\App\Providers;

use Illuminate\Support\Facades\App;
use Laravia\Core\App\Laravia;
use Laravia\Core\App\Providers\LaraviaServiceProvider;

class TweetyServiceProvider extends LaraviaServiceProvider
{
    protected $name = 'tweety';

    public function boot()
    {
        $this->loadViewsFrom(Laravia::path()->get($this->name) . '/resources/views', $this->getPackagePrefix());
        $this->loadMigrationsFrom(Laravia::path()->get($this->name) . '/database/migrations');
        $this->loadSeedsFrom(Laravia::path()->get($this->name) . '/database/seeders', 'Laravia\\Tweety\\Database\\Seeders\\');

        App::booted(function () {
            $path = Laravia::path()->get($this->name) . '/routes/web.php';
            $this->loadRoutesFrom($path);
        });
    }
}
