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
    <div class="myorder_wrap_balance">
        銀行卡設定
    </div>
    <div class="balance_wrap">
        <div class="balance_wrap_inner" v-if="bankarr.length > 0">
            <div class="balance_wrap_bot">
                <div class="balance_wrap_bot_one" style="flex: inherit;margin-right: 40px;"><img src="/plusone88/assets/img/icon-visacard@2x.png" alt=""></div>
                <div class="balance_wrap_bot_two" style="flex: inherit;margin-right: 40px;">{{ bankarr[0] }}</div>
                <div class="balance_wrap_bot_two" style="flex: inherit;margin-right: 40px;">{{ bankarr[1] }}</div>
                <div class="balance_wrap_bot_four" style="margin-left:auto;" @click="bankpopfun()">刪除</div>
            </div>
        </div>
        <div class="balance_wrap_inner" style="margin-bottom: 20px;">
            <div class="balance_wrap_bot" @click="addbankcard(1)">
                <div class="balance_wrap_bot_one" style="flex: inherit;margin-right: 40px;cursor: pointer;"><img src="/plusone88/assets/img/icon-addblue@2x.png" alt=""></div>
                <div class="balance_wrap_bot_two" style="flex: inherit;margin-right: 40px;color: #4E9FCC;cursor: pointer;">新增銀行卡</div>
            </div>
        </div>
        <div style="width: 560px;margin: 0 auto;color: #B4B4B4;font-size:12px;">僅限使用一張銀行卡，若您要新增銀行卡，請先刪除目前銀行卡資訊。</div>
    </div>
</div>

<div class="logoutpop" v-show="bankpop == 1">
    <div class="confrimfast_text">
        確定要刪除銀行卡嗎
    </div>
    <div class="logoutpop_div_wrap">
        <div class="logoutpop_cancel" @click="bankfun(0)">
            取消
        </div>
        <div class="logoutpop_confirm" @click="bankfun(1)">
            確定
        </div>
    </div>
</div>
<div class="phoneloginpop" v-show="addbankpop == 1">
    <div class="close" @click="addbankcard(0)">
        <i class="fas fa-times"></i>
    </div>
    <form method="" action="">
        <div class="login-content">
            <div class="login_content_text">
                新增銀行卡
            </div>
            <div class="login_body" style="cursor: pointer;" @click.stop="openmantbank()">
                <div class="mobileinput" style="padding: 0 10px;position: relative;">
                    <div class="edit_div_49" style="position: absolute;right: 20px;z-index: 2;">
                        <img class="edit_div_50" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="login_body_div">
                        <input class="login_body_div_input" value="" v-model="whichbank" placeholder="請選擇綁定銀行" readonly>
                    </div>
                    <div class="many_bank" v-show="openbank == 1">
                        <div class="prices_list" @click.stop="thisbanks('812 台新銀行',0)">
                            812 台新銀行
                            <img id="preset_0" class="preset active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisbanks('822 中國信託',1)">
                            822 中國信託
                            <img id="preset_1" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisbanks('700 郵局',2)">
                            700 郵局
                            <img id="preset_2" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisbanks('803 聯邦銀行',3)">
                            803 聯邦銀行
                            <img id="preset_3" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="error_bank"></div>
            <div class="login_body" style="padding: 0;">
                <div class="mobileinput" style="padding: 0 10px;position: relative;">
                    <div class="login_body_div">
                        <input class="login_body_div_input" value="" style="width: 250px;" v-model="bankcode" @input="check_bankcode()" maxlength="19" placeholder="請輸入完整銀行帳號">
                    </div>
                </div>
            </div>
            <div class="error_bank_acc"></div>
            <div class="login_body_may">
                <div class="login_body" style="padding: 0;">
                    <div class="mobileinput">
                        <div class="mobilenumdiv" @click="opencountry()">
                            <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="/plusone88/assets/img/icon-drop@2x.png">
                        </div>
                        <div class="login_body_div">
                            <input class="login_body_div_input" v-model="phonenumber" value="" placeholder="請輸入手機號碼" maxlength="10" @click="opencountry(1)">
                        </div>
                    </div>
                </div>
                <div class="many_country_wrap" v-show="many_country_wrap == 1">
                    <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                        <div>{{ country.name }}</div>
                        <div>{{ country.number }}</div>
                    </div>
                </div>
            </div>
            <div class="error_message"></div>
            <div class="valid_code">
                <div class="valid_code_div">
                    <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" @click="code_confirm()">
                </div>
                <div :class="codebtndiv" @click.prevent="getcode()">
                    <button type="button">
                        <span v-if="nogetcode">獲取驗證碼</span>
                        <span style="color:#B5B5B5" v-else>重新傳送(<span>{{ reciprocal }}</span>)</span>
                    </button>
                </div>
            </div>
            <div class="code_error" :class="opacity">認證碼輸入錯誤</div>
            <button class="rightnow_login" @click.prevent="bankvaild()">
                確認送出
            </button>
        </div>
    </form>
</div>
<div class="logoutmaskBg" v-show="bankpop == 1" @click="bankfun(0)"></div>
<div class="logoutmaskBg" v-show="addbankpop == 1" @click="addbankcard(0)"></div>
<?php
$this->load->view('Footer');
?>