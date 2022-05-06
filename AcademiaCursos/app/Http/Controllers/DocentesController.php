<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;
use phpDocumentor\Reflection\PseudoTypes\True_;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docentes::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create', ['message'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente= new Docentes();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->edad = $request->edad;
        $docente->email = $request->email;
        $docente->ocupacion = $request->ocupacion;

        if($request->hasFile('foto')){ 
            $docente->foto = $request->file('foto')->store('public/docentes'); 

        }
        $docente->save();
        return view('docentes.create', ['message'=>True]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentes = Docentes::all();
        $docente = Docentes::find($id);
        return view('docentes.show', ['docentes'=>$docentes,'docente'=>$docente]);
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
        $docente = Docentes::find($id);
        $docente->fill($request->all());
        if($request->hasFile('foto')){
            $docente->foto = $request->file('foto')->store('public/docentes');
        }
        $docente->save();
        return redirect()->to("/docentes/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docentes::find($id);
        $urlfoto = $docente->foto;
        $nombrefoto = str_replace('public/','\storage\\',$urlfoto);
        $rutafoto = public_path().$nombrefoto;
        unlink($rutafoto);

        $docente->delete();
        return redirect()->to("/docentes/");
    }
}
