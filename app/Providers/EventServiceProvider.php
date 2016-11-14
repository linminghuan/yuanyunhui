<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Model\Category;
use App\Model\Link;
use App\Model\Ad;
use App\Model\Option;
use Cache;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'illuminate.query' => [
            'App\Listeners\TestListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);
        Category::saved(function($cat){
            Cache::forget('cat');
        });
        Link::saved(function($link){
            Cache::forget('link');
        });
        Ad::saved(function($ad){
            Cache::forget('ad');
        });
        Option::saved(function($ad){
            Cache::forget('config');
        });
    }
}
