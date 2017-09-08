<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Comment;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Requests\CreateQueryRequest;
use App\Http\Requests\UpdateQueryRequest;
use App\Http\Requests\FilterRequest;
use App\CustomerQuery;

class AdminQueryController extends Controller
{
    public function index()
    {
        return CustomerQuery::all();
    }

    //Need to implement correct 'Fail' search.
    public function filter(FilterRequest $request)
    {
        $allRequest = $request->all();
        Log::info('ADMIN - Search Request made for: '.$allRequest['emailText']);
        $customer = Customer::all()->where('email', $allRequest['emailText'])->first();
        if(is_null($customer))
        {
            Log::info('ADMIN - Search Request Failed: No customer found.');
            $tickets = CustomerQuery::all();
            return redirect('pages/admin/adminRequestService/')->with('fail', 'User does not exist')->with('tickets', $tickets);
        }
        return CustomerQuery::all()->where('customer_id', $customer->id);
    }

    public function show($id) {
        $ticket = CustomerQuery::find($id);
        $comments = Comment::all()->where('conversation_id', $id);

        return response()->json([$ticket, $comments], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return $ticket and $comments
     */
    public function update(UpdateQueryRequest $request, $id)
    {
        $allRequest = $request->all();

        $ticket = CustomerQuery::findOrFail($id);
        $ticket->update($allRequest);

        $comments = Comment::all()->where('conversation_id', $id);

        return response()->json([$ticket, $comments], 200);
    }
}
