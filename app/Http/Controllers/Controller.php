<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// app/Http/Controllers/Controller.php
/**
 * @SWG\Swagger(
 *	 host="localhost:81",
 *   basePath="/swaggers-test/public/api",
 *   @SWG\Info(
 *     title="Core API",
 *     version="1.0.0"
 *   )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
