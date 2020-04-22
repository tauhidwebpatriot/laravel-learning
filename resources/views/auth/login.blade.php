@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'login']) !!}
                        <div class="form-group row">
                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                              

                                {!! Form::email('email', null, ['class' => 'form-control','required' => true],['value' => old('email')]) !!}

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="display: block">
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {!! Form::checkbox('remember', null,['class' => 'form-check-input'],['id'=>'remember']) !!}

                                    {!! Form::label('remember', 'Remember Me', ['class' => 'form-check-label','for' =>'remember']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                {!! Form::submit('Login',['class' => 'btn btn-primary']) !!}

                                

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
