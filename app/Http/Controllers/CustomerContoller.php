<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerContoller extends Controller
{
    //
    public function index()
    {   $url = '/customer';
        $customer = null;
        $formTitle = 'Customer Registration';
        $data = compact('url','formTitle','customer');
        return view('customer')->with($data);
    }
    public function edit($id)
    {
        $customer = Customers::find($id);
        if (is_null($customer)) {
            redirect('/customer/view');
        } else {
            $url = '/customer/update/'.$id;
            $formTitle = 'Update Customer';
            $data = compact('url', 'formTitle','customer');
            return view('customer')->with($data);
        }
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->city = $request['city'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->save();
        return redirect('customer/view');
    }
    public function update(Request $request,$id)
    {
        $customer = Customers :: find($id);
        $customer->name = $request['name'];
        $customer->city = $request['city'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        // $customer->password = md5($request['password']);
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->save();
        return redirect('customer/view');
    }
    public function view(Request $request)
    {
        $search = $request['searchField'] ?? "";
        if($search != "")
        {
            $customers = Customers:: where('name', 'LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get(); 
        }
        else
        {
            $customers = Customers::all();
        }
        $data = compact('customers','search');
        return View('customer-view')->with($data);
    }
    public function trash()
    {
        $customers = Customers::onlyTrashed()->get();
        $data = compact('customers');
        return View('customer-trash')->with($data);
    }
    public function delete($id)
    {
        $customer = Customers::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function forceDelete($id)
    {
        $customer = Customers::onlyTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect()->back();
    }
    public function restore($id)
    {
        $customer = Customers::onlyTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect()->back();
    }
}
