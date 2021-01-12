{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('title', 'Título del agente') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>
<div class="form-group">
	{{ Form::label('name', 'Nombre del agente') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
{{--    {!! Form::select('type', [null => 'Selecciona el tipo'] + ['auto' => 'Auto','hogar'=>'Hogar','comercial'=>'Comercial','vida'=>'Vida','salud'=>'Salud'], null, ['class' => 'form-control']) !!}--}}
    {{--{{ Form::select('types[]', $types, null, ['id' => 'types', 'class'=>'form-control', 'multiple' => 'multiple']) }}--}}
    <select name="types[]" id="types" class="form-control selectpicker" data-style="btn-default" multiple="multiple" title="Seleccione una o varias">
        @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
</div>
{{--<select id="types" class="js-example-basic-multiple" name="states[]" multiple="multiple">--}}
    {{--<option value="AL">Alabama</option>--}}
    {{--<option value="WY">Wyoming</option>--}}
{{--</select>--}}

<div class="form-group">
    {{ Form::label('slug', 'Estado') }}
    <label>
        {{ Form::radio('status', 'PUBLISHED') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'DRAFT') }} Borrador
    </label>
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
	{{ Form::label('image', 'Imagen') }}
	{{ Form::file('image',  ['class' => 'form-control', 'id' => 'image']) }}
</div>
<div class="form-group">
    <div class="row"  style="display: flex;">
<div class="col-md-4">
    {{ Form::label('state', 'Estado') }}
    {{ Form::text('state', null, ['class' => 'form-control', 'id' => 'estado']) }}
</div>
<div class="col-md-4">
	{{ Form::label('country', 'País') }}
	{{ Form::text('country', null, ['class' => 'form-control', 'id' => 'txtEstado']) }}
</div>
        <div class="col-md-4">
            {{ Form::label('city', 'Ciudad') }}
            {{ Form::text('city', null, ['class' => 'form-control', 'id' => 'txtCiudad']) }}
        </div>
    </div>
<div class="row" style="display: flex; padding-top: 20px">

    <div class="col-md-6">
        {{ Form::label('address', 'Dirección') }}
        {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'txtDireccion']) }}
    </div>
    <div class="col-md-6">
        {{ Form::label('zip', 'Zip code') }}
        {{ Form::text('zip', null, ['class' => 'form-control', 'id' => 'zip']) }}
    </div>
</div>
    </div>

<div class="form-group">
	<div class="row"  style="display: flex;">
		<div class="col-md-6" >
			{{ Form::label('latitud', 'Latitud') }}
			{{ Form::text('latitud', null, ['class' => 'form-control', 'id' => 'txtLat', 'readonly']) }}
		</div>
		<div class="col-md-6" >
			{{ Form::label('longitud', 'Longitud') }}
			{{ Form::text('longitud', null, ['class' => 'form-control', 'id' => 'txtLng', 'readonly']) }}
		</div>

	</div>
</div>


<div class="form-group" >
	<br>
	{{ Form::label('phone', 'Teléfono / móvil') }}
	{{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) }}
</div>
<div class="form-group">
	{{ Form::label('domain', 'Dominio') }}
	{{ Form::text('domain', null, ['class' => 'form-control', 'id' => 'domain']) }}
</div>

<div class="form-group">
	{{ Form::label('biography', 'Biografía') }}
	{{ Form::textarea('biography', null, ['class' => 'form-control']) }}
</div>


<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
//        $(document).ready(function() {
//            $('#types').select2();
//        });
        $('#types').select2({
            placeholder: "Elige uno o varios tipos de agente",
        });
    </script>
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('biography');
	});
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5twBSN85iG0zWX9hV97-9IUdUAiHR42w"></script>
<script>
    var vMarker;
    var map;
    map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 14,
        center: new google.maps.LatLng(25.9112613, -80.2968479),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    vMarker = new google.maps.Marker({
        position: new google.maps.LatLng(25.9112613, -80.2968479),
        draggable: true
    });
    google.maps.event.addListener(vMarker, 'dragend', function (evt) {
        $("#txtLat").val(evt.latLng.lat().toFixed(6));
        $("#txtLng").val(evt.latLng.lng().toFixed(6));

        map.panTo(evt.latLng);
    });
    map.setCenter(vMarker.position);
    vMarker.setMap(map);

    $("#txtCiudad, #txtEstado, #txtDireccion").change(function () {
        movePin();
    });

    function movePin() {
        var geocoder = new google.maps.Geocoder();
        var textSelectM = $("#txtCiudad").text();
        var textSelectE = $("#txtEstado").val();
        var inputAddress = $("#txtDireccion").val() + ' ' + textSelectM + ' ' + textSelectE;
        geocoder.geocode({
            "address": inputAddress
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                vMarker.setPosition(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                map.panTo(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                $("#txtLat").val(results[0].geometry.location.lat());
                $("#txtLng").val(results[0].geometry.location.lng());
            }

        });
    }
</script>
@endsection