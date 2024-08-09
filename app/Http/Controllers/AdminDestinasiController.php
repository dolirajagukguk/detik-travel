<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDestinasiController extends Controller
{
    public function AdminDestinationView(){
        $data = DB::table('objek_wisata')->get()
        ->where('statusDelete', 0);
        return view('admin.destinasi.index', ['data' => $data]);
    }

    public function AdminDestinationStore(){
        return view('admin.destinasi.store');
    }

    public function softDelete($id){
    $affected = DB::table('objek_wisata')
                  ->where('id', $id)
                  ->update(['statusDelete' => 1]);

    if ($affected) {
        return redirect()->route('AdminDestinationView');
    }
    return redirect()->back();
}

    public function edit($id){
        $destinasi = DB::table('objek_wisata')->where('id', $id)->first();
    return view('admin.destinasi.edit', compact('destinasi'));
    }

    public function update(Request $request, $id)
    {
        // Retrieve data from the request
        $idKategoriDestinasi = $request->idKategoriDestinasi;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $deskripsi = $request->deskripsi;
        $jamBuka = $request->jamBuka;
        $jamTutup = $request->jamTutup;
        $kontak = $request->kontak;
        // Handle checkbox status
        $statusFavorit = $request->has('statusFavoritDestinasi') ? 1 : 0;
    
        // Update the data in the database
        $data = DB::table('objek_wisata')
            ->where('id', $id)
            ->update([
                'idKategoriWisata' => $idKategoriDestinasi,
                'nama' => $nama,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'jamBuka' => $jamBuka,
                'jamTutup' => $jamTutup,
                'kontak' => $kontak,
                'statusFavorit' => $statusFavorit,
            ]);
    
            if($data){
                return redirect()->route('AdminDestinationView');
            }
            else{
                return redirect()->back();
            }
        
    }

    public function StoreDestination(Request $request){
    // Validate the incoming request data
    $request->validate([
        'idKategoriDestinasi' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'deskripsi' => 'required',
        'jamBuka' => 'required',
        'jamTutup' => 'required',
        'kontak' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming it's an image upload
    ]);

    // Handle file upload
    $imageName = time().'.'.$request->gambar->extension();  
    $request->gambar->move(public_path('images'), $imageName);

    // Determine the status of the checkbox
    $statusFavorit = $request->has('statusFavoritDestinasi') ? 1 : 0;

    // Store the form input into the database
    $data = DB::table('objek_wisata')->insert([
        'idKategoriWisata' => $request->idKategoriDestinasi,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'deskripsi' => $request->deskripsi,
        'jamBuka' => $request->jamBuka,
        'jamTutup' => $request->jamTutup,
        'kontak' => $request->kontak,
        'gambar' => $imageName,
        'statusFavorit' => $statusFavorit,
    ]);

    if ($data) {
        // If insertion is successful, redirect with success message
        return redirect()->route('AdminDestinationView');
    } else {
        // If insertion fails, redirect back with error message
        return redirect()->back();
    }
    }
}
