<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $data['menu'] =  Menu::get();
        return view('menu.index', $data);
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
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_menu' => 'required|array',
            'deskripsi' => 'required|array',
            'tech_stack' => 'required|array',
            'token_akses' => 'required|string|max:255',
            'icon_menu' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $path = $request->file('icon_menu')->store('menu_icons', 'public');

        $menu = new Menu();
        $menu->setTranslations('nama_menu', $validated['nama_menu']);
        $menu->setTranslations('deskripsi', $validated['deskripsi']);
        $menu->tech_stack = $validated['tech_stack'] ?? [];
        $menu->token_akses = $validated['token_akses'];
        $menu->icon_menu = $path;
        $menu->status = $validated['status'];
        $menu->save();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function save_profil(Request $request)
    {
        $validated = $request->validate([
            'jabatan' => 'required|array',
            'deskripsi' => 'required|array',
            'foto' => 'required|image|mimes:jpg,png|max:2048',
        ]);

        $user = User::find(auth()->user()->id);
        $user->tech_stack = json_encode($request->input('tech'));
        $user->foto_profil = $request->file('foto')->store('profil_photos', 'public');
        $user->setTranslations('jabatan', $validated['jabatan']);
        $user->setTranslations('deskripsi', $validated['deskripsi']);

        $user->save();

        return redirect()->route('menu.index')->with('success', 'Profil berhasil disimpan.');
    }
}
