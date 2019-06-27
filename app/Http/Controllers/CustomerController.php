<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Events\NewCustomerHasRegisterEvent;
class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
    public function index(){
       // $customer = new Customer();
       //activeCustomers = Customer::where('active' 1)->get();

       //that's using scope
       $activeCustomers = Customer::Active()->get();
       $unactiveCustomers = Customer::Unactive()->get();

        $customer = Customer::all();
        //dd($customer);
        $companys = Company::all();
        return view('customer.index',[
            'activeCustomer' => $activeCustomers,
            'unactiveCustomer' => $unactiveCustomers,
            'companys' => $companys,
            'customers' => $customer
        ]);

        //return view('customer.index',compact('activeCustomers','unactiveCustomers','companys'));
    }

    public function add_new(){
        $companys = Company::all();
        $customerDetails = new Customer();
        return view('customer.add_new',[
            'companys' => $companys,
            'customerDetails' => $customerDetails
        ]);
    }

    public function store(Request $req){
        // $vdata = $req->validate([
        //     'name'=>'required|min:3',
        //     'email' => 'required|regex:/^.+@.+$/i',
        //     'status'=>'required',
        //     'company_id' => 'required'
        // ]);

        $customer =  Customer::create($this->validateData());
        event(new NewCustomerHasRegisterEvent($customer));
        // $c = new Customer();
        // $c->name = request('name');
        // $c->email = $req->email;
        // $c->status = $req->status;
        // $c->save();
       

        

        
        return redirect('/customers');
       //return 'okk';
    }
    public function sho(Customer $customerSingleDetails){

        //traditional wayy
        // $customerDetails = Customer::findOrFail($customerSingleDetails);

        // return view('customer.show',[
        //     'customerDetails' => $customerDetails
        // ]);

        //Route model binding
        return view('customer.show', [
            'customerDetails'=>$customerSingleDetails
        ]);
    }

    public function edit(Customer $customerSingleDetails){
       
        $companys = Company::all();
        return view('customer.edit',[
            'customerDetails' => $customerSingleDetails,
            'companys' => $companys
        ]);
    }
    public function update(Customer $customerSingleDetails){
        // $vdata = request()->validate([
        //     'name'=>'required|min:3',
        //     'email' => 'required|regex:/^.+@.+$/i',
        //     'status'=>'required',
        //     'company_id' => 'required'
        // ]);

        $customerSingleDetails->update($this->validateData());

        return redirect('customers/'.$customerSingleDetails->id);
    }
    public function delete(Customer $customerSingleDetails){
        $customerSingleDetails->delete();

        return redirect('customers/');
    }

    private function validateData(){
        return request()->validate([
            'name'=>'required|min:3',
            'email' => 'required|regex:/^.+@.+$/i',
            'status'=>'required',
            'company_id' => 'required'
        ]);
    }
}
