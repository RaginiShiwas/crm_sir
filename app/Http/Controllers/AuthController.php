<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BranchUser;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function login(Request $request)
    {

        // Validate the request
        $request->validate([
            'username' => 'required',
            'user_password' => 'required',
            'finacial_year'=>'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('username', 'user_password');
        $user = BranchUser::where('username', $credentials['username'])->first();


        if (!$user || !password_verify($credentials['user_password'], $user->user_password)) {
            // Authentication failed, redirect back with an error message
            return redirect()->back()->with('error', 'Invalid username or password');
        }

        // Authentication successful, log the user in
        auth()->login($user);

        // Redirect to the desired location after login
        return view('dashboard'); // Change 'dashboard' to your desired route
    }

    public function Index(){
         $fiscalYears = DB::table('fyear')
        ->select(
            DB::raw("DATE_FORMAT(date_from, '%d-%m-%Y') as date_from"),
            DB::raw("DATE_FORMAT(date_to, '%d-%m-%Y') as date_to"),
            'id'
        )
        ->where('status', '0')
        ->orderByDesc('id')
        ->get();

         return view('welcome',compact('fiscalYears')); // Change 'dashboard' to your desired route
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
   
}
