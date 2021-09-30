
<div class="confirm_account_rightfunc">
    <div class="myorder_wrap">
        <div class="myorder_text">
            設置
        </div>
        <div class="myorder_all_text">
            <a href="<?=base_url()?>plusone/account">
                <div class="together myorder_all myorder_speacil_line" id="myorder_1" @click="myorderchange(1)">帳戶與安全</div>
            </a>
            <!-- <a href="<?=base_url()?>plusone/notify">
                <div class="together myorder_alling" id="myorder_2" @click="myorderchange(2)">通知設定</div>
            </a>
            <a href="<?=base_url()?>plusone/block">
                <div class="together myorder_history" id="myorder_3" @click="myorderchange(3)">封鎖名單</div>
            </a> -->
        </div>
        <div class="account_1">
            <div class="account_2">
                <div class="account_3">手機號碼登入</div>
                <div class="account_4">手機號碼</div>
                <?if($this->member_model->getUser()->mobile == null):?>
                <div class="account_5">建議您綁定手機號碼以提升帳戶安全</div>
                <div class="account_6" @click="tiephonenow()">去綁定</div>
                <?else:?>
                <div class="account_5" style="color: #878787"><?=$this->member_model->getUser()->mobile?></div>
                 <div class="account_6" @click="tiephonenow()">更改</div>
                <?endif;?> 
            </div>
            <!-- <div class="account_7">
                <hr class="account_8">
            </div> -->
            <!-- <div class="account_9">
                <div class="account_10">
                    社群帳號
                </div>
                <div class="account_11">
                    <div class="account_12">
                        <div class="account_13" v-if="istiefb">
                            <div class="account_14">Facebook</div>
                            <div class="account_15">曾立杰</div>
                            <div class="account_16 dissapperttie" @click="socialdeletefun('Facebook')">解除綁定</div>
                        </div>
                        <div class="account_13" v-else>
                            <div class="account_14">Facebook</div>
                            <div class="account_15"></div>
                            <div class="account_16" @click="socialgofun('Facebook')">去綁定</div>
                        </div>

                        <div class="account_13" v-if="istiegoogle">
                            <div class="account_14">Google</div>
                            <div class="account_15">已綁定</div>
                            <div class="account_16 dissapperttie" @click="socialdeletefun('Google')">解除綁定</div>
                        </div>
                        <div class="account_13" v-else>
                            <div class="account_14">Google</div>
                            <div class="account_15"></div>
                            <div class="account_16" @click="socialgofun('Google')">去綁定</div>
                        </div>

                        <div class="account_13" v-if="istieline">
                            <div class="account_14">Line</div>
                            <div class="account_15">曾立杰</div>
                            <div class="account_16 dissapperttie" @click="socialdeletefun('Line')">解除綁定</div>
                        </div>
                        <div class="account_13" v-else>
                            <div class="account_14">Line</div>
                            <div class="account_15"></div>
                            <div class="account_16" @click="socialgofun('Line')">去綁定</div>
                        </div>

                        <div class="account_13" v-if="istieapple">
                            <div class="account_14">Apple ID</div>
                            <div class="account_15">已綁定</div>
                            <div class="account_16 dissapperttie" @click="socialdeletefun('Apple ID')">解除綁定</div>
                        </div>
                        <div class="account_13" v-else>
                            <div class="account_14">Apple ID</div>
                            <div class="account_15"></div>
                            <div class="account_16" @click="socialgofun('Apple ID')">去綁定</div>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class="account_7">
                <hr class="account_8">
            </div>
            <div class="account_17" @click="deleteacc()">
                永久刪除我的帳號
            </div>
        </div>
    </div>
</div>

<div class="phoneloginpop" v-show="tiephone == 1">
    <div class="close" @click="closetiephone()">
        <i class="fas fa-times"></i>
    </div>
    <form method="POST" action="https://www.plusone88.com/api/chkregmobile" @submit="rightnow_login">
        <div class="login-content">
            <div class="login_content_text">
                綁定手機號碼
            </div>
            <div class="login_body_may">
                <div class="login_body">
                    <div class="mobileinput">
                        <div class="mobilenumdiv" @click="opencountry()">
                            <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="/plusone88/assets/img/icon-drop@2x.png">
                            <input v-model="area_code" type="hidden" name="areacode">
                        </div>
                        <div class="login_body_div">
                            <input class="login_body_div_input" v-model="phonenumber" name="phone" value="" placeholder="請輸入手機號碼" @click="opencountry(1)">
                        </div>
                    </div>
                </div>
                <div class="many_country_wrap" v-show="many_country_wrap == 1">
                    <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                        <div>{{ country.name }}</div>
                        <div>{{ country.number }}</div>
                    </div>
                </div>
            </div>
            <div class="error_message"></div>
            <div class="valid_code">
                <!-- <div class="valid_code_div"> -->
                    <input class="valid_code_div_input" type="text" name="vaild" placeholder="請輸入驗證碼" @click="code_confirm()">
                <!-- </div> -->
                <div :class="codebtndiv" @click.prevent="getcodeaccount()">
                    <button type="button">
                        <span v-if="nogetcode">獲取驗證碼</span>
                        <span style="color:#B5B5B5" v-else>重新傳送(<span style="font-size: 12px">{{ reciprocal }}</span>)</span>
                    </button>
                </div>
            </div>
            <div class="code_error" :class="opacity">認證碼輸入錯誤</div>
            <button class="rightnow_login">
                確認送出
            </button>
        </div>
    </form>
</div>

<!-- <div class="phoneloginpop" v-show="changephone == 1">
    <div class="close" @click="closechangephone()">
        <i class="fas fa-times"></i>
    </div>
    <form method="" action="">
        <div class="login-content">
            <div class="login_content_text">
                更改手機號碼
            </div>
            <div class="login_body_may" style="margin-top: 30px;color: #878787;margin-bottom: 10px;">
                為了確保是您本人，請先確認手機號碼
            </div>
            <div style="width: 350px;margin-bottom: 10px;">
                原手機號碼：<?=$this->member_model->getUser()->mobile?>
            </div>
            <div class="valid_code">
                <div class="valid_code_div">
                    <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" @click="code_confirm()">
                </div>
                <div :class="codebtndiv" @click.prevent="getcodechange()">
                    <button type="button">
                        <span v-if="nogetcode">獲取驗證碼</span>
                        <span style="color:#B5B5B5" v-else>重新傳送(<span style="font-size: 12px">{{ reciprocal }}</span>)</span>
                    </button>
                </div>
            </div>
            <div class="code_error" :class="opacity">認證碼輸入錯誤</div>
            <button class="rightnow_login" @click.prevent="next_step()">
                下一步
            </button>
        </div>
    </form>
</div> -->

<!-- <div class="phoneloginpop" v-show="changephone1 == 1">
    <div class="close" @click="closetiephone()">
        <i class="fas fa-times"></i>
    </div>
    <form method="" action="">
        <div class="login-content">
            <div class="login_content_text">
                更改手機號碼
            </div>
            <div class="login_body_may">
                <div class="login_body">
                    <div class="mobileinput">
                        <div class="mobilenumdiv" @click="opencountry()">
                            <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="/plusone88/assets/img/icon-drop@2x.png">
                        </div>
                        <div class="login_body_div">
                            <input class="login_body_div_input" v-model="phonenumber" value="" placeholder="請輸入手機號碼" @click="opencountry(1)">
                        </div>
                    </div>
                </div>
                <div class="many_country_wrap" v-show="many_country_wrap == 1">
                    <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                        <div>{{ country.name }}</div>
                        <div>{{ country.number }}</div>
                    </div>
                </div>
            </div>
            <div class="error_message"></div>
            <div class="valid_code">
                <div class="valid_code_div">
                    <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" @click="code_confirm()">
                </div>
                <div :class="codebtndiv" @click.prevent="getcode()">
                    <button type="button">
                        <span v-if="nogetcode">獲取驗證碼</span>
                        <span style="color:#B5B5B5" v-else>重新傳送(<span style="font-size: 12px">{{ reciprocal }}</span>)</span>
                    </button>
                </div>
            </div>
            <div class="code_error" :class="opacity">認證碼輸入錯誤</div>
            <button class="rightnow_login" @click.prevent="rightnow_login()">
                確認送出
            </button>
        </div>
    </form>
</div> -->

<!-- <div class="logoutpop" v-show="deletetiesocial == 1">
    <div class="couponpop_text">
        確認解除綁定 {{ manysocail }}？
    </div>
    <div class="logoutpop_div_wrap">
        <div class="logoutpop_cancel" @click="cancelsocail1()">
            取消
        </div>
        <div class="logoutpop_confirm" @click="detersocail1(manysocail)">
            確定
        </div>
    </div>
</div> -->
<form method="post" action="https://www.plusone88.com/api/delaccount" v-show="foreverdeletcacc == 1">
    <div class="logoutpop" >
        <div class="couponpop_text">
            確認永久刪除我的帳號?
        </div>
        <div style="color: #D55E5C;margin-bottom: 50px;">
            帳號刪除後將無法回復，請您再次確認
        </div>
        <div class="logoutpop_div_wrap">
            <div class="logoutpop_cancel" @click="closedeacc(1)">
                取消
            </div>
            <button class="logoutpop_confirm">
                確定
            </button>
        </div>
    </div>
</form>
<!-- <div class="logoutmaskBg" v-show="deletetiesocial == 1" @click="cancelsocail1()"></div>
<div class="phonemaskBg" v-show="changephone1 == 1" @click="closetiephone()"></div>
<div class="phonemaskBg" v-show="changephone == 1" @click="closechangephone()"></div> -->
<div class="phonemaskBg" v-show="tiephone == 1" @click="closetiephone()"></div>
<div class="phonemaskBg" v-show="foreverdeletcacc == 1"></div>
