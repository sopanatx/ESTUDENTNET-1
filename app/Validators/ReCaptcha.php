<?php
namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator )
    {
        $client = new client;
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify',

            [
                'form_params' =>
                [
                 'secret' => env('6LcA8ZcUAAAAAFYWzRNLp6D-HVv3NWNtlkzE6RUy'),
                    'response' => $value
                ]
            ]
            );
        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
}
