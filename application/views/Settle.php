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
    <div class="settle_wrap">
        <img class="settle_img" src="/plusone88/assets/img/Group 482@2x.png" alt="">
        <div class="settle_1">
            <div class="settle_2" @click="opensetpop(1)">
                立即申請
            </div>
            <div class="settle_10">
                <div class="settle_11">
                    <div style="line-height: 1">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner" :class="ischecked">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="rememberme_text">
                        我已閱讀並同意《Plus One陪玩師行為守則》《服務協議與隱私條款》
                    </div>
                </div>
                <div class="settle_12">
                    <p class="settle_5">
                        我們希望你是～
                    </p>
                    <p class="settle_6">
                        活動開朗，超愛聊天
                    </p>
                    <p class="settle_7">
                        熱愛遊戲，也熱愛交友
                    </p>
                    <p class="settle_8">
                        無論出於好奇或職業，都希望把陪玩師做好
                    </p>
                    <p class="settle_9">
                        如果你是這樣的人，趕快申請入駐，開啟你的陪玩師之旅吧！
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="logoutpop" v-show="settlepop == 1">
        <div class="logoutpop_text" style="padding: 0 40px;">
            入駐Plus One的陪玩師需為年滿二十歲
            及以上之完全行為能力人，已閱讀了解
            並同意本服務協議之所有內容及其後之
            修改變更，方得使用本平台之服務。
        </div>
        <div class="logoutpop_div_wrap">
            <div class="logoutpop_cancel" @click="opensetpop(0)">
                退出
            </div>
            <div class="logoutpop_confirm">
                <a href="/plusone88/plusone/settleform" style="display:block">我同意</a>
            </div>
        </div>
    </div>
    <div class="logoutmaskBg" v-show="settlepop == 1" @click="opensetpop(0)"></div>
</div>
<?php
$this->load->view('Footer');
?>