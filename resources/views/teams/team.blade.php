@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $team->name }}</div>
                    <div class="panel-body">

                    </div>
                </div>
                <a href="/teams" class="btn btn-primary">Return</a>
            </div>
        </div>
    </div>
@endsection
