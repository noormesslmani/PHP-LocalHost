<html>

<head>
    <style><?php include 'C:/xampp/htdocs/styles.css'; ?></style>
</head>

<body>
    <form method="get" class="palindrome">
        <input type="text" name="string" required class="input-string" />
        <input class="submit" type="submit" />
        <?php
            if (isset($_GET["string"]))
            $string= $_GET["string"];

            $reversed=strrev($string);

            $palind = ($reversed==$string);
            $results=[
                "string" => $string,
                "palind" => ($palind)
            ];
            json_encode($results);

        ?>

        <p class='result'><?php if ($palind){echo "The above string is palindrome";}
            else{echo "The above string is not palindrome";}?><p>
    </form>
    

</body>

</html>