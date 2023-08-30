<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function vistaInicial()
    {
        return view('vista_inicial');
    }

    public function formularioCreacion()
    {
        return view('formulario_creacion');
    }

    public function insertarCliente(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
        ]);

        Cliente::create($data);

        return redirect()->route('vista')->with('message', 'Cliente creado satisfactoriamente');
    }

    public function listarClientes()
    {
        $clientes = Cliente::select('id', 'nombre')->get();
        return view('listar_clientes', compact('clientes'));
    }

    public function verCliente($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('ver_cliente', compact('cliente'));
    }

    public function borrarCliente($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect()->route('listarClientes');
    }
}
