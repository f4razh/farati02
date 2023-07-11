<?php

namespace App\Http\Controllers;
use App\Http\Models\Produk;
use App\Http\Models\KategoriProduk;
// use DB;
use Illuminate\Support\Facades\DB; //QUERY BUILDER
//ELOQUENT
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index(){
        $produk = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();

        return view('admin.produk.index', compact('produk'));
        // compact berfungsi mengumpulkan atau membuat array yang akan dipanggil didalam view
    }
}
