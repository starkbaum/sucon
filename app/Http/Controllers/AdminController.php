<?php

namespace App\Http\Controllers;

use App\Data;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class AdminController extends Controller
{
    public function index() {

        return view('admin.index');
    }

    public function userManagement()
    {
        $users = User::all();

        return view('admin.management.userManagement', compact('users'));
    }

    public function fileAcceptance()
    {
        $dataForAcceptance = Data::notAccepted()->get();

        return view('admin.management.fileAcceptance', compact('dataForAcceptance'));
    }


    public function changeUserAdminRole($id) {

        $user = User::findOrFail($id);

        $user->is_admin ? $user->is_admin = false : $user->is_admin = true;

        $user->save();

        $users = User::all();

        return Redirect::to('admin/users')->withInput([$users]);

    }

}
