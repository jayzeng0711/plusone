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
        餘額
    </div>
    <div class="balance_wrap">
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">
                    <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                </div>
                <div class="balance_wrap_inner_text">平台幣餘額(P幣)</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="balance_wrap_bot">
                <div class="balance_wrap_bot_one">P幣</div>
                <div class="balance_wrap_bot_two">{{ gacoin | money }}</div>
                <div class="balance_wrap_bot_three">儲值</div>
                <a href="/plusone88/plusone/change_gcoin">
                    <div class="balance_wrap_bot_four">兌換G幣</div>
                </a>
            </div>
        </div>
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">

                </div>
                <div class="balance_wrap_inner_text">平台幣餘額(G幣)</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="balance_wrap_bot">
                <div class="balance_wrap_bot_one">G幣</div>
                <div class="balance_wrap_bot_two">{{ gacoin | money }}</div>
                <div class="balance_wrap_bot_three" style="opacity: 0;cursor: default;">兌換G幣</div>
                <a href="/plusone88/plusone/trade">
                    <div class="balance_wrap_bot_four">交易</div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>