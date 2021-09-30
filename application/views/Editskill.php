
<div class="balance_order_rightfunc">
    <div class="single_skill_0">
        <form action="https://www.plusone88.com/api/editskill" method="post" enctype="multipart/form-data" accept-charset="utf-8" @submit="edit_sklii_submit">
            <input type="text" id="skillId"  name="skillId" value="<?=$skillid?>" hidden>
            <div class="single_skill_1">
                技能編輯-<?=$skill_type['skill_name']?>
            </div>
            <div class="single_skill_2">
                <div class="single_skill_3">
                    價格清單
                </div>
                <div class="balance_wrap_hr_div">
                    <hr class="balance_wrap_hr">
                </div>
                <div class="single_skill_4">
                    <div class="single_skill_6">
                        <div>
                            <div style="margin-bottom: 5px;">
                                單價 <input type="text" name="singleprice" size="10" v-model="moneey" @input="check_money()"> 元
                            </div>
                            <div class="settleform_34" style="text-align: center;" v-show="fakename == 1">請輸入單價</div>
                        </div>
                    </div>
                    <div class="single_skill_6">
                        <div>
                            <div style="margin-bottom: 5px;">
                                首單優惠 <input type="text" name="firstprice" size="10" v-model="first_money" @input="check_firstmoney()"> 元
                            </div>
                            <div class="settleform_34" style="text-align: center;" v-show="ssex == 1">請輸入優惠價</div>
                        </div>
                    </div>
                </div>
                <div class="single_skill_3">
                    優惠
                </div>
                <div class="balance_wrap_hr_div">
                    <hr class="balance_wrap_hr">
                </div>
                <div class="single_skill_5">
                    <div class="single_skill_6">
                        <div>
                            <div style="margin-bottom: 5px;">
                                滿 <input type="text" name="coupon_1" value="" size="5" v-model="coupon_1" @input="check_coupon1()"> 贈 <input type="text" name="coupon_2" value="" size="5" v-model="coupon_2" @input="check_coupon2()">
                            </div>
                            <div class="settleform_34" style="text-align: center;" v-show="realname == 1">請輸入完整滿贈優惠</div>
                        </div>
                    </div>
                    <div class="single_skill_6">
                        <div>
                            <div style="margin-bottom: 5px;">
                                滿 <input type="text" name="coupon_3" value="" size="5" v-model="coupon_3" @input="check_coupon3()"> 贈 <input type="text" name="coupon_4" value="" size="5" v-model="coupon_4" @input="check_coupon4()">
                            </div>
                            <div class="settleform_34" style="text-align: center;opacity:0" v-show="realname == 1">請輸入完整滿贈優惠</div>
                        </div>
                    </div>
                    <div class="single_skill_6">
                        <div>
                            <div style="margin-bottom: 5px;">
                                滿 <input type="text" name="coupon_5" value="" size="5" v-model="coupon_5" @input="check_coupon5()"> 贈 <input type="text" name="coupon_6" value="" size="5" v-model="coupon_6" @input="check_coupon6()">
                            </div>
                            <div class="settleform_34" style="text-align: center;opacity:0" v-show="realname == 1">請輸入完整滿贈優惠</div>
                        </div>
                    </div>
                </div>
                <div class="single_skill_3" style="margin-bottom: 20px;">
                    等級和介紹
                </div>
                <div class="single_skill_12">
                    <div class="single_skill_6" style="border: 1px solid #595959;cursor:pointer;" @click.stop="editranklevel(1,'ranklevel')">
                        <div class="settleform_38">
                            {{ ranklevelte }}
                        </div>
                        <div class="settleform_39">
                            <img class="settleform_40" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                        </div>
                        <div class="many_prices ranklevel" style="width: 200px;" v-show="playeditredute == 1">
                            <div class="prices_list" @click.stop="thislfirsrk('白金',1)">
                                白金
                                <img id="thislfirsrk_1" class="preset thislfirsrk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                            </div>
                            <div class="prices_list" @click.stop="thislfirsrk('翡翠',2)">
                                翡翠
                                <img id="thislfirsrk_2" class="preset thislfirsrk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                            </div>
                            <div class="prices_list" @click.stop="thislfirsrk('鑽石',3)">
                                鑽石
                                <img id="thislfirsrk_3" class="preset thislfirsrk" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                            </div>
                        </div>
                    </div>
                    <input type="text" name="level" v-model="levelId" style="display: none;">
                </div>
                <div class="single_skill_9">
                    <div :id="'singleintroimg_'+list.id" class="single_skill_10" v-for="(list,i) in editskillimg" v-if="editskillimg.length > 0">
                        <img class="single_skill_11" :src="list.img" alt="">
                        <div class="imgcloseedit" @click="deletesinimg(list.id)">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div id="singleintroimg_4" class="single_skill_13" v-show="editskillimg.length < 1">
                        <div @click.stop="editimgupload()">上傳圖片</div>
                        <input class="single_skill_14" id="single_skill_14" @change="editinputac()" name='file' type="file" style="display:none">
                    </div>
                </div>
                <div class="single_skill_15">
                    自我介紹
                </div>
                <div class="settleform_47" style="padding: 20px 0" style="margin-bottom: 50px;">
                    <textarea @input="introInputEdit" v-model="editintrotext" maxlength="100" class="settleform_48" placeholder="請輸入您的自我介紹" name="intro" id="" cols="30" rows="3"></textarea>
                    <div class="editskill_49" v-if="editintrotext.length > 0 || editintrotext !== null">{{ editintrotext.length }}/100</div>
                    <div class="editskill_49" v-else>0/100</div>
                   
                </div>
                <div class="single_skill_15">
                    語音介紹
                </div>
                <div style="display: flex;">
                    <div class="edit_div_27" @click="uploadvoice()">
                        <input type="file" name="voice" accept=".mp3,.wma,.m4a,.wav,.ape,.flac,.aac" class="voiceinput">
                        <div class="edit_div_28">
                            <img class="edit_div_29" src="/plusone88/assets/img/icon-uploadcloud@2x.png" alt="">
                        </div>
                        <div class="edit_div_30">
                            上傳音訊檔
                        </div>
                    </div>
                    <div class="many_cards_autio" id="cards_autio_1" style="align-items: center;display: inline-flex;position: initial" @click.stop.prevent="playaudio(1)">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p class="many_cards_autio_second" id="playersec_1">10”</p>
                        <audio id="player_1" preload="preload" src=""></audio>
                    </div>
                </div>
                <div style="margin: 0 auto;text-align: center;margin-top: 50px">
                    <button class="rightnow_login" type="submit">
                        確認送出
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
