<?php

namespace fucalibertad\Http\Controllers;

use Illuminate\Http\Request;
use fucalibertad\categories;
use fucalibertad\Http\Requests;
use fucalibertad\Http\Controllers\Controller;
use Validator;
use Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.index");
    }

}
