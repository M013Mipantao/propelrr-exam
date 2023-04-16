<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <h3>Fibonacci</h3>
    <form method="post">
        <input type="input" name="input"/>
        <input type="submit" name="btn_submit" value="Submit"/>
    </form>
    
</body>
</html>


<?php  
if(isset($_POST['btn_submit'])) {
    $input = $_POST['input'];  
    echo "<h4>Output:</h4>";  
    echo "\n";  

    function series($num){  
        if($num == 0){  
            return 0;  
        }else if( $num == 1){  
            return 1;  
        }else {  
            return (series($num-1) + series($num-2));  
        }   
    }  

    if($input > 20){
        echo "Only accept numeric between the range 1 to 20"; 
    }else{
        for ($i = 0; $i < $input; $i++){  
            echo series($i);  
            echo "\n";  
        }  
    }
}

?>