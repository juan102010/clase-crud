<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-------------consultar
        //trae todo
        $tickets1=Ticket::all();
        //trae por id
        //$query2=Ticket::find(2);
        //dd($query2);
        return view('tickets',compact('tickets1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //------------crear
        $ticketObject = new Ticket;
        $ticketObject->descripcion = "Test";
        $ticketObject->fecha_solicitud = "2020/05/07";
        $ticketObject->responsable = "juan";
        $ticketObject->save();
        $tickets1=Ticket::all();
        return view('tickets',compact('tickets1'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //-------------actualizar
        $objectToUpdate=Ticket::find(3);
        $objectToUpdate->descripcion="hola mundo";
        $objectToUpdate->save();
        dd($objectToUpdate);
     return view('tickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //--------------borrar
        $objectToDelete=Ticket::destroy();
        return view('/');
    }
}
