<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        Cliente::query()->create($request->all());

        return back();
    }
    public function update(Request $request, $id)
    {
        $cliente = Cliente::query()->findOrFail($id);

        $cliente->update($request->all());

        $cliente  = Cliente::query()->get();

        // Return para a lista de clientes

        $clientes = Cliente::query()->get();

        return view('listar', ['clientes' => $clientes]);
    }

    public function destroy($id)
    {
        $cliente = Cliente::query()->findOrFail($id);

        $cliente->delete();

        // Return para a lista de clientes

        $clientes = Cliente::query()->get();

        return view('listar', ['clientes' => $clientes]);
    }
    
    public function editar($id)
    {
        $cliente = Cliente::query()->findOrFail($id);

        return view('editar', ['cliente' => $cliente]);
    }
    public function excluir($id)
    {
        $cliente = Cliente::query()->findOrFail($id);

        return view('excluir', ['cliente' => $cliente]);
    }
    public function listar()
    {
        $clientes = Cliente::query()->get();

        return view('listar', ['clientes' => $clientes]);
    }
}
