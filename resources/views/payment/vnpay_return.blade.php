<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tạo mới đơn hàng</title>
        <!-- Bootstrap core CSS -->
        <link href="/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="/assets/jumbotron-narrow.css" rel="stylesheet">  
        <script src="/assets/jquery-1.11.3.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <?php
        @include('/config');
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        // $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret ?? '');
        ?>
        <!--Begin display -->
       
        <div class="container mx-auto flex justify-center">
            <div class="bg-[#67b869] w-80 p-10 m-5 rounded-xl">

           
                <div class="header clearfix">
                    <h3 class="text-xl text-center font-bold p-5 ">PIZZA STORE</h3>
                </div>
                <div class="table-responsive">
                    <form action="/saveInForPay" method="get">
                                <div class="form-group py-1">
                                    <label >Mã đơn hàng:</label>

                                    <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                                    <input type="hidden" name="madon" value="<?php echo $_GET['vnp_TxnRef'] ?>">
                                </div>    
                                <div class="form-group py-1">

                                    <label >Số tiền:</label>
                                    <label><?php echo $_GET['vnp_Amount'] ?></label>
                                    <input type="hidden" name="sotien" value="<?php echo $_GET['vnp_Amount'] ?>">
                                </div>  
                                <div class="form-group py-1">
                                    <label >Nội dung thanh toán:</label>
                                    <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
                                    <input type="hidden" name="noidung" value="<?php echo $_GET['vnp_OrderInfo'] ?>">
                                    
                                </div> 
                                <div class="form-group py-1">
                                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                                    <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
                                    <input type="hidden" name="maphanhoi" value="<?php echo $_GET['vnp_ResponseCode'] ?>">
                                </div> 
                                <div class="form-group py-1">
                                    <label >Mã GD Tại VNPAY:</label>
                                    <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
                                    <input type="hidden" name="magiaodich" value="<?php echo $_GET['vnp_TransactionNo'] ?>">
                                </div> 
                                <div class="form-group py-1">
                                    <label >Mã Ngân hàng:</label>
                                    <label><?php echo $_GET['vnp_BankCode'] ?></label>
                                    <input type="hidden" name="manganhang" value="<?php echo $_GET['vnp_BankCode'] ?>">
                                    
                                </div> 
                                <div class="form-group py-1">
                                    <label >Thời gian thanh toán:</label>
                                    <label><?php echo $_GET['vnp_PayDate'] ?></label>
                                    <input type="hidden" name="thoigian" value="<?php echo $_GET['vnp_PayDate'] ?>">
                                    
                                </div> 
                                <div class="form-group py-1">
                                    <label >Kết quả:</label>
                                    <label>
                                        <?php
                                    
                                            if ($_GET['vnp_ResponseCode'] == '00') {
                                                echo "<span style='color:blue'>GD Thanh cong</span>";
                                                ?>
                                               <input type="hidden" name="kq" value="GD Thanh cong">
                                               <?php
                                                
                                            } else {
                                                echo "<span style='color:red'>GD Khong thanh cong</span>";
                                                ?>
                                                <input type="hidden" name="kq" value="GD Khong thanh cong">
                                                <?php
                                            }
                                        
                                        ?>

                                    </label>
                         
                                </div> 
                                <div class="form-group py-1 text-center  mt-5">
                                    <input class="bg-white  p-2 rounded-md text-black font-medium" type="submit" value="Thành Công">
                                    
                                </div> 
                </form>

                </div>
                <p>
                    &nbsp;
                </p>
            </div>
           
        </div>  

        <script>
            // Lấy mảng miniCart từ localStorage
            const miniCart = JSON.parse(localStorage.getItem('miniCartss')) || [];

            // Xóa tất cả phần tử trong miniCart
            miniCart.splice(0, miniCart.length);

            // Lưu lại miniCart vào localStorage sau khi đã xóa
            localStorage.setItem('miniCartss', JSON.stringify(miniCart));

        </script>
        @include('Component.Footer')
    </body>
=======
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet" />
    <script src="/assets/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <?php
    @include('/config');
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
    $inputData = array();
    foreach ($_GET as $key => $value) {
        if (substr($key, 0, 4) == "vnp_") {
            $inputData[$key] = $value;
        }
    }
    unset($inputData['vnp_SecureHash']);
    ksort($inputData);
    $i = 0;
    $hashData = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashData .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
    }
    ?>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg w-96 p-6">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-green-600">PIZZA STORE</h3>
            </div>
            <form action="/saveInForPay" method="post">
                @csrf
                <div class="space-y-4">
                    <div class="text-gray-700">
                        <label class="block font-medium">Mã đơn hàng:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_TxnRef'] ?></p>
                        <input type="hidden" name="madon" value="<?php echo $_GET['vnp_TxnRef'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Số tiền:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_Amount'] ?></p>
                        <input type="hidden" name="sotien" value="<?php echo $_GET['vnp_Amount'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Nội dung thanh toán:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_OrderInfo'] ?></p>
                        <input type="hidden" name="noidung" value="<?php echo $_GET['vnp_OrderInfo'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Mã phản hồi:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_ResponseCode'] ?></p>
                        <input type="hidden" name="maphanhoi" value="<?php echo $_GET['vnp_ResponseCode'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Mã GD tại VNPAY:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_TransactionNo'] ?></p>
                        <input type="hidden" name="magiaodich" value="<?php echo $_GET['vnp_TransactionNo'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Mã ngân hàng:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_BankCode'] ?></p>
                        <input type="hidden" name="manganhang" value="<?php echo $_GET['vnp_BankCode'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Thời gian thanh toán:</label>
                        <p class="bg-gray-100 p-2 rounded"><?php echo $_GET['vnp_PayDate'] ?></p>
                        <input type="hidden" name="thoigian" value="<?php echo $_GET['vnp_PayDate'] ?>">
                    </div>
                    <div class="text-gray-700">
                        <label class="block font-medium">Kết quả:</label>
                        <p class="bg-gray-100 p-2 rounded">
                            <?php
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                echo "<span class='text-blue-500'>GD Thành công</span>";
                                echo "<input type='hidden' name='kq' value='GD Thành công'>";
                            } else {
                                echo "<span class='text-red-500'>GD Không thành công</span>";
                                echo "<input type='hidden' name='kq' value='GD Không thành công'>";
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Thành Công</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const miniCart = JSON.parse(localStorage.getItem('miniCartss')) || [];
        miniCart.splice(0, miniCart.length);
        localStorage.setItem('miniCartss', JSON.stringify(miniCart));
    </script>
</body>
>>>>>>> chi_tiet_blog
</html>
