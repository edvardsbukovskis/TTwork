<div class="links">
					<a href="{{ url('/') }}">Sākums</a>
                    <a href="{{ url('/anketa') }}">Anketas</a>
                </div>
{{Form::open(array('action' => 'AnketasController@store'))}}
    {{Form::text('description')}}
        {{Form::text('nosaukums')}}
        {{Form::submit('Submit')}}
            {{Form::close()}}