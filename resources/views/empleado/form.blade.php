<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors ->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>
    </div>
@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input class="form-control" type="text" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" name="Nombre" id="Nombre">

</div>
<div class="form-group">
<label for="Apellidos">Apellidos</label>
<input class="form-control" type="text" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos') }}" name="Apellidos" id="Apellidos">

</div>
<div class="form-group">
<label for="Correo">Correo</label>
<input class="form-control" type="text" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" name="Correo" id="Correo">

</div>
<div class="form-group">
<label for="Foto">
@if(@isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$empleado->Foto) }}" alt="">
@endif
</label>

</div>
<div class="form-group">
<input class="form-control" type="file" name="Foto" id="Foto">

</div>
<div class="form-group">
<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">
<a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>
</div>