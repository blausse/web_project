<?php

include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx order by ad_company.idx desc;";
$result = mysqli_query($dbcon,$sql);
$list_num = 3;
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEANET</title>
    <link rel="stylesheet" href="/web_project/css/reset.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ir.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/footer.css" type="text/css">
    <link href="/web_project/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/web_project/css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/voice.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/gnb.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ad_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/main_rank.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/web_project/script/jquery.js"></script>
    <script src="/web_project/script/jquery.nice-select.js"></script>
    <script src="/web_project/script/script.js" type="text/javascript"></script>
    <script src="/web_project/script/gnb.js" type="text/javascript"></script>
    <script src="/web_project/script/popular_rank.js" type="text/javascript"></script>
    <script>
        function searchCheck(){

        };
    </script>
</head>

<body>
    <div class="wrap">
            <?php include("../html_inc/header.inc"); ?>
        <main>
            <form class="search_rank" action="search.php" name="ad_search.form" method="post" onsubmit="return searchCheck()">
                <fieldset class="ad_search">
                    <legend class="hide">?????? ?????????</legend>
                    <div class="search_wrap">
                        <div class="search_title">
                            <ul>
                                <li class="work">??????</li>
                                <li class="location">??????</li>
                                <li class="salary">??????</li>
                                <li class="school">??????</li>
                                <li class="type">????????????</li>
                                <li class="any">????????????</li>
                            </ul>
                        </div>
                        <div class="search_tabs">
                            <ul class="ad_work">
                                <li><label for="ai_work1"><input type="checkbox" name="ai_work[]" id="ai_work1" value="?????????">?????????</label></li>
                                <li><label for="ai_work2"><input type="checkbox" name="ai_work[]" id="ai_work2" value="??????, ??????">??????, ??????</label></li>
                                <li><label for="ai_work3"><input type="checkbox" name="ai_work[]" id="ai_work3" value="??????, ??????">??????, ??????</label></li>
                                <li><label for="ai_work4"><input type="checkbox" name="ai_work[]" id="ai_work4" value="??????, ??????">??????, ??????</label></li>
                                <li><label for="ai_work5"><input type="checkbox" name="ai_work[]" id="ai_work5" value="????????????">????????????</label></li>
                                <li><label for="ai_work6"><input type="checkbox" name="ai_work[]" id="ai_work6" value="??????????????????">??????????????????</label></li>
                                <li><label for="ai_work7"><input type="checkbox" name="ai_work[]" id="ai_work7" value="??????, ??????">??????, ??????</label></li>
                                <li><label for="ai_work8"><input type="checkbox" name="ai_work[]" id="ai_work8" value="????????????">????????????</label></li>
                                <li><label for="ai_work9"><input type="checkbox" name="ai_work[]" id="ai_work9" value="??????, ??????">??????, ??????</label></li>
                                <li><label for="ai_work10"><input type="checkbox" name="ai_work[]" id="ai_work10"  value="??????">??????</label></li>
                                <li><label for="ai_work11"><input type="checkbox" name="ai_work[]" id="ai_work11"  value="??????,??????">??????, ??????</label></li>
                                <li><label for="ai_work12"><input type="checkbox" name="ai_work[]" id="ai_work12"  value="??????????????????">??????????????????</label></li>
                                <li><label for="ai_work13"><input type="checkbox" name="ai_work[]" id="ai_work13"  value="IT??????, ?????????">IT??????, ?????????</label></li>
                                <li><label for="ai_work14"><input type="checkbox" name="ai_work[]" id="ai_work14" value="??????">??????</label></li>
                            </ul>
                            <ul class="ad_location">
                                <li><label for="ai_location1"><input type="checkbox" name="ai_location[]" id="ai_location1" value="??????">??????</label></li>
                                <li><label for="ai_location2"><input type="checkbox" name="ai_location[]" id="ai_location2" value="??????">??????</label></li>
                                <li><label for="ai_location3"><input type="checkbox" name="ai_location[]" id="ai_location3" value="??????">??????</label></li>
                                <li><label for="ai_location4"><input type="checkbox" name="ai_location[]" id="ai_location4" value="??????">??????</label></li>
                                <li><label for="ai_location5"><input type="checkbox" name="ai_location[]" id="ai_location5" value="??????">??????</label></li>
                                <li><label for="ai_location6"><input type="checkbox" name="ai_location[]" id="ai_location6" value="??????">??????</label></li>
                                <li><label for="ai_location7"><input type="checkbox" name="ai_location[]" id="ai_location7" value="??????">??????</label></li>
                                <li><label for="ai_location8"><input type="checkbox" name="ai_location[]" id="ai_location8" value="??????">??????</label></li>
                                <li><label for="ai_location9"><input type="checkbox" name="ai_location[]" id="ai_location9" value="??????">??????</label></li>
                                <li><label for="ai_location10"><input type="checkbox" name="ai_location[]" id="ai_location10" value="??????">??????</label></li>
                                <li><label for="ai_location11"><input type="checkbox" name="ai_location[]" id="ai_location11" value="??????">??????</label></li>
                                <li><label for="ai_location12"><input type="checkbox" name="ai_location[]" id="ai_location12" value="??????">??????</label></li>
                                <li><label for="ai_location13"><input type="checkbox" name="ai_location[]" id="ai_location13" value="??????">??????</label></li>
                                <li><label for="ai_location14"><input type="checkbox" name="ai_location[]" id="ai_location14" value="??????">??????</label></li>
                                <li><label for="ai_location15"><input type="checkbox" name="ai_location[]" id="ai_location15" value="??????">??????</label></li>
                                <li><label for="ai_location16"><input type="checkbox" name="ai_location[]" id="ai_location16" value="????????????">????????????</label></li>
                                <li><label for="ai_location17"><input type="checkbox" name="ai_location[]" id="ai_location17" value="????????????">????????????</label></li>
                            </ul>
                            <ul class="ad_salary">
                                <li><label for="ai_salary1"><input type="checkbox" name="ai_salary[]" id="ai_salary1" value="220?????? ??????">220 ?????? ??????</label></li>
                                <li><label for="ai_salary2"><input type="checkbox" name="ai_salary[]" id="ai_salary2" value="220-250??????">220 - 250??????</label></li>
                                <li><label for="ai_salary3"><input type="checkbox" name="ai_salary[]" id="ai_salary3" value="250-300??????">250 - 300??????</label></li>
                                <li><label for="ai_salary4"><input type="checkbox" name="ai_salary[]" id="ai_salary4" value="300-350??????">300 - 350??????</label></li>
                                <li><label for="ai_salary5"><input type="checkbox" name="ai_salary[]" id="ai_salary5" value="350-400??????">350 - 400??????</label></li>
                                <li><label for="ai_salary6"><input type="checkbox" name="ai_salary[]" id="ai_salary6" value="400-500??????">400 - 500??????</label></li>
                                <li><label for="ai_salary7"><input type="checkbox" name="ai_salary[]" id="ai_salary7" value="500-600??????">500 - 600??????</label></li>
                                <li><label for="ai_salary8"><input type="checkbox" name="ai_salary[]" id="ai_salary8" value="600-700??????">600 - 700??????</label></li>
                                <li><label for="ai_salary9"><input type="checkbox" name="ai_salary[]" id="ai_salary9" value="700-800??????">700 - 800??????</label></li>
                                <li><label for="ai_salary10"><input type="checkbox" name="ai_salary[]" id="ai_salary10" value="800-900??????">800 - 900??????</label></li>
                                <li><label for="ai_salary11"><input type="checkbox" name="ai_salary[]" id="ai_salary11" value="900?????? ??????">900 ?????? ??????</label></li>
                                <li><label for="ai_salary12"><input type="checkbox" name="ai_salary[]" id="ai_salary12" value="??????">??????</label></li>
                                <li><label for="ai_salary13"><input type="checkbox" name="ai_salary[]" id="ai_salary13" value="??????">??????</label></li>
                            </ul>
                            <ul class="ad_school">
                                <li><label for="ai_school1"><input type="checkbox" name="ai_school[]" id="ai_school1" value="???????????? ??????">???????????? ??????</label></li>
                                <li><label for="ai_school2"><input type="checkbox" name="ai_school[]" id="ai_school2" value="????????? ??????">????????? ??????</label></li>
                                <li><label for="ai_school3"><input type="checkbox" name="ai_school[]" id="ai_school3" value="???????????? ??????">???????????? ??????</label></li>
                                <li><label for="ai_school4"><input type="checkbox" name="ai_school[]" id="ai_school4" value="?????? ??????">?????? ??????</label></li>
                                <li><label for="ai_school5"><input type="checkbox" name="ai_school[]" id="ai_school5" value="?????? ??????">?????? ??????</label></li>
                                <li><label for="ai_school6"><input type="checkbox" name="ai_school[]" id="ai_school6" value="??????, ??????">??????, ??????</label></li>
                            </ul>
                            <ul class="work_type">
                                <li><label for="ai_worktype1"><input type="checkbox" name="ai_worktype[]" id="ai_worktype1" value="?????????">?????????</label></li>
                                <li><label for="ai_worktype2"><input type="checkbox" name="ai_worktype[]" id="ai_worktype2" value="?????????">?????????</label></li>
                                <li><label for="ai_worktype3"><input type="checkbox" name="ai_worktype[]" id="ai_worktype3" value="?????????">?????????</label></li>
                                <li><label for="ai_worktype4"><input type="checkbox" name="ai_worktype[]" id="ai_worktype4" value="??????">??????</label></li>
                                <li><label for="ai_worktype5"><input type="checkbox" name="ai_worktype[]" id="ai_worktype5" value="????????????">????????????</label></li>
                                <li><label for="ai_worktype6"><input type="checkbox" name="ai_worktype[]" id="ai_worktype6" value="???????????????">???????????????</label></li>
                                <li><label for="ai_worktype7"><input type="checkbox" name="ai_worktype[]" id="ai_worktype7" value="??????">??????</label></li>
                                <li><label for="ai_worktype8"><input type="checkbox" name="ai_worktype[]" id="ai_worktype8" value="?????????">?????????</label></li>
                                <li><label for="ai_worktype9"><input type="checkbox" name="ai_worktype[]" id="ai_worktype9" value="????????????">????????????</label></li>
                                <li><label for="ai_worktype10"><input type="checkbox" name="ai_worktype[]" id="ai_worktype10" value="????????????">????????????</label></li>
                                <li><label for="ai_worktype11"><input type="checkbox" name="ai_worktype[]" id="ai_worktype11" value="??????">??????</label></li>
                                <li><label for="ai_worktype12"><input type="checkbox" name="ai_worktype[]" id="ai_worktype12" value="?????????">?????????</label></li>
                                <li><label for="ai_worktype13"><input type="checkbox" name="ai_worktype[]" id="ai_worktype13" value="??????">??????</label></li>
                            </ul>
                            <ul class="anything">
                                <li><label for="ai_ctype1"><input type="checkbox" name="ai_ctype[]" id="ai_ctype1" value="?????????">?????????</label></li>
                                <li><label for="ai_ctype2"><input type="checkbox" name="ai_ctype[]" id="ai_ctype2" value="?????????">?????????</label></li>
                                <li><label for="ai_ctype3"><input type="checkbox" name="ai_ctype[]" id="ai_ctype3" value="?????????">?????????</label></li>
                                <li><label for="ai_ctype4"><input type="checkbox" name="ai_ctype[]" id="ai_ctype4" value="????????????">????????????</label></li>
                                <li><label for="ai_ctype5"><input type="checkbox" name="ai_ctype[]" id="ai_ctype5" value="???????????? ?????? ??????">???????????? ?????? ??????</label></li>
                                <li><label for="ai_ctype6"><input type="checkbox" name="ai_ctype[]" id="ai_ctype6" value="????????????">????????????</label></li>
                                <li><label for="ai_ctype7"><input type="checkbox" name="ai_ctype[]" id="ai_ctype7" value="????????????">????????????</label></li>
                                <li><label for="ai_ctype8"><input type="checkbox" name="ai_ctype[]" id="ai_ctype8" value="??????">??????</label></li>
                            </ul>
                        </div>
                        <div class="checked_box">
                            <span class="checked_search"></span>
                        </div>
                        <button type="submit" class="search_btn"><svg class="search_glass"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                            </svg></button>
                </fieldset>
            </form>
            <?php include("../html_inc/vip_ad.inc"); ?>
            <section class="basic_ad">
                <h2>?????? ????????????</h2>
                <div class="ad">
                    <?php while($array = mysqli_fetch_array($result)){?>
                        <?php
                        $nDate = date("Y-m-d");
                        $valDate = $array['ai_endDate'];
                        $leftDate = intval((strtotime($nDate)-strtotime($valDate)) / 86400) + 1; 
                        $i = $i + 1;
                        $page = ceil($i / $list_num);
                    ?>
                    <a href="/web_project/ad/list.php?page=<?php echo $page;?>&n_idx=<?php echo $array['idx'];?>#bl<?php echo $array['idx'];?>">
                        <div class="ad<?php echo $array['idx'];?>" id="ad_box">
                            <img class="ad_img" src="../data/<?php echo $array['c_logo_name'];?>" alt="">
                            <div class="ad<?php echo $array['idx'];?>_bg" id="ad_text">
                                <span><?php echo $array['c_name'];?></span>
                                <span class="dd"><?php echo $array['ai_title'];?></span>
                                <span class="day">D-<?php echo $leftDate;?></span>
                            </div>
                        </div>
                    </a>
                    <input type="hidden" value="<?php echo $i;?>">
                    <?php };?>
                </div>
                <p class="ad_more">?????????></p>
            </section>
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>