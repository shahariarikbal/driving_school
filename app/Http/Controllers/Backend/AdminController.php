<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
class AdminController extends Controller
{
    public function adminLoginForm()
    {
        return view('backend.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if (!$admin){
            return redirect()->back()->withError('Sorry your email not register our record.');
        }
        if ($admin){
            if (password_verify($request->password, $admin->password)){
                Session::put('admin_id', $admin->id);
                Session::put('admin_name', $admin->name);
                Session::put('admin', $admin);
                return redirect('/admin/dashboard');
            }else{
                return redirect()->back()->with('error', 'Password dose not match');
            }
        }else{
            return redirect()->back()->with('error', 'E-mail dose not match');
        }
    }

    public function adminDashboard()
    {
        return view('backend.dashboard');
    }

    public function userList()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('backend.user.index', compact('users'));
    }

    public function active($id)
    {
        $user = User::find($id);
        if(!$user) {return redirect()->back()->with('error', 'Something went wrong.');}
        $user->is_active = $user->is_active == 1 ? 0 : 1;
        $user->save();
        return redirect()->back()->with('success', 'User package has been updated');
    }

    public function paid($id)
    {
        $user = User::find($id);
        if(!$user) {return redirect()->back()->with('error', 'Something went wrong.');}
        $user->is_paid = $user->is_paid == 1 ? 0 : 1;
        $user->save();

        return redirect()->back()->with('success', 'User payment has been updated');
    }

    public function userDelete($id)
    {
        $userDelete = User::find($id);
        if(!$userDelete) {return redirect()->back()->with('error', 'Something went wrong.');}
        $userDelete->delete();
        return redirect()->back()->with('success', 'User has been deleted');
    }

    public function logout(Request $request)
    {
        Session()->flush();
        return redirect('admin/login');
    }
}
