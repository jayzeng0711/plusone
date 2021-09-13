<script type="application/javascript">
    $(document).ready(function() {
        $('.ham,.leftfunc').css('display','none')
    })
</script>
<div class="balance_order_rightfunc" style="width: 100%;">
    <div class="settleform_1">
        <div class="settleform_2">
            <div class="settleform_3">
                <div class="settleform_7">1</div>
                <div class="settleform_8">基礎資料</div>
            </div>
            <div class="settleform_6">
            </div>
            <div class="settleform_3">
                <div class="settleform_4">2</div>
                <div class="settleform_5">資料審核</div>
            </div>
        </div>
    </div>
    <div class="settleform_9">
        <div class="settleform_11" style="margin-bottom: 330px;">
            <div class="settleform_12"><span class="settleform_13">資料審核</span></div>
            <div class="settleform_15">
                <hr class="settleform_16">
            </div>
            <div class="check_div">
                <img class="check_img" src="/plusone88/assets/img/happy.png" alt="">
            </div>
            <?if($this->member_model->getUser()->play_with == 1):?>
            <div class="check_div2">恭喜您，已完成資料填寫，我們將盡速為您審核資料，感謝您的申請。</div>
            <?elseif($this->member_model->getUser()->play_with == 2):?>
            <div class="check_div2">恭喜您，已申請通過成為陪玩師，感謝您的申請。</div>    
            <?else:?>
            <div class="check_div2">很抱歉，您的申請已被退回，請重新申請。</div>
            <?endif;?>
        </div>
    </div>
    <div class="bottom_bar">
        <div class="bottom_copy">Plus One © 2021</div>
        <div class="bottom_qa"><a href="<?=base_url()?>plusone/question">常見Q&A</a></div>
        <div class="bottom_cs"><a href="">聯繫客服</a></div>
        <div class="bottom_note"><a href="<?=base_url()?>plusone/privice">協議與條款</a></div>
    </div>
</div>
