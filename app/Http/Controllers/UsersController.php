<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    //



    public  function index(){
        return view('adduser');
    }





    public function store(Request $request){




        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'prenom' => 'required',
            'gsm' => 'required',
            'specialite' => 'required',
        ], [
            'name.required' => "Le champ nom est obligatoire.", 
            'prenom.required' => "Le champ prénom est obligatoire.",
            'gsm.required' => "Le champ gsm est obligatoire.",
            'gsm.unique' => "Le numéro de GSM est déjà utilisé.", // Custom message for uniqueness violation
            'specialite.required' => "Le champ Specialite est obligatoire."
        ]);
        
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }



  
  
        $user = new Users();
        $user->name= $request->name;
        $user->prenom= $request->prenom;
        $user->gsm= $request->gsm;  
        $user->specialite= $request->specialite;  
        $user->save();

        
      

        return view('quizze', compact('user'));
   

        
    }
}
