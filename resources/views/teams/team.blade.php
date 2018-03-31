@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>{{ $team->name }}</h3></div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>

                        <h3>Send invite</h3>
                        <form class="" method="POST" action="/teams/{{ $team->id }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="label">Persoon</label>
                                <input class="form-control" placeholder="Name" name="name" required/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="{{ route('teams.index') }}" class="btn btn-primary">Return</a>
            </div>
        </div>
    </div>
@endsection
