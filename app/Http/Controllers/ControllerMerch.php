<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMerch extends Controller
{
    public function data(){
        $list = [
            'product' => ["First Step Goods Selen Tatsuki" , "NIJISANJI EN Petit vol.1 Selen Tatsuki"],
            'price' => ["From $3.40 USD", "From $2.24 USD"],
            'image' => ["https://cdn.shopify.com/s/files/1/0577/1254/1891/products/r6X4L45Ai74q2gMZ_200x.jpg?v=1639637820"
            , "https://cdn.shopify.com/s/files/1/0577/1254/1891/products/KhDu2KR-CYMFtpw_-6Th_200x.jpg?v=1663681368"],
            'status' => ["Open", "Closed"]
        ];
        return view('menu', $list);
    }
}
