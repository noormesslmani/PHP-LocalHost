<?php
 
//At least 12 characters long but 14 or more is better.
//A combination of uppercase letters, lowercase letters, numbers, and symbols.
//Not a word that can be found in a dictionary or the name of a person, character, product, or organization.
//Significantly different from your previous passwords.
//Easy for you to remember but difficult for others to guess. Consider using a memorable phrase like "6MonkeysRLooking^".
if (isset($_POST["pass"])){
    $pass=$_POST["pass"];
    $strong = true;
    if (strlen($pass)<12){
        $strong = false;
    }
    else if(preg_match('/[A-Z]/', $pass)==false){
        $strong = false;
    }
    else if(preg_match('/[a-z]/', $pass)==false){
        $strong = false;
    }
    else if(preg_match('/[0-9]/', $pass)==false){
        $strong = false;
    }
    else if(preg_match('/[!@#$%^&*()_+-?.,~]/', $pass)==false){
        $strong = false;
    }
    $results=[
        "pass" => $pass,
        "strong" => $strong
    ];
    echo json_encode($results);
}

?>

<html>

<body> 

   <form action = "<?php $_PHP_SELF ?>" method = "POST">

      pass: <input type = "text" name = "pass" />

      <input type = "submit" />

   </form> 

</body>

</html>