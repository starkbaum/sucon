<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\PersonsRequest;
use App\Person;
use Redirect;

class PersonsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::lists('name', 'id')->all();

        return view('persons.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PersonsRequest $request)
    {
        $person = Person::create($request->all());

        $customer = Customer::findOrFail($person->customer_id);

        $snippets = $customer->snippets;
        $persons = Person::where('customerId', $customer->id);

        return Redirect::action('CustomersController@show', [$customer->slug])->with([$snippets, $persons]);

        //return view('customers.show', compact('customer', 'snippets', 'persons'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $customer = Customer::findOrFail($person->customer_id);
        $person->delete();

        return Redirect::action('CustomersController@show', [$customer->slug]);
    }
}
