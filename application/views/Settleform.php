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
    </style>
</head>

<?php
$this->load->view('Left_top_bar');
?>
<div class="balance_order_rightfunc" style="width: 100%;">
    <div class="settleform_1">
        <div class="settleform_2">
            <div class="settleform_3">
                <div class="settleform_4">1</div>
                <div class="settleform_5">基礎資料</div>
            </div>
            <div class="settleform_6">

            </div>
            <div class="settleform_3">
                <div class="settleform_7">2</div>
                <div class="settleform_8">資料審核</div>
            </div>
        </div>
    </div>
    <form action="" method="">
        <div class="settleform_9">
            <div class="settleform_10"><span class="settleform_14">歡迎申請入駐陪玩，以下只需要簡單的幾個步驟就可以完成囉！</span></div>
            <div class="settleform_11">
                <div class="settleform_12"><span class="settleform_13">基本資料</span></div>
                <div class="settleform_15">
                    <hr class="settleform_16">
                </div>
                <div class="settleform_17">
                    <div class="settleform_18">
                        <div class="settleform_19">
                            <div class="settleform_20">
                                <img class="settleform_21" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                            </div>
                            <div class="settleform_22">
                                <div class="settleform_23" @click="imgupload()">上傳頭像</div>
                                <input class="settleform_24" type="file" style="display:none">
                            </div>
                            <div class="settleform_25">
                                請務必上傳個人清晰易識別<br>
                                的照片，以便獲得更多用戶<br>
                                的關注，增加曝光唷 ：)
                            </div>
                        </div>
                    </div>
                    <div class="settleform_26">
                        <div class="settleform_27">
                            <div class="settleform_28">
                                <div class="settleform_29">名稱</div>
                                <div class="settleform_32">
                                    <div class="settleform_30">
                                        <input class="settleform_31" type="text" placeholder="請輸入名稱" v-model="settbleform[0]['fakename']">
                                    </div>
                                    <div class="settleform_34" v-show="fakename == 1">請填寫名稱</div>
                                </div>
                            </div>
                            <div class="settleform_28">
                                <div class="settleform_29">性別</div>
                                <div class="settleform_32">
                                    <div style="margin-bottom: 5px;">
                                        <label for="male" class="settleform_33">
                                            <input type="radio" id="male" name="sex" value="男" v-model="settbleform[0]['sex']"> <span>男</span>
                                        </label>
                                        <label for="female">
                                            <input type="radio" id="female" name="sex" value="女" v-model="settbleform[0]['sex']"> <span>女</span>
                                        </label>
                                    </div>
                                    <div class="settleform_34" v-show="ssex == 1">請選擇您的性別</div>
                                </div>
                            </div>
                            <div class="settleform_28">
                                <div class="settleform_29">真實姓名</div>
                                <div class="settleform_32">
                                    <div class="settleform_30">
                                        <input class="settleform_31" type="text" placeholder="請填寫您的真實姓名" v-model="settbleform[0]['name']">
                                    </div>
                                    <div class="settleform_34" v-show="realname == 1">請填寫您的真實姓名</div>
                                </div>
                            </div>
                            <div class="settleform_28">
                                <div class="settleform_29">地址</div>
                                <div class="settleform_32">
                                    <div class="settleform_30add">
                                        <input class="settleform_31add" type="text" placeholder="請填寫您的地址" v-model="settbleform[0]['address']">
                                    </div>
                                    <div class="settleform_34" v-show="address == 1">請填寫您的地址</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="settleform_11">
                <div class="settleform_12"><span class="settleform_13">申請陪玩項目資訊</span></div>
                <div class="settleform_15">
                    <hr class="settleform_16">
                </div>
                <div class="settleform_35">
                    <div class="settleform_36">
                        <div class="settleform_37" @click.stop="playfuntio()">
                            <div class="settleform_38">
                                {{ settbleform[0].playitemtext }}
                            </div>
                            <div class="settleform_39">
                                <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                            </div>
                            <div class="many_prices" style="width: 200px;" v-show="togeplaypop == 1">
                                <div class="prices_list" @click.stop="thisGames('英雄聯盟',0)">
                                    英雄聯盟
                                    <img id="preset_0" class="preset active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                </div>
                                <div class="prices_list" @click.stop="thisGames('激鬥峽谷',1)">
                                    激鬥峽谷
                                    <img id="preset_1" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                </div>
                                <div class="prices_list" @click.stop="thisGames('天黑請閉眼',2)">
                                    天黑請閉眼
                                    <img id="preset_2" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                </div>
                                <div class="prices_list" @click.stop="thisGames('明星三缺一',3)">
                                    明星三缺一
                                    <img id="preset_3" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="settleform_34" v-show="selectplayitemsta == 1">
                            請選擇您的申請陪玩項目
                        </div>
                    </div>
                    <div class="settleform_42">
                        <div class="settleform_43">
                            <div class="settleform_44">陪玩單價</div>
                            <div class="settleform_30" style="margin-right: 10px;">
                                <input class="settleform_31" dir="rtl" style="width: 50px;" v-model="settbleform[0]['singleprice']" @input="check_num()">
                            </div>元
                        </div>
                        <div class="settleform_34" style="text-align: center;" v-show="playpriceunit == 1">
                            請輸入您的陪玩單價
                        </div>
                    </div>
                    <div class="settleform_46">
                        <div style="margin-bottom: 5px;">
                            <label for="halfhour" class="settleform_33" style="margin-right: 15px;">
                                <input type="radio" id="halfhour" name="halfhour" value="半小時" v-model="settbleform[0]['timeunit']"> <span>半小時</span>
                            </label>
                            <label for="hour">
                                <input type="radio" id="hour" name="hour" value="小時" v-model="settbleform[0]['timeunit']"> <span>小時</span>
                            </label>
                        </div>
                        <div class="settleform_34" v-show="sunite == 1">請選擇單位</div>
                    </div>
                </div>
            </div>
            <div class="settleform_11">
                <div class="settleform_12"><span class="settleform_13">自我介紹</span></div>
                <div class="settleform_15">
                    <hr class="settleform_16">
                </div>
                <div class="settleform_47">
                    <textarea @input="introInput" v-model="settbleform[0]['introtext']" maxlength="100" class="settleform_48" placeholder="請輸入您的自我介紹" name="intro" id="" cols="30" rows="3"></textarea>
                    <div class="settleform_49">{{ introducenum }}/100</div>
                    <div style="color: #F6C3C5;font-size: 12px">例如：你好，我是KIKI，能帶給您每一場都開心又歡樂，喜歡我的話就快找我下單吧！</div>
                </div>
            </div>
            <div class="settleform_11">
                <div class="settleform_12"><span class="settleform_13">語音介紹</span></div>
                <div class="settleform_15">
                    <hr class="settleform_16">
                </div>
                <div style="padding: 20px">
                    <div class="edit_div_27" @click="uploadvoice()" style="    border: 1px solid #4E9ECB;display:inline-flex;padding: 10px 30px;border-radius: 20px;margin-bottom: 20px">
                        <input type="file" name="file" accept=".mp3,.wma,.m4a,.wav,.ape,.flac,.aac" class="voiceinput">
                        <div class="edit_div_28">
                            <img class="edit_div_29" src="/plusone88/assets/img/icon-uploadcloud@2x.png" alt="">
                        </div>
                        <div class="edit_div_30">
                            上傳音訊檔
                        </div>
                    </div>
                    <div style="font-size:12px;color:#B4B4B4;margin-bottom: 10px">上傳的錄音將提供給用户試聽。請上傳3-60秒的錄音(支持mp3/wma/m4a，檔案大小不超過3M)</div>
                    <div style="color: #F6C3C5;font-size: 12px">例如：你好，我是KIKI，能帶給您每一場都開心又歡樂，喜歡我的話就快找我下單吧！</div>
                </div>
            </div>
            <div class="settleform_11">
                <div class="settleform_12"><span class="settleform_13">綁定手機號碼</span></div>
                <div class="settleform_15">
                    <hr class="settleform_16">
                </div>
                <div class="settleform_50">
                    <div class="settleform_51">
                        <div class="settleform_52">手機號碼</div>
                        <div class="login_body_may">
                            <div class="login_bodysettle">
                                <div class="mobileinput" style="margin-bottom: 5px;width: 245px;">
                                    <div class="mobilenumdiv" @click="opencountry()">
                                        <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="/plusone88/assets/img/icon-drop@2x.png">
                                    </div>
                                    <div class="login_body_div">
                                        <input class="login_body_div_input" v-model="phonenumber" placeholder="請輸入手機號碼" @click="opencountry(1)" @input="check_phone()">
                                    </div>
                                </div>
                                <div class="error_message settleform_34"></div>
                            </div>
                            <div class="many_country_wrap" style="position: absolute;left:0;top: 55px;width: 245px;" v-show="many_country_wrap == 1">
                                <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                                    <div>{{ country.name }}</div>
                                    <div>{{ country.number }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="settleform_51">
                        <div class="settleform_52">認證碼</div>
                        <div class="login_body_may">
                            <div class="login_body" style="padding: 0;height: 60px;">
                                <div class="valid_code" style="padding: 0;height: 60px;">
                                    <div class="valid_code_div">
                                        <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" @click="code_confirm()">
                                    </div>
                                    <div :class="codebtndiv" @click.prevent="getcode()">
                                        <button type="button">
                                            <span v-if="nogetcode">獲取驗證碼</span>
                                            <span style="color:#B5B5B5" v-else>重新傳送(<span>{{ reciprocal }}</span>)</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="settleform_34" :class="opacity">
                                    認證碼輸入錯誤
                                </div>
                            </div>
                            <div class="many_country_wrap" style="position: absolute;left:0;top: 55px;width: 245px;" v-show="many_country_wrap == 1">
                                <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                                    <div>{{ country.name }}</div>
                                    <div>{{ country.number }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile_bimd_set">
                    <button class="rightnow_login" @click.prevent="rightnow_login()" style="width:200px;margin-right: 20px">
                        確認綁定
                    </button>
                    <span class="settleform_34 bind_error"></span>
                </div>
            </div>
            <div class="settleform_11">
                <div class="settleform_12"><span class="settleform_13">申請等級</span></div>
                <div class="settleform_15">
                    <hr class="settleform_16">
                </div>
                <div class="settleform_53">
                    <div class="settleform_54">
                        <div class="settleform_55">
                            <label for="level_1" class="settleform_56">
                                <input class="settleform_57" type="radio" name="level" id="level_1" value="1" v-model="settbleform[0]['level']"> 鑽石級陪玩師 (抽成0%，條件：有客源，積極拉新訪客，每周可新增用戶至少10人以上，青豆準代理)
                            </label>
                        </div>
                        <div class="settleform_55">
                            <label for="level_2" class="settleform_56">
                                <input class="settleform_57" type="radio" name="level" id="level_2" value="2" v-model="settbleform[0]['level']"> 黃金級陪玩師 (抽成3%，條件：自有客源少，偶爾拉新訪客，每周可新增用戶至少1~9人)
                            </label>
                        </div>
                        <div class="settleform_55">
                            <label for="level_3" class="settleform_56">
                                <input class="settleform_57" type="radio" name="level" id="level_3" value="3" v-model="settbleform[0]['level']"> 白金級陪玩師 (抽成5%, 條件：無自有客源，不拉新訪客，不確定能新增用戶)
                            </label>
                        </div>
                        <div class="settleform_34" style="margin-left: 5px;" v-show="levelup == 1">
                            請選擇您的申請等級
                        </div>
                    </div>
                </div>
            </div>
            <div class="settleform_59">
                <label for="agree">
                    <input type="radio" value="1" id="agree" name="agree" v-model="settbleform[0]['agree']"> 我已閱讀並同意 <a href="" class="settleform_58">Plus One陪玩師行為守則 、服務協議與隱私權條款</a>
                </label>
            </div>
            <div class="settleform_34" v-show="agree_error == 1">
                提交前請閱讀並同意
            </div>
            <div class="settleform_60">
                <button type="button" class="settleform_61" @click="apply_settle()">提交入駐申請</button>
            </div>
        </div>
    </form>
    <div class="bottom_bar">
        <div class="bottom_copy">Plus One © 2021</div>
        <div class="bottom_qa"><a href="/plusone88/plusone/question">常見Q&A</a></div>
        <div class="bottom_cs"><a href="">聯繫客服</a></div>
        <div class="bottom_note"><a href="/plusone88/plusone/privice">協議與條款</a></div>
    </div>
</div>
<?php
$this->load->view('Footer');
?>