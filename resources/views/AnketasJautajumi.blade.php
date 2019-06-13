<div class="links">
					<a href="{{ url('/') }}">Sākums</a>
                    <a href="{{ url('/anketa') }}">Anketas</a>
                </div>

								<div style="margin: 10px; background-color: darkgray; border: 1px solid black;">
								<div style="margin: 10px">

<p><b>Anketas aparaksts: </b>{{$anketa->description}}</p>

{{Form::open(array('action' => ['AnketasController@createJautajums', $anketa->id]))}}
<h1>Ievadīt jautājumu:</h1>
{{Form::text('jautajums')}}
<br></br>
{{Form::submit('Submit')}}
{{Form::close()}}
</div>
</div>
