@extends('layouts.app')

@section('content')

    <h1>Create New User</h1>
    <hr/>

    {!! Form::open(['url' => '/admin/users', 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
        {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
        {!! Form::label('mobile', 'Mobile: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('mobile', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('dob') ? 'has-error' : ''}}">
        {!! Form::label('dob', 'Date of Birth: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::date('dob', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('dob', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
        {!! Form::label('address', 'Address: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
        {!! Form::label('city', 'City: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
        {!! Form::label('state', 'State: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('state', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('postalcode') ? 'has-error' : ''}}">
        {!! Form::label('postalcode', 'Postal Code: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('postalcode', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('postalcode', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
        {!! Form::label('role', 'Role: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            <select class="roles form-control" id="roles" name="roles[]" multiple="multiple">
                @foreach($roles as $role)
                <option value="{{ $role->name }}">{{ $role->label }}</option>
                @endforeach()
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
