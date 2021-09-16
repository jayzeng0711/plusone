<script type="application/javascript">
    $(document).ready(function() {
        $('.ham,.leftfunc').css('display','none')
    })
</script>
<div class="balance_order_rightfunc" style="width: 100%;">
    <div class="balance_wrap">
        <div class="store_wrap_inner">
            <div class="store_1">
                <div class="balance_wrap_inner_t">
                    <div class="balance_wrap_inner_text">儲值P幣</div>
                </div>
                <div class="balance">
                    <img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png">
                    <span class="nowmoney"><?=$this->member_model->getUser()->g_point?></span>
                </div>
            </div>
            <div class="balance_wrap_hr_div">
                <hr class="balance_wrap_hr">
            </div>
            <div class="store_2">
                儲值金額 <span class="settleform_34" v-show="money_error == 1">請選擇儲值金額</span>
            </div>
            <?=form_open('recharge/checkout', array('@submit' => 'poststore'));?>
            <div class="store_3">

                <? foreach ($moneylist as $key => $list):?>
                <div class="store_4" id="store_<?=$list['id']?>" @click="selecstore(<?=$list['id']?>,<?=$list['money']?>)">
                    <div class="store_5"><img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png"></div>
                    <div class="store_6"><?=$list['p_point']?> P幣</div>
                    <div class="store_7">NT$ <?=$list['money']?></div>
                    <div class="store_8 checkstore" id="check_<?=$list['id']?>">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                    <input type="checkbox" class="el-checkbox__original" id="checkbox__original" value="<?=$list['id']?>" @click="checked()">
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
            <div class="store_2" style="margin-top:20px">儲值方式 : <?=$billlname?><span class="settleform_34" v-show="pay_error == 1">請選擇付款方式</span></div>
            <div class="store_9">

                <? foreach ($billlist as $key => $list):?>
                <a href="<?=base_url()?>recharge/storedvalue/<?=$key ?>">
                <div class="store_10 <?if($key == $recharge_type_id){ echo 'stroeactive';}?>" id="bank_<?=$key ?>" @click="selecbank(<?=$key ?>,'<?=$list?>')">
                    <?=$list?>
                    <div class="store_8 bank_1" <?if($key == $recharge_type_id){ echo 'style="display:block;"';}?> id="bankcheck_<?=$key ?>">
                        <label for="checkbox__original" class="el-checkbox remember-check">
                            <span class="el-checkbox__input">
                                <span class="el-checkbox__inner stroecheck">
                                <input type="button" class="el-checkbox__original" id="checkbox__original" >
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                </a>
                <?php endforeach;?>
               
            </div>
            <div class="store_2">電子信箱 <span class="settleform_34" v-show="email_error == 1">請填寫正確的電子郵件格式</span></div>
            <div class="store_11 store_2">填寫付款人電子信箱，用以收取支付通知信與電子發票。</div>
            <div class="store_12"><input class="store_13" type="email" name='email' placeholder="請填寫付款人電子信箱" v-model="usermail"></div>
            <input type="text" name="paymentid" v-model="storemoney" style="display: none">
            <div class="store_14">
                <button class="store_15">確認儲值</button>
            </div>
        </div>
        </form>
    </div>
    <div class="bottom_bar">
        <div class="bottom_copy">Plus One © 2021</div>
        <div class="bottom_qa"><a href="/plusone88/plusone/question">常見Q&A</a></div>
        <div class="bottom_cs"><a href="">聯繫客服</a></div>
        <div class="bottom_note"><a href="/plusone88/plusone/privice">協議與條款</a></div>
    </div>
</div>