<div class="balance_order_rightfunc">
    <div class="myorder_wrap">
        <div class="dramic_text">
            動態
        </div>
        <div class="dramic_11">
            <div class="dramic_4">
                <div class="dramic_1">
                    <div class="dramic_2" @click.stop="toggleswitch(1)">
                        推薦
                    </div>
                    <!-- <div class="dramic_3" @click.stop="toggleswitch(2)">
                        最近
                    </div> -->
                </div>
                <div class="dramic_12">
                    <?foreach ($dynamic as $key => $value):?>
                    <div @click.stop="presonmessagepage(1,<?=$value['id']?>)">
                        <div class="dramic_5">
                            <div class="dramic_6">
                                <img class="dramic_7" src="<?=$value['pic']?>" alt="">
                            </div>
                            <div class="dramic_8">
                                <div class="dramic_9"><?=$value['fakename']?></div>
                                <div class="dramic_10"><?=$value['date']?></div>
                            </div>
                        </div>
                        <div class="dramic_13">
                            <div class="dramic_14">
                                <?=$value['text']?>
                            </div>
                            <div class="dramic_15">
                                <img class="dramic_16" src="<?=$value['image']?>" width="300" height="400" alt="">
                            </div>
                            <div class="dramic_17">
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
                <div class="dramic_88">
                    <img class="dramic_22" @click.stop="opensinglebigpre(<?=$value['id']?>)" src="/plusone88/assets/img/Group 120@2x.png" alt="">
                    <div class="dramic_86" v-show="bigsinprepop == <?=$value['id']?>" style="left: -50px;top: -230px;">
                        <div class="close" @click.stop="closesinbigprepop()">
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
                                <?foreach ($gift_list as $key => $gift):?>
                                <div class="dramic_89 border" id="present_<?=$value['id']?>_<?=$gift['id']?>" @click.stop="sel_pre_top(<?=$gift['id']?>,<?=$value['id']?>)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        <?=$gift['point']?> P幣
                                    </div>
                                </div>
                                <?endforeach;?>
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
                                <a href="https://www.plusone88.com/recharge/storedvalue">
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
                                        <div class="dramic_107" v-show="small_present == 1" style="bottom: 31px;">
                                            <div class="dramic_108" @click.stop="selsmanum(1)">
                                                <span class="dramic_109">
                                                    1
                                                </span>
                                                <span class="dramic_110">
                                                    一心一意
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(10)">
                                                <span class="dramic_109">
                                                    10
                                                </span>
                                                <span class="dramic_110">
                                                    十分喜歡
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(99)">
                                                <span class="dramic_109">
                                                    99
                                                </span>
                                                <span class="dramic_110">
                                                    長長久久
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(188)">
                                                <span class="dramic_109">
                                                    188
                                                </span>
                                                <span class="dramic_110">
                                                    要抱抱
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(520)">
                                                <span class="dramic_109">
                                                    520
                                                </span>
                                                <span class="dramic_110">
                                                    我愛你
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(1314)">
                                                <span class="dramic_109">
                                                    1314
                                                </span>
                                                <span class="dramic_110">
                                                    一生一世
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dramic_103" @click.stop="donate(<?=$value['id']?>)">送禮</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            <div class="dramic_25">
                                <div class="dramic_23">
                                    <img class="dramic_24" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                                </div>
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
                                <span id="topgood_<?=$value['id']?>"><?=$value['user_like']?></span>個讚
                            </div>
                            <div class="dramic_31">
                                <span id="topmessage_<?=$value['id']?>"><?=$value['message']?></span>則留言
                            </div>
                        </div>
                    </div>
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
                        <?=$this->isLogin->name?>
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
    <div class="close" @click.stop="opmespop(2)">
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
            <div class="dramic_9"><?if ($this->isLogin){ echo $this->isLogin->name;}?></div>
        </div>
    </div>
    <form method="POST" action="https://www.plusone88.com/api/dramic" @submit="postdramic" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="dramic_50">
            <textarea @input="descInput" v-model="desc" class="dramic_51" name="dramic" id="" col="30" maxlength="150" rows="5" placeholder="嗨 跟大家分享你的心情吧！"></textarea>
        </div>
        <div class="dramic_61" v-if="list.length>0" v-cloak>
            <div v-for="(v,i) in list" :key="i" id="put_images_div_1" class="put_images_div">
                <img id="put_images_1" class="put_images" :src="v.src" alt="">
                <div class="imgclose" @click.stop="delImg(i)">
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
            <div class="dramic_56" @click.stop="messageimages()">
                <img class="dramic_7" src="/plusone88/assets/img/icon-uploadphoto@2x.png" alt="" style="border-radius: 0;">
            </div>
            <input type="file" class="messageinput" @change="imagepro()" id="messageinput" name="file" accept="image/png,image/jpg,image/gif,image/jpeg,image/webp">
            <div class="price_form" @click.stop="openPrices()" style="padding: 0;margin-bottom: 0;width: 60%;">
                <div class="dramicpostskill">
                    {{ choiceskill }}
                </div>
                <div class="many_prices dramic_skills" v-show="openprice == 1">
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
        <div class="dramic_25" style="margin-left: 0;" @click.stop="message(4)">
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
                    <div class="dramic_86" v-show="bigprepop == 1" style="top: -273px;">
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
                            <?foreach ($gift_list as $key => $gift):?>
                                <div class="dramic_89 border" id="presentbot_<?=$gift['id']?>" @click.stop="sel_pre_top_bot(<?=$gift['id']?>)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        <?=$gift['point']?> P幣
                                    </div>
                                </div>
                                <?endforeach;?>
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
                                <a href="https://www.plusone88.com/recharge/storedvalue">
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
                                            <div class="dramic_108" @click.stop="selsmanum(1)">
                                                <span class="dramic_109">
                                                    1
                                                </span>
                                                <span class="dramic_110">
                                                    一心一意
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(10)">
                                                <span class="dramic_109">
                                                    10
                                                </span>
                                                <span class="dramic_110">
                                                    十分喜歡
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(99)">
                                                <span class="dramic_109">
                                                    99
                                                </span>
                                                <span class="dramic_110">
                                                    長長久久
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(188)">
                                                <span class="dramic_109">
                                                    188
                                                </span>
                                                <span class="dramic_110">
                                                    要抱抱
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(520)">
                                                <span class="dramic_109">
                                                    520
                                                </span>
                                                <span class="dramic_110">
                                                    我愛你
                                                </span>
                                            </div>
                                            <div class="dramic_108" @click.stop="selsmanum(1314)">
                                                <span class="dramic_109">
                                                    1314
                                                </span>
                                                <span class="dramic_110">
                                                    一生一世
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="dramic_103" @click.stop="donate(singlemessage.id)">送禮</div>
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
                <!-- <div class="dramic_80" @click.stop="openreply(1)">
                    回覆
                </div> -->
            </div>
            <div class="dramic_27" v-show="replypop == 1">
                <textarea class="dramic_28" name="" id="" rows="3" v-model="replytext" maxlength="140"></textarea>
            </div>
            <div class="edit_div_17" style="margin-bottom: 10px;" v-show="replypop == 1">
                <div class="edit_div_18" @click.stop="openreply(0)">
                    取消
                </div>
                <div class="edit_div_19" @click.stop="replymessage(m.name)">
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
<!-- 贈禮視窗 -->
<div class="logoutpop" v-show="presentpop == 1">
    <div style="margin-bottom: 40px;">
        {{ donatemessage }}
    </div>
    <div class="logoutpop_div_wrap" @click.stop="presentpop = 0">
        <button class="logoutpop_confirm">
            確定
        </button>
    </div>
</div>
<!-- 贈禮視窗 -->
<div class="logoutmaskBg" v-show="presonmepop == 1" @click.stop="presonmessagepage(0)"></div>
<div class="logoutmaskBg" v-show="messagepop == 1" @click.stop="opmespop(2)"></div>
<div class="logoutmaskBg" v-show="presentpop == 1" @click.stop="presentpop = 0"></div>