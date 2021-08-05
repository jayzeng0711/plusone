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
    <div class="settleform_9" style="margin-top: 50px;">
        <div class="settleform_11">
            <div class="settleform_12"><span class="settleform_13">常見問題</span></div>
            <div class="settleform_15">
                <hr class="settleform_16">
            </div>
            <div class="question_1">
                <div class="question_4">
                    <p class="question_2">申請入駐</p>
                    <div class="question_5">
                        <p class="question_3">1. 如何申請入駐</p>
                        <p class="question_3">申請入駐已經全面開放啦，APP和電腦端都可以入駐了喔～</p>
                    </div>
                    <div class="question_5">
                        <p class="question_3">2. 申請入駐時技能只能申請一項嗎?</p>
                        <p class="question_3">申請入駐過程中，可以申請一項技能，入駐成功後目前開放的熱門技能都可以申請哦，後續還會開放更多技能，敬請期待!</p>
                    </div>
                    <div class="question_5">
                        <p class="question_3">3. 入駐審核需要多久？</p>
                        <p class="question_3">工作日24小時內會審核完畢喔。!</p>
                    </div>
                    <div class="question_5">
                        <p class="question_3">4. 如何知道自己的技能審核通過了呢？</p>
                        <p class="question_3">技能審核通過後，您會收到官方通知審核通過結果，在App或者網頁的對話圖標可看到系統通知喔~!</p>
                    </div>
                </div>
                <div class="question_4">
                    <p class="question_2">個人信息設置</p>
                    <div class="question_5">
                        <p class="question_3">1. 個人頁面的設置</p>
                        <p class="question_3">目前只有app端有個人頁面的設置喔，網頁端只會展示相冊及技能簡介。</p>
                    </div>
                </div>
                <div class="question_4">
                    <p class="question_2">技能設置</p>
                    <div class="question_5">
                        <p class="question_3">1. 如何申請技能？</p>
                        <p class="question_3">未入駐的用戶可以點擊“申請入駐”進行首個技能申請，成為陪玩師後可以在“技能管理”處進行技能的添加與修改喔~</p>
                    </div>
                    <div class="question_5">
                        <p class="question_3">2. 想修改牌位，要怎麼修改呢?</p>
                        <p class="question_3">修改牌位需要重新提交一次技能審核喔。</p>
                    </div>
                    <div class="question_5">
                        <p class="question_3">3. 為什麼有些人的服務時間是半小時跟一小時?服務時間要怎麼調整？</p>
                        <p class="question_3">時間單位是根據技能的不同有各自不同的計算方式。EX：端遊英雄聯盟是以一小時為單位，手游傳說對決是以半小時為單位。</p>
                    </div>
                </div>
                <div class="question_4">
                    <p class="question_2">帳號</p>
                    <div class="question_5">
                        <p class="question_3">1. 換了手機號碼現在收不到驗證碼無法登入帳號？</p>
                        <p class="question_3">請通過原號碼收取驗證碼，登錄App後自行進行手機帳號更換。</p>
                    </div>
                    <div class="question_5">
                        <p class="question_3">2. 請問只能使用手機號碼登入嗎？</p>
                        <p class="question_3">目前支持多種第三方登入方式，包括 Line, Facebook, Gmail。</p>
                    </div>
                </div>
            </div>
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