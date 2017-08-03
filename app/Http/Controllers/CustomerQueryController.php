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

    public function store(Request $request)
    {
        $this->validate($request, [
            'serviceArea' => 'required',
            'workArea' => 'required',
            'problemDescription' => 'required',
        ]);

        CustomerQuery::create($request->all());
        return redirect()->route('requestService.create') ->with('success','Service requested
            successfully');
    }
}