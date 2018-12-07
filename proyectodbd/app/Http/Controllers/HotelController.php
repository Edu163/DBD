<?php

namespace projectodbd\Http\Controllers;

use Illuminate\Http\Request;
//use projectodbd\Http\Request;
use projectodbd\Hotel;
use Illuminate\Support\Facades\Redirect;
use projectodbd\Http\HotelFormRequest;
use DB;

class HotelController extends Controller
{
    /**
     * Display a listing of  the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        //
        if($request)
        {
            //Filtro busqueda
            $query=trim($request->get('searchText'));
            //Condición, buscar en mi tabla hotel donde el nombre sea como la consulta
            $hotel=DB::table('hotel')->where('nombre','LIKE','%'.$query.'%')->orderBy('nombre','desc')->paginate(7);
            //RETORNO Y ENVIO DE PARAMETROS
            //NO SE SI NOMBRE ESTE BIEN
            return view('admin.hotel.index',["nombre"=>$hotel,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.hotel.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelFormRequest $request)
    {
        //
        $hotel=new Hotel;
        $hotel->nombre=$request->get('nombre');
        $hotel->pais=$request->get('pais');
        $hotel->direccion=$request->get('direccion');
        $hotel->save();
        return Redirect::to('admin/hotel');
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
        //NO SE SI NOMBRE ESTE BIEN
        return view("admin.hotel.show",["nombre"=>hotel::findOrFail($id)]);
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
        return view("admin.hotel.edit",["nombre"=>hotel::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HotelFormRequest $request, $id)
    {
        //
        $hotel=Hotel::findOrFail($id);
        $hotel->nombre=$request->get('nombre');
        $hotel->pais=$request->get('pais');
        $hotel->descripcion=$request->get('descripcion');
        $hotel->update();
        return Redirect::to('admin/hotel');
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
