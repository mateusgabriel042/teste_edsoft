<!DOCTYPE html>
<html>
<body>

<?php
	function magicSequence($s) {
    	$vowels = ['a', 'e', 'i', 'o', 'u'];
    	$observer = 0;
    	$maxCount = 0;
        
    	for ($i = strpos($s, 'a'); $i < strlen($s); $i++) {
        	if($s[$i] == $vowels[$observer]){
            	$maxCount++;
        	}else{
            	if($s[$i] == $vowels[$observer+1]){
                	$maxCount++;
                    $observer++;
                }
            	
            }
    	}
        if($observer < 4){
        	return 0;
        }

    	return $maxCount;
	}

	$s = 'uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae';
	$result = magicSequence($s);
	echo $result;
?>

</body>
</html>
