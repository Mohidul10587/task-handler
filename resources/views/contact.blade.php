<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <h1>contact</h1>

    <form action="contact-data-send" method="post">
        @csrf
        
        <input type="text" placeholder="name" name="name"> <br>
        <input type="email" placeholder="email" name="email"><br>
        <input type="password" placeholder="pass" name="pass"><br>
        <input type="number" placeholder="Age" name="age"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>