<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripayController extends Controller
{
    public function getPaymentChannels()
    {
        $apiKey = 'DEV-Y2mqc239xcd3g0JCO6iwhYNUPgaTVBjcPsnoyaHL';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT     => true,
            CURLOPT_URL               => "https://tripay.co.id/api-sandbox/merchant/payment-channel",
            CURLOPT_RETURNTRANSFER    => true,
            CURLOPT_HEADER            => false,
            CURLOPT_HTTPHEADER        => array(
                "Authorization: Bearer ".$apiKey
            ),
            CURLOPT_FAILONERROR       => false
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response ? json_decode($response) : $err;
    }

    public function requestTransaction($book, $method)
    {
        $apiKey = 'DEV-Y2mqc239xcd3g0JCO6iwhYNUPgaTVBjcPsnoyaHL';
        $privateKey = '09X4d-7Rcnl-OD1Cu-h877j-MXcFV';
        $merchantCode = 'T4774';
        $merchantRef = 'PX-' . time();

        $data = [
          'method'            => $method,
          'merchant_ref'      => $merchantRef,
          'amount'            => $book->price,
          'customer_name'     => 'Nama Pelanggan',
          'customer_email'    => 'emailpelanggan@domain.com',
          'customer_phone'    => '081234567890',
          'order_items'       => [
            [
              'name'      => $book->title,
              'price'     => $book->price,
              'quantity'  => 1
            ]
          ],
          'callback_url'      => 'https://domainanda.com/callback',
          'return_url'        => 'https://domainanda.com/redirect',
          'expired_time'      => (time()+(24*60*60)), // 24 jam
          'signature'         => hash_hmac('sha256', $merchantCode.$merchantRef.$book->price, $privateKey)
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_FRESH_CONNECT     => true,
          CURLOPT_URL               => "https://tripay.co.id/api-sandbox/transaction/create",
          CURLOPT_RETURNTRANSFER    => true,
          CURLOPT_HEADER            => false,
          CURLOPT_HTTPHEADER        => array(
            "Authorization: Bearer ".$apiKey
          ),
          CURLOPT_FAILONERROR       => false,
          CURLOPT_POST              => true,
          CURLOPT_POSTFIELDS        => http_build_query($data)
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response ? json_decode($response)->data : $err;
    }
}
