<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

/**
 *
 */
class AdminController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::query()->select(['name', 'email', 'role'])
            ->when(\request('search'), function ($query){
                return $query->where('name', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('email', 'LIKE', '%' . \request('search') . '%');
            })->orderBy('created_at')->paginate(100);

        return view('components.admin', compact('users'));
    }
}
