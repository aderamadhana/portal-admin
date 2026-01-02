<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class ProjectsController extends Controller
{
    public function get_projects()
    {
        try {
            $menu = Menu::orderBy('id_menu', 'desc')->get()->map(function ($item) {
                // tambahkan URL penuh untuk icon_menu
                $item['icon_menu_url'] = $item->icon_menu
                    ? asset('storage/' . $item->icon_menu)
                    : "";
                return $item;
            });
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
