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
    <div class="single_skill_0">
        <div class="single_skill_1">
            技能編輯-激鬥峽谷
        </div>
        <div class="single_skill_2">
            <div class="single_skill_3">
                價格清單
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="single_skill_4">
                <div class="single_skill_6" @click.stop="playedit(1,'aoirc')">
                    <div class="settleform_38">
                        {{ editskillprice }}
                    </div>
                    <div class="settleform_39">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="many_prices aoirc" v-show="togeedit == 1">
                        <div class="prices_list" @click.stop="selepr('100幣/局',0)">
                            100幣/局
                            <img id="sigprei_0" class="preset selepr active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="selepr('150幣/局',1)">
                            150幣/局
                            <img id="sigprei_1" class="preset selepr" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="selepr('200幣/局',2)">
                            200幣/局
                            <img id="sigprei_2" class="preset selepr" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="selepr('250幣/局',3)">
                            250幣/局
                            <img id="sigprei_3" class="preset selepr" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="single_skill_6" @click.stop="playedit(2,'lfddspk')">
                    <div class="settleform_38">
                        積分
                    </div>
                    <div style="margin-left: auto;">{{ singrank }}</div>
                    <div class="settleform_39" style="margin-left: 10px;">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="many_prices lfddspk" v-show="togeedit == 2">
                        <div class="prices_list" @click.stop="thislfddspk('100幣/局',0)">
                            100幣/局
                            <img id="thislfddspk_0" class="preset thislfddspk active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfddspk('150幣/局',1)">
                            150幣/局
                            <img id="thislfddspk_1" class="preset thislfddspk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfddspk('200幣/局',2)">
                            200幣/局
                            <img id="thislfddspk_2" class="preset thislfddspk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfddspk('250幣/局',3)">
                            250幣/局
                            <img id="thislfddspk_3" class="preset thislfddspk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="single_skill_6" @click.stop="playedit(3,'selfpoe')">
                    <div class="settleform_38 selfselect">
                        添加自定義價格(選填)
                    </div>
                    <div class="settleform_39">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="many_prices selfpoe" v-show="togeedit == 3">
                        <div class="prices_list" @click.stop="thisself('100幣/局',0)">
                            100幣/局
                            <img id="self_0" class="preset thisself active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisself('150幣/小時',1)">
                            150幣/小時
                            <img id="self_1" class="preset thisself" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisself('200幣/天',2)">
                            200幣/天
                            <img id="self_2" class="preset thisself" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisself('250幣/半小時',3)">
                            250幣/半小時
                            <img id="self_3" class="preset thisself" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_skill_3">
                價格清單
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="single_skill_5">
                <div class="single_skill_6" @click.stop="playeditredu(1,'redu')">
                    <div class="settleform_38">
                        滿贈優惠
                    </div>
                    <div style="margin-left: auto;">{{ reduceprice }}</div>
                    <div class="settleform_39" style="margin-left: 10px;">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="many_prices redu" v-show="togeeditthisredu == 1">
                        <div class="prices_list" @click.stop="thisredu('滿5贈1',0)">
                            滿5贈1
                            <img id="redu_0" class="preset thisredu active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisredu('滿10贈1',1)">
                            滿10贈1
                            <img id="redu_1" class="preset thisredu" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisredu('滿15贈2',2)">
                            滿15贈2
                            <img id="redu_2" class="preset thisredu" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thisredu('滿20贈3',3)">
                            滿20贈3
                            <img id="redu_3" class="preset thisredu" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="single_skill_6" @click.stop="playeditredu(2,'firstde')">
                    <div class="settleform_38">
                        首單優惠
                    </div>
                    <div style="margin-left: auto;">{{ firstreducemoney }}</div>
                    <div class="settleform_39" style="margin-left: 10px;">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="many_prices firstde" v-show="togeeditthisredu == 2">
                        <div class="prices_list" @click.stop="thislfirstde('10幣',0)">
                            10幣
                            <img id="thislfirstde_0" class="preset thislfirstde active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfirstde('20幣',1)">
                            20幣
                            <img id="thislfirstde_1" class="preset thislfirstde" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfirstde('30幣',2)">
                            30幣
                            <img id="thislfirstde_2" class="preset thislfirstde" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfirstde('40幣',3)">
                            40幣
                            <img id="thislfirstde_3" class="preset thislfirstde" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_skill_3">
                等級和介紹
            </div>
            <div class="single_skill_7" @click="editskillsattus = 1">編輯</div>
            <div class="single_skill_12">
                <div class="single_skill_8" v-if="editskillsattus == 0">{{ ranklevelte }}</div>
                <div class="single_skill_6" v-else @click.stop="editranklevel(1,'ranklevel')">
                    <div class="settleform_38">
                        {{ ranklevelte }}
                    </div>
                    <div class="settleform_39">
                        <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="many_prices ranklevel" v-show="playeditredute == 1">
                        <div class="prices_list" @click.stop="thislfirsrk('金牌',0)">
                            金牌
                            <img id="thislfirsrk_0" class="preset thislfirsrk active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfirsrk('白金',1)">
                            白金
                            <img id="thislfirsrk_1" class="preset thislfirsrk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfirsrk('翡翠',2)">
                            翡翠
                            <img id="thislfirsrk_2" class="preset thislfirsrk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="prices_list" @click.stop="thislfirsrk('鑽石',3)">
                            鑽石
                            <img id="thislfirsrk_3" class="preset thislfirsrk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_skill_9">
                <div :id="'singleintroimg_'+list.id" class="single_skill_10" v-for="(list,i) in editskillimg">
                    <img class="single_skill_11" :src="list.img" alt="">
                    <div class="imgcloseedit" @click="deletesinimg(list.id)" v-if="editskillsattus == 1">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div id="singleintroimg_4" class="single_skill_13" v-show="editskillsattus == 1 && editskillimg.length < 6">
                    <div @click.stop="editimgupload()">上傳圖片</div>
                    <input class="single_skill_14" id="single_skill_14" @change="editinputac()" type="file" style="display:none">
                </div>
            </div>
            <div class="single_skill_15">
                自我介紹
            </div>
            <div v-if="editskillsattus == 0" style="margin-bottom: 50px;color:#595959;">{{ editintrotext }}</div>
            <div v-else class="settleform_47" style="padding: 20px 0" style="margin-bottom: 50px;">
                <textarea @input="introInput" v-model="editintrotext" maxlength="100" class="settleform_48" placeholder="請輸入您的自我介紹" name="intro" id="" cols="30" rows="3"></textarea>
                <div class="editskill_49">{{ introducenum }}/100</div>
            </div>
            <div class="single_skill_15">
                語音介紹
            </div>
            <div>
                <div v-if="editskillsattus == 0" class="many_cards_autio" style="align-items: center;display: inline-flex;position: initial">
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
                <div v-else class="edit_div_27" @click="uploadvoice()">
                    <input type="file" name="file" accept=".mp3,.wma,.m4a,.wav,.ape,.flac,.aac" class="voiceinput">
                    <div class="edit_div_28">
                        <img class="edit_div_29" src="/plusone88/assets/img/icon-uploadcloud@2x.png" alt="">
                    </div>
                    <div class="edit_div_30">
                        上傳音訊檔
                    </div>
                </div>
            </div>
            <div v-if="editskillsattus == 1" style="margin: 0 auto;text-align: center;margin-top: 50px">
                <button class="rightnow_login" @click.prevent="">
                    確認送出
                </button>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>