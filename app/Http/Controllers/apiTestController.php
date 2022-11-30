<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class apiTestController extends Controller
{
  /**
   * This function is used to show the success page with the amount and the other details
   */
  public function showTest()
  {

    try {
      //code...


      $info = Route::current()->parameter('info');

      // $data=json_decode($info);
      $data = $arrayFormat = json_decode($info, true);


      for ($i = 0; $i < count($data); $i++) {
        $status = array_column($arrayFormat, 'status');
        $paid_amount = array_column($arrayFormat, 'paid_amount');
        $card_holder = array_column($arrayFormat, 'card_holder');
        $card_type = array_column($arrayFormat, 'card_type');
        $created_at = array_column($arrayFormat, 'created_at');
        $updated_at = array_column($arrayFormat, 'updated_at');
      }
      $card_type = str_replace('+', ' ', $card_type[0]);
      $card_holder = str_replace('+', ' ', $card_holder[0]);


      return view('paymentViews.testResponse', compact('paid_amount', 'status', 'card_holder', 'card_type', 'created_at'));
    } catch (\Throwable $error) {
      return redirect()->back()->with(['error' => "هناك خطاء "]);
    }
  }

  /**
   * This function is used to show the cancel page with
   * @param cancel
   */
  public function testCancel()
  {

    try {


      $cancel = Route::current()->parameter('cancel');

      // return $cancel;
      return view('paymentViews.cancel_payment', compact('cancel'));
    } catch (\Throwable $error) {
      return redirect()->back()->with(['error' => "هناك خطاء "]);
    }
  }

  /**
   * this function show cancel page
   * @return [type]
   */
  public function viewCancel()
  {

    try {
      //code...

      return view('paymentViews.cancel_payment');
    } catch (\Throwable $th) {
      return redirect()->back()->with(['error' => "هناك خطاء "]);
    }
  }


  /**
   * The index function which is used for posting the data to the api
   */
  public function index()
  {
    try {


      $data = [
        "order_reference" => "123412",

        "products" => [
          array(
            "id" => 1,
            "product_name" => "charger",
            "quantity" => 1,
            "unit_amount" => 1000
          ),
          array(
            "id" => 5,
            "product_name" => "mobile phone galexy s-9",
            "quantity" => 2,
            "unit_amount" => 100000
          ),
          array(
            "id" => 6,
            "product_name" => "i-phone headphones",
            "quantity" => 5,
            "unit_amount" => 10000
          )
        ], "currency" => "YER",
        "total_amount" => 111000,
        "success_url" => "http://127.0.0.1:8000/test/response",
        "cancel_url" => "http://127.0.0.1:8000/test/cancel",
        "metadata" => [
          "Customer name" => "somename",
          "order id" => 0
        ]

      ];




      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://waslpayment.com/api/test/merchant/payment_order",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30000,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data),

        CURLOPT_HTTPHEADER => array(

          "private-key: rRQ26GcsZzoEhbrP2HZvLYDbn9C9et",
          "public-key: HGvTMLDssJghr9tlN9gr4DVYt0qyBy",
          "Content-Type:  application/x-www-form-urlencoded"


        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        dd(" Error #:" . $err);
      } else {
        //echo $response;

        dd($response);
      }
    } catch (\Throwable $th) {
      return redirect()->back()->with(["error" => "هناك حطاء"]);
    }
  }
}
