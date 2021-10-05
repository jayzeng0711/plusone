
<!-- pop up -->

<a id='parentIframe' href="https://www.youtube.com/watch?v=7fQr6HzzyWs&autoplay=1" data-fancybox></a>


<script type="application/javascript">
//一秒後模擬點擊
  setTimeout(function() {
    // IE
    if(document.all) {
      document.getElementById("parentIframe").click();
    }
    // 其它瀏覽器
    else {
      var e = document.createEvent("MouseEvents");
      e.initEvent("click", true, true);
      document.getElementById("parentIframe").dispatchEvent(e);
    }
  }, 1000);
</script>

<!-- pop up end-->


<div class="rightfunc">
    <div class="stepBox">
        <div class="infoCarousel owl-carousel owl-theme">
            <div class="banner">
                <div><img src="<?=base_url()?>plusone88/assets/img/ad-img@2x.png"></div>
            </div>
            <div class="banner">
                <div><img src="<?=base_url()?>plusone88/assets/img/ad-img@2x.png"></div>
            </div>
            <div class="banner">
                <div><img src="<?=base_url()?>plusone88/assets/img/ad-img@2x.png"></div>
            </div>
            <div class="banner">
                <div><img src="<?=base_url()?>plusone88/assets/img/ad-img@2x.png"></div>
            </div>
        </div>
    </div>
    <? if ($this->isLogin ==  false): ?>
        <div class="alotofskills">
            熱門技能
        </div>
    <?php else: ?>
        <div class="alotofskills">
            常用技能
        </div>
    <?php endif; ?>
    <div class="home_many_games">
        <? if ($this->isLogin ==  false): ?>
            <div class="many_games_wrap">
                <div class="many_games">
                    <?php foreach ($is_hot as $key=>$list): ?>
                    <div class="use_talent">
                        <a href="<?=base_url()?>plusone/playerlist/<?=$list['id']?>" class="nav-item_ano">
                            <div class="image_ano">
                                <img src="<?=$list['pic']?>">
                            </div>
                            <div class="game_ano">
                                <?=$list['skill_name']?>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="many_games_wrap">
                <div class="look_more">
                    <a href="<?=base_url()?>member/skill">看更多</a>
                </div>
                <div class="many_games">
                    <div class="use_talent" v-for="list in haveSkill.slice(0, 5)">
                        <a :href="'https://www.plusone88.com/plusone/playerlist/'+list.id" class="nav-item_ano">
                            <div class="image_ano">
                                <img :src="list.image">
                            </div>
                            <div class="game_ano">
                                {{ list.title }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="two_methods">
            <a href="<?=base_url()?>plusone/fastorder" class="mobile_size">
                <div class="fast_date_order">
                    <div>
                        <div class="order_word">
                            <span>極速約單</span> <img src="<?=base_url()?>plusone88/assets/img/icon-rightarrow@2x.png" alt="" width="5">
                        </div>
                        <div class="totla_order"><span>888</span>人已約單</div>
                    </div>
                    <div>
                        <img class="date_img_top" src="https://resource.3uplay.com/user-static/8153f22f-d0cd-4f47-b2fa-7725958673e88571443756589800268.png?d=100x100">
                        <img class="date_img_bottom" src="https://resource.3uplay.com/user-static/8153f22f-d0cd-4f47-b2fa-7725958673e88571443756589800268.png?d=100x100">
                    </div>
                </div>
            </a>
            <a href="https://www.plusone88.com/livepk/login" class="mobile_size"  target="_blank">
                <div class="rank">
                    <div>
                        <div class="order_word">
                            <span>青豆遊戲</span> <img src="<?=base_url()?>plusone88/assets/img/icon-rightarrow@2x.png" alt="" width="5">
                        </div>
                        <div class="totla_order_rank">玩遊戲賺青豆</div>
                    </div>
                    <div>
                        <img class="rank_img" src="<?=base_url()?>plusone88/assets/img/icon-link2@2x.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="cards_wrap">
        <?php foreach ($is_show as $key=>$list): ?>
        <div class="game_title">
            <div>
                <?=$list['skill_name']?>
            </div>
            <a href="https://www.plusone88.com/plusone/playerlist/<?=$list['id']?>" class="two_look_more">
                看更多
            </a>
        </div>
            <div class="many_cards_all">
                <?php foreach ($list['date'] as $key=>$l): ?>
                <a href="<?=base_url()?>plusone/person/<?=$l['id']?>" class="mobile_card_wid">
                    <div class="many_cards">
                        <div class="many_cards_tb">
                            <div class="many_cards_t">
                                <div class="many_cards_t_div">
                                    <img src="<?=$l['pic']?>" alt="">
                                </div>
                                <div class="many_cards_t_div_b">
                                    <div class="many_cards_t_div_bimg">
                                        <img src="<?=base_url()?>plusone88/assets/img/icon-hot@2x.png" alt="">
                                    </div>
                                    <div class="many_cards_t_div_bhot">
                                        高人氣
                                    </div>
                                </div>
                                <div class="many_cards_autio" id="cards_autio_<?=$l['id']?>" @click.stop.prevent="playaudio(<?=$l['id']?>)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <p class="many_cards_autio_second" id="playersec_<?=$l['id']?>">10”</p>
                                    <audio id="player_<?=$l['id']?>" preload="preload" src="<?=$l['voice']?>"></audio>
                                </div>
                                <div class="many_cards_autio_status"></div>
                            </div>
                            <div class="many_cards_b">
                                <div class="many_cards_b_name">
                                    <?=$l['fakename']?>
                                </div>
                                <div class="many_cards_b_star">
                                    <div class="many_cards_b_star_img">
                                        <img src="<?=base_url()?>plusone88/assets/img/icon-star@2x.png" alt="">
                                        <img src="<?=base_url()?>plusone88/assets/img/icon-star@2x.png" alt="">
                                        <img src="<?=base_url()?>plusone88/assets/img/icon-star@2x.png" alt="">
                                        <img src="<?=base_url()?>plusone88/assets/img/icon-star@2x.png" alt="">
                                        <img src="<?=base_url()?>plusone88/assets/img/icon-helfstar@2x.png" alt="">
                                    </div>
                                    <div class="many_cards_b_star_num">
                                        (88)
                                    </div>
                                </div>
                                <div class="many_cards_b_coupon">
                                    <div class="many_cards_b_coupon_o">
                                         <span class="many_cards_b_coupon_num"> <?=$l['singleprice']?>/</span>局
                                    </div>
                                    <div class="many_cards_b_coupon_o">
                                       優惠<?=$l['firstprice']?>/首單
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div id="panel"></div>
