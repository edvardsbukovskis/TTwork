<div class="links">
					<a href="{{ url('/') }}">Sākums</a>
                    <a href="{{ url('/anketa') }}">Anketas</a>
                </div>


{{$anketa->description}}

{{Form::open(array('action' => ['AnketasController@createJautajums', $anketa->id]))}}
<h1>Ievadīt jautājumu:</h1>
{{Form::text('jautajums')}}
<br></br>
{{Form::submit('Submit')}}
{{Form::close()}}
