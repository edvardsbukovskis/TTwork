@if (count($countries)==0)
	<p color='red'> There is no record in the database!</p>
@else
	<table border="1"> 
		<tr> 
			<td> Country Id </td> 
			<td> Country Name </td> 
			<td> Country Code </td>
			<td> cities </td>
			<td>  </td>
		</tr>
	@foreach ($countries as $country)
		<tr> 
			<td> {{ $country->country_id }} </td>
			<td> {{ $country->country_name }} </td>
			<td> {{ $country->country_code }} </td>
			<td> <input type="button" value="show" onclick="showCities({{ $country->country_id }})"> </td>
			<td> <input type="button" value="delete" onclick="deleteCountry({{ $country->country_id }})"> </td>
			<td><input type="button" value="update" onclick="updateCountry ({{$country->country_id}})"></td>
		</td>
	@endforeach
	</table>
@endif
<p> <input type="button" value="New Country"> </p>
<p>Search a country: <input type="text" id="CountrySearchName"> <input type="button" value="Search" onclick="searchCountry()"></p>

<script>
	function showCities(countryID) {
		window.location.href="/city/"+countryID;
	}
	function deleteCountry(countryID) {
		window.location.href="/country/delete/"+countryID;
	}
	function updateCountry(countryID){
		window.location.href="/country/update/"+CountryID;
	}
	function searchCountry(){
		var input=document.getElementById("CountrySearchName").value;
		window.location.href="/search/"+input;
	}
</script>
