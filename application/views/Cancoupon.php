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
    <div class="myorder_wrap">
        <div class="coupon_text">
            可用優惠券
        </div>
        <div class="myorder_all_text">
            <div class="together myorder_all" style="cursor: initial">優惠券列表</div>
        </div>
        <div class="myorder_data_wrap" v-show="all_order == 1">
            <div class="myorder_data_title">
                <div>序</div>
                <div>名稱</div>
                <div>數量</div>
                <div>取得日期</div>
                <div>使用期限</div>
                <div>使用狀態</div>
            </div>
            <div class="order_data_hr_div">
                <hr class="order_data_hr">
            </div>
            <div class="myorder_data_title" v-for="(cou,i) in coupon">
                <div>{{ cou.id }}</div>
                <div>{{ cou.name}}</div>
                <div>{{ cou.num }}</div>
                <div>{{ cou.getdate }}</div>
                <div>{{ cou.lastdate }}</div>
                <div v-if="cou.status == 0" style="cursor: pointer;" @click="couponopen(cou.id)">未使用</div>
                <div v-else style="color: #878787">已使用</div>
            </div>
            <div class="myorder_data_img_div" v-if="coupon.length == 0">
                <img class="myorder_data_img" src="/plusone88/assets/img/icon-nocoupon@2x.png" alt="">
            </div>
        </div>

        <div class="myorder_data_wraping" v-show="all_order == 2">
            <div class="myorder_data_titleing">
                <div class="myorder_data_titleing_div">
                    <img class="myorder_data_titleing_img" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                </div>
                <div class="myorder_data_titleing_look">
                    正在尋找陪玩師
                </div>
            </div>
            <div class="order_data_hr_div_two">
                <hr class="order_data_hr_two">
            </div>
            <div class="someone_look_wrap">
                <div class="someone_look_flex">
                    <div class="someone_look_flexdiv">
                        <img class="someone_look_fleximg" src="/plusone88/assets/img/Group 5@2x.png">
                    </div>
                    <div class="someone_look_note">
                        <div class="someone_look_notetop">英雄聯盟 單價不限 小時*1</div>
                        <div class="someone_look_notebot">模式不限，段位不限，女生<br>備註：#聲音好聽 #會聊天</div>
                    </div>
                    <div class="someone_look_notime">
                        <div class="someone_look_notimediv">
                            <div class="someone_look_notimediv_text">倒數計時</div>
                            <div class="someone_look_notimediv_time">11:27</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="myorder_data_wraping" v-show="all_order == 3">
            <div class="someone_look_wrap">
                <div class="someone_look_flex">
                    <div class="someone_look_flexdiv">
                        <img class="someone_look_fleximg" src="/plusone88/assets/img/img-profile@2x.png">
                    </div>
                    <div class="someone_look_note">
                        <div class="someone_look_notetop">完成約單</div>
                        <div class="someone_look_notebot">英雄聯盟，段位不限，女生，$150/1小時*1</div>
                    </div>
                    <div class="someone_look_notime_three">
                        <div class="someone_look_notimediv">
                            <div class="someone_look_notimediv_text_three">今天 11:27</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="logoutpop" v-show="couponpop == 1">
    <div class="couponpop_text">
        您確認要使用優惠券嗎?
    </div>
    <div class="couponpop_note">
        確認使用後將無法取消，請您再次確認?
    </div>
    <div class="logoutpop_div_wrap">
        <div class="logoutpop_cancel" @click="couponmaskBgbtn()">
            取消
        </div>
        <div class="logoutpop_confirm" @click="confirmcoupon()">
            確定
        </div>
    </div>
</div>
<div class="logoutmaskBg" v-show="couponpop == 1" @click="couponmaskBgbtn()"></div>
<?php
$this->load->view('Footer');
?>