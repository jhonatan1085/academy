{{ Form::label('nombre','Nombre') }}
{{ Form::text('nombre') }}<br>
{{ Form::label('direccion','Direccion') }}
{{ Form::text('direccion') }}<br>
{{ Form::label('fecha','Fecha') }}
{{ Form::text('fecha') }}<br>
{{ Form::label('tInstitucion','T. Institucion') }}
{{ Form::select('t_institucion', ['privada' => 'Privada', 'publica' => 'Publica']) }}<br>
{{ Form::label('ruc','Ruc') }}
{{ Form::text('ruc') }}<br>