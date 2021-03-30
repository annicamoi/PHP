<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    
<?php

call_user_func( $x = function( $f, $i=1 ) {
    echo "$i\n", $f[floor($i/1000)]($f, ++$i);
  }, array( $x, function(){} ));

?>


</body>
</html>