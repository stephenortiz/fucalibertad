<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companys;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = companys::where('id', 1)->first();
        return view('admin/companys.index',['company'=>$companys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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


    $validator = Validator::make($request->all(),[ 
       'razonsocial' => 'required|max:100',
       'nit'          => 'required|max:25',
       'direccion'    => 'required|max:100',
       'telefono'     => 'required|max:100',
       'email'        => 'required|email',
       ]);

    if ($validator->fails()) {
            return redirect('admin/companys')
                 ->withErrors($validator)
                 ->withInput ();
    }


       $companys = new companys;
       $companys->id = $request->input('id');
       $companys->razonsocial       = $request->input('razonsocial');
       $companys->nit             = $request->input('nit');
       $companys->direccion             = $request->input('direccion');
       $companys->telefono             = $request->input('telefono');
       $companys->celular             = $request->input('celular');
       $companys->email             = $request->input('email');
       $companys->save();

      return redirect('admin/companys');
       
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

        
    $validator = Validator::make($request->all(),[ 
       'razonsocial' => 'required|max:100',
       'nit'          => 'required|max:25',
       'direccion'    => 'required|max:100',
       'telefono'     => 'required|max:100',
       'email'        => 'required|email',
       ]);

    if ($validator->fails()) {
            return redirect('admin/companys')
                 ->withErrors($validator)
                 ->withInput ();
    }


        $companys = companys::find($id);
        $companys->razonsocial       = $request->input('razonsocial');
        $companys->nit             = $request->input('nit');
        $companys->direccion             = $request->input('direccion');
        $companys->telefono             = $request->input('telefono');
        $companys->celular             = $request->input('celular');
        $companys->email             = $request->input('email');

        $companys->update();

        return redirect('admin/companys');

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
