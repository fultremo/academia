<?php
/**
 * Created by PhpStorm.
 * User: fulgen
 * Date: 14/04/18
 * Time: 19:49
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}