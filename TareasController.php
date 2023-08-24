<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function index()
    {

        $tareas = Tarea::paginate(10);
        return view("tarea.index")->with("tareas", $tareas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tarea.createForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // /[A-Z]{3}[0-9]{4} para las placas de autos
    public function store(Request $request)
    {

        $request->validate([
        'nombre' => 'required|regex:/[a-zA-Z áéíóúñ]+/i|min:3',
           'descripcion'=>'required',
           'estado'=>'required',
           'fecha_inicio'=>'required',
           'fecha_fin'=>'required',
           'proyecto_id'=>'required|regex:/[0-9]{4}',
           'usuario_id'=>'required|regex:/[0-9]{4}',

        ]);

        $tarea = new Tarea();
        $tarea->nombre = $request->input("nombre");
        $tarea->descripcion = $request->input("descripcion");
        $tarea->estado = $request->input("estado");
        $tarea->fecha_inicio= $request->input("fecha_inicio");
        $tarea->fecha_fin= $request->input("fecha_fin");
        $tarea->proyecto_id = $request->input("proyecto_id");
        $tarea->usuario_id = $request->input("usuari_id");

        if ($tarea->save() ) {
            return redirect()->route("tarea.index")->with('mensaje', 'Nuevo tarea creado exitosamente.');
        } else {
            return back();
        };


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = tarea::findOrFail($id);
        return view("tarea.show")->with("tarea", $tarea);
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


        $tarea = tarea::findOrFail($id);
        return view("tareas.createForm")->with("tarea", $tarea);

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
        $tarea = Tarea::findOrFail($id);


        $request->validate([
            'nombre' => 'required|regex:/[a-zA-Z áéíóúñ]+/i|min:3',
               'descripcion'=>'required',
               'estado'=>'required',
               'fecha_inicio'=>'required',
               'fecha_fin'=>'required',
               'proyecto_id'=>'required|regex:/[0-9]{4}',
               'usuario_id'=>'required|regex:/[0-9]{4}',

            ]);

            $tarea = new tarea();
            $tarea->nombre = $request->input("nombre");
            $tarea->descripcion = $request->input("descripcion");
            $tarea->estado = $request->input("estado");
            $tarea->fecha_inicio= $request->input("fecha_inicio");
            $tarea->fecha_fin= $request->input("fecha_fin");
            $tarea->proyecto_id = $request->input("proyecto_id");
            $tarea->usuario_id = $request->input("usuari_id");

        if ($tarea->save() ) {
            return redirect()->route("tarea.index")->with('mensaje', 'Se actualizó el tarea '. $tarea->nombre);
        } else {
            return back();
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Tarea::destroy($id) > 0 ) {
            return redirect()->route("tareas.index")->with('mensaje', 'Se eliminó el tarea');
        } else {
            return back();
        }
    }
}
