<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use Illuminate\View\View;


class EnrollmentController extends Controller
{
    public function index():View
    {

    $enrollments = Enrollment::all();

    return view('enrollments.index')->with('enrollments', $enrollments);
    //
    }





    public function create():view
    {
        return view('enrollments.create');
    }




    public function store(Request $request):RedirectResponse

    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollments has sbeen done');
    
    }



    public function edit(string $id):view

    {

        $enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);

        

        //
    }


    
    public function show(string $id):view

    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);

        //
    }






    public function update(Request $request, string $id):RedirectResponse
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment update');
        
        //
    }



    public function destroy(string $id):view

    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'enrollmet deleted');


        //
    }
















}
