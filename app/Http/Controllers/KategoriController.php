<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller{

    public function __construct(){
        $this->middleware("auth:api");
    }
    
    public function showAll(){
        return response()->json(Kategori::all());
    }

    public function showOne($id){
        return response()->json(Kategori::find($id));
    }

    public function create(Request $request){
        $Kategori = Kategori::create($request->all());
        return response()->json($Kategori, 201);
    }

    public function update(Request $request, $id){
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return response()->json($kategori, 200);
    }

    public function delete(Request $request, $id){
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return response()->json('Deleted Succesfully',200);
    }
}
?>