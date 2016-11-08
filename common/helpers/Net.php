<?php

namespace common\helpers;




/**
 * net request for curl php
 * httppost httpget
 *
 * @author lbaztyy
 */

class Net
{

    /**
     * http post
     */
    public static function httppost($url, $data = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**
     * http get
     */
    public static function httpget($url, $data = null)
    {
        $flag = 0;
        $ch = curl_init();
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                if ($flag != 0) {
                    $params .= "&";
                    $flag = 1;
                }
                $params .= $key . "=";
                $params .= urlencode($value);// urlencode($value);
                $flag = 1;
            }
            $url .= "?" . $params; //提交的url地址
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}