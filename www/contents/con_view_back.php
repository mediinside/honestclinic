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
	}
?>
</head>

<body>
<div id="wrap" class="<?=$GP->PAIN_CENTER_CLASS[$tc_cate]?>">
	<? include_once $GP -> INC_WWW . '/header.php'; ?>
	<div id="container">

		<div class="pageVisual">
			<p class="depth1"><?=$GP->PAIN_CENTER[$tc_cate]?></p>
		</div>

		<div class="pageLocation">
			<div class="locationSection">
				<p class="depth1"><?=$GP->PAIN_CENTER[$tc_cate]?></p>
				<p class="location">
					<span><a href="/" class="home">홈</a></span>
					<span class="webHide">&gt;</span>
					<span><strong><?=$GP->PAIN_CENTER[$tc_cate]?></strong></span>
					<span class="webHide">&gt;</span>
					<strong><?=$GP->PAIN_TYPE[$tc_cate]?></strong>
				</p>
			</div>
		</div>

		<div class="pageHead vodTitle">
			<h1 class="pageTitle"><?=$tc_title?></h1>
		</div>

		<div id="contents">
			<div class="itemView section">
				<?
				if($tc_file_code != '') {
					$img_src = "<p class='thumb'><img src='" . $GP -> UP_CONTENT_URL . $tc_file_code . "' alt='' /></p>";
				}
				echo $img_src;
				?>	
				<p class="tit"><?=$tc_title?></p>
				<p class="txt"><?=$tc_summary?></p>
			</div>
			
			<hr />

			<?=$tc_content?>

			<hr />

			<p class="reserveItems">
				<span class="phone">
					<strong>전화예약</strong>
					<a href="tel:024037585">02-403-7585</a>
				</span>
				<span class="btn"><a href="/info/info05.html" class="btnL btnLo">온라인예약</a></span>
			</p>

		</div>

	</div>
	<? include_once $GP -> INC_WWW . '/footer.php'; ?>
</div>
</body>
</html>
