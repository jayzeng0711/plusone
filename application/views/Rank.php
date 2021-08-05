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

        .balance_order_rightfunc {
            background-color: #D5DDF4;
        }
    </style>
</head>

<?php
$this->load->view('Left_top_bar');
?>
<div class="balance_order_rightfunc" style="width: 100%;">
    <div class="rank_1">
        <div class="rank_2">排行榜</div>
        <div class="rank_3">
            <div class="rank_4 rankcolor rank_active" id="rankcolor_1" @click="changerankme(1)">十大名姬</div>
            <div class="rank_5 rankcolor" id="rankcolor_2" @click="changerankme(2)">十大男神</div>
            <div class="rank_6 rankcolor" id="rankcolor_3" @click="changerankme(3)">十大富豪</div>
            <div class="rank_7 rankcolor" id="rankcolor_4" @click="changerankme(4)">十大風雲人物</div>
        </div>
        <div class="rank_11">
            <div class="rank_8">
                <div class="rank_9" @click="ruletagchange(1)">
                    日榜
                </div>
                <div class="rank_10" @click="ruletagchange(2)">
                    週榜
                </div>
            </div>
            <div class="rank_29">
                <div class="rank_12" @click="rankrulepop = 1">規則說明</div>
                <div class="rank_13">
                    <div class="rank_14">
                        <div class="rank_15">
                            <img class="rank_16" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="rank_17">
                            kiki
                        </div>
                        <div class="rank_18">
                            {{ 1982 | money }}
                        </div>
                    </div>
                    <div class="rank_14" style="transform: translateY(-20px);position: relative;">
                        <div class="rank_15">
                            <img class="rank_16" src="/plusone88/assets/img/img-card8@2x.png" alt="">
                        </div>
                        <div class="rank_17">
                            kiki
                        </div>
                        <div class="rank_18">
                            {{ 1982 | money }}
                        </div>
                        <div class="rank_19">
                            <img class="rank_20" src="/plusone88/assets/img/icon-crown@2x.png" alt="">
                        </div>
                    </div>
                    <div class="rank_14">
                        <div class="rank_15">
                            <img class="rank_16" src="/plusone88/assets/img/img-card1@2x.png" alt="">
                        </div>
                        <div class="rank_17">
                            kikidvfsgsgsgrgererr
                        </div>
                        <div class="rank_18">
                            {{ 1982 | money }}
                        </div>
                    </div>
                </div>
                <div class="rank_21">
                    <img class="rank_22" src="/plusone88/assets/img/img-leaderboard@2x.png" alt="">
                </div>
                <div class="rank_23">
                    <div class="rank_24">
                        <div class="rank_25">4</div>
                        <div class="rank_26">
                            <div class="rank_27">
                                <img class="rank_16" src="/plusone88/assets/img/img-card1@2x.png" alt="">
                            </div>
                            <div class="rank_28">
                                Alice :)vssbsdbsgre
                            </div>
                        </div>
                        <div class="rank_30">
                            {{ 1500 | money }}
                        </div>
                    </div>
                    <div class="rank_24">
                        <div class="rank_25">5</div>
                        <div class="rank_26">
                            <div class="rank_27">
                                <img class="rank_16" src="/plusone88/assets/img/img-card1@2x.png" alt="">
                            </div>
                            <div class="rank_28">
                                Alice :)vssbsdbsgre
                            </div>
                        </div>
                        <div class="rank_30">
                            {{ 1500 | money }}
                        </div>
                    </div>
                    <div class="rank_24">
                        <div class="rank_25">6</div>
                        <div class="rank_26">
                            <div class="rank_27">
                                <img class="rank_16" src="/plusone88/assets/img/img-card1@2x.png" alt="">
                            </div>
                            <div class="rank_28">
                                Alice :)vssbsdbsgre
                            </div>
                        </div>
                        <div class="rank_30">
                            {{ 1500 | money }}
                        </div>
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

<div class="logoutpop" v-show="rankrulepop == 1">
    <div class="logoutpop_text" style="font-size: 22px;margin-bottom: 20px;">
        排行榜規則
    </div>
    <div class="rank_31">
        根據當日陪玩師累積完成的訂單金額進行排名<br>
        每日凌晨12點歸零重新計算<br>
        並於每日凌晨12點05分重新更新數據<br>
    </div>
    <div class="logoutpop_text" style="font-size: 22px;margin-bottom: 20px;">
        獎勵
    </div>
    <div class="rank_31" style="margin-bottom: 30px;">
        可獲得專屬稱*24小時
    </div>
    <div class="logoutpop_div_wrap" style="width: 180px;">
        <div class="logoutpop_confirm" @click="rankrulepop = 0">
            我了解了
        </div>
    </div>
</div>
<div class="phonemaskBg" v-show="rankrulepop == 1" @click="rankrulepop = 0"></div>
<?php
$this->load->view('Footer');
?>