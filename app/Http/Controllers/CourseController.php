<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Course;
use Illuminate\View\View;


class CourseController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    Public function index():View
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('courses.create');
       
    }
    


    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Course is added' );


    }



    public function show(string $id):View
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);

    }



    public function edit(string $id):View
    {
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    public function update(Request $request, string $id):RedirectResponse

    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'course id updated');

    }




    public function destroy(string $id):RedirectResponse
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'course was deleted');
    }

}