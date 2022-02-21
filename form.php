<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="POST">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="FirstName"required>
        </div>
        <div>
            <label for="name">Prénom :</label>
            <input type="text" id="name" name="LastName"required>
        </div>
        <div>
            <label for="e-mail">Email :</label>
            <input type="email" id="email" name="E-Mail"required>
        </div>
        <div>
            <label for="phone">Phone Number :</label>
            <input type="tel" id="phone" name="NumberPhone"required>
        </div>
        <div>
            <select name="subject" size="1">
                <OPTION>Subject 1
                <OPTION>Subject 2
                <OPTION>Subject 3
                <OPTION>Subject 4
                <OPTION>Subject 5
            </select>
        </div>
        <div>
            <label for="message"> Tell Us Your Message :</label>
            <textarea id="message" name="message"required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer </button>
        </div>

    </form>
    </body>

    </html>
    <?php

        if(!empty($_POST))
        if(isset($_POST['E-Mail']) && !empty($_POST['E-Mail']) &&
        isset($_POST['FirstName']) && !empty($_POST['FirstName']) &&
        isset($_POST['LastName']) && !empty($_POST['LastName']) && 
        isset($_POST['NumberPhone']) && !empty($_POST['NumberPhone']) &&
        isset($_POST['message']) && !empty($_POST['message'])) 
        {
       
        $name = strip_tags($_POST['FirstName']);
        if(!filter_var($_POST['E-Mail'], FILTER_VALIDATE_EMAIL)){
            die("Email incorrect !!!");
        }


        }else{
        die("Le formulaire est incomplet !!!");
        }
?>
