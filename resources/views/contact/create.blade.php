@extends('layouts.app')

@section('title','Contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form action="{{ route('contact.create')}}" method="post">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name='name' placeholder="Enter email">
                @if($errors->any())
                <div class="alert alert-danger">
                   {{$errors->first('name')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @if($errors->any())
                <div class="alert alert-danger">
                   {{$errors->first('email')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="message" rows="5" class="form-control"></textarea>
                @if($errors->any())
                <div class="alert alert-danger">
                   {{$errors->first('message')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- @if($errors->any())
        @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
                @endforeach
            @endif -->
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


@endsection

