<?php

namespace App\Http\Controllers\Api;

#use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Orion;
use Orion\Http\Controllers\Controller;

class UserController extends Controller
{
    use DisableAuthorization, DisablePagination;
    protected $model = User::class;
}
