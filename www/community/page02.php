<?php
	include_once "../inc/head.php";
?>
<style>
	th,
	td {font-size:1.4rem !important}
	th *,
	td * {font-size:1.4rem !important}
	.tableType-01.consended th, .tableType-01.consended td {font-size:1.4rem !important}
	ul.dotted-list-square>li .btn-xxs {
		display: inline-block;
		margin: 0 5px;
		padding: 0 8px;
		color: #333;
		border: 1px solid #ddd;
	}
	.well-panel .contain.text-dark {
		padding:20px 40px;
		background-image: url(/resource/images/import.png);
		background-repeat: no-repeat;
		background-position: 17px 30px;
	}
	.dss-section .display {
		padding:0;
	}
	@media screen and (max-width:1200px){
		.dss-section {
			padding:0 30px;
			box-sizing: border-box;
		}
	}
	@media screen and (max-width:768px){
		ul.round-list b {display:block;}
		.tableType-01.consended th, .tableType-01.consended td,
		.tableType-01 td, .tableType-01 th {font-size:1.4rem !important}
	}
</style>
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
				<h3 class="page-tit">
					대리처방 안내
					<small><span>vicarious prescription</span></small>
				</h3>
				<div id="article" class="dss">
					<!-- 내용 START -->
					<div class="dss-section dss-offset-xs">
						<div class="display">
							<h4 class="dss-title ring text-dark">대리처방 요건</h4>
							<div class="well-panel">
								<div class="contain text-dark">
									<strong>아래 두 가지 경우 중 하나에 해당할 경우 대리처방이 가능합니다.</strong><br>
									※ 관련법령 : 의료법 제17조의2, 의료법 시행령 제 10조의 2, 의료법 시행규칙 제 11조의 2
								</div>
							</div>
							<ul class="round-list">
								<li>
									<span>경우 1</span>
									<b>환자의 의식이 없는 경우</b>
								</li>
								<li>
									<span>경우 2</span>
									<b>① 환자의 거동이 현저히 곤란하고  <br class="mb-show">② 같은 질환에 대하여 진료를 받아오면서 <br class="mb-show">③ 오랜 기간 같은 처방이 이루어지는 경우</b>
								</li>
							</ul>
							<p>
								사회적 거동이 현저히 곤란한 자(교정시설 수용, 군복무, 정신질환 등의 사유로 의료기관 방문이 곤란하거나 내원을 거부하는 자) 포함<br>
								다만, 처방 의료인의 의학적 판단에 따라 안정성을 인정하는 경우만 대리처방 가능하며, <br class="mb-show"><span class="text-point" style="text-decoration: underline;text-underline-position: under;">의료인은 판단에 따라 대리처방을 거절할 수 있음.</span>
							</p>
						</div>
					</div>
					<div class="dss-section dss-offset-xs">
						<div class="display">
							<h4 class="dss-title ring text-dark">대리처방이 가능한 보호자 등 (대리수령자)의 범위</h4>
							<ul>
								<li>① 직계존·비속(부모 및 자녀)</li>
								<li>② 배우자 및 배우자의 직계존속(배우자의 부모 등)</li>
								<li>③ 형제·자매</li>
								<li>④ 직계비속의 배우자(사위, 며느리)</li>
								<li>⑤ 노인복지법 상 노인의료복지시설(노인요양시설, 노인요양공동생활가정) 종사자</li>
								<li>⑥ 그 밖에 보건복지부장관이 인정하는 사람(교정시설 직원, 장애인복지법에 따른 장애인거주시설 종사자 등)</li>
							</ul>
						</div>
					</div>

					<div class="dss-section dss-offset-xs">
						<div class="display">
							<h4 class="dss-title ring text-dark">구비서류</h4>
							<div class="well-panel">
								<div class="contain text-dark">
									<strong>다음의 서류를 모두 구비하여야 합니다.</strong>
								</div>
							</div>
							<br>
							<div class="tableType-01 pink">
								<table>
									<thead>
										<tr>
											<th>
												① 환자와 보호자 등 (대리수령자)의<br class="mb-hide">
												신분증(사본도 가능) 제시
											</th>
											<th>
												② 관계를 증명할 수 있는 <br class="mb-show">서류 제시
											</th>
											<th>
												③처방전 대리 수령 신청서 제출<br class="mb-hide">
												(환자 또는 보호자 등 모두 작성 가능)
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>
															환자가 17세 미만으로 ‘주민등록법’ 제24조 제1항에 따른<br class="mb-hide">
															주민등록증이 발급되지 아니한 경우에는 제외
														</p>
													</li>
												</ul>
											</td>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>(친족관계) 가족관계증명서, 주민등록표 등본 등</p>
													</li>
													<li>
														<p>(노인의료복지시설 종사자) 재직증명서 등</p>
													</li>
												</ul>
											</td>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>의료법 시행규칙 제8호의2서식<a href="/public/files/처방전_대리_수령_신청서.pdf" class="btn-xxs">다운로드</a></p>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<br><br>
					<!-- 내용 END -->
				</div>
			</div>
		</div>
		<?php include_once "../inc/footer.php"; ?>

	</div>
</body>

</html>