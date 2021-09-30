<div class="balance_order_rightfunc">
    <div class="myorder_wrap">
        <div class="coupon_text">
            收益報表
        </div>
        <div class="myorder_data_wrap" v-show="all_order == 1">
            <div class="myorder_data_title">
                <div>序</div>
                <div>單號</div>
                <div>陪玩師</div>
                <div>遊戲</div>
                <div>接單日期/時間</div>
                <div>數量</div>
                <div>金額</div>
                <div>平台費%</div>
                <div>餘額</div>
            </div>
            <div class="order_data_hr_div">
                <hr class="order_data_hr">
            </div>
            <!-- <div class="myorder_data_title" v-for="(r,i) in report">
                <div>{{ r.id }}</div>
                <div>{{ r.ordermember}}</div>
                <div><a href="" style="color: #4E9FCC">{{ r.played }}</a></div>
                <div>{{ r.game }}</div>
                <div>{{ r.getdate }}</div>
                <div>{{ r.num }}</div>
                <div>{{ r.money | NTDmoney }}</div>
                <div>{{ r.lostmoney}}</div>
                <div>{{ r.havemoney | NTDmoney}}</div>
            </div> -->
            <div id="reportdata"></div>
            <div id="reportpagination" style="display: flex;justify-content: center;padding: 20px 0"></div>
        </div>
    </div>
</div>
