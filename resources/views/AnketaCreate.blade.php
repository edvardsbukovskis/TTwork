<div class="links">
					<a href="{{ url('/') }}">Sākums</a>
                    <a href="{{ url('/anketa') }}">Anketas</a>
                </div>
{{Form::open(array('action' => 'AnketasController@store'))}}
    <h1>APRAKSTS:</h1>
    {{Form::text('description')}}
    <h1>NOSAUKUMS:</h1>
    {{Form::text('nosaukums')}}
    <br></br>
    {{Form::submit('Submit')}}
    {{Form::close()}}
