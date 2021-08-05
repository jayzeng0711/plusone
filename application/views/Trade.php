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
    <div class="trade_wrap_balance">
        交易
    </div>
    <div class="balance_wrap">
        <div class="trade_wrap_inner">
            <div class="trade_wrap_inner_t">
                <div class="trade_wrap_inner_text" style="position: relative">搜尋好友
                    <div class="trade_many_prices" v-show="friendsopen == 1">
                        <div class="trade_prices_list" v-for="(list, i) in allFriends" @click.stop="tradefriends(list)">
                            {{ list }}
                        </div>
                    </div>
                </div>
                <div class="trade_wrap_1">
                    <div class="trade_wrap_2">
                        <div class="trade_wrap_3" @click.stop="goodfriend()">
                            <div class="trade_wrap_4">
                                <div class="trade_name" v-for="(single, i) in fiveFriends" v-if="fiveFriends.length != i+1">
                                    {{ single }},
                                </div>
                                <div class="trade_name" v-else>
                                    {{ single }}
                                </div>
                            </div>
                            <div class="trade_wrap_6">
                                <img class="trade_wrap_7" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="trade_wrap_8">(可多選)</div>
                </div>
                <div class="trade_wrap_10" @click.stop="goodfriendreset()">
                    取消
                </div>
                <div class="trade_wrap_9" @click.stop="goodfriendclose()">
                    確定
                </div>
            </div>
        </div>
        <div class="trade_bottom_1">
            <div class="trade_bottom_2">
                進行交易
            </div>
            <div class="trade_bottom_3">
                <div class="trade_bottom_4">
                    G幣
                </div>
                <div class="trade_bottom_5">
                    {{ gacoin | money }}
                </div>
                <div class="trade_bottom_6">
                    <div class="trade_bottom_7" v-for="(times, i) in fivetime">
                        <div class="trade_bottom_8">
                            <img class="trade_bottom_9" src="/plusone88/assets/img/Group 213@2x.png" alt="">
                            <div class="trade_many_prices_bottom" v-show="friendsopenbottom == i+1">
                                <div class="trade_prices_list" v-for="(listbot, j) in allFriends" @click.stop="tradefriendsbottom(i,listbot)">
                                    {{ listbot }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="trade_bottom_10" @click.stop="muti_fri(i+1)">
                                <div class="trade_bottom_11">
                                    <div class="trade_bottom_12">
                                        {{ emptyFri[i] }}
                                    </div>
                                </div>
                                <div class="trade_bottom_13">
                                    <img class="trade_bottom_14" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="trade_bottom_15">
                                確定
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>