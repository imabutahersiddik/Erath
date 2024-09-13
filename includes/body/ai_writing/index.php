<?php
header('Content-Type: application/json');

$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);

$aiService = $data['aiService'];
$prompt = $data['prompt'];

$generatedText = '';

if ($aiService === 'gemini') {
    $generatedText = callGeminiAPI($prompt);
} elseif ($aiService === 'anthropic') {
    $generatedText = callAnthropicAPI($prompt);
}

echo json_encode(['generated_text' => $generatedText]);

function callGeminiAPI($prompt) {
    $apiKey = getenv('GEMINI_API_KEY'); // Get the API key from environment variable
    $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=' . $apiKey;

    $data = [
        'contents' => [
            [
                'parts' => [
                    ['text' => $prompt]
                ]
            ]
        ]
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === FALSE) {
        return "Error calling Gemini API.";
    }

    $responseData = json_decode($response, true);
    return $responseData['contents'][0]['parts'][0]['text'] ?? "No text generated.";
}

function callAnthropicAPI($prompt) {
    $apiKey = getenv('ANTHROPIC_API_KEY'); // Get the API key from environment variable
    $url = 'https://api.anthropic.com/v1/messages';

    $data = [
        'model' => 'claude-3-5-sonnet-20240620', // Specify the model to use
        'max_tokens' => 1024,
        'messages' => [
            ['role' => 'user', 'content' => $prompt]
        ]
    ];

    $options = [
        'http' => [
            'header'  => "x-api-key: $apiKey\r\n" .
                         "anthropic-version: 2023-06-01\r\n" .
                         "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === FALSE) {
        return "Error calling Anthropic API.";
    }

    $responseData = json_decode($response, true);
    return $responseData['completion'] ?? "No text generated."; // Adjust based on actual response structure
}
?>