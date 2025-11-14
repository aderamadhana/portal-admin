<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function get_user()
    {
        try {
            $user = User::find(1);
            $user['profil_foto_url'] = $user->foto_profil ? asset('storage/' . $user->foto_profil) : asset('images/default_profile.png');
            return response()->json([
                'status' => 'success',
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
