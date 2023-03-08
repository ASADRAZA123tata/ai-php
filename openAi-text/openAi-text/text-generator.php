
<?php

if(isset($_POST['prompt'])) {
    $prompt = $_POST['prompt'];
     $api_key = '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';
     $engine = 'davinci';
     $url = 'https://api.openai.com/v1/engines/' . $engine . '/completions';
    
    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ];
    
    $data = [
        'prompt' => $prompt,
        'max_tokens' => 50,
        'temperature' => 0.7
    ];
    
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $output = json_decode($response, true);
    // $generated_text = $output['choices'][0]['text'];
    print_r($output['choices'][0]['text']);
    // print_r($response);
}
?>