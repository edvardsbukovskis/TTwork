<div class="links">
                    <a href="{{ url('/') }}">Sākums</a>
					<a href="{{ url('/anketa/create') }}">Izveidot Anketu</a>

                </div>
<div style="margin: 10px; background-color: darkgray; border: 1px solid black;">
@foreach ($anketas as $anketa)
<div style="margin: 10px; border: 2px solid black;">

<a>{{ $anketa->id }}. anketa </a>
<input style ="margin: 10px;" type="button" value="Papildināt" >
<input style ="margin: 10px;" type="button" value="Dzēst" >
<br>
<a style ="margin-left: 30px;"><b>Anketas nosaukums: </b>{{ $anketa->nosaukums}}</a>

<br>
<a style ="margin-left: 30px;"><b>Anketas apraksts: </b>{{ $anketa->description}}</a>

@foreach ($anketa->jautajumi as $jautajums)
<div style="margin: 10px; background-color: grey; border: 1px solid black;">
	<a href="/anketa/jautajums/{{$jautajums->id}}">Atbildēt</a> <br>
{{$jautajums->jautajums}}

</div>
@endforeach
</div>
@endforeach
</div>
