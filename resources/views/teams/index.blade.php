@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <a class="btn btn-primary" href="/teams/create">Create new team</a>
                        <p>You are logged in!</p>
                    </div>
                </div>
                @if (count($teams) > 0)
                    @foreach($teams as $team)
                    <div class="panel panel-default col-md-3">
                            <div class="panel-heading"><h4>{{ $team->name  }}</h4></div>
                            <div class="panel-body">
                                <a class="btn btn-primary" href="/teams/{{ $team->id }}">More information</a>
                            </div>
                    </div>
                    @endforeach
                @else
                    <p>No teams</p>
                @endif
            </div>
        </div>
    </div>
@endsection
