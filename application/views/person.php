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
    <div class="person_1">
        <div class="person_2">
            <div class="person_3">
                <div class="person_4">
                    <img class="person_8" src="/plusone88/assets/img/img-card5@2x.png" alt="">
                </div>
                <div class="many_cards_t_div_b" style="background-color: #BDD35E;">
                    <div class="many_cards_t_div_bimg">
                        <img src="/plusone88/assets/img/icon-recommend@2x.png" alt="">
                    </div>
                    <div class="many_cards_t_div_bhot">
                        本站推薦
                    </div>
                </div>
            </div>
            <div class="person_5">
                <div class="person_6"><img class="person_7" src="/plusone88/assets/img/img-card5@2x.png" alt=""></div>
                <div class="person_6"><img class="person_7" src="/plusone88/assets/img/img-card5@2x.png" alt=""></div>
                <div class="person_6"><img class="person_7" src="/plusone88/assets/img/img-card5@2x.png" alt=""></div>
                <div class="person_6"><img class="person_7" src="/plusone88/assets/img/img-card5@2x.png" alt=""></div>
            </div>
            <div class="person_9">
                <div class="person_10">名字</div>
                <div class="person_11">NINA</div>
                <div class="person_12">
                    <div class="person_13"><img class="person_14" src="/plusone88/assets/img/icon-femaleicon@2x.png" alt=""></div>
                    <div class="person_15">27</div>
                </div>
                <div class="person_16">16分鐘前</div>
            </div>
            <div class="person_17">
                <div class="person_10">ID</div>
                <div class="person_11">1234567</div>
                <div class="person_18">
                    <img class="person_19" src="/plusone88/assets/img/icon-copy@2x.png" alt="">
                </div>
            </div>
            <div class="person_20">嗨大家好就不見嗨大家好就不見嗨大家好就不見嗨大家好就不見嗨大家好就不見嗨大家好就不見</div>
            <div class="person_21">
                <hr class="account_8">
            </div>
            <div class="person_22">
                <div class="person_23">
                    <img class="person_24" @click.stop="openbigpre()" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                    <div class="person_86" v-show="bigprepop == 1">
                        <div class="close" @click="closebigprepop()">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="dramic_87">
                            禮物
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_94">
                            <div class="preson_90">
                                <div class="dramic_89 border" id="present_1" @click="sel_pre_top(1)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_2" @click="sel_pre_top(2)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        50 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_3" @click="sel_pre_top(3)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        100 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_4" @click="sel_pre_top(4)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        200 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_5" @click="sel_pre_top(5)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        500 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_6" @click="sel_pre_top(6)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_7" @click="sel_pre_top(7)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        5000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_8" @click="sel_pre_top(8)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        10000 P幣
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_94">
                            <div class="dramic_95">
                                <div class="dramic_89 border_bot" id="present_9" @click="sel_pre_bot(9)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_10" @click="sel_pre_bot(10)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        50 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_11" @click="sel_pre_bot(11)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        100 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_12" @click="sel_pre_bot(12)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        200 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_13" @click="sel_pre_bot(13)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        500 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_14" @click="sel_pre_bot(14)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_15" @click="sel_pre_bot(15)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        5000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_16" @click="sel_pre_bot(16)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        10000 P幣
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dramic_104">
                            <div class="dramic_96">
                                <div class="dramic_97">
                                    <div class="dramic_105">
                                        <img style="width: 100%;" class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_98">0</div>
                                </div>
                                <a href="">
                                    <div class="dramic_99">
                                        <div class="dramic_100">
                                            儲值
                                        </div>
                                        <img class="dramic_91" style="width: 7px" src="/plusone88/assets/img/icon-yrightarrow@2x.png" alt="">
                                    </div>
                                </a>
                                <div class="dramic_101">
                                    <div class="preson_102" @click.stop="opensmall()">
                                        <div style="font-size:13px">
                                            {{ smallprenum }}
                                        </div>
                                        <div class="dramic_106">
                                            <img style="min-width: 10px;max-width: 10px;" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                                        </div>

                                        <div class="dramic_107" v-show="small_present == 1">
                                            <div class="dramic_108" @click="selsmanum(1)">
                                                <span class="dramic_109">
                                                    1
                                                </span>
                                                <span class="dramic_110">
                                                    一心一意
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(10)">
                                                <span class="dramic_109">
                                                    10
                                                </span>
                                                <span class="dramic_110">
                                                    十分喜歡
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(99)">
                                                <span class="dramic_109">
                                                    99
                                                </span>
                                                <span class="dramic_110">
                                                    長長久久
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(188)">
                                                <span class="dramic_109">
                                                    188
                                                </span>
                                                <span class="dramic_110">
                                                    要抱抱
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(520)">
                                                <span class="dramic_109">
                                                    520
                                                </span>
                                                <span class="dramic_110">
                                                    我愛你
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(1314)">
                                                <span class="dramic_109">
                                                    1314
                                                </span>
                                                <span class="dramic_110">
                                                    一生一世
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="preson_103">送禮</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="person_25">
                    <img class="person_26" @click="openmantsocial()" src="/plusone88/assets/img/icon-uploadcloudmuti@2x.png" alt="">
                    <div class="person_61" v-show="mutisocial == 1">
                        <div class="person_62"><a href=""><img src="/plusone88/assets/img/icon-line1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="/plusone88/assets/img/icon-fb1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="/plusone88/assets/img/icon-ig1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="/plusone88/assets/img/icon-twitter1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="/plusone88/assets/img/icon-wechat1@2x.png" alt=""></a></div>
                        <div class="person_62">
                            <div class="person_63">
                                <a href=""><img src="/plusone88/assets/img/icon-sina1@2x.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="person_27">
            <div class="person_28">
                <div class="person_30" @click="left_prebtn()"><img class="person_32" src="/plusone88/assets/img/icon-rightarrowgray@2x.png" alt=""></div>
                <div class="person_34">
                    <div class="person_29" @click="addactive(-1)" id="person_-1">動態</div>
                    <div class="person_35">
                        <div class="person_29" v-for="(list, i) in personskill" :id="'person_'+i" @click="addactive(i)">{{ list }}</div>
                    </div>
                </div>
                <div class="person_31" @click="right_prebtn()"><img class="person_33" src="/plusone88/assets/img/icon-rightarrowgray@2x.png" alt=""></div>
            </div>
            <div class="person_37">
                <hr class="person_36">
            </div>
            <div class="person_38">
                <div class="person_39 personall person_39_active" id="personmod_1" @click="selemodel(1)">標準模式 180幣/局</div>
                <div class="person_39 personall" @click="selemodel(2)" id="personmod_2">標準模式 180幣/局</div>
                <div class="person_39 personall" @click="selemodel(3)" id="personmod_3">不限模式 300幣/小時</div>
                <div class="person_39 personall" @click="selemodel(4)" id="personmod_4">標準模式 180幣/局</div>
                <div class="person_39 personall" @click="selemodel(5)" id="personmod_5">不限模式 300幣/小時</div>
                <div class="person_39 personall" @click="selemodel(6)" id="personmod_6">標準模式 180幣/局</div>
            </div>
            <div class="person_40">
                <span class="person_41">180幣</span><span class="person_42">/局</span>
            </div>
            <div class="person_43">
                <div class="person_44">滿5贈1</div>
                <div class="person_44">滿12贈3</div>
                <div class="person_44">滿20贈5</div>
            </div>
            <div class="person_45">
                <div class="person_46">接單數量</div>
                <div class="person_47">402</div>
            </div>
            <div class="person_50">
                <div class="person_48">
                    <div class="many_cards_t_div_bimg">
                        <img class="person_49" src="/plusone88/assets/img/icon-recommend@2x.png" alt="">
                    </div>
                    <div class="many_cards_t_div_bhot">
                        本站推薦
                    </div>
                </div>
            </div>
            <div class="person_51">
                <a href="/plusone88/plusone/singledialoag">
                    <div class="person_52">聊一聊</div>
                </a>
                <a href="/plusone88/plusone/confirmorder">
                    <div class="person_53">立即下單</div>
                </a>
            </div>
            <div class="person_54">技能資訊</div>
            <div class="many_cards_autio" style="align-items: center;display: inline-flex;position: initial">
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
            <div class="person_55">
                哈囉！我是NINA，不管是需要安慰還是撒嬌哄睡，小桃都陪你喔！
            </div>
            <div class="person_56">
                <div class="person_57">段位</div>
                <div class="person_58">白金</div>
            </div>
            <div class="person_56">
                <div class="person_57">擅長位置</div>
                <div class="person_58">上單 中單 輔助</div>
            </div>
            <div class="person_56">
                <div class="person_57">擅長英雄類型</div>
                <div class="person_58">法師 輔助</div>
            </div>
            <div class="person_56">
                <div class="person_57">可接模式</div>
                <div class="person_58">積分 NG</div>
            </div>
            <div class="person_59">
                <img class="person_60" src="/plusone88/assets/img/Group 107t@2x.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>