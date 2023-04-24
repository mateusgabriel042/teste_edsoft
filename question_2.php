<!DOCTYPE html>
<html>
<body>

<?php
  function fibonacci($n) {
    $fibonacci = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
      $next = $fibonacci[$i-1] + $fibonacci[$i-2];
      $fibonacci[] = $next;
    }
    sort($fibonacci);
    return $fibonacci;
  }
  
  $n = 12;
  $fibonacci = fibonacci($n);
  print_r($fibonacci);
?>

</body>
</html>
