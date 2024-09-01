<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class RegisterTenantController extends Controller
{
    public function register()
    {
        return view('auth.register-tenant');
    }

    public function store(Request $request)
    {
        $tenant = Tenant::create($request->all());
        $tenant->createDomain($request->domain . '.simplefood.test');

        dd($tenant);
    }
}
