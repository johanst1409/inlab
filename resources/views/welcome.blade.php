@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                @guest
                <h1>InLab</h1>
                <p>InLab is a web application where indie developers can find people to collaberate with on all different kinds of projects.</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Register</a>
                    <a class="btn btn-default btn-lg" href="{{ route('login') }}">Login</a>
                </p>
                @else
                <h1>Welcome to InLab, {{ title_case(Auth::user()->username) }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                @endguest
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Title of the page</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
@endsection
