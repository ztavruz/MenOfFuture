<?php

namespace Engine\Token;

class Token
{
    private $header = [];
    private $payload = [];
    private $secret;

    public function __construct()
    {
        
        $this->header = [
            "alg" => "HS256", 
            "typ" => "JWT"
        ];
        
        $this->secret = 'ztavruz';
    }

    public function createToken($user)
    {
        $header = $this->header;
        $header = json_encode($header);
        $payload = [
            "id"    => $user['id'],
            'email' => $user['email'],
            'login' => $user['login']
        ];
        $payload = json_encode($payload);
        $secret = $this->secret;

        $header = base64_encode($header);
        $payload = base64_encode($payload);

        $signature = $header . "." . $payload;
        $signature = hash_hmac("sha256", $signature, $secret);
        $signature = base64_encode($signature);

        $token = $header . "." . $payload . "." . $signature;

        return $token;
    }

    public function validateToken($token)
    {

        $arr = explode(".", $token);
        $str = $arr[0] . "." . $arr[1];
        $secret = $this->secret;

        $str = hash_hmac("sha256", $str, $secret);
        $str = base64_encode($str);
        $signature = $arr[2];

        $equal = hash_equals($str, $signature);

        // var_dump($str);
        // echo "<br>";
        // echo "<br>";
        // var_dump($str);
        // echo "<br>";
        // echo "<br>";
        // var_dump($equal);
        return $equal;
    }

    public function parseToken($token)
    {
        $arr = explode(".", $token);
        $header = $arr[0];
        $payload = $arr[1];
        $header = base64_decode($header);
        $payload = base64_decode($payload);
        $header = json_decode($header, true);
        $payload = json_decode($payload, true);
        
        $data = [];
        $data["header"]  = $header;
        $data["payload"] = $payload;

        return $data;

        // var_dump($header);
    }
}