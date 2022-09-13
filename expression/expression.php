<?php
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $answer= pow($a,3) + ($b*$c)-($a/$b);
    $results=[
        "answer"=> $answer
    ];
    echo json_encode($results);
}
?>

<html>

<body> 

   <form action = "<?php $_PHP_SELF ?>" method = "POST">

      a: <input type = "text" name = "a" />

      b: <input type = "text" name = "b" />

      c: <input type = "text" name = "c" />

      <input type = "submit" />

   </form> 

</body>

</html>