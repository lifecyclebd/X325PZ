<?php
    require 'vendor/autoload.php';
    use Plivo\RestAPI;
    $auth_id = "MAMDHKZMFMOTY2ZTK3YJ";
    $auth_token = "MGQxNjRmNmJhZDc2OTlhMzJmNjY0NWQzZGZmMTc2";
    
    $p = new RestAPI($auth_id, $auth_token);

    // Send a message
    $params = array(
            'src' => '+8801923589277', // Sender's phone number with country code
            'dst' => '+8801996690827', // Receiver's phone number with country code
            'text' => 'Hi, Message from Plivo' // Your SMS text message
            //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
            //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
        );
    // Send message
    $response = $p->send_message($params);

    // Print the response
    echo "Response : ";
    print_r($response['response']);

    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";

    // Print the Message UUID
    echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";

?>
<!--
Sample output
Response : Array
(
    [api_id] => 6debfaec-a25e-11e4-96e3-22000abcb9af 
    [message] => message(s) queued 
    [message_uuid] => Array ( [0] => 6dffe3ea-a25e-11e4-a6e4-22000afa12b0 ) 
)
Api ID : 6debfaec-a25e-11e4-96e3-22000abcb9af 
Message UUID : 6dffe3ea-a25e-11e4-a6e4-22000afa12b0 

-->
