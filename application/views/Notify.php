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
<div class="confirm_account_rightfunc">
    <div class="myorder_wrap">
        <div class="myorder_text">
            設置
        </div>
        <div class="myorder_all_text">
            <a href="/plusone88/plusone/account">
                <div class="together myorder_all" id="myorder_1" @click="myorderchange(1)">帳戶與安全</div>
            </a>
            <a href="/plusone88/plusone/notify">
                <div class="together myorder_alling myorder_speacil_line" id="myorder_2" @click="myorderchange(2)">通知設定</div>
            </a>
            <a href="/plusone88/plusone/block">
                <div class="together myorder_history" id="myorder_3" @click="myorderchange(3)">封鎖名單</div>
            </a>
        </div>
        <div class="account_1">
            <div>
                LINE通知
            </div>
            <div class="account_7">
                <hr class="account_8">
            </div>
            <div>
                當有人留言，或有新訂單時，用LINE通知我
            </div>
            <div style="margin-bottom: 40px;">
                請先看完下方的教學步驟，然後點擊開啟按鈕
            </div>
            <div style="color: #C75A73;margin-bottom: 10px;">
                STEP 1
            </div>
            <div style="margin-bottom: 40px;">
                點擊下方右側的開關按鈕
            </div>
            <div style="color: #C75A73;margin-bottom: 10px;">
                STEP 2
            </div>
            <div style="margin-bottom: 40px;">
                在新開網頁中登入LINE，若您已安裝LINE app，下拉網頁會出現“在LINE中打開”，點擊即可快捷登入。
            </div>
            <div style="color: #C75A73;margin-bottom: 10px;">
                STEP 3
            </div>
            <div style="margin-bottom: 40px;">
                登入成功後，點擊第一個選項『透過1對1聊天接收LINE Notify的通知』
            </div>
            <div style="color: #C75A73;margin-bottom: 10px;">
                STEP 4
            </div>
            <div>
                點擊頁面最下方的『同意並聯動』按鈕
            </div>
            <div class="account_7">
                <hr class="account_8">
            </div>
            <div v-if="lineopen == 0" class="openorclose switch_wrap" @click="circleconfirm()">
                <div class="circle switch"></div>
            </div>
            <div v-else class="openorclose_1 switch_wrap" @click="circleconfirm()">
                <div class="circle_1 switch"></div>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view('Footer');
?>