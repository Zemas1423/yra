<?php

namespace App\Http\Controllers;

use App\Models\Countries as ModelsCountries;
use Illuminate\Http\Request;

class Countries extends Controller
{
    
    public function create(Request $request){ 

        $request->validate([
            'name'  => 'required|min:4|max:25',
            'ISO'   => 'required|min:3|max:3'
        ]);

        $country = ModelsCountries::create([
            'name'  => $request->name,
            'ISO'   => $request->ISO
        ]);

        $country->save();

        return redirect('/countries');
    }

    public function update(Request $request, $id){

        $request->validate([
            'name'  => 'required|min:4|max:25',
            'ISO'   => 'required|min:3|max:3'
        ]);


        $country = ModelsCountries::find($id);
        $country->name  = $request->name;   
        $country->ISO   = $request->ISO;
        $country->save();

        return redirect('/countries');
    }
    
    public function delete($id){
  
        $country = ModelsCountries::find($id);
        $country->delete();

        return redirect('/countries');
    }
    
}
