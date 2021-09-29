
<div class="balance_order_rightfunc">
    <div class="myorder_wrap_balance">
        餘額
    </div>
    <div class="balance_wrap">
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">
                    <img class="balance_wrap_inner_t_d_img" src="/plusone88/assets/img/icon-money@2x.png">
                </div>
                <div class="balance_wrap_inner_text">平台幣餘額(P幣)</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="balance_wrap_bot">
                <div class="balance_wrap_bot_one">P幣</div>
                <div class="balance_wrap_bot_two">{{ gacoin | money }}</div>
                <div class="balance_wrap_bot_three">儲值</div>
                <a href="/plusone/change_gcoin">
                    <div class="balance_wrap_bot_four">兌換G幣</div>
                </a>
            </div>
        </div>
        <div class="balance_wrap_inner">
            <div class="balance_wrap_inner_t">
                <div class="balance_wrap_inner_t_d">

                </div>
                <div class="balance_wrap_inner_text">平台幣餘額(G幣)</div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="balance_wrap_bot">
                <div class="balance_wrap_bot_one">G幣</div>
                <div class="balance_wrap_bot_two">{{ gacoin | money }}</div>
                <div class="balance_wrap_bot_three" style="opacity: 0;cursor: default;">兌換G幣</div>
                <a href="/plusone/trade">
                    <div class="balance_wrap_bot_four">交易</div>
                </a>
            </div>
        </div>
    </div>
</div>
