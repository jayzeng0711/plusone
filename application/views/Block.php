
<div class="confirm_account_rightfunc">
    <div class="myorder_wrap">
        <div class="myorder_text">
            設置
        </div>
        <div class="myorder_all_text">
            <a href="<?=base_url()?>plusone/account">
                <div class="together myorder_all" id="myorder_1" @click="myorderchange(1)">帳戶與安全</div>
            </a>
            <a href="<?=base_url()?>plusone/notify">
                <div class="together myorder_alling" id="myorder_2" @click="myorderchange(2)">通知設定</div>
            </a>
            <a href="<?=base_url()?>plusone/block">
                <div class="together myorder_history myorder_speacil_line" id="myorder_3" @click="myorderchange(3)">封鎖名單</div>
            </a>
        </div>
    </div>
    <div class="block_wrap">
        <div class="block_div1" v-if="blockpeople.length == 0">
            <img class="block_div2" src="/plusone88/assets/img/block@2x.png">
        </div>
        <div v-else class="block_div3">
            <div class="block_div4">
                <div class="block_div5" :id="'block_'+i" v-for="(list, i) in blockpeople">
                    <div class="block_div6">
                        <img class="block_div7" :src="'/plusone88/assets/img/'+list.img">
                    </div>
                    <div class="block_div8">
                        {{ list.name }}
                    </div>
                    <div class="block_div9" @click="deleteblock(list.id,i)">
                        解除封鎖
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
