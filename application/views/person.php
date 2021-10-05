<div class="balance_order_rightfunc">
    <div class="person_1">
        <div class="person_2">
            <div class="person_3">
                <div class="person_4">
                    <img class="person_8" src="<?= $member_pic['0']['pic_url'] ?>" alt="">
                </div>
                <div class="many_cards_t_div_b" style="background-color: #BDD35E;">
                    <div class="many_cards_t_div_bimg">
                        <img src="<?= base_url() ?>plusone88/assets/img/icon-recommend@2x.png" alt="">
                    </div>
                    <div class="many_cards_t_div_bhot">
                        本站推薦
                    </div>
                </div>
            </div>
            <div class="person_5">
                <div class="person_6"><img class="person_7" src="<?= $member_pic['1']['pic_url'] ?>" alt=""></div>
                <div class="person_6"><img class="person_7" src="<?= $member_pic['2']['pic_url'] ?>" alt=""></div>
                <div class="person_6"><img class="person_7" src="<?= $member_pic['3']['pic_url'] ?>" alt=""></div>
                <div class="person_6"><img class="person_7" src="<?= $member_pic['4']['pic_url'] ?>" alt=""></div>
            </div>
            <div class="person_9">
                <div class="person_10">名字</div>
                <div class="person_11"><?= $plusone_member['fakename'] ?></div>
                <div class="person_12">
                    <div class="person_13"><img class="person_14" src="<?= base_url() ?>plusone88/assets/img/icon-femaleicon@2x.png" alt=""></div>
                    <div class="person_15">27</div>
                </div>
                <div class="person_16">16分鐘前</div>
            </div>
            <div class="person_17">
                <div class="person_10">ID</div>
                <div class="person_11"><?= $plusone_member['uid'] ?></div>
                <div class="person_18">
                    <img class="person_19" src="<?= base_url() ?>plusone88/assets/img/icon-copy@2x.png" alt="">
                </div>
            </div>
            <div class="person_20"><?= $plusone_member['intro'] ?></div>
            <div class="person_21">
                <hr class="account_8">
            </div>
            <div class="person_22">
                <div class="person_23">
                    <img class="person_24" @click.stop="openbigpre()" src="<?= base_url() ?>plusone88/assets/img/Group 120@2x.png" alt="">
                    <div class="person_86" v-show="bigprepop == 1">
                        <div class="close" @click="closebigprepop()">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="dramic_87">
                            禮物
                        </div>
                        <div class="account_7" style="padding: 0px;">
                            <hr class="account_8">
                        </div>
                        <div class="dramic_94">
                            <div class="preson_90">
                                <?foreach ($gift_list as $key => $gift):?>
                                <div class="dramic_89 border" id="presentbot_<?= $gift['id'] ?>" @click.stop="sel_pre_top_bot(<?= $gift['id'] ?>)">
                                    <div class="dramic_93">
                                        <img class="dramic_91" src="/plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_92">
                                        <?= $gift['point'] ?> P幣
                                    </div>
                                </div>
                                <?endforeach;?>
                            </div>
                        </div>
                        <div class="dramic_104">
                            <div class="dramic_96">
                                <div class="dramic_97">
                                    <div class="dramic_105">
                                        <img style="width: 100%;" class="dramic_91" src="<?= base_url() ?>plusone88/assets/img/icon-money@2x.png" alt="">
                                    </div>
                                    <div class="dramic_98">0</div>
                                </div>
                                <a href="">
                                    <div class="dramic_99">
                                        <div class="dramic_100">
                                            儲值
                                        </div>
                                        <img class="dramic_91" style="width: 7px" src="<?= base_url() ?>plusone88/assets/img/icon-yrightarrow@2x.png" alt="">
                                    </div>
                                </a>
                                <div class="dramic_101">
                                    <div class="preson_102" @click.stop="opensmall()">
                                        <div style="font-size:13px">
                                            {{ smallprenum }}
                                        </div>
                                        <div class="dramic_106">
                                            <img style="min-width: 10px;max-width: 10px;" src="<?= base_url() ?>plusone88/assets/img/icon-blackarrow@2x.png" alt="">
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
                                    <div class="preson_103" @click.stop="donatepreson(<?=$skillid?>)">送禮</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="person_25">
                    <img class="person_26" @click="openmantsocial()" src="<?= base_url() ?>plusone88/assets/img/icon-uploadcloudmuti@2x.png" alt="">
                    <div class="person_61" v-show="mutisocial == 1">
                        <div class="person_62"><a href=""><img src="<?= base_url() ?>plusone88/assets/img/icon-line1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="<?= base_url() ?>plusone88/assets/img/icon-fb1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="<?= base_url() ?>plusone88/assets/img/icon-ig1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="<?= base_url() ?>plusone88/assets/img/icon-twitter1@2x.png" alt=""></a></div>
                        <div class="person_62"><a href=""><img src="<?= base_url() ?>plusone88/assets/img/icon-wechat1@2x.png" alt=""></a></div>
                        <div class="person_62">
                            <div class="person_63">
                                <a href=""><img src="<?= base_url() ?>plusone88/assets/img/icon-sina1@2x.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="person_27">
            <div class="person_28">
                <div class="person_30" @click="left_prebtn()"><img class="person_32" src="<?= base_url() ?>plusone88/assets/img/icon-rightarrowgray@2x.png" alt=""></div>
                <div class="person_34">
                    <?foreach ($member_skill_info as $key => $value):?>
                    <a href="<?= base_url('plusone/person/') ?><?= $value['id'] ?>">
                        <div class="person_29" @click="addactive(-<?= $value['id'] ?>)" id="person_-<?= $value['id'] ?>"><?= $skill_type[$value['skill_type']]['skill_name'] ?></div>
                    </a>
                    <?endforeach;?>
                    <!--div class="person_35">
                        <div class="person_29" v-for="(list, i) in personskill" :id="'person_'+i" @click="addactive(i)">{{ list }}</div>
                    </div-->
                </div>
                <div class="person_31" @click="right_prebtn()"><img class="person_33" src="<?= base_url() ?>plusone88/assets/img/icon-rightarrowgray@2x.png" alt=""></div>
            </div>
            <div class="person_37">
                <hr class="person_36">
            </div>
            <div class="person_38">
                <!--div class="person_39 personall person_39_active" id="personmod_1" @click="selemodel(1)">標準模式 <?= $skill_info['singleprice'] ?>幣/局</div-->

            </div>
            <div class="person_40">
                <span class="person_41"><?= $skill_info['singleprice'] ?> 幣</span><span class="person_42">/局</span>
            </div>
            <div class="person_43">
                <?if($skill_info['coupon_1'] > 0):?>
                <div class="person_44">滿<?= $skill_info['coupon_1'] ?>贈<?= $skill_info['coupon_2'] ?></div>
                <?endif;?>
                <?if($skill_info['coupon_3'] > 0):?>
                <div class="person_44">滿<?= $skill_info['coupon_3'] ?>贈<?= $skill_info['coupon_4'] ?></div>
                <?endif;?>
                <?if($skill_info['coupon_5'] > 0):?>
                <div class="person_44">滿<?= $skill_info['coupon_5'] ?>贈<?= $skill_info['coupon_6'] ?></div>
                <?endif;?>
            </div>
            <div class="person_45">
                <div class="person_46">接單數量</div>
                <div class="person_47">402</div>
            </div>
            <div class="person_50">
                <div class="person_48">
                    <div class="many_cards_t_div_bimg">
                        <img class="person_49" src="<?= base_url() ?>plusone88/assets/img/icon-recommend@2x.png" alt="">
                    </div>
                    <div class="many_cards_t_div_bhot">
                        本站推薦
                    </div>
                </div>
            </div>
            <div class="person_51">
                <a href="<?= base_url() ?>plusone/singledialoag">
                    <div class="person_52">聊一聊</div>
                </a>
                <a href="<?= base_url() ?>plusone/confirmorder">
                    <div class="person_53">立即下單</div>
                </a>
            </div>
            <div class="person_54">技能資訊</div>
            <div class="many_cards_autio" style="align-items: center;display: inline-flex;position: initial">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p class="many_cards_autio_second">10”</p>
                <audio style="display:none" controls preload="preload" src="<?= $skill_info['voice'] ?> "></audio>
            </div>
            <div class="person_55">
                <?= $skill_info['intro'] ?>
            </div>
            <div class="person_56">
                <div class="person_57">段位</div>
                <div class="person_58">白金</div>
            </div>
            <!--div class="person_56">
                <div class="person_57">擅長位置</div>
                <div class="person_58">上單 中單 輔助</div>
            </div>
            <div class="person_56">
                <div class="person_57">擅長英雄類型</div>
                <div class="person_58">法師 輔助</div>
            </div>
            <div class="person_56">
                <div class="person_57">可接模式</div>
                <div class="person_58">積分 NG</div>
            </div-->
            <div class="person_59">
                <?if($skill_img):?>
                <img class="person_60" src="<?= $skill_img['url'] ?>" alt="">
                <?else:?>
                <?endif;?>
            </div>
        </div>
    </div>
</div>
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
<div class="logoutmaskBg" v-show="presentpop == 1" @click.stop="presentpop = 0"></div>