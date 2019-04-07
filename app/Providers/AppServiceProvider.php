<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        schema::defaultStringLength(191);
        view()->composer('frontend.produk', function ($view) {
            $kategori = \App\Kategori::all();
            // $category = \App\Category::all();
            // $tag = \App\Tag::all();
            $recent = \App\Barang::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategori', 'recent'));
        });
        View()->composer('frontend.index', function ($view) {

          $searchTitle = request('title');

          $barangs = null;

          $barangs = Barang::when($searchTitle, function ($query) use ($searchTitle) {
            return $query->where('title', 'like', "%{$searchTitle}%");
          })
          ->paginate(10)
          ->appends(request()->query());


        $view->with('barangs', $barangs);

      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
