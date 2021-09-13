
<div class="confirm_order_rightfunc">
    <div class="getmoney_wrap">
        <div class="myorder_text">
            提款
        </div>
        <div class="getmoney_all_text_1">
            <div class="together myorder_all myorder_speacil_line" id="getmoney_1" @click="changegetmoney(1)">提款申請表</div>
            <div class="together myorder_alling" id="getmoney_2" @click="changegetmoney(2)">修改提款密碼</div>
        </div>
        <div class="balance_wrap" v-show="moneyapply == 1">
            <div class="balance_wrap_inner" style="width: 550px;max-width: 550px;">
                <div class="balance_wrap_inner_t">
                    <div class="balance_wrap_inner_t_d">
                        <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                    </div>
                    <div class="balance_wrap_inner_text">平台幣餘額(P幣)</div>
                    <div style="color: #272828;font-size: 22px;margin-left:auto;">{{22000 | money}}</div>
                </div>
            </div>
            <div class="balance_wrap_inner" style="width: 550px;max-width: 550px;">
                <div class="balance_wrap_inner_t">
                    <div class="balance_wrap_inner_text">提款申請表</div>
                </div>
                <div class="balance_wrap_hr_div">
                    <hr class="balance_wrap_hr">
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">提款金額</div>
                    <div class="getmoney_32">
                        <div style="display:flex;align-items: flex-end;">
                            <div class="settleform_30">
                                <input class="settleform_31" type="text" placeholder="請輸入金額" v-model="moneey" @input="check_money()">
                            </div>
                            <div style="color: #B4B4B4;font-size: 12px;margin-bottom: 5px;">(帳戶餘額滿100元以上可提款，提款需扣除匯款手續費)</div>
                        </div>
                        <div class="settleform_34" v-show="getmonet_error == 1">請填寫金額</div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">銀行卡資訊</div>
                    <div class="settleform_32" style="height: auto">
                        <div style="display:flex;align-items: center;">
                            <div class="settleform_30" style="border:none;margin-bottom: 0;margin-right: 60px">
                                國泰世華銀行
                            </div>
                            <div>*88888</div>
                        </div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">提款密碼</div>
                    <div class="settleform_32">
                        <div>
                            <div class="settleform_30">
                                <input class="settleform_31" name="bankcode" v-model="getmoneypas" type="password" placeholder="請輸入您的提款密碼">
                            </div>
                        </div>
                        <div class="settleform_34" v-show="getmonet_error == 2">提款密碼不正確</div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">手機號碼</div>
                    <div class="settleform_32" style="position: relative">
                        <div class="login_body_may">
                            <div class="login_body" style="padding: 0;">
                                <div class="mobileinput" style="height: 35px;margin-bottom: 5px;">
                                    <div class="mobilenumdiv" @click="opencountry()">
                                        <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="/plusone88/assets/img/icon-drop@2x.png">
                                    </div>
                                    <div class="login_body_div" style="height:auto;">
                                        <input class="login_body_div_input" v-model="phonenumber" value="" placeholder="請輸入手機號碼" maxlength="10" @click="opencountry(1)" @input="check_phone()">
                                    </div>
                                </div>
                            </div>
                            <div class="many_country_wrap" v-show="many_country_wrap == 1" style="left:0">
                                <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                                    <div>{{ country.name }}</div>
                                    <div>{{ country.number }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="settleform_34" v-show="getmonet_error == 3">手機號碼輸入錯誤</div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">認證碼</div>
                    <div class="valid_code_getmoney" style="align-items: initial;">
                        <div>
                            <div class="valid_code_div" style="margin-bottom: 5px;height:45px;">
                                <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" @click="code_confirm()">
                            </div>
                            <div class="settleform_34" v-show="getmonet_error == 4">驗證碼錯誤</div>
                        </div>
                        <div :class="codebtndiv" @click.prevent="getcode()">
                            <button type="button">
                                <span v-if="nogetcode">獲取驗證碼</span>
                                <span style="color:#B5B5B5" v-else>重新傳送(<span>{{ reciprocal }}</span>)</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="store_14" style="margin-bottom: 15px;">
                    <div class="store_15" @click="checkgetmoney()">提交審核</div>
                </div>
                <div style="font-size: 12px;color:#B4B4B4;text-align: center;">
                    審核通過後，我們將於24小時內出款。
                </div>
            </div>
        </div>

        <div class="balance_wrap" v-show="moneyapply == 2">
            <div class="balance_wrap_inner" style="width: 550px;max-width: 550px;">
                <div class="settleform_28">
                    <div class="settleform_29">請輸入原提款密碼</div>
                    <div class="getmoney_32">
                        <div style="display:flex;align-items: flex-end;">
                            <div class="settleform_30">
                                <input class="settleform_31" type="password" placeholder="請輸入原提款密碼" v-model="old_psd">
                            </div>
                        </div>
                        <div class="settleform_34" v-show="modibankcode == 1">原提款密碼輸入錯誤，請重新輸入!(錯誤次數1/3，達3次將凍結帳號)</div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">請輸入新提款密碼</div>
                    <div class="getmoney_32">
                        <div style="display:flex;align-items: flex-end;">
                            <div class="settleform_30">
                                <input class="settleform_31" type="password" placeholder="請輸入新提款密碼" v-model="new_psd">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">請再次輸入新提款密碼</div>
                    <div class="settleform_32">
                        <div>
                            <div class="settleform_30">
                                <input class="settleform_31" name="newbankcode" type="password" v-model="new_psd_again" placeholder="請輸入您的新提款密碼">
                            </div>
                        </div>
                        <div class="settleform_34" v-show="modibankcode == 2">新提款密碼輸入錯誤，請重新輸入!</div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">手機號碼</div>
                    <div class="settleform_32" style="position: relative">
                        <div class="login_body_may">
                            <div class="login_body" style="padding: 0;">
                                <div class="mobileinput" style="height: 35px;margin-bottom: 5px;">
                                    <div class="mobilenumdiv" @click="opencountry()">
                                        <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="/plusone88/assets/img/icon-drop@2x.png">
                                    </div>
                                    <div class="login_body_div" style="height:auto;">
                                        <input class="login_body_div_input" v-model="phonenumber" value="" placeholder="請輸入手機號碼" maxlength="10" @click="opencountry(1)" @input="check_phone()">
                                    </div>
                                </div>
                            </div>
                            <div class="many_country_wrap" v-show="many_country_wrap == 1" style="left:0">
                                <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                                    <div>{{ country.name }}</div>
                                    <div>{{ country.number }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="settleform_34" v-show="modibankcode == 3">手機號碼輸入錯誤</div>
                    </div>
                </div>
                <div class="settleform_28">
                    <div class="settleform_29">認證碼</div>
                    <div class="valid_code_getmoney" style="align-items: initial;">
                        <div>
                            <div class="valid_code_div" style="margin-bottom: 5px;height:45px;">
                                <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" @click="code_confirm()">
                            </div>
                            <div class="settleform_34" v-show="modibankcode == 4">驗證碼錯誤</div>
                        </div>
                        <div :class="codebtndiv" @click.prevent="getcode()">
                            <button type="button">
                                <span v-if="nogetcode">獲取驗證碼</span>
                                <span style="color:#B5B5B5" v-else>重新傳送(<span>{{ reciprocal }}</span>)</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="store_14" style="margin-bottom: 15px;">
                    <div class="store_15" @click="confirmModifypsd()">確認修改</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="logoutpop" v-show="succcodepop == 1">
    <div class="logoutpop_text">
        修改成功!<br>請重新登入帳號
    </div>
    <div class="logoutpop_div_wrap" style="width: 150px;">
        <div class="logoutpop_confirm" @click="linkhome()">
            確定
        </div>
    </div>
</div>
<div class="phonemaskBg" v-show="succcodepop == 1"></div>

