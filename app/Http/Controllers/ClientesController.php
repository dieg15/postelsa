<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Clientes::all();

        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = request()->validate([
        'nombre' => ['required', 'min:3'],
        'calle' => ['required', 'min:3'],
        'num_ext' => ['required', 'min:3'],
        'num_int' => ['required', 'min:3'],
        'colonia' => ['required', 'min:3'],
        'ciudad' => ['required', 'min:3'],
        'estado' => ['required', 'min:3'],
        'cod_postal' => ['required', 'min:4'],
        'tel' => ['required', 'min:10'],
        'cel' => ['required', 'min:10'],
        'email' => ['required', 'email'],
        'rfc' => ['required', 'min:5'],
        ]);
        $cliente[] = 1;
        $cliente[] = 1;
        Cliente::create($cliente);
        /*$cliente = new Clientes();
        $cliente ->nombre = $request->nombre;
        $cliente ->calle = $request->calle;
        $cliente ->num_ext = $request->num_ext;
        $cliente ->num_int = $request->num_int;
        $cliente ->colonia = $request->colonia;
        $cliente ->ciudad = $request->ciudad;
        $cliente ->estado = $request->estado;
        $cliente ->cod_postal = $request->cod_postal;
        $cliente ->tel = $request->tel;
        $cliente ->cel = $request->cel;
        $cliente ->email = $request->email;
        $cliente ->rfc = $request->rfc;
        $cliente ->status = 1;
        $cliente ->user = 1;
        $cliente -> save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
         return $cliente;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $clientes)
    {
        //
        return $clientes;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
