<?
	include_once($GP -> CLS."class.hastag.php");
	$C_hastag 	= new hastag;
	
	$tc_cate = $_GET['tc_cate'];	

	$args = array();
	$args['tc_cate'] = $tc_cate;	
	$h_data = "";
	$h_data = $C_hastag -> Has_Main_List($args);
?>
			<div class="search-tag">
				<div class="inner">
					<div class="tag-search">
					<form id="search_form" name="search_form" method="get" action="?">
                        <input type="hidden" name="tc_cate" id="tc_cate" value="<?=$tc_cate?>" />                        				
                        <input type="text" placeholder="궁금하신 점을 검색어를 통해 찾아보세요." name="search_content" id="search_content" value="<?=$_GET['search_content']?>">
                        <button type="button" id="search_submit">검색</button>
                    </form>					
					</div>
					<div class="tag">
					<?php					
						$arr_tmp = explode('#',$h_data[0]['tc_hashtag']);							
						for ($j=1; $j<count($arr_tmp); $j++ ) {										
					?>
						<a href="/contents/con_list.php?tc_cate=<?=$tc_cate?>&search_content=<?=$arr_tmp[$j]?>"><span><?=$arr_tmp[$j]?></span></a>
					<? } ?>					
					</div>
				</div>
			</div>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#search_submit').click(function(){
					$('#search_form').submit();
					return false;
				});
			});
			</script>