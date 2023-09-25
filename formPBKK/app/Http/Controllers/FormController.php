<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller{
    public function showForm()    {
        return view('form');
    }
    public function submitForm(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|max:255',
            'TL' => 'required|date',
            'Alamat' => 'required|string|max:510',
            'Email' => 'required|email|max:255',
            'Password' => 'required|string|min:8',
            'Image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Float' => [
                'required',
                'regex:/^\d+(\.\d{1,2})?$/',
                'between:2.50,99.99'
            ],            
        ]);
    
        $request->Image->storeAs('public/images', $request->Image->getClientOriginalName());
    
        $results = [
            'Nama' => $request->input('Nama'),
            'TL' => $request->input('TL'),
            'Alamat' => $request->input('Alamat'),
            'Email' => $request->input('Email'),
            'Password' => $request->input('Password'),
            'Image' => $request->Image->getClientOriginalName(),
            'Float' => floatval($request->input('Float'))
        ];
    
        session(['results' => $results]);
    
        return redirect('/result');
    }    
    

    public function formResult(){
        $results = session()->get('results');
    
        return view('result', ['results' => $results]);
    }
    
}
