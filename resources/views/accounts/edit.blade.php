@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Profiel aanpassen</div>
                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('account.put') }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                                <label for="birth_date" class="col-md-4 control-label">Date of birth</label>

                                <div class="col-md-6">
                                    <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ old('birth)date') }}">

                                    @if($errors->has('birth_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birth_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                <label for="avatar" class="col-md-4 control-label">Avatar</label>

                                <div class="col-md-6">
                                    <input id="avatar" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}">

                                    @if($errors->has('avatar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('avatar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description">
                                        {{ old('description') }}
                                    </textarea>

                                    @if($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                                <label for="country_id" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">
                                    <select id="country_id" class="form-control" name="country_id">
                                        <option value="">I don't want to say</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has('country_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
