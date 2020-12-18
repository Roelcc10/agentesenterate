@extends('layouts.form')

@section('title', 'Registro')
@section('subtitle', 'Ingresa tus datos para registrarte.')

@section('content')
    <div class="container mt--8 pb-5">
        <!-- Table -->
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-lg-6 col-md-8">--}}
                {{--<div class="card bg-secondary shadow border-0">--}}
                    {{--<div class="card-body px-lg-5 py-lg-5">--}}
                        {{--@if ($errors->any())--}}
                            {{--<div class="alert alert-danger" role="alert">--}}
                                {{--{{ $errors->first() }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--<form role="form" method="POST" action="{{ route('register') }}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<div class="input-group input-group-alternative mb-3">--}}
                                    {{--<div class="input-group-prepend">--}}
                                        {{--<span class="input-group-text"><i class="ni ni-hat-3"></i></span>--}}
                                    {{--</div>--}}
                                    {{--<input class="form-control" placeholder="Nombre" type="text" name="name" value="{{ old('name') }}" required autofocus>--}}

                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<div class="input-group input-group-alternative mb-3">--}}
                                    {{--<div class="input-group-prepend">--}}
                                        {{--<span class="input-group-text"><i class="ni ni-email-83"></i></span>--}}
                                    {{--</div>--}}
                                    {{--<input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required>--}}
                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<div class="input-group input-group-alternative">--}}
                                    {{--<div class="input-group-prepend">--}}
                                        {{--<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>--}}
                                    {{--</div>--}}
                                    {{--<input class="form-control" placeholder="Contraseña" type="password" name="password" required>--}}
                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="input-group input-group-alternative">--}}
                                    {{--<div class="input-group-prepend">--}}
                                        {{--<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>--}}
                                    {{--</div>--}}
                                    {{--<input class="form-control" placeholder="Confirmar contraseña" id="password-confirm"  type="password" name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="text-center">--}}
                                {{--<button type="submit" class="btn btn-primary mt-4">Confirmar registro</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
