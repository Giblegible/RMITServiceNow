<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

    public function getUserQueries(Request $request)
    {
        $allRequest = $request->all();
        Log::info('Searched: '.$allRequest['findEmail']);
        $customer = Customer::all()->where('email', $allRequest['findEmail'])->first();
        Log::info('Searching: '.$customer);
        if(is_null($customer))
        {
            Log::info('No customer found');
            return redirect('pages/trackProgress/checkCredentials/')->with('fail', 'This account has not submitted a query.');
        }
        $tickets = CustomerQuery::all()->where('customer_id', $customer->id);
        return view('pages.trackProgress.userQueries', compact('tickets'));
    }
}