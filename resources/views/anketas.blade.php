@foreach ($anketas as $anketa)
{{ $anketa->id }}
{{ $anketa->nosaukums}}

@foreach ($anketas as $anketa)
<div style="margin: 10px; background-color: red; border: 1px solid black;">
{{ $anketa->jautajumi->first()->jautajums}}

</div>
@endforeach
@endforeach

