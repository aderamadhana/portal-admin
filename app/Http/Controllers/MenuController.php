<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function add_menu()
    {
        return view('menu.add_menu');
    }   

    public function profil()
    {
        $data['user'] = User::find(auth()->user()->id);
        $data['profil_foto'] = $data['user']->foto_profil ? asset('storage/' . $data['user']->foto_profil) : asset('images/default_profile.png');
        return view('menu.profil', $data);
    }   

    public function save_profil(Request $request)
    {
        $request->validate([
            'jabatan' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'foto' => 'required|image|mimes:jpg,png|max:2048',
        ]);

        $data_simpan = [
            'jabatan' => $request->input('jabatan'),
            'deskripsi' => $request->input('deskripsi'),
            'tech_stack' => json_encode($request->input('tech')),
            'foto_profil' => $request->file('foto')->store('profil_photos', 'public'),
        ];

        User::where('id', auth()->user()->id)->update($data_simpan);
        return redirect()->route('menu.index')->with('success', 'Profil berhasil disimpan.');
    }
}
