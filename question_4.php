<!DOCTYPE html>
<html>
<body>

<?php
	function executeOperations($n, $operations) {
      $list = array_fill(1, $n, 0);

      foreach ($operations as $op) {
        $a = $op[0];
        $b = $op[1];
        $v = $op[2];

        for ($i = $a; $i <= $b; $i++) {
          $list[$i] += $v;
        }
      }

      return max($list);
    }
    
    $operations = array(
      array(2, 3, 603),
      array(1, 1, 286),
      array(4, 4, 882)
	);

	$result = executeOperations(4, $operations);
	echo $result;
?>

</body>
</html>
