<?php

namespace App\Http\Controllers;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
   public function index(){

        $treatment = Treatment::all();
        return view("pages.treatment.index",compact('treatment'));


   }
}
