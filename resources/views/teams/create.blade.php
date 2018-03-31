@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Create a new team</h3>
                <form class="" method="POST" action="{{ route('teams.create') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="label">Naam</label>
                        <input class="form-control" placeholder="Naam" name="name" required/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                    @if(count($errors))
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
