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

<div class="search_rightfunc">
    <div class="search_wrap">
        <div class="playerlist_1">
            <div class="playerlist_2">
                <div class="playerlist_3">
                    <div class="playerlist_6"><img src="/plusone88/assets/img/Group 1@2x.png" alt=""></div>
                    <div class="playerlist_7">激鬥峽谷</div>
                </div>
                <div class="playerlist_4"><a class="playerlist_5" href="/plusone88/plusone/skill">全部技能</a></div>
            </div>
        </div>
        <div class="playerlist_8">
            <div class="playerlist_9">
                <div class="playerlist_10 playerlist_10_active" id="playerlist_1" @click="smallTag(1)">十大名姬</div>
                <div class="playerlist_10" id="playerlist_2" @click="smallTag(2)">十大男神</div>
                <div class="playerlist_10" id="playerlist_3" @click="smallTag(3)">高人氣</div>
                <div class="playerlist_10" id="playerlist_4" @click="smallTag(4)">本站推薦</div>
            </div>
            <div class="playerlist_11">
                <div class="playerlist_12" @click.stop="opensmartord(1,'smartord')">
                    <div class="playerlist_13">{{ ordertext  }}</div>
                    <div class="playerlist_14">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="playerlist_15 smartord" v-show="orderpop == 1">
                        <div class="player_16">
                            <div class="prices_list player_first" v-for="(list,i) in ordersmart" @click.stop="thisordersmart(list,i)">
                                {{ list }}
                                <img v-if="i == 0" :id="'ordersmart_'+i" class="preset ordersmart active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                <img v-else :id="'ordersmart_'+i" class="preset ordersmart" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="playerlist_12" style="border-color: #EABB9D;" @click.stop="opensmartordright(1,'smartordright')">
                    <div class="playerlist_13" style="color:#EABB9D;">更多篩選</div>
                    <div class="playerlist_14"><img class="settleform_40" src="/plusone88/assets/img/icon-dropdownorange@2x.png" alt=""></div>
                    <div class="playerlist_15 smartordright" v-show="orderpopright == 1">
                        <div class="manysearch">
                            <div class="playerlist_16">
                                <div class="playerlist_17">性別</div>
                                <div class="playerlist_18">
                                    <div class="playerlist_19 filtersex" id="filtersex_1" @click="filtersex(1)">只看女生</div>
                                    <div class="playerlist_19 filtersex" id="filtersex_2" @click="filtersex(2)">只看男生</div>
                                </div>
                            </div>
                            <div class="playerlist_16">
                                <div class="playerlist_17">標籤</div>
                                <div class="playerlist_18">
                                    <div class="playerlist_19 filtertag" id="filtertag_1" @click="filtertag(1)">十大名姬</div>
                                    <div class="playerlist_19 filtertag" id="filtertag_2" @click="filtertag(2)">十大男神</div>
                                    <div class="playerlist_19 filtertag" id="filtertag_3" @click="filtertag(3)">高人氣</div>
                                    <div class="playerlist_19 filtertag" id="filtertag_4" @click="filtertag(4)">本站推薦</div>
                                </div>
                            </div>
                            <div class="playerlist_16">
                                <div class="playerlist_17">段位</div>
                                <div class="playerlist_18">
                                    <div class="playerlist_19 filterrank" id="filterrank_1" @click="filterrank(1)">青銅</div>
                                    <div class="playerlist_19 filterrank" id="filterrank_2" @click="filterrank(2)">白銀</div>
                                    <div class="playerlist_19 filterrank" id="filterrank_3" @click="filterrank(3)">黃金</div>
                                    <div class="playerlist_19 filterrank" id="filterrank_4" @click="filterrank(4)">白金</div>
                                    <div class="playerlist_19 filterrank" id="filterrank_5" @click="filterrank(5)">鑽石</div>
                                    <div class="playerlist_19 filterrank" id="filterrank_6" @click="filterrank(6)">大師以上</div>
                                </div>
                            </div>
                            <div class="playerlist_16">
                                <div class="playerlist_17">價格</div>
                                <div class="playerlist_18">
                                    <div class="playerlist_19 filterprice" id="filterprice_1" @click="filterprice(1)">1~50</div>
                                    <div class="playerlist_19 filterprice" id="filterprice_2" @click="filterprice(2)">51~100</div>
                                    <div class="playerlist_19 filterprice" id="filterprice_3" @click="filterprice(3)">100~200</div>
                                    <div class="playerlist_19 filterprice" id="filterprice_4" @click="filterprice(4)">200以上</div>
                                </div>
                            </div>
                            <div class="account_7" style="padding: 0px;">
                                <hr class="account_8">
                            </div>
                            <div class="playerlist_20">
                                <div class="playerlist_21" @click.stop="clearallfilter()">清空篩選</div>
                                <div class="playerlist_22" @click.stop="postfilter()">確認</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_many_cards_all">
            <a href="/plusone88/plusone/person" class="mobile_card_wid">
                <div class="search_many_cards">
                    <div class="search_many_cards_tb">
                        <div class="many_cards_t">
                            <div class="many_cards_t_div">
                                <img src="/plusone88/assets/img/img-card1@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_b">
                                <div class="many_cards_t_div_bimg">
                                    <img src="/plusone88/assets/img/icon-hot@2x.png" alt="">
                                </div>
                                <div class="many_cards_t_div_bhot">
                                    高人氣
                                </div>
                            </div>
                            <div class="many_cards_autio">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <p class="many_cards_autio_second">10”</p>
                                <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                            </div>
                            <div class="many_cards_autio_status"></div>
                        </div>
                        <div class="many_cards_b">
                            <div class="many_cards_b_name">
                                Leo
                            </div>
                            <div class="many_cards_b_star">
                                <div class="many_cards_b_star_img">
                                    <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                    <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                    <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                    <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                    <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                                </div>
                                <div class="many_cards_b_star_num">
                                    (88)
                                </div>
                            </div>
                            <div class="many_cards_b_coupon">
                                <div class="many_cards_b_coupon_o">
                                    券後價 <span class="many_cards_b_coupon_num">110</span>幣
                                </div>
                                <div class="many_cards_b_coupon_t">
                                    130幣/半小時
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card1@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-hot@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                高人氣
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            
            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card1@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-hot@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                高人氣
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>

            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card1@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-hot@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                高人氣
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card8@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b" style="background-color: #2C37B7;">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-supertop10@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                十大男神
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>

            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card1@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b" style="background-color: #D55E5C;">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-populartop10@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                十大風雲人物
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>

            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card2@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b" style="background-color: #BDD35E;">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-richtop10@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                本站推薦
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>

            <a href="/plusone88/plusone/person" class="mobile_card_wid">
            <div class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="/plusone88/assets/img/img-card3@2x.png" alt="">
                        </div>
                        <div class="many_cards_t_div_b" style="background-color: #F4D13D;">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-populartop10@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                十大富豪
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="https://resource.3uplay.com/user-static/7aa1ddb9-ff65-4e3e-b057-44c9c59005295436317759934838723.m4a"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            Leo
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num">110</span>幣
                            </div>
                            <div class="many_cards_b_coupon_t">
                                130幣/半小時
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

<?php
$this->load->view('Footer');
?>