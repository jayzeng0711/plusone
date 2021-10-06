Vue.filter('money', function (num) {
    const parts = num.toString().split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    return parts.join('.');
});

Vue.filter('NTDmoney', function (num) {
    const parts = num.toString().split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    return "NTD$" + parts.join('.');
});

var vm = new Vue({
    el: "#app",
    data() {
        return {
            taicoin: 0,
            gacoin: 0,
            allcoin: [],
            manycoin: 0,
            isLogin: false,
            loginpop: 0,
            logoutpopsta: 0,
            phoneloginpop: 0,
            logoutmaskBg: 0,
            maskBg: 0,
            nogetcode: true,
            phonenumber: "",
            many_country_wrap: 0,
            leftshow: 0,
            reciprocal: 30,
            edit_status: 0,
            selectmodel: 0,
            haveSkill: [],
            all_games: [],
            ischecked: {
                'ischecked': true,
                'isfouce': false,
            },
            codebtndiv: {
                'codebtndiv': true,
                'codebtndiv_get': false,
            },
            opacity: {
                'opacity_no': true,
                'opacity': false,
            },
            status_color: {
                'status_color': true,
                'status_color_close': false,
            },
            countrys: [],
            activity_lists: [],
            phonemaskBg: 0,
            preson_data: 0,
            area_code: 886,
            user: {
                id: "",
                name: "",
                email: "",
                token: "",
                hasAgreed: null,
                reward: "",
            },
            all_sex: ["性別不限", "男生", "女生"],
            sex: "性別不限",
            sexNum: 0,
            gametext: "",
            modeltext: "不限",
            ranktext: "不限",
            openprice: 0,
            pricetext: "單價不限",
            gametotal: 1,
            replytext: "",
            deterconfirm: 0,
            orderNote: "",
            all_order: 1,
            // friendsopen: 0,
            // allFriends: ['kiki', 'andy', '妞妞', '小魚', '沙丁魚', '大胖', '小明'],
            // fiveFriends: [],
            // fivetime: 5,
            // friendsopenbottom: 0,
            // emptyFri: [],
            coupon: [],
            report: [],
            couponpop: 0,
            messagepop: 0,
            whichcoupon: 0,
            inputtimes: 9,
            edit_name: 0,
            username: "",
            introduce: "",
            textarea: 0,
            textareatext: "",
            sexselectnum: 0,
            usersex: "男生",
            biryear: 0,
            birmon: 0,
            bir_day: 0,
            yearpp: "",
            monthpp: "",
            daypp: "",
            editbitday: 0,
            updatebir: false,
            isconfirm: false,
            fakea: "",
            fakeb: "",
            fakec: "",
            tiephone: 0,
            lineopen: 0,
            desc: "",
            image_error_mes: "",
            foreverdeletcacc: 0,
            openmes: 0,
            remnant: 0,
            list: [],
            allArr: [],
            deletearr: [],
            limitNum: 1, //限制数量
            replypop: 0,
            singlemessage: {},
            dramic_27: "",
            replys: [],
            small_present: 0,
            smallprenum: 1,
            presentcoin: 0,
            bigprepop: 0,
            bigsinprepop: 0,
            presonmepop: 0,
            rightclicktines: 0,
            personskill: ["語音交流", "英雄聯盟", "激鬥峽谷",
                "心理諮商", "天黑請閉眼", "失眠陪伴", "小鬧鐘", "天黑請閉眼"],
            mutisocial: 0,
            settlepop: 0,
            settbleform: [
                {
                    fakename: "",
                    sex: "",
                    name: "",
                    address: "",
                    playitemtext: "陪玩項目",
                    singleprice: 0,
                    timeunit: "",
                    introtext: "",
                    level: "",
                    agree: 0,
                }
            ],
            // 請填寫名稱
            fakename: 0,
            // 請選擇您的性別
            ssex: 0,
            // 請填寫您的真實姓名
            realname: 0,
            // 請填寫您的地址
            address: 0,
            // 請選擇您的申請等級
            levelup: 0,
            // 提交前請閱讀並同意
            agree_error: 0,
            togeplaypop: 0,
            // 儲值金額
            storemoney: 0,
            //付款方式
            payment: "",
            usermail: "",
            money_error: 0,
            pay_error: 0,
            email_error: 0,
            bankpop: 0,
            whichbank: "",
            openbank: 0,
            bankcode: "",
            addbankpop: 0,
            moneey: 0,
            first_money: 0,
            coupon_1: "",
            coupon_2: "",
            coupon_3: "",
            coupon_4: "",
            coupon_5: "",
            coupon_6: "",
            getmonet_error: 0,
            getmoneypas: "",
            moneyapply: 1,
            modibankcode: 0,
            old_psd: "",
            new_psd: "",
            new_psd_again: "",
            succcodepop: 0,
            dataskill: 1,
            togeedit: 0,
            ranklevelte: "白金",
            levelId: 1,
            playeditredute: 0,
            editskillimg: [],
            editintrotext: "",
            ordersmart: ["智能排序", "人氣優先", "新人優先", "低價優先", "高價優先"],
            ordertext: "智能排序",
            orderpop: 0,
            orderpopright: 0,
            dialoagswitch: 1,
            dialoag_block: 0,
            addbankacc: "",
            addbankaccpop: 0,
            delete_addbank: 0,
            orderNUM: 1,
            ordersinprice: 130,
            paymentconord: 0,
            odjdvalu: 1,
            rankrulepop: 0,
            offset: 1949,
            oriallgames: [],
            origameid: "",
            origamepri: 0,
            origamerank: 0,
            choiceskill: "請選擇常用技能",
            choiceskillid: "",
            nocoupon: 0,
            presentpop: 0,
            btnlock: 0,
            donatemessage: "",
            client_list: {},
        };
    },
    created() {
        this.getSkill();
        this.getsingleskill();
        this.getmenus();
        this.getcountry();

        this.getAllSkill();
        this.NologingetAllSkill();
        this.getdataskill();
        this.getallcoin();
        this.getcoupons();
        this.getwithorder();
        this.connect();
    },
    computed: {

    },
    methods: {
        async paga() {
            $(function () {
                let container = $('#pagination');
                container.pagination({
                    dataSource: vm.coupon,
                    callback: function (data, pagination) {
                        if (vm.coupon.length == 0) {
                            $('#pagination').css('display', 'none')
                        }

                        var dataHtml = '<div>';
                        $.each(data, function (index, item) {
                            if(vm.coupon.length == 0){
                                vm.nocoupon = 1;
                                return false;
                            }

                            if (item.status == 0) {
                                dataHtml += `<div class="myorder_data_title">
                                <div>${item.id}</div>
                                <div>${item.name}</div>
                                <div>${item.num}</div>
                                <div>${item.getdate}</div>
                                <div>${item.lastdate}</div>
                                <div style="cursor: pointer;" onclick='couponopen(${item.id})'>未使用</div>
                                </div>`
                            } else {
                                dataHtml += `<div class="myorder_data_title">
                                <div>${item.id}</div>
                                <div>${item.name}</div>
                                <div>${item.num}</div>
                                <div>${item.getdate}</div>
                                <div>${item.lastdate}</div>
                                <div style="color: #878787">已使用</div>
                                </div>`;
                            }
                        });
                        dataHtml += '</div>';
                        $("#data-container").html(dataHtml);
                    }
                })
            })
        },
        async order() {
            $(function () {
                let container = $('#reportpagination');
                container.pagination({
                    dataSource: vm.report,
                    callback: function (data, pagination) {
                        if (vm.report.length == 0) {
                            $('#reportpagination').css('display', 'none')
                        }

                        var dataHtml = '<div>';
                        $.each(data, function (index, item) {
                            dataHtml += `<div class="myorder_data_title">
                                <div>${item.id}</div>
                                <div>${item.ordermember}</div>
                                <div><a href="" style="color: #4E9FCC">${item.played}</a></div>
                                <div>${item.game}</div>
                                <div>${item.getdate}</div>
                                <div>${item.num}</div>
                                <div>${item.money}</div>
                                <div>${item.lostmoney}</div>
                                <div>${item.havemoney}</div>
                            </div>`
                        });
                        dataHtml += '</div>';
                        $("#reportdata").html(dataHtml);
                    }
                })
            })
        },
        async getSkill() {
            return await $.post("https://www.plusone88.com/api/haveskill", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.haveSkill = result;
                })
        },
        async getAllSkill() {
            var url = window.location.href;
            var index = url.lastIndexOf("#");
            if(index == -1){
                if(url != "https://www.plusone88.com/member/skill"){
                    return false;
                }
            }else{
                str = url.substring(0,index)
                if(str != "https://www.plusone88.com/member/skill"){
                    return false;
                }
            }

            return await $.post("https://www.plusone88.com/api/allgames", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.all_games = result;
                })
        },
        async NologingetAllSkill() {
            if(window.location.href != "https://www.plusone88.com/plusone/fastorder"){
                return false;
            }

            return await $.post("https://www.plusone88.com/open/allgames", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.oriallgames = result;
                    vm.origameid = vm.oriallgames[0]['id']
                    vm.gametext = vm.oriallgames[0]['skill_name']
                })
        },
        async getsingleskill() {
            var url = window.location.href;
            var index = url.lastIndexOf("\/");
            str = url.substring(0,index+1)
            if(str != "https://www.plusone88.com/member/editskill/"){
                return false;
            }

            var id = $('#skillId').val();
            return await $.post("https://www.plusone88.com/api/editskillinfo", {
                "skillId": id
            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.moneey = result['singleprice'];
                    vm.first_money = result['firstprice'];
                    vm.coupon_1 = result['coupon_1'];
                    vm.coupon_2 = result['coupon_2'];
                    vm.coupon_3 = result['coupon_3'];
                    vm.coupon_4 = result['coupon_4'];
                    vm.coupon_5 = result['coupon_5'];
                    vm.coupon_6 = result['coupon_6'];
                    vm.levelId = result['level'];
                    if (result['level'] == 1) {
                        vm.ranklevelte = "白金";
                        $('#thislfirsrk_1').addClass('active');
                    }

                    if (result['level'] == 2) {
                        vm.ranklevelte = "翡翠";
                        $('#thislfirsrk_2').addClass('active');
                    }

                    if (result['level'] == 3) {
                        vm.ranklevelte = "鑽石";
                        $('#thislfirsrk_3').addClass('active');
                    }

                    vm.editskillimg = result['image'];
                    vm.editintrotext = result['intro'];
                    $('#player_1').attr('src', result['voice'])
                })
        },
        async getallcoin() {
            if(window.location.href != "https://www.plusone88.com/member/change_gcoin"){
                return false;
            }

            return await $.get("https://www.plusone88.com/livepk/pointlist", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.allcoin = result;
                    vm.gacoin = vm.allcoin[0];
                })
        },
        async getdataskill() {
            if(window.location.href != "https://www.plusone88.com/member/dataskill"){
                return false;
            }

            return await $.get("https://www.plusone88.com/api/getdataskill", {
                xhrFields: {
                    withCredentials: true
                },

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.daypp = result['day'];
                    vm.yearpp = result['year'];
                    vm.introduce = result['intro'];
                    vm.monthpp = result['month'];
                    vm.user.name = result['name'];
                    if (result['sex'] == 0) {
                        vm.usersex = "男生";
                    } else {
                        vm.usersex = "女生";
                    }
                    if (result['voice'] == "") {
                        $('.dataskill').css('display', 'none');
                    } else {
                        $('#player_1').attr('src', result['voice'])
                    }
                })
        },
        async getmenus() {
            return await $.get("https://www.plusone88.com/api/getmenu", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.activity_lists = result;
                })
        },
        async getcountry() {
            return await $.get("https://www.plusone88.com/plusone/getmobilearea", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.countrys = result;
                })
        },
        async getcoupons() {
            if(window.location.href != "https://www.plusone88.com/plusone/cancoupon"){
                return false;
            }

            return await $.get("https://www.plusone88.com/api/getcoupon", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.coupon = result;
                    vm.paga();
                })
        },
        async getwithorder() {
            if(window.location.href != "https://www.plusone88.com/member/report"){
                return false;
            }

            return await $.get("https://www.plusone88.com/api/getwithorder", {

            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.report = result;
                    vm.order();
                })
        },
        openlogonpop() {
            this.loginpop = 1;
            this.maskBg = 1;
        },
        closepop() {
            this.loginpop = 0;
            this.maskBg = 0;
        },
        openphonepop() {
            this.phoneloginpop = 1;
            this.phonemaskBg = 1;
            this.loginpop = 0;
            this.maskBg = 0;
            this.many_country_wrap = 0;
        },
        phonemaskBgbtn() {
            this.loginpop = 1;
            this.maskBg = 1;
            this.phoneloginpop = 0;
            this.phonemaskBg = 0;
        },
        checked() {
            if (this.ischecked['ischecked']) {
                this.ischecked['isfouce'] = true;
                this.ischecked['ischecked'] = false;
            } else {
                this.ischecked['isfouce'] = false;
                this.ischecked['ischecked'] = true;
            }
        },
        getcode() {
            if (this.codebtndiv['codebtndiv_get']) {
                return false;
            }

            var MobileReg = /^(09)[0-9]{8}$/;
            var phonenumber = (this.phonenumber.match(MobileReg)) ? true : false;
            if (this.phonenumber == "") {
                $('.error_message').text('請輸入手機號碼');
                $('.bind_error').text('請綁定您的手機號碼');
                return false;
            }
            if (!phonenumber) {
                $('.error_message').text('請輸入正確手機格式');
                return false;
            }

            $.post("https://www.plusone88.com/plusone/regsendsms", {
                "phone": vm.phonenumber,
                'areacode': vm.area_code,
                "register": $('#recaptchaResponse').val()
            })
                .done(function (result) {
                    result = JSON.parse(result);
                    if (result['status']) {
                        vm.nogetcode = false;
                        vm.codebtndiv['codebtndiv'] = false;
                        vm.codebtndiv['codebtndiv_get'] = true;
                        $('.error_message').text('驗證碼發送成功');
                        grecaptcha.execute('6LcE2jAcAAAAAEmGIxGTRXM-3JZxxDtft5xLhc68', { action: 'register' }).then(function (token) {
                            var recaptchaResponse = document.getElementById('recaptchaResponse');
                            recaptchaResponse.value = token;
                        });
                        vm.setTimeoutFun();
                    } else {
                        $('.error_message').text('驗證碼發送失敗');
                        return false;
                    }
                })
        },
        getcodeaccount() {
            if (this.codebtndiv['codebtndiv_get']) {
                return false;
            }

            var MobileReg = /^(09)[0-9]{8}$/;
            var phonenumber = (this.phonenumber.match(MobileReg)) ? true : false;
            if (this.phonenumber == "") {
                $('.error_message').text('請輸入手機號碼');
                $('.bind_error').text('請綁定您的手機號碼');
                return false;
            }
            if (!phonenumber) {
                $('.error_message').text('請輸入正確手機格式');
                return false;
            }

            $.post("https://www.plusone88.com/api/regmobile", {
                "phone": vm.phonenumber,
                'areacode': vm.area_code,
            })
                .done(function (result) {
                    result = JSON.parse(result);
                    if (result['status']) {
                        vm.nogetcode = false;
                        vm.codebtndiv['codebtndiv'] = false;
                        vm.codebtndiv['codebtndiv_get'] = true;
                        $('.error_message').text('驗證碼發送成功');
                        vm.setTimeoutFun();
                    } else {
                        $('.error_message').text('驗證碼發送失敗');
                        return false;
                    }
                })
        },
        closepopmobile() {
            $('.leftfunc_mobile').slideUp(400);
        },
        rightnow_login(e) {
            if ($('.valid_code_div_input').val() == "") {
                this.opacity['opacity'] = true;
                this.opacity['opacity_no'] = false;
                $('.valid_code_div_input').css("color", "#D55E5C")
                e.preventDefault();
                return false;
            }
        },
        select_country(number) {
            this.area_code = number;
            this.many_country_wrap = 0;
        },
        opencountry(input) {
            this.many_country_wrap = 1;
            if (input == 1) {
                this.many_country_wrap = 0;
            }
            $('.error_message').text("");
            $('.bind_error').text("");
        },
        cleanTimeOut() {
            let vm = this;
            window.clearInterval(vm.timeOutRefresh);
        },
        setTimeoutFun() {
            this.timeOutRefresh = window.setInterval(() => {
                this.reciprocal--;
                $('.codebtndiv button').css('cursor', 'text')
                if (this.reciprocal <= 0) {
                    this.cleanTimeOut();
                    this.codebtndiv['codebtndiv'] = true;
                    this.codebtndiv['codebtndiv_get'] = false;
                    this.nogetcode = true;
                    this.reciprocal = 30;
                }
            }, 1000);
        },
        leftfuncshowornone(design) {
            if (design == "web") {
                if (this.leftshow == 0) {
                    $('.leftfunc').css('transform', 'translateX(-219px)');
                    $('.rightfunc').css('margin-left', '-110px');
                    $('.search_rightfunc, .order_rightfunc').css('margin-left', '-110px');
                    $('.confirm_order_rightfunc').css('margin-left', '-110px');
                    $('.balance_order_rightfunc').css('margin-left', '-110px');
                    $('.confirm_account_rightfunc').css('margin-left', '-110px');
                    this.leftshow = 1;
                } else {
                    $('.leftfunc').css('transform', 'translateX(0px)');
                    $('.rightfunc').css('margin-left', '0');
                    $('.search_rightfunc, .order_rightfunc').css('margin-left', '0');
                    $('.confirm_order_rightfunc').css('margin-left', '0');
                    $('.balance_order_rightfunc').css('margin-left', '0');
                    $('.confirm_account_rightfunc').css('margin-left', '0');
                    this.leftshow = 0;
                }
            }

            if (design == "mobile") {
                $('.leftfunc_mobile').slideDown(400);
            }
        },
        all_show: function (e) {
            if (e.target.id == "avatar-wrap_div") {
                if (this.preson_data == 0) {
                    vm.preson_data = 1;
                } else {
                    vm.preson_data = 0;
                }
                return false
            }
            if (e.target.id == "avatar-wrap_div_status") {
                if (this.preson_data == 0) {
                    vm.preson_data = 1;
                } else {
                    vm.preson_data = 0;
                }
                return false
            }
            if (e.target.id == "avatar-wrap") {
                if (this.preson_data == 0) {
                    vm.preson_data = 1;
                } else {
                    vm.preson_data = 0;
                }
                return false
            }
            if (e.target.id == 'preson_data') {
                vm.preson_data = 1;
                return false
            }
            vm.preson_data = 0;
        },
        logoutpop() {
            this.logoutpopsta = 1;
            this.logoutmaskBg = 1;
        },
        cancellogout() {
            this.logoutpopsta = 0;
            this.logoutmaskBg = 0;
        },
        editaddgames() {
            this.edit_status = 1;
        },
        editfinal() {
            data = [];
            for (i = 0; i < vm.haveSkill.length; i++) {
                data.push(this.haveSkill[i]['id']);
            }
            $.post("https://www.plusone88.com/api/haveskill", {
                "haveskill": data
            })
                .done(function (result) {
                    vm.edit_status = 0;
                })
        },
        top_none(id, title, image) {

            for (k = 0; k < this.haveSkill.length; k++) {
                if (id == this.haveSkill[k].id) {
                    this.haveSkill.splice(k, 1)
                }
            }

            for (i = 0; i < this.all_games.length; i++) {
                for (j = 0; j < this.all_games[i].length; j++) {
                    if (this.all_games[i][j].id == id) {
                        this.all_games[i][j].isSklii = false;
                    }
                }
            }
        },
        add_game_skill(id, title, image) {
            var arr = [];
            arr.id = id;
            arr.title = title;
            arr.image = image;
            arr.isSklii = true;
            this.haveSkill.push(arr);

            for (i = 0; i < this.all_games.length; i++) {
                for (j = 0; j < this.all_games[i].length; j++) {
                    if (this.all_games[i][j].id == id) {
                        this.all_games[i][j].isSklii = true;
                    }
                }
            }
        },
        edit_sklii_submit(e) {
            if (this.moneey == "" || this.moneey == 0) {
                this.fakename = 1;
                e.preventDefault();
                return false;
            } else {
                this.fakename = 0;
            }

            if (this.coupon_1 == "") {
                if (this.coupon_2 != "") {
                    this.realname = 1;
                    e.preventDefault();
                    return false;
                }
            } else {
                if (this.coupon_2 == "") {
                    this.realname = 1;
                    e.preventDefault();
                    return false;
                }
            }

            if (this.coupon_3 == "") {
                if (this.coupon_4 != "") {
                    this.realname = 1;
                    e.preventDefault();
                    return false;
                }
            } else {
                if (this.coupon_4 == "") {
                    this.realname = 1;
                    e.preventDefault();
                    return false;
                }
            }

            if (this.coupon_5 == "") {
                if (this.coupon_6 != "") {
                    this.realname = 1;
                    e.preventDefault();
                    return false;
                }
            } else {
                if (this.coupon_6 == "") {
                    this.realname = 1;
                    e.preventDefault();
                    return false;
                }
            }

            this.realname = 0;
        },
        check_coupon1() {
            var coupon_1 = this.coupon_1;
            coupon_1 = coupon_1.replace(/[^\d]/g, '');
            if (coupon_1.indexOf('.') < 0 && coupon_1 != '') {
                coupon_1 = parseInt(coupon_1);
            }
            this.coupon_1 = coupon_1;
        },
        check_coupon2() {
            var coupon_2 = this.coupon_2;
            coupon_2 = coupon_2.replace(/[^\d]/g, '');
            if (coupon_2.indexOf('.') < 0 && coupon_2 != '') {
                coupon_2 = parseInt(coupon_2);
            }
            this.coupon_2 = coupon_2;
        },
        check_coupon3() {
            var coupon_3 = this.coupon_3;
            coupon_3 = coupon_3.replace(/[^\d]/g, '');
            if (coupon_3.indexOf('.') < 0 && coupon_3 != '') {
                coupon_3 = parseInt(coupon_3);
            }
            this.coupon_3 = coupon_3;
        },
        check_coupon4() {
            var coupon_4 = this.coupon_4;
            coupon_4 = coupon_4.replace(/[^\d]/g, '');
            if (coupon_4.indexOf('.') < 0 && coupon_4 != '') {
                coupon_4 = parseInt(coupon_4);
            }
            this.coupon_4 = coupon_4;
        },
        check_coupon5() {
            var coupon_5 = this.coupon_5;
            coupon_5 = coupon_5.replace(/[^\d]/g, '');
            if (coupon_5.indexOf('.') < 0 && coupon_5 != '') {
                coupon_5 = parseInt(coupon_5);
            }
            this.coupon_5 = coupon_5;
        },
        check_coupon6() {
            var coupon_6 = this.coupon_6;
            coupon_6 = coupon_6.replace(/[^\d]/g, '');
            if (coupon_6.indexOf('.') < 0 && coupon_6 != '') {
                coupon_6 = parseInt(coupon_6);
            }
            this.coupon_6 = coupon_6;
        },
        order_models() {
            this.selectmodel = 1;
        },
        changegame(num, title) {
            this.origameid = num;
            $('.modelpop_top_list').removeClass('modelpop_top_list_active');
            $(`#modelpop_top_list_${num}`).addClass('modelpop_top_list_active');
            this.gametext = title;
        },
        changemodel(num, title) {
            $('.modelpop_middle_list').removeClass('modelpop_top_list_active');
            $(`#modelpop_middle_list_${num}`).addClass('modelpop_top_list_active');
            this.modeltext = title;
        },
        rankmodel(num, title) {
            $('.modelpop_bottom_list').removeClass('modelpop_top_list_active');
            $(`#modelpop_bottom_list_${num}`).addClass('modelpop_top_list_active');
            this.ranktext = title;
            this.origamerank = num - 1;
        },
        order_confirm() {
            this.selectmodel = 0;
        },
        changeSex() {
            this.sexNum++;
            if (this.sexNum >= 3) {
                this.sexNum = 0;
            }

            this.sex = this.all_sex[this.sexNum];
        },
        openPrices() {
            this.openprice = 1;
            $(document).click(function (e) {
                var _con = $('.many_prices');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.openprice = 0;
                }
            });
        },
        thisPrices(text, num, total) {
            this.pricetext = text;
            this.openprice = 0;
            this.origamepri = total;
            $('.preset').removeClass('active');
            $(`#preset_${num}`).addClass('active');
        },
        thisskill(text, num) {
            this.choiceskill = text;
            this.openprice = 0;
            this.choiceskillid = num;
            $('.preset').removeClass('active');
            $(`#preset_${num}`).addClass('active');
        },
        thisbanks(text, num) {
            this.whichbank = text;
            this.openbank = 0;
            $('.preset').removeClass('active');
            $(`#preset_${num}`).addClass('active');
        },
        postdramic(e) {
            if (this.desc == "") {
                e.preventDefault();
                return false;
            }
        },
        addGame() {
            this.gametotal++;
        },
        deGame() {
            if (this.gametotal == 1) {
                return false;
            }
            this.gametotal--;
        },
        opedorder() {
            this.deterconfirm = 1;
        },
        cancelorder() {
            this.deterconfirm = 0;
        },
        confirmorder() {
            this.deterconfirm = 0;
        },
        myorderchange(num) {
            this.all_order = num;
            $('.together').removeClass('myorder_speacil_line');
            $(`#myorder_${num}`).addClass('myorder_speacil_line');
        },
        opencoin() {
            this.manycoin = 1;
            $(document).click(function (e) {
                var _con = $('.coin_many_prices');   // 设置目标区域
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.manycoin = 0;
                }
            });
        },
        cancelcoin(num, id) {
            this.manycoin = 0;
            this.gacoin = num;
            $('.preset').removeClass('active');
            $(`#preset_${id}`).addClass('active');
            $.post("https://www.plusone88.com/livepk/pointlist", {
                "coin": num
            })
                .done(function (result) {
                    result = JSON.parse(result)
                    vm.taicoin = result['point']
                })
        },
        reviewcoin(e) {
            if (this.gacoin == 0) {
                e.preventDefault();
                return false;
            }
        },
        // goodfriend() {
        //     this.friendsopen = 1;
        // },
        // goodfriendclose() {
        //     this.friendsopen = 0;
        //     for (i = 0; i < this.fiveFriends.length; i++) {
        //         this.emptyFri[i] = this.fiveFriends[i];
        //     }
        //     this.fiveFriends = [];
        // },
        // tradefriends(name) {

        //     if (this.fiveFriends.length > 4 || this.emptyFri.length > 4) {
        //         alert('只能選五位');
        //         return false;
        //     }

        //     this.fiveFriends.push(name);
        //     var index = this.allFriends.indexOf(name);
        //     this.allFriends.splice(index, 1);

        //     $(document).click(function (e) {
        //         var _con = $('.trade_many_prices');
        //         if (!_con.is(e.target) && _con.has(e.target).length === 0) {
        //             vm.friendsopen = 0
        //         }
        //     });
        // },
        // goodfriendreset() {
        //     this.friendsopen = 0;
        //     this.allFriends = this.allFriends.concat(this.fiveFriends);
        //     this.fiveFriends = [];
        // },
        // muti_fri(num) {
        //     this.friendsopenbottom = num;
        // },
        // tradefriendsbottom(num, name) {
        //     this.allFriends.push(this.emptyFri[num]);
        //     this.$set(this.emptyFri, num, name);
        //     this.friendsopenbottom = 0;
        //     var index = this.allFriends.indexOf(name);
        //     this.allFriends.splice(index, 1);

        //     $(document).click(function (e) {
        //         var _con = $('.trade_many_prices_bottom');
        //         if (!_con.is(e.target) && _con.has(e.target).length === 0) {
        //             vm.friendsopenbottom = 0
        //         }
        //     });

        // },
        couponmaskBgbtn() {
            $('.couponpop').css('display', 'none')
            $('.logoutmaskBg').css('display', 'none')
        },
        confirmcoupon() {
            for (i = 0; i < this.coupon.length; i++) {
                if (this.coupon[i].id == this.whichcoupon) {
                    this.coupon[i].status = 1;
                }
            }
            this.couponpop = 0;
        },
        openinput(num) {
            $(`#input_image_${num}`).click();
        },
        changesinglepic(num, active) {
            var form = new FormData(document.getElementById(`upfile_${num}`));
            form.append('id', num);
            form.append('active', active);
            $.ajax({
                url: 'https://www.plusone88.com/api/modifydataskillimage',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function (data) {
                    data = JSON.parse(data);
                    if (data['status']) {
                        $(`#head_image_${num}`).attr({ "src": data['imgurl'], "class": "edit_div_spec" });
                        $(`#imgclose_${num}`).removeClass('voiceinput');
                    } else {
                        $(`#head_image_${num}`).attr('src', data['imgurl']);
                        $(`#head_image_${num}`).removeClass('edit_div_spec');
                        $(`#imgclose_${num}`).addClass('voiceinput');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus)
                }
            })
        },
        uploadvoice() {
            $('.voiceinput').click();
        },
        uploadvoicech() {
            var form = new FormData(document.getElementById(`voice`));
            form.append('id', 1);
            $.ajax({
                url: 'https://www.plusone88.com/api/uploadvoice',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function (data) {
                    data = JSON.parse(data);
                    $('#sinplayer').attr('src', data['url']);
                    vm.sinvideo = 1;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus)
                }
            })
        },
        // sinplayaudio() {
        //     var player = document.getElementById(`sinplayer`);
        //     if (player.paused) {
        //         player.play();
        //     } else {
        //         player.pause();
        //     }
        //     this.sinautoaudio();
        // },
        // sinautoaudio() {
        //     (function (window, undefined) {
        //         var player = document.getElementById(`sinplayer`),
        //             //  map =  ['error','src','currentSrc','networkState','readyState','preload','buffered','played','seekable','seeking','currentTime','startTime','duration','paused','defaultPlaybackRate','playbackRate','ended','autoplay','loop','controls','volume','muted'];
        //             map = ['currentTime', 'duration', 'paused', 'ended'];
        //         $(`#playersec`).text(Math.round(player['duration']) + "”");
        //         $(`#sincards_autio`).addClass('playaudio');
        //         window.setInterval(function () {
        //             if (player['ended'] || player['paused']) {
        //                 $(`#sincards_autio`).removeClass('playaudio');
        //             }
        //         }, 1000);

        //     })(window);
        // },
        editName(id) {
            this.edit_name = id;
            if (id == 1) {
                this.username = this.user.name;
            }
            if (id == 0) {
                this.user.name = this.username;
            }
        },
        coneditName() {
            $.post("https://www.plusone88.com/api/getdataskill", {
                "name": vm.user.name
            })
                .done(function (result) {
                    vm.edit_name = 0;
                })
        },
        openintro() {
            this.textarea = 1;
            this.textareatext = this.introduce;
        },
        canceltext() {
            this.textarea = 0;
            this.introduce = this.textareatext;
        },
        confirmtext() {
            $.post("https://www.plusone88.com/api/getdataskill", {
                "intro": vm.introduce
            })
                .done(function (result) {
                    vm.textarea = 0;
                    vm.textareatext = vm.introduce;
                })
        },
        sexpop() {
            this.sexselectnum = 1;
        },
        usersexconfirm(sex, id) {
            $.post("https://www.plusone88.com/api/getdataskill", {
                "sex": id
            })
                .done(function (result) {
                    vm.usersex = sex;
                    vm.sexselectnum = 0;
                })
        },
        uploadvoicechskill() {
            var form = new FormData(document.getElementById(`voiceinput`));
            form.append('id', 1);
            $.ajax({
                url: 'https://www.plusone88.com/api/uploadvoice',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function (data) {
                    data = JSON.parse(data);
                    $('#player_1').attr('src', data['url']);
                    $('.dataskill').css('display', 'inline-flex');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus)
                }
            })
        },
        openyear(id) {
            if (id == 1) {
                this.biryear = 1;
                this.birmon = 0;
                this.bir_day = 0;
            }
            if (id == 2) {
                this.biryear = 0;
                this.birmon = 1;
                this.bir_day = 0;
            }
            if (id == 3) {
                this.biryear = 0;
                this.birmon = 0;
                this.bir_day = 1;
            }
            $(document).click(function (e) {
                var _con = $('.birthday_option');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.biryear = 0
                    vm.birmon = 0
                    vm.bir_day = 0
                }
            });
        },
        dotyear(year) {
            this.yearpp = year;
            this.biryear = 0;
        },
        dotmonth(month) {
            this.monthpp = month;
            this.birmon = 0;
        },
        dotday(day) {
            this.daypp = day;
            this.bir_day = 0;
        },
        addbir() {
            this.editbitday = 1;
            this.yearpp = "2003";
            this.monthpp = "1";
            this.daypp = "1";
            this.updatebir = true;
        },
        cancelbir() {
            this.editbitday = 0;
            if (this.updatebir) {
                this.yearpp = "";
                this.monthpp = "";
                this.daypp = "";
                this.updatebir = false;
            }
            if (this.isconfirm) {
                this.yearpp = this.fakea;
                this.monthpp = this.fakeb;
                this.daypp = this.fakec;
                this.isconfirm = false;
            }
        },
        confirmbir() {
            $.post("https://www.plusone88.com/api/getdataskill", {
                "day": this.daypp,
                "year": this.yearpp,
                "month": this.monthpp
            })
                .done(function (result) {
                    vm.editbitday = 0;
                })
        },
        editbbb() {
            this.editbitday = 1;
            this.isconfirm = true;
            this.fakea = this.yearpp;
            this.fakeb = this.monthpp;
            this.fakec = this.daypp;
        },
        tiephonenow() {
            this.tiephone = 1;
        },
        closetiephone() {
            this.tiephone = 0;
        },
        code_confirm() {
            this.opacity['opacity'] = false;
            this.opacity['opacity_no'] = true;
            $('.valid_code_div_input').css("color", "#333")
        },
        circleconfirm() {
            if (this.lineopen == 0) {
                $('.switch').addClass('circle_1').removeClass('circle');
                $('.switch_wrap').addClass('openorclose_1').removeClass('openorclose');
                this.lineopen = 1;
            } else {
                $('.switch').addClass('circle').removeClass('circle_1');
                $('.switch_wrap').addClass('openorclose').removeClass('openorclose_1');
                this.lineopen = 0;
            }
        },
        deleteblock(id, num) {
            $(`#block_${num}`).css('display', 'none')
        },
        deleteacc() {
            this.foreverdeletcacc = 1;
        },
        closedeacc(num) {
            this.foreverdeletcacc = 0;
            if (num == 2) {

            }
        },
        message(num) {
            this.openmes = num;
        },
        cancelmessage() {
            this.openmes = 0;
        },
        postmessage(id) {
            this.openmes = 0;
            if (this.dramic_27 == "") {
                return false
            } else {
                $.post("https://www.plusone88.com/api/dramicmessage", {
                    "id": id,
                    "text": vm.dramic_27,
                })
                    .done(function (result) {
                        result = JSON.parse(result)
                        vm.singlemessage.mesper.unshift(result);
                        var topmessage = parseInt($(`#topmessage_${id}`).text());
                        $(`#topmessage_${id}`).text(topmessage + 1);
                        var message = parseInt($(`#message_${id}`).text())
                        $(`#message_${id}`).text(message + 1);
                    })
            }
            vm.dramic_27 = "";
        },
        addlove(id) {
            $.post("https://www.plusone88.com/api/dramiclike", {
                "id": id,
            })
                .done(function (result) {
                    result = JSON.parse(result)
                    if (result.status) {
                        $(`#toplove_${id}`).attr('src', '/plusone88/assets/img/icon-heart-pre@3x.png')
                        $(`#love_${id}`).attr('src', '/plusone88/assets/img/icon-heart-pre@3x.png')
                        var topgood = parseInt($(`#topgood_${id}`).text());
                        $(`#topgood_${id}`).text(topgood + 1);
                        var good = parseInt($(`#good_${id}`).text())
                        $(`#good_${id}`).text(good + 1);
                    }
                })
        },
        nothing() {

        },
        messageimages() {
            $('.messageinput').click();
        },
        imagepro() {
            var imagesize = 1024000;
            let that = vm;
            var obj = that.getId('messageinput'),
                obArr = obj.files,
                length = obArr.length,
                arr = [],
                limitNum = that.limitNum;
            for (let x of obArr) {
                var params = { name: x.name, src: '' };
                arr.push(params);
            }
            that.allArr = [...that.allArr, ...arr];
            that.image_error_mes = ``;
            const Pro = function () {
                return new Promise(function (resolve, reject) {
                    arr.forEach((v, i, array) => {
                        resolve(array)
                    });
                })
            };

            Pro().then((newArr) => {
                for (let i = 0; i < newArr.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var _src = e.target.result;
                        newArr[i].src = _src;
                        // that.clearVal();
                    };
                    reader.readAsDataURL(obj.files[i]);
                    if (obj.files[i].size > imagesize) {
                        that.image_error_mes = `上傳圖片檔案過大，請重新選擇圖片!`;
                        return false;
                    }
                }
                var len1 = that.list.length,
                    len2 = newArr.length;
                var d = [...that.list, ...newArr];
                that.list = d;
                if (d.length > limitNum) {
                    that.image_error_mes = `最多只能上傳${limitNum}張圖片`;
                    that.list.splice(limitNum, d.length - limitNum);
                }
            });
        },
        delImg(i) {
            this.list.splice(i, 1);
            this.allArr.splice(i, 1);
            if (this.list.length <= 9) {
                this.image_error_mes = ``;
            }

            if (this.list.length <= 0) {
                this.clearVal();
            }
        },

        clearVal() {
            this.getId('messageinput').value = null;
        },
        getId(id) {
            return document.getElementById(id);
        },
        opmespop(id) {
            if (id == 1) {
                this.messagepop = 1;
            }

            if (id == 2) {
                this.desc = "";
                this.messagepop = 0;
                this.list = this.deletearr;
                this.allArr = this.deletearr;
                this.image_error_mes = "";
            }
        },
        openreply(id) {
            this.replypop = id;
        },
        // replymessage(name) {
            // alert(name)
            // var replyarr = [];
            // replyarr.id = 2,
            // replyarr.quname = name;
            // replyarr.anname = "立杰";
            // replyarr.message = this.replytext;
            // replyarr.time = "剛剛發佈";
            // this.replypop = 0;
            // this.replytext = "";
            // this.replys.unshift(replyarr)
        // },
        sel_pre_top(id,mesid) {
            $('.border').removeClass('dramic_select')
            $(`#present_${mesid}_${id}`).addClass('dramic_select')
            this.presentcoin = id;
        },
        sel_pre_top_bot(id){
            $('.border').removeClass('dramic_select')
            $(`#presentbot_${id}`).addClass('dramic_select')
            this.presentcoin = id;
        },
        opensmall() {
            if (this.small_present == 0) {
                this.small_present = 1;
                $('.preson_102').addClass("anogift");
                $('.dramic_102').addClass("anogift");
            } else {
                this.small_present = 0;
                $('.preson_102').removeClass("anogift");
                $('.dramic_102').removeClass("anogift");
                this.presentcoin = 0
            }
        },
        selsmanum(number) {
            this.smallprenum = number;
            this.small_present = 0;
            $('.preson_102').removeClass("anogift");
            $('.dramic_102').removeClass("anogift");
        },
        openbigpre() {
            this.bigprepop = 1;
            $('.person_23').addClass("gift");
            $('.dramic_88').addClass("gift");
            $('.specailGift').addClass("gift");
            $('.specialGiftdate').addClass("gift");
        },
        closebigprepop() {
            this.bigprepop = 0;
            $('.person_23').removeClass("gift");
            $('.dramic_88').removeClass("gift");
            $('.specailGift').removeClass("gift");
            $('.specialGiftdate').removeClass("gift");
        },
        opensinglebigpre(id){
            this.bigsinprepop = id;
        },
        closesinbigprepop(){
            this.bigsinprepop = 0
        },
        donate(send){
            if(this.presentcoin == 0 || this.btnlock == 1){
                return false
            }

            this.btnlock = 1;

            $.post("https://www.plusone88.com/api/sendgift", {
                    'messageid': send,
                    "presentid": vm.presentcoin,
                    "numid" : vm.smallprenum,
                    "type": 2
                })
                .done(function (result) {
                    result = JSON.parse(result);
                    vm.donatemessage = result.message
                    vm.presentpop = 1
                    vm.small_present = 0;
                    vm.presentcoin = 0
                    vm.presonmepop = 0
                    vm.bigprepop = 0;
                    vm.bigsinprepop = 0
                    vm.btnlock = 0
                    $('.preson_102').removeClass("anogift");
                    $('.dramic_102').removeClass("anogift");
                    $('.border').removeClass('dramic_select')
                })
        },
        donatepreson(send){
            if(this.presentcoin == 0 || this.btnlock == 1){
                return false
            }

            this.btnlock = 1;

            $.post("https://www.plusone88.com/api/sendgift", {
                    'messageid': send,
                    "presentid": vm.presentcoin,
                    "numid" : vm.smallprenum,
                    "type": 1
                })
                .done(function (result) {
                    result = JSON.parse(result);
                    vm.donatemessage = result.message
                    vm.presentpop = 1
                    vm.small_present = 0;
                    vm.presentcoin = 0
                    vm.presonmepop = 0
                    vm.bigprepop = 0;
                    vm.bigsinprepop = 0
                    vm.btnlock = 0
                    $('.preson_102').removeClass("anogift");
                    $('.dramic_102').removeClass("anogift");
                    $('.border').removeClass('dramic_select')
                })
        },
        async presonmessagepage(num, id) {
            if (num == 1) {
                return await $.get(`https://www.plusone88.com/api/dramicinfo/${id}`, {

                })
                    .done(function (result) {
                        result = JSON.parse(result)
                        vm.singlemessage = result;
                        vm.presonmepop = num;
                    })
            } else {
                this.presonmepop = num;
            }
        },
        left_prebtn() {
            $('.person_31').css('display', 'block');
            this.rightclicktines--;
            var length = (this.rightclicktines) * parseInt('-520');
            $('.person_34').css('margin-left', `${length}px`);

            if (this.rightclicktines == 0) {
                $('.person_31').css('display', 'block');
                $('.person_30').css('display', 'none');
            }
        },
        right_prebtn() {
            $('.person_30').css('display', 'block');
            var arrlen = this.personskill.length + 1;
            var aaa = parseInt(arrlen / 4);
            var bbb = parseInt(arrlen % 4);
            this.rightclicktines++;
            var length = (this.rightclicktines) * parseInt('-520');
            $('.person_34').css('margin-left', `${length}px`);
            if (bbb == 0) {
                if (this.rightclicktines == aaa - 1) {
                    $('.person_31').css('display', 'none');
                    $('.person_30').css('display', 'block');
                }
            } else {
                if (this.rightclicktines == aaa) {
                    $('.person_31').css('display', 'none');
                    $('.person_30').css('display', 'block');
                }
            }
        },
        addactive(num) {
            $('.person_29').removeClass('person_29_active');
            $(`#person_${num}`).addClass('person_29_active')
        },
        openmantsocial() {
            if (this.mutisocial == 0) {
                this.mutisocial = 1;
            } else {
                this.mutisocial = 0;
            }
        },
        opensetpop(num) {
            if (num == 1) {
                if (this.ischecked['ischecked']) {
                    this.settlepop = num;
                }
            } else {
                this.settlepop = num;
            }
        },
        imgupload() {
            $(`.settleform_24`).click();
        },
        imguploadch() {
            var form = new FormData(document.getElementById(`settleform_24`));
            form.append('id', 1);
            $.ajax({
                url: 'https://www.plusone88.com/api/changeavatar',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function (data) {
                    data = JSON.parse(data);
                    $('.settleform_21').attr('src', data['url']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus)
                }
            })
        },
        editimgupload() {
            $(`.single_skill_14`).click();
        },
        editinputac() {
            image_size = 1024000;
            var obj = this.getId('single_skill_14'),
                obArr = obj.files;
            let _file = obArr[0];
            let reader = new FileReader();
            reader.readAsDataURL(_file);
            reader.onload = function (e) {
                let image = new Image();
                image.src = this.result;
                image.onload = function () {
                    var len = vm.editskillimg.length;
                    var arr = {
                        "id": len + 1,
                        "img": e.target.result,
                    };
                    vm.editskillimg.push(arr)
                }
            }
        },
        diauploadimg() {
            $(`.imagedia`).click();
        },
        chandiaupimg() {
            image_size = 1024000;
            var obj = this.getId('imagedia'),
                obArr = obj.files;
            let _file = obArr[0];
            let reader = new FileReader();
            reader.readAsDataURL(_file);
            reader.onload = function (e) {
                let image = new Image();
                image.src = this.result;
                image.onload = function () {
                }
            }
        },
        thislfirsrk(text, num) {
            this.ranklevelte = text;
            this.playeditredute = 0;
            this.levelId = num;
            $('.thislfirsrk').removeClass('active');
            $(`#thislfirsrk_${num}`).addClass('active');
        },
        thisordersmart(text, num) {
            this.ordertext = text;
            this.orderpop = 0;
            $('.ordersmart').removeClass('active');
            $(`#ordersmart_${num}`).addClass('active');
        },
        playedit(id, str) {
            this.togeedit = id;
            $(document).click(function (e) {
                var _con = $(`.${str}`);
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.togeedit = 0;
                }
            });
        },
        playeditredu(id, str) {
            this.togeeditthisredu = id;
            $(document).click(function (e) {
                var _con = $(`.${str}`);
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.togeeditthisredu = 0;
                }
            });
        },
        editranklevel(id, str) {
            this.playeditredute = id;
            $(document).click(function (e) {
                var _con = $(`.${str}`);
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.playeditredute = 0;
                }
            });
        },
        opensmartord(id, str) {
            if (this.orderpop == 1) {
                this.orderpop = 0;
            } else {
                this.orderpop = id;
            }

            $(document).click(function (e) {
                var _con = $(`.${str}`);
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.orderpop = 0;
                }
            });
        },
        opensmartordright(id, str) {
            this.orderpopright = id;
            $(document).click(function (e) {
                var _con = $(`.${str}`);
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.orderpopright = 0;
                }
            });
        },
        check_money() {
            var moneey = this.moneey;
            moneey = moneey.replace(/[^\d]/g, '');
            if (moneey.indexOf('.') < 0 && moneey != '') {
                moneey = parseInt(moneey);
            }
            this.moneey = moneey;
        },
        check_firstmoney() {
            var first_money = this.first_money;
            first_money = first_money.replace(/[^\d]/g, '');
            if (first_money.indexOf('.') < 0 && first_money != '') {
                first_money = parseInt(first_money);
            }
            this.first_money = first_money;
        },
        check_phone() {
            var license_num = this.phonenumber;
            license_num = license_num.replace(/[^\d]/g, '');
            this.phonenumber = license_num;
        },
        introInputEdit() {
            this.introducenum = this.editintrotext.length;
        },
        descInput() {
            this.remnant = this.desc.length;
        },
        apply_settle(e) {
            var vaild = this.settbleform[0];
            if (vaild['fakename'] == "") {
                this.fakename = 1;
                e.preventDefault();
                return false;
            } else {
                this.fakename = 0;
            }

            if (vaild['sex'] == "") {
                this.ssex = 1;
                e.preventDefault();
                return false;
            } else {
                this.ssex = 0;
            }

            if (vaild['name'] == "") {
                this.realname = 1;
                e.preventDefault();
                return false;
            } else {
                this.realname = 0;
            }

            if (vaild['address'] == "") {
                this.address = 1;
                e.preventDefault();
                return false;
            } else {
                this.address = 0;
            }

            if (vaild['level'] == "") {
                this.levelup = 1;
                e.preventDefault();
                return false;
            } else {
                this.levelup = 0;
            }

            if (vaild['agree'] == 0) {
                this.agree_error = 1;
                e.preventDefault();
                return false;
            } else {
                this.agree_error = 0;
            }
        },
        selecstore(id, money) {
            $('.store_4').removeClass('stroeactive');
            $('.checkstore').css('display', 'none');
            $(`#store_${id}`).addClass('stroeactive');
            $(`#check_${id}`).css('display', 'block');
            this.storemoney = id;
        },
        selecbank(id, payment) {
            $('.store_10').removeClass('stroeactive');
            $('.bank_1').css('display', 'none');
            $(`#bank_${id}`).addClass('stroeactive');
            $(`#bankcheck_${id}`).css('display', 'block');
            this.payment = payment;
        },
        toggleswitch(id) {
            this.dialoagswitch = id;
            if (id == 1) {
                $('.dialoag_4').css('z-index', '1');
                $('.dramic_3').css('z-index', '2');
                $('.dramic_2').css('z-index', '3');
                $('.dialoag_4').css('background', '#F3F3F3');
                $('.dramic_3').css('background', '#F3F3F3');
                $('.dramic_2').css('background', '#fff');
            }

            if (id == 2) {
                $('.dialoag_4').css('z-index', '1');
                $('.dramic_3').css('z-index', '3');
                $('.dramic_2').css('z-index', '2');
                $('.dialoag_4').css('background', '#F3F3F3');
                $('.dramic_3').css('background', '#fff');
                $('.dramic_2').css('background', '#F3F3F3');
            }

            if (id == 3) {
                $('.dialoag_4').css('z-index', '3');
                $('.dramic_3').css('z-index', '1');
                $('.dramic_2').css('z-index', '2');
                $('.dialoag_4').css('background', '#fff');
                $('.dramic_3').css('background', '#F3F3F3');
                $('.dramic_2').css('background', '#F3F3F3');
            }
        },
        poststore(e) {
            if (this.storemoney == 0) {
                this.money_error = 1;
                e.preventDefault();
                return false;
            } else {
                this.money_error = 0;
            }

            if (this.usermail == "") {
                this.email_error = 1;
                e.preventDefault();
                return false;
            } else {
                this.email_error = 0;
            }

            const reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            let str = this.usermail;
            if (!reg.test(str)) {
                this.email_error = 1;
                e.preventDefault();
                return false;
            }
        },
        bankpopfun() {
            this.bankpop = 1;
        },
        bankfun(id) {
            if (id == 1) {
                $.post("https://www.plusone88.com/api/deletebank", {
                    'status': id,
                })
                    .done(function (result) {
                        result = JSON.parse(result);
                        if (result['status']) {
                            window.location.reload();
                        }
                    })
            }
            this.bankpop = 0;
        },
        openmantbank() {
            this.openbank = 1;
            $(document).click(function (e) {
                var _con = $('.many_bank');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.openbank = 0;
                }
            });
        },
        bankvaild() {
            if (this.whichbank == "") {
                $('.error_bank').text('請選擇綁定銀行');
                return false;
            } else {
                $('.error_bank').text('')
            }

            if (this.bankcode == "") {
                $('.error_bank_acc').text('請輸入完整銀行帳號');
                return false;
            } else {
                $('.error_bank_acc').text('')
            }

            if (this.phonenumber == "") {
                $('.error_message').text('請輸入手機號碼');
            }

        },
        check_bankcode() {
            var bankcode = this.bankcode;
            bankcode = bankcode.replace(/[^\d]/g, '');
            this.bankcode = bankcode;
        },
        addbankcard(id) {
            this.addbankpop = id;
        },
        checkgetmoney() {
            this.getmonet_error = 0;
            if (this.moneey < 100) {
                this.getmonet_error = 1;
                return false;
            }

            if (this.getmoneypas == "") {
                this.getmonet_error = 2;
                return false;
            }

            if (this.phonenumber == "") {
                this.getmonet_error = 3;
                return false;
            }
        },
        changegetmoney(id) {
            this.moneyapply = id;
            $('.together').removeClass('myorder_speacil_line');
            $(`#getmoney_${id}`).addClass('myorder_speacil_line');
        },
        changeskill(id) {
            this.dataskill = id;
            $('.together').removeClass('myorder_speacil_line');
            $(`#skill_${id}`).addClass('myorder_speacil_line');
        },
        confirmModifypsd() {
            this.modibankcode = 0;
            if (this.old_psd == "") {
                this.modibankcode = 1;
                return false;
            }

            if (this.new_psd != this.new_psd_again) {
                this.modibankcode = 2;
                return false;
            }

            if (this.phonenumber == "" || this.phonenumber.length != 10) {
                this.modibankcode = 3;
                return false;
            }

            this.succcodepop = 1;
        },
        linkhome() {
            window.location.href = "/plusone88/plusone"
        },
        circleconfirmd(id, status) {
            $.post("https://www.plusone88.com/api/skillstatusmodify", {
                'skill_id': id,
                'status': status,
            })
                .done(function (result) {
                    result = JSON.parse(result);
                    if (result['status']) {
                        window.location.reload();
                    }
                })
        },
        editskill(id) {
            window.location.href = "/member/editskill/" + id
        },
        deletesinimg(id) {
            this.editskillimg.splice(id - 1, 1)
        },
        smallTag(id) {
            $('.playerlist_10').removeClass('playerlist_10_active');
            $(`#playerlist_${id}`).addClass('playerlist_10_active');
        },
        filtersex(id) {
            $('.filtersex').removeClass('playerlist_19_active');
            $(`#filtersex_${id}`).addClass('playerlist_19_active');
        },
        filtertag(id) {
            $('.filtertag').removeClass('playerlist_19_active');
            $(`#filtertag_${id}`).addClass('playerlist_19_active');
        },
        filterrank(id) {
            $('.filterrank').removeClass('playerlist_19_active');
            $(`#filterrank_${id}`).addClass('playerlist_19_active');
        },
        filterprice(id) {
            $('.filterprice').removeClass('playerlist_19_active');
            $(`#filterprice_${id}`).addClass('playerlist_19_active');
        },
        clearallfilter() {
            $('.playerlist_19').removeClass('playerlist_19_active');
        },
        postfilter() {
            this.clearallfilter();
            this.orderpopright = 0;
        },
        clikcperson(id) {
            $('.alldialoag').removeClass('dialoag_6_active');
            $(`#per_dialoag_${id}`).addClass('dialoag_6_active');
            this.bigprepop = 0;
        },
        clikcdateperson(id) {
            $('.datealldialoag').removeClass('dialoag_6_active');
            $(`#date_dialoag_${id}`).addClass('dialoag_6_active');
            this.bigprepop = 0;
        },
        addblock(id) {
            this.dialoag_block = id;
            $(document).click(function (e) {
                var _con = $('.dialoag_45');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.dialoag_block = 0;
                }
            });
        },
        formatCardNumber() {
            var addbankacc = this.addbankacc;
            addbankacc = addbankacc.replace(/[^\d]/g, '');
            this.addbankacc = addbankacc;
            $('.code_error').css('opacity', '0')
            var caret = document.getElementById('addbankacc').selectionStart;
            var value = this.addbankacc;
            var sp = (value.slice(0, caret).match(/\s/g) || []).length;
            var nospace = value.replace(/\s/g, '');
            var curVal = this.addbankacc = nospace.replace(/\D+/g, "").replace(/(\d{4})/g, "$1 ").trim();
            var curSp = (curVal.slice(0, caret).match(/\s/g) || []).length;
            document.getElementById('addbankacc').selectionEnd = document.getElementById('addbankacc').selectionStart = caret + curSp - sp;
        },
        addbankfun() {
            if (this.addbankacc == "" || this.addbankacc.length != 19) {
                $('.code_error').css('opacity', '1')
            }
        },
        vaild_email() {
            const reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            let str = this.usermail;
            if (!reg.test(str)) {
                this.email_error = 1;
                return false;
            } else {
                this.email_error = 0;
            }
        },
        countorder() {
            this.orderNUM++;
        },
        countorderde() {
            if (this.orderNUM == 1) {
                return false;
            }
            this.orderNUM--;
        },
        postorderone() {
            if (this.payment == "") {
                this.paymentconord = 1;
            } else {
                this.paymentconord = 0;
            }

            this.vaild_email();
        },
        // changerankme(id) {
        //     $('.rankcolor').removeClass('rank_active');
        //     $(`#rankcolor_${id}`).addClass('rank_active');
        // },
        // ruletagchange(id) {
        //     if (id == 1) {
        //         $('.rank_10').css('background', '#F3F3F3');
        //         $('.rank_10').css('color', '#483563');
        //         $('.rank_10').css('z-index', '3');
        //         $('.rank_9').css('background', '#483563');
        //         $('.rank_9').css('color', '#fff');
        //         $('.rank_9').css('z-index', '2');
        //     }

        //     if (id == 2) {
        //         $('.rank_10').css('background', '#483563');
        //         $('.rank_10').css('color', '#fff');
        //         $('.rank_10').css('z-index', '2');
        //         $('.rank_9').css('background', '#F3F3F3');
        //         $('.rank_9').css('color', '#483563');
        //         $('.rank_9').css('z-index', '3');
        //     }
        // },
        // selemodel(id) {
        //     $('.personall').removeClass('person_39_active');
        //     $(`#personmod_${id}`).addClass('person_39_active');
        // },
        playaudio(id) {
            var player = document.getElementById(`player_${id}`);
            if (player.paused) {
                player.play(id);
            } else {
                player.pause(id);
            }
            this.autoaudio(id);
        },
        autoaudio(id) {
            (function (window, undefined) {
                var player = document.getElementById(`player_${id}`),
                    //  map =  ['error','src','currentSrc','networkState','readyState','preload','buffered','played','seekable','seeking','currentTime','startTime','duration','paused','defaultPlaybackRate','playbackRate','ended','autoplay','loop','controls','volume','muted'];
                    map = ['currentTime', 'duration', 'paused', 'ended'];
                $(`#playersec_${id}`).text(Math.round(player['duration']) + "”")
                $(`#cards_autio_${id}`).addClass('playaudio');
                window.setInterval(function () {
                    // var str = '';
                    for (var i = 0, j = map.length; i < j; i++) {

                        // str += map[i] + ' : ' + player[map[i]] + '<br>\n';
                    }
                    // document.getElementById('panel').innerHTML = str;

                    if (player['ended'] || player['paused']) {
                        $(`#cards_autio_${id}`).removeClass('playaudio');
                    }
                }, 1000);

            })(window);
        },
        connect() {
            // 创建websocket
            ws = new WebSocket("wss://sockets.funmily.com/plusone");
            // 当socket连接打开时，输入用户名
            ws.onopen = this.onopen;
            // 当有消息时根据消息类型显示不同信息
            ws.onmessage = this.onmessage; 
            ws.onclose = function() {
            //    console.log("连接关闭，定时重连");
               connect();
            };
            ws.onerror = function() {
                // console.log("出现错误");
            };
         },
         onopen() {
            $.get("https://www.plusone88.com/api/userinfo", {

                })
            .done(function (result) {
                result = JSON.parse(result)
                if(result.status === false){
                    return false
                }

                if(result.uid != ""){
                    var login_data = '{"type":"login","client_img":"'+result.picture+'","client_name":"'+result.fakename+'","room_id":1}';
                    ws.send(login_data);
                }
            })
        },
        onmessage(e) {
            var data = JSON.parse(e.data);
            switch(data['type']){
                // 登录 更新用户列表
                case 'login':
                    if(data.client_list == undefined){
                        var loginid = data.client_id;
                        var loginimg = data.client_img;
                        var loginname = data.client_name;
                        Vue.set(vm.client_list, loginid, {
                            'image':loginimg,
                            'name':loginname
                        })
                    }else{
                        vm.client_list = data.client_list;
                    }
                    break;
                // 发言
                case 'say':
                    //{"type":"say","from_client_id":xxx,"to_client_id":"all/client_id","content":"xxx","time":"xxx"}
                    vm.say(data['from_client_id'], data['from_client_name'], data['content'], data['time']);
                    break;
                // 用户退出 更新用户列表
                case 'logout':
                    //{"type":"logout","client_id":xxx,"time":"xxx"}
                    // vm.say(data['from_client_id'], data['from_client_name'], data['from_client_name']+' 退出了', data['time']);
                    // delete client_list[data['from_client_id']];
                    // vm.flush_client_list();
                    var logoutid = data.from_client_id;
                    this.$delete(vm.client_list, logoutid)
            }
        },
        onSubmit(e) {
            var input = document.getElementById("textarea");
            var to_client_id = 'all';
            ws.send('{"type":"say","to_client_id":"'+to_client_id+'","content":"'+input.value.replace(/"/g, '\\"').replace(/\n/g,'\\n').replace(/\r/g, '\\r')+'"}');
            input.value = "";
            input.focus();
            e.preventDefault();
            return false;
        },
        flush_client_list(){
            $("#client_list").val('all');
        },
        say(from_client_id, from_client_name, content, time){
            //解析新浪微博图片
            content = content.replace(/(http|https):\/\/[\w]+.sinaimg.cn[\S]+(jpg|png|gif)/gi, function(img){
                return "<a target='_blank' href='"+img+"'>"+"<img src='"+img+"'>"+"</a>";}
            );
    
            //解析url
            content = content.replace(/(http|https):\/\/[\S]+/gi, function(url){
                if(url.indexOf(".sinaimg.cn/") < 0)
                    return "<a target='_blank' href='"+url+"'>"+url+"</a>";
                else
                    return url;
            }
            );
    
            // $("#dialog").append('<div class="speech_item"><img src="http://lorempixel.com/38/38/?'+from_client_id+'" class="user_icon" /> '+from_client_name+' <br> '+time+'<div style="clear:both;"></div><p class="triangle-isosceles top">'+content+'</p> </div>').parseEmotion();
        }
    }
});

$(document).ready(function () {
    $(".scan").hover(function () {
        $(".qrcode").css('display', 'block');
    }, function () {
        $(".qrcode").css('display', 'none');
    });
})

$(function () {
    $('.infoCarousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        autoplay: true,
        navClass: ["carouselNav_prevApp", "carouselNav_nextApp"],
        navText: [" ", " "],
        navContainerClass: "carouselNavApp",
        items: 1
    });
});

function couponopen(id) {
    $('.couponpop').css('display', 'block')
    $('.logoutmaskBg').css('display', 'block')
}

// if (typeof console == "undefined") {    this.console = { log: function (msg) {  } };}
//     // 如果浏览器不支持websocket，会使用这个flash自动模拟websocket协议，此过程对开发者透明
//     WEB_SOCKET_SWF_LOCATION = "/swf/WebSocketMain.swf";
//     // 开启flash的websocket debug
//     WEB_SOCKET_DEBUG = true;
//     var ws, name, client_list={},room_id,client_id;

    // room_id = getQueryString('room_id')?getQueryString('room_id'):1;

    // function getQueryString(name) {
    //     var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    //     var r = window.location.search.substr(1).match(reg);
    //     if (r != null) return unescape(r[2]); return null;
    // } 
    
    // 连接服务端
    // function connect() {
    //    // 创建websocket
    //    ws = new WebSocket("wss://sockets.funmily.com/plusone");
    //    // 当socket连接打开时，输入用户名
    //    ws.onopen = onopen;
    //    // 当有消息时根据消息类型显示不同信息
    //    ws.onmessage = onmessage; 
    //    ws.onclose = function() {
    // 	  console.log("连接关闭，定时重连");
    //       connect();
    //    };
    //    ws.onerror = function() {
    //  	  console.log("出现错误");
    //    };
    // }

    // 连接建立时发送登录信息
    // function onopen()
    // {
    //     $.get("https://www.plusone88.com/api/userinfo", {

    //         })
    //             .done(function (result) {
    //                 result = JSON.parse(result)
    //                 var login_data = '{"type":"login","client_img":"'+result.picture+'","client_name":"'+result.fakename+'","room_id":'+room_id+'}';
    //                 console.log("websocket握手成功，发送登录数据:"+login_data);
    //                 ws.send(login_data);
    //             })
    //     // 登录
        
    // }

    // 服务端发来消息时
    // function onmessage(e) {
    //     console.log(e.data);
    //     var data = JSON.parse(e.data);
    //     switch(data['type']){
    //         // 服务端ping客户端
    //         case 'ping':
    //             ws.send('{"type":"pong"}');
    //             break;;
    //         // 登录 更新用户列表
    //         case 'login':
    //             var client_name = data['client_name'];
    //             if(data['client_list'])
    //             {
    //                 client_id = data['client_id'];
    //                 client_name = '你';
    //                 client_list = data['client_list'];
    //             }
    //             else
    //             {
    //                 client_list[data['client_id']] = data['client_name']; 
    //             }

    //             say(data['client_id'], data['client_name'],  client_name+' 加入了聊天室', data['time']);

    //             flush_client_list();
    //             console.log(data['client_name']+"登录成功");
    //             break;
    //         // 发言
    //         case 'say':
    //             //{"type":"say","from_client_id":xxx,"to_client_id":"all/client_id","content":"xxx","time":"xxx"}
    //             say(data['from_client_id'], data['from_client_name'], data['content'], data['time']);
    //             break;
    //         // 用户退出 更新用户列表
    //         case 'logout':
    //             //{"type":"logout","client_id":xxx,"time":"xxx"}
    //             say(data['from_client_id'], data['from_client_name'], data['from_client_name']+' 退出了', data['time']);
    //             delete client_list[data['from_client_id']];
    //             flush_client_list();
    //     }
    // }

    // 提交对话
    // function onSubmit() {
    //   var input = document.getElementById("textarea");
    // //   var to_client_id = $("#client_list option:selected").attr("value");
    //   var to_client_id = 'all';
    //   var to_client_name = $("#client_list option:selected").text();
    //   ws.send('{"type":"say","to_client_id":"'+to_client_id+'","to_client_name":"'+to_client_name+'","content":"'+input.value.replace(/"/g, '\\"').replace(/\n/g,'\\n').replace(/\r/g, '\\r')+'"}');
    //   input.value = "";
    //   input.focus();
    // }

    // 刷新用户列表框
    // function flush_client_list(){
    // 	var userlist_window = $("#userlist");
    // 	var client_list_slelect = $("#client_list");
    // 	userlist_window.empty();
    // 	client_list_slelect.empty();
    // 	userlist_window.append('<h4>在线用户</h4><ul>');
    // 	client_list_slelect.append('<option value="all" id="cli_all">所有人</option>');
    // 	for(var p in client_list){
    //         userlist_window.append('<li id="'+p+'">'+client_list[p]+'</li>');
    //         if (p!=client_id) {
    //             client_list_slelect.append('<option value="'+p+'">'+client_list[p]+'</option>');   
    //         }
    //     }
    // 	$("#client_list").val(select_client_id);
    // 	userlist_window.append('</ul>');
    // }

    // 发言
    // function say(from_client_id, from_client_name, content, time){
    //     //解析新浪微博图片
    //     content = content.replace(/(http|https):\/\/[\w]+.sinaimg.cn[\S]+(jpg|png|gif)/gi, function(img){
    //         return "<a target='_blank' href='"+img+"'>"+"<img src='"+img+"'>"+"</a>";}
    //     );

    //     //解析url
    //     content = content.replace(/(http|https):\/\/[\S]+/gi, function(url){
    //         if(url.indexOf(".sinaimg.cn/") < 0)
    //             return "<a target='_blank' href='"+url+"'>"+url+"</a>";
    //         else
    //             return url;
    //     }
    //     );

    // 	// $("#dialog").append('<div class="speech_item"><img src="http://lorempixel.com/38/38/?'+from_client_id+'" class="user_icon" /> '+from_client_name+' <br> '+time+'<div style="clear:both;"></div><p class="triangle-isosceles top">'+content+'</p> </div>').parseEmotion();
    // }

    // $(function(){
    // 	select_client_id = 'all';
	//     $("#client_list").change(function(){
	//          select_client_id = $("#client_list option:selected").attr("value");
	//     });
    //     $('.face').click(function(event){
    //         $(this).sinaEmotion();
    //         event.stopPropagation();
    //     });
    // });