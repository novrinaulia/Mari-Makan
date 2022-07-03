<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Restaurant;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $menus = DB::table('menus')
                    ->join('restaurants', 'menus.id_restaurants', '=', 'restaurants.id_restaurants')
                    ->get();
        // dd($menus);
        return view('backend.menu.index', compact('no', 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = DB::table('restaurants')
                        ->get();
        return view('backend.menu.create', compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar_mkn');
        $image = 'event_'  . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/makanan/'), $image);

        // dd($request);
        DB::table('menus')->insert([
            'makanan' => $request->makanan,
            'harga' => $request->harga,
            'rating_makanan' => $request->rating_makanan,
            'desk_makanan' => $request->desk_makanan,
            'gambar_mkn' => $image,
            'id_restaurants' => $request->resto,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);

          return redirect()->route('menu.index')->with('success', 'Menu Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $menu = Menu::find($id);
        $resto = Restaurant::find($menu->id_restaurants);
        // $resto = DB::table('menus')
        //     ->join('restaurants', 'menus.id_restaurants', '=', 'restaurants.id_restaurants')
        //     ->where('restaurants.id_restaurants', $id)
        //     ->select('restaurants.nama_resto')
        //     ->get();
        // dd($resto);
        
        return view('backend.menu.edit', compact('menu', 'resto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $menu = Menu::find($id);

        $oldImage = $request->oldImage;
        $file = $request->file('gambar_mkn');
        // dd($file);
        if (!empty($file)){
            $image = 'event_'  . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/makanan/'), $image);
            unlink("upload/makanan/" . $oldImage);
        } else {
            $image = $oldImage;
        }
        // dd($file);

        DB::table('menus')
        ->where('id_menu', $id)->update([
            'makanan' => $request->makanan,
            'harga' => $request->harga,
            'rating_makanan' => $request->rating_makanan,
            'desk_makanan' => $request->desk_makanan,
            'gambar_mkn' => $image,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        
        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $image = $menu->gambar_mkn;
        Menu::where('id_menu', $id)->delete();
        unlink("upload/makanan/" . $image);
        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Dihapus!');
    }
}
