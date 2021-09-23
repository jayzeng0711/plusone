
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
                        <div class="coin_prices_list" v-for="(m,i) in allcoin" @click.stop="cancelcoin(m,i)" v-if="i != 0">
                            {{ m | money }}
                            <img :id="'preset_'+i" class="preset" :class="{ active : i==1 }" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="balance_wrap_bot_twothr"><img class="balance_wrap_bot_twothrimg" src="/plusone88/assets/img/icon-exchange@2x.png" alt=""></div>
                <div class="balance_wrap_bot_fourg">兌換G幣</div>
                <div class="balance_wrap_bot_fiveg">
                    {{ taicoin | money }}
                </div>
            </div>
            <form method="post" action="https://www.plusone88.com/livepk/recharge" @submit="reviewcoin">
                <input type="text" v-model="gacoin" name="coin" hidden>
                <div class="gcoin_cc_wrap">
                    <div class="gcoin_cancel_wrap">
                        取消
                    </div>
                    <button class="gcoin_confirm_wrap" style="border:none">
                        確認送出
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
