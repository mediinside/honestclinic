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

				<div class="tableType-01 pink no-border">
					<table>
						<colgroup>
							<col style="width:120px">
							<col>
							<col class="admin" style="width:180px">
							<col style="width:180px">
						</colgroup>
						<thead>
							<tr>
								<th>No</th>
								<th>제목</th>
								<th class="admin">작성자</th>
								<th>날짜</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>28</td>
								<td class="title">
									<a href="#">40주의 우주</a>
								</td>
								<td class='admin'>관**</td>
								<td class="date">2020.12.07</td>
							</tr>
							<tr>
								<td>28</td>
								<td class="title">
									<a href="#">40주의 우주</a>
								</td>
								<td class='admin'>관**</td>
								<td class="date">2020.12.07</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="search">
					<form id="search_form" name="search_form" method="get" action="?">
						<input type="hidden" name="jb_code" id="jb_code" value="10">
						<input type="hidden" name="search_key" id="search_key" value="jb_all">
						<input type="text" placeholder="검색어를 입력하세요." name="search_keyword" id="search_keyword" value="">
						<button><img src="/resource/images/search-gray.png" alt="검색" id="search_submit"></button>
					</form>
				</div>
				<div class="pagination">
					<a href="" title="처음으로 이동하기" class="btn prev">
						<span>
							<img src="/resource/images/page-all-left.png" width="100%" alt="">
						</span>
					</a>
					<a href="" title="이전으로 이동하기" class="btn prev">
						<span>
							<img src="/resource/images/page-left.png" width="100%" alt="">
						</span>
					</a>
					<strong class="btn current" title="현재 페이지">1</strong>
					<a href="" class="btn">2</a>
					<a href="" title="다음 페이지 이동하기" class="btn next">
						<span>
							<img src="/resource/images/page-right.png" width="100%" alt="" <="" span="">
						</span>
					</a>
					<a href="" title="마지막 페이지 이동하기" class="btn next">
						<span>
							<img src="/resource/images/page-all-right.png" width="100%" alt="">
						</span>
					</a>
				</div>
			</div>
		</div>
		<?php include_once "../inc/footer.php"; ?>

	</div>
</body>

</html>