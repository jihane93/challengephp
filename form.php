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
            <input type="text" id="name" name="FirstName">
        </div>
        <div>
            <label for="name">Prénom :</label>
            <input type="text" id="name" name="LastName">
        </div>
        <div>
            <label for="e-mail">Email :</label>
            <input type="email" id="email" name="E-Mail">
        </div>
        <div>
            <label for="phone">Phone Number :</label>
            <input type="tel" id="phone" name="NumberPhone">
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
            <textarea id="message" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer </button>
        </div>

    </form>
    <?php
var_dump($_POST);
?>
</body>

</html>