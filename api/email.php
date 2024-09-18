<?php

$url = 'https://kyc-api.co.in/api/pan_details?panno=AFIPI5458M';

// Set headers
$headers = [
    'Host: kyc-api.co.in',
    'Connection: keep-alive',
    'sec-ch-ua: "Chromium";v="122", "Not(A:Brand";v="24", "Google Chrome";v="122"',
    'sec-ch-ua-mobile: ?1',
    'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36',
    'sec-ch-ua-platform: "Android"',
    'Accept: */*',
    'Sec-Fetch-Site: cross-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7'
];

// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_ENCODING, 'deflate,gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Execute the cURL request and capture the response
$response = curl_exec($ch);

// Check if cURL request failed
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    // Return the response as JSON
    header('Content-Type: application/json');
    echo $response;
}

// Close the cURL session
curl_close($ch);

?>
