<?php

namespace App\Providers;

use App\Models\Galery;
use App\Models\News;
use App\Models\PdfFile;
use App\Observers\GaleryObserver;
use App\Observers\NewsObserver;
use App\Observers\PdfObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('active', function ($expression) {
            return "<?php echo request()->is($expression) ? 'active' : ''; ?>";
        });

        News::observe(NewsObserver::class);
        Galery::observe(GaleryObserver::class);
        PdfFile::observe(PdfObserver::class);
    }
}
