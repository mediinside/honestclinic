<?php
function MobileCheck() {
    global $HTTP_USER_AGENT;
    $MobileArray  = array("iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone");

    $checkCount = 0;
        for($i=0; $i<sizeof($MobileArray); $i++){
            if(preg_match("/$MobileArray[$i]/", strtolower($HTTP_USER_AGENT))){ $checkCount++; break; }
        }
   return ($checkCount >= 1) ? "Mobile" : "PC";
   $tfc_type = MobileCheck() ;
}

?>

		<div id="bottom-bnnr">
			<img class="mb-hide" src="/resource/images/bottom-bnnr-logo.png" alt="">
			<img class="mb-show" src="/resource/images/bottom-bnnr-logo2.png" alt="">
		</div>

			<div id="counsel">
				<div class="inner">
					<div class="text">
						<div>
							<img class="mb-hide" src="/resource/images/counsel.png" alt="">
							<img class="mb-show" src="/resource/images/counsel2.png" alt="">
						</div>
						<p>
							문의사항을 남겨주시면 빠른 시간내에 <br class="mb-hide">
							상담해드립니다.
						</p>
					</div>
					<form class="contain" action="?" name="frm_ps" id="frm_ps" method="post">
					<div class="input-box">					
						<input type="hidden" id="mode" name="mode" value="PS_REG" />
						<input type="hidden" name="m" value="p" />
						<input type="hidden" name="tfc_type" value="<?=MobileCheck()?>" />
						<div class="left">
							<div class="form">
								<label>이름</label>
								<input type="text" id="tfc_name" name="tfc_name">
							</div>
							<div class="form">
								<label>연락처</label>
								<div class="phone">
									<input type="text" name="tfc_mobile1" id="tfc_mobile1">
									<span>-</span>
									<input type="text" name="tfc_mobile2" id="tfc_mobile1">
									<span>-</span>
									<input type="text" name="tfc_mobile3" id="tfc_mobile1">
								</div>
							</div>
							<div class="form check">
								<input id="chk" type="checkbox" name="agree" >
								<label for="chk">개인정보처리방침 및 사용동의</label>
							</div>
						</div>
						<div class="right">
							<div class="form">
								<label>상담내용</label>
								<div class="form-btn-box">
									<textarea name="tfc_con" id="tfc_con" cols="30" rows="4"></textarea>
									<button type="button" id="img_submit2">상담신청</button>
								</div>
							</div>
						</div>
					</div>					
				</div>
				</form>
					<script>
					$(document).ready(function(){
						$('#img_submit2').click(function(){
							if($('#tfc_name').val() == '')	{
								alert('이름을 입력해주세요');
								$('#tfc_name').focus();
								return false;
							}							
							if($('#tfc_mobile1').val() == '' || $('#tfc_mobile2').val() == '' || $('#tfc_mobile3').val() == '' )	{
								alert('연락처를 입력해주세요');
								$('#tfc_mobile1').focus();
								return false;
							}
							
							if($('input:checkbox[name="agree"]:checked').val() == undefined ) {
								alert("개인정보 취급 방침에 동의해 주세요.");
								return false;
							}
							$('#frm_ps').attr('action','/admin/phone/proc/phone_proc.php');
							$('#frm_ps').submit();
							return false;
						});
					});
				</script>
			</div>
		</div>
		<footer>
			<ul class="fnb">
				<li>
					<a href="#none">개인정보처리방침</a>
				</li>
				<li>
					<a href="#none">이용약관</a>
				</li>
				<li>
					<a href="#none">비급여수가표</a>
				</li>
				<li>
					<a href="#none">이메일주소수집거부</a>
				</li>
			</ul>
			<div class="info">
				<h1 class="logo">
					<img src="/resource/images/f-logo.png" alt="">
				</h1>
				<span>서울특별시 영등포구 국제금융로 70 미원빌딩 401호 어니스트여성의원</span><br class="mb-show">
				<span>대표 : 조혜진</span>
				<span>사업자변호 : 152-37-00025</span>
				<span>대표번호 : 02-782-7005</span>
				<p>COPYRIGHTⓒ 2017 honestclinic Copyright All Rights Reseved</p>
				<ul class="sns">
					<li>
						<a href="https://www.youtube.com/channel/UCTQBJrfHsobcq3IcVfs9RAQ?view_as=subscriber" target="_blank">
							<img src="/resource/images/g-you.png" alt="">
						</a>
					</li>
					<li>
						<a href="https://blog.naver.com/honestclinic" target="_blank">
							<img src="/resource/images/g-blog.png" alt="">
						</a>
					</li>
					<li>
						<a href="http://pf.kakao.com/_zQziu/chat" target="_blank">
							<img src="/resource/images/g-kakao.png" alt="">
						</a>
					</li>
				</ul>
			</div>
		</footer>