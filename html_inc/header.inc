
        <header>
        <div class="logo_header_wrap">
            <div class="logo_header">
                <h1><a href="/web_project/index.php" class="header_logo">SEANET</a></h1>
                <div class="header_search_wrap">
                    <svg class="glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                    </svg><input type="text" placeholder="찾고싶은 회사를 검색해보세요" class="header_search">
                </div>
                <div class="popular_wrap">
                    <h2 class="popular">실시간 인기</h2>
                    <div class="list_wrap">
                        <ol class="popular_list">
                        <?php 
                        $sqlp = "select c_name from ad_company join ad_info on ad_company.idx = ad_info.idx order by ad_info.cnt desc limit 10;";
                        $presult = mysqli_query($dbcon,$sqlp);
                        $c = 1;
                        ?>
                        <?php while($parray = mysqli_fetch_array($presult)){?>
                            <li class="list1"><a href="#"><?php echo $c;?>. <span><?php echo $parray['c_name'];?></span></a></li>
                            <?php $c = $c + 1;};?>
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
                    <li class="gnb1"><a href="/web_project/ad/basic.php">구인광고
                            <ul>
                                <li><a href="/web_project/ad/basic.php">구인광고 검색</a></li>
                                <li><a href="/web_project/ad/write.php">구인광고 등록</a></li>
                                <li><a href="/web_project/ad/list.php">구인광고 상세</a></li>
                                <li><a href="/web_project/ad/list.php">VIP 광고 등록</a></li>
                                <li><a href="/web_project/ad/list.php">VIP 광고 신청</a></li>
                            </ul>
                        </a></li>
                    <li class="gnb2"><a href="#">Seaman's Voice
                            <ul>
                                <li><a href="#">Seaman's Voice</a></li>
                                <li><a href="#">Voice 작성</a></li>
                                <li><a href="#">실시간 Voice</a></li>
                            </ul>
                        </a></li>
                    <li class="gnb3"><a href="/web_project/provision/list.php">선식, 선용품
                            <ul>
                                <li><a href="/web_project/provision/list.php">업체조회</a></li>
                                <li><a href="#" onclick="provCheck()">배송조회</a></li>
                                <li><a href="/web_project/provision/reg.php">업체등록</a></li>
                                <li><a href="/web_project/provision/guide.php">이용안내</a></li>
                            </ul>
                        </a></li>
                    <li class="gnb4"><a href="/web_project/qna/qna.php">문의</a>
                    </li>
                </ul>
                <div class="gnb_bg"></div>
            </nav>
        </div>
        <div class="top_menu">
            <div class="top_menu_wrap">
                <h2 class="hide">top menu</h2>
                <?php if(!$s_idx){ ?>
                <button  class='login' onclick="location.href = '/web_project/login/login.php'">로그인</button>
                <button class='signup' id='signup' onclick="location.href = '/web_project/members/term.php'">회원가입</button>
                <?php }else if($s_id == "admin"){ ?>
                <span class='print_name'><?php echo "$s_name"?>님, 안녕하세요</span>
                <button class='logout' id='logout' onclick="location.href = '/web_project/login/logout.php'">로그아웃</button>
                <button class='mypage' id='mypage' onclick="location.href = '/web_project/members/member_info.php'">마이페이지</button>
                <button class='adminpage' id='adminpage' onclick="location.href = '/web_project/admin/index.php'">관리자 페이지</button>
                <?php }else{ ?>
                <span class='print_name'><?php echo "$s_name"?>님, 안녕하세요</span>
                <button class='logout' id='logout' onclick="location.href = '/web_project/login/logout.php'">로그아웃</button>
                <button class='mypage' id='mypage' onclick="location.href = '/web_project/members/member_info.php'">마이페이지</button>
                <?php }; ?>
                <button class="customercenter" id="customercenter" onclick="location.href = '/web_project/qna/qna.php'">고객센터</button>
            </div>
        </div>
    </header>
    <script>function provCheck(){
window.open("/web_project/provision/check.php","배송조회","width=1000,height=400");
            };</script>
