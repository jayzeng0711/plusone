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
        <div class="coupon_text" style="width: 1100px">
            動態
        </div>
        <div class="dramic_11">
            <div class="dramic_4">
                <div class="dramic_1">
                    <div class="dramic_2" @click="toggleswitch(1)">
                        推薦
                    </div>
                    <div class="dramic_3" @click="toggleswitch(2)">
                        最近
                    </div>
                </div>
                <div class="dramic_12">
                    <div @click.stop="presonmessagepage(1)">
                        <div class="dramic_5">
                            <div class="dramic_6">
                                <img class="dramic_7" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                            </div>
                            <div class="dramic_8">
                                <div class="dramic_9">kevin</div>
                                <div class="dramic_10">1小時前</div>
                            </div>
                        </div>
                        <div class="dramic_13">
                            <div class="dramic_14">
                                嗨 大家好久不見～
                            </div>
                            <div class="dramic_15">
                                <img class="dramic_16" src="/plusone88/assets/img/Group 117@2x.png" width="300" height="400" alt="">
                            </div>
                            <div class="dramic_17">
                                傳說對決 150幣/半小時
                            </div>
                        </div>
                        <div class="dramic_18">
                            <div class="dramic_19">
                                <img class="dramic_20" src="/plusone88/assets/img/Path 297@2x.png" alt="">
                            </div>
                            <div class="dramic_21">
                                <img class="dramic_22" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                            </div>
                            <div class="dramic_25">
                                <div class="dramic_23">
                                    <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                                </div>
                                <div class="dramic_26" @click="message(1)">
                                    馬上留言給他/她
                                </div>
                            </div>
                        </div>
                        <div class="dramic_27" v-show="openmes == 1">
                            <textarea class="dramic_28" name="" id="" rows="3" maxlength="140"></textarea>
                        </div>
                        <div class="edit_div_17" style="margin-bottom: 10px;" v-show="openmes == 1">
                            <div class="edit_div_18" @click="cancelmessage()">
                                取消
                            </div>
                            <div class="edit_div_19" @click="postmessage()">
                                提交
                            </div>
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_29">
                            <div class="dramic_30">
                                11個讚
                            </div>
                            <div class="dramic_31">
                                2則留言
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="dramic_5">
                            <div class="dramic_6">
                                <img class="dramic_7" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                            </div>
                            <div class="dramic_8">
                                <div class="dramic_9">kevin</div>
                                <div class="dramic_10">1小時前</div>
                            </div>
                        </div>
                        <div class="dramic_13">
                            <div class="dramic_14">
                                嗨 大家好久不見～
                            </div>
                            <div class="dramic_15">
                                <img class="dramic_16" src="/plusone88/assets/img/Group 117@2x.png" width="300" height="400" alt="">
                            </div>
                            <div class="dramic_17">
                                傳說對決 150幣/半小時
                            </div>
                        </div>
                        <div class="dramic_18">
                            <div class="dramic_19">
                                <img class="dramic_20" src="/plusone88/assets/img/Path 297@2x.png" alt="">
                            </div>
                            <div class="dramic_21">
                                <img class="dramic_22" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                            </div>
                            <div class="dramic_25">
                                <div class="dramic_23">
                                    <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                                </div>
                                <div class="dramic_26" @click="message(2)">
                                    馬上留言給他/她
                                </div>
                            </div>
                        </div>
                        <div class="dramic_27" v-show="openmes == 2">
                            <textarea class="dramic_28" name="" id="" rows="3" maxlength="140"></textarea>
                        </div>
                        <div class="edit_div_17" style="margin-bottom: 10px;" v-show="openmes == 2">
                            <div class="edit_div_18" @click="cancelmessage()">
                                取消
                            </div>
                            <div class="edit_div_19" @click="postmessage()">
                                提交
                            </div>
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_29">
                            <div class="dramic_30">
                                11個讚
                            </div>
                            <div class="dramic_31">
                                2則留言
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="dramic_5">
                            <div class="dramic_6">
                                <img class="dramic_7" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                            </div>
                            <div class="dramic_8">
                                <div class="dramic_9">kevin</div>
                                <div class="dramic_10">1小時前</div>
                            </div>
                        </div>
                        <div class="dramic_13">
                            <div class="dramic_14">
                                嗨 大家好久不見～
                            </div>
                            <div class="dramic_15">
                                <img class="dramic_16" src="/plusone88/assets/img/Group 117@2x.png" width="300" height="400" alt="">
                            </div>
                            <div class="dramic_17">
                                傳說對決 150幣/半小時
                            </div>
                        </div>
                        <div class="dramic_18">
                            <div class="dramic_19">
                                <img class="dramic_20" src="/plusone88/assets/img/Path 297@2x.png" alt="">
                            </div>
                            <div class="dramic_21">
                                <img class="dramic_22" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                            </div>
                            <div class="dramic_25">
                                <div class="dramic_23">
                                    <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                                </div>
                                <div class="dramic_26" @click="message(3)">
                                    馬上留言給他/她
                                </div>
                            </div>
                        </div>
                        <div class="dramic_27" v-show="openmes == 3">
                            <textarea class="dramic_28" name="" id="" rows="3" maxlength="140"></textarea>
                        </div>
                        <div class="edit_div_17" style="margin-bottom: 10px;" v-show="openmes == 3">
                            <div class="edit_div_18" @click="cancelmessage()">
                                取消
                            </div>
                            <div class="edit_div_19" @click="postmessage()">
                                提交
                            </div>
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_29">
                            <div class="dramic_30">
                                11個讚
                            </div>
                            <div class="dramic_31">
                                2則留言
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dramic_32">
                <div class="dramic_33">
                    <div class="dramic_34">
                        <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                    </div>
                    <div class="dramic_36">
                        kevin
                    </div>
                    <div class="dramic_37" @click="opmespop(1)">
                        <img class="dramic_38" src="/plusone88/assets/img/icon-upload@2x.png" alt="">
                    </div>
                </div>
                <div class="dramic_39">
                    <div class="dramic_40">
                        熱門推薦
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dramic_45" v-show="messagepop == 1">
    <div class="close" @click="opmespop(2)">
        <i class="fas fa-times"></i>
    </div>
    <div class="dramic_46">
        發佈動態
    </div>
    <div class="dramic_47">
        <hr class="dramic_48">
    </div>
    <div class="dramic_49">
        <div class="dramic_6">
            <img class="dramic_7" src="/plusone88/assets/img/img-profile@2x.png" alt="">
        </div>
        <div class="dramic_8">
            <div class="dramic_9">kevin</div>
        </div>
    </div>
    <div class="dramic_50">
        <textarea v-model="desc" class="dramic_51" name="" id="" col="30" maxlength="150" rows="5" placeholder="嗨 跟大家分享你的心情吧！"></textarea>
    </div>
    <div class="dramic_61" v-if="list.length>0" v-cloak>
        <div v-for="(v,i) in list" :key="i" id="put_images_div_1" class="put_images_div">
            <img id="put_images_1" class="put_images" :src="v.src" alt="">
            <div class="imgclose" @click="delImg(i)">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
    <div class="dramic_52">
        <div class="dramic_53">
            {{ image_error_mes }}
        </div>
        <div class="dramic_54">
            {{ remnant }}/150
        </div>
    </div>
    <div class="dramic_55">
        <div class="dramic_56" @click="messageimages()">
            <img class="dramic_7" src="/plusone88/assets/img/icon-uploadphoto@2x.png" alt="">
        </div>
        <input type="file" multiple class="messageinput" @change="imagepro()" id="messageinput" name="file[]" accept="image/png,image/jpg,image/gif,image/jpeg,image/webp">
        <div class="dramic_57">
            <img class="dramic_7" src="/plusone88/assets/img/icon-tag@2x.png" alt="">
        </div>
        <div class="dramic_58">
            <img class="dramic_7" src="/plusone88/assets/img/icon-hashtag@2x.png" alt="">
        </div>
        <div class="dramic_59">
            <input class="dramic_60" type="text" placeholder="點擊輸入話題 (限10字)" maxlength="10" v-model="hashmes">
        </div>
    </div>
    <div class="dramic_62">
        <button class="dramic_63">送出審核</button>
    </div>
</div>

<div class="dramic_66" v-show="presonmepop == 1">
    <div class="dramic_67">
        <div class="dramic_6">
            <img class="dramic_7" src="/plusone88/assets/img/img-profile@2x.png" alt="">
        </div>
        <div class="dramic_8">
            <div class="dramic_9">kevin</div>
            <div class="dramic_10">1小時前</div>
        </div>
    </div>
    <div class="dramic_64">
        <div class="dramic_65">
            <img class="dramic_16" src="/plusone88/assets/img/Group 195@2x.png" alt="">
        </div>
    </div>
    <div class="dramic_68">嗨 大家好久不見～</div>
    <div class="dramic_69">
        <div class="dramic_70">傳說對決 150幣/半小時</div>
    </div>
    <div class="dramic_18">
        <div class="dramic_25" style="margin-left: 0;" @click="message(4)">
            <div class="dramic_23">
                <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
            </div>
            <div class="dramic_26">
                馬上留言給他/她
            </div>
        </div>
        <div class="dramic_71">
            <div class="dramic_19">
                <img class="dramic_20" src="/plusone88/assets/img/Path 297@2x.png" alt="">
            </div>
            <div class="dramic_21">
                <div class="dramic_88">
                    <img class="dramic_22" @click.stop="openbigpre()" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                    <div class="dramic_86" v-show="bigprepop == 1">
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
                            <div class="dramic_90">
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
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
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
                                    <div class="dramic_102" @click.stop="opensmall()">
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
                                    <div class="dramic_103">送禮</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dramic_27" v-show="openmes == 4">
        <textarea class="dramic_28" name="" id="" v-model="dramic_27" rows="3" maxlength="140"></textarea>
    </div>
    <div class="edit_div_17" style="margin-bottom: 10px;" v-show="openmes == 4">
        <div class="edit_div_18" @click="cancelmessage()">
            取消
        </div>
        <div class="edit_div_19" @click="postmessage()">
            提交
        </div>
    </div>
    <div class="account_7" style="padding: 0px;">
        <hr class="account_8">
    </div>
    <div class="dramic_29" style="margin-top: 10px;">
        <div class="dramic_30">
            11個讚
        </div>
        <div class="dramic_31">
            2則留言
        </div>
    </div>

    <div class="dramic_72" v-for="(m,i) in mesper" v-if="mesper.length > 0">
        <div class="dramic_73">
            <img class="dramic_7" :src="'/plusone88/assets/img/'+m.img" alt="">
        </div>
        <div class="dramic_74">
            <div class="dramic_75">
                <div class="dramic_76">{{ m.name }}</div>
                <div class="dramic_77"><img class="dramic_7" :src="'/plusone88/assets/img/'+m.tag" alt=""></div>
            </div>
            <div class="dramic_78">
                {{ m.message }}
            </div>
            <div class="dramic_79">
                <div class="dramic_10" style="text-align:left;margin-right: 40px;">
                    {{ m.time }}
                </div>
                <div class="dramic_80" @click="openreply(1)">
                    回覆
                </div>
            </div>
            <div class="dramic_27" v-show="replypop == 1">
                <textarea class="dramic_28" name="" id="" rows="3" v-model="replytext" maxlength="140"></textarea>
            </div>
            <div class="edit_div_17" style="margin-bottom: 10px;" v-show="replypop == 1">
                <div class="edit_div_18" @click="openreply(0)">
                    取消
                </div>
                <div class="edit_div_19" @click="replymessage(m.name)">
                    提交
                </div>
            </div>
            <div class="dramic_81" v-if="replys.length > 0">
                <div class="dramic_82" v-for="(reply, i) in replys">
                    <div class="dramic_83">{{ reply.anname }}<span style="color: #8c94aa;">回覆</span>{{ reply.quname }}：{{ reply.message }}</div>
                    <div class="dramic_84">{{ reply.time }} <span class="dramic_85">回覆</span> </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="logoutmaskBg" v-show="presonmepop == 1" @click.stop="presonmessagepage(0)"></div>
<div class="logoutmaskBg" v-show="messagepop == 1" @click="opmespop(2)"></div>


<?php
$this->load->view('Footer');
?>