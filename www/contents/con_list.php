<?
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	include_once $GP -> INC_WWW . '/head.php'; 
	include_once($GP -> CLS."class.content.php");
	$C_Content = new Content();

	$tc_cate = $_GET['tc_cate'];
	$search_content = $_GET['search_content'];

	$args = '';
	$args['tc_cate'] = $tc_cate;
	$args['search_content'] = $search_content;
	$data = $C_Content -> Con_Main_List($args);

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
			<h3 class="total">총 <span><?=count($data)?></span>건의 게시물이 있습니다.</h3>
			<div class="contItems">
				<ul>
				<?
					if(count($data) > 0 ) {
						for($i=0; $i<count($data); $i++) {
							$tc_idx = $data[$i]['tc_idx'];
							$tc_cate = $data[$i]['tc_cate'];
							$tc_title = $data[$i]['tc_title'];			
							$tc_file_code = $data[$i]['tc_file_code'];
							$tc_content = $data[$i]['tc_content'];
							$tc_auth = $data[$i]['tc_auth'];
							$tc_hit = $data[$i]['tc_hit'];
							$tc_ori_hit = $data[$i]['tc_ori_hit'];
                            $tc_login = $data[$i]['tc_login'];
							$tc_regdate = $data[$i]['tc_regdate'];
							$tc_regdate	= date("Y-m-d", strtotime($tc_regdate));		
							$tc_summary = $data[$i]['tc_summary'];
							$tc_summary  = strip_tags($C_Func->dec_contents_edit($tc_summary));
							$tc_summary  = $C_Func->strcut_utf8($tc_summary, 150, true, "...");
							
							$img_src = "";
							if($tc_file_code != '') {
								$img_src = "<img src='" . $GP -> UP_CONTENT_URL . $tc_file_code . "' alt='' />";
							}else{
								$img_src = "<img src='/images/no_image.jpg' alt='' />";
							}

                            $re_url = "/contents/con_view.html?tc_idx=$tc_idx";
							if($tc_login =="Y" && $_SESSION['suserid'] == ''){
								$str .= "	
								<li><a href=\"javascript:alert('로그인을 해주세요.')\"; onclick =\" location.href='/member/login.html?re_url=".$re_url."'  \";>
									<span class='thumb'>" . $img_src ."</span>
									<p class='tit'>" .  $tc_title . "</p>
									<p class='txt'>" . $tc_summary . "</p>
									<p class='info'>
										<strong>" . $GP->PAIN_TYPE['$tc_cate'] .  "</strong>
										<span class='reply'>" . $tc_hit . "</span>
									</p>
								</a></li>
							";	
                            }else{
                           		$str .= "	
								<li><a href='/contents/con_view.html?tc_idx=$tc_idx'>
									<span class='thumb'>" . $img_src ."</span>
									<p class='tit'>" .  $tc_title . "</p>
									<p class='txt'>" . $tc_summary . "</p>
									<p class='info'>
										<strong>" . $GP->PAIN_TYPE['$tc_cate'] .  "</strong>
										<span class='reply'>" . $tc_hit . "</span>
									</p>
								</a></li>
							";	
                            }						
						}
						echo $str;
					}else {
						$str = "	
								<li>
									<p class='tit'>등록된 데이터가 없습니다.</p>									
								</li>
							";
					   echo $str;
					}
				?>				
			</ul>						
			<a href="#url" id="btnMore" class="more" data-totalpages="<?=$totalpages?>" data-keyword="<?=$search_keyword?>" data-key="<?=$_GET['search_key']?>">더보기</a>
			</div>
			<input type="hidden" id="tpage" name="tpage" value="<?=$totalpages?>">
			<script type="text/javascript">
				$(document).ready(function(){
					$(document).on('click','#btnMore', function(){
						var page = $(this).data('totalpages');
						var keyword = $(this).data('keyword');
						var search_key = $(this).data('key');
						var tpage = $('#tpage').val();
						var tc_cate = <?=$tc_cate?>;                           

						$.ajax({
							type: "GET",
							url: "/contents/con_search.php",
							data: { 
							page : page,
							search_key : search_key,
							search_keyword : keyword,
							tc_cate : tc_cate
							},
							dataType: "text",
							success: function(data) {                                   
							tpage--;
							if (tpage == 1) {
								$('#btnMore').hide();
							}
							$('.contItems').append(data);
							},
							error: function(xhr, status, error) { alert(error); }
						});
					});
				});
			</script>
		</div>
		<?php include_once "../inc/footer.php"; ?>

	</div>
</body>

</html>