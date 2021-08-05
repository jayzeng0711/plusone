<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/plusone88/assets/css/reset.css">
    <link rel="stylesheet" href="/plusone88/assets/css/animate.min.css">
    <link rel="stylesheet" href="/plusone88/assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link href="https://www.setn.com/resources/OwlCarousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://www.setn.com/resources/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</head>

<?php
$this->load->view('Left_top_bar');
?>
<div class="balance_order_rightfunc">
    <div class="myorder_wrap">
        <div class="coupon_text">
            收益報表
        </div>
        <div class="myorder_data_wrap" v-show="all_order == 1">
            <div class="myorder_data_title">
                <div>序</div>
                <div>單號</div>
                <div>陪玩師</div>
                <div>遊戲</div>
                <div>接單日期/時間</div>
                <div>數量</div>
                <div>金額</div>
                <div>平台費%</div>
                <div>餘額</div>
            </div>
            <div class="order_data_hr_div">
                <hr class="order_data_hr">
            </div>
            <div class="myorder_data_title" v-for="(r,i) in report">
                <div>{{ r.id }}</div>
                <div>{{ r.ordermember}}</div>
                <div><a href="" style="color: #4E9FCC">{{ r.played }}</a></div>
                <div>{{ r.game }}</div>
                <div>{{ r.getdate }}</div>
                <div>{{ r.num }}</div>
                <div>{{ r.money | NTDmoney }}</div>
                <div>{{ r.lostmoney}}</div>
                <div>{{ r.havemoney | NTDmoney}}</div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>