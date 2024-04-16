<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $addHttpCookie = true;

    protected $except = [
        'patients/add',
        'patients/update/14',
        'patients/delete/12',
        'patients/vsign/add',
        'patients/vsign/update/12',
        'patients/vsign/delete/14',
        'patients/score/add'
    ];
}
