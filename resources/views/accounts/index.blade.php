@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{ title_case($user->username) }}</h2>
                    </div>
                    <div class="panel-body">
                        @if ($user->profile->avatar_image)
                            <img src="{{$user->profile->smallAvatar}}" class="img-responsive">
                        @else
                            <img src="http://placehold.it/350x350" class="img-responsive">
                        @endif

                        @if ($user->profile->age_visible && $user->profile->birth_date)
                        {{ $user->profile->age }}
                        @endif

                        @if ($user->profile->country_id)
                        {{ $user->profile->country->name }}
                        @endif

                        @if (Auth::user())
                            @if ($user->id == Auth::user()->id)
                            <a href="{{ route('account.edit') }}" class="btn btn-primary">
                                Edit
                            </a>
                            @endif
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
                        <p>{{ $user->profile->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
