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
.div{

}
.links{
  margin:10px;
}
</style>

<div class="links" style="margin:10px;">
          <a href="{{ url('/') }}">Sākums</a>
					<a href="{{ url('/anketa/create') }}">Izveidot Anketu</a>

</div>

<div style="margin: 10px; background-color: darkgray; border: 1px solid black;">
@foreach ($anketas as $anketa)
<div style="margin: 10px; border: 2px solid black;">

<a style="padding-left:10px;" href="/anketa/createjaut/{{$anketa->id}}">Izveidot jautājumu</a> <br>
<a>{{ $anketa->id }}. anketa </a>
<input style ="margin: 10px;" type="button" value="Papildināt" >
<br>
<a style ="margin-left: 30px;"><b>Anketas nosaukums: </b>{{ $anketa->nosaukums}}</a>

<br>
<a style ="margin-left: 30px;"><b>Anketas apraksts: </b>{{ $anketa->description}}</a>

@foreach ($anketa->jautajumi as $jautajums)
<div style="margin: 10px; background-color: grey; border: 1px solid black;">
	<a style="padding-left:10px;" href="/anketa/jautajums/{{$jautajums->id}}">Atbildēt</a> <br>
<p><b>Jautājums:</b></p>
{{$jautajums->jautajums}}
<p><b>Atbildes:</b></p>
@foreach ($jautajums->atbildes as $atbilde)
<div style="margin: 10px; background-color: darkgray; border: 1px solid black;">
{{$atbilde->atbilde}}
</div>
@endforeach
</div>
@endforeach
</div>
@endforeach
</div>
