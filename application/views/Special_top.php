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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link href="https://www.setn.com/resources/OwlCarousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://www.setn.com/resources/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app" v-cloak @click="all_show($event)">
        <!-- 未登入畫面 -->
        <div class="header" v-show="!isLogin">
            <div class="header_left">
                <!-- 電腦版漢堡選單 -->
                <div for="nav-toggle" class="ham" @click="leftfuncshowornone('web')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>

                <!-- 手機版漢堡選單 -->
                <div for="nav-toggle" class="ham mobile_ham" @click="leftfuncshowornone('mobile')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>

                <div>
                    <a href="/plusone88/plusone">
                        <img class="logo_img" src="/plusone88/assets/img/Plus-one_LOGO.jpg">
                    </a>
                </div>
                <div class="search">
                    <!-- 搜尋功能 -->
                    <form action="" method="">
                        <input class="searchinput" name="search" type="text" placeholder="陪玩師暱稱或ID">
                    </form>
                    <!-- 搜尋功能 -->
                </div>
                <div class="searchbtn">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="header_right">
                <div class="scan">
                    手機掃描
                    <img class="qrcode" src="/plusone88/assets/img/qrcode.png" alt="">
                </div>
                <div class="login_register" @click="openlogonpop()">
                    登入/註冊
                </div>
            </div>
        </div>

        <!-- 登入畫面 -->
        <div class="header" v-show="isLogin">
            <div class="header_left">
                <!-- 電腦版漢堡選單 -->
                <div for="nav-toggle" class="ham" @click="leftfuncshowornone('web')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>

                <!-- 手機版漢堡選單 -->
                <div for="nav-toggle" class="ham mobile_ham" @click="leftfuncshowornone('mobile')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>
                <div>
                    <a href="/plusone88/plusone">
                        <img src="/plusone88/assets/img/Plus-one_LOGO.jpg" width="120px">
                    </a>
                </div>
                <div class="search">
                    <!-- 搜尋功能 -->
                    <form action="" method="">
                        <input class="searchinput" name="search" type="text" placeholder="陪玩師暱稱或ID">
                    </form>
                    <!-- 搜尋功能 -->
                </div>
                <div class="searchbtn">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="header_right">
                <div class="scan">
                    手機掃描
                    <img class="qrcode" src="/plusone88/assets/img/qrcode.png" alt="">
                </div>
                <div>
                    <img width="60" src="/plusone88/assets/img/player-tag@2x.png" alt="">
                </div>
                <a href="/plusone88/plusone/storedvalue">
                    <div class="balance">
                        <img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png">
                        <span class="nowmoney">25</span>
                        <div class="moneyplus">
                            <img src="/plusone88/assets/img/Group 474@2x.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="/plusone88/member/dialoag">
                    <div class="message">
                        <img width="23" style="height: 23px;vertical-align: middle" src="/plusone88/assets/img/icon-msg@2x.png">
                        <span class="messagenum">1</span>
                    </div>
                </a>
                <div id="avatar-wrap" class="avatar-wrap">
                    <img id="avatar-wrap_div" class="avatar-wrap_img" src="https://resource.3uplay.com/user-static/8153f22f-d0cd-4f47-b2fa-7725958673e88571443756589800268.png?d=100x100">
                    <div id="avatar-wrap_div_status" :class="status_color"></div>
                    <div id="preson_data" class="preson_data" v-show="preson_data == 1">
                        <div style="width: 100%" v-for="(activity_list, i) in activity_lists">
                            <a :href="activity_list.link" class="all_activity">
                                <div class="all_activity_icon">
                                    <img :src="activity_list.img" alt="">
                                </div>
                                <div class="all_activity_text">
                                    {{ activity_list.title }}
                                </div>
                            </a>
                        </div>
                        <div id="login_out" style="width: 100%" @click="logoutpop()">
                            <div class="all_activity">
                                <div class="all_activity_icon">
                                    <img src="/plusone88/assets/img/icon-logout@2x.png" alt="">
                                </div>
                                <div class="all_activity_text">
                                    登出
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>