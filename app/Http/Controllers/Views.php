<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Countries;
use Illuminate\Http\Request;

class Views extends Controller
{
    
    public function index(){
        return redirect("/airports");
    }

    public function airports(){
        return view("airports");
    }

    public function countries(){

        $countries = Countries::all();

        return view("countries", ['countries' => $countries]);
    }

    public function airlines(){

        $airlines = Airlines::all();

        return view("airlines", ['airlines' => $airlines]);
    }

    public function add_airports(){
        return view("add_airports");
    }

    public function edit_airports($id){
        
        return view("edit_airports");
    }

    public function remove_airlines(){
        return view("remove_airlines");
    }

    public function add_airlines(){
        return view("add_airlines");
    }

    public function delete_airports(){
        return view("delete_airports");
    }

    public function edit_countries($id){

        $country = Countries::find($id);

        return view("edit_countries", ['country' => $country]);
    }

    public function delete_countries($id){
        return view("delete_countries", ['id' => $id]);
    }

    public function add_countries(){
        return view("add_countries");
    }

    public function edit_airlines($id){

        $airline = Airlines::find($id);
        $countries = Countries::all();
        return view("edit_airlines", ['airline' => $airline, 'countries' => $countries]);
    }

    public function delete_airlines($id){
        return view("delete_airlines", ['id' => $id]);
    }

    public function create_airlines(){
        $countries = Countries::all();

        return view("create_airlines", ['countries' => $countries]);
    }



}
