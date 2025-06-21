<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $postCount = Auth::user()->posts()->count();

        $latestPosts = Auth::user()->posts()->latest()->limit(5)->get();

        return view('dashboard', [
            'postCount' => $postCount,
            'latestPosts' => $latestPosts
        ]);
    }
}
