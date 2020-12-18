@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nuevo agente</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('agents') }}" class="btn btn-sm btn-default">
                        Cancelar y volver
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('includes.alerts')

            {!! Form::open(['route' => 'agents.store', 'files' => true]) !!}

            @include('admin.agents.partials.form')

            {!! Form::close() !!}
                <div id="map_canvas" style="height: 350px" >

                </div>

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
                    {{--Crear agente--}}
                {{--</div>--}}

                {{--<div class="panel-body">--}}
                    {{--{!! Form::open(['route' => 'agents.store', 'files' => true]) !!}--}}
                        {{----}}
                        {{--@include('admin.agents.partials.form')--}}

                    {{--{!! Form::close() !!}--}}
                {{--</div>--}}
                {{--<div id="map_canvas" style="height: 350px" >--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
