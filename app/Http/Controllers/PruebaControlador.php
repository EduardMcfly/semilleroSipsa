<?php

namespace App\Http\Controllers;

use App\PruebaModelo;
use Illuminate\Http\Request;
use Validator;

class PruebaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vista_prueba',
            [
                'datos' => PruebaModelo::select("id", 'name', 'email')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = $this->validateCategoria($request);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datos = (Object) $request->input();
        $tablaPrueba = new PruebaModelo;
        $tablaPrueba->name = $datos->name;
        $tablaPrueba->email = $datos->correo;
        $tablaPrueba->email_verified_at = $datos->hola;
        $tablaPrueba->password = $datos->contraseña;
        $tablaPrueba->save();
        return redirect()->back();
    }

    public function validateCategoria(Request $request)
    {
        return Validator::make($request->all(), [
            'correo' => 'email',
            'name' => 'string',
            'password' => 'string',
            'hola' => 'date',
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = PruebaModelo::find($id);
        $flight->delete();
        return redirect()->back();
    }
}
