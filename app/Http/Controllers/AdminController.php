<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function login(Request $request){
        //return 'from login dashboard method';
        $email = $request->admin_email;
        //$password = md5($request->admin_password);
        $password = ($request->admin_password);
        $result = DB::table('admins')
            ->where('admin_email', $email)
            ->where('admin_password', $password)
            ->first();
        //print_r($result);

        if($result){
            //Session::put('admin_email', $result->admin_email);
            //return Redirect::to('/admin-dashboard');
            return redirect('/admin-dashboard');
            
        } else {
            Session::put('exception', 'Email or password invalid');
            //return Redirect::to('/admin');
            return redirect('/admin'); 
        }
    }

    public function showAdminDashboard(){
        return view('admin_dashboard_page');
    }

    public function getAdmin()
    {
        $result = DB::table('admins')
            ->where('admin_email', 'raj@gmail.com')
            ->get();
        print_r($result);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_signup_page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'admin_email'=>'required',
            'admin_password'=>'required'
        ]); 
        $aAdmin = $request->all();
        Admin::create($aAdmin);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
