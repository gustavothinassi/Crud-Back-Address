<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Facades\ApiViaCep;



class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Address::all();

        if($address)
            return response()->json($address);
        return response()->json(['error' => 'Response not found'], 401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $address = new Address();
        $address->cep = $request->cep;
        $address->logradouro = $request->logradouro;
        $address->bairro = $request->bairro;
        $address->cidade = $request->cidade;
        $address->uf = $request->uf;


        $address->save();

        if($address)
            return response()->json($address);

        return response()->json(['error' => 'Response not save'], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $address = Address::find($id);

        if($address)
            return response()->json($address);

        return response()->json(['error' => 'Response not found'], 401);
    }

    public function getCep(string $search) {
        $add = Address::select('address.*')
        ->where('address.cep', 'like', '%' . $search . '%')
        ->orWhere('address.logradouro', 'like', '%' . $search . '%' )
        ->get();

        if(!$add->isEmpty()) {
            return response()->json($add);
        } else {
            $data = ApiViaCep::get('/'.$cep.'/json/')->json();

            if(!isset($data['erro'])){
                $address = new Address();
                $address->cep = $data['cep'];
                $address->logradouro = $data['logradouro'];
                $address->bairro = $data['bairro'];
                $address->cidade = $data['localidade'];
                $address->uf = $data['uf'];

                $address->save();

                if($address)
                return response()->json([$address]);

                return response()->json(['error' => 'Response not found'], 401);
            } else {
                return response()->json(['error' => 'Response not found'], 401);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $address = Address::find($id);
        $address->cep = $request->cep;
        $address->logradouro = $request->logradouro;
        $address->bairro = $request->bairro;
        $address->cidade = $request->cidade;

        $address->save();

        if($address)
            return response()->json($address);

        return response()->json(['error' => 'Response not update'], 401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::find($id);
        $address->delete();

        if($address)
            return response()->json($address);

        return response()->json(['error' => 'Response not destroy'], 401);
    }
}
