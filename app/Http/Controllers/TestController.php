<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
     public function md5test()
    {
        echo "接收端》》》》》"; echo '</br>';
        echo '<pre>';print_r($_GET);echo '</pre>';

        $key = "1905";          // 计算签名的KEY 与发送端保持一致

        //验签
        $data = $_GET['data'];  //接收到的数据
        $signature = $_GET['signature'];    //发送端的签名

        // 计算签名
        echo "接收到的签名：". $signature;echo '</br>';
        $s = md5($data.$key);
        echo '接收端计算的签名：'. $s;echo '</br>';

        //与接收到的签名 比对
        if($s == $signature)
        {
            echo "验签通过";
        }else{
            echo "验签失败";
        }
 
    }
}
