<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('superadmin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        

        DB::transaction(function () use ($request) {

            $validated = $request->validated();
            // Proses upload icon
            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
            } else {
                $iconPath = 'images/icon-default.png'; // Path default icon
            }

            // Tambahkan slug ke dalam array validated
            $validated['slug'] = Str::slug($validated['name']);
            $validated['icon'] = $iconPath; // Tambahkan path icon ke validated data

            // Simpan data ke database
            Category::create($validated);
        });

        return redirect()->route('superadmin.categories.index'); // Redirect ke route yang benar
            
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('superadmin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        DB::transaction(function () use ($request, $category) {

            $validated = $request->validated();
            // Proses upload icon
            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath; // Tambahkan path icon ke validated data

            } 

            // Tambahkan slug ke dalam array validated
            $validated['slug'] = Str::slug($validated['name']);

            // Simpan data ke database
            $category->update($validated);
        });

        return redirect()->route('superadmin.categories.index'); // Redirect ke route yang benar
            
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        DB::beginTransaction();
        
        try{
            $category->delete();
            DB::commit();

            return redirect()->route('superadmin.categories.index');
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('superadmin.categories.index')->with('error', 'terjadinya sebuah error');

        }
    }
}
