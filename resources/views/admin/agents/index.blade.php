@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Agentes</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('agents.create') }}" class="btn btn-sm btn-success">
                        Nuevo agente
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('includes.alerts')
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dominio</th>
                    {{--<th scope="col">DNI</th>--}}
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($agents as $key => $agent)
                    <tr>
                        <th scope="row">
                            {{ ++$key }}
                        </th>
                        <th>
                            {{ $agent->name }}
                        </th>
                        <td>
                            {{ $agent->domain }}
                        </td>
                        <td>
                            {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'DELETE']) !!}
                                {{--@csrf--}}
                                {{--@method('DELETE')--}}

                                <a href="{{ url('/agents/'.$agent->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>

                                <a href="{{ route('agents.show', $agent->id) }}" class="btn btn-sm btn-info">Ver</a>
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            <button type="button" class="btn btn-sm btn-default" id="botonOn" onclick="FbotonOn()"> Público </button>
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-body">
            {{--<p><strong>Agentes registrados: <span style="color: red; font-size: 16px"></span></strong></p>--}}
           <i>agentes: </i>{{$agents->count()}} {{ $agents->render() }}
        </div>
    </div>
@endsection

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                    {{--Lista de agentes--}}
                    {{--<a href="{{ route('agents.create') }}" class="pull-right btn btn-sm btn-primary">--}}
                        {{--Crear--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="panel-body">--}}

                    {{--<table class="table table-striped table-hover">--}}
                        {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th width="10px">ID</th>--}}
                                {{--<th>Nombre</th>--}}
                                {{--<th colspan="3">&nbsp;</th>--}}
                            {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                            {{--@foreach($agents as $key => $agent)--}}
                            {{--<tr>--}}
                                {{--<td>{{++$key}}</td>--}}
                                {{--<td>{{ $agent->id }}</td>--}}
                                {{--<td>{{ $agent->name }}</td>--}}
                                {{--<td width="10px">--}}
                                    {{--<a href="{{ route('agents.show', $agent->id) }}" class="btn btn-sm btn-default">Ver</a>--}}
                                {{--</td>--}}
                                {{--<td width="10px">--}}
                                    {{--<a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-sm btn-default">Editar</a>--}}
                                {{--</td>--}}
                                {{--<td width="10px">--}}
                                    {{--{!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'DELETE']) !!}--}}
                                        {{--<button class="btn btn-sm btn-danger" onclick="ConfirmDelete()">--}}
                                            {{--Eliminar--}}
                                        {{--</button>                           --}}
                                    {{--{!! Form::close() !!}--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                        {{--</tbody>   --}}
                    {{--</table>--}}
                    {{--<p><strong>Agentes registrados: <span style="color: red; font-size: 16px">{{$agents->count()}}</span></strong></p>--}}

                    {{--{{ $agents->render() }}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--@endsection--}}
