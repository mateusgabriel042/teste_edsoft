<!DOCTYPE html>
<html>
<body>

<?php
	function sort_array($arr) {
	  $freq = array_count_values($arr);
	  usort($arr, function($a, $b) use ($freq) {
	    if ($freq[$a] == $freq[$b])
	      return $a - $b;
	    return $freq[$a] - $freq[$b];
	  });
	  return $arr;
	}
    $arr = array(3, 1, 8, 8, 2, 2, 4);
	$sorted_arr = sort_array($arr);

	print_r($sorted_arr)
?>

</body>
</html>