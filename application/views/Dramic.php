<div class="balance_order_rightfunc">
    <div class="myorder_wrap">
        <div class="coupon_text" style="width: 1100px">
            動態
        </div>
        <div class="dramic_11">
            <div class="dramic_4">
                <div class="dramic_1">
                    <div class="dramic_2" @click="toggleswitch(1)">
                        推薦
                    </div>
                    <!-- <div class="dramic_3" @click="toggleswitch(2)">
                        最近
                    </div> -->
                </div>
                <div class="dramic_12">
                    <?foreach ($dynamic as $key => $value):?>
                    <!-- 這邊foreach         這裏數字1 填入文章id  -->            
                    <div @click.stop="presonmessagepage(1,<?=$value['id']?>)">
                        <div class="dramic_5">
                            <div class="dramic_6">
                                <img class="dramic_7" src="<?=$value['pic']?>" alt="">
                            </div>
                            <div class="dramic_8">
                                                    <!-- 人名 -->
                                <div class="dramic_9"><?=$value['fakename']?></div>
                                                    <!-- 幾分鐘前 -->
                                <div class="dramic_10"><?=$value['date']?></div>
                            </div>
                        </div>
                        <div class="dramic_13">
                            <div class="dramic_14">
                                <!-- 內容 -->
                                <?=$value['text']?>
                            </div>
                            <div class="dramic_15">
                                 <!-- 如果文章有圖片 圖片也要foreach -->
                                <img class="dramic_16" src="<?=$value['image']?>" width="300" height="400" alt="">
                            </div>
                            <div class="dramic_17">
                                <!-- 常用技能 -->
                                <?=$value['skill_name']?> <?=$value['price']?>/ 場
                            </div>
                        </div>
                        <div class="dramic_18">
                            <div class="dramic_19">
                                <?if($value['is_like']==false):?>
                                <img class="dramic_20" src="/plusone88/assets/img/Path 297@2x.png" alt="" id="toplove_<?=$value['id']?>" style="width:25px" @click.stop="addlove(<?=$value['id']?>)" style="width:25px">
                                <?else:?>
                                 <img class="dramic_20" src="/plusone88/assets/img/icon-heart-pre@3x.png" alt="" style="width:25px">
                                <?endif;?>
                            </div>
                            <div class="dramic_21">
                                <img class="dramic_22" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                            </div>
                            <div class="dramic_25">
                                <div class="dramic_23">
                                    <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                                </div>
                                <!--                               這裏數字1 填入文章id  -->       
                                <div class="dramic_26" @click.stop="message(<?=$value['id']?>)">
                                    馬上留言給他/她
                                </div>
                            </div>
                        </div>
                        <div class="dramic_27" v-show="openmes == <?=$value['id']?>">
                            <textarea class="dramic_28" name="" id="" rows="3" maxlength="140" @click.stop="nothing()" v-model="dramic_27"></textarea>
                        </div>
                        <div class="edit_div_17" style="margin-bottom: 10px;" v-show="openmes == <?=$value['id']?>">
                            <div class="edit_div_18" @click.stop="cancelmessage()">
                                取消
                            </div>
                            <div class="edit_div_19" @click.stop="postmessage(<?=$value['id']?>)">
                                提交
                            </div>
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_29">
                            <div class="dramic_30">
                                <!-- 幾個讚  -->       
                                <span id="topgood_<?=$value['id']?>"><?=$value['user_like']?></span>個讚
                            </div>
                            <div class="dramic_31">
                                <!-- 幾個留言  -->
                                <span id="topmessage_<?=$value['id']?>"><?=$value['message']?></span>則留言
                            </div>
                        </div>
                    </div>
                    <!-- 到這這邊foreach -->
                    <?endforeach;?>

                </div>
            </div>
            <div class="dramic_32">
                <? if ($this->isLogin): ?>
                <div class="dramic_33">
                    <div class="dramic_34">
                        <img class="dramic_35" src="<?=$this->isLogin->picture?>" alt="">
                    </div>
                    <div class="dramic_36">
                        <?=$this->isLogin->fakename?>
                    </div>
                    <div class="dramic_37" @click.stop="opmespop(1)">
                        <img class="dramic_38" src="/plusone88/assets/img/icon-upload@2x.png" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <div class="dramic_39">
                    <div class="dramic_40">
                        熱門推薦
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                    <div class="dramic_41">
                        <div class="dramic_42">
                            <img class="dramic_35" src="/plusone88/assets/img/icon-good@2x.png" alt="">
                        </div>
                        <div class="dramic_43">
                            <img class="dramic_35" src="/plusone88/assets/img/img-profile@2x.png" alt="">
                        </div>
                        <div class="dramic_44">
                            kevin
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dramic_45" v-show="messagepop == 1">
    <div class="close" @click="opmespop(2)">
        <i class="fas fa-times"></i>
    </div>
    <div class="dramic_46">
        發佈動態
    </div>
    <div class="dramic_47">
        <hr class="dramic_48">
    </div>
    <div class="dramic_49">
        <div class="dramic_6">
            <img class="dramic_7" src="<?if ($this->isLogin){ echo $this->isLogin->picture;}?>" alt="" style="border-radius: 50%;">
        </div>
        <div class="dramic_8">
            <div class="dramic_9"><?if ($this->isLogin){ echo $this->isLogin->fakename;}?></div>
        </div>
    </div>
    <form method="POST" action="https://www.plusone88.com/api/dramic" @submit="postdramic" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="dramic_50">
            <textarea @input="descInput" v-model="desc" class="dramic_51" name="dramic" id="" col="30" maxlength="150" rows="5" placeholder="嗨 跟大家分享你的心情吧！"></textarea>
        </div>
        <div class="dramic_61" v-if="list.length>0" v-cloak>
            <div v-for="(v,i) in list" :key="i" id="put_images_div_1" class="put_images_div">
                <img id="put_images_1" class="put_images" :src="v.src" alt="">
                <div class="imgclose" @click="delImg(i)">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
        <div class="dramic_52">
            <div class="dramic_53">
                {{ image_error_mes }}
            </div>
            <div class="dramic_54">
                {{ remnant }}/150
            </div>
        </div>
        <div class="dramic_55">
            <div class="dramic_56" @click="messageimages()">
                <img class="dramic_7" src="/plusone88/assets/img/icon-uploadphoto@2x.png" alt="" style="border-radius: 0;">
            </div>
            <input type="file" class="messageinput" @change="imagepro()" id="messageinput" name="file" accept="image/png,image/jpg,image/gif,image/jpeg,image/webp">
            <div class="price_form" @click.stop="openPrices()" style="padding: 0;margin-bottom: 0;width: 60%;">
                <div style="width: 300px">
                    {{ choiceskill }}
                </div>
                <div class="many_prices" v-show="openprice == 1" style="width: 280px;bottom: 40px;height: 150px;">
                    <div class="prices_list" @click.stop="thisskill(list.title,list.id)" v-for="list in haveSkill">
                        {{ list.title }}
                        <img :id="'preset_'+list.id" class="preset" src="/plusone88/assets/img/icon-preset@2x.png" alt="">
                    </div>
                </div>
            </div>
            <input type="text" v-model="choiceskillid" name="choiceskillid" hidden>
            <!-- <div class="dramic_57">
                <img class="dramic_7" src="/plusone88/assets/img/icon-tag@2x.png" alt="">
            </div>
            <div class="dramic_58">
                <img class="dramic_7" src="/plusone88/assets/img/icon-hashtag@2x.png" alt="">
            </div>
            <div class="dramic_59">
                <input class="dramic_60" type="text" placeholder="點擊輸入話題 (限10字)" maxlength="10" v-model="hashmes">
            </div> -->
        </div>
        <div class="dramic_62">
            <button class="dramic_63" type="submit">送出審核</button>
        </div>
    </form>
</div>

<!-- 彈出 -->
<div class="dramic_66" v-show="presonmepop == 1" v-if="singlemessage != {} ">
    <div class="dramic_67">
        <div class="dramic_6">
            <img class="dramic_7" :src="singlemessage.img" alt="">
        </div>
        <div class="dramic_8">
            <div class="dramic_9" style="text-align: left;">{{ singlemessage.name }}</div>
            <div class="dramic_10">{{ singlemessage.time }}</div>
        </div>
    </div>
    <div class="dramic_64">
        <div class="dramic_65">
            <img class="dramic_16" :src="singlemessage.messageimg" alt="">
        </div>
    </div>
    <div class="dramic_68">{{ singlemessage.message }}</div>
    <div class="dramic_69">
        <div class="dramic_70">{{ singlemessage.skill }}</div>
    </div>
    <div class="dramic_18">
        <div class="dramic_25" style="margin-left: 0;" @click="message(4)">
            <div class="dramic_23">
                <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
            </div>
            <div class="dramic_26">
                馬上留言給他/她
            </div>
        </div>
        <div class="dramic_71">
            <div class="dramic_19">
                <img v-if="singlemessage.is_like" class="dramic_20" src="/plusone88/assets/img/icon-heart-pre@3x.png" alt="" style="width:25px">
                <img v-else class="dramic_20" src="/plusone88/assets/img/Path 297@2x.png" alt="" :id="'love_'+singlemessage.id" @click.stop="addlove(singlemessage.id)" style="width:25px">
            </div>
            <div class="dramic_21">
                <div class="dramic_88">
                    <img class="dramic_22" @click.stop="openbigpre()" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                    <div class="dramic_86" v-show="bigprepop == 1">
                        <div class="close" @click.stop="closebigprepop()">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="dramic_87">
                            禮物
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_94">
                            <div class="dramic_90">
                                <div class="dramic_89 border" id="present_1" @click="sel_pre_top(1)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_2" @click="sel_pre_top(2)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        50 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_3" @click="sel_pre_top(3)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        100 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_4" @click="sel_pre_top(4)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        200 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_5" @click="sel_pre_top(5)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        500 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_6" @click="sel_pre_top(6)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_7" @click="sel_pre_top(7)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        5000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border" id="present_8" @click="sel_pre_top(8)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        10000 P幣
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_94">
                            <div class="dramic_95">
                                <div class="dramic_89 border_bot" id="present_9" @click="sel_pre_bot(9)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_10" @click="sel_pre_bot(10)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        50 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_11" @click="sel_pre_bot(11)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        100 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_12" @click="sel_pre_bot(12)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        200 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_13" @click="sel_pre_bot(13)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        500 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_14" @click="sel_pre_bot(14)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        1000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_15" @click="sel_pre_bot(15)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        5000 P幣
                                    </div>
                                </div>
                                <div class="dramic_89 border_bot" id="present_16" @click="sel_pre_bot(16)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-greenbean@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        10000 P幣
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dramic_104">
                            <div class="dramic_96">
                                <div class="dramic_97">
                                    <div class="dramic_105">
                                        <img style="width: 100%;" class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_98">0</div>
                                </div>
                                <a href="">
                                    <div class="dramic_99">
                                        <div class="dramic_100">
                                            儲值
                                        </div>
                                        <img class="dramic_91" style="width: 7px" src="/plusone88/assets/img/icon-yrightarrow@2x.png" alt="">
                                    </div>
                                </a>
                                <div class="dramic_101">
                                    <div class="dramic_102" @click.stop="opensmall()">
                                        <div style="font-size:13px">
                                            {{ smallprenum }}
                                        </div>
                                        <div class="dramic_106">
                                            <img style="min-width: 10px;max-width: 10px;" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                                        </div>

                                        <div class="dramic_107" v-show="small_present == 1">
                                            <div class="dramic_108" @click="selsmanum(1)">
                                                <span class="dramic_109">
                                                    1
                                                </span>
                                                <span class="dramic_110">
                                                    一心一意
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(10)">
                                                <span class="dramic_109">
                                                    10
                                                </span>
                                                <span class="dramic_110">
                                                    十分喜歡
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(99)">
                                                <span class="dramic_109">
                                                    99
                                                </span>
                                                <span class="dramic_110">
                                                    長長久久
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(188)">
                                                <span class="dramic_109">
                                                    188
                                                </span>
                                                <span class="dramic_110">
                                                    要抱抱
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(520)">
                                                <span class="dramic_109">
                                                    520
                                                </span>
                                                <span class="dramic_110">
                                                    我愛你
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click="selsmanum(1314)">
                                                <span class="dramic_109">
                                                    1314
                                                </span>
                                                <span class="dramic_110">
                                                    一生一世
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="dramic_103">送禮</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dramic_27" v-show="openmes == 4">
        <textarea class="dramic_28" name="" id="" v-model="dramic_27" rows="3" maxlength="140"></textarea>
    </div>
    <div class="edit_div_17" style="margin-bottom: 10px;" v-show="openmes == 4">
        <div class="edit_div_18" @click.stop="cancelmessage()">
            取消
        </div>
        <div class="edit_div_19" @click.stop="postmessage(singlemessage.id)">
            提交
        </div>
    </div>
    <div class="account_7" style="padding: 0px;">
        <hr class="account_8">
    </div>
    <div class="dramic_29" style="margin-top: 10px;">
        <div class="dramic_30">
        <span :id="'good_'+singlemessage.id">{{ singlemessage.good }}</span>個讚
        </div>
        <div class="dramic_31">
        <span :id="'message_'+singlemessage.id">{{ singlemessage.messagenums }}</span>則留言
        </div>
    </div>

    <div class="dramic_72" v-for="(m,i) in singlemessage.mesper" v-if="singlemessage.mesper.length > 0">
        <div class="dramic_73">
            <img class="dramic_7" :src="m.img" alt="">
        </div>
        <div class="dramic_74">
            <div class="dramic_75">
                <div class="dramic_76">{{ m.name }}</div>
                <div class="dramic_77"><img class="dramic_7" :src="m.tag" alt=""></div>
            </div>
            <div class="dramic_78">
                {{ m.message }}
            </div>
            <div class="dramic_79">
                <div class="dramic_10" style="text-align:left;margin-right: 40px;">
                    {{ m.time }}
                </div>
                <!-- <div class="dramic_80" @click="openreply(1)">
                    回覆
                </div> -->
            </div>
            <div class="dramic_27" v-show="replypop == 1">
                <textarea class="dramic_28" name="" id="" rows="3" v-model="replytext" maxlength="140"></textarea>
            </div>
            <div class="edit_div_17" style="margin-bottom: 10px;" v-show="replypop == 1">
                <div class="edit_div_18" @click="openreply(0)">
                    取消
                </div>
                <div class="edit_div_19" @click="replymessage(m.name)">
                    提交
                </div>
            </div>
            <div class="dramic_81" v-if="replys.length > 0">
                <div class="dramic_82" v-for="(reply, i) in replys">
                    <div class="dramic_83">{{ reply.anname }}<span style="color: #8c94aa;">回覆</span>{{ reply.quname }}：{{ reply.message }}</div>
                    <div class="dramic_84">{{ reply.time }} <span class="dramic_85">回覆</span> </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- 彈出 -->
<div class="logoutmaskBg" v-show="presonmepop == 1" @click.stop="presonmessagepage(0)"></div>
<div class="logoutmaskBg" v-show="messagepop == 1" @click="opmespop(2)"></div>