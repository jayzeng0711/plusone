</div>

<!-- 登入pop -->
<div class="loginpop" v-show="loginpop == 1">
    <div class="close" @click="closepop()">
        <i class="fas fa-times"></i>
    </div>
    <div>
        <img src="<?=base_url()?>plusone88/assets/img/Plus-one_LOGO.jpg" width="120px">
    </div>
    <div class="login-gift">
        快速註冊尋找陪玩師一起玩
    </div>
    <div class="loginbtns fb-login">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAYAAABxLuKEAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANfSURBVHgB7Zs9TxRBGMf/h8aoIeYwFlB5JFY2cB9APRJ75RN4NJYKjYk2hMoS0dLiMHY2YmKihQmH1srRWBlurc7C5NQQg/iyPs/dXCQX8OaZmX0ZmF/yZEmYvZ397zwvM7MLBAKBQCAQCAQCh4ECUiaO4xIdKmQT6ljcZT0iZQ2yDbJ6oVCIcNAgMYpk82TN2Jwm2aIS1m/oJipkq7F7al4KxJ0mexonT80bgaijN8nacXo0yarIM3E3BmTFIhziJCtRpzijrJJNIls4i01RBvsCS6yFyZEoPZyI40KYdeRHlB4NEqYMC4ZggfLrvInCTLqOOdrQhatx/pmFIUauFHdrB44rJeQbjjNlk+mEqTA1OlThiK3tGC/ebqOx+RMfWr/Qav/Zt+3ru2cgZIWEmYaQoxCiRksVjmAx7jz+1hEnIa5SnyskTl1ykknwnYcj3rzfwY2HX5MUpYe4zyJhXI6WT+QuD55vISV4MluUnCAdMcZRvp/1zZ2OOCki6rtUmCtwxMt3P5Ay1ySNtYOvcqMSHNFq//7v/4ePD+HC+WMYHbGqQXfDSyFnKQh/1GksyUoVOGSQG92/fgrnxsRJcxBTZMs6DSWPI9XSPwFRGO17kAgzAf+5pNtQIkwJ/qOdsoMw+5CII+9F7dV3J+1nLp+EBdrCaE8ieQ4PCy7e/gxbOHU/uXUaNlC61rpniStZr6PaMlY8grTwSpjhE9YrsZFuQ6+EcVAFR7oNJVdaQ8aMjli70oZuQ4kwDWSMgxGjfQ+SrFSiQxOOGJSlDJYwdRjXXf/VfgTqByP4SyRZFJeOzUfwl2eSxlJh7sFfRH0XCaP2g+vwj2Xp3pJJmF+Af4j7LBZG7c+swB/Eo4UxLQzmkINKWIMIhiPcSBj1BHxwqQXT12CNS0m6IEf5JeSXJerjMgyxqrHpwryJlflUYQ8aqm/GuNi04S2JPInTedUMllgLo2qbvIjj7OVEJ9t83BH1zluWMYdjStmFKIyz/U9G+fUM0p1sshBztjGlH6fCMCoTsGulMeHkQrOsMqRTnAvDcO1AVqU/x5GMQHV0Y8l0Up/rJCJMjz6BOP5EMCdCt6gcod+ckr46JiWVDTf1VDkGzMb/PuSqDTiNM8yaOh7MD7kCgUAgEAgEAoHM+QvKRoTgskZAAAAAAABJRU5ErkJggg==">
        <a href="<?=base_url()?>facebook" style="color: #fff"><p>Facebook 登入</p></a>
    </div>
    <div class="loginbtns google-login">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAMAAACcwCSMAAACQFBMVEUAAAD////////////////////////////////////////////////////////////////////////////qQzU0qFNChfT7vAWNt/a40fv//v7rRTfrTT/8/v3+9fSZ06jy9/3n8Pz0+/b+8e+h16+U0qX1oZpNsmjtWU3+/v7//fn3/Pj++Pjx+fPm9er96+n72dbL6dP70s+x3r32sKr2qaP1pZ70nJX934nwc2k8rFvuZlo5qlbsT0LS4/tsofVjmvRXk/RHifPv+PL//PH+7u3/+uz95+XX7t373dr5zcn5zMip27ed1ax2xYpzw4jzkYhtwIPxgHZauXTxfHJStWw1pGRFr2JBrl78zkjsVUj8yTP7vgrh6/zd6vv5/frM3vrE2vm71PmXvfeDsPZZlPZChvHs9+/r9+7d8OJBieD+8s/5y8j+7byk2LL3t7H3tK48l6aMzp6Fy5j0mZI4nYjyiYBnvn793HxhvHleunb91WQ+rVs1qFbuYlb80VLsUURurz/rSz7uYC78xyyasyzyfiH7wx/2lxr7vxD5rgzzuwjs8/660/v++vmvzPiIs/f//PagwvZclvRMjPRXlPNNjfJPkuT74d7R69j+9dc/jc7+8sr5yMM9kbz3uLM7l6L95qH94pV+yJLo13k3oHn80W7wd23vd23ubGH80lhLrVXtXVHtXE/ny05BqU77xk1Kq0tgrEP8yjjtVjeIsTLsUDLsTzLwbiimtCa+th7zhxvMuBr4pRLmug/iuQ+6ue5eAAAAE3RSTlMAIN/vv3AQkIDPMECPn2BQf6+whBwXHQAABY1JREFUaN7Vm+VfFEEYgG/r+jz03fWUExARBREUERCxu7u7u7u7u7u7u/NfU2SJvb15Z2Zvhx8+H/ny/N6Yd2aHOY8DpKgWjqiyrEAVckBtGtZCkkc43mhYVSApihoOeT3CCKWpQEH1B1MQIGYZmJDDksvZ1lTgINDERXWaApzIEUmwGgfR86v5SbX4mgIpIKdS+6AKKSI7Dj4MLpDmSC0FwBVkSWy1cRRNcMpxwoJTjhOQONwyIIgtfBBxi7YHFRCAEuRzN7xdQtzC7Hivia877hZvD4BQAs7mmvhZp4FwNLcaPT0zJyczHbhQSGVnb7aOw8o2PZmmVxHPq9hUNiwdUOhlT2OMd2h5ZVxPIP60bCiA87JLwEJOWaVOoHINW/xBh0nvNKaVjjCtXSego9rdTRiiLo/rFPaUAh3NwWi73VNn4OUwesd7ecfLwHE6I2OopfdzdluXPTozeYP5Qo8ATledh543eUKXKEu7nc5Fq+HU0NkDL9f56AI0/MxrPNW48dDxNb6aP246GtsRovM+/rjpqEztlpNH0sR3TRg37vGuhKnXGdgImXIfIExIHl9F1yunzO2185qKeO3fV4ANvOVk3gX+ojQzYfxtmGaPG0eudgexU0OSpPcs7Zhk+pbHCXHjefcDmTF2dwVh2xxcafY5V95VIDLY3ukbiNtG5lAwYe93L5B59CXR3RVco2rOhIDIgKOx71b3anCPKL7QusVisZ+f9TragYv48JIfiP3l2P5a94R0wOEuugIkbsSqOVSzxjqBmyjobN0SMznyCUm6cySs396bbjP1eZngLlHk47CDaa5JfSm4jIY0+8pYfY58QAJ32u5NgUS3mIU3kIQWNE4i8giy0rZb5XchCc1p9MHWGnKKmWqVL0fkCK2RXRXZzA9b3DM6OJPPxORAIj1mYTo4k8/BpgyQGGCVT3UonwdkyPJBVvluh/KWbsifiZXjad8tIu0KEOhglR9wKJ+LyIUvtTnoOmcdMtecyXsBkQD7eL3nTJ6NjdcI68byypG8Xz4Qaca8pX593gbstLTTxyLvjW6pGpA4O6NOffyjYbQFFjIuWeQt0MNEFIhMr3X/fmcYxsQCYKCXNe2ngUyI6QD57fVfN2PoC5j7DSTs6LzcTPlBo5opRUDlRD+L+yJ+dPaolLz/2mvUsDkDaJyxBr4AyKj0z6Ufb406coHCrMQRg38uYR036GjsYA+jPiMApfVCq7svIIQon8gP9hoJlKDu3gmBn8M/kfGiL9lpJJKVz+7u1xorOfVaJNewMbqIVO/zzRNoQb8WCQGZ/pPt9ikjkw3awnVrE90XsgEhSL8KKzGS0L5tor4oq7thbFxklc+nX4XheYdRRjJ6jC0ZMrumMYpzxxv/mLSsvnthPuVegpp3WDzZINBj/NhRo0Zv7W7UMemW9QCFzlYTFRCuGjzcWcSUdAgw/gN3BJf9oZn6Pvgornuy5VUAI4vLPun6v9mWTb95RVoOWe04O9f+dc8ElIgpRkJHYkfZeDmbehfEHjqU7OCRt18K1MA5Qoch7dndWxcDPXCe0KFwNKu7bQbDxac9dJwRTMFPLHbwYkUDKgXrutPUO8ywKWvchgp0itaj+ilZhUBH9tgJAgsFqyaS1NtWtWG8ck2CD9gYkrstySaTtRTY8Kf6Nml28cj7m83+mzx2/cjiAmBFdumRTn6b/v0LM4ALRWqMz5PMsovE11ifpDl/jNfonwLKktjHn3ijN+6np+If3TZ83eXg//DQuiGfmIufdb7/6WcFaOH5U86PX2jKxQevBj3OaSKLrTaO5HOu9ns9qSJFhKtxvSxajdc+wNVmGqJ2VnzG8GV/yCOAoF+lxmyaheAN+cg/ivVFvR7hSCHN11QNyNVOWVYjPi3qZIj+AeG69dG4CjX7AAAAAElFTkSuQmCC">
        <a href="<?=base_url()?>google"><p>Google 登入</p></a>
    </div>
    <div class="loginbtns ig-login">
        <img src="data:image/png;base64,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">
       <a href="<?=base_url()?>line" style="color: #fff"><p>LINE 登入</p></a>
    </div>
    <div class="or">
        或
    </div>
    <div class="loginbtns phone-login" @click="openphonepop()">
        <p>使用手機號登入</p>
    </div>
    <div class="login_prot">
        登入即代表您同意<a href="">plus one服務協議與隱私權條款</a>
    </div>
</div>
<!-- 登出pop -->
<div class="logoutpop" v-show="logoutpopsta == 1">
    <div class="logoutpop_text">
        確定要登出當前帳號嗎
    </div>
    <div class="logoutpop_div_wrap">
        <div class="logoutpop_cancel" @click="cancellogout()">
            取消
        </div>
        <div class="logoutpop_confirm" @click="confirmlogout()">
            <a href="<?=base_url()?>logout">確定</a>
        </div>
    </div>
</div>
<!-- 手機登入pop -->
<div class="phoneloginpop" v-show="phoneloginpop == 1">
    <form method="POST" action="https://www.plusone88.com/plusone/register" @submit="rightnow_login">
        <div class="login-content">
            <div class="login_content_text">
                使用手機號登入
            </div>
            <div class="login_body_may">
                <div class="login_body">
                    <div class="mobileinput">
                        <div class="mobilenumdiv" @click="opencountry()">
                            <span class="mobilenum">{{ area_code }}</span><img class="mobileimg" src="<?=base_url()?>plusone88/assets/img/icon-drop@2x.png">
                            <input v-model="area_code" type="hidden" name="areacode">
                        </div>
                        <div class="login_body_div">
                            <input class="login_body_div_input" v-model="phonenumber" name="phone" value="" placeholder="請輸入手機號碼" @click="opencountry(1)">
                        </div>
                    </div>
                </div>
                <div class="many_country_wrap" v-show="many_country_wrap == 1">
                    <div class="many_country" v-for="(country, i) in countrys" @click="select_country(country.number)">
                        <div>{{ country.name }}</div>
                        <div>{{ country.number }}</div>
                    </div>
                </div>
            </div>
            <div class="error_message"></div>
            <div class="valid_code">
                <div class="valid_code_div">
                    <input class="valid_code_div_input" type="text" placeholder="請輸入驗證碼" name="vaild" @click="code_confirm()">
                </div>
                <div :class="codebtndiv" @click.prevent="getcode()" class="g-recaptcha">
                    <button type="button">
                        <span v-if="nogetcode">獲取驗證碼</span>
                        <span style="color:#B5B5B5" v-else>重新傳送(<span>{{ reciprocal }}</span>)</span>
                    </button>
                </div>
                <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
            </div>
            <div class="code_error" :class="opacity">認證碼輸入錯誤</div>
            <div class="rememberme" @click="checked()">
                <div style="line-height: 1">
                    <label for="checkbox__original" class="el-checkbox remember-check">
                        <span class="el-checkbox__input">
                            <span class="el-checkbox__inner" :class="ischecked">
                                <input type="checkbox" class="el-checkbox__original" id="checkbox__original" @click="checked()">
                            </span>
                        </span>
                    </label>
                </div>
                <div class="rememberme_text">
                    記住我
                </div>
            </div>
            <button class="rightnow_login" class="g-recaptcha">
                立即登入
            </button>
        </div>
    </form>
</div>
<div class="maskBg" v-show="maskBg == 1"></div>
<div class="phonemaskBg" v-show="phonemaskBg == 1" @click="phonemaskBgbtn()"></div>
<div class="logoutmaskBg" v-show="logoutmaskBg == 1" @click="cancellogout()"></div>
</div>
<script type="text/javascript" src="<?=base_url()?>plusone88/assets/js/vue.js"></script>
<script type="text/javascript" src="<?=base_url()?>plusone88/assets/js/axios.min.js"></script>
<script src="<?=base_url()?>plusone88/assets/js/index.js?v=<?=time()?>"></script>
<script src="https://www.setn.com/resources/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcE2jAcAAAAAEmGIxGTRXM-3JZxxDtft5xLhc68"></script>
<script>
      grecaptcha.ready(function() {
      grecaptcha.execute('6LcE2jAcAAAAAEmGIxGTRXM-3JZxxDtft5xLhc68', {action: 'register'}).then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
      });
  });
  </script>
</body>

</html>