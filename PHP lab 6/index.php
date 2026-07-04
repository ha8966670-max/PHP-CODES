<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>
    <style>
        body {
            background-color: lightgray;
            font-family: Arial;
        }

        .S1 {
            padding: 20px;
            width: 60%;
            border: 2px solid black;
            border-radius: 10px;
            background-color: white;
            margin: auto;
        }

        h1 {
            background-color: darkblue;
            color: white;
            padding: 15px;
            text-align: center;
        }

        label {
            color: black;
            font-size: 18px;
        }

        .field {
            margin-bottom: 15px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="S1">
        <h1> Registration Form</h1>
        <form action="" method="Post">
            <div>
                <label for="full name">Full Name:</label><br>
                <input type="text" id="full name:" name="full Name:">
            </div>
            <br>
            <div class="field">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password">
            </div>
            <br>
            <div class="field">
                <label for="email">Emali-Address</label><br>
                <input type="email" id="email" name="email">
            </div>
            <br>
            <div class="field">
                <label for="password"> Confirm Password</label><br>
                <input type="password" id="password" name="password">
            </div>
            <br>
            <div class="field">
                <label for="gender">Gender</label><br>
                <input id="gender" name="gender" type="radio"> Male
                <input id="gender" name="gender" type="radio"> Female
            </div>

            <br>

            <br>
            <div class="field">
                <label for="Terms and condition" Terms and condition:</label><br>

                    <br>
                    <div class="field">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                    <br>
        </form>
        <h2>Terms and Conditions
            <h4>
                The Password should be of 8 Characters
                <br>
                You have written your full name.
            </h4>
        </h2>
    </div>
</body>

</html>