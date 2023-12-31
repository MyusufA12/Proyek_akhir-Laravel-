<?php

namespace App\Http\Controllers;

use App\Models\kupon;
use App\Http\Requests\StorekuponRequest;
use App\Http\Requests\UpdatekuponRequest;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('admin/kupondiskon');
    }
    public function tabel()
    {
        return view('admin/table_kupon',['kupon'=>kupon::paginate(5, ['*'], 'page'),]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'penawaran' => 'required',
            'syarat' => 'required',
            'waktu' => 'required|date',
        ]);

        // Create a new instance of the Kupon model
        $kupon = new Kupon;
        $kupon->jenis = $request->jenis;
        $kupon->penawaran = $request->penawaran;
        $kupon->syarat = $request->syarat;
        $kupon->waktu = $request->waktu;

        // Save the data to the database
        $kupon->save();

        // Redirect back with a success message
        return redirect()->route('create.kupon')->with('success', 'Kupon berhasil di tambahkan!');
    }

    public function updatekupon($jenis)
    {
        // Mengambil data produk berdasarkan jenis
        $user = kupon::where('jenis', $jenis)->first();

        // Menampilkan halaman pembaruan produk dengan membawa data produk
        return view('/admin/update_kupon', compact('user'));
    }
    public function kuponupdate(Request $request, $jenis)
    {
        // Validasi data yang diedit
        $request->validate([
            'jenis' => 'required',
            'penawaran' => 'required',
            'syarat' => 'required',
            'waktu' => 'required',
        ]);
    
        // Temukan data produk berdasarkan jenis
        $product = kupon::where('jenis', $jenis)->first();
    
        // Perbarui data produk
        $product->update([
            'jenis' => $request->jenis,
            'penawaran' => $request->penawaran,
            'syarat' => $request->syarat,
            'waktu' => $request->waktu,
        ]);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->route('tabel.kupon')->with('success', 'Kupon berhasil diperbarui!');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekuponRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kupon $kupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kupon $kupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekuponRequest $request, kupon $kupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($jenis)
    {
        // Temukan dan hapus user berdasarkan nama (atau field lain yang sesuai)
        $user = kupon::where('jenis', $jenis)->first();
    
        // Periksa apakah user ditemukan
        if (!$user) {
            return redirect('/admin/table_kupon')->with('error', 'User not found');
        }
    
        // Hapus user
        $user->delete();
    
        // Redirect dengan pesan sukses
        return redirect('/admin/table_kupon')->with('hapus', 'Kupon berhasil di hapus!!');
    }
}
