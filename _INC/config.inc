<?
// HEADER
@header("Content-Type: text/html; charset=utf-8");
@header("Cache-Control: no-cache, must-revalidate");
@header("Pragma: no-cache");
@header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
//@Header("Access-Control-Allow-Origin: [http://www.honestclinic.com]");
@Header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
@header("Access-Control-Allow-Headers: X-Requested-With, X-Prototype-Version");
@session_start();



@ini_set("session.cache_expire",86400);
@ini_set("session.gc_maxlifetime",86400);



class object {};
$GP = new object;

////////////////////////////////////////////////////////////////
//# Path config
////////////////////////////////////////////////////////////////
// default include path
$GP -> DOCROOT	= $_DEF_PATH;
$GP -> WEBROOT 		= '/';
$GP -> ROOT 		= $GP -> DOCROOT . $GP -> WEBROOT;

$GP -> CLS			= $GP -> ROOT . '_CLASS/';
$GP -> INC			= $GP -> ROOT . '_INC/';
$GP -> COM			= $GP -> ROOT . '_COMMON/';
$GP -> HOME		= $GP -> ROOT . 'www/';

$GP -> IP				= $_SERVER['SERVER_ADDR'];
$GP -> DOMAIN			= $_SERVER['HTTP_HOST'];
$GP -> SERVICE_DOMAIN		= 'http://honestclinic.com/';
$GP -> HTTPS			= 'http://honestclinic.com/';
$GP -> HTTP			= 'http://' . $GP -> DOMAIN;
$GP -> HTTPS_PORT		= 46541;

$GP -> QUERY_STRING = $_SERVER['QUERY_STRING'];
$GP -> SELFPAGE 		= $_SERVER['PHP_SELF'];
$GP -> NOWPAGE 		= $GP -> SELFPAGE . '?' . $_SERVER['QUERY_STRING'];
$GP -> NOWPAGE_ENC 	= urlencode($GP -> NOWPAGE);

$GP -> INC_ADM = $GP -> HOME ."admin/";
$GP -> INC_ADM_PATH = $GP -> HOME ."admin/inc/";

$GP -> LIST_PAGE = "10";
$GP -> LIST_ROW = "1";

$GP -> INC_WWW	= $GP -> HOME ."inc";
$GP -> INC_PATH = $GP -> HOME . "bbs";
$GP -> IMG_PATH = $GP -> HTTP . "/bbs";
$GP -> IMGS_PATH = $GP -> HTTPS . "/bbs";
$GP -> JS_SMART_PATH = $GP -> HTTP . "/bbs/smarteditor/js";
$GP -> JS_PATH = $GP -> HTTP . "/js";
$GP -> INC_JS_PATH = $GP -> HTTP ."/admin/js";

## 스마트에디터 업로드 경로
$GP -> UP_IMG_SMARTEDITOR = $GP -> HOME . 'bbs/files/';
$GP -> UP_IMG_SMARTEDITOR_URL = $GP -> HTTP . '/bbs/files/';

## 팝업 링크
$GP -> UP_POPUP					= $GP -> HOME . 'popup/upfile/';
$GP -> UP_POPUP_URL			= $GP -> HTTP . '/popup/upfile/';

## 파트너사 링크
$GP -> UP_PARTNER					= $GP -> HOME . 'common/partner/';
$GP -> UP_PARTNER_URL			= $GP -> HTTP . '/common/partner/';


## 의료진 관련
$GP -> UP_DOCTOR			= $GP -> HOME . 'common/doctor/';
$GP -> UP_DOCTOR_URL			= $GP -> HTTP . '/common/doctor/';

## 의료진 관련
$GP -> UP_CLINIC			= $GP -> HOME . 'common/clinic/';
$GP -> UP_CLINIC_URL			= $GP -> HTTP . '/common/clinic/';


## 저서 및 논문
$GP -> UP_BOOK				= $GP -> HOME . 'common/book/';
$GP -> UP_BOOK_URL			= $GP -> HTTP . '/common/book/';


##
$GP -> UP_TREAT				= $GP -> HOME . 'common/treat/';
$GP -> UP_TREAT_URL			= $GP -> HTTP . '/common/treat/';

##  슬라이드
$GP -> UP_SLIDE				= $GP -> HOME . 'common/slide/';
$GP -> UP_SLIDE_URL			= $GP -> HTTP . '/common/slide/';


##  입사지원
$GP -> UP_RECRUIT				= $GP -> HOME . 'common/recruit/';
$GP -> UP_RECRUIT_URL			= $GP -> HTTP . '/common/recruit/';

## 상담신청
$GP -> UP_CS = $GP -> HOME . 'common/customer/';
$GP -> UP_CS_URL = $GP -> HTTP . '/common/customer/';

## 고충처리
$GP -> UP_CS_GR = $GP -> HOME . 'common/grievance/';
$GP -> UP_CS_GR_URL = $GP -> HTTP . '/common/grievance/';

##  협력기관
$GP -> UP_cooperative				= $GP -> HOME . 'common/cooperative/';
$GP -> UP_cooperative_URL			= $GP -> HTTP . '/common/cooperative/';

## 후원신청
$GP -> UP_donation				= $GP -> HOME . 'common/donation/';
$GP -> UP_donation_URL			= $GP -> HTTP . '/common/donation/';

## 컨텐츠
$GP -> UP_CONTENT			= $GP -> HOME . 'contents/upfile/';
$GP -> UP_CONTENT_URL			= $GP -> HTTP . '/contents/upfile/';

$GP->DB_TABLE = "domain";


////////////////////////////////////////////////////////////////
//# Load class
////////////////////////////////////////////////////////////////
// 기본 함수
include_once $GP -> CLS . 'class.func.php';
$C_Func 		= new Func;

////////////////////////////////////////////////////////////////
//# Database config
////////////////////////////////////////////////////////////////
include_once $GP -> INC . 'db.inc';


////////////////////////////////////////////////////////////////
//# sms config
////////////////////////////////////////////////////////////////
$GP -> SMS_ID = 'otta';
$GP -> SMS_AUTH_KEY ='ee966b7c67a48f2727d502d1fcd16d4c';


////////////////////////////////////////////////////////////////
//# Admin config
////////////////////////////////////////////////////////////////
$GP -> Admin_Email = "domainpex@gmail.com";
$GP -> Admin_Phone = "02-1111-2222";
$GP -> Admin_Name = "관리자";
$GP -> Admin_HP_NAME = "어니스트여성의원";
$GP -> Admin_HP_NAME1 = "어니스트여성의원";
$GP -> Admin_BizNum = "02-1111-2222";
$GP -> SMS_HP1 = "010"; //병원 번호로 변경해야함.
$GP -> SMS_HP2 = "1111";
$GP -> SMS_HP3 = "2222";

$GP -> HOME_MAIN_ADDRESS = " 서울특별시";

////////////////////////////////////////////////////////////////
//# SMTP config
////////////////////////////////////////////////////////////////
$GP -> SMTP_USE 		= true;
$GP -> SMTP_SERVER  	= 'mail.mediinside.com';
$GP -> SMTP_IP			= '211.115.222.194';
$GP -> SMTP_PORT		= '25';
$GP -> SMTP_USER		= 'mediinside@mediinside.com';
$GP -> SMTP_PASS		= '10#MEdi20!^';

////////////////////////////////////////////////////////////////
//# Pass config
////////////////////////////////////////////////////////////////
$GP -> PASS = 'ka-100';

////////////////////////////////////////////////////////////////
//# NAVER config
////////////////////////////////////////////////////////////////
$GP -> NAVER_CLIENT_ID = 'h7sD4XMLybQ2G4YmfU5l';
$GP -> NAVER_CLIENT_SECRET = 'z39yLjRwjN';
$GP -> NAVER_RETURN_URL = 'http://honestclinic.com/member/proc/login_proc.html?mode=naver';

////////////////////////////////////////////////////////////////
//# 권한 설정
////////////////////////////////////////////////////////////////
$GP -> AUTH_LEVEL	 = array(
						"9" => "최고 관리자"
						, "8" => "테스트"
						, "7" => "관리자"
						, "6" => "총무과"
						, "5" => "매니져"
					);

$GP -> BOARD_CONFIG_LEVEL	 = array(
						"0" => "비회원"
						, "3" => "회원"
						, "5" => "매니져"
						, "7" => "관리자"
						, "9" => "최고 관리자"
					);
$GP -> BOARD_TYPE	 = array(
						  "160" => "논문"
						//, "170" => "출판논문"
						, "50" => "학회활동"
					);

$GP -> MEMBER_CONFIG_LEVEL	 = array(
						 "3" => "회원"
						, "5" => "병원관계자"
					);

$GP -> MEM_SEX	 = array(
						"M" => "남"
						, "F" => "여"
					);

$GP -> RESERVE_CL_TYPE	 = array(
						"1" => "초진"
						, "2" => "재진"
					);


$GP -> QNA_RESULT	 = array(
						"N" => "미처리"
						, "M" => "처리중"
						, "Y" => "처리완료"
					);

$GP -> QNA_USER_TYPE	 = array(
						"M" => "회원"
						, "G" => "비회원"
					);

$GP -> RESERVE_RESULT	 = array(
						"N" => "예약신청"
						, "M" => "처리중"
						, "Y" => "예약완료"
						, "C" => "예약취소"
						, "P" => "(전화)부재중"
					);


$GP -> WITHDRAWAL_REASON	 = array(
						"1" => "사생활 기록 삭제 목적"
						, "2" => "새 아이디 생성 목적"
						, "3" => "이벤트 등의 목적으로 한시 사용함"
						, "4" => "서비스 기능 불편"
						, "5" => "제재조치로 이용제한됨"
						, "6" => "본 웹싸이트 정책 불만"
						, "7" => "개인정보 및 보안 우려"
						, "8" => "피부과 이용 안 함"
						, "9" => "기타"
					);


//진료과목
$GP -> CENTER_TYPE = array(
				'A' => '건강검진센터',
				'B' => '소화기내시경센터',
				'H' => '산부인과',

			);

//진료과
$GP -> CLINIC_TYPE = array(
				'A' => '산부인과',
				'B' => '외과',
				'C' => '가정의학과',
				'D' => '비뇨의학과',
				'E' => '영상의학과',
				'F' => '소화기내과',
				'G' => '성형외과',
				'H' => '헬시에이징',
				'I' => '건강검진센터',
				'J' => '소화기내시경센터',
			);

//의료진 직책
$GP -> DOCTOR_POSITION = array(
				'A' => '병원장',
				'B' => '부원장',
				'C' => '진료부장',
				'D' => '진료과장',
			);

//의료진 학위
$GP -> DOCTOR_THESIS = array(
				'A' => '의학석사',
				'B' => '의학박사',
				'C' => '교수',
			);

//슬라이드 타입
$GP -> SLIDE_position = array(
				'L' => '왼쪽 슬라이드',
				'R' => '오른쪽 슬라이드',
                'C' => '메인 슬라이드',
                'B' => '메인 탑 배너',
                'E' => '국제협력사업',
                'Q' => '퀵배너',
			);
$GP -> SLIDE_LANG = array(
				'kor' => '국문',
				'eng' => '영문',
                'chn' => '중문',
			);

//컨텐츠 정보
$GP->PAIN_TYPE = array(
				'A' => 'Healthiness',
				'B' => 'Happiness',
				'C' => 'Beauteous',				
			);

$GP -> DOCTOR_SCH = array(
				'1' => '외래진료',
				'2' => '특수클리닉',
			);

$GP -> DOCTOR_SCH_SHOW = array(
				'1' => '<span class="diag">외래진료</span>',
				'2' => '<span class="diag">특수클리닉</span>',
			);

$GP -> DOCTOR_SCH_SHOW1 = array(
				'1' => '<span class="sc1">진료</span>',
				'2' => '<span></span>',
				'3' => '<span class="sc2">시술</span>',
				'4' => '<span class="sc3">검진</span>',
				'5' => '<span class="sc4">수술</span>',
				'' => '<span></span>',
			);
$GP -> DOCTOR_SCH_SHOW2 = array(
				'1' => '진료',
				'2' => '-',
				'3' => '시술',
				'4' => '검진',
				'5' => '수술',
			);

$GP -> donation_TYPE = array(
				'A' => '수입',
				'B' => '지출',
			);
$GP -> donation_TYPE2 = array(
				'A' => '유튜브',
				'B' => '왼쪽배너',
                'C' => '오른쪽배너',
			);
$GP -> donation_TYPE3 = array(
				'A' => '개인',
				'B' => '기업/단체',
                'C' => '물품',
			);
//방송, 저서, 논문
$GP -> DOCTOR_PUBLISH = array(
				'A' => '방송출연 및 자문',
				'B' => '저서',
				'C' => '논문'
			);


//공지사항타입
$GP -> NOTICE_TYPE = array(
				'A' => '병원소식',
				'B' => '연구활동',
				'C' => '이벤트',
			);
$GP -> SNS_TYPE = array(
				'A' => '유튜브',
				'B' => '인스타그램',
				'C' => '페이스북',
                'D' => '트위터',
                'E' => '블로그',
			);

$GP -> CUSTOMER_TYPE = array(
				'A' => '칭찬',
				'B' => '민원',

			);

$GP -> employment_TYPE = array(
				'A' => '채용중',
				'B' => '채용마감',

			);

//공지사항타입
$GP -> TIME_TYPE = array(
				'AM' => '오전',
				'PM' => '오후',
			);

//FAQ
$GP -> FAQ_TYPE = array(
				'' => 'ALL',
				'A' => '척추',
				'B' => '관절',
				'C' => '기타'
			);

//이용문의 신청
$GP -> COUNSEL_TPYE = array(
				'A' => '메인',
				'B' => '모바일',
			);




//요일 정보
$GP -> GL_WEEK_INFO = array (
    			"sun" => "일",
                        "mon" => "월",
                        "tue" => "화",
                        "wed" => "수",
                        "thu" => "목",
                        "fri" => "금",
                        "sat" => "토"
                    );

//전화번호 기본 입력(휴대폰만)
$GP -> MOBILE =
		array(
			"010" => "010"
			, "011" => "011"
			, "016" => "016"
			, "017" => "017"
			, "018" => "018"
			, "019" => "019"
		);

//전화번호 기본 입력(휴대폰포함)
$GP -> TELEPHONE =
			array(
				"02" => "02"
				, "031" => "031"
				, "032" => "032"
				, "033" => "033"
				, "041" => "041"
				, "042" => "042"
				, "043" => "043"
				, "051" => "051"
				, "052" => "052"
				, "053" => "053"
				, "054" => "054"
				, "055" => "055"
				, "061" => "061"
				, "062" => "062"
				, "063" => "063"
				, "064" => "064"
				, "070" => "070"
				, "080" => "080"
				, "0505" => "0505"
				, "1544" => "1544"
				, "1566" => "1566"
				, "1577" => "1577"
				, "1588" => "1588"
				, "1599" => "1599"
				, "1577" => "1577"
			);


/************************************************/
/*          이메일 정보                         */
/************************************************/
$GP -> EMAIL =
		array (
				'hanmail.net' => '다음(한메일)'
				, 'yahoo.com' => '야후'
				, 'naver.com' => '네이버'
				, 'paran.com' => '파란'
				, 'nate.com' => '네이트'
				, 'empal.com' => '엠팔'
				, 'hitel.net' => '하이텔'
				, 'hanmir.com' => '한미르'
				, 'chol.com' => '천리안'
				, 'korea.com' => '코리아닷컴'
				, 'netian.com' => '네띠앙'
				, 'dreamwiz.com' => '드림위즈'
				, 'lycos.co.kr' => '라이코스'
				, 'orgio.net' => '오르지오'
				, 'unitel.co.kr' => '유니텔'
				, 'kornet.net' => '코넷'
				, 'freechal.com' => '프리첼'
				, 'hanafos.com' => '하나포스'
				, 'hotmail.com' => '핫메일'
				, 'gmail.com' => '구글'
				, 'msn.com' => 'MSN'
		);


//센터구분
$GP->CATE1 = array(
	'A' => '척추센터',
	'B' => '관절센터',
);

//치료법 구분
$GP->CATE2 = array(
	'A' => array(
		'A-1' => '비수술치료',
		'A-2' => '최소침습수술',
		),
	'B' => array(
		'B-1' => '비수술치료',
		'B-2' => '재생ㆍ재건술',
		),
);

//치료법 부위
$GP->CATE3 = array(
	'A-1' => array(
		'A-2-1' => '목',
		'A-2-2' => '등',
		'A-2-3' => '허리',
		'A-2-4' => '손',
		),
	'A-2' => array(
		'A-2-1' => '목',
		'A-2-2' => '등',
		'A-2-3' => '허리',
		'A-2-4' => '손',
		),
	'B-1' => array(
		'B-2-1' => '어깨',
		'B-2-2' => '팔',
		'B-2-3' => '손목',
		'B-2-4' => '고관절',
		'B-2-5' => '무릎',
		'B-2-6' => '발목',
		),
	'B-2' => array(
		'B-2-1' => '어깨',
		'B-2-2' => '팔',
		'B-2-3' => '손목',
		'B-2-4' => '고관절',
		'B-2-5' => '무릎',
		'B-2-6' => '발목',
		),

);


//치료법 노출 질환구분
$GP->CATE4 = array(
	'A' => array(
		'A-1' => '목 질환',
		'A-2' => '등 질환',
		'A-3' => '허리 질환',
		'A-4' => '손저림클리닉',
		),
	'B' => array(
		'B-1' => '어깨,팔,손목',
		'B-2' => '무릎,고관절',
		'B-3' => '발 질환',

		),
);

//척추치료법 노출 질환구분 - 신대리요청 2017-0519
$GP->CATE41 = array(
	'A' => array(
		'A-2-1' => '목 질환',
		'A-2-2' => '등 질환',
		'A-2-3' => '허리 질환',
		),
	'B' => array(
		'B-2-1' => '어깨',
		'B-2-2' => '팔',
		'B-2-3' => '손목',
		'B-2-4' => '고관절',
		'B-2-5' => '무릎',
		'B-2-6' => '발 질환',
		),
);


//치료법 노출 질환명 구분
$GP->CATE5 = array(
	'A-1' => array(
		'A-1-1' => '디스크탈출증',
		'A-1-2' => '척추관협착증',
		'A-1-3' => '경추척수병증',
		'A-1-4' => '거북목증후군',
		'A-1-5' => '근막통증증후군',
		'A-1-6' => '후종인대골화증',
		'A-1-7' => '척추종양',
		'A-1-8' => '미세현미경 신경감압술',
		),
	'A-2' => array(
		'A-2-1' => '디스크탈출증',
		'A-2-2' => '척추관협착증',
		'A-2-3' => '척추압박골절',
		'A-2-4' => '근막통증증후군',
		'A-2-5' => '후종인대골화증',
		'A-2-6' => '황색인대골화증',
		'A-2-7' => '척추측만증',
		'A-2-8' => '척추종양',
		'A-2-9' => '미세현미경 신경감압술',
		),
	'A-3' => array(
		'A-3-0' => '디스크탈출증',
		'A-3-1' => '척추관협착증',
		'A-3-2' => '척추전방전위증',
		'A-3-3' => '척추분리증',
		'A-3-4' => '근막통증증후군',
		'A-3-5' => '디스크내장증',
		'A-3-6' => '퇴행성디스크',
		'A-3-7' => '척추후만증',
		'A-3-8' => '척추종양',
		'A-3-9' => '강직성척추염',
		'A-3-10' => '미세현미경 신경감압술',
		),

	'A-4' => array(
		'A-4-1' => '손저림터널증후군',
		'A-4-2' => '손저림',
	),
	'B-1' => array(
		'B-1-1' => '어깨회전근개질환',
		'B-1-2' => '어깨석회화건염',
		'B-1-3' => '오십견',
		'B-1-4' => '어깨 재발성 탈구',
		'B-1-5' => '어깨&middot;팔꿈치관절염',
		'B-1-6' => '테니스&middot;골프엘보',
		'B-1-7' => '손목&middot;팔꿈치터널증후군',
		'B-1-8' => '손목건초염&middot;충돌증후군상지 골절',
		'B-1-9' => '손목무혈성괴사',
		),
	'B-2' => array(
		'B-2-0' => '무릎연골손상',
		'B-2-1' => '무릎반월상연골파열',
		'B-2-2' => '무릎십자인대파열',
		//'B-2-3' => '퇴행성관절염',
		'B-2-10' => '무릎퇴행성관절염',
		'B-2-4' => '류마티스관절염',
		'B-2-11' => '고관절퇴행성관절염',
		'B-2-5' => '고관절골절',
		'B-2-6' => '대퇴골두무혈성괴사',
		'B-2-7' => '관절경수술',
		'B-2-8' => '활액막절제술',
		'B-2-9' => '인공관절치환술',
		),
	'B-3' => array(
		'B-3-1' => '발목인대파열',
		'B-3-2' => '퇴행성관절염',
		'B-3-3' => '무지외반증',
		'B-3-4' => '족저근막염',
		'B-3-5' => '아킬레스건염',
		'B-3-6' => '족부변형',
		),

);


//대분류
$GP -> CATE_TYPE1 = array(
				'' => '전체',
				'A' => '검사',
				'B' => '서류비용',
				'C' => '선택료',
				'D' => '약제',
				'E' => '예방접종',
				'F' => '입원/병실',
				'G' => '처치 및 수술',
				'H' => '체열진단',
				'I' => '초음파',
				'J' => '치료재료',
				'K' => 'MRI',
			);


// 예약간격 구분
$GP -> RESERVE_INTERVAL_TYPE	 = array(
						// "15" => "15분",
						"30" => "30분",
						"60" => "1시간"
					);


//페이지통계 잡을 곳
$GP->PAGE_TYPE = array(
				'/doctor/doctor_list.html' => array(
										'0' => 'DL',
										'1'=>'의료진소개'
									),
				'/hosp/hosp01.html' => array(
									'0' => 'RS',
									'1'=>'온라인예약'
									),
			);
$GP->CLINIC_INFO_TYPE = array(
				'A' => '산부인과',
				'B' => '외과',
				'C' => '가정의학과',
				'D' => '비뇨의학과',
				'E' => '영상의학과',
				'F' => '소화기내과',
				'G' => '성형외과',
				'H' => '헬시에이징',
				'I' => '건강검진센터',
				'J' => '소화기내시경센터',
			);

$GP->NEWS_TYPE = array(
				'A' =>'KBS',
				'B' =>'MBC',
				'C' =>'NES1',
				'D' =>'OBS뉴스',
				'E' =>'OSEN',
				'F' =>'SBS',
				'G' =>'TV조선',
				'H' =>'경기일보',
				'I' =>'경인일보',
				'J' =>'경향신문',
				'K' =>'국민일보',
				'L' =>'기호일보',
				'M' =>'뉴스Y',
				'N' =>'뉴시스',
				'O' =>'동아일보',
				'P' =>'매일경제',
				'Q' =>'머니투데이',
				'R' =>'병원신문',
				'S' =>'세계일보',
				'T' =>'아리랑TV',
				'U' =>'연합뉴스',
				'V' =>'의협신문',
				'W' =>'이데일리',
				'X' =>'조선일보',
				'Y' =>'조세일보',
				'Z' =>'중앙일보',
				'AA' =>'파이낸셜뉴스',
				'BB' =>'헬스조선',
				'ZZ' => '기타'
			);

$GP->NEWS_TYPE_IMG = array(
				'A' => '/images/news/A.jpg',
				'B' => '/images/news/B.jpg',
				'C' => '/images/news/C.jpg',
				'D' => '/images/news/D.jpg',
				'E' => '/images/news/E.jpg',
				'F' => '/images/news/F.jpg',
				'G' => '/images/news/G.jpg',
				'H' => '/images/news/H.jpg',
				'I' => '/images/news/I.jpg',
				'J' => '/images/news/J.jpg',
				'K' => '/images/news/K.jpg',
				'L' => '/images/news/L.jpg',
				'M' => '/images/news/M.jpg',
				'N' => '/images/news/N.jpg',
				'O' => '/images/news/O.jpg',
				'P' => '/images/news/P.jpg',
				'Q' => '/images/news/Q.jpg',
				'R' => '/images/news/R.jpg',
				'S' => '/images/news/S.jpg',
				'T' => '/images/news/T.jpg',
				'U' => '/images/news/U.jpg',
				'V' => '/images/news/V.jpg',
				'W' => '/images/news/W.jpg',
				'X' => '/images/news/X.jpg',
				'Y' => '/images/news/Y.jpg',
				'Z' => '/images/news/Z.jpg',
				'AA' => '/images/news/AA.jpg',
				'BB' => '/images/news/BB.jpg',
			);

$GP->RECRUIT_TYPE = array(
				'D' => '의료진',
				'A' => '간호부',
				'B' => '진료지원부',
				'C' => '행정부',
			);


$GP->RECRUIT_TYPE1 = array(
				'A' => array(
					'A-1' => '간호사',
					'A-2' => '간호부',
					),
				'B' => array(
					'B-1' => '물리치료사',
					'B-2' => '영상진단실',
					'B-3' => '임상병리실',
					),
				'C' => array(
					'C-1' => '원무과',
					'C-2' => '심사과',
					'C-3' => '총무부',
					'C-4' => '기획팀',
					'C-5' => '홍보팀',
					'C-6' => '국제교류팀',
					'C-7' => '관리팀',
					'C-8' => '학술팀',
					),
			);


//메뉴 네비관련
$GP -> Navi_Dep1 = array(
            '1' =>  array('라팡소개','/info/page1.html'),
            '2' =>  array('난임클리닉','/clinic-1/page1.html'),
            '3' =>  array('부인과클리닉','/clinic-2/page1.html'),
            '4' =>  array('연구소','/center/page1.html'),
            '5' =>  array('커뮤니티','/notice/page1-1.html'),
			);
$GP -> Navi_Dep2 = array(
            '1' => array(
                '1-1' => array('인사말', '/info/page1.html'),
                '1-2' => array('의료진', '/info/page2.html'),
                '1-3' => array('둘러보기', '/info/page3.html'),
                '1-4' => array('오시는길', '/info/page4.html'),
                '1-5' => array('난임부부', '/info/page5.html'),
                ),
            '2' => array(
                '2-1' => array('난임검사', '/clinic-1/page1.html'),
                '2-2' => array('난임의', '/clinic-1/page8.html'),
                '2-3' => array('시험관아기', '/clinic-1/page2.html'),
                '2-4' => array('인공수정', '/clinic-1/page3.html'),
                '2-5' => array('미세정자주입술', '/clinic-1/page9.html'),
                '2-6' => array('보조부화술', '/clinic-1/page1.html'),
                '2-7' => array('착상전', '/clinic-1/page11.html'),
                '2-8' => array('가임력', '/clinic-1/page4.html'),
                '2-9' => array('다낭성난소증후군', '/clinic-1/page5.html'),               
                ),
            '3' => array(
                '3-1' => array('부인과성형', '/clinic-2/page1.html'),
                '3-2' => array('자궁내막증', '/clinic-2/page2.html'),
                '3-3' => array('내시경수술', '/clinic-2/page3.html'),
                '3-4' => array('부인과종합검진', '/clinic-2/page4.html'),
                ),
            '4' => array(
                '4-1' =>array('연구소소개','/center/page1.html'),
                '4-2' =>array('연구진소개','/center/page2.html'),
                ),
            '5' => array(
                '5-1' =>array('공지사항','/notice/page.php?jb_code=1'),
                '5-2' =>array('임신을축하합니다','/notice/page.php?jb_code=2'),
                '5-3' =>array('자주묻는질문','/notice/page.php?jb_code=3'),
                '5-4' =>array('온라인상담','/notice/page.php?jb_code=4'),
                )

			);


//대분류
$GP -> NONPAY_CATE_TYPE1 = array(
				'1' => '행위',
				'2' => '치료재료',
				'3' => '약제',
				'4' => '제증명수수료',
				// '5' => '선택진료료(비율)',
				// '6' => '선택진료료(비용예시)'
			);

//중분류
$GP -> NONPAY_CATE_TYPE1_1 = array(
				'1' => '제1장 기본진료료',
				'2' => '      1-1장 상급병실료 차액',
				'3' => '제2장 검사료',
				'4' => '      2-1장 초음파검사료',
				'5' => '제3장 영상진단 및 방사선 치료료',
				'6' => '    3-1장 초음파 영상료',
				'7' => '    3-2장 자기공명영상진단료(MRI)',
				'8' => '    3-3장 양전자단층촬영료(PET) ',
				'9' => '제5장 주사료',
				'10' => '제6장 마취료',
				'11' => '제7장 이학요법료(물리치료료)',
				'12' => '제8장 정신요법료',
				'13' => '제9장 처치 및 수술료 등',
				'99' => '기타',
			);
//포함 여부
$GP -> NONPAY_YN = array(
				'Y' => '포함',
				'N' => '미포함',
				// '5' => '선택진료료(비율)',
				// '6' => '선택진료료(비용예시)'
			);

//국가선택
$GP -> NATIONALITY_TYPE = array(
				"alb" => "Albania",
				"dza" => "Algeria",
				"asm" => "American Samoa",
				"and" => "Andorra",
				"ago" => "Angola",
				"aia" => "Anguilla",
				"ata" => "Antarctica",
				"atg" => "Antigua &amp; Barbuda",
				"arg" => "Argentina",
				"arm" => "Armenia",
				"abw" => "Aruba",
				"aus" => "Australia",
				"aut" => "Austria",
				"aze" => "Azerbaijan",
				"bhs" => "Bahamas",
				"bhr" => "Bahrain",
				"bgd" => "Bangladesh",
				"brb" => "Barbados",
				"blr" => "Belarus",
				"bel" => "Belgium",
				"blz" => "Belize",
				"ben" => "Benin",
				"bmu" => "Bermuda",
				"btn" => "Bhutan",
				"bol" => "Bolivia",
				"bih" => "Bosnia &amp; Herzegowina",
				"bwa" => "Botswana",
				"bvt" => "Bouvet Island",
				"bra" => "Brazil",
				"iot" => "British Indian Ocean Territory",
				"brn" => "Brunei Darussalam",
				"bgr" => "Bulgaria",
				"bfa" => "Burkina Faso",
				"bdi" => "Burundi",
				"khm" => "Cambodia",
				"cmr" => "Cameroon",
				"can" => "Canada",
				"cpv" => "Cape Verde",
				"cym" => "Cayman Islands",
				"caf" => "Central African Republic",
				"tcd" => "Chad",
				"chl" => "Chile",
				"chn" => "China",
				"cxr" => "Christmas Island",
				"cck" => "Cocos (keeling) Islands",
				"col" => "Colombia",
				"com" => "Comoros",
				"cog" => "Congo",
				"cok" => "Cook Islands",
				"cri" => "Costa Rica",
				"civ" => "Cote D'ivoire",
				"hrv" => "Croatia (local name : Hrvatska)",
				"cub" => "Cuba",
				"cyp" => "Cyprus",
				"cze" => "Czech Republic",
				"dnk" => "Denmark",
				"dji" => "Djibouti",
				"dma" => "Dominica",
				"dom" => "Dominican Republic",
				"tmp" => "East Timor",
				"ecu" => "Ecuador",
				"egy" => "Egypt",
				"slv" => "El Salvador",
				"gnq" => "Equatorial Guinea",
				"eri" => "Eritrea",
				"est" => "Estonia",
				"eth" => "Ethiopia",
				"flk" => "Falklannd Islands(Malvinas)",
				"fro" => "Faroe Islands",
				"fji" => "Fiji",
				"fin" => "Finland",
				"fra" => "France",
				"fxx" => "France, Metropolitan",
				"guf" => "French Guiana",
				"pyf" => "French Polynesia",
				"atf" => "French southern Territories",
				"gab" => "Gabon",
				"gmb" => "Gambia",
				"geo" => "Georgia",
				"deu" => "Germany",
				"gha" => "Ghana",
				"gib" => "Gibraltar",
				"grc" => "Greece",
				"grl" => "Greenland",
				"grd" => "Grenada",
				"glp" => "Guadeloupe",
				"gum" => "Guam",
				"gtm" => "Guatemala",
				"gin" => "Guinea",
				"gnb" => "Guinea-Bissau",
				"guy" => "Guyana",
				"hti" => "Haiti",
				"hmd" => "Heard &amp; Mc Donald Islands",
				"hnd" => "Honduras",
				"hkg" => "Hong Kong",
				"hun" => "Hungary",
				"isl" => "Iceland",
				"ind" => "India",
				"idn" => "Indonesia",
				"irn" => "Iran(Islamic Republic Of)",
				"irq" => "Iraq",
				"irl" => "Ireland",
				"isr" => "Israel",
				"ita" => "Italy",
				"jam" => "Jamaica",
				"jpn" => "Japan",
				"jor" => "Jordan",
				"kaz" => "Kazakhstan",
				"ken" => "Kenya",
				"kir" => "Kiribati",
				"prk" => "Korea, Democratic People's Republic Of",
				"kor" => "Korea, Republic Of",
				"kwt" => "Kuwait",
				"kgz" => "Kyrgyzstan",
				"lao" => "Lao People's Democratic Republic",
				"lva" => "Latvia",
				"lbn" => "Lebanon",
				"lso" => "Lesotho",
				"lbr" => "Liberia",
				"lby" => "Libyan Arab Jamahiriya",
				"lie" => "Liechtenstein",
				"ltu" => "Lithuania",
				"lux" => "Luxembourg",
				"mac" => "Macau",
				"mkd" => "Macedonia, The Former Yugoslav Republic Of",
				"mdg" => "Madagascar",
				"mwi" => "Malawi",
				"mys" => "Malaysia",
				"mdv" => "Maldives",
				"mli" => "Mali",
				"mlt" => "Malta",
				"mhl" => "Marshall Islands",
				"mtq" => "Martinique",
				"mrt" => "Mauritania",
				"mus" => "Mauritius",
				"myt" => "Mayotte",
				"mex" => "Mexico",
				"fsm" => "Micronesia, Federated States Of",
				"mda" => "Moldova, Republic Of",
				"mco" => "Monaco",
				"mng" => "Mongolia",
				"msr" => "Montserrat",
				"mar" => "Morocco",
				"moz" => "Mozambique",
				"mmr" => "Myanmar",
				"nam" => "Namibia",
				"nru" => "Nauru",
				"npl" => "Nepal",
				"nld" => "Netherlands",
				"ant" => "Netherlands Antilles",
				"ncl" => "New Caledonia",
				"nzl" => "New Zealand",
				"nic" => "Nicaragua",
				"ner" => "Niger",
				"nga" => "Nigeria",
				"niu" => "Niue",
				"nfk" => "Norfolk Island",
				"mnp" => "Northern Mariana Islands",
				"nor" => "Norway",
				"omn" => "Oman",
				"pak" => "Pakistan",
				"plw" => "Palau",
				"pan" => "Panama",
				"png" => "Papua New Guinea",
				"pry" => "Paraguay",
				"per" => "Peru",
				"phl" => "Philippines",
				"pcn" => "Pitcairn",
				"pol" => "Poland",
				"prt" => "Portugal",
				"pri" => "Puerto Rico",
				"qat" => "Qatar",
				"reu" => "Reunion",
				"rom" => "Romania",
				"rus" => "Russian Federation",
				"rwa" => "Rwanda",
				"kna" => "Saint Kitts &amp; Nevis",
				"lca" => "Saint Lucia",
				"vct" => "Saint Vincent &amp; The Grenadines",
				"wsm" => "Samoa",
				"smr" => "San Marino",
				"stp" => "Sao Tome &amp; Principe",
				"sau" => "Saudi Arabia",
				"sen" => "Senegal",
				"syc" => "Seychelles",
				"sle" => "Sierra Leone",
				"sgp" => "Singapore",
				"svk" => "Slovakia (Slovak Republic)",
				"svn" => "Slovenia",
				"slb" => "Solomon Islands",
				"som" => "Somalia",
				"zaf" => "South Africa",
				"esp" => "Spain",
				"lka" => "Sri Lanka",
				"shn" => "St. Helena",
				"spm" => "St. Pierre &amp; Miquelon",
				"sdn" => "Sudan",
				"sur" => "Suriname",
				"sjm" => "Svalbard &amp; Jan Mayen Islands",
				"swz" => "Swaziland",
				"swe" => "Sweden",
				"che" => "Switzerland",
				"syr" => "Syrian Arab Republic",
				"twn" => "Taiwan, Province Of China",
				"tjk" => "Tajikistan",
				"tza" => "Tanzania, United Republic Of",
				"tha" => "Thailand",
				"tgo" => "Togo",
				"tkl" => "Tokelau",
				"ton" => "Tonga",
				"tto" => "Trinidad &amp; Tobago",
				"tun" => "Tunisia",
				"tur" => "Turkey",
				"tkm" => "Turkmenistan",
				"tca" => "Turks &amp; Caicos Islands",
				"tuv" => "Tuvalu",
				"uga" => "Uganda",
				"ukr" => "Ukraine",
				"are" => "United Arab Emirates",
				"gbr" => "United Kingdom",
				"usa" => "United States",
				"umi" => "United States Minor Outlying Islands",
				"ury" => "Uruguay",
				"uzb" => "Uzbekistan",
				"vut" => "Vanuatu",
				"vat" => "Vatican City State (Holy See)",
				"ven" => "Venezuela",
				"vnm" => "Viet Nam",
				"vgb" => "Virgin Islands(British)",
				"vir" => "Virgin Islands(U.S.)",
				"wlf" => "Wallis &amp; Futuna Islands",
				"esh" => "Western Sahara",
				"yem" => "Yemen",
				"yug" => "Yugoslavia",
				"zar" => "Zaire",
				"zmb" => "Zambia",
				"zwe" => "Zimbabwe"
			);


$GP-> WEB_TITLE = "어니스트여성의원";
$GP-> ADM_TITLE = "어니스트여성의원 관리자 페이지";

$GP->FACE_CAPTION = "어니스트여성의원";

?>
