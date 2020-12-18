@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Agente: <a href="{{ $agent->domain }}" target="_blank">{{ $agent->domain }}</a></h3>
                </div>
            </div>
        </div>
        <div class="card-body" >


             <div style="text-align: center;">
                 @if($agent->file)
                     <img src="{{ $agent->file }}" class="img-responsive" width="400px">
                 @endif
                 <br>
             </div>
         <div>
             <p><strong>Nombre</strong> {{ $agent->name }}</p>
             <p><strong>Slug</strong> {{ $agent->slug }}</p>
             <p><strong>Descripción</strong> {!! $agent->biography !!}</p>
             <p><strong>Dirección</strong> {{ $agent->address }}</p>
             <p><strong>País</strong> {{ $agent->country }}</p>
             <p><strong>Ciudad</strong> {{ $agent->city }}</p>
             <p><strong>Teléfono</strong> {{ $agent->phone }}</p>
             <p><strong>Dominio</strong> {{ $agent->domain }}</p>
             <p><strong>Email</strong> {{ $agent->email }}</p>
         </div>




            <a href="{{ url('/agents') }}" class="btn btn-default">
                Volver
            </a>
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
                    {{--Ver entrada--}}
                {{--</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if($agent->file)--}}
                        {{--<img src="{{ $agent->file }}" class="img-responsive">--}}
                    {{--@endif--}}
                        {{--<br>--}}
                    {{--<p><strong>Nombre</strong> {{ $agent->name }}</p>--}}
                    {{--<p><strong>Slug</strong> {{ $agent->slug }}</p>--}}
                    {{--<p><strong>Descripción</strong> {!! $agent->biography !!}</p>--}}
                        {{--<p><strong>Dirección</strong> {{ $agent->address }}</p>--}}
                        {{--<p><strong>País</strong> {{ $agent->country }}</p>--}}
                        {{--<p><strong>Ciudad</strong> {{ $agent->city }}</p>--}}
                        {{--<p><strong>Teléfono</strong> {{ $agent->phone }}</p>--}}
                        {{--<p><strong>Dominio</strong> {{ $agent->domain }}</p>--}}
                        {{--<p><strong>Email</strong> {{ $agent->email }}</p>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
{{--@section('scripts')--}}

    {{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5twBSN85iG0zWX9hV97-9IUdUAiHR42w"></script>--}}
    {{--<script>--}}
        {{--var vMarker;--}}
        {{--var map;--}}
        {{--map = new google.maps.Map(document.getElementById('map_canvas'), {--}}
            {{--zoom: 14,--}}
            {{--center: new google.maps.LatLng(25.9112613, -80.2968479),--}}
            {{--mapTypeId: google.maps.MapTypeId.ROADMAP--}}
        {{--});--}}
        {{--vMarker = new google.maps.Marker({--}}
            {{--position: new google.maps.LatLng(25.9112613, -80.2968479),--}}
            {{--draggable: true--}}
        {{--});--}}
        {{--google.maps.event.addListener(vMarker, 'dragend', function (evt) {--}}
            {{--$("#txtLat").val(evt.latLng.lat().toFixed(6));--}}
            {{--$("#txtLng").val(evt.latLng.lng().toFixed(6));--}}

            {{--map.panTo(evt.latLng);--}}
        {{--});--}}
        {{--map.setCenter(vMarker.position);--}}
        {{--vMarker.setMap(map);--}}

        {{--$("#txtCiudad, #txtEstado, #txtDireccion").change(function () {--}}
            {{--movePin();--}}
        {{--});--}}

        {{--function movePin() {--}}
            {{--var geocoder = new google.maps.Geocoder();--}}
            {{--var textSelectM = $("#txtCiudad").text();--}}
            {{--var textSelectE = $("#txtEstado").val();--}}
            {{--var inputAddress = $("#txtDireccion").val() + ' ' + textSelectM + ' ' + textSelectE;--}}
            {{--geocoder.geocode({--}}
                {{--"address": inputAddress--}}
            {{--}, function (results, status) {--}}
                {{--if (status == google.maps.GeocoderStatus.OK) {--}}
                    {{--vMarker.setPosition(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));--}}
                    {{--map.panTo(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));--}}
                    {{--$("#txtLat").val(results[0].geometry.location.lat());--}}
                    {{--$("#txtLng").val(results[0].geometry.location.lng());--}}
                {{--}--}}

            {{--});--}}
        {{--}--}}
    {{--</script>--}}
    {{--@endsection--}}
