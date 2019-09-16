<?php

namespace LaravelEnso\CnpValidator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend(
            'cnp', 'LaravelEnso\CnpValidator\app\Validators\Validator@cnp'
        );
    }
}