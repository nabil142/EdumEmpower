<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class CourseController extends Controller
{
    /**
     * Display a listing of the  resource.
     */
    public function index()
    {
        $user = Auth::user();
        $query = Course::with(['category', 'admin', 'users'])->orderByDesc('id');

        // if ($user->hasRole('admin')) {
        //     $query->whereHas('admin', function ($query) use ($user) {
        //         $query->where('user_id', $user->id);
        //     });
        // }

        $courses = $query->paginate(10);

        return view('superadmin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('superadmin.courses.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $admin = Admin::where('user_id', Auth::user()->id)->first();

        if(!$admin) {
            return redirect()->route('superadmin.courses.index')->withErrors('Unauthorized or invalid mentor');
        }

        DB::transaction(function () use ($request, $admin) {

            $validated = $request->validated();
            // Proses upload icon
            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath; // Tambahkan path icon ke validated data
            }

            $validated['slug'] = Str::slug($validated['name']);
            $validated['admin_id'] = $admin->id; // Tambahkan path icon ke validated data

            // Simpan data ke database
            $course = Course::create($validated);

            if(!empty($validated['course_keypoints'])) {
                foreach($validated['course_keypoints'] as $keypointText){
                    $course->course_keypoints()->create([
                        'name' => $keypointText,
                    ]);
                }
            }
        });
        return redirect()->route('superadmin.courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
        return view('superadmin.courses.show', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
        $categories = Category::all();
        return view('superadmin.courses.edit', compact('course', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
        DB::transaction(function () use ($request, $course) {

            $validated = $request->validated();
            // Proses upload icon
            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath; // Tambahkan path icon ke validated data
            }

            $validated['slug'] = Str::slug($validated['name']);

            // Simpan data ke database
            $course->update($validated);

            if(!empty($validated['course_keypoints'])) {
                $course->course_keypoints()->delete();
                foreach($validated['course_keypoints'] as $keypointText){
                    $course->course_keypoints()->create([
                        'name' => $keypointText,
                    ]);
                }
            }
        });
        return redirect()->route('superadmin.courses.show', $course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        DB::beginTransaction();
        
        try{
            $course->delete();
            DB::commit();

            return redirect()->route('superadmin.courses.index');
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('superadmin.courses.index')->with('error', 'terjadinya sebuah error');

        }
    }
}
