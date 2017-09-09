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
    //API Method to return all tickets that exist.
    public function index()
    {
        return CustomerQuery::all();
    }

    //API Method to return a customer, and all of their submitted tickets that exist.
    public function filter($customer_id)
    {
        Log::info('ADMIN - Search Request made for ID: '.$customer_id);
        $tickets = CustomerQuery::all()->where('customer_id', $customer_id);
        $customer = Customer::all()->where('id', $customer_id);
        return response()->json([$customer, $tickets], 200);
    }

    //API Method to display a specific ticket
    public function show($id) {
        $ticket = CustomerQuery::find($id);
        $comments = Comment::all()->where('conversation_id', $id);

        return response()->json([$ticket, $comments], 200);
    }

    //API Method to update a specific ticket's information
    public function update(UpdateQueryRequest $request, $id)
    {
        $allRequest = $request->all();

        $ticket = CustomerQuery::findOrFail($id);
        $ticket->update($allRequest);

        $comments = Comment::all()->where('conversation_id', $id);

        return response()->json([$ticket, $comments], 200);
    }
}
