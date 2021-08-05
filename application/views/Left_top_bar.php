<body>
    <div id="app" v-cloak @click="all_show($event)">
        <!-- 未登入畫面 -->
        <div class="header" v-show="!isLogin">
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
                    <a href="/plusone88/plusone">
                        <img class="logo_img" src="/plusone88/assets/img/Plus-one_LOGO.jpg">
                    </a>
                </div>
                <div class="search">
                    <!-- 搜尋功能 -->
                    <form action="" method="">
                        <input class="searchinput" name="search" type="text" placeholder="陪玩師暱稱或ID">
                    </form>
                    <!-- 搜尋功能 -->
                </div>
                <a href="/plusone88/plusone/search">
                    <div class="searchbtn">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
            </div>
            <div class="header_right">
                <div class="scan">
                    手機掃描
                    <img class="qrcode" src="/plusone88/assets/img/qrcode.png" alt="">
                </div>
                <div class="login_register" @click="openlogonpop()">
                    登入/註冊
                </div>
            </div>
        </div>

        <!-- 登入畫面 -->
        <div class="header" v-show="isLogin">
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
                    <a href="/plusone88/plusone">
                        <img src="/plusone88/assets/img/Plus-one_LOGO.jpg" width="120px">
                    </a>
                </div>
                <div class="search">
                    <!-- 搜尋功能 -->
                    <form action="" method="">
                        <input class="searchinput" name="search" type="text" placeholder="陪玩師暱稱或ID">
                    </form>
                    <!-- 搜尋功能 -->
                </div>
                <a href="/plusone88/plusone/search">
                    <div class="searchbtn">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
            </div>
            <div class="header_right">
                <div class="scan">
                    手機掃描
                    <img class="qrcode" src="/plusone88/assets/img/qrcode.png" alt="">
                </div>
                <div>
                    <img width="60" src="/plusone88/assets/img/player-tag@2x.png" alt="">
                </div>
                <a href="/plusone88/plusone/storedvalue">
                    <div class="balance">
                        <img width="24" height="24" src="/plusone88/assets/img/icon-money@2x.png">
                        <span class="nowmoney">25</span>
                        <div class="moneyplus">
                            <img src="/plusone88/assets/img/Group 474@2x.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="/plusone88/plusone/dialoag">
                    <div class="message">
                        <img width="23" style="height: 23px;vertical-align: middle" src="/plusone88/assets/img/icon-msg@2x.png">
                        <span class="messagenum">1</span>
                    </div>
                </a>
                <div id="avatar-wrap" class="avatar-wrap">
                    <img id="avatar-wrap_div" class="avatar-wrap_img" src="https://resource.3uplay.com/user-static/8153f22f-d0cd-4f47-b2fa-7725958673e88571443756589800268.png?d=100x100">
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
                                    <img src="/plusone88/assets/img/icon-logout@2x.png" alt="">
                                </div>
                                <div class="all_activity_text">
                                    登出
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- left -->
        <div class="body_content">
            <div class="leftfunc">
                <div class="hot_skill">
                    <div class="items">
                        <a href="/plusone88/plusone/">
                            <div class="item itemOne">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-home@2x.png">
                                </div>
                                <div>
                                    首頁
                                </div>
                            </div>
                        </a>
                        <a href="/plusone88/plusone/fastorder">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-lightning@2x.png">
                                </div>
                                <div>
                                    極速約單
                                </div>
                            </div>
                        </a>
                        <a href="/plusone88/plusone/dramic">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    動態
                                </div>
                            </div>
                        </a>
                        <div class="split"></div>
                    </div>

                    <!-- 未登入熱門技能畫面 -->
                    <div class="hot_skill_game" v-show="!isLogin">
                        <div class="hot_skill_text">
                            熱門技能
                        </div>
                        <div>
                            <a href="/plusone88/plusone/playerlist" class="nav-item">
                                <div class="image">
                                    <img src="/plusone88/assets/img/Group 5.png">
                                </div>
                                <div class="game">
                                    英雄聯盟
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="/plusone88/plusone/playerlist" class="nav-item">
                                <div class="image">
                                    <img src="/plusone88/assets/img/Group 3.png">
                                </div>
                                <div class="game">
                                    傳說對決
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="/plusone88/plusone/playerlist" class="nav-item">
                                <div class="image">
                                    <img src="/plusone88/assets/img/Group 1.png">
                                </div>
                                <div class="game">
                                    激鬥峽谷
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 登入常用技能畫面 -->
                    <div class="hot_skill_game" v-show="isLogin">
                        <div class="hot_skill_img">
                            <div class="hot_skill_text">
                                常用技能
                            </div>
                            <div class="hot_skill_img_div">
                                <a href="/plusone88/plusone/skill"><img src="/plusone88/assets/img/Group 823@2x.png"></a>
                            </div>
                        </div>
                        <div class="s_use_talent">
                            <a href="/plusone88/plusone/playerlist" class="nav-item">
                                <div class="image">
                                    <img src="/plusone88/assets/img/Group 5@2x.png">
                                </div>
                                <div class="game">
                                    英雄聯盟
                                </div>
                            </a>
                        </div>
                        <div class="s_use_talent">
                            <a href="/plusone88/plusone/playerlist" class="nav-item">
                                <div class="image">
                                    <img src="/plusone88/assets/img/Group 3@2x.png">
                                </div>
                                <div class="game">
                                    傳說對決
                                </div>
                            </a>
                        </div>
                        <div class="s_use_talent">
                            <a href="/plusone88/plusone/playerlist" class="nav-item">
                                <div class="image">
                                    <img src="/plusone88/assets/img/Group 1@2x.png">
                                </div>
                                <div class="game">
                                    激鬥峽谷
                                </div>
                            </a>
                        </div>
                        <a href="/plusone88/plusone/skill">
                            <div class="add_use_talent">
                                添加常用技能
                            </div>
                        </a>
                    </div>
                </div>

                <div class="footer">
                    <div class="links">
                        <a href="/plusone88/plusone/question">常見Q&A</a>
                        <a href="">聯繫客服</a>
                        <a href="/plusone88/plusone/privice">協議與條款</a>
                    </div>
                    <div class="soical">
                        <div>
                            <a href="">
                                <img src="/plusone88/assets/img/icon-line@2x.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="/plusone88/assets/img/icon-ig@2x.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="/plusone88/assets/img/icon-fb@2x.png" alt="">
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
                    <div class="mobile_headimg" v-show="isLogin">
                        <div id="avatar-wrap" class="avatar-wrap">
                            <img id="avatar-wrap_div" class="avatar-wrap_img" src="https://resource.3uplay.com/user-static/8153f22f-d0cd-4f47-b2fa-7725958673e88571443756589800268.png?d=100x100">
                            <div id="avatar-wrap_div_status" :class="status_color"></div>
                        </div>
                        <div class="mobile_name">
                            Jayzeng
                        </div>
                    </div>
                    <div class="line" v-show="isLogin"></div>
                    <div class="items">
                        <a href="/plusone88/plusone/fastorder">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-lightning@2x.png">
                                </div>
                                <div>
                                    極速約單
                                </div>
                            </div>
                        </a>
                        <a href="/plusone88/plusone/dramic">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-wall@2x.png">
                                </div>
                                <div>
                                    動態
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-home@2x.png">
                                </div>
                                <div>
                                    聯繫客服
                                </div>
                            </div>
                        </a>
                        <a href="/plusone88/plusone/question">
                            <div class="item">
                                <div class="itemimg">
                                    <img src="/plusone88/assets/img/icon-home@2x.png">
                                </div>
                                <div>
                                    常見Q&A
                                </div>
                            </div>
                        </a>
                        <div class="item" v-show="!isLogin" @click="openlogonpop()">
                            <div class="itemimg">
                                <img src="/plusone88/assets/img/icon-home@2x.png">
                            </div>
                            <div>
                                登入
                            </div>
                        </div>
                        <div class="item" v-show="isLogin">
                            <div class="itemimg">
                                <img src="/plusone88/assets/img/icon-home@2x.png">
                            </div>
                            <div>
                                登出
                            </div>
                        </div>
                    </div>
                </div>
            </div>