<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contents;
use App\categories;
use App\repertorys;
use App\companys;
use App\detailcontents;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = contents::paginate(5);
        $companys = companys::where('id', 1)->first();
          foreach ($contents as $content) {
              $categories = contents::find($content->id)->categories;
              $repertorys = contents::find($content->id)->repertorys;
              $details = contents::find($content->id)->details;

              $content->content_id=$details;
              $content->repertorys_id=$repertorys;
              $content->categories_id=$categories;
          } 

        return view("admin/contents.index", ['content'=>$contents,'company'=>$companys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = categories::all();
       $repertorys = repertorys::all();
       $contents = new contents;
       $details = new detailcontents;
       return view("admin/contents.save",['content'=>$contents,'details'=>$details, 'categories'=>$categories,'repertorys'=>$repertorys]);
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
       'titulo'   => 'required',
       'descripcion'   => 'required',
       'categories_id'   => 'required',
       'repertorys_id'   => 'required',
       ]);

        if ($validator->fails()) {
        return redirect('admin/contents/create')
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

       $contents = new contents;
       $contents->titulo       = $request->input('titulo');
       $contents->descripcion       = $request->input('descripcion');
       $contents->categories_id       = $request->input('categories_id');
       $contents->repertorys_id       = $request->input('repertorys_id');
       $contents->url       = $request->input('url');
       if($request->file('imagen') != null) { 
         $contents->imagen       = $codigo.$nombre;
       }     
       $contents->save();

       return redirect('admin/contents');

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
        $categories = categories::all();
        $repertorys = repertorys::all();
        $details = new detailcontents;
        $contents = contents::where('id', $id)->first();
        return view("admin/contents.save",['content'=>$contents,'details'=>$details, 'categories'=>$categories,'repertorys'=>$repertorys]);
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
       'titulo'   => 'required',
       'descripcion'   => 'required',
       'categories_id'   => 'required',
       'repertorys_id'   => 'required',
       ]);

        if ($validator->fails()) {
        return redirect('admin/contents/create')
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

       $contents = contents::find($id);
       $contents->titulo       = $request->input('titulo');
       $contents->descripcion       = $request->input('descripcion');
       $contents->categories_id       = $request->input('categories_id');
       $contents->repertorys_id       = $request->input('repertorys_id');
       $contents->url       = $request->input('url');
       if($request->file('imagen') != null) { 
         $contents->imagen       = $codigo.$nombre;
       }     
       $contents->save();

       return redirect('admin/contents');

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
