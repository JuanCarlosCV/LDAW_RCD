<?php

namespace App\Http\Controllers;

use App\Eventos;
use Illuminate\Http\Request;
use Symfony\Component\HttpClient\HttpClient;
use Illuminate\Support\Facades\Http;
class EventoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$response = Http::get('http://127.0.0.1:8000/events');

        $response = Http::get('http://127.0.0.1:8080/api/events');

// Get the response body
      //  $response->body();
         $events = $response->json();
        //dd($jsonData);

        return view ('events',compact('events'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        return view('events.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = new Eventos([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'siglas' => $request->get('siglas'),
            'capacidad' => $request->get('capacidad'),
            'fecha' => $request->get('fecha'),
        ]);
        $event->save();
        return redirect('/eventos')->with('success', 'Evento Registrado!');
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

        $event = Eventos::find($id);
        return view('events', compact('event'));
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
        $event = Eventos::find($id);
        $event->nombre =  $request->get('nombre');
        $event->descripcion = $request->get('descripcion');
        $event->siglas = $request->get('siglas');
        $event->capacidad = $request->get('capacidad');
        $event->fecha = $request->get('fecha');
        $event->save();


        return redirect('/events')->with('success', 'Evento updated!');
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
