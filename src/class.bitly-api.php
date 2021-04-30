<?php
/**
 GitHub : https://github.com/mestoness/bitly-api-php
 Author : MestOness (Ahmet Baki Memiş)
 *
 */

namespace mestoness;
class bitly
{
    private static $api_url = "https://api-ssl.bitly.com/v4/bitlinks";
    private static function curl($url, $fields, $header)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    public static function shorter($url)
    {

        $data = json_encode(['long_url' => $url]);
        return self::curl(
        self::$api_url,$data, 
        [
        'Authorization: Bearer ' . BITLY_TOKEN,
        'Content-Type: application/json', 
        'Content-Length: ' . strlen($data) 
        ]);
    }

}

?>
