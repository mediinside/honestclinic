<?php
include_once  '../_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';

include_once "../inc/head.php";

$index_page = "community.php";
$query_page = "query.php";

$jb_code = $_GET["jb_code"];

if($jb_code == "10"){$title = "공지사항";}
elseif ($jb_code == "20") {$title = "병원소식";}
elseif ($jb_code == "30") {$title = "환자의 이야기";}
elseif ($jb_code == "40") {$title = "보호자 이야기";}
elseif ($jb_code == "50") {$title = "상담센터";}

?>

<body>
	<div id="wrap" class="sub">
		<?php include_once "../inc/header.php"; ?>
		<?php include_once "../inc/quick.php"; ?>
		<div id="sub-bnnr" class="num3">
			<img src="/resource/images/sub-bnnr03.png" alt="">
			<h2>
				<span>Happiness</span>
				<small>여성의 건강을 위해 어니스트가 늘 함께합니다.</small>
			</h2>
			<?php include_once "../inc/tag.php"; ?>
		</div>
		<?php include_once "../inc/location.php"; ?>
		<div id="container" class="sub">
			<!-- 검색전 hide 검색후 show -->

            <?php include $GP -> INC_PATH ."/board_inc.php"; ?>          
			</div>
		<?php include_once "../inc/footer.php"; ?>

	</div>
</body>

</html>