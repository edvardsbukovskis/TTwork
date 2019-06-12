<?php if(count($countries)==0): ?>
	<p color='red'> There is no record in the database!</p>
<?php else: ?>
	<table border="1"> 
		<tr> 
			<td> Country Id </td> 
			<td> Country Name </td> 
			<td> Country Code </td>
			<td> cities </td>
			<td>  </td>
		</tr>
	<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr> 
			<td> <?php echo e($country->country_id); ?> </td>
			<td> <?php echo e($country->country_name); ?> </td>
			<td> <?php echo e($country->country_code); ?> </td>
			<td> <input type="button" value="show" onclick="showCities(<?php echo e($country->country_id); ?>)"> </td>
			<td> <input type="button" value="delete" onclick="deleteCountry(<?php echo e($country->country_id); ?>)"> </td>
			<td><input type="button" value="update" onclick="updateCountry (<?php echo e($country->country_id); ?>)"></td>
		</td>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<?php endif; ?>
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
<?php /**PATH C:\wamp64\www\ebukovskis\resources\views/countries.blade.php ENDPATH**/ ?>