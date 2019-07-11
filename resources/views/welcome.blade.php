@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklists</h1>
            {!! link_to_route('signup.get','Sign up',['class'=>'btn btn-primary btn-lg']) !!}
        </div>
    </div>
@endsection