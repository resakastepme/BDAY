<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusInteract;
use Illuminate\Support\Facades\Log;

class statusInteractController extends Controller
{
    public function storeInteract(Request $r)
    {
        try {
            $ip = $r->ip;
            $status = $r->status;
            StatusInteract::create([
                'ip' => $ip,
                'answer' => $status
            ]);

            return response()->json([
                'success' => true,
                'data' => $r->all()
            ]);
        } catch (\Throwable $th) {
            Log::error('Error store interact', [
                'message' => $th->getMessage()
            ]);
            return response()->json([
                'success' => false,
                'data' => $r->all()
            ]);
        }
    }
}
