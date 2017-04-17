@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Setting / Edit #{{$setting->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('settings.update', $setting->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
	<label for="key-field">Key</label>
	<input class="form-control" type="text" name="key" id="key-field" value="{{ old('key', $setting->key ) }}" />
</div> <div class="form-group">
	<label for="value-field">Value</label>
	<input class="form-control" type="text" name="value" id="value-field" value="{{ old('value', $setting->value ) }}" />
</div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('settings.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection