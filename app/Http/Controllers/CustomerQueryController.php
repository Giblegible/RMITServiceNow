<?php
namespace App\Http\Controllers;
use App\Customer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\QueryRequest;
use App\CustomerQuery;

class CustomerQueryController extends Controller
{
    public function index()
    {
        $tickets = CustomerQuery::all();
        return view('pages.requestService.index', compact('tickets'));
    }

    public function create()
    {
        $query = new CustomerQuery;
        return view('pages.requestService.create', ['query' => $query ]);
    }

    public function store(QueryRequest $request)
    {
        $allRequest = $request->all();

        //Check the email to find if user has already submitted query
        $email = $allRequest['email'];
        $customerExists = Customer::where('email', $email)->first();

        $customer = new Customer();

        if(!$customerExists)
        {
            $customer->name = $allRequest['name'];
            $customer->email = $email;
            $customer->phoneNum = $allRequest['phoneNum'];
            $customer->program = $allRequest['program'];
            $customer->save();
        }
        else {
            $customer = $customerExists;
        }

        $query = new CustomerQuery();
        $query->serviceArea = $allRequest['serviceArea'];
        $query->workArea = $allRequest['workArea'];
        $query->problemDescription = $allRequest['problemDescription'];
        $query->customer_id = $customer->id;
        $query->save();

        CustomerQuery::create($request->all());
        return redirect('pages/requestService/create')->with('success','Service requested
            successfully. Our team will be in touch within 72 hours.');
    }

    public function show($id) {
        $ticket = CustomerQuery::find($id);
        return view('pages.requestService.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $ticket = CustomerQuery::find($id);
        return view('pages.requestService.edit', compact ('ticket'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $ticketUpdate= $request->all();
        $ticket = CustomerQuery::findOrFail($id);
        $ticket->update($ticketUpdate);
        return redirect()->back()->with('success','Case has been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}