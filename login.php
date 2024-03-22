
<?php
// Validate reCAPTCHA response
$recaptcha_secret = "6LfXt6ApAAAAABLOk7eRcW1e3H5gNVlB7khv7aV0";
$recaptcha_response = $_POST['g-recaptcha-response'];

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response
];

$recaptcha_options = [
    'http' => [
        'method' => 'POST',
        'content' => http_build_query($recaptcha_data)
    ]
];

$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_response = json_decode($recaptcha_result);

if ($recaptcha_response->success) {
    // reCAPTCHA verification successful, process form submission
    // Proceed with other form processing...
    
    session_start();
    require_once('database.php');
    
    // Continue with your existing authentication logic
    $query = "SELECT * FROM users WHERE email='$identifier' OR phone='$identifier'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: profile.php");
        } else {
            die("Неверный пароль.");
        }
    } else {
        die("Пользователь не найден.");
    }

} else {
    // reCAPTCHA verification failed
    echo "reCAPTCHA verification failed. Please try again.";
}
?>
