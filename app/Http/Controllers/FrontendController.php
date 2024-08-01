<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Inventory;
use Illuminate\Support\Facades\Hash;
class FrontendController extends Controller
{
   



    public function register(){
        return view("frontend.register");
    }
    public function register_post(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $register = new User();

        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->save();
        // dd($request->all());

        return redirect('/');
    }

    public function index(){
        return view('frontend.index');
    }

    public function login_post(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Store the user's name in the session
            $request->session()->put('user_name', $user->name);

            // Redirect to the dashboard
            return redirect('/dashboard');
        } else {
            // Redirect back with an error message
            return redirect('/')->with('error', 'Wrong Email or Password!');
        }
    }

    public function logout(Request $request)
    {
       
        $request->session()->flush();
        
        
        $request->session()->regenerateToken();
        
        
        return redirect('/'); 
    }


    public function dashboard(Request $request)
    {
        // Get the total number of inventory items
        $totalInventory = Inventory::count();
        
        // Retrieve the username from the session or default to 'Guest'
        $userName = $request->session()->get('user_name', 'Guest'); // Ensure 'user_name' is correctly set in the session
        
        // Pass both variables to the view
        return view('frontend.dashboard', compact('totalInventory', 'userName'));
    }
}


