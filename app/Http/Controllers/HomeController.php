<?php

namespace fucalibertad\Http\Controllers;

use Illuminate\Http\Request;
use fucalibertad\repertorys;
use fucalibertad\companys;
use fucalibertad\contents;
use fucalibertad\employees;
use fucalibertad\contacts;
use Validator;
use fucalibertad\Http\Requests;
use fucalibertad\Http\Controllers\Controller;

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
          $texts = contents::all()->where('repertorys_id',1)->where('categories_id',1)->sortByDesc("id");
          $parallax = contents::all()->where('categories_id',6)->sortByDesc("id");
          $blogs = contents::where('categories_id', 7)->orderBy('id', 'desc')->paginate(6);
        /*  foreach ($contents as $content) {
              $details = contents::find($content->id)->details;
              $content->content_id=$details;
          }
        */  
          return view('welcome', ['repertorys'=>$repertorys,'company'=>$companys,'texts'=>$texts,'parallax'=>$parallax,'blogs'=>$blogs]);
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quienesomos()
    {
        $repertorys = repertorys::all()->sortByDesc("id");
        $contents = contents::all()->where('repertorys_id',2);
        $companys = companys::all()->first();
        $employees = employees::where('states_id',1)->get();
        return view('foundation/index', ['company'=>$companys,'contents'=>$contents,'repertorys'=>$repertorys, 'employees'=> $employees]);
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

    public function programas(){
         $repertorys = repertorys::all()->sortByDesc("id");
         $contents = contents::all()->where('repertorys_id',3);
         $companys = companys::all()->first();
         return view('programs/index', ['company'=>$companys,'contents'=>$contents,'repertorys'=>$repertorys]);

    }

    public function contacto(){
         $repertorys = repertorys::all()->sortByDesc("id");
         $companys = companys::all()->first();
         $contacts = new contacts;
         return view('contacts/index', ['company'=>$companys,'contacts'=>$contacts,'repertorys'=>$repertorys]);
    }

    public function email(Request $request){

          $validator = Validator::make($request->all(),[ 
         'nombre'   => 'required|min:3',
         'telefono'   => 'required',
         'email'   => 'required|email',
         'subject'   => 'required|min:3',
         'descripcion'   => 'required|min:3',
         ]);

        if ($validator->fails()) {
        return redirect('contacto')
            ->withErrors($validator)
            ->withInput ();
       }

         $contact = new contacts;
         $contact->nombre       = $request->input('nombre');
         $contact->telefono       = $request->input('telefono');
         $contact->email       = $request->input('email');
         $contact->subject       = $request->input('subject');
         $contact->descripcion       = $request->input('descripcion');    
         $contact->save();


         $data = $request->all();

         //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
         \Mail::send('emails.message', $data, function($message) use ($request)
         {
           //remitente
           $message->from($request->email, $request->name);
 
           //asunto
           $message->subject($request->subject);
 
           //receptor
           $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
 
         });

         return \View::make('emails.success');  
    }

    public function blog($id){


      $repertorys = repertorys::all()->sortByDesc("id");
      $companys = companys::all()->first();
      $contents = contents::find($id);
      return view('blog.index', ['blog'=>$contents,'repertorys'=>$repertorys,'company'=>$companys]);

    }

    public function programDetail ($id){

      $contents = contents::find($id);
      $repertorys = repertorys::all()->sortByDesc('id');
      $companys = companys::all()->first();
      $contents->content_id=contents::find($contents->id)->details;

//dd($contents);
      return view('programs.detail', ['program'=>$contents,'repertorys'=>$repertorys,'company'=>$companys]);


    }

}
