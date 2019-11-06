{{ Form::label('codigo','Codigo') }}
{{ Form::text('codigo') }}<br>
{{ Form::label('fecha','Fecha') }}
{{ Form::text('fecha') }}<br>
{{ Form::label('alumno','Alumno') }}
{{ Form::select('alumno_id',$alumnos) }}<br>

