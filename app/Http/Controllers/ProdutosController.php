<?php

namespace App\Http\Controllers;
use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all();
        return response()->json($produtos);
    }

    public function show($id){
        $produtos = Produtos::find($id);

        if(!$produtos){
            return response()->json([
                'message' => 'Record Not found',
            ], 404);
        }

        return response()->json($produtos);
    }

    public function store(Request $request){
        $produtos = new Produtos();
        $produtos->fill($request->all());
        $produtos->save();

        return response()->json($produtos);
    }

    public function update(Request $request, $id){
        $produtos = Produtos::find($id);

        if(!$produtos){
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $produtos->fill($request->all());
        $produtos->save();
        return response()->json($produtos);

    }

    public function destroy($id){
        $produtos = Produtos::find($id);

        if(!$produtos){
            return response()->json([
                'message' => 'Record not Found',
            ], 404);
        }

        $produtos->delete();
    }
}
