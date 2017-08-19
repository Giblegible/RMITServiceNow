<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Comments;
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
        $tickets = CustomerQuery::all();
        return view('pages.admin.adminRequestService.index', compact('tickets'));
    }

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
        $tickets = CustomerQuery::all()->where('customer_id', $customer->id);
        Log::info('ADMIN - Search Request Successful: Returning '.$tickets->count().' cases!');
        return view('pages/admin/adminRequestService/index')->with('tickets', $tickets);
    }

    public function show($id) {
        $ticket = CustomerQuery::find($id);
        //Test DB to check if comments exist in case.
        $comments = Comments::all()->where('ticket_id', $ticket->id)->first();

        if(is_null($comments))
        {
            //Comments do not exist for case.
            $comments = null;
        }
        else{
            //A comment does exist for case, create query for all comments.
            $comments = Comments::all()->where('ticket_id', $ticket->id);
        }
        return view('pages.admin.adminRequestService.show', compact('ticket', 'comments'));
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
        $comments = Comments::all()->where('ticket_id', $ticket->id);
        return view('pages.admin.adminRequestService.edit')->with('ticket', $ticket)->with('comments', $comments);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, UpdateQueryRequest $request)
    {
        $allRequest = $request->all();

        $ticket = CustomerQuery::find($id);
        $ticket->problemStatus = $allRequest['problemStatus'];
        $ticket->problemSeverity = $allRequest['problemSeverity'];
        $ticket->save();

        $checkIfResolved = $ticket->problemStatus;
        if($checkIfResolved === "Resolved")
        {
            $comments = new Comments();
            $comments->comment = "Hi ".$ticket->customer->name.", our team has marked your case as resolved. 
                Please review the case and close if you feel we have resolved your query sufficiently.";
            $comments->ticket_id = $id;
            $comments->adminComment = 'RMITServiceNow';
            $comments->save();
            Log::info('ADMIN - Update Request Successful: Admin has closed case, ID: '.$ticket->id);
        }
        $checkIfComment = $allRequest['comments'];
        /**
         * Check if the comment has been input.
         * If yes, add comment to DB and save.
         * If no, disregard creating comment.
         */
        if(!is_null($checkIfComment)) {
            $comments = new Comments();
            $comments->comment = $checkIfComment;
            $comments->ticket_id = $id;
            $comments->adminComment = 'RMITServiceNow';
            $comments->save();
            Log::info('ADMIN - Update Request Successful: Admin has added comments to case, ID: '.$ticket->id);
        }
        Log::info('ADMIN - Update Request Successful: Admin has updated case, ID: '.$ticket->id);
        return redirect()->back()->with('success','Case has been updated successfully');
    }
}
