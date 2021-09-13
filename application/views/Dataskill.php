
<div class="confirm_order_rightfunc">
    <div class="myorder_wrap">
        <div class="editdata_text">
            資料與技能管理
        </div>
        <div class="getmoney_all_text" style="width: 830px;">
            <div class="together myorder_all myorder_speacil_line" id="skill_1" @click="changeskill(1)">編輯資料</div>
            <div class="together myorder_alling" id="skill_2" @click="changeskill(2)">技能管理</div>
        </div>
        <div class="edit_wrap" v-show="dataskill == 1">
            <div class="edit_div_1">
                <div class="edit_div_2">
                    <div class="edit_div_3">我的相簿</div>
                    
                    <div class="edit_div_4">
                        
                        <?php foreach ($userImage as $image): ?>
                        <form id="upfile_<?=$image['id']?>">
                        <div class="edit_div_5" id="imagediv_<?=$image['id']?>"  @click.stop="openinput(<?=$image['id']?>)" style="position: relative">
                            <input type="file" name="file" id="input_image_<?=$image['id']?>" accept="image/png,image/jpg,image/gif,image/jpeg,image/webp" @change="changesinglepic(<?=$image['id']?>,0)">
                            <img class="edit_div_6 <?if($image['status']== 0){echo 'edit_div_spec';}?>" id="head_image_<?=$image['id']?>" src="<?=$image['pic_url']?>" alt="">
                            <div id='imgclose_<?=$image['id']?>' class="imgclose <?if($image['status']== 1){echo 'voiceinput';}?>" @click.stop="changesinglepic(<?=$image['id']?>,1)">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                        </form>
                        <?php endforeach; ?>
                        
                    </div>
                    
                </div>
                <div class="edit_div_7">
                    <div class="edit_div_8">
                        <div class="edit_div_9">
                            <div class="edit_div_10">
                                我的暱稱
                            </div>
                            <div class="edit_div_11" @click="editName(1)" v-show="edit_name == 0">
                                <img class="edit_div_12" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                            </div>
                        </div>
                        <div class="edit_div_13">
                            <div class="edit_div_14" v-if="edit_name == 0">
                            {{ user.name }}
                            </div>
                            <div class="edit_div_15" v-else>
                                <input class="edit_div_16" type="text"  maxlength="10" v-model="user.name">
                            </div>
                            <div class="edit_div_17" v-show="edit_name == 1">
                                <div class="edit_div_18" @click="editName(0)">
                                    取消
                                </div>
                                <div class="edit_div_19" @click="coneditName()">
                                    確定
                                </div>
                            </div>
                        </div>
                        <div class="edit_div_20" style="margin-bottom: 20px">
                            語音介紹
                        </div>
                        <div class="edit_div_21" style="justify-content: initial;">
                            <div class="many_cards_autio dataskill" id="cards_autio_1" style="align-items: center;display: inline-flex;position: initial;margin-right: 20px;" @click.stop.prevent="playaudio(1)">
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
                            <div class="edit_div_27" @click="uploadvoice()">
                                <form action="" id="voiceinput">
                                    <input type="file" name="file" accept=".mp3,.wma,.m4a,.wav,.ape,.flac,.aac" class="voiceinput" @change="uploadvoicechskill()">
                                </form>
                                <div class="edit_div_28">
                                    <img class="edit_div_29" src="/plusone88/assets/img/icon-uploadcloud@2x.png" alt="">
                                </div>
                                <div class="edit_div_30">
                                    上傳音訊檔
                                </div>
                            </div>
                        </div>
                        <div class="edit_div_31">
                            請上傳3-60秒的錄音(支持mp3/wma/m4a，檔案大小不超過3M)
                        </div>
                        <div class="edit_div_32">
                            <div class="edit_div_10">
                                自我介紹
                            </div>
                            <div class="edit_div_11" v-if="introduce.length > 0 && textarea == 0" @click="openintro()">
                                <img class="edit_div_12" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                            </div>
                        </div>
                        <div class="edit_div_33" v-if="introduce.length == 0" v-show="textarea == 0" @click="openintro()">
                            <div class="edit_div_34"><img class="edit_div_35" src="/plusone88/assets/img/icon-intro@2x.png" alt=""></div>
                            <div class="edit_div_36">添加您的自我介紹</div>
                        </div>
                        <div class="edit_div_37" v-else v-show="textarea == 0">{{ introduce }}</div>
                        <div class="edit_div_38" v-show="textarea == 1">
                            <textarea class="edit_div_39" rows="4" maxlength="500" placeholder="請輸入文字介紹" v-model="introduce"></textarea>
                        </div>
                        <div class="edit_div_17" v-show="textarea == 1">
                            <div class="edit_div_18" @click="canceltext()">
                                取消
                            </div>
                            <div class="edit_div_19" @click="confirmtext()">
                                確定
                            </div>
                        </div>
                    </div>
                    <div class="edit_div_32">
                        <div class="edit_div_10">
                            性別
                        </div>
                        <div class="edit_div_11" @click="sexpop()">
                            <img class="edit_div_12" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                        </div>
                    </div>
                    <div class="edit_div_40">
                        {{ usersex }}
                    </div>
                    <div class="edit_div_9">
                        <div class="edit_div_10">
                            生日
                        </div>
                        <div class="edit_div_11" v-show="editbitday == 0 && yearpp != ''" @click="editbbb()">
                            <img class="edit_div_12" src="/plusone88/assets/img/icon-edit@2x.png" alt="">
                        </div>
                    </div>
                    <div class="edit_div_33" @click.stop="addbir()" v-show="editbitday == 0 && yearpp == ''" @click="addbir()">
                        <div class="edit_div_34"><img class="edit_div_35" src="/plusone88/assets/img/icon-intro@2x.png" alt=""></div>
                        <div class="edit_div_36">添加您的生日</div>
                    </div>
                    <div class="edit_div_44" v-show="editbitday == 1 && yearpp != ''">
                        <div class="edit_div_45" @click.stop="openyear(1)">
                            <div class="edit_div_48">
                                {{ yearpp }}
                            </div>
                            <div class="edit_div_49">
                                <img class="edit_div_50" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                            </div>
                            <div class="birthday_option" v-show="biryear == 1 && birmon == 0 && bir_day == 0">
                                <div class="prices_list" @click.stop="dotyear(n + offset)" v-for="n in 72">
                                    {{ n + offset }}
                                </div>
                            </div>
                        </div>
                        <div class="edit_div_46" @click.stop="openyear(2)">
                            <div class="edit_div_48">
                                {{ monthpp }}
                            </div>
                            <div class="edit_div_49">
                                <img class="edit_div_50" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                            </div>
                            <div class="birthday_option" v-show="birmon == 1 && biryear == 0 && bir_day == 0">
                                <div class="prices_list" @click.stop="dotmonth(n)" v-for="n in 12">
                                    {{ n }}
                                </div>
                            </div>
                        </div>
                        <div class="edit_div_47" @click.stop="openyear(3)">
                            <div class="edit_div_48">
                                {{ daypp }}
                            </div>
                            <div class="edit_div_49">
                                <img class="edit_div_50" src="/plusone88/assets/img/icon-blackarrow@2x.png" alt="">
                            </div>
                            <div class="birthday_option" v-show="bir_day == 1 && biryear == 0 && birmon == 0">
                                <div class="prices_list" @click.stop="dotday(n)" v-for="n in 31">
                                    {{ n }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-show="editbitday == 0 && yearpp != ''" @click="addbir()">
                        {{ yearpp }}年{{ monthpp }}月{{ daypp }}日
                    </div>
                    <div class="edit_div_17" v-show="editbitday == 1 && yearpp != ''">
                        <div class="edit_div_18" @click="cancelbir()">
                            取消
                        </div>
                        <div class="edit_div_19" @click="confirmbir()">
                            確定
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-show="dataskill == 2">
       
            <div class="dataslik_1">
                <a href="<?=base_url()?>member/skill">
                    <div class="dataslik_2">
                        <img class="dataslik_3" src="/plusone88/assets/img/icon-addblue@2x.png" alt="">
                        <div class="dataslik_4">添加新技能</div>
                    </div>
                </a>
                 <?php foreach ($getAllSkill as $skill): ?>
                <div class="dataslik_5"  @click.stop="editskill(<?=$skill['id']?>)">
                    <div class="dataslik_6"><img class="dataslik_7" src="<?=$getSkillType[$skill['skill_type']]['pic']?>" alt=""></div>
                    <div class="dataslik_8">
                        <div class="dataslik_9"><?=$getSkillType[$skill['skill_type']]['skill_name']?></div>
                        <div class="dataslik_10"><?=$skill['amount']?> 幣 / <?=$skill['time']?> 分鐘</div>
                        <div class="dataslik_11"><?if ($skill['is_open'] == 1):?>接單中<?php else: ?> 未接單 <?php endif; ?></div>
                    </div>
                    <div class="dataslik_12">
                        <? if($skill['is_open'] == 1):?>

                        <div id="skill_<?=$skill['id'] ?>" class="openorclose_1 switch_wrap" @click.stop="circleconfirmd('<?=$skill['id'] ?>',0)">
                            <div class="circle_1 switch"></div>
                        </div>

                        <?php else: ?>

                        <div class="openorclose switch_wrap" @click.stop="circleconfirmd('<?=$skill['id'] ?>',1)">
                            <div class="circle switch"></div>
                        </div>

                        <?php endif; ?>
                    </div>
                </div>
                 <?php endforeach; ?>
            </div>
       
        </div>
    </div>
</div>

<div class="logoutpop" v-show="sexselectnum == 1">
    <div class="confrimfast_text">
        您是？
    </div>
    <div class="logoutpop_div_wrap">
        <div class="edit_div_41" @click="usersexconfirm('男生',1)">
            <div class="edit_div_42">
                <img class="edit_div_43" src="/plusone88/assets/img/icon-male@2x.png" alt="">
            </div>
            <div>
                男生
            </div>
        </div>
        <div class="edit_div_41" @click="usersexconfirm('女生',2)">
            <div class="edit_div_42">
                <img class="edit_div_43" src="/plusone88/assets/img/icon-female@2x.png" alt="">
            </div>
            <div>
                女生
            </div>
        </div>
    </div>
</div>
<div class="logoutmaskBg" v-show="sexselectnum == 1"></div>
