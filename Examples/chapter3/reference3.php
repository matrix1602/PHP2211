<html>

<head>
    <title>Code Reference 3</title>

</head>


<body>
    <h2>Code Reference 3</h2>
    <?php

    //check if e-mail address formate is valid or not
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\- ]+)/", $email))
        $emailError = "Invalid email format";

    //validate website
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "Invalid URL";
    }

    ?>
  
    
    <ul>
   <b> Links:</b>
<li>http://www.formget.com/form-validation-using-php/</li>
<li>https://www.w3schools.com/php/php_form_required.asp</li>
</ul>
</body>

</html>