<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\repertorys;
use App\states;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employees::paginate(5);
        foreach ($employees as $employee) {
           $states = employees::find($employee->id)->states;
           $repertorys = employees::find($employee->id)->repertorys;

           $employee->states_id=$states;
           $employee->repertorys_id=$repertorys;

        }

      return view("admin/employees.index", ['employees'=>$employees]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repertorys = repertorys::all();
        $employees = new employees;
        return view("admin/employees.save",['employe'=>$employees, 'repertorys'=>$repertorys]);
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
       'nombre'   => 'required|max:50',
       'apellido' => 'required|max:50',
       'cargo'    => 'required|max:50',
       'states_id'    => 'required',
       'repertorys_id'    => 'required',
       'logo'    => 'required',
       ]);

      if ($validator->fails()) {
        return redirect('admin/employees/create')
            ->withErrors($validator)
            ->withInput ();
      }

      // obtenemos el campo file definido en el formulario
      $file = $request->file('logo');

      // obtener fecha
      $codigo_fecha = date("YmdHis");
      // generar codigo aleatoreo 
      $no_aleatorio = rand(100, 999);
      // codigo aleatoreo para archivo
      $codigo = $codigo_fecha.$no_aleatorio;

      // obtenemos el campo file definido en el formulario
      $file = $request->file('logo');
      $nombre = $file->getClientOriginalName();
      \Storage::disk('local')->put($codigo.$nombre,  \File::get($file));

       $employees = new employees;
       $employees->nombre       = $request->input('nombre');
       $employees->apellido             = $request->input('apellido');
       $employees->cargo             = $request->input('cargo');
       $employees->logo              = $codigo.$nombre;
       $employees->states_id              = $request->input('states_id');
       $employees->repertorys_id              = $request->input('repertorys_id');
       $employees->save();

      return redirect('admin/employees');
      

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
       $states = states::all();
       $repertorys = repertorys::all();
       $employees = employees::where('id', $id)->first();
       return view('admin/employees.save',['employe'=>$employees, 'states'=>$states, 'repertorys'=>$repertorys]);
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
       'nombre'   => 'required|max:50',
       'apellido' => 'required|max:50',
       'cargo'    => 'required|max:50',
       'states_id'    => 'required',
       'repertorys_id'    => 'required',
       ]);

        if ($validator->fails()) {
        return redirect('admin/employees/create/'.$id)
            ->withErrors($validator)
            ->withInput ();
        }

       $Bandera = false;
       // obtener fecha
       $codigo_fecha = date("YmdHis");
       // generar codigo aleatoreo 
       $no_aleatorio = rand(100, 999);
       // codigo aleatoreo para archivo
       $codigo = $codigo_fecha.$no_aleatorio;

       if($request->file('logo') != null) { 
       $Bandera=true;
       }

      
       if($Bandera){

       // obtenemos el campo file definido en el formulario
       $file = $request->file('logo');
       $nombre = $file->getClientOriginalName();
       \Storage::disk('local')->put($codigo.$nombre,  \File::get($file));

       } 


        $employees = employees::find($id);
        $employees->nombre       = $request->input('nombre');
        $employees->apellido             = $request->input('apellido');
        $employees->cargo             = $request->input('cargo');
        if($Bandera){
          $employees->logo              = $codigo.$nombre;
        }
        
        $employees->update();

        return redirect('admin/employees');

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
