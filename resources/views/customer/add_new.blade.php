@extends('layouts.app')
@section('title','Add new Customer')

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
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>Customer</h1>
        <form action="/customer" method="post">
        <input class="form-control mt-3" type="text" name="name" value="{{old('name') ?? $customerDetails->name}}" placeholder="Name">
        <input class="form-control mt-3" type="text" name="email" value="{{ old('email') ?? $customerDetails->email}}" placeholder="E-mail">
        <div class="form-group mt-3">
            <select name="status" id="" class="form-control">
                <option value="" disable>Select status</option>
                <option value="1" >Active</option>
                <option value="0" >Unactive</option>
            </select>
        </div>
        <div class="form-group">
            <select name="company_id" class="form-control">
                @foreach($companys as $company)
                    <option value="{{$company->id}}" {{ $company->id == $customerDetails->company_id ? 'selected' : ' '}} >{{$company->name}}</option>
                @endforeach
            </select>
        </div>
            <input class="btn btn-success mt-4" type="submit" value="Add List">
            <!-- <div class="alert alert-danger">{{$errors->first('name')}}</div> -->
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er)
                        {{$er}}
                    @endforeach
                </div>
            @endif
            
        </form>

           
  
        
    
    </div>

    <div class="col-sm-3"></div>
</div>


@endsection
  
   