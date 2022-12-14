<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Ticket;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PagesController extends Controller
{

    public function viewAboutUs(){
        return view('about-us');
    }

    public function viewContact(){
        return view('contact');
    }
    
    public function viewHome(){
        return view('homepage');
    }
    
    public function showForm() {
        return view('form');
    }

    public function viewAdmin() {
        return view('admin.admin');
    }

    

    public function sendContact(Request $request)
    {
        $newContact = new Contact();
        $newContact->name = $request->input('inputName');
        $newContact->email = $request->input('inputMail');
        $newContact->description = $request->input('description');
        $newContact->save();
        
        return redirect()->route('home'); 
    }
    
}
