
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
                            {{ gametext }} {{ ranktext }}
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
                                        <div class="prices_list" @click.stop="thisPrices('單價不限',0,0)">
                                            單價不限
                                            <img id="preset_0" class="preset active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$200以內',1,200)">
                                            $200以內
                                            <img id="preset_1" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$300以內',3,300)">
                                            $300以內
                                            <img id="preset_2" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$400以內',3,400)">
                                            $400以內
                                            <img id="preset_3" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$500以內',4,500)">
                                            $500以內
                                            <img id="preset_4" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$600以內',5,600)">
                                            $600以內
                                            <img id="preset_5" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                                        </div>
                                        <div class="prices_list" @click.stop="thisPrices('$700以內',6,700)">
                                            $700以內
                                            <img id="preset_6" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
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
                <div class="modelpop_top_list" v-for="(i,index) in oriallgames" :id="'modelpop_top_list_'+i.id" @click="changegame(i.id,i.skill_name)" :class="{modelpop_top_list_active: index == 0}">
                    {{ i.skill_name }}
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
                <div class="modelpop_bottom_list" id="modelpop_bottom_list_2" @click="rankmodel(2,'白金')">
                    白金
                </div>
                <div class="modelpop_bottom_list" id="modelpop_bottom_list_3" @click="rankmodel(3,'翡翠')">
                    翡翠
                </div>
                <div class="modelpop_bottom_list" id="modelpop_bottom_list_4" @click="rankmodel(4,'鑽石')">
                    鑽石
                </div>
            </div>
        </div>
        <div class="modelpop_firm">
            <button class="modelpop_firm_btn" @click="order_confirm()" type="button">確定</button>
        </div>
    </div>
    <div class="logoutpop" v-show="deterconfirm == 1">
        <form method="post" action="https://www.plusone88.com/member/dialoag" @submit.stop="confirmorder">
            <input type="text" v-model="origameid" name="id" hidden>
            <input type="text" v-model="origamerank" name="rank" hidden>
            <input type="text" v-model="sexNum" name="sex" hidden>
            <input type="text" v-model="origamepri" name="price" hidden>
            <input type="text" v-model="gametotal" name="gametotal" hidden>
            <input type="text" v-model="orderNote" name="note" hidden>
            <div class="confrimfast_text">
                請確認您的約單要求
            </div>
            <div class="confrimfast_text_one">
                選人時間為15分鐘，若您超時取消<br>可能會扣取$5~$10以補償陪玩師喔
            </div>
            <div class="confrimfast_text_two">{{ gametext }}、{{ ranktext }}</div>
            <div class="confrimfast_text_three">
                {{ sex }}、{{ pricetext }}、局*{{ gametotal }}、{{ orderNote }}
            </div>
            <div class="logoutpop_div_wrap">
                <div class="logoutpop_cancel" @click="cancelorder()">
                    取消
                </div>
                <button class="logoutpop_confirm">
                    確定
                </button>
            </div>
        </form>
    </div>
    <div class="logoutmaskBg" v-show="selectmodel == 1"></div>
    <div class="logoutmaskBg" v-show="deterconfirm == 1"></div>
