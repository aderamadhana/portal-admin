<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App; // ⬅️ ini WAJIB
use App\Models\User;
use App\Models\Menu;

class UserController extends Controller
{
    public function get_portofolio()
    {
        try {
            $lang = App::getLocale();
            
            $user = User::findOrFail(1);
            $techStacks = Menu::select('tech_stack')
            ->get()
            ->pluck('tech_stack')
            ->filter(fn ($item) => is_array($item) && count($item) > 0)
            ->flatten()
            ->unique() 
            ->values();
            $user['profil_foto_url'] = $user->foto_profil ? asset('storage/' . $user->foto_profil) : asset('images/default_profile.png');
            $user['tech_stacks'] = $techStacks;
            return response()->json([
                'status' => 'success',
                'lang'   => $lang,
                'data'   => $user,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to retrieve user data.',
                'error'   => $th->getMessage(),
            ], 500);
        }
        
    }
}
