<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function __construct(){
        $this->middleware("auth:api");
    }
    
    
    public function showAll(){
        $data = DB::table("produk")
        ->join('kategori','produk.id_kategori', '=', 'kategori.id_kategori' )
        ->select(
            'produk.id_produk',
            'produk.nama_produk',
            'kategori.kategori',
            'produk.harga_produk'
        )
        ->get();

        return response()->json( $data );
    }

    public function showOne($id){
        return response()->json(Produk::find($id));
    }

    public function create (Request $request){
        $Produk = Produk::create($request->all());

        return response()->json($Produk, 201);
    }

    public function update($id, Request $request){
        $Produk = Produk::findOrFail($id);
        $Produk->update($request->all());

        return response()->json($Produk,200);
    }

    public function delete($id){
        Produk::findOrFail($id)->delete();
        return response()->json('Deleted Succesfully',200);
    }
}
?>