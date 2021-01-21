<?
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	include_once $GP -> INC_WWW . '/head.php';  
	include_once($GP -> CLS."class.content.php");
	$C_Content = new Content();

	if($_GET['tc_idx'] == '') {
		$C_Func -> put_msg_and_go ('올바른 경로로 접근해 주세요' , '/');
	}

	$args = '';
	$args['tc_idx'] = $_GET['tc_idx'];
	$rst = $C_Content->Con_Info($args);
	$rst2 = $C_Content->Con_Hit($args);    
  
	$cook_idx = "view_" . $_GET['tc_idx'];
	if($_COOKIE['view_cookie'] != $cook_idx)
	{	
		setcookie('view_cookie',$cook_idx,time()+86400);
		$rst2 = $C_Content->Con_Ori_Hit($args);  
	}

	if($rst) {
		extract($rst);
		$tc_content  = $C_Func->dec_contents_edit($tc_content);	
		$tc_regdate	= date("Y-m-d", strtotime($tc_regdate));
		$tc_link_tab = explode("youtu.be/",$tc_link);
	
		}
	
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
			<h3 class="page-tit"><?=$tc_title?></h3>
			<div class="inner2">
				<!-- <div class="video">
					<iframe width="1280" height="720" src="https://www.youtube.com/embed/YDzv0GC1SfI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="video-info">
					<p class="v-tit">
						<img src="/resource/images/video-label.png" alt="">
						Dr.조혜진의 어니스트TV : 어니스트여성의원
					</p>
					<p class="tit">외음부 트러블! ‘이 모양’이면 ‘성병’ | 곤지름,콘딜로마(사마귀), 헤르페스 2탄</p>
					<div class="state">
						<span class="view">206</span>
						<span class="date">2021.1.1</span>
					</div>
				</div> -->
				<? if($tc_link) { ?>	
				<div class="video">					
						<iframe src="https://www.youtube.com/embed/<?=$tc_link_tab[1]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" ></iframe>					
				</div>
				<? } ?>
				<div class="page-info">
					<p>
                      <?=$tc_summary?>
					</p>
				</div>
				<div class="page-text">
					<!-- 텍스트에디터가 들어갑니다. -->
					    <?=$tc_content?>
				</div>
			</div>
		</div>
		<?php include_once "../inc/footer.php"; ?>
	</div>
</body>

</html>