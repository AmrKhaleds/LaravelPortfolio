<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FcmContoller extends Controller
{
    public function sendTo($device_token = null, $title = "FCM", $body = "Body", $icon = null, $data)
    {

        $notification = [
            'title' => $title,
            'body' => $body,
            'icon' => $icon,
        ];
        $notification = array_filter($notification, function ($value) {
            return $value !== null;
        });
        $url = 'https://fcm.googleapis.com/fcm/send';
        $fields = array(
            'registration_ids' => $device_token,
            'notification' => $notification,
            'data' => ['fcmapp' => $data]
        );
        $encodeFields = json_encode($fields);
        $headers = array(
            'Authorization: key=' . env('SERVER_KEY'),
            'Content-Type: application/json'
        );
        $ch = curl_init();
            
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodeFields);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        return $result;
        // dd($result);
    }
}
