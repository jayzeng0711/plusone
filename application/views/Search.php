
<div class="search_rightfunc">
    <div class="search_wrap">
        <div class="search_text">
            <!--span class="search_name">kiki</span--> 搜尋結果
        </div>
        <div class="search_many_cards_all">

            <?php foreach ($search as $key=>$list): ?>
            <a href="<?=base_url()?>plusone/person/<?=$list['id']?>" class="search_many_cards">
                <div class="search_many_cards_tb">
                    <div class="many_cards_t">
                        <div class="many_cards_t_div">
                            <img src="<?=$list['pic']?>" alt="">
                        </div>
                        <div class="many_cards_t_div_b">
                            <div class="many_cards_t_div_bimg">
                                <img src="/plusone88/assets/img/icon-hot@2x.png" alt="">
                            </div>
                            <div class="many_cards_t_div_bhot">
                                高人氣
                            </div>
                        </div>
                        <div class="many_cards_autio">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="many_cards_autio_second">10”</p>
                            <audio style="display:none" controls preload="preload" src="<?=$list['voice']?>"></audio>
                        </div>
                        <div class="many_cards_autio_status"></div>
                    </div>
                    <div class="many_cards_b">
                        <div class="many_cards_b_name">
                            <?=$list['fakename']?>
                        </div>
                        <div class="many_cards_b_star">
                            <div class="many_cards_b_star_img">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-star@2x.png" alt="">
                                <img src="/plusone88/assets/img/icon-helfstar@2x.png" alt="">
                            </div>
                            <div class="many_cards_b_star_num">
                                (88)
                            </div>
                        </div>
                        <div class="many_cards_b_coupon">
                            <div class="many_cards_b_coupon_o">
                                券後價 <span class="many_cards_b_coupon_num"><?=$list['singleprice']?> </span>局
                            </div>
                            <div class="many_cards_b_coupon_t">
                                <?=$list['singleprice']?> 幣/局
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <?php endforeach; ?>


        </div>
    </div>
</div>

