<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    // app/Http/Controllers/SampleController.php
	/**
	 * @SWG\Get(
	 *   path="/sample",
	 *   summary="Sample",
	 *   @SWG\Response(response=200, description="successful operation")
	 * )
	 *
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return response()->json('Ok');
	}
}
