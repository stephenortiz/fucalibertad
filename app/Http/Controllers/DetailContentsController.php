<?php

namespace fucalibertad\Http\Controllers;

use Illuminate\Http\Request;
use fucalibertad\detailcontents;
use fucalibertad\contents;
use fucalibertad\Http\Requests;
use fucalibertad\Http\Controllers\Controller;
use Validator;

class DetailContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = detailcontents::paginate(5);
        foreach ($details as $detail) {
            $content = detailcontents::find($detail->id)->contents;

            $detail->cotents_id=$content;
        }

        return view("admin/contents/details.index", ['details'=>$details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $details = new detailcontents;
        $contents = contents::all()->sortByDesc('id');
        return view("admin/contents/details.save",['detail'=>$details, 'contents'=>$contents]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[ 
       'titulo'   => 'required|min:3',
       'descripcion' => 'required|min:3',
       'contents_id'    => 'required|min:1',
       ]);

      if ($validator->fails()) {
        return redirect('admin/details/create')
            ->withErrors($validator)
            ->withInput ();
      }

      if($request->file('imagen') != null) { 
 
       // obtener fecha
       $codigo_fecha = date("YmdHis");
       // generar codigo aleatoreo 
       $no_aleatorio = rand(100, 999);
       // codigo aleatoreo para archivo
       $codigo = $codigo_fecha.$no_aleatorio;

       // obtenemos el campo file definido en el formulario
       $file = $request->file('imagen');
       $nombre = $file->getClientOriginalName();
       \Storage::disk('local')->put($codigo.$nombre,  \File::get($file));

      }

       $details = new detailcontents;
       $details->titulo       = $request->input('titulo');
       $details->descripcion       = $request->input('descripcion');
       $details->contents_id       = $request->input('contents_id');
       if($request->file('imagen') != null) { 
         $details->imagen       = $codigo.$nombre;
       }     
       $details->save();

       return redirect('admin/details');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $details = detailcontents::where('contents_id',$id)->orderBy('id', 'desc')->paginate(5);
        foreach ($details as $detail) {
            $content = detailcontents::find($detail->id)->contents;

            $detail->cotents_id=$content;
        }

        return view("admin/contents/details.index", ['details'=>$details]);

    }

    public function addDetail($id){

      $details = new detailcontents;
      $contents = contents::all();
      $contentsid = contents::find($id)->first();
      $details->id = null;
      $details->contents_id = $id;

      return view("admin/contents/details.save",['detail'=>$details, 'contents'=>$contents]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = contents::all();
        $contentsDetail = new contents;
        $details = detailcontents::where('id', $id)->first();
        
        return view("admin/contents/details.save",['detail'=>$details, 'contents'=>$contents]);

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
        
        $validator = Validator::make($request->all(),[ 
       'titulo'   => 'required|min:3',
       'descripcion' => 'required|min:3',
       'contents_id'    => 'required|min:1',
       ]);

      if ($validator->fails()) {
        return redirect('admin/details/create')
            ->withErrors($validator)
            ->withInput ();
      }

      if($request->file('imagen') != null) { 
 
       // obtener fecha
       $codigo_fecha = date("YmdHis");
       // generar codigo aleatoreo 
       $no_aleatorio = rand(100, 999);
       // codigo aleatoreo para archivo
       $codigo = $codigo_fecha.$no_aleatorio;

       // obtenemos el campo file definido en el formulario
       $file = $request->file('imagen');
       $nombre = $file->getClientOriginalName();
       \Storage::disk('local')->put($codigo.$nombre,  \File::get($file));

      }

       $details = detailcontents::find($id);
       $details->titulo       = $request->input('titulo');
       $details->descripcion       = $request->input('descripcion');
       $details->contents_id       = $request->input('contents_id');
       if($request->file('imagen') != null) { 
         $details->imagen       = $codigo.$nombre;
       }     
       $details->save();

       return redirect('admin/details');


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
