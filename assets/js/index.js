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
            name: '',
            manysocail: "",
            phonesuccess: "+886912345678",
            pcoin: 1250,
            gcoin: 1000,
            taicoin: 100000,
            gcoinone: 1000,
            gcointwo: 3000,
            gcointhree: 5000,
            gcoinfour: 10000,
            gacoin: 1000,
            manycoin: 0,
            //是否是登入狀態
            isLogin: true,
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
            haveSkill: [
                {
                    "id": 2,
                    'title': "傳說對決",
                    "image": "Group 3@2x.png",
                    "isSklii": true
                },
                {
                    "id": 3,
                    'title': "激鬥峽谷",
                    "image": "Group 1@2x.png",
                    "isSklii": true
                },
                {
                    "id": 5,
                    'title': "撩妹專區",
                    "image": "icon-0@2x.png",
                    "isSklii": true
                },
                {
                    "id": 6,
                    'title': "陪玩師服務",
                    "image": "icon-12@2x.png",
                    "isSklii": true
                },
            ],
            all_games: [
                [
                    {
                        "id": 1,
                        'title': "英雄聯盟",
                        "image": "Group 5@2x.png",
                        "isSklii": false
                    },
                    {
                        "id": 2,
                        'title': "傳說對決",
                        "image": "Group 3@2x.png",
                        "isSklii": true
                    },
                    {
                        "id": 3,
                        'title': "激鬥峽谷",
                        "image": "Group 1@2x.png",
                        "isSklii": true
                    },
                ],
                [
                    {
                        "id": 2,
                        'title': "傳說對決",
                        "image": "Group 3@2x.png",
                        "isSklii": true
                    },
                    {
                        "id": 3,
                        'title': "激鬥峽谷",
                        "image": "Group 1@2x.png",
                        "isSklii": true
                    },
                ],
                [
                    {
                        "id": 1,
                        'title': "英雄聯盟",
                        "image": "Group 5@2x.png",
                        "isSklii": false
                    },
                ],
                [

                    {
                        "id": 4,
                        'title': "動物森友會",
                        "image": "icon-12@2x.png",
                        "isSklii": false
                    },
                ],
                [
                    {
                        "id": 5,
                        'title': "撩妹專區",
                        "image": "icon-0@2x.png",
                        "isSklii": true
                    },
                ],
                [
                    {
                        "id": 6,
                        'title': "陪玩師服務",
                        "image": "icon-12@2x.png",
                        "isSklii": true
                    },
                ],
            ],
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
            countrys: [
                {
                    "id": 1,
                    "name": "台灣",
                    "number": 886
                },
                {
                    "id": 2,
                    "name": "日本",
                    "number": 244
                },
                {
                    "id": 3,
                    "name": "加拿大",
                    "number": 267
                },
                {
                    "id": 4,
                    "name": "新加坡",
                    "number": 975
                },
                {
                    "id": 5,
                    "name": "南韓",
                    "number": 847
                },
                {
                    "id": 6,
                    "name": "美國",
                    "number": 943
                },
                {
                    "id": 7,
                    "name": "馬來西亞",
                    "number": 746
                },
                {
                    "id": 8,
                    "name": "緬甸",
                    "number": 987
                },
                {
                    "id": 9,
                    "name": "柬埔寨",
                    "number": 621
                },
            ],
            // activity_lists: [
            //     {
            //         "link": "/plusone88/plusone/myorder",
            //         "img": "/plusone88/assets/img/icon-orderlist@2x.png",
            //         "title": "我的約單",
            //     },
            //     {
            //         "link": "/plusone88/plusone/balance",
            //         "img": "/plusone88/assets/img/icon-wallet@2x.png",
            //         "title": "餘額",
            //     },
            //     {
            //         "link": "/plusone88/plusone/cancoupon",
            //         "img": "/plusone88/assets/img/icon-coupon@2x.png",
            //         "title": "可用優惠券",
            //     },
            //     {
            //         "link": "/plusone88/plusone/settle",
            //         "img": "/plusone88/assets/img/icon-apply@2x.png",
            //         "title": "申請入駐",
            //     },
            //     {
            //         "link": "/plusone88/plusone/editdata",
            //         "img": "/plusone88/assets/img/icon-edit@2x.png",
            //         "title": "編輯資料",
            //     },
            //     {
            //         "link": "/plusone88/plusone/account",
            //         "img": "/plusone88/assets/img/icon-setting@2x.png",
            //         "title": "設置",
            //     },
            //     {
            //         "link": "yahoo.com.tw",
            //         "img": "/plusone88/assets/img/icon-service@2x.png",
            //         "title": "聯繫客服",
            //     },
            // ],
            activity_lists: [
                {
                    "link": "/plusone88/plusone/myorder",
                    "img": "/plusone88/assets/img/icon-orderlist@2x.png",
                    "title": "我的約單",
                },
                {
                    "link": "/plusone88/plusone/balance",
                    "img": "/plusone88/assets/img/icon-wallet@2x.png",
                    "title": "餘額",
                },
                {
                    "link": "/plusone88/plusone/cancoupon",
                    "img": "/plusone88/assets/img/icon-coupon@2x.png",
                    "title": "可用優惠券",
                },
                {
                    "link": "/plusone88/plusone/settle",
                    "img": "/plusone88/assets/img/icon-apply@2x.png",
                    "title": "申請入駐",
                },
                {
                    "link": "/plusone88/plusone/dataskill",
                    "img": "/plusone88/assets/img/icon-edit@2x.png",
                    "title": "資料及技能管理",
                },
                {
                    "link": "/plusone88/plusone/report",
                    "img": "/plusone88/assets/img/icon-report@2x.png",
                    "title": "收益報表",
                },
                {
                    "link": "/plusone88/plusone/bankcard",
                    "img": "/plusone88/assets/img/bankcard@2x.png",
                    "title": "銀行卡設定",
                },
                {
                    "link": "/plusone88/plusone/getmoney",
                    "img": "/plusone88/assets/img/icon-withdrawal@2x.png",
                    "title": "提款",
                },
                {
                    "link": "/plusone88/plusone/account",
                    "img": "/plusone88/assets/img/icon-setting@2x.png",
                    "title": "設置",
                },
                {
                    "link": "yahoo.com.tw",
                    "img": "/plusone88/assets/img/icon-service@2x.png",
                    "title": "聯繫客服",
                },
            ],
            phonemaskBg: 0,
            preson_data: 0,
            area_code: 886,
            hashmes: "",
            user: {
                id: "",
                name: "Sheena Chen",
                email: "",
                token: "",
                hasAgreed: null,
                reward: "",
            },
            all_sex: ["性別不限", "男生", "女生"],
            sex: "性別不限",
            sexNum: 0,
            gametext: "英雄聯盟",
            modeltext: "不限",
            ranktext: "不限",
            openprice: 0,
            pricetext: "單價不限",
            gametotal: 1,
            replytext: "",
            deterconfirm: 0,
            orderNote: "",
            all_order: 1,
            friendsopen: 0,
            allFriends: ['kiki', 'andy', '妞妞', '小魚', '沙丁魚', '大胖', '小明'],
            fiveFriends: [],
            fivetime: 5,
            friendsopenbottom: 0,
            emptyFri: [],
            bankarr: ["國泰世華銀行", "*88888"],
            coupon: [
                {
                    "id": 1,
                    "name": "陪玩優惠券",
                    "num": 3,
                    "getdate": "7/10/2021",
                    "lastdate": "8/09/2021",
                    "status": 0,
                },
                {
                    "id": 2,
                    "name": "爆率卡",
                    "num": 1,
                    "getdate": "7/10/2021",
                    "lastdate": "8/09/2021",
                    "status": 1,
                }
            ],
            report: [
                {
                    "id": 1,
                    "ordermember": "123456789",
                    "played": "Kiki",
                    "game": "王者榮耀",
                    "getdate": "7/10/2021,23:44:15",
                    "num": 2,
                    "money": "200",
                    "lostmoney": "5%",
                    "havemoney": "1422",
                    "status": 0,
                },
            ],
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
            changephone: 0,
            changephone1: 0,
            istiefb: true,
            istieline: true,
            istiegoogle: true,
            istieapple: true,
            deletetiesocial: 0,
            lineopen: 0,
            desc: "",
            image_error_mes: "",
            blockpeople: [
                {
                    "id": 1,
                    "img": "img-profile@2x.png",
                    "name": "小明"
                },
                {
                    "id": 2,
                    "img": "img-profile@2x.png",
                    "name": "小明"
                },
                {
                    "id": 3,
                    "img": "img-profile@2x.png",
                    "name": "小明"
                },
                {
                    "id": 4,
                    "img": "img-profile@2x.png",
                    "name": "小明"
                },
                {
                    "id": 5,
                    "img": "img-profile@2x.png",
                    "name": "小明"
                },
            ],
            blockpop: 0,
            foreverdeletcacc: 0,
            openmes: 0,
            remnant: 0,
            list: [], //用于结构渲染
            allArr: [],  //存储每次上传的所有flie，
            deletearr: [],
            limitNum: 9, //限制数量
            replypop: 0,
            mesper: [
                {
                    "id": 1,
                    "img": "img-profile@2x.png",
                    "name": "Sheena Chen",
                    "tag": "player-tag@2x.png",
                    "message": "下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！下次一起玩！",
                    "time": "1小時前",
                },
            ],
            dramic_27: "",
            replys: [
                // {
                //     "id":1,
                //     "quname": "Sheena Chen",
                //     "anname": "立杰",
                //     "message": "下次一起玩",
                //     "time": "1小時前",
                // },
            ],
            small_present: 0,
            smallprenum: 1,
            bigprepop: 0,
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
            // 請選擇您的申請陪玩項目
            selectplayitemsta: 0,
            // 請輸入您的陪玩單價
            playpriceunit: 0,
            // 請選擇單位
            sunite: 0,
            // 請選擇您的申請等級
            levelup: 0,
            // 提交前請閱讀並同意
            agree_error: 0,
            togeplaypop: 0,
            introducenum: 0,
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
            getmonet_error: 0,
            getmoneypas: "",
            moneyapply: 1,
            modibankcode: 0,
            old_psd: "",
            new_psd: "",
            new_psd_again: "",
            succcodepop: 0,
            dataskill: 1,
            manyskill: [
                {
                    "id": 1,
                    "img": "Group 1@2x.png",
                    "name": "激鬥峽谷",
                    "open": 1
                },
                {
                    "id": 2,
                    "img": "Group 1@2x.png",
                    "name": "激鬥峽谷",
                    "open": 1
                },
                {
                    "id": 3,
                    "img": "Group 1@2x.png",
                    "name": "激鬥峽谷",
                    "open": 1
                },
                {
                    "id": 4,
                    "img": "Group 1@2x.png",
                    "name": "激鬥峽谷",
                    "open": 1
                },
                {
                    "id": 5,
                    "img": "Group 1@2x.png",
                    "name": "激鬥峽谷",
                    "open": 1
                }
            ],
            togeedit: 0,
            editskillprice: "100幣/局",
            singrank: "100幣/局",
            reduceprice: "滿10贈1",
            togeeditthisredu: 0,
            firstreducemoney: '10幣',
            ranklevelte: "宗師",
            playeditredute: 0,
            editskillsattus: 0,
            editskillimg: [
                {
                    "id": 1,
                    "img": "/plusone88/assets/img/Group 195@2x.png",
                },
                {
                    "id": 2,
                    "img": "/plusone88/assets/img/Group 195@2x.png",
                }
            ],
            editintrotext: "嗨 大家好久不見～",
            ordersmart: ["智能排序", "人氣優先", "新人優先", "低價優先", "高價優先"],
            ordertext: "智能排序",
            orderpop: 0,
            orderpopright: 0,
            dialoagswitch: 1,
            dialoag_block: 0,
            addbankacc: "",
            addbankaccpop: 0,
            addbankerror: 0,
            delete_addbank: 0,
            orderNUM: 1,
            ordersinprice: 130,
            paymentconord: 0,
            odjdvalu: 1,
            rankrulepop: 0,
        };
    },
    created() {

    },
    computed: {

    },
    methods: {
        isLoginfun() {
            //登入api
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
            if (this.phonenumber == '0912345678') {
                $('.error_message').text('手機號碼已被綁定');
                return false;
            }
            this.nogetcode = false;
            this.codebtndiv['codebtndiv'] = false;
            this.codebtndiv['codebtndiv_get'] = true;
            this.setTimeoutFun();
        },
        getcodechange() {
            this.nogetcode = false;
            this.codebtndiv['codebtndiv'] = false;
            this.codebtndiv['codebtndiv_get'] = true;
            this.setTimeoutFun();
        },
        closepopmobile() {
            $('.leftfunc_mobile').slideUp(400);
        },
        //立即登入檢查驗證碼api
        rightnow_login() {
            //驗證碼錯誤的顯示狀態
            this.opacity['opacity'] = true;
            this.opacity['opacity_no'] = false;
            $('.valid_code_div_input').css("color", "#D55E5C")
            if (this.phonenumber == "") {
                $('.error_message').text('請輸入手機號碼');
                $('.bind_error').text('請綁定您的手機號碼');
                return false;
            }

            //驗證碼通過的狀態
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
        /**
     *  停止倒數
     */
        cleanTimeOut() {
            let vm = this;
            window.clearInterval(vm.timeOutRefresh);
        },

        /**
         *  倒數4秒
         */
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
        confirmlogout() {
            this.logoutpopsta = 0;
            this.logoutmaskBg = 0;
            this.isLogin = false;
            // 確定登出，跳轉回首頁
            // window.location.href="";
        },
        editaddgames() {
            this.edit_status = 1;
        },
        editfinal() {
            this.edit_status = 0;
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
        order_models() {
            this.selectmodel = 1;
        },
        changegame(num, title) {
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
        thisPrices(text, num) {
            this.pricetext = text;
            this.openprice = 0;
            $('.preset').removeClass('active');
            $(`#preset_${num}`).addClass('active');
        },
        thisbanks(text, num) {
            this.whichbank = text;
            this.openbank = 0;
            $('.preset').removeClass('active');
            $(`#preset_${num}`).addClass('active');
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
        //確定約單傳送資料
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
        },
        goodfriend() {
            this.friendsopen = 1;
        },
        goodfriendclose() {
            this.friendsopen = 0;
            for (i = 0; i < this.fiveFriends.length; i++) {
                this.emptyFri[i] = this.fiveFriends[i];
            }
            this.fiveFriends = [];
        },
        tradefriends(name) {

            if (this.fiveFriends.length > 4 || this.emptyFri.length > 4) {
                alert('只能選五位');
                return false;
            }

            this.fiveFriends.push(name);
            var index = this.allFriends.indexOf(name);
            this.allFriends.splice(index, 1);

            $(document).click(function (e) {
                var _con = $('.trade_many_prices');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.friendsopen = 0
                }
            });
        },
        goodfriendreset() {
            this.friendsopen = 0;
            this.allFriends = this.allFriends.concat(this.fiveFriends);
            this.fiveFriends = [];
        },
        muti_fri(num) {
            this.friendsopenbottom = num;
        },
        tradefriendsbottom(num, name) {
            this.allFriends.push(this.emptyFri[num]);
            this.$set(this.emptyFri, num, name);
            this.friendsopenbottom = 0;
            var index = this.allFriends.indexOf(name);
            this.allFriends.splice(index, 1);

            $(document).click(function (e) {
                var _con = $('.trade_many_prices_bottom');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.friendsopenbottom = 0
                }
            });

        },
        couponmaskBgbtn() {
            this.couponpop = 0;
        },
        couponopen(id) {
            this.couponpop = 1;
            this.whichcoupon = id;
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

            image_size = 1024000;
            $(`#input_image_${num}`).change(function () {
                if (this.files[0].size > image_size) {
                    alert('圖片不可超過1MB');
                    $(`#input_image_${num}`).val('');
                    return false;
                }
                const _this = this;
                let _file = this.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(_file);
                reader.onload = function (e) {
                    let image = new Image();
                    image.src = this.result;
                    image.onload = function () {
                        let w = this.width;
                        let h = this.height;
                        if (w > 1920 || h > 1080) {
                            alert('圖片尺寸不可超過1920*1080');
                            $(`#input_image_${num}`).val('');
                            $(`#head_image_${num}`).attr('src', "/plusone88/assets/img/icon-add@2x.png");
                            return false;
                        } else {
                            $(`#head_image_${num}`).attr('src', e.target.result);
                            $(`#head_image_${num}`).css('width', $(`#imagediv_${num}`).width());
                            $(`#head_image_${num}`).css('height', $(`#imagediv_${num}`).height())
                        }
                    }
                }
            });
        },
        uploadvoice() {
            $('.voiceinput').click();
            $('.voiceinput').change(function () {
                const _this = this;
                let _file = this.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(_file);
                reader.onload = function (e) {
                    let image = new Image();
                    image.src = this.result;
                    image.onload = function () {

                    }
                }
            });
        },
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
            this.edit_name = 0;
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
            this.textarea = 0;
            this.textareatext = this.introduce;
        },
        sexpop() {
            this.sexselectnum = 1;
        },
        usersexconfirm(sex) {
            this.usersex = sex;
            this.sexselectnum = 0;
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
            this.editbitday = 0;
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
            this.changephone1 = 0;
        },
        code_confirm() {
            this.opacity['opacity'] = false;
            this.opacity['opacity_no'] = true;
            $('.valid_code_div_input').css("color", "#333")
        },
        changephonenow() {
            this.changephone = 1;
        },
        closechangephone() {
            this.changephone = 0;
        },
        next_step() {
            this.changephone1 = 1;
            this.changephone = 0;
        },
        socialdeletefun(text) {
            this.deletetiesocial = 1;
            this.manysocail = text;
        },
        cancelsocail1() {
            this.deletetiesocial = 0;
        },
        detersocail1(text) {
            this.deletetiesocial = 0;
            if (text == 'Facebook') {
                this.istiefb = false
            }
            if (text == 'Google') {
                this.istiegoogle = false
            }
            if (text == 'Line') {
                this.istieline = false
            }
            if (text == 'Apple ID') {
                this.istieapple = false
            }
        },
        socialgofun(text) {
            if (text == 'Facebook') {
            }
            if (text == 'Google') {
            }
            if (text == 'Line') {
            }
            if (text == 'Apple ID') {
            }
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
        postmessage() {
            this.openmes = 0;
            var marr = [];
            marr.id = 2;
            marr.img = "img-profile@2x.png";
            marr.name = "Sheena Chen";
            marr.tag = "player-tag@2x.png";
            marr.message = this.dramic_27;
            marr.time = "剛剛發佈";
            this.mesper.unshift(marr);
            this.dramic_27 = "";
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
                        that.clearVal();
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
                this.hashmes = "";
            }
        },
        openreply(id) {
            this.replypop = id;
        },
        replymessage(name) {
            var replyarr = [];
            replyarr.id = 2,
                replyarr.quname = name;
            replyarr.anname = "立杰";
            replyarr.message = this.replytext;
            replyarr.time = "剛剛發佈";
            this.replypop = 0;
            this.replytext = "";
            this.replys.unshift(replyarr)
        },
        sel_pre_top(id) {
            $('.border').removeClass('dramic_select')
            $(`#present_${id}`).addClass('dramic_select')
        },
        sel_pre_bot(id) {
            $('.border_bot').removeClass('dramic_select')
            $(`#present_${id}`).addClass('dramic_select')
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
            }
        },
        selsmanum(number) {
            this.smallprenum = number;
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
        presonmessagepage(num) {
            this.presonmepop = num
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

            image_size = 1024000;
            $(`.settleform_24`).change(function () {
                if (this.files[0].size > image_size) {
                    alert('圖片不可超過1MB');
                    $(`#input_image_${num}`).val('');
                    return false;
                }
                const _this = this;
                let _file = this.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(_file);
                reader.onload = function (e) {
                    let image = new Image();
                    image.src = this.result;
                    image.onload = function () {
                        $(`.settleform_21`).attr('src', e.target.result);
                    }
                }
            });
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
                    console.log(e.target.result)
                }
            }
        },
        thisGames(text, num) {
            this.settbleform[0].playitemtext = text;
            this.togeplaypop = 0;
            $('.preset').removeClass('active');
            $(`#preset_${num}`).addClass('active');
        },
        selepr(text, num) {
            this.editskillprice = text;
            this.togeedit = 0;
            $('.selepr').removeClass('active');
            $(`#sigprei_${num}`).addClass('active');
        },
        thislfddspk(text, num) {
            this.singrank = text;
            this.togeedit = 0;
            $('.thislfddspk').removeClass('active');
            $(`#thislfddspk_${num}`).addClass('active');
        },
        thisself(text, num) {
            $('.selfselect').text(text)
            this.togeedit = 0;
            $('.thisself').removeClass('active');
            $(`#self_${num}`).addClass('active');
        },
        thisredu(text, num) {
            this.reduceprice = text;
            this.togeeditthisredu = 0;
            $('.thisredu').removeClass('active');
            $(`#redu_${num}`).addClass('active');
        },
        thislfirstde(text, num) {
            this.firstreducemoney = text;
            this.togeeditthisredu = 0;
            $('.thislfirstde').removeClass('active');
            $(`#thislfirstde_${num}`).addClass('active');
        },
        thislfirsrk(text, num) {
            this.ranklevelte = text;
            this.playeditredute = 0;
            $('.thislfirsrk').removeClass('active');
            $(`#thislfirsrk_${num}`).addClass('active');
        },
        thisordersmart(text, num) {
            this.ordertext = text;
            this.orderpop = 0;
            $('.ordersmart').removeClass('active');
            $(`#ordersmart_${num}`).addClass('active');
        },
        playfuntio() {
            this.togeplaypop = 1;
            $(document).click(function (e) {
                var _con = $('.many_prices');
                if (!_con.is(e.target) && _con.has(e.target).length === 0) {
                    vm.togeplaypop = 0;
                }
            });
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
        check_num() {
            var license_num = this.settbleform[0]['singleprice'];
            license_num = license_num.replace(/[^\d]/g, '');
            if (license_num.indexOf('.') < 0 && license_num != '') {
                license_num = parseInt(license_num);
            }
            this.settbleform[0]['singleprice'] = license_num;
        },
        check_money() {
            var moneey = this.moneey;
            moneey = moneey.replace(/[^\d]/g, '');
            if (moneey.indexOf('.') < 0 && moneey != '') {
                moneey = parseInt(moneey);
            }
            this.moneey = moneey;
        },
        check_phone() {
            var license_num = this.phonenumber;
            license_num = license_num.replace(/[^\d]/g, '');
            this.phonenumber = license_num;
        },
        introInput() {
            this.introducenum = this.settbleform[0]['introtext'].length;
        },
        apply_settle() {
            var vaild = this.settbleform[0];
            if (vaild['fakename'] == "") {
                this.fakename = 1;
                return false;
            } else {
                this.fakename = 0;
            }

            if (vaild['sex'] == "") {
                this.ssex = 1;
                return false;
            } else {
                this.ssex = 0;
            }

            if (vaild['name'] == "") {
                this.realname = 1;
                return false;
            } else {
                this.realname = 0;
            }

            if (vaild['address'] == "") {
                this.address = 1;
                return false;
            } else {
                this.address = 0;
            }

            if (vaild['playitemtext'] == "陪玩項目") {
                this.selectplayitemsta = 1;
                return false;
            } else {
                this.selectplayitemsta = 0;
            }

            if (vaild['singleprice'] == 0) {
                this.playpriceunit = 1;
                return false;
            } else {
                this.playpriceunit = 0;
            }

            //檢查綁定手機號碼是否成功

            if (vaild['timeunit'] == "") {
                this.sunite = 1;
                return false;
            } else {
                this.sunite = 0;
            }

            if (vaild['level'] == "") {
                this.levelup = 1;
                return false;
            } else {
                this.levelup = 0;
            }

            if (vaild['agree'] == 0) {
                this.agree_error = 1;
                return false;
            } else {
                this.agree_error = 0;
            }
            // ajax
            window.location.href = "/plusone88/plusone/datacheck"
        },
        selecstore(id, money) {
            $('.store_4').removeClass('stroeactive');
            $('.checkstore').css('display', 'none');
            $(`#store_${id}`).addClass('stroeactive');
            $(`#check_${id}`).css('display', 'block');
            this.storemoney = money;
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
        poststore() {
            if (this.storemoney == 0) {
                this.money_error = 1;
                return false;
            } else {
                this.money_error = 0;
            }

            if (this.payment == "") {
                this.pay_error = 1;
                return false;
            } else {
                this.pay_error = 0;
            }

            if (this.usermail == "") {
                this.email_error = 1;
                return false;
            } else {
                this.email_error = 0;
            }

            const reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            let str = this.usermail;
            if (!reg.test(str)) {
                this.email_error = 1;
                return false;
            }

            alert('儲值成功')
        },
        bankpopfun() {
            this.bankpop = 1;
        },
        bankfun(id) {
            if (id == 1) {
                this.bankarr = [];
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

            if (this.bankcode == "" || this.bankcode.length != 16) {
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
        circleconfirmd(id) {
            id = id - 1;
            if (this.manyskill[id]['open'] == 0) {
                this.manyskill[id]['open'] = 1;
            } else {
                this.manyskill[id]['open'] = 0;
            }
        },
        editskill(id) {
            window.location.href = "/plusone88/plusone/editskill"
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
            //获取当前的value
            var value = this.addbankacc;
            //从左边沿到坐标之间的空格数
            var sp = (value.slice(0, caret).match(/\s/g) || []).length;
            //去掉所有空格
            var nospace = value.replace(/\s/g, '');
            //重新插入空格
            var curVal = this.addbankacc = nospace.replace(/\D+/g, "").replace(/(\d{4})/g, "$1 ").trim();
            //从左边沿到原坐标之间的空格数
            var curSp = (curVal.slice(0, caret).match(/\s/g) || []).length;
            //修正光标位置
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
        changerankme(id) {
            $('.rankcolor').removeClass('rank_active');
            $(`#rankcolor_${id}`).addClass('rank_active');
        },
        ruletagchange(id) {
            if (id == 1) {
                $('.rank_10').css('background', '#F3F3F3');
                $('.rank_10').css('color', '#483563');
                $('.rank_10').css('z-index', '3');
                $('.rank_9').css('background', '#483563');
                $('.rank_9').css('color', '#fff');
                $('.rank_9').css('z-index', '2');
            }

            if (id == 2) {
                $('.rank_10').css('background', '#483563');
                $('.rank_10').css('color', '#fff');
                $('.rank_10').css('z-index', '2');
                $('.rank_9').css('background', '#F3F3F3');
                $('.rank_9').css('color', '#483563');
                $('.rank_9').css('z-index', '3');
            }
        },
        selemodel(id) {
            $('.personall').removeClass('person_39_active');
            $(`#personmod_${id}`).addClass('person_39_active');
        },
        playaudio(id){
            var player = document.getElementById(`player_${id}`);
            if(player.paused){
                player.play(id);
            }else{
                player.pause(id);
            }
            this.autoaudio(id);
        },
        autoaudio(id){
            (function(window, undefined) {
                var player = document.getElementById(`player_${id}`),
                //  map =  ['error','src','currentSrc','networkState','readyState','preload','buffered','played','seekable','seeking','currentTime','startTime','duration','paused','defaultPlaybackRate','playbackRate','ended','autoplay','loop','controls','volume','muted'];
                 map =  ['currentTime','duration','paused','ended'];
                 $(`#playersec_${id}`).text(Math.round(player['duration'])+"”")
                 $(`#cards_autio_${id}`).addClass('playaudio');
                window.setInterval(function(){
                    // var str = '';
                    for(var i=0, j=map.length; i<j; i++) {
                        
                        // str += map[i] + ' : ' + player[map[i]] + '<br>\n';
                    }
                    // document.getElementById('panel').innerHTML = str;

                    if(player['ended'] || player['paused']){
                        $(`#cards_autio_${id}`).removeClass('playaudio');
                    }
                }, 1000);

            })(window);
        },
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
