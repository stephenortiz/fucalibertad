<?php

namespace fucalibertad\Http\Controllers;

use Illuminate\Http\Request;
use fucalibertad\repertorys;
use fucalibertad\Http\Requests;
use fucalibertad\Http\Controllers\Controller;
use Validator;


class RepertoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repertorys = repertorys::all();
        return view('admin/repertorys.index',['repertorys'=>$repertorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repertorys = new repertorys;
        return view("admin/repertorys.save",['repertory'=>$repertorys]);
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
       'descripcion'   => 'required|max:50',
       'url' => 'required|max:50',
       ]);

      if ($validator->fails()) {
        return redirect('admin/repertorys/create')
            ->withErrors($validator)
            ->withInput ();
      }


       $repertorys = new menus;
       $repertorys->descripcion       = $request->input('descripcion');
       $repertorys->url             = $request->input('url');
       $repertorys->save();

      return redirect('admin/repertorys');

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

       $repertorys = repertorys::where('id', $id)->first();
       return view("admin/repertorys.save",['repertory'=>$repertorys]);
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
       'descripcion'   => 'required|max:50',
       'url' => 'required|max:50',
       ]);

      if ($validator->fails()) {
        return redirect('admin/repertorys/create')
            ->withErrors($validator)
            ->withInput ();
      }

        $repertorys = menus::find($id);
        $repertorys->descripcion       = $request->input('descripcion');
        $repertorys->url             = $request->input('url');

        $repertorys->update();

        return redirect('admin/repertorys');

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
