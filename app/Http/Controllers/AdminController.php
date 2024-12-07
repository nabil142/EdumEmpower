<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admins = Admin::orderByDesc('id')->get();

        return view('superadmin.admins.index', [
            'admins' => $admins
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('superadmin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();
        
        if (!$user) {
            return back()->withErrors([
                'email' => 'Data tidak ditemukan'
            ]);
        }
        
        if($user->hasRole('admin')){
            return back()->withErrors([
                'email' => 'Email tersebut telah menjadi mentor'
            ]);            
        }

        DB::transaction(function () use ($user, $validated) {
            
            $validated['user_id'] = $user->id;
            $validated['is_active'] = true;

            Admin::create($validated);

            if ($user->hasRole('student')) {
                $user->removeRole('student');
            }
            
            $user->assignRole('admin');

        });
        return redirect()->route('superadmin.admins.index'); // Redirect ke route yang benar


    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        try {
            $admin->delete();

            $user = \App\Models\User::find($admin->user_id);
            $user->removeRole('admin');
            $user->assignRole('student');

            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error!' - $e->getMessage()],
            ]);
            throw $error;
        }
    }
}
