@extends('layouts.app')

@section('title',''.$customerDetails->name)
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
        <h1>Edit details for {{$customerDetails->name}}</h1>
        <!-- <form action="/customers/{{$customerDetails->id}}" method="post"> -->
        <form action="{{ route('customers.update',['customerSingleDetails'=>$customerDetails]) }}" method="post">
            @method('PATCH')
            @include('customer.fform')
            <input class="btn btn-primary mt-4" type="submit" value="Update">
            
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
  
   