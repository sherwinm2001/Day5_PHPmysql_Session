
<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    echo"Prime numbers between <b>".$n1. "</b> and <b>" .$n2. "</b> are";

    for ($i = $n1; $i <= $n2; $i++) 
    { 
        if ($i == 0 || $i==1) 
            continue;
        
        $flag = 1; 
  
        for ($j = 2; $j <= $i / 2; ++$j) 
        { 
            if ($i % $j == 0) 
            { 
                $flag = 0; 
                break; 
            } 
        } 

        if ($flag == 1) 
            echo"<h3>".$i;
    }
?>
