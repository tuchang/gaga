<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Config Manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--    <link rel=stylesheet href="../../public/css/manage_base.css"/>-->

    <style>

        html, body {
            padding: 0px;
            margin: 0px;
            font-family: PingFangSC-Regular, "MicrosoftYaHei";
            /*overflow: hidden;*/
            width: 100%;
            height: 100%;
            background: rgba(245, 245, 245, 1);
            font-size: 10.66px;

        }

        /* mask and new window */
        .wrapper-mask {
            background: rgba(0, 0, 0, 0.8);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: fixed;
            z-index: 9999;
            overflow: hidden;
            visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            width: 100%;
            height: 100%;
            /*display: flex;*/
            align-items: stretch;
        }

        .layout-all-row {
            width: 100%;
            /*background: white;*/
            background: rgba(245, 245, 245, 1);;
            /*display: flex;*/
            /*align-items: stretch;*/
            overflow: hidden;
            flex-shrink: 0;
        }

        .item-row {
            background: rgba(255, 255, 255, 1);
            display: flex;
            flex-direction: row;
            text-align: center;
            height: 44px;
        }

        /*.item-row:hover{*/
        /*background: rgba(255, 255, 255, 0.2);*/
        /*}*/

        .item-row:active {
            background: rgba(255, 255, 255, 0.2);
        }

        .item-bottom {
            background: rgba(245, 245, 245, 1);
            display: flex;
            flex-direction: row;
            text-align: center;
            height: 25px;
        }

        .item-header {
            width: 50px;
            height: 50px;
        }

        .site-manage-image {
            width: 40px;
            height: 40px;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 16px;
            /*border-radius: 50%;*/
        }

        .site-logo-image {
            width: 30px;
            height: 30px;
            /*margin-top: 5px;*/
            margin-bottom: 7px;
            /*border-radius: 50%;*/
        }

        .item-body {
            width: 100%;
            height: 44px;
            /*margin-left: 1rem;*/
            margin-top: 1rem;
            flex-direction: row;
        }

        .list-item-center {
            width: 100%;
            /*height: 11rem;*/
            /*background: rgba(255, 255, 255, 1);*/
            padding-top: 20px;
            /*padding-left: 1rem;*/

        }

        .item-body-display {
            display: flex;
            justify-content: space-between;
            /*margin-right: 7rem;*/
            /*margin-bottom: 3rem;*/
            height: 100%;
            /*line-height: 3rem;*/
        }

        .item-body-tail {
            text-align: center;
            margin-right: 10px;
            font-size: 16px;
            height: 3rem;
            /*color: rgba(76, 59, 177, 1);*/
            line-height: 3rem;
        }

        .item-body-desc {
            height: 3rem;
            font-size: 16px;
            /*color: rgba(76, 59, 177, 1);*/
            margin-left: 10px;
            line-height: 3rem;
        }

        .more-img {
            width: 8px;
            height: 13px;
            /*border-radius: 50%;*/
        }

        .line {
            width: 28.14rem;
            height: 0.01rem;
            border: 0.09rem solid rgba(153, 153, 153, 1);
            overflow: hidden;
            text-align: center;
            margin: 0 auto;
            margin-top: 0.1rem;
        }

        .division-line {
            height: 1px;
            background: rgba(243, 243, 243, 1);
            margin-left: 40px;
            overflow: hidden;
        }

        #popup-group {
            width: 50rem;
            height: 30rem;
            background: rgba(255, 255, 255, 1);
            border-radius: 0.94rem;
        }

        .header_tip_font {
            justify-content: center;
            text-align: center;
            margin-top: 5rem;
            height: 3.75rem;
            font-size: 2.63rem;
            color: rgba(76, 59, 177, 1);
            line-height: 3.75rem;
        }

        .popup-group-input {
            background-color: #ffffff;
            border-style: none;
            outline: none;
            height: 1.88rem;
            font-size: 1.88rem;
            font-family: PingFangSC-Regular;
            /*color: rgba(205, 205, 205, 1);*/
            line-height: 1.88rem;
            /*margin-left: 10rem;*/
            margin-top: 5rem;
            padding: 0.5rem;
            width: 55%;
            overflow: hidden;
        }

        .data_tip {
            height: 1.69rem;
            font-size: 1.31rem;
            font-family: PingFangSC-Regular;
            color: rgba(153, 153, 153, 1);
            line-height: 1.69rem;
            margin-left: 23rem;
            width: 29rem;
            word-break: break-all;
            padding: 0.5rem;
        }

        .create_button,
        .create_button:hover,
        .create_button:focus,
        .create_button:active {
            margin-top: 4rem;
            width: 28.14rem;
            height: 4.69rem;
            background: rgba(76, 59, 177, 1);
            border-radius: 0.94rem;
            font-size: 1.67rem;
            color: rgba(255, 255, 255, 1);
            line-height: 1.67rem;
        }

        .site-pubk-pem {
            height: 200px;
            background: rgba(245, 245, 245, 1);
            margin: 5px 15px 5px 15px;
        }

        .site-pubk-textarea {
            width: 100%;
            height: 100%;
            font-size: 12px;
            background: rgba(245, 245, 245, 1);
            border-width: 0px;
        }
    </style>

</head>

<body>

<div class="wrapper-mask" id="wrapper-mask" style="visibility: hidden;"></div>

<div class="wrapper" id="wrapper">

    <!--  site basic config  -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <!--      part1: site name      -->
            <div class="item-row" id="site-name">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点公钥（长按复制）</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site RSA Public Key</div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>


            <div class="site-pubk-pem">
                <textarea class="site-pubk-textarea" disabled readonly><?php echo trim($pubkPem) ?></textarea>
            </div>

            <!--      part1: site logo      -->
            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点公钥（长按复制）</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site RSA Public Key</div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-bottom">

            </div>
        </div>

    </div>

</div>


<div class="popup-template" style="visibility:hidden;">

    <div class="config-hidden" id="popup-group">

        <div class="flex-container">
            <div class="header_tip_font popup-group-title" data-local-value="createGroupTip">创建群组</div>
        </div>

        <div class="" style="text-align: center">
            <input type="text" class="popup-group-input"
                   data-local-placeholder="enterGroupNamePlaceholder" placeholder="please input">
        </div>

        <div class="line"></div>

        <div class="" style="text-align:center; ">
            <button type="button" class="create_button" data-local-value="createTip">Save</button>
        </div>

    </div>

</div>


<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>

<script type="text/javascript">

    function isAndroid() {

        var userAgent = window.navigator.userAgent.toLowerCase();
        if (userAgent.indexOf("android") != -1) {
            return true;
        }

        return false;
    }

    function isMobile() {
        if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
            return true;
        }
        return false;
    }

    function getLanguage() {
        var nl = navigator.language;
        if ("zh-cn" == nl || "zh-CN" == nl) {
            return 1;
        }
        return 0;
    }


    function zalyjsAjaxPostJSON(url, body, callback) {
        zalyjsAjaxPost(url, jsonToQueryString(body), function (data) {
            var json = JSON.parse(data)
            callback(json)
        })
    }


    function zalyjsNavOpenPage(url) {
        var messageBody = {}
        messageBody["url"] = url
        messageBody = JSON.stringify(messageBody)

        if (isAndroid()) {
            window.Android.zalyjsNavOpenPage(messageBody)
        } else {
            window.webkit.messageHandlers.zalyjsNavOpenPage.postMessage(messageBody)
        }
    }

    function zalyjsCommonAjaxGet(url, callBack) {
        $.ajax({
            url: url,
            method: "GET",
            success: function (result) {

                callBack(url, result);

            },
            error: function (err) {
                alert("error");
            }
        });

    }


    function zalyjsCommonAjaxPost(url, value, callBack) {
        $.ajax({
            url: url,
            method: "POST",
            data: value,
            success: function (result) {
                callBack(url, value, result);
            },
            error: function (err) {
                alert("error");
            }
        });

    }

    function zalyjsCommonAjaxPostJson(url, jsonBody, callBack) {
        $.ajax({
            url: url,
            method: "POST",
            data: jsonBody,
            success: function (result) {

                callBack(url, jsonBody, result);

            },
            error: function (err) {
                alert("error");
            }
        });

    }

    /**
     * _blank    在新窗口中打开被链接文档。
     * _self    默认。在相同的框架中打开被链接文档。
     * _parent    在父框架集中打开被链接文档。
     * _top    在整个窗口中打开被链接文档。
     * framename    在指定的框架中打开被链接文档。
     *
     * @param url
     * @param target
     */
    function zalyjsCommonOpenPage(url, target = "_blank") {
        window.open(url, target);
    }

</script>

<script type="text/javascript">


</script>


</body>
</html>



