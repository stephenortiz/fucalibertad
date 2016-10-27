<?php

namespace fucalibertad\Http\Controllers;

use Illuminate\Http\Request;
use fucalibertad\categories;
use fucalibertad\Http\Requests;
use fucalibertad\Http\Controllers\Controller;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        return view("admin/categories.index", ['category'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = new categories;
         return view("admin/categories.save",['category'=>$categories]);
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
       ]);

        if ($validator->fails()) {
        return redirect('admin/categories/create')
            ->withErrors($validator)
            ->withInput ();
       }

       $categories = new categories;
       $categories->descripcion       = $request->input('descripcion');
       $categories->save();

      return redirect('admin/categories');
      
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
        //
    }
}
