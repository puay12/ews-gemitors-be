<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $addHttpCookie = true;

    protected $except = [
        'patients/add',
        'patients/update/43',
        'patients/delete/34',
        'patients/vsign/add',
        'patients/vsign/update/48',
        'patients/vsign/delete/46',
        'patients/score/add',
        'patients/score/delete/48'
    ];
}
