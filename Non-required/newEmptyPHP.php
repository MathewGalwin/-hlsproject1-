<!DOCTYPE html>
<html lang="en">
<body>
<?php

    function loop(){
        for($i=0; $i<5;$i++){
          
            echo($i++);
            $i=$i+1;
        }
    }
     loop();  
?> 
</body>
</html>