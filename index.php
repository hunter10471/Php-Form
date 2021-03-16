<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div>
<h1>Get in touch now!</h1>
<p>please fill in the following fields.</p>
</div>
<div>
<form action="contact.php" method = "post">
<input type="text" name = "name" placeholder = "full name">
<input type="text" name = "email" placeholder = "email">
<input type="text" name = "subject" placeholder = "subject">
<textarea name="message" id="" cols="30" rows="10">Enter your message here...</textarea>
<button type="submit" name = "submit">Submit</button>
</form>
</div>
    <?php
    

    ?>
  
</body>
</html>