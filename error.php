<?php
// Get the error message passed as a query parameter
$message = $_GET['message'] ?? 'An unknown error occurred.';

// Function to display different error messages based on the error code
function getErrorMessage($errorCode) {
    switch ($errorCode) {
        case '404':
            return 'The page you are looking for does not exist.';
        case '403':
            return 'Access to this page is forbidden.';
        // Add more cases for different error codes if needed
        default:
            return 'An  error occurred.';
    }
}

// Get the error code passed as a query parameter
$errorCode = $_GET['code'] ?? '500';

// Get the corresponding error message
$errorMsg = getErrorMessage($errorCode);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style >
  
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            color: #666;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin: 10px 0;
        }

        a {
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>

  
</head>
<body>
    <div class ="container">
    <h1>Error <?php echo $errorCode; ?></h1>
    <p><?php echo $errorMsg; ?></p>
    <p><?php echo $message; ?></p>
    

    <div class="container">
       
        <ul>
            <li><a href="home.html">home</a></li>
            
        </ul>
    </div>
    
</div>
</body>
</html>
