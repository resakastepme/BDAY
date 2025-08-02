<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusInteract;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;

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

    public function runSeeder()
    {
        try {
            // Memanggil command 'db:seed'
            Artisan::call('db:seed', ['--force' => true]);

            // Mengambil output dari command
            $output = Artisan::output();

            echo $output;
        } catch (\Exception $e) {
            // Jika terjadi error, kembalikan pesan error sebagai teks biasa
            $errorMessage = "An error occurred: " . $e->getMessage();
            echo $errorMessage;
        }
    }
}
