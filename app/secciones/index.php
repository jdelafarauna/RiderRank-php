
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Horse Jumping Competitions Logistic Web</title>
    <style>
        body {
           
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            color: #4CA1AF;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        button {
            font-size: 14px;
            font-weight: bold;
            padding: 8px 16px;
            border: none;
            border-radius: 24px;
            cursor: pointer;
            background-color: #4CA1AF;
            color: white;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2E7D87;
        }

        /* Media Query for Smaller Screens */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 60px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }

            button {
                font-size: 12px;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<?php include('../templates/cabecera.php'); ?>
<body>

    <div class="container">
        
        <h1>Welcome to RiderRank Web</h1>
        <p>Our logistic web provides a user-friendly interface to organize and manage horse jumping competitions. It includes features like managing horse information, competitor details, competition schedule, and much more. </p>
        <p>Our goal is to simplify the logistic process and allow event organizers to focus on the essentials, such as the performance of the horses and the success of the competitions. </p>
        <p>Please create an account or log in to access the full features of our logistic web. Enjoy your experience!</p>
        <br>
        
    </div>
</body>
</html>