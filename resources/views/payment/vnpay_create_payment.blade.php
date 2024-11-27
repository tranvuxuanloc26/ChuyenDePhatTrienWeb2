<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * 
 *
 * @author CTT VNPAY
 */
<<<<<<< HEAD

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
$vnp_TmnCode = "J8HGGW9C"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret = "FCJXJWUHAZEJIGSYUALUZYMLKAGLXNIW"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://chuyendeweb2.local/vnpay_return";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));


$vnp_TxnRef = rand(1,10000); //Mã giao dịch thanh toán tham chiếu của merchant
$vnp_Amount = 20000; // Số tiền thanh toán
$vnp_Locale = "vn"; //Ngôn ngữ chuyển hướng thanh toán
$vnp_BankCode = "NCB"; //Mã phương thức thanh toán
=======
require_once("./config.php");

$vnp_TxnRef = rand(1,10000); //Mã giao dịch thanh toán tham chiếu của merchant
$vnp_Amount = $_POST['amount']; // Số tiền thanh toán
$vnp_Locale = $_POST['language']; //Ngôn ngữ chuyển hướng thanh toán
$vnp_BankCode = $_POST['bankCode']; //Mã phương thức thanh toán
>>>>>>> chi_tiet_blog
$vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount* 100,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
<<<<<<< HEAD
    "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
=======
    "vnp_OrderInfo" => "Thanh toan GD:" + $vnp_TxnRef,
>>>>>>> chi_tiet_blog
    "vnp_OrderType" => "other",
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate"=>$expire
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

<<<<<<< HEAD
=======
dd($inputData);

>>>>>>> chi_tiet_blog
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
<<<<<<< HEAD
dd($vnp_Url);
=======
>>>>>>> chi_tiet_blog
header('Location: ' . $vnp_Url);
die();

