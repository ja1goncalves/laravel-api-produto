<?php

namespace App\Http\Controllers;
use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(){
        $marcas = Marca::all();
        return response()->json($marcas);
    }

    public function show($id){
        $marcas = Marca::find($id);

        if(!$marcas){
            return response()->json([
                'message' => 'Record Not found',
            ], 404);
        }

        return response()->json($marcas);
    }

    public function store(Request $request){
        $marcas = new Marca();
        $marcas->fill($request->all());
        $marcas->save();

        return response()->json($marcas);
    }

    public function update(Request $request, $id){
        $marcas = Marca::find($id);

        if(!$marcas){
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $marcas->fill($request->all());
        $marcas->save();
        return response()->json($marcas);

    }

    public function destroy($id){
        $marcas = Marca::find($id);

        if(!$marcas){
            return response()->json([
                'message' => 'Record not Found',
            ], 404);
        }

        $marcas->delete();
    }
}
