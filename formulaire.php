<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="firtsname">Firstname</label>
            <input type="text" id='firstname' name='user_firstname' />
        </div>
        <div>
            <label for="lastsname">Lastname</label>
            <input type="text" id='lastname' name='user_lastname' />
        <div>
        <div>
            <label for="email">Mail</label>
            <input type="text" id='mail' name='user_mail' />
        </div>
        <div>
            <label for="phone_number">n°:</label>
            <input type="text" id= 'number' name='phone_number'>
        </div>
        <label for="pet-select">Problematique</label>
            <select name="probleme" id="problem-select">
            <option value="">--Please choose an option--</option>
            <option value="bug">Bug</option>
            <option value="inacess">Inacess</option>
            <option value="spiderman">SpiderMan</option>
            <option value="movie">Movie</option>
            <option value="metro">Metro</option>
            <option value="jo2024">JO2024</option>
        </select><br>

            <label for="message">Message</label>
            <textarea name="user_message" id="message"></textarea>

        <div class = "button">   
            <button type="Submit">Send</button>
        </div> 
    </form>
</body>
</html>

