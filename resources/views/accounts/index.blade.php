@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{ title_case(Auth::user()->username) }}</h2>
                    </div>
                    <div class="panel-body">
                        @if (Auth::user()->profile->avatar_image)
                            <img src="{{Auth::user()->profile->smallAvatar}}" class="img-responsive">
                        @else
                            <img src="http://placehold.it/350x350" class="img-responsive">
                        @endif

                        @if (Auth::user()->profile->age_visible && Auth::user()->profile->birth_date)
                        {{ Auth::user()->profile->age }}
                        @endif

                        @if (Auth::user()->profile->country_id)
                        {{ Auth::user()->profile->country->name }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Biography</h2>
                    </div>
                    <div class="panel-body">
                        <p>{{ Auth::user()->profile->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
