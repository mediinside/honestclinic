<?php
	include_once "../inc/head.php";
?>
<body>
	<div id="wrap" class="sub">
		<?php include_once "../inc/header.php"; ?>
		<?php include_once "../inc/quick.php"; ?>
		<div id="sub-bnnr" class="num5">
			<img src="/resource/images/sub-bnnr05.png" alt="">
			<h2>
				<span>Community</span>
				<small>여성의 건강을 위해 어니스트가 늘 함께합니다.</small>
			</h2>
		</div>
		<?php include_once "../inc/location.php"; ?>
		<div id="container" class="sub">
			<div class="inner2">
				<h3 class="page-tit">공지사항</h3>

				<div class="tableType-01 pink consended">
					<table width="100%" class="writeType">
						<colgroup>
							<col width="15%">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th scope="row">제 목</th>
								<td><input type="text" class="txtInput" style="width:100%;" id="jb_title" name="jb_title"></td>
							</tr>
							<tr>
								<th scope="row">구분</th>
								<td>
									<select name="jb_type" id="jb_type" class="txtInput">
										<option value="A">일반형</option>
										<option value="B">링크형</option>
									</select>
								</td>
							</tr>
							<tr>
								<th scope="row">작성자</th>
								<td>
									<input type="text" class="txtInput" style="width:100%;" id="jb_name" value="메디인사이드" name="jb_name">
								</td>
							</tr>
							<tr>
								<th scope="row">공개여부</th>
								<td>
									<span class="chkBox">
										<label class="noti"><input type="checkbox" value="Y" id="jb_notice_check" name="jb_notice_check"
												class="chk"> 공지</label>
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row">이메일</th>
								<td>
									<input type="text" class="txtInput" id="jb_email" name="jb_email" value="info@mediinside.co.kr"
										style="width:100%;">
								</td>
							</tr>
							<input type="hidden" name="jb_password" value="095fe6e6c5ca188aac11f665af92cd5f1610521365">
							<tr>
								<th scope="row" class="viewLink">출처</th>
								<td>
									<input type="text" class="txtInput" style="width:100%;" id="jb_etc5" name="jb_etc5">
								</td>
							</tr>
							<tr>
								<th scope="row" class="viewLink">링크</th>
								<td>
									<input type="text" class="txtInput" style="width:100%;" id="jb_homepage" name="jb_homepage">
								</td>
							</tr>
							<tr>
								<th scope="row" class="viewLink">작성날짜</th>
								<td>
									<input type="text" name="jb_etc6" id="jb_etc6" value="" class="txtInput hasDatepicker"
										style="width:30%;">
								</td>
							</tr>
							<tr>
								<th scope="row" class="viewFile"><span class="icon">첨부파일</span></th>
								<td>
									<ul>
										<li>
											<input type="file" name="jb_file[]" class="fileInput txtInput">
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th scope="row" class="alignTop">본문</th>
								<td>
									<!-- Text Editor 영역 -->
									<textarea name="jb_content" id="jb_content" style="display:none"></textarea>
									<textarea name="ir1" id="ir1"
										style="width:100%; height:300px; min-width:280px; display:none;"></textarea><iframe
										frameborder="0" scrolling="no" style="width: 100%; height: 349px;"
										src="/bbs/smarteditor/SmartEditor2Skin.html"></iframe>
									<!-- // Text Editor 영역 끝 -->
								</td>
							</tr>
						</tbody>
					</table>
					<div id="btn-box" class="center">
						<a href="#none" class="btn bg-pink" id="img_submit">확인</a>
						<a href="javascript:history.go(-1);" class="btn bg-brown">취소</a>
					</div>
				</div>
			</div>
		</div>
		<?php include_once "../inc/footer.php"; ?>

	</div>
</body>

</html>