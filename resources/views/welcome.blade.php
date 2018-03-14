@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1>InLab</h1>
                <p>InLab is a web application where indie developers can find people to collaberate with on all different kinds of projects.</p>
                <p>
                    <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                    <a class="btn btn-default" href="{{ route('login') }}">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
