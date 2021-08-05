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
<div class="confirm_account_rightfunc">
    <div class="myorder_wrap">
        <div class="myorder_text">
            設置
        </div>
        <div class="myorder_all_text">
            <a href="/plusone88/plusone/account">
                <div class="together myorder_all" id="myorder_1" @click="myorderchange(1)">帳戶與安全</div>
            </a>
            <a href="/plusone88/plusone/notify">
                <div class="together myorder_alling" id="myorder_2" @click="myorderchange(2)">通知設定</div>
            </a>
            <a href="/plusone88/plusone/block">
                <div class="together myorder_history myorder_speacil_line" id="myorder_3" @click="myorderchange(3)">封鎖名單</div>
            </a>
        </div>
    </div>
    <div class="block_wrap">
        <div class="block_div1" v-if="blockpeople.length == 0">
            <img class="block_div2" src="/plusone88/assets/img/block@2x.png">
        </div>
        <div v-else class="block_div3">
            <div class="block_div4">
                <div class="block_div5" :id="'block_'+i" v-for="(list, i) in blockpeople">
                    <div class="block_div6">
                        <img class="block_div7" :src="'/plusone88/assets/img/'+list.img">
                    </div>
                    <div class="block_div8">
                        {{ list.name }}
                    </div>
                    <div class="block_div9" @click="deleteblock(list.id,i)">
                        解除封鎖
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>