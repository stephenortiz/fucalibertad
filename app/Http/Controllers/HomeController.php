<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repertorys;
use App\companys;
use App\contents;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          
          $repertorys = repertorys::all()->sortByDesc("id");
          $companys = companys::all()->first();
          $contents = contents::all()->where('repertorys_id',1)->sortBy("id");
          $parallax = contents::all()->where('categories_id',4)->sortBy("id");
          foreach ($contents as $content) {
              $details = contents::find($content->id)->details;
              $content->content_id=$details;
          }
          return view('welcome', ['repertorys'=>$repertorys,'company'=>$companys,'contents'=>$contents,'parallax'=>$parallax]);
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quienesomos()
    {
        //
    }

         
    public function login()
    {
          $menues = menues::all()->sortByDesc("id");
          $companys = companys::all()->first();
          return view('auth/login', ['menus'=>$menus], ['company'=>$companys]);
    }

    public function galerias()
    {
          $repertorys = repertorys::all()->sortByDesc("id");
          $contents = contents::where('repertorys_id',4)->orderBy('id', 'asc')->paginate(10);
          $companys = companys::all()->first();
          return view('galleries/index', ['company'=>$companys,'contents'=>$contents,'repertorys'=>$repertorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
