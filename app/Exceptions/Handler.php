<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable; // <-- ADD THIS

class Handler extends ExceptionHandler
{
    public function report(Throwable $exception) // <-- USE Throwable HERE
    {
        parent::report($exception);
    }
    public function render($request, Throwable $exception) // AND HERE
    {
        return parent::render($request, $exception);
    }


    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
