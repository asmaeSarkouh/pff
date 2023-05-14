<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index(){
        $users=User::with('espaceVehicules')->get();
        return view('pages.admin.users.index',compact('users'));
    }
    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }
}
