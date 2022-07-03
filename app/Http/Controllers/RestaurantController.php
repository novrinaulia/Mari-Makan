<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $restaurants = DB::table('restaurants')
                        ->get();
        return view('backend.restaurant.index', compact('no', 'restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar_resto');
        $image = 'event_'  . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/'), $image);

        // dd($request);
        DB::table('restaurants')->insert([
            'nama_resto' => $request->nama,
            'alamat' => $request->alamat,
            'jambuka' => $request->jambuka,
            'jamtutup' => $request->jamtutup,
            'rating_resto' => $request->rating,
            'desk_resto' => $request->deskripsi,
            'gambar_resto' => $image,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
          return redirect()->route('restaurant.index')->with('success', 'Restaurant Berhasil Ditambahkan!');
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
        $resto = Restaurant::find($id);
        // dd($resto);
        return view('backend.restaurant.edit', compact('resto'));
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
        $resto = Restaurant::find($id);

        $oldImage = $request->oldImage;
        $file = $request->file('gambar_resto');
        // dd($file);
        if (!empty($file)){
            $image = 'event_'  . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/'), $image);
            unlink("upload/" . $oldImage);
        } else {
            $image = $oldImage;
        }
        // dd($id);
    DB::table('restaurants')->where('id_restaurants', $id)->update([
        'nama_resto' => $request->nama,
        'alamat' => $request->alamat,
        'jambuka' => $request->jambuka,
        'jamtutup' => $request->jamtutup,
        'rating_resto' => $request->rating,
        'desk_resto' => $request->deskripsi,
        'gambar_resto' => $image,
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      return redirect()->route('restaurant.index')->with('success', 'Restaurant Berhasil Diubah!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resto = Restaurant::find($id);
        $image = $resto->gambar_resto;
        Restaurant::where('id_restaurants', $id)->delete();
        unlink("upload/" . $image);
        return redirect()->route('restaurant.index')->with('error', 'Restaurant Berhasil Dihapus!'); 
    }
}
