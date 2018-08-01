<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function request (){
        $this->validate($request,[
            'title' => 'required',
           'description' => 'required'
            ]);
    }
   
    
}
