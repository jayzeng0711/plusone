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
$this->load->view('Special_top');
?>

<!-- left -->
<div class="order_body_content">
    <div class="leftfunc">
        <div class="hot_skill">
            <div class="items">
                <a href="/plusone88/plusone/">
                    <div class="item itemOne">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-home@2x.png">
                        </div>
                        <div>
                            首頁
                        </div>
                    </div>
                </a>
                <a href="/plusone88/plusone/fastorder">
                    <div class="item">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-lightning@2x.png">
                        </div>
                        <div>
                            極速約單
                        </div>
                    </div>
                </a>
                <a href="/plusone88/plusone/dramic">
                    <div class="item">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-wall@2x.png">
                        </div>
                        <div>
                            動態
                        </div>
                    </div>
                </a>
                <div class="split"></div>
            </div>

            <!-- 未登入熱門技能畫面 -->
            <div class="hot_skill_game" v-show="!isLogin">
                <div class="hot_skill_text">
                    熱門技能
                </div>
                <div>
                    <a href="/plusone88/plusone/playerlist" class="nav-item">
                        <div class="image">
                            <img src="/plusone88/assets/img/Group 5.png">
                        </div>
                        <div class="game">
                            英雄聯盟
                        </div>
                    </a>
                </div>
                <div>
                    <a href="/plusone88/plusone/playerlist" class="nav-item">
                        <div class="image">
                            <img src="/plusone88/assets/img/Group 3.png">
                        </div>
                        <div class="game">
                            傳說對決
                        </div>
                    </a>
                </div>
                <div>
                    <a href="/plusone88/plusone/playerlist" class="nav-item">
                        <div class="image">
                            <img src="/plusone88/assets/img/Group 1.png">
                        </div>
                        <div class="game">
                            激鬥峽谷
                        </div>
                    </a>
                </div>
            </div>

            <!-- 登入常用技能畫面 -->
            <div class="hot_skill_game" v-show="isLogin">
                <div class="hot_skill_img">
                    <div class="hot_skill_text">
                        常用技能
                    </div>
                    <div class="hot_skill_img_div">
                        <a href="/plusone88/plusone/skill"><img src="/plusone88/assets/img/Group 823@2x.png"></a>
                    </div>
                </div>
                <div class="s_use_talent">
                    <a href="/plusone88/plusone/playerlist" class="nav-item">
                        <div class="image">
                            <img src="/plusone88/assets/img/Group 5@2x.png">
                        </div>
                        <div class="game">
                            英雄聯盟
                        </div>
                    </a>
                </div>
                <div class="s_use_talent">
                    <a href="/plusone88/plusone/playerlist" class="nav-item">
                        <div class="image">
                            <img src="/plusone88/assets/img/Group 3@2x.png">
                        </div>
                        <div class="game">
                            傳說對決
                        </div>
                    </a>
                </div>
                <div class="s_use_talent">
                    <a href="/plusone88/plusone/playerlist" class="nav-item">
                        <div class="image">
                            <img src="/plusone88/assets/img/Group 1@2x.png">
                        </div>
                        <div class="game">
                            激鬥峽谷
                        </div>
                    </a>
                </div>
                <a href="/plusone88/plusone/skill">
                    <div class="add_use_talent">
                        添加常用技能
                    </div>
                </a>
            </div>
        </div>

        <div class="footer">
            <div class="links">
                <a href="/plusone88/plusone/question">常見Q&A</a>
                <a href="">聯繫客服</a>
                <a href="/plusone88/plusone/privice">協議與條款</a>
            </div>
            <div class="soical">
                <div>
                    <a href="">
                        <img src="/plusone88/assets/img/icon-line@2x.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="/plusone88/assets/img/icon-ig@2x.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="/plusone88/assets/img/icon-fb@2x.png" alt="">
                    </a>
                </div>
            </div>
            <div class="copyright">
                Plus One © 2021
            </div>
        </div>
    </div>

    <div class="leftfunc_mobile">
        <div class="leftfunc_mobile_wrap">
            <div class="mobile_close" @click="closepopmobile()">
                <i class="fas fa-times"></i>
            </div>
            <div class="mobile_headimg" v-show="isLogin">
                <div id="avatar-wrap" class="avatar-wrap">
                    <img id="avatar-wrap_div" class="avatar-wrap_img" src="https://resource.3uplay.com/user-static/8153f22f-d0cd-4f47-b2fa-7725958673e88571443756589800268.png?d=100x100">
                    <div id="avatar-wrap_div_status" :class="status_color"></div>
                </div>
                <div class="mobile_name">
                    Jayzeng
                </div>
            </div>
            <div class="line" v-show="isLogin"></div>
            <div class="items">
                <a href="/plusone88/plusone/fastorder">
                    <div class="item">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-lightning@2x.png">
                        </div>
                        <div>
                            極速約單
                        </div>
                    </div>
                </a>
                <a href="/plusone88/plusone/dramic">
                    <div class="item">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-wall@2x.png">
                        </div>
                        <div>
                            動態
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-home@2x.png">
                        </div>
                        <div>
                            聯繫客服
                        </div>
                    </div>
                </a>
                <a href="/plusone88/plusone/question">
                    <div class="item">
                        <div class="itemimg">
                            <img src="/plusone88/assets/img/icon-home@2x.png">
                        </div>
                        <div>
                            常見Q&A
                        </div>
                    </div>
                </a>
                <div class="item" v-show="!isLogin" @click="openlogonpop()">
                    <div class="itemimg">
                        <img src="/plusone88/assets/img/icon-home@2x.png">
                    </div>
                    <div>
                        登入
                    </div>
                </div>
                <div class="item" v-show="isLogin">
                    <div class="itemimg">
                        <img src="/plusone88/assets/img/icon-home@2x.png">
                    </div>
                    <div>
                        登出
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order_rightfunc">
        <div class="date_back">
            <div class="all_form_style">
                <div class="all_form_title">
                    極速約單
                </div>
                <div class="all_form_bottom">
                    <form action="" class="all_form">
                        <div class="all_form_one">
                            嗨今天想找什麼樣的陪玩師呢
                        </div>
                        <div class="all_form_game" @click="order_models()">
                            {{ gametext }} {{ modeltext }} {{ ranktext }}
                        </div>
                        <div class="all_form_sex_price">
                            <div class="sex_price_wrap">
                                <div class="sex_form" @click="changeSex()">
                                    {{ sex }}
                                </div>
                                <div class="price_form" @click.stop="openPrices()">
                                    <div>
                                        {{ pricetext }}
                                    </div>
                                    <div class="many_prices" v-show="openprice == 1">
                                        <div class="prices_list" @click.stop="thisPrices('單價不限',0)">
                                            單價不限
                                            <img id="preset_0" class="preset active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$200以內',1)">
                                            $200以內
                                            <img id="preset_1" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$300以內',2)">
                                            $300以內
                                            <img id="preset_2" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$350以內',3)">
                                            $350以內
                                            <img id="preset_3" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all_form_sex_price">
                            <div class="sex_price_wrap">
                                <div class="sex_form">
                                    數量 (局)
                                </div>
                                <div class="price_form puls_or_mins">
                                    <div class="order_puls" @click="deGame()">
                                        -
                                    </div>
                                    <div>
                                        {{ gametotal }}
                                    </div>
                                    <div class="order_puls" @click="addGame()">
                                        +
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all_form_game_input_div">
                            <input class="all_form_game_input" type="text" v-model="orderNote" placeholder="備註(選填)：像是”希望聲音甜一點”這類的">
                        </div>
                        <div class="order_form_btn_div">
                            <button class="order_form_btn" @click.prevent="opedorder()">我要約單</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modelpop" v-show="selectmodel == 1">
        <div class="modelpop_top">
            <div class="modelpop_top_skill">
                技能
            </div>
            <div class="modelpop_top_div">
                <div class="modelpop_top_list modelpop_top_list_active" id="modelpop_top_list_1" @click="changegame(1,'英雄聯盟')">
                    英雄聯盟
                </div>
                <div class="modelpop_top_list" id="modelpop_top_list_2" @click="changegame(2,'聯盟戰旗')">
                    聯盟戰旗
                </div>
                <div class="modelpop_top_list" id="modelpop_top_list_3" @click="changegame(3,'絕地求生')">
                    絕地求生
                </div>
            </div>
        </div>
        <div class="modelpop_top">
            <div class="modelpop_top_skill">
                模式
            </div>
            <div class="modelpop_top_div">
                <div class="modelpop_middle_list modelpop_top_list_active" id="modelpop_middle_list_1" @click="changemodel(1,'不限')">
                    不限
                </div>
                <div class="modelpop_middle_list" id="modelpop_middle_list_2" @click="changemodel(2,'NG')">
                    NG
                </div>
                <div class="modelpop_middle_list" id="modelpop_middle_list_3" @click="changemodel(3,'ARAM')">
                    ARAM
                </div>
                <div class="modelpop_middle_list" id="modelpop_middle_list_4" @click="changemodel(4,'無限死鬥')">
                    無限死鬥
                </div>
            </div>
        </div>
        <div class="modelpop_top">
            <div class="modelpop_top_skill">
                段位
            </div>
            <div class="modelpop_top_div">
                <div class="modelpop_bottom_list modelpop_top_list_active" id="modelpop_bottom_list_1" @click="rankmodel(1,'不限')">
                    不限
                </div>
                <div class="modelpop_bottom_list" id="modelpop_bottom_list_2" @click="rankmodel(2,'青銅')">
                    青銅
                </div>
                <div class="modelpop_bottom_list" id="modelpop_bottom_list_3" @click="rankmodel(3,'白銀')">
                    白銀
                </div>
                <div class="modelpop_bottom_list" id="modelpop_bottom_list_4" @click="rankmodel(4,'黃金')">
                    黃金
                </div>
            </div>
        </div>
        <div class="modelpop_firm">
            <button class="modelpop_firm_btn" @click="order_confirm()">確定</button>
        </div>
    </div>
    <div class="logoutpop" v-show="deterconfirm == 1">
        <div class="confrimfast_text">
            請確認您的約單要求
        </div>
        <div class="confrimfast_text_one">
            選人時間為15分鐘，若您超時取消<br>可能會扣取$5~$10以補償陪玩師喔
        </div>
        <div class="confrimfast_text_two">{{ gametext }}、{{ modeltext }}、{{ ranktext }}</div>
        <div class="confrimfast_text_three">
            {{ sex }}、{{ pricetext }}、局*{{ gametotal }}、{{ orderNote }}
        </div>
        <div class="logoutpop_div_wrap">
            <div class="logoutpop_cancel" @click="cancelorder()">
                取消
            </div>
            <div class="logoutpop_confirm" @click="confirmorder()">
                確定
            </div>
        </div>
    </div>
    <div class="logoutmaskBg" v-show="selectmodel == 1"></div>
    <div class="logoutmaskBg" v-show="deterconfirm == 1"></div>
    <?php
    $this->load->view('Footer');
    ?>