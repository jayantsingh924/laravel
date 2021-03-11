<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function index(Request $request)
    {
       if ($request->session()->has('ADMIN_LOGIN'))
          {
            return redirect('admin/dashboard'); 
          }

       else
           {
             return view ('admin/admin-login');
           }

       return view ('admin/admin-login');
    }

    
    public function auth(Request $request)
    {
      
        $email =  $request->post('email');
        $password =  $request->post('password');

        // $result = Admin::where(['email' => $email, 'password' => $password])->get();
     
      $result = Admin::where(['email' => $email])->first();
   
     if ($result)
      {
         if (Hash::check($request->post('password'), $result->password)) 
         {
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result->id);
            return redirect('admin/dashboard');  
         }
    else
        {
            $request->session()->flash('error', 'Please enter a correct password');
            return redirect('admin');   
        }
         
     }
     else
     {
        $request->session()->flash('error', 'Please enter a valid details');
        return redirect('admin');
     }
    }

public function dashboard()
    {
       return view('admin.admin-dashboard');
    }
   

 public function updatepassword()
     {
        $r = Admin::find(1);
        $r->password = Hash::make('jayant');
        $r->save();
     }  

}
