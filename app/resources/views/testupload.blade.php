@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

{!! Form::open(array('url' => 'order', 'files' => 'true')) !!}
Tipas:
<br />
{!! Form::text('tipas', old('tipas')) !!}
Adresas:
<br />
{!! Form::text('adresas', old('adresas')) !!}
<br />
Kaina:
<br />
{!! Form::text('kaina', old('kaina')) !!}
<input type="file" name="images[]" multiple />
{!! Form::submit('Saugoti') !!}
{!! Form::close() !!}
