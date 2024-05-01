<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB; No need as we are using model

class HomeController extends Controller
{
    public function index()
    {
        $categoresStatic = ['Category 1', 'Category 2'];

        // $allCategores = DB::table('categories')->get(); // without model

        $categores = Category::all();
        $posts = Post::when(request('category_id'), function ($query) {

            $query->where('category_id', request('category_id'));
        })
            ->latest()
            ->get();

        // return view('index', [
        //     'categores' => $allCategores,
        //     'categoresStatic' => $allCategoresStatic,
        // ]);

        // above method is correct
        // But when key is same for value then we can use compact
        return view('index', compact('categores', 'categoresStatic', 'posts'));
    }
}
