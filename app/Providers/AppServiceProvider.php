<?php

namespace App\Providers;

use App\Http\Resources\VendorResource;
use Carbon\CarbonInterval;
use Illuminate\Database\Connection;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VendorResource::withoutWrapping();

        Model::shouldBeStrict(!app()->isProduction());
        // вызвать Exception, если идет сохрание поля, не указанного в модели $fillable = [....];
        Model::preventSilentlyDiscardingAttributes(!app()->isProduction());

        if (app()->isProduction()) {
            DB::whenQueryingForLongerThan(CarbonInterval::second(5), function(Connection $connection) {
                logger()
                    ->channel("local")
                    ->debug('whenQueryingForLongerThan: '. $connection->totalQueryDuration());
            });

            DB::listen(function ($query) {
                if ($query->time > 100) {
                    logger()
                        ->channel("local")
                        ->debug('whenQueryingForLongerThan: ' . $query->sql, $query->bindings);
                }
            });

            app(Kernel::class)->whenRequestLifecycleIsLongerThan(
                CarbonInterval::second(4),
                function() {
                    logger()
                        ->channel("local")
                        ->debug('whenRequestLifecycleIsLongerThan: '. request()->url());
                }
            );
        }
    }
}
