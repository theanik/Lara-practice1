@extends('layouts.app')

@section('title')
    {{$customerDetails->name}}
@endsection

@section('content')

    <h2>{{$customerDetails->name}}</h2>
    <p><a href="{{$customerDetails->id}}/edit">Edit</a></p>
    <form action="{{$customerDetails->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">Delete</button>
    </form>
    <br>
    <strong>Name :</strong>{{$customerDetails->name}}<br>
    <strong>Email :</strong>{{$customerDetails->email}}<br>
    <strong>Phone :</strong>{{$customerDetails->phone}}<br>
    <strong>Company :</strong>{{$customerDetails->company->name}}<br>
@endsection