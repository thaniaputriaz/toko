<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pelanggan;

class PelangganController extends Controller{

    public function __construct(){
        $this->middleware("auth:api");
    }
    
    public function showAll(){
        return response()->json(Pelanggan::all());
    }

    public function showOne($id){
        return response()->json(Pelanggan::find($id));
    }

    public function create(Request $request){
        $Pelanggan = Pelanggan::create($request->all());
        return response()->json($Pelanggan, 201);
    }

    public function update(Request $request, $id){
        $Pelanggan = Pelanggan::findOrFail($id);
        $Pelanggan->update($request->all());

        return response()->json($Pelanggan, 200);
    }

    public function delete(Request $request, $id){
        $Pelanggan = Pelanggan::findOrFail($id);
        $Pelanggan->delete();
        return response()->json('Deleted Succesfully',200);
    }
}
?>