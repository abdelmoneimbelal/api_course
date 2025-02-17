<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Setting\SettingResoures;

class SettingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $settings = Setting::find(1);
        if ($settings)
            return ApiResponse::sendResponse(
                200,
                'Retrieve settings data successfully',
                new SettingResoures($settings)
            );
            return ApiResponse::sendResponse(200, 'Settings not found', []);
        // return SettingResoures::collection($settings);
    }
}
