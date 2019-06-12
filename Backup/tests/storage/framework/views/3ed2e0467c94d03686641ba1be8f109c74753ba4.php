<?php if(count($cities)==0): ?>
	<p color='red'> There is no city in the database!</p>
<?php else: ?>
	<table border="1"> 
		<tr> 
			<td> City Id </td> 
			<td> City Name </td> 
			<td> Country Id </td>
			<td>  </td>
		</tr>
	<?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr> 
			<td> <?php echo e($city->city_id); ?> </td>
			<td> <?php echo e($city->city_name); ?> </td>
			<td> <?php echo e($city->country_id); ?> </td>
			<td> <input type="button" value="delete" onclick="deleteCity(<?php echo e($city->city_id); ?>)"> </td>
			<td><input type="button" value="update" onclick="updateCity(<?php echo e($city->city_id); ?>)"></td>
		</td>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<?php endif; ?>
<p> <input type="button" value="New City" onclick="newCity( <?php echo e($country_id); ?> )"> </p>
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
<?php /**PATH C:\wamp64\www\ebukovskis\resources\views/cities.blade.php ENDPATH**/ ?>