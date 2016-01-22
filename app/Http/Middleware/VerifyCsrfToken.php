<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     *从CSRF验证中排除的URL
     *
     * @var array
     */
    protected $except = [
        //'stripe/*'
        'aliapy/*'
    ];
}
