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
    <div class="lastorder_1">
        <div class="lastorder_2">請確認訂單</div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_3">
            <div class="lastorder_4">
                <div class="lastorder_5"><img class="lastorder_6" src="/plusone88/assets/img/img-card3@2x.png" alt=""></div>
                <div class="lastorder_7">cc</div>
            </div>
            <div class="lastorder_8">
                傳說對決
            </div>
            <div class="lastorder_9">
                <div class="lastorder_10" @click="countorderde()">-</div>
                <div class="lastorder_11">{{ orderNUM }}</div>
                <div class="lastorder_12" @click="countorder()">+</div>
            </div>
            <div class="lastorder_13">
                {{ ordersinprice }}幣/半小時
            </div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_14">
            <div class="lastorder_15">計費模式</div>
            <div class="lastorder_16">
                <div class="lastorder_17">標準模式</div>
                <div class="lastorder_18">130幣/半小時</div>
                <div class="lastorder_19"><img class="lastorder_20" src="/plusone88/assets/img/icon-rightarrow@2x.png" alt=""></div>
            </div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_21">
            <div class="lastorder_22">付款方式&emsp;<span class="lastorder_51" v-show="paymentconord == 1">請選擇付款方式</span></div>
            <div class="lastorder_23">
                <div class="store_9" style="justify-content: start;">
                    <div class="store_10 lastorder_25" id="bank_6" @click="selecbank(6,'P幣支付')">
                        <div><span>P幣支付</span><br><span class="lastorder_24">100幣可用</span></div>
                        <div class="store_8 bank_1" id="bankcheck_6">
                            <label for="checkbox__original" class="el-checkbox remember-check">
                                <span class="el-checkbox__input">
                                    <span class="el-checkbox__inner stroecheck">
                                        <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="store_10 lastorder_25" id="bank_1" @click="selecbank(1,'信用卡')">
                        信用卡
                        <div class="store_8 bank_1" id="bankcheck_1">
                            <label for="checkbox__original" class="el-checkbox remember-check">
                                <span class="el-checkbox__input">
                                    <span class="el-checkbox__inner stroecheck">
                                        <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="store_10 lastorder_25" id="bank_2" @click="selecbank(2,'ATM轉帳')">
                        ATM轉帳
                        <div class="store_8 bank_1" id="bankcheck_2">
                            <label for="checkbox__original" class="el-checkbox remember-check">
                                <span class="el-checkbox__input">
                                    <span class="el-checkbox__inner stroecheck">
                                        <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="store_10 lastorder_25" id="bank_3" @click="selecbank(3,'超商代碼繳費')">
                        超商代碼繳費
                        <div class="store_8 bank_1" id="bankcheck_3">
                            <label for="checkbox__original" class="el-checkbox remember-check">
                                <span class="el-checkbox__input">
                                    <span class="el-checkbox__inner stroecheck">
                                        <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="store_10 lastorder_25" id="bank_4" @click="selecbank(4,'支付寶')">
                        支付寶
                        <div class="store_8 bank_1" id="bankcheck_4">
                            <label for="checkbox__original" class="el-checkbox remember-check">
                                <span class="el-checkbox__input">
                                    <span class="el-checkbox__inner stroecheck">
                                        <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="store_10 lastorder_25" id="bank_5" @click="selecbank(5,'APP Store')">
                        APP Store
                        <div class="store_8 bank_1" id="bankcheck_5">
                            <label for="checkbox__original" class="el-checkbox remember-check">
                                <span class="el-checkbox__input">
                                    <span class="el-checkbox__inner stroecheck">
                                        <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div>
            <div class="balance_wrap_bot" @click="addbankaccpop = 1">
                <div class="balance_wrap_bot_one" style="flex: inherit;margin-right: 40px;cursor: pointer;"><img src="/plusone88/assets/img/icon-addblue@2x.png" alt=""></div>
                <div class="balance_wrap_bot_two" style="flex: inherit;margin-right: 40px;color: #4E9FCC;cursor: pointer;">新增信用卡</div>
            </div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_26">
            <div class="lastorder_35">
                <label for="credcard" class="lastorder_27">
                    <div class="lastorder_28">
                        <div class="lastorder_29">
                            <input class="lastorder_30" value="1" v-model="odjdvalu" type="radio" name="credcard" id="credcard">
                        </div>
                        <div class="lastorder_31">
                            <img class="lastorder_32" src="/plusone88/assets/img/icon-visacard@2x.png" alt="">
                        </div>
                        <div class="lastorder_34">
                            5211 **** **** 6322
                        </div>
                    </div>
                </label>
            </div>
            <div class="lastorder_36" @click="delete_addbank = 1">
                刪除
            </div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_26">
            <div class="lastorder_35">
                <label for="credcard_1" class="lastorder_27">
                    <div class="lastorder_28">
                        <div class="lastorder_29">
                            <input class="lastorder_30" v-model="odjdvalu" value="2" type="radio" name="credcard" id="credcard_1">
                        </div>
                        <div class="lastorder_31">
                            <img class="lastorder_32" src="/plusone88/assets/img/icon-visacard@2x.png" alt="">
                        </div>
                        <div class="lastorder_34">
                            5211 **** **** 6322
                        </div>
                    </div>
                </label>
            </div>
            <div class="lastorder_36" @click="delete_addbank = 1">
                刪除
            </div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_43">
            <div class="lastorder_44">滿贈優惠</div>
            <div class="lastorder_45">買五送一</div>
        </div>
        <div class="lastorder_43">
            <div class="lastorder_44">優惠券</div>
            <div class="lastorder_46">目前沒有可用優惠券 <img class="lastorder_47" src="/plusone88/assets/img/icon-rightarrow@2x.png" alt=""></div>
        </div>
        <div class="lastorder_43" style="margin-bottom: 5px;">
            <div class="lastorder_44">電子信箱</div>
            <div class="lastorder_48"><input class="lastorder_49" v-model="usermail" @input="vaild_email()" type="email" placeholder="請填寫付款人電子信箱"></div>
        </div>
        <div class="lastorder_43" style="margin-bottom: 5px;" v-show="email_error == 1">
            <div class="lastorder_44" style="opacity: 0">電子信箱</div>
            <div class="lastorder_51">請填寫正確的電子郵件格式</div>
        </div>
        <div class="lastorder_43">
            <div class="lastorder_44" style="opacity: 0">電子信箱</div>
            <div class="lastorder_50">填寫付款人電子信箱，用以收取支付通知信與電子發票。</div>
        </div>
        <div class="balance_wrap_hr_div">
            <hr class="balance_wrap_hr">
        </div>
        <div class="lastorder_52">
            <div class="lastorder_53">總價 (半小時 * {{ orderNUM }})&emsp;{{ ordersinprice*orderNUM }}幣</div>
            <div class="lastorder_54">實付&emsp;{{ ordersinprice*orderNUM }}幣</div>
        </div>
        <div class="lastorder_55">
            <button class="lastorder_56" @click="postorderone()">
                提交訂單
            </button>
        </div>
    </div>

    <div class="bottom_bar">
        <div class="bottom_copy">Plus One © 2021</div>
        <div class="bottom_qa"><a href="/plusone88/plusone/question">常見Q&A</a></div>
        <div class="bottom_cs"><a href="">聯繫客服</a></div>
        <div class="bottom_note"><a href="/plusone88/plusone/privice">協議與條款</a></div>
    </div>
</div>

<div class="phoneloginpop" v-show="addbankaccpop == 1">
    <div class="close" @click="addbankaccpop = 0">
        <i class="fas fa-times"></i>
    </div>
    <form method="" action="">
        <div class="login-content">
            <div class="login_content_text">
                新增信用卡
            </div>
            <div class="lastorder_37">
                <div class="lastorder_38">信用卡卡號</div>
                <div class="lastorder_39"><img class="lastorder_40" src="/plusone88/assets/img/icon-visacard@2x.png" alt=""></div>
            </div>
            <div class="lastorder_41">
                <input class="lastorder_42" type="text" id="addbankacc" v-model="addbankacc" maxlength="19" placeholder="請輸入銀行賬號" @input="formatCardNumber()">
            </div>
            <div class="code_error" class="opacity" style="opacity: 0">信用卡卡號不正確，請重新確認!</div>
            <button class="rightnow_login" @click.prevent="addbankfun()" style="margin-top: 40px">
                添加信用卡
            </button>
        </div>
    </form>
</div>

<div class="logoutpop" v-show="delete_addbank == 1">
    <div class="logoutpop_text">
        確定要刪除銀行卡嗎
    </div>
    <div class="logoutpop_div_wrap">
        <div class="logoutpop_cancel" @click="delete_addbank = 0">
            取消
        </div>
        <div class="logoutpop_confirm" @click="delete_addbank = 0">
            確定
        </div>
    </div>
</div>
<div class="phonemaskBg" v-show="delete_addbank == 1" @click="delete_addbank = 0"></div>
<div class="logoutmaskBg" v-show="addbankaccpop == 1" @click="addbankaccpop = 0"></div>
<?php
$this->load->view('Footer');
?>