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
    <div class="balance_wrap">
        <div class="store_wrap_inner">
            <div class="store_1">
                <div class="balance_wrap_inner_t">
                    <div class="balance_wrap_inner_text">儲值P幣</div>
                </div>
                <div class="balance">
                    <img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png">
                    <span class="nowmoney">25</span>
                </div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="store_2">
                儲值金額 <span class="settleform_34" v-show="money_error == 1">請選擇儲值金額</span>
            </div>
            <div class="store_3">
                <div class="store_4" id="store_1" @click="selecstore(1,100)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">100 P幣</div>
                    <div class="store_7">NT$102</div>
                    <div class="store_8 checkstore" id="check_1">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_2" @click="selecstore(2,300)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">300 P幣</div>
                    <div class="store_7">NT$307</div>
                    <div class="store_8 checkstore" id="check_2">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_3" @click="selecstore(3,500)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">500 P幣</div>
                    <div class="store_7">NT$511</div>
                    <div class="store_8 checkstore" id="check_3">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_4" @click="selecstore(4,1000)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">1000 P幣</div>
                    <div class="store_7">NT$1023</div>
                    <div class="store_8 checkstore" id="check_4">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_5" @click="selecstore(5,3000)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">3000 P幣</div>
                    <div class="store_7">NT$3068</div>
                    <div class="store_8 checkstore" id="check_5">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_6" @click="selecstore(6,5000)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">5000 P幣</div>
                    <div class="store_7">NT$5113</div>
                    <div class="store_8 checkstore" id="check_6">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_7" @click="selecstore(7,10000)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">10000 P幣</div>
                    <div class="store_7">NT$10225</div>
                    <div class="store_8 checkstore" id="check_7">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="store_4" id="store_8" @click="selecstore(8,2000)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6">2000 P幣</div>
                    <div class="store_7">NT$20500</div>
                    <div class="store_8 checkstore" id="check_8">
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
            <div class="store_2" style="margin-top:20px">儲值方式 <span class="settleform_34" v-show="pay_error == 1">請選擇付款方式</span></div>
            <div class="store_9">
                <div class="store_10" id="bank_1" @click="selecbank(1,'信用卡')">
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
                <div class="store_10" id="bank_2" @click="selecbank(2,'ATM轉帳')">
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
                <div class="store_10" id="bank_3" @click="selecbank(3,'超商代碼繳費')">
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
                <div class="store_10" id="bank_4" @click="selecbank(4,'支付寶')">
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
                <div class="store_10" id="bank_5" @click="selecbank(5,'APP Store')">
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
            <div class="store_2">電子信箱 <span class="settleform_34" v-show="email_error == 1">請填寫正確的電子郵件格式</span></div>
            <div class="store_11 store_2">填寫付款人電子信箱，用以收取支付通知信與電子發票。</div>
            <div class="store_12"><input class="store_13" type="email" placeholder="請填寫付款人電子信箱" v-model="usermail"></div>
            <div class="store_14">
                <div class="store_15" @click="poststore()">確認儲值</div>
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