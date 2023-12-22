<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaSecretKey = "6LeK6DkpAAAAAFtqZa4mfLO9NEegw9uOEALANwqP";
    $recaptchaResponse = $_POST["g-recaptcha-response"];

    // Make a POST request to the reCAPTCHA API
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        "secret" => $recaptchaSecretKey,
        "response" => $recaptchaResponse,
    ];

    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if ($response["success"] == true) {
        // reCAPTCHA verification successful, process your form data
        // ...
        echo "reCAPTCHA verification successful.";
    } else {
        // reCAPTCHA verification failed, handle accordingly
        // ...
        echo "reCAPTCHA verification failed.";
    }
}
?>