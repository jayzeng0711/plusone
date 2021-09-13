
<div class="balance_order_rightfunc">
    <div class="myorder_wrap_balance">
        兌換G幣
    </div>
    <div class="balance_wrap">
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">
                    <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                </div>
                <div class="balance_wrap_inner_text">當前餘額</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="gcoin_wrap_bot">
                <div class="gcoin_wrap_bot_one">P幣</div>
                <div class="gcoin_wrap_bot_two">{{ pcoin | money }}</div>
                <div class="gcoin_wrap_bot_three">Ｇ幣</div>
                <div class="gcoin_wrap_bot_four">{{ gcoin | money }}</div>
            </div>
        </div>
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">
                    <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                </div>
                <div class="balance_wrap_inner_text">兌換G幣</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="gcoin_wrap_bot_again">
                <div class="balance_wrap_bot_oneg">輸入P幣</div>
                <div class="balance_wrap_bot_twog" @click.stop="opencoin()">
                    <div class="coin_wrap_bot_twog_div">
                        {{ gacoin | money }}
                    </div>
                    <div class="balance_wrap_bot_twog_div_bot">
                        <img class="balance_wrap_bot_twog_div_botomg" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                    </div>
                    <div class="coin_many_prices" v-show="manycoin == 1">
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcoinone,0)">
                            {{ gcoinone | money }}
                            <img id="preset_0" class="preset active" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcointwo,1)">
                            {{ gcointwo | money }}
                            <img id="preset_1" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcointhree,2)">
                            {{ gcointhree | money }}
                            <img id="preset_2" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                        <div class="coin_prices_list" @click.stop="cancelcoin(gcoinfour,3)">
                            {{ gcoinfour | money }}
                            <img id="preset_3" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="balance_wrap_bot_twothr"><img class="balance_wrap_bot_twothrimg" src="/plusone88/assets/img/icon-exchange@2x.png" alt=""></div>
                <div class="balance_wrap_bot_fourg">兌換G幣</div>
                <div class="balance_wrap_bot_fiveg">
                    {{ taicoin | money }}
                </div>
            </div>
            <div class="gcoin_cc_wrap">
                <div class="gcoin_cancel_wrap">
                    取消
                </div>
                <div class="gcoin_confirm_wrap">
                    確認送出
                </div>
            </div>
        </div>
    </div>
</div>
