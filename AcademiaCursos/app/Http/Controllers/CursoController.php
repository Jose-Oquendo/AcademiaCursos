<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursito = Curso::all(); //USamos un metodo all para traer toda la info de la tabla como array
        return view('cursos.index', compact('cursito'));//Contact apunta la info deseada a la vista para poderla usar en la lista
        //return $cursito;ASi probamos si sirve porq nos visualiza los datos de curso de labd
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Almacena un nuevo registro creado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //vamos a crear una instancia del modelo curso para manipular la tabla
        $cursito= new Curso(); //se debe crear la instancia  y la importacion en use
        $cursito->nombre = $request->input('nombre');// nombre es el campo de de la bd y el segundo nombre es el del campo q creamos /**hace una peticion al servidor para q almacene lo diligenciado en el formulario la flecha conecta el metodo all que trae toda la info almacenada en request, si le pongo input o name entonces me aparece el campo q le pido */
        $cursito->description = $request->input('descripcion');

        if($request->hasFile('imagen')){ //aqui en imagen miramos el name del campo en el html
            $cursito->imagen = $request->file('imagen')->store('public/cursos'); //aqui usamos es el field de la bd llamada imagen- Esto permite guardar en public gracias al metodo store y crea la carpeta cursos q la acabamos de nombrar,

        }
        $cursito->save(); //para guardar la info en la bd
        return redirect()->to('create/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = Curso::where('id', $id)->first();
        return view('cursos.edit', compact('cursito'));
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
        $cursito = Curso::find($id);
        $cursito->fill($request->all());
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->save();
        return redirect()->to("/curso/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}