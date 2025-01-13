<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Enrollment;
use App\Models\Payment;







class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $payments = Payment::all();
        return view('payments.index')->with('payments', $payments);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        $enrollments = Enrollment::pluck('enroll_no','id' );
        return view('payments.create', compact('enrollments'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message','Payment done');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {

        $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):RedirectResponse

    {
    

        $payments = Payment::find($id);
        
        $enrollments = Enrollment::pluck('enroll_no','id' );
       

        return view('payments.edit', compact('payments','enrollments'));

        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $payments = Payment::find($id);
        $input = $request::find($id);
        Payment::update($input);
        return redirect('payments')->with('flash_message', 'Payment add');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):redirectresponse
    {
        $enrollment = destroy(id);
        return redirect('payments')->with('flash_message', 'deleted');
;        //
    }
}
