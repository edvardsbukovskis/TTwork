<div style="margin: 10px; background-color: darkgray; border: 1px solid black;">
@foreach ($anketas as $anketa)
{{ $anketa->id }}
{{ $anketa->nosaukums}}

@foreach ($anketa->jautajumi as $jautajums)
<div style="margin: 10px; background-color: grey; border: 1px solid black;">
{{ $jautajums->jautajums}}
</div>
@endforeach
@endforeach
</div>
