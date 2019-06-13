<style>
html, body {
    background-color: #fff;
    font-family: 'Nunito', sans-serif;
    font-weight: 150;
    height: 100vh;
    margin: 0;
}

.links > a {
    color: #636b6f;
    padding: 25px;
    margin: 10px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
}
.links{
  margin:10px;
}
</style>
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
