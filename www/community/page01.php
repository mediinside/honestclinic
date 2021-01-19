<?php
	include_once "../inc/head.php";
?>
<style>
	th,
	td {font-size:1.4rem !important}
	th *,
	td * {font-size:1.4rem !important}
	.tableType-01.consended th, .tableType-01.consended td {font-size:1.4rem !important}
	@media screen and (max-width:768px){
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
					증명서 발급 안내
					<small><span>CERTIFICATION</span></small>
				</h3>
				<div id="article" class="dss">
					<!-- 내용 START -->
					<div class="dss-section">
						<div class="display">
							<div class="board-header">
								<p>
									수원에스안과는 의료법 규정에 따라 각종 진료 증명서 및 진단서를 발급하며,<br>
									의료법 제21조 시행규칙 제 13조2에 의거하여 환자의 개인정보 및 진단·치료 내용이 담긴<br>
									의무기록문서가 외부로 유출되지 않도록 엄격히 관리감독하고 있습니다.
								</p>
							</div>
							<br>
							<div class="well-panel text-center">
								<div class="contain text-dark">
									<strong>
										&nbsp;① 환자 본인일 경우 <span class="text-point">신분증을 확인한 후 발급</span>&nbsp;
									</strong>
									<strong>
										&nbsp;② 대리인일 경우 <span class="text-point">위임장 및 동의서를 확인한 후 발급</span>&nbsp;
									</strong>
								</div>
							</div>
						</div>
					</div>
					<div class="dss-section dss-offset-xs">
						<div class="display">
							<h4 class="dss-title ring text-dark">환자의 동의를 받을 수 있는 경우</h4>
							<div class="tableType-01 pink">
								<table>
									<thead>
										<tr>
											<th style="width:20%">구분</th>
											<th>구비서류</th>
											<th>비고</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th align="center">환자 본인</th>
											<td>환자 신분증(여권, 운전면허증, 주민등록증 등)</td>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>
															<span class="text-point">만 10세 ~ 17세 미만자의 경우</span><br>
															(학생증, 가족관계증명서, 주민등록 초본 등)
														</p>
													</li>
													<li>
														<p>
															<span class="text-point">의사능력이 없는 미성년의 경우</span><br>
															(법정대리인 신분증, 법정대리인임을 확인할 수 있는 서류)
														</p>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<th align="center">
												친족 (배우자, 직계존속
												비속, 배우자의 직계존속)
											</th>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>환자 신분증 사본</p>
													</li>
													<li>
														<p>신청인 신분증</p>
													</li>
													<li>
														<p>환자가 자필 서명한 동의서&nbsp;&nbsp;<a href="/public/files/환자가_자필_서명한_동의서.pdf" class="btn-xxs">다운로드</a></p>
													</li>
													<li>
														<p>
															친족 관계임을 확인할 수 있는 서류<br>
															(주민등록번호 모두 표기, 가족관계서류는 환자 또는 신청인 기준으로 발급, 건강보험증 확인
															불가능)
														</p>
													</li>
												</ul>
											</td>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>
															<span class="text-point">만 14세 미만자가 친족으로 신청시</span> 사진이 붙은 신분증을 반드시 제출
														</p>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<th align="center">
												환자 대리인<br>
												(형제 · 자매, 보험회사 등)
											</th>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>환자 신분증 사본</p>
													</li>
													<li>
														<p>신청인 신분증</p>
													</li>
													<li>
														<p>환자가 자필 서명한 동의서&nbsp;&nbsp;<a href="/public/files/환자가_자필_서명한_동의서.pdf" class="btn-xxs">다운로드</a></p>
													</li>
													<li>
														<p>환자가 자필 서명한 위임장&nbsp;&nbsp;<a href="/public/files/환자가_자필_서명한_위임장.pdf" class="btn-xxs">다운로드</a></p>
													</li>
												</ul>
											</td>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>
															<span class="text-point">만 14세 미만자가 대리인으로 신청시</span> 사진이 붙은 신분증을 반드시 제출
														</p>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<ul class="dash-list-default">
								<li>
									재위임 가능 : 환자의 동의를 받은 경우 재위임 가능<br>
									(재위임 방법 : 동의서 (또는 위임장)에 별도로 재위임할 수 있다는 내용을 기재하여야 하며, 만 14세 미만 환자의 친족이 사본발급신청권을 재위임한 경우 그 동의는 환자의 법정대리인이
									하여야 함)
								</li>
								<li>
									친족이 없음을 증명하는서류<br>
									1. 환자 기준 가족관계 증명서(주민등록번호 모두표기)<br>
									2. 환자의 부 또는모 기준 가족관계 증명서(주민등록번호 모두 표기)
								</li>
							</ul>
						</div>
					</div>
					<div class="dss-section dss-offset-xs">
						<div class="display">
							<h4 class="dss-title ring text-dark">환자의 동의를 받을 수 없는 경우 - 친족 및 형제 자매(친족부재시)</h4>
							<div class="tableType-01 pink">
								<table>
									<thead>
										<tr>
											<th width="20%">신청인</th>
											<th>구비서류</th>
											<th>비고</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th rowspan="3" align="center">
												환자 사망, 의식불명 또는
												중증의 질환 - 부상으로
												자필서명을 할 수 없는 경우,
												행방불명, 의사무능력자
											</th>
											<td>신청인 신분증</td>
											<td rowspan="3">
												<ul class="dotted-list-square">
													<li>
														<p>환자의 친족 또는 형제 - 자매(친족부재시)가 대리인 선임 가능</p>
													</li>
													<li>
														<p>
															대리인 선임시 추가 구비서류<br>
															1) 진료기록 열람 및 사본발급 위임장&nbsp;&nbsp;<a href="/public/files/진료기록열람_및_사본발급을_위한_확인서.pdf" class="btn-xxs">다운로드</a><br>
															2) 대리인 신분증
														</p>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>
															가족관계증명서, 주민등록표 등본 및 친족 관계임을 확인할 수
															있는 서류<br>
															*형제 - 자매(친족부재시) : 친족이 없음을 증명하는 서류
														</p>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<ul class="dotted-list-square">
													<li>
														<p>사망사실 확인서류(사망진단서 등)</p>
													</li>
													<li>
														<p>의식불명, 중증 질환, 부상 등으로 자필서명을 할 수 없음을 확인할 수 있는 진단서</p>
													</li>
													<li>
														<p>행방불명 확인서류</p>
													</li>
													<li>
														<p>의사무능력자 확인 진단서</p>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="dss-section dss-offset-xs">
						<div class="display">
							<div class="tableType-01 pink consended text-center">
								<table>
									<colgroup>
										<col style="width:7%">
										<col style="width:15%">
										<col>
										<col style="width:15%">
									</colgroup>
									<thead>
										<tr>
											<th>No.</th>
											<th>항목</th>
											<th>기준</th>
											<th>상한금액(원)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>일반진단서</td>
											<td class="title"><b>의료법 시행규칙 [별지 제5호2서식]</b>에 따라 의사가 진찰하거나 검사한 결과를 종합하여 작성한 진단서를 말함.</td>
											<td>20,000</td>
										</tr>
										<tr>
											<td>2</td>
											<td>진료소견서</td>
											<td class="title">의사가 진찰하거나 검사한 결과를 종합하여 작성한 소견서를 말함.</td>
											<td>10,000</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												진료확인서<br>
												초진기록차트<br>
												수술확인서<br>
												수술기록지
											</td>
											<td class="title">
												환자의 인적사항(성명, 성별, 생년월일 등)과 특정 진료내역을 기재하여, <b>특정 진료사실에 대하여 행정적으로 발급하는 확인서를 말함.</b><br>
												<b>(방사선치료, 검사 및 의약품 등)</b>
											</td>
											<td>3,000</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												근로능력평가용<br>
												진단서
											</td>
											<td class="title">
												<b>국민기초생활보장법 시행규칙 제 35조 [별지 제6호 서식]</b>에 따라 의사가 근로능력 평가를 위해 발급하는 진단서를 말함.
											</td>
											<td>10,000</td>
										</tr>
										<tr>
											<td>5</td>
											<td>입퇴원확인서</td>
											<td class="title">
												환자의 인적사항(성명, 성별, 생년월일 등)과 입퇴원일을 기재하여 <b>입원사실에 대하여 행정적으로 발급하는 확인서를 말함.</b><br>
												<b>(입원사실 증명서와 동일)</b>
											</td>
											<td>3,000</td>
										</tr>
										<tr>
											<td>6</td>
											<td>통원확인서</td>
											<td class="title">환자의 인적사항(성명, 성별, 생년월일 등)과 외래 진료일을 기재하여, <b>외래진료사실에 대해 행정적으로 발급하는 확인서를 말함.</b></td>
											<td>3,000</td>
										</tr>
										<tr>
											<td>7</td>
											<td>입원사실증명서</td>
											<td class="title">환자의 인적사항과 입원일이 기재되어 있는 확인서로 입퇴원확인서 금액기준과 동일함.</td>
											<td>3,000</td>
										</tr>
										<tr>
											<td>8</td>
											<td>영문 일반진단서</td>
											<td class="title"><b>의료법 시행규칙 [별지 제5호 2서식]</b>에 따라 의사가 영문으로 작성한 ‘일반 진단서’를 말함.</td>
											<td>20,000</td>
										</tr>
										<tr>
											<td>9</td>
											<td>병무용 진단서</td>
											<td class="title">
												<b>병역법 시행규칙 [별지 제106호의 서식]</b>에 따라 군복무 등을 위해 의사가 진찰하거나 검사한
												결과를 종합하여 작성한 진단서를 말함.
											</td>
											<td>20,000</td>
										</tr>
										<tr>
											<td>10</td>
											<td>
												국민연금<br>
												장애심사용 진단서
											</td>
											<td class="title">
												<b>보건복지부고시「국민연금장애심사규정」 [별지 제1호 서식]</b>에 따라 국민연금수혜를 목적으로 의사가 장애의 정도를
												종합하여 작성한 진단서를 말함.
											</td>
											<td>15,000</td>
										</tr>
										<tr>
											<td>11</td>
											<td>
												상해진단서<br>
												(3주 미만)
											</td>
											<td class="title"><b>의료법 시행규칙 [별지 제5호의 3서식]</b>에 따라 질병의 원인이 상해(傷害)로 상해진단기간이 3주 미만일 경우의 진단서를 말함.</td>
											<td>100,000</td>
										</tr>
										<tr>
											<td>12</td>
											<td>
												상해진단서<br>
												(3주 이상)
											</td>
											<td class="title">
												<b>의료법 시행규칙 [별지 제5호의 3서식]</b>에 따라 질병의 원인이 상해(傷害)로
												상해진단기간이 3주 이상일 경우의 진단서를 말함.
											</td>
											<td>150,000</td>
										</tr>
										<tr>
											<td>13</td>
											<td>장애인증명서</td>
											<td class="title"><b>소득세법 시행규칙 [별지 제38호 서식]</b>에 따라 장애인공제 대상임을 나타내는 증명서를 말함.</td>
											<td>1,000</td>
										</tr>
										<tr>
											<td>14</td>
											<td>
												장애진단서<br>
												(신체적장애)
											</td>
											<td class="title">
												<b>장애인복지법 시행규칙 [별지 제3호의 서식]</b>에 따라 의사가 장애에 대한 결과를 종합하여 작성한 진단서를 말함.<br>
												*보건복지부고시‘장애등급판정기준’에 따른 신체적 장애
											</td>
											<td>15,000</td>
										</tr>
										<tr>
											<td>15</td>
											<td>진료기록사본</td>
											<td class="title">
												<b>의료법 시행규칙 제15조 제1항에 따른 진료기록부 등을 복사하는 경우를 말함.</b><br>
												<b>(1매당 금액)</b>
											</td>
											<td>1,000</td>
										</tr>
										<tr>
											<td>16</td>
											<td>
												향후진료비추정서<br>
												(천만원 미만)
											</td>
											<td class="title">계속적인 진료가 요구되는 환자에게 향후 발생이 예상되는 치료비가 1천만원 미만일 경우 발급하는 증명서를 말함.</td>
											<td>50,000</td>
										</tr>
										<tr>
											<td>17</td>
											<td>
												제증명서<br>
												사본
											</td>
											<td class="title">
												기존의 제증명서를 <b>복사(재발급)하는 경우를 말함.</b> <br>
												<b>(동시에 동일 제증명서를 여러통 발급받는 경우 최초 1통 이외 추가로 발급받는 제증명서도 사본으로 본다.)</b>
											</td>
											<td>1,000</td>
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