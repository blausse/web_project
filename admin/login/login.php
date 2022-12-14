<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEANET</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/ir.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link href="../css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="../css/voice.css" type="text/css">
    <link rel="stylesheet" href="../css/provision.css" type="text/css">
    <link rel="stylesheet" href="../css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
    <script src="../script/top_menu.js" type="text/javascript"></script>
    <script src="../script/popular_rank.js" type="text/javascript"></script>
    <script src="../script/login.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <div class="wrap">
        <header>
            <div class="logo_header_wrap">
                <div class="logo_header">
                    <h1><a href="/web_project/index.php" class="header_logo">SEANET</a></h1>
                    <div class="header_search_wrap">
                        <svg class="glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                        </svg><input type="text" placeholder="???????????? ????????? ??????????????????" class="header_search">
                    </div>
                    <div class="popular_wrap">
                        <h2 class="popular">????????? ??????</h2>
                        <div class="list_wrap">
                            <ol class="popular_list">
                                <li class="list1"><a href="#">1. <span>SK shipping</span></a></li>
                                <li><a href="#">2. <span>HMM</span></a></li>
                                <li><a href="#">3. <span>??????????????????</span></a></li>
                                <li><a href="#">4. <span>????????????</span></a></li>
                                <li><a href="#">5. <span>?????????????????????(???)</span></a></li>
                                <li><a href="#">6. <span>????????????</span></a></li>
                                <li><a href="#">7. <span>?????????</span></a></li>
                                <li><a href="#">8. <span>???????????????</span></a></li>
                                <li><a href="#">9. <span>??????LNG</span></a></li>
                                <li class="list10"><a href="#">10. <span>SM Group ????????????</span></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gnb_wrap">
                <nav id="gnb">
                    <h2 class="hide">GNB</h2>
                    <a href="#" class="gnb_logobox">
                        <svg class="gnb_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </a>
                    <ul class="gnb">
                        <li class="gnb1"><a href="ad_basic.html">????????????
                                <ul>
                                    <li><a href="ad_basic.html">???????????? ??????</a></li>
                                    <li><a href="#">???????????? ??????</a></li>
                                    <li><a href="ad_detail.html">???????????? ??????</a></li>
                                </ul>
                            </a></li>
                        <li class="gnb2"><a href="#">Seaman's Voice
                                <ul>
                                    <li><a href="#">Seaman's Voice</a></li>
                                    <li><a href="#">Voice ??????</a></li>
                                    <li><a href="#">????????? Voice</a></li>
                                </ul>
                            </a></li>
                        <li class="gnb3"><a href="#">??????, ?????????
                                <ul>
                                    <li><a href="#">????????????</a></li>
                                    <li><a href="#">????????????</a></li>
                                    <li><a href="#">????????????</a></li>
                                    <li><a href="#">????????????</a></li>
                                </ul>
                            </a></li>
                        <li class="gnb4"><a href="#">??????</a>
                        </li>
                    </ul>
                    <div class="gnb_bg"></div>
                </nav>
            </div>
            <div class="top_menu">
                <div class="top_menu_wrap">
                    <h2 class="hide">top menu</h2>
                    <?php if(!$idx){ ?>
                    <button  class='login'>?????????</button>
                    <button class='signup' id='signup'>????????????</button>
                    <?php }else{ ?>
                <span class='print_name'><?php echo "$name"?>???, ???????????????</span>
                    <button class='logout' id='logout' onclick="location.href = '/web_project/login/logout.php'">????????????</button>
                    <button class='mypage' id='mypage'>???????????????</button>
                    <?php }; ?>
                    <button href="#" class="signup" id="customer_center">????????????</button>
                </div>
            </div>
        </header>
        <main>
            <form action="login_ok.php" name="login.form" method="post" onsubmit="return login_form_check()">
                <fieldset class="login_box" id="login_box">
                    <legend class="log_in" id="login_txt">SEANET</legend>
                    <p><label for="u_id" class="u_id">ID<br><input type="text" name="u_id"
                                id="u_id_box" autofocus></label><br><span class="txt_id" id="err_id"></span> </p>
                    <p>
                        <label class="pwd">P/W<br><input type="password" name="pwd" id="u_pwd_box"></label><br>
                        <span class="txt_pwd" id="err_pwd"></span>
                    </p>
                    <div class="search">
                        <p><a href="#" class="login_id">????????? ??????</a></p>
                        <p><a href="#" class="login_pwd">???????????? ??????</a></p>
                        <p><a href="/web_project/members/term.html" class="login_signup">????????????</a></p>
                    </div>
                    <button type="button" class="prev_btn" onclick="history.back()">????????????</button>
                    <button type="submit" class="login_btn">?????????</button>
                </fieldset>
            </form>
        </main>
        <footer>
            <div class="footer_wrap">
                <h2 class="footer_logo">seanet</h2>
                <h3 class="hide">????????????</h3>
                <ul class="footer_menu">
                    <li class="fnb1"><a href="#">????????????</a></li>
                    <li class="fnb2"><a href="#">??????????????? ???</a></li>
                    <li class="fnb3"><a href="#">????????????</a></li>
                    <li class="fnb4"><a href="#">????????????????????????</a></li>
                    <li class="fnb5"><a href="#">????????????</a></li>
                </ul>
                <div class="footer_info">
                    <p>?????????:????????????</p>
                    <address>??????: ????????? ????????? ????????? 81, 1015???</address>
                    <p>????????????????????? : 875-88-01605 | ???????????????????????? : ????????? ??? 2022-8??? | ????????????????????? : ??? 2020-????????????-2492???</p>
                    <p>?????? : info@deepcircle.net | ?????? : 02-538-5986 | ?????? : 02-318-0261</p>
                    <p>COPYRIGHT DEEPCIRCLE CO.,LTD ALL RIGHTS RESERVED. SINCE 1998.</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>