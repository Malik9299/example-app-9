<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Orion\Orion;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;

// use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    use DisableAuthorization, DisablePagination;
    protected $model = Post::class;

    // protected function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    // {
    //     $query = parent::buildIndexFetchQuery($request, $requestedRelations);

    //     $query;
    //     dd($query->toSql());


    //     return $query;
    // }
}
