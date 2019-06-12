@if (count($cities)==0)
	<p color='red'> There is no city in the database!</p>
@else
	<table border="1"> 
		<tr> 
			<td> City Id </td> 
			<td> City Name </td> 
			<td> Country Id </td>
			<td>  </td>
		</tr>
	@foreach ($cities as $city)
		<tr> 
			<td> {{ $city->city_id }} </td>
			<td> {{ $city->city_name }} </td>
			<td> {{ $city->country_id }} </td>
			<td> <input type="button" value="delete" onclick="deleteCity({{ $city->city_id }})"> </td>
			<td><input type="button" value="update" onclick="updateCity({{$city->city_id}})"></td>
		</td>
	@endforeach
	</table>
@endif
<p> <input type="button" value="New City" onclick="newCity( {{ $country_id }} )"> </p>
<script>
	function newCity(countryID) {
		window.location.href="/city/new/"+countryID;
	}
	function deleteCity(cityID) {
		window.location.href="/city/delete/"+cityID;
	}
	function updateCity(CityID){
		window.location.href="/city/update/"+CityID;
	}
</script>
