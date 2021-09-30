<body >
    <div id="app" v-cloak @click="all_show($event)">
        <!-- 未登入畫面 -->
        <div class="header" v-show="!isLogin">
            <? if ($this->isLogin): ?>
                  <div class="header_left">
                <!-- 電腦版漢堡選單 -->
                <div for="nav-toggle" class="ham" @click="leftfuncshowornone('web')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>

                <!-- 手機版漢堡選單 -->
                <div for="nav-toggle" class="ham mobile_ham" @click="leftfuncshowornone('mobile')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>
                <div>
                    <a href="<?=base_url()?>">
                        <img src="<?=base_url()?>plusone88/assets/img/Plus-one_LOGO.jpg" width="120px">
                    </a>
                </div>
                <div class="search">
                    <!-- 搜尋功能 -->
                    <form action="" method="">
                        <input class="searchinput" name="search" type="text" placeholder="陪玩師暱稱或ID">
                    </form>
                    <!-- 搜尋功能 -->
                </div>
                <a href="<?=base_url()?>plusone/search">
                    <div class="searchbtn">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
            </div>
            <div class="header_right">
                <div class="scan">
                    手機掃描
                    <img class="qrcode" src="<?=base_url()?>plusone88/assets/img/qrcode.png" alt="">
                </div>
                <div>
                    <img width="60" src="<?=base_url()?>plusone88/assets/img/player-tag@2x.png" alt="">
                </div>
                <a href="<?=base_url()?>recharge/storedvalue">
                    <div class="balance">
                        <img width="24" height="24" src="<?=base_url()?>plusone88/assets/img/icon-money@2x.png">
                        <span class="nowmoney"><?=$this->isLogin->g_point?></span>
                        <div class="moneyplus">
                            <img src="<?=base_url()?>plusone88/assets/img/Group 474@2x.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?=base_url()?>plusone/dialoag">
                    <div class="message">
                        <img width="23" style="height: 23px;vertical-align: middle" src="<?=base_url()?>plusone88/assets/img/icon-msg@2x.png">
                        <span class="messagenum">1</span>
                    </div>
                </a>
                <div id="avatar-wrap" class="avatar-wrap">
                    <img id="avatar-wrap_div" class="avatar-wrap_img" src="<?=$this->isLogin->picture?>">
                    <div id="avatar-wrap_div_status" :class="status_color"></div>
                    <div id="preson_data" class="preson_data" v-show="preson_data == 1">
                        <div style="width: 100%" v-for="(activity_list, i) in activity_lists">
                            <a :href="activity_list.link" class="all_activity">
                                <div class="all_activity_icon">
                                    <img :src="activity_list.img" alt="">
                                </div>
                                <div class="all_activity_text">
                                    {{ activity_list.title }}
                                </div>
                            </a>
                        </div>
                        <div id="login_out" style="width: 100%" @click="logoutpop()">
                            <div class="all_activity">
                                <div class="all_activity_icon">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-logout@2x.png" alt="">
                                </div>
                                <div class="all_activity_text">
                                    登出
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php else: ?>
            <div class="header_left">
                <!-- 電腦版漢堡選單 -->
                <div for="nav-toggle" class="ham" @click="leftfuncshowornone('web')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>

                <!-- 手機版漢堡選單 -->
                <div for="nav-toggle" class="ham mobile_ham" @click="leftfuncshowornone('mobile')">
                    <div class="ham-origin">
                        <div class="ham-bar ham-bar--top"></div>
                        <div class="ham-bar ham-bar--middle"></div>
                        <div class="ham-bar ham-bar--bottom"></div>
                    </div>
                </div>

                <div>
                    <a href="<?=base_url()?>">
                        <img class="logo_img" src="<?=base_url()?>plusone88/assets/img/Plus-one_LOGO.jpg">
                    </a>
                </div>
                <div class="search">
                    <!-- 搜尋功能 -->
                    <form action="" method="">
                        <input class="searchinput" name="search" type="text" placeholder="陪玩師暱稱或ID">
                    </form>
                    <!-- 搜尋功能 -->
                </div>
                <a href="<?=base_url()?>plusone/search">
                    <div class="searchbtn">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
            </div>
            <div class="header_right">
                <div class="scan">
                    手機掃描
                    <img class="qrcode" src="<?=base_url()?>plusone88/assets/img/qrcode.png" alt="">
                </div>
                <div class="login_register" @click="openlogonpop()">
                    登入/註冊
                </div>
            </div>
            <?php endif; ?>
        </div>



        <!-- left -->
        <div class="body_content">
            <div class="leftfunc">
                <div class="hot_skill">
                    <div class="items">
                        <a href="<?=base_url()?>">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-home@2x.png">
                                </div>
                                <div>
                                    首頁
                                </div>
                            </div>
                        </a>
                        <a href="<?=base_url()?>plusone/fastorder">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-lightning@2x.png">
                                </div>
                                <div>
                                    極速約單
                                </div>
                            </div>
                        </a>
                        <a href="<?=base_url()?>plusone/dramic">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    動態
                                </div>
                            </div>
                        </a>
                        <div class="split"></div>
                    </div>

                    <? if ($this->isLogin ==  false): ?>
                    <!-- 未登入熱門技能畫面 -->
                    <div class="hot_skill_game">
                        <div class="hot_skill_text">
                            熱門技能
                        </div>     
                        <?php foreach ($is_hot as $key=>$list): ?>
                        <div>
                            <a href="<?=base_url()?>plusone/playerlist/<?=$list['id']?>" class="nav-item">
                                <div class="image">
                                    <img src="<?=$list['pic']?>">
                                </div>
                                <div class="game">
                                    <?=$list['skill_name']?>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <?php else: ?>
                    <!-- 登入常用技能畫面 -->
                    <div class="hot_skill_game">
                        <div class="hot_skill_img">
                            <div class="hot_skill_text">
                                常用技能
                            </div>
                            <a class="hot_skill_img_div" href="<?=base_url()?>member/skill">
                                <img src="<?=base_url()?>plusone88/assets/img/Group 823@2x.png">
                            </a>
                        </div>
                        <div class="s_use_talent" v-for="list in haveSkill.slice(0, 5)">
                            <a :href="'https://www.plusone88.com/plusone/playerlist/'+list.id" class="nav-item">
                                <div class="image">
                                    <img :src="list.image">
                                </div>
                                <div class="game">
                                    {{ list.title }}
                                </div>
                            </a>
                        </div>
                        <a href="<?=base_url()?>member/skill">
                            <div class="add_use_talent">
                                添加常用技能
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="footer">
                    <div class="links">
                        <a href="<?=base_url()?>plusone/question">常見Q&A</a>
                        <a href="mailto:service@plusone88.com">聯繫客服</a>
                        <a href="<?=base_url()?>plusone/privice">協議與條款</a>
                    </div>
                    <div class="soical">
                        <div>
                            <a href="">
                                <img src="<?=base_url()?>plusone88/assets/img/icon-line@2x.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="<?=base_url()?>plusone88/assets/img/icon-ig@2x.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="<?=base_url()?>plusone88/assets/img/icon-fb@2x.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="copyright">
                        Plus One © 2021
                    </div>
                </div>
            </div>

            <div class="leftfunc_mobile">
                <div class="leftfunc_mobile_wrap">
                    <div class="mobile_close" @click="closepopmobile()">
                        <i class="fas fa-times"></i>
                    </div>
                    <? if ($this->isLogin): ?>
                        <div class="mobile_headimg">
                            <div id="avatar-wrap" class="avatar-wrap">
                                <img id="avatar-wrap_div" class="avatar-wrap_img" src="<?=$this->isLogin->picture?>">
                                <div id="avatar-wrap_div_status" :class="status_color"></div>
                            </div>
                            <div class="mobile_name">
                                <?=$this->isLogin->name?>
                            </div>
                        </div>
                        <div class="line"></div>
                    <?php endif; ?>

                    <div class="items">
                    <? if ($this->isLogin == false): ?>
                        <a href="<?=base_url()?>plusone/fastorder">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-lightning@2x.png">
                                </div>
                                <div>
                                    極速約單
                                </div>
                            </div>
                        </a>
                        <a href="<?=base_url()?>plusone/dramic">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    動態
                                </div>
                            </div>
                        </a>
                        <a href="<?=base_url()?>plusone/">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    聯繫客服
                                </div>
                            </div>
                        </a>
                        <a href="<?=base_url()?>plusone/question">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    常見問題
                                </div>
                            </div>
                        </a>
                        <?php else: ?>

                        <a href="<?=base_url()?>plusone/fastorder">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-lightning@2x.png">
                                </div>
                                <div>
                                    極速約單
                                </div>
                            </div>
                        </a>
                        <a href="<?=base_url()?>plusone/dramic">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="<?=base_url()?>plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    動態
                                </div>
                            </div>
                        </a>
                        <a :href="activity_list.link" v-for="(activity_list, i) in activity_lists">
                            <div class="item">
                                <div class="itemimg">
                                    <img :src="activity_list.img">
                                </div>
                                <div>
                                    {{ activity_list.title }}
                                </div>
                            </div>
                        </a>
                        <?php endif; ?>
                       
                        <? if ($this->isLogin ==  false): ?>
                        <div class="item" @click="openlogonpop()">
                            <div class="itemimg">
                                <img src="<?=base_url()?>plusone88/assets/img/icon-home@2x.png">
                            </div>
                            <div>
                                登入
                            </div>
                        </div>

                        <?php else: ?>
                            
                        <div class="item" @click="logoutpop()">
                            <div class="itemimg">
                                <img src="<?=base_url()?>plusone88/assets/img/icon-home@2x.png">
                            </div>
                            <div>
                                登出
                            </div>
                        </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>