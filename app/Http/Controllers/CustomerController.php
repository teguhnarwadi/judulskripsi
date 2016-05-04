<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
    public function index() {

    	// $allCustomer = Customer::all();	
    	$allCustomer = Customer::with('contact')->get();
    	// dd($allCustomer);

    	return view('customers.customer', compact('allCustomer'));
    }
}
