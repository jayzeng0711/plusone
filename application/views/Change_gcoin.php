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
        兌換G幣
    </div>
    <div class="balance_wrap">
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">
                    <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                </div>
                <div class="balance_wrap_inner_text">當前餘額</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="gcoin_wrap_bot">
                <div class="gcoin_wrap_bot_one">P幣</div>
                <div class="gcoin_wrap_bot_two">{{ pcoin | money }}</div>
                <div class="gcoin_wrap_bot_three">Ｇ幣</div>
                <div class="gcoin_wrap_bot_four">{{ gcoin | money }}</div>
            </div>
        </div>
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">
                    <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                </div>
                <div class="balance_wrap_inner_text">兌換G幣</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="gcoin_wrap_bot_again">
                <div class="balance_wrap_bot_oneg">輸入P幣</div>
                <div class="balance_wrap_bot_twog" @click.stop="opencoin()">
                    <div class="coin_wrap_bot_twog_div">
                        {{ gacoin | money }}
                    </div>
                    <div class="balance_wrap_bot_twog_div_bot">
                        <img class="balance_wrap_bot_twog_div_botomg" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="coin_many_prices" v-show="manycoin == 1">
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcoinone,0)">
                            {{ gcoinone | money }}
                            <img id="preset_0" class="preset active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcointwo,1)">
                            {{ gcointwo | money }}
                            <img id="preset_1" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcointhree,2)">
                            {{ gcointhree | money }}
                            <img id="preset_2" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcoinfour,3)">
                            {{ gcoinfour | money }}
                            <img id="preset_3" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="balance_wrap_bot_twothr"><img class="balance_wrap_bot_twothrimg" src="/plusone88/assets/img/icon-exchange@2x.png" alt=""></div>
                <div class="balance_wrap_bot_fourg">兌換G幣</div>
                <div class="balance_wrap_bot_fiveg">
                    {{ taicoin | money }}
                </div>
            </div>
            <div class="gcoin_cc_wrap">
                <div class="gcoin_cancel_wrap">
                    取消
                </div>
                <div class="gcoin_confirm_wrap">
                    確認送出
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>