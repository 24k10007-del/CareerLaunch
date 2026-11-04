<?php

use App\Models\User;
use App\Models\Cv;

class AdminUserController extends Controller
{
    // list semua user
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.users.index', compact('users'));
    }

    // lihat semua CV milik user
    public function cvList($id)
    {
        $user = User::findOrFail($id);
        $cvs  = Cv::where('user_id', $id)->get();

        return view('admin.users.cv-list', compact('user', 'cvs'));
    }

    // lihat detail CV
    public function viewCv($id)
    {
        $cv = Cv::findOrFail($id);
        return view('admin.users.cv-view', compact('cv'));
    }
}
