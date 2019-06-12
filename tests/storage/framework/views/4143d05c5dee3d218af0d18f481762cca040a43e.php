We will update city <b><?php echo e($cities->city_name); ?></b>:
<table>
<tr>
    <td>City Name<td>
    <td>:</td>
    <td><input type="text" id="city_name"></td>
    <td><input type="button" value="update" onclick="updateCity()"></td>
</tr>
</table>
<script>
    function updateCity() {
        var cityName=document.getElementById("city_name").value.trim();
        if (cityName.length==0) {
            alert("Please enter a city name");
            document.getElementById("city_name").focus();
            return false;
        }
        window.location.href="/city/update/"+<?php echo e($cities->city_id); ?>+"/"+cityName;
    }
</script><?php /**PATH C:\wamp64\www\ebukovskis\resources\views/city_update.blade.php ENDPATH**/ ?>