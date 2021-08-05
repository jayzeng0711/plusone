<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/plusone88/assets/css/reset.css">
    <link rel="stylesheet" href="/plusone88/assets/css/animate.min.css">
    <link rel="stylesheet" href="/plusone88/assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link href="https://www.setn.com/resources/OwlCarousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://www.setn.com/resources/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</head>

<?php
$this->load->view('Left_top_bar');
?>
<div class="rightfunc">
    <div class="skill_wrap">
        <div class="skill_wrap_edit" @click="editaddgames()" v-show="edit_status == 0">編輯</div>
        <div class="skill_wrap_edit" @click="editfinal()" v-show="edit_status == 1">完成</div>
        <div class="skill_wrap_top">
            <div class="skill_wrap_top_text">
                常用技能
            </div>
            <div class="skill_wrap_top_b">
                點擊編輯添加您的常用技能
            </div>
        </div>
        <div class="skill_wrap_bottom">
            <div class="skill_wrap_bottom_li" v-for="(skill, i) in haveSkill">
                <div>
                    {{ skill.title }}
                </div>
                <div class="skill_wrap_bottom_li_cancel" v-show="edit_status == 1" @click="top_none(skill.id,skill.title,skill.image,skill.isSklii)">-</div>
            </div>
        </div>
    </div>
    <div class="edit_many_games">
        <div class="edit_many_games_title">
            <div class="edit_many_games_title_text">
                <div class="edit_many_games_title_inner">
                    <a class="game_href special_color" href="#game_1">熱門推薦</a>
                </div>
            </div>
            <div class="edit_many_games_title_text">
                <div class="edit_many_games_title_inner">
                    <a class="game_href" href="#game_2">手機遊戲</a>
                </div>
            </div>
            <div class="edit_many_games_title_text">
                <div class="edit_many_games_title_inner">
                    <a class="game_href" href="#game_3">電腦遊戲</a>
                </div>
            </div>
            <div class="edit_many_games_title_text">
                <div class="edit_many_games_title_inner">
                    <a class="game_href" href="#game_4">主機遊戲</a>
                </div>
            </div>
            <div class="edit_many_games_title_text">
                <div class="edit_many_games_title_inner">
                    <a class="game_href" href="#game_5">語音陪伴</a>
                </div>
            </div>
            <div class="edit_many_games_title_text">
                <div class="edit_many_games_title_inner">
                    <a class="game_href" href="#game_6">更多技能</a>
                </div>
            </div>
        </div>
        <div class="limit_height">
            <div class="edit_many_games_lists" id="game_1">
                <div class="edit_many_games_lists_title">
                    熱門推薦
                </div>
                <div class="edit_many_games_lists_images">
                    <div class="edit_many_games_lists_image" v-for="(game, i) in all_games[0]" :id="'gamelist_'+game.id">
                        <div class="edit_many_games_lists_img_div">
                            <div v-if="game.isSklii">
                                <img class="edit_many_games_lists_img_sin" v-show="edit_status == 0" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <img class="edit_many_games_lists_img_sin add_border" v-show="edit_status == 1" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="add_skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="top_none(game.id,game.title,game.image)">-</div>
                            </div>
                            <div v-else>
                                <img class="edit_many_games_lists_img_sin" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="add_game_skill(game.id,game.title,game.image)">+</div>
                            </div>
                        </div>
                        <div class="edit_many_games_lists_img_div_name" :id="'div_nam_'+game.id">
                            {{ game.title }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit_many_games_lists" id="game_2">
                <div class="edit_many_games_lists_title">
                    手機遊戲
                </div>
                <div class="edit_many_games_lists_images">
                    <div class="edit_many_games_lists_image" v-for="(game, i) in all_games[1]" :id="'gamelist_'+game.id">
                        <div class="edit_many_games_lists_img_div">
                            <div v-if="game.isSklii">
                                <img class="edit_many_games_lists_img_sin" v-show="edit_status == 0" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <img class="edit_many_games_lists_img_sin add_border" v-show="edit_status == 1" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="add_skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="top_none(game.id,game.title,game.image)">-</div>
                            </div>
                            <div v-else>
                                <img class="edit_many_games_lists_img_sin" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="add_game_skill(game.id,game.title,game.image)">+</div>
                            </div>
                        </div>
                        <div class="edit_many_games_lists_img_div_name" :id="'div_nam_'+game.id">
                            {{ game.title }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit_many_games_lists" id="game_3">
                <div class="edit_many_games_lists_title">
                    電腦遊戲
                </div>
                <div class="edit_many_games_lists_images">
                    <div class="edit_many_games_lists_image" v-for="(game, i) in all_games[2]" :id="'gamelist_'+game.id">
                        <div class="edit_many_games_lists_img_div">
                            <div v-if="game.isSklii">
                                <img class="edit_many_games_lists_img_sin" v-show="edit_status == 0" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <img class="edit_many_games_lists_img_sin add_border" v-show="edit_status == 1" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="add_skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="top_none(game.id,game.title,game.image)">-</div>
                            </div>
                            <div v-else>
                                <img class="edit_many_games_lists_img_sin" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="add_game_skill(game.id,game.title,game.image)">+</div>
                            </div>
                        </div>
                        <div class="edit_many_games_lists_img_div_name" :id="'div_nam_'+game.id">
                            {{ game.title }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit_many_games_lists" id="game_4">
                <div class="edit_many_games_lists_title">
                    主機遊戲
                </div>
                <div class="edit_many_games_lists_images">
                    <div class="edit_many_games_lists_image" v-for="(game, i) in all_games[3]" :id="'gamelist_'+game.id">
                        <div class="edit_many_games_lists_img_div">
                            <div v-if="game.isSklii">
                                <img class="edit_many_games_lists_img_sin" v-show="edit_status == 0" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <img class="edit_many_games_lists_img_sin add_border" v-show="edit_status == 1" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="add_skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="top_none(game.id,game.title,game.image)">-</div>
                            </div>
                            <div v-else>
                                <img class="edit_many_games_lists_img_sin" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="add_game_skill(game.id,game.title,game.image)">+</div>
                            </div>
                        </div>
                        <div class="edit_many_games_lists_img_div_name" :id="'div_nam_'+game.id">
                            {{ game.title }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit_many_games_lists" id="game_5">
                <div class="edit_many_games_lists_title">
                    語音陪伴
                </div>
                <div class="edit_many_games_lists_images">
                    <div class="edit_many_games_lists_image" v-for="(game, i) in all_games[4]" :id="'gamelist_'+game.id">
                        <div class="edit_many_games_lists_img_div">
                            <div v-if="game.isSklii">
                                <img class="edit_many_games_lists_img_sin" v-show="edit_status == 0" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <img class="edit_many_games_lists_img_sin add_border" v-show="edit_status == 1" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="add_skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="top_none(game.id,game.title,game.image)">-</div>
                            </div>
                            <div v-else>
                                <img class="edit_many_games_lists_img_sin" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="add_game_skill(game.id,game.title,game.image)">+</div>
                            </div>
                        </div>
                        <div class="edit_many_games_lists_img_div_name" :id="'div_nam_'+game.id">
                            {{ game.title }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit_many_games_lists" id="game_6">
                <div class="edit_many_games_lists_title">
                    更多技能
                </div>
                <div class="edit_many_games_lists_images">
                    <div class="edit_many_games_lists_image" v-for="(game, i) in all_games[5]" :id="'gamelist_'+game.id">
                        <div class="edit_many_games_lists_img_div">
                            <div v-if="game.isSklii">
                                <img class="edit_many_games_lists_img_sin" v-show="edit_status == 0" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <img class="edit_many_games_lists_img_sin add_border" v-show="edit_status == 1" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="add_skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="top_none(game.id,game.title,game.image)">-</div>
                            </div>
                            <div v-else>
                                <img class="edit_many_games_lists_img_sin" :src="'/plusone88/assets/img/'+game.image" alt="">
                                <div class="skill_wrap_bottom_li_plus" v-show="edit_status == 1" @click="add_game_skill(game.id,game.title,game.image)">+</div>
                            </div>
                        </div>
                        <div class="edit_many_games_lists_img_div_name" :id="'div_nam_'+game.id">
                            {{ game.title }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view('Footer');
?>