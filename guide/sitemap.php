<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script type="text/javascript">
    var dep1 = 3;
    //var dep2 = 0;
</script>
        <div id="sub_container" class="clfl">
            <div class="lnb_wrap">
                <div id="lnb">
                    <p><img src="/front/image/common/lnb/top_guide.gif"/></p>
                    <ul>
                        <li class="m1">
                            <p class="dep1" onclick="javascript: location.href='terms.php'">이용약관</p>
                        </li>
                        <li class="m2">
                            <p class="dep1" onclick="javascript: location.href='policy.php'">개인정보취급방침</p>
                        </li>
                        <li class="m3">
                            <p class="dep1" onclick="javascript: location.href='sitemap.php'">사이트맵</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="subcontents_wrap">
                <ul class="title_wrap clfl">
                    <li class="title fl"><img src="/front/image/guide/sitemap/title.gif"/></li>
                    <li class="location fr">
                        <ul>
                            <li>HOME</li>
                            <li>></li>
                            <li>이용안내</li>
                            <li>></li>
                            <li>사이트맵</li>
                        </ul>
                    </li>
                </ul>
                <img src="/front/image/guide/sitemap/txt.gif"/>
                <table cellpadding="0" cellspacing="0" class="tb_sitemap">
                    <colgroup>
                        <col width="20%"/>
                        <col width="16%"/>
                        <col width="*"/>
                    <colgroup/>
                    <tr>
                        <td class="dep1" rowspan="4"><a href="/aus/why.php">호주</a></td>
                        <td class="dep2"><a href="/aus/why.php">호주 유학 개요</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/aus/why.php">왜 호주인가</a></li>
                                <li>l</li>
                                <li><a href="/aus/institution.php">호주 교육제도</a></li>
                                <li>l</li>
                                <li><a href="/aus/life.php">주요 도시 안내</a></li>
                                <li>l</li>
                                <li><a href="/aus/visa.php">비자 신청</a></li>
                                <li>l</li>
                                <li><a href="/aus/scholarship.php">장학금 정보</a></li>
                                <li>l</li>
                                <li><a href="/aus/procedure.php">출국 준비 안내</a></li>
                                <li>l</li>
                                <li><a href="/aus/review.php">명문대 합격 후기</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/aus/university.php">학위과정</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/aus/university.php">호주 대학 소개</a></li>
                                <li>l</li>
                                <li><a href="/aus/prep.php">대학 예비 과정</a></li>
                                <li>l</li>
                                <li><a href="/aus/bachelor.php">학사 과정</a></li>
                                <li>l</li>
                                <li><a href="/aus/doctor.php">석박사 과정</a></li>
                                <li>l</li>
                                <li><a href="/aus/college.php">전문대 과정</a></li>
                                <li>l</li>
                                <li><a href="/aus/ranking_univ.php">호주 대학 랭킹</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/aus/affiliated.php">어학연수</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/aus/affiliated.php">대학부설 영어연수</a></li>
                                <li>l</li>
                                <li><a href="/aus/academy.php">사설기관 영어연수</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/aus/public.php">조기유학</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/aus/public.php">공립학교</a></li>
                                <li>l</li>
                                <li><a href="/aus/private.php">명문사립학교</a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="3"><a href="/uk/why.php">영국</a></td>
                        <td class="dep2"><a href="/uk/why.php">영국 유학 개요</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/uk/why.php">왜 영국인가</a></li>
                                <li>l</li>
                                <li><a href="/uk/institution.php">영국 교육제도</a></li>
                                <li>l</li>
                                <li><a href="/uk/city.php">주요 도시 안내</a></li>
                                <li>l</li>
                                <li><a href="/uk/visa.php">영국 비자 신청</a></li>
                                <li>l</li>
                                <li><a href="/uk/scholarship.php">장학금 정보</a></li>
                                <li>l</li>
                                <li><a href="/uk/procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/uk/university.php">학위과정</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/uk/university.php">영국 대학 소개</a></li>
                                <li>l</li>
                                <li><a href="/uk/prep.php">대학 예비 과정</a></li>
                                <li>l</li>
                                <li><a href="/uk/bachelor.php">학사 과정</a></li>
                                <li>l</li>
                                <li><a href="/uk/master.php">석박사 과정</a></li>
                                <li>l</li>
                                <li><a href="/uk/ranking.php">영국 대학 랭킹</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/uk/affiliated.php">어학연수</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/uk/affiliated.php">대학부설 영어연수</a></li>
                                <li>l</li>
                                <li><a href="/uk/academy.php">사설기관 영어연수</a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="3"><a href="/us/why.php">미국</a></td>
                        <td class="dep2"><a href="/us/why.php">미국 유학 개요</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/us/why.php">왜 미국인가</a></li>
                                <li>l</li>
                                <li><a href="/us/institution.php">미국 교육제도</a></li>
                                <li>l</li>
                                <li><a href="/us/city.php">주요 도시 안내</a></li>
                                <li>l</li>
                                <li><a href="/us/visa.php">미국 비자 신청</a></li>
                                <li>l</li>
                                <li><a href="/us/procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/us/university.php">학위과정</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/us/university.php">미국 대학 소개</a></li>
                                <li>l</li>
                                <li><a href="/us/prep.php">대학 예비 과정</a></li>
                                <li>l</li>
                                <li><a href="/us/bachelor.php">학사/준학사 과정</a></li>
                                <li>l</li>
                                <li><a href="/us/master.php">석박사 과정</a></li>
                                <li>l</li>
                                <li><a href="/us/ranking.php">미국 대학 랭킹</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/us/affiliated.php">어학연수</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/us/affiliated.php">대학부설 영어연수</a></li>
                                <li>l</li>
                                <li><a href="/us/academy.php">사설기관 영어연수</a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="3"><a href="/ca/why.php">캐나다</a></td>
                        <td class="dep2"><a href="/ca/why.php">캐나다 유학 개요</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/ca/why.php">왜 캐나다인가</a></li>
                                <li>l</li>
                                <li><a href="/ca/institution.php">캐나다 교육제도</a></li>
                                <li>l</li>
                                <li><a href="/ca/city.php">주요 도시 안내</a></li>
                                <li>l</li>
                                <li><a href="/ca/visa.php">캐나다 비자 신청</a></li>
                                <li>l</li>
                                <li><a href="/ca/procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/ca/university.php">학위과정</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/ca/university.php">캐나다 대학 소개</a></li>
                                <li>l</li>
                                <li><a href="/ca/prep.php">명문대 진학 과정</a></li>
                                <li>l</li>
                                <li><a href="/ca/bachelor.php">학사/준학사 과정</a></li>
                                <li>l</li>
                                <li><a href="/ca/master.php">석사 과정</a></li>
                                <li>l</li>
                                <li><a href="/ca/ranking_univ.php">캐나다 대학 랭킹</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/ca/affiliated.php">어학연수</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/ca/affiliated.php">대학부설 영어연수</a></li>
                                <li>l</li>
                                <li><a href="/ca/academy.php">사설기관 영어연수</a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="3"><a href="/nz/why.php">뉴질랜드</a></td>
                        <td class="dep2"><a href="/nz/why.php">뉴질랜드 유학 개요</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/nz/why.php">왜 뉴질랜드인가</a></li>
                                <li>l</li>
                                <li><a href="/nz/institution.php">뉴질랜드 교육 제도</a></li>
                                <li>l</li>
                                <li><a href="/nz/city.php">주요 도시 안내</a></li>
                                <li>l</li>
                                <li><a href="/nz/visa.php">뉴질랜드 비자 신청</a></li>
                                <li>l</li>
                                <li><a href="/nz/procedure.php">출국 준비 안내</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/nz/university.php">학위과정</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/nz/university.php">뉴질랜드 대학 소개</a></li>
                                <li>l</li>
                                <li><a href="/nz/prep.php">대학 예비 과정</a></li>
                                <li>l</li>
                                <li><a href="/nz/bachelor.php">학사 과정</a></li>
                                <li>l</li>
                                <li><a href="/nz/doctor.php">석박사 과정</a></li>
                                <li>l</li>
                                <li><a href="/nz/college.php">전문대 과정</a></li>
                                <li>l</li>
                                <li><a href="/nz/ranking_univ.php">뉴질랜드 대학 랭킹</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="dep2"><a href="/nz/affiliated.php">어학연수</a></td>
                        <td class="dep3">
                            <ul>
                                <li><a href="/nz/affiliated.php">대학부설 영어연수</a></li>
                                <li>l</li>
                                <li><a href="/nz/academy.php">사설기관 영어연수</a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="6"><a href="/theme1/food_aus.php">전공별</br>유학</a></td>
                        <td class="dep2" colspan="2"><a href="/theme1/food_aus.php">요리 & 제과</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/theme1/aviation_aus.php">항공 & 항공 정비사</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/theme1/art_aus.php">아트 & 디자인</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/theme1/health_aus.php">간호 & 보건</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/theme1/hotel_aus.php">호텔 & 비지니스</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/theme1/it_aus.php">IT & 엔지니어링</a></td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="4"><a href="/recommend/usa.php">IDP 추천</a></td>
                        <td class="dep2" colspan="2"><a href="/recommend/usa.php">미국 커뮤니티 컬리지 2+2</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/recommend/aus.php">호주 대학부설 어학연수</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/recommend/uk_art.php">영국 아트 유학</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/recommend/uk_rusell.php">영국 러셀그룹</a></td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="1"><a href="/self/apply_info.php">셀프 학교</br>지원</a></td>
                        <td class="dep2" colspan="2"><a href="/self/apply_info.php">셀프 학교 지원</a></td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition">사이버</br>박람회</a></td>
                        <td class="dep2" colspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition">사이버 박람회 개요</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=exhibition&sfl=wr_3&stx=<?php echo urlencode('진행중'); ?>">진행중인 박람회</a></td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="4"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">커뮤니티</a></td>
                        <td class="dep2" colspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">IDP 새소식</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=tips">유학 꿀팁!!</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=review">유학 후기</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=qna">질문있어요!!</a></td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="2"><a href="/company/info.php">회사소개</a></td>
                        <td class="dep2" colspan="2"><a href="/company/ielts.php">IDP 소개</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/company/ielts.php">IELTS 소개</a></td>
                    </tr>

                    <tr>
                        <td class="dep1" rowspan="2"><a href="/guide/terms.php">이용약관</a></td>
                        <td class="dep2" colspan="2"><a href="/guide/terms.php">이용약관</a></td>
                    </tr>
                    <tr>
                        <td class="dep2" colspan="2"><a href="/guide/policy.php">개인정보취급방침</a></td>
                    </tr>
                </table>
            </div>
        </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>