<div class="links">
					<a href="{{ url('/') }}">Sākums</a>
                    <a href="{{ url('/anketa') }}">Anketas</a>
                </div>

@foreach ($jautajumi as $jautajums)
{{$jautajums->jautajums}}
@endforeach

{{Form::open(array('action' => ['AnketasController@aizpildit', $jautajums->id]))}}
<h1>ATBILDE:</h1>
{{Form::text('atbilde')}}
<br></br>
{{Form::submit('Submit')}}
{{Form::close()}}
