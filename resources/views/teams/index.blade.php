@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <button class="btn btn-primary">Create new team</button>
                        <p>You are logged in!</p>
                    </div>
                </div>
                @if (count($teams) > 0)
                    <ul>
                        @foreach($teams as $team)
                            <li>{{ $team->name  }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No teams</p>
                @endif
            </div>
        </div>
    </div>
@endsection
