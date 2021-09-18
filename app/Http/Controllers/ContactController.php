<?php
// voir https://laravel.sillo.org/cours-laravel-5-5-les-bases-la-validation/
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        /*
        $this->validate($request, [  // appel explicite, sinon implicite (injection)
            'nom' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:250'
        ]);
        if ($validator->fails()) {  // appel expicite en cas d'erreus
            return back()->withErrors($validator)->withInput();
        }
        */
        return view('confirm');
    }
}
