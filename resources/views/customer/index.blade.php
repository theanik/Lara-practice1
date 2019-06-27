@extends('layouts.app')

@section('title')
    Customer
@endsection
@section('content')


<style>
    .lavel{
        color:Green;
        padding-right:5px;
    }
    .green{
        color:green;
    }
</style>
<div class="container">
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>Customer</h1>
        <p><a href="customers/add_new">Create new Customer</a></p>
        <!-- <form action="customer" method="post">
            <input class="form-control mt-3" type="text" name="name" value="{{ old('name')}}" placeholder="Name">
            <input class="form-control mt-3" type="text" name="email" value="{{ old('email')}}" placeholder="E-mail">
            <div class="form-group mt-3">
                <select name="status" id="" class="form-control">
                    <option value="" disable>Select status</option>
                    <option value="1">Active</option>
                    <option value="0">Unactive</option>
                </select>
            </div>
            <div class="form-group">
                <select name="company_id" class="form-control">
                    @foreach($companys as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            <input class="btn btn-success mt-4" type="submit" value="Add List"> -->
            <!-- <div class="alert alert-danger">{{$errors->first('name')}}</div>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er)
                        {{$er}}
                    @endforeach
                </div>
            @endif
            @csrf
        </form> -->

            <hr>

        <ul>
        <h2 class="green">Active Customer</h2>
            @foreach($activeCustomer as $Acustomer)
                <li><span class="lavel">Name:</span>{{$Acustomer->name}} || 
                <span class="lavel">Email:</span>{{$Acustomer->email}} || <span class='green'>({{$Acustomer->company->name}})</span></li>
            @endforeach
        </ul>
        <hr>
        <ul>
        <h2 class="green">Unactive Customer</h2>
            @foreach($unactiveCustomer as $Ucustomer)
                <li><span class="lavel">Name:</span>{{$Ucustomer->name}} || <span class="lavel">Email:</span>{{$Ucustomer->email}} ||  
                <span class='green'>({{$Ucustomer->company->name}})</span></li>
            @endforeach
        </ul>


    <div class="row">
        <div class="col-md-12">
        @foreach($companys as $company)
            <h4>{{$company->name}}</h4>

            @foreach($company->customers as $customer)
                <li>{{$customer->name}}</li>
            @endforeach
        @endforeach
        
        </div>
    
    </div>

    <div class="col-sm-3"></div>
</div>

</div>

<div class="container">

<h1 class="mt-3 green">Cuatomer Table</h1>
  
@foreach($customers as $customer)
    <div class="row">
        <div class="col-md-3">
            {{$customer->id}}
        </div>
        <div class="col-md-3">
            <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
        </div>
        <div class="col-md-3">
            {{$customer->company->name}}
        </div>
        <div class="col-md-3">
            <!-- {{$customer->status ? 'Active' : 'Unactive'}} -->
            {{$customer->status}}
        </div>
    </div>
    @endforeach

</div>

@endsection
  
