<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CustomerQuery;

class CustomerQueryController extends Controller
{
    //
    public function create()
    {
        $query = new CustomerQuery;
        return view('requestService.create', ['query' => $query ]);
    }

    public function show()
    {
        $tickets = CustomerQuery::all();
        return view('requestService.show')->with('tickets', $tickets);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'serviceArea' => 'required',
            'workArea' => 'required',
            'problemDescription' => 'required',
        ]);

        CustomerQuery::create($request->all());
        return redirect()->route('requestService.create') ->with('success','Service requested
            successfully. Our team will be in touch within 72 hours.');
    }
}