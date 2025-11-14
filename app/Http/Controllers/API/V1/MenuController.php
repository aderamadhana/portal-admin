<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
{
    public function get_menu()
    {
        try {
            $menu = Menu::get();
            return response()->json([
                'status' => 'success',
                'data'   => $menu,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to retrieve menu data.',
                'error'   => $th->getMessage(),
            ], 500);
        }
        
    }
}
