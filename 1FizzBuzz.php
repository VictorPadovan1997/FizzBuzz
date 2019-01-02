<html>
    <form action="FizzBuzz.php">
        <input type="number" name="name">
        <input type="submit" value="Enviar">
    </form>
<?php


foreach(range(1, 100) as $_GET["name"]){
    
    
    if($_GET["name"] % 3 == 0 && $_GET["name"] % 5 == 0){
        echo 'Fizz Buzz', '<br>';
    } 
    
    elseif($_GET["name"] % 3 == 0){
        echo 'Fizz', '<br>';
    }
    
    elseif($_GET["name"] % 5 == 0){
        echo 'Buzz', '<br>';
    }
    
    else{
        echo $_GET["name"], '<br>';
    }
}
?>
</html>