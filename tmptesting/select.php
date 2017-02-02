<select>
<?php
if ($file = @fopen('data.txt', 'r')) {
  while(($line = fgets($file)) !== false) {
		echo "<option>{$line}</option>";
	}
	fclose($file);
}
?>
</select>