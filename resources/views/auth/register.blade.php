@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'register']) !!}

                        <div class="form-group row">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">

                                {!! Form::text('name', null, ['class' => 'form-control','required' => true],['value' => old('name')]) !!}

                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            

                            <div class="col-md-6">

                                {!! Form::email('email', null, ['class' => 'form-control','required' => true],['value' => old('email')]) !!}

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('gender', 'Gender', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6 ">

                                {!! Form::radio('gender', 'Male',false,['class' => ' form-check-input'],['id'=>'male']) !!}
                                {!! Form::label('male', 'Male',['for' =>'male']) !!}

                                {!! Form::radio('gender', 'Female',['class' => 'form-check-input'],['id'=>'Female']) !!}
                                {!! Form::label('Female', 'Female',['for' =>'Female']) !!}

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            {!! Form::label('hobby', 'Hobby', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            

                            <div class="col-md-6 form-check-inline">

                                {!! Form::checkbox('hobby[]', 'cricket',false,['id' => 'cricket'],['class' => 'form-check-input']) !!}

                                {!! Form::label('cricket', 'cricket', ['class' => 'form-check-label','for' =>'cricket']) !!}


                                {!! Form::checkbox('hobby[]', 'football',false,['id' => 'football'],['class' => 'form-check-input']) !!}

                                {!! Form::label('football', 'football', ['class' => 'form-check-label','for' =>'football']) !!}


                                {!! Form::checkbox('hobby[]', 'tennis',false,['id' => 'tennis'],['class' => 'form-check-input']) !!}

                                {!! Form::label('tennis', 'tennis', ['class' => 'form-check-label','for' =>'tennis']) !!}
                                

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('country', 'Country', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">

                                {!! Form::select('country', [null => 'Please Select Country', '1' => 'India', '2' => 'Us', '3' => 'Uk'], null, ['class' => 'form-control','required' => true]) !!}



                              

                                @error('image')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('image', 'Profile Picture', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                               {!! Form::file('image', ['class' => 'form-control',"accept" => "image/*"]) !!}

                                @error('image')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                               {!! Form::password('password', ['class' => 'form-control','required' => true]) !!}

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('cpassword', 'Confirm Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            

                            <div class="col-md-6">

                                {!! Form::password('password_confirmation', ['class' => 'form-control','required' => true],['id' => 'password-confirm'
                                ]) !!}
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                 {!! Form::submit('Register',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                     {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
