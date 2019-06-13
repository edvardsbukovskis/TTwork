<div class="links">
                    <a href="{{ url('/') }}">Sākums</a>
					<a href="{{ url('/anketa/create') }}">Izveidot Anketu</a>
					
                </div>
<div style="margin: 10px; background-color: darkgray; border: 1px solid black;">
@foreach ($anketas as $anketa)
<div style="margin: 10px; border: 2px solid black;">

<a>{{ $anketa->id }}. anketa</a>
<br>
<a style ="margin-left: 30px;">{{ $anketa->nosaukums}}</a>

<br>
<a style ="margin-left: 30px;">{{ $anketa->description}}</a>

@foreach ($anketa->jautajumi as $jautajums)
<div style="margin: 10px; background-color: grey; border: 1px solid black;">
{{$jautajums->jautajums}}

</div>
@endforeach
</div>
@endforeach
</div>

