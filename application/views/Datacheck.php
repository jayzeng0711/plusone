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
    <style>
        .ham,
        .leftfunc {
            display: none;
        }
    </style>
</head>

<?php
$this->load->view('Left_top_bar');
?>
<div class="balance_order_rightfunc" style="width: 100%;">
    <div class="settleform_1">
        <div class="settleform_2">
            <div class="settleform_3">
                <div class="settleform_7">1</div>
                <div class="settleform_8">基礎資料</div>
            </div>
            <div class="settleform_6">
            </div>
            <div class="settleform_3">
                <div class="settleform_4">2</div>
                <div class="settleform_5">資料審核</div>
            </div>
        </div>
    </div>
    <div class="settleform_9">
        <div class="settleform_11" style="margin-bottom: 330px;">
            <div class="settleform_12"><span class="settleform_13">資料審核</span></div>
            <div class="settleform_15">
                <hr class="settleform_16">
            </div>
            <div class="check_div">
                <img class="check_img" src="/plusone88/assets/img/happy.png" alt="">
            </div>
            <div class="check_div2">恭喜您，已完成資料填寫，我們將盡速為您審核資料，感謝您的申請。</div>
        </div>
    </div>
    <div class="bottom_bar">
        <div class="bottom_copy">Plus One © 2021</div>
        <div class="bottom_qa"><a href="/plusone88/plusone/question">常見Q&A</a></div>
        <div class="bottom_cs"><a href="">聯繫客服</a></div>
        <div class="bottom_note"><a href="/plusone88/plusone/privice">協議與條款</a></div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>