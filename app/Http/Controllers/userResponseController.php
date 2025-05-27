<?php

namespace App\Http\Controllers;

use App\Models\AccessInfo;
use App\Models\UserResponse;
use Illuminate\Http\Request;

class userResponseController extends Controller
{
    public function store(Request $request)
    {
        try {
            UserResponse::create([
                'balasan' => $request->input('response'),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Saved successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function storeSave(Request $request)
    {
        try {
            AccessInfo::create([
                'access_info' => $request->input('data'),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Saved successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
