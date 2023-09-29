<?php

namespace App\Http\Traits;

trait ApiResponseTrait
{

	/**
     * Format success repponse
     *
     */
    protected function successResponse($data, $message = null, $code = 200)
	{
		return response()->json([
			'status' => 1,
			'message' => $message,
			'data' => $data
		], $code);
	}

	/**
     * Format error repponse
     */
	protected function errorResponse($error, $code)
	{
		return response()->json([
			'status' => 0,
			'error' => $error
		], $code);
	}
}