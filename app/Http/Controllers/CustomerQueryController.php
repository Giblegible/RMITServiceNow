<?php
namespace App\Http\Controllers;
use App\Customer;
use App\Comments;
use Illuminate\Http\Request;
use App\Http\Requests\CreateQueryRequest;
use App\Http\Requests\UpdateQueryRequest;
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

    public function store(CreateQueryRequest $request)
    {
        $allRequest = $request->all();

        //Check the email to find if user has already submitted query
        $email = $allRequest['email'];
        $customerExists = Customer::where('email', $email)->first();

        $customer = null;

        if(!$customerExists)
        {
            $customer = new Customer();
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
        $query->hardwareType = $allRequest['hardwareType'];
        $query->softwareType = $allRequest['softwareType'];
        $query->problemStatus = "Pending";
        $query->problemSeverity = "Not Specified";
        $query->customer_id = $customer->id;
        $query->save();

        return redirect('pages/requestService/create')->with('success','Service requested
            successfully. Our team will be in touch within 72 hours.');
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
        return view('pages.requestService.show', compact('ticket', 'comments'));
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
        return view('pages.requestService.edit')->with('ticket', $ticket)->with('comments', $comments);
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
        $ticket->serviceArea = $allRequest['serviceArea'];
        $ticket->workArea = $allRequest['workArea'];
        $ticket->problemDescription = $allRequest['problemDescription'];
        $ticket->hardwareType = $allRequest['hardwareType'];
        $ticket->softwareType = $allRequest['softwareType'];
        $ticket->save();

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
            $comments->customer_id = $ticket->customer_id;
            $comments->save();
        }
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