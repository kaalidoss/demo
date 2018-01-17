<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Classes\Sample;
use App\Company;
use App\Models;
use Illuminate\Support\Facades\Redis;

class SearchUserController extends Controller
{
    public function __construct(User $user)
    {
        return $this->user=$user;
    }

    public function userList(Request $request)
    {

        Redis::set('name', 'Taylor');

        $values = Redis::lrange('names', 5, 10);
      dd($values);
        return $values;

        if ($request->has('search')) {
            $users = User::search($request->search)
                ->paginate(6);
            if (count($users)>0) {
                return $users;
            }
            return "No matching records Found";
        } else {
            $users = User::paginate(6);
        }
        return view('user-search', compact('users'));
    }

    public function getComapanyModels(Request $request)
    {
        if ($request->has('search')) {
            $companies=Company::with('getCompanyModels')
            ->where('company_name', 'LIKE', '%'.$request->search.'%')
                ->orderBy('company_name', 'asc')->paginate(6);
            if (count($companies)>0) {
                return $companies;
            }
            return "No matching records Found";
        } else {
            return Company::with('getCompanyModels')->get();
        }
    }
}
