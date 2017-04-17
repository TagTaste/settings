@extends('layout')
@section('header')
    <div class="page-header">
        <h1>Setting / Show #{{$setting->id}}</h1>
    </div>
@endsection

@section('content')
    <div class="well well-sm">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('settings.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('settings.edit', $setting->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

            <label>Key</label>
<p>
	{{ $setting->key }}
</p> <label>Value</label>
<p>
	{{ $setting->value }}
</p>

        </div>

    </div>
@endsection
