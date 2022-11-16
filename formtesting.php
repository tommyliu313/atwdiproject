<?php
require_once('databasr/data/dbsetting.php')

?><form action="submit.php" method="post">
District:
<select name="" id="district">
    <? while($row = mysql_fetch_array($_)) ?>
    <option value="<?php echo $district[0]?>"></option>
    <?php endwhile ?>
</select>

</form>
