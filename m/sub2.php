<?
    include_once "sub_head.php";
?>
	<body>
	<script type="text/javascript"> 
  var _ntp = {}; 
  _ntp.host = (('https:' == document.location.protocol) ? 'https://' : 'http://') 
  _ntp.dID = 978; 
  document.write(unescape("%3Cscript src='" + _ntp.host + "nmt.nsmartad.com/content?cid=1' type='text/javascript'%3E%3C/script%3E")); 
</script> 
<script>
 callback = function(){}
</script>

		<div class="page-wrap sub">
<?
	include_once "sub_header.php";
?>			
			<div class="content sub2 sub">
				<div class="step">
					<img src="./images/sub2_step.png" alt="">
				</div>
				<div class="title">
					<img src="./images/sub2_title.png" alt="">
				</div>
				<div class="slide-area">
					<div class="pager">
						<a href="javascript:void(0)" class="is-active">1</a>
						<a href="javascript:void(0)">2</a>
						<a href="javascript:void(0)">3</a>
						<a href="javascript:void(0)">4</a>
						<a href="javascript:void(0)">5</a>
					</div>
					<div class="slide-wrap">
						<div class="letter-paper"></div>
						<div class="text-area">
							<div class="text-line headline">
								<span>To.</span>
								<input type="text" id="msg_to" placeholder="받으시는 분">
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent1" placeholder="내용을 입력해 주세요" onkeydown="changeLine(this)">
								<span id="msg_conntent1_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent2" onkeydown="changeLine(this)">
								<span id="msg_conntent2_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent3" onkeydown="changeLine(this)">
								<span id="msg_conntent3_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent4" onkeydown="changeLine(this)">
								<span id="msg_conntent4_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line headline">
								<span>From.</span>
								<input type="text" id="msg_from" placeholder="보내시는 분">
							</div>
						</div>
						<!-- <div class="bot _0"> -->
						<div class="bot">
							<span></span>
						</div>
						<div class="slider">
<?
	$i = 1;
	$num_arr	= [1,2,3,4,5];
	shuffle($num_arr);
?>
							<div class="slide" id="<?=$num_arr[0]?>">
								<img src="./images/sub2_letter_bg<?=$num_arr[0]?>.jpg" alt="">
							</div>
							<div class="slide" id="<?=$num_arr[1]?>">
								<img src="./images/sub2_letter_bg<?=$num_arr[1]?>.jpg" alt="">
							</div>
							<div class="slide" id="<?=$num_arr[2]?>">
								<img src="./images/sub2_letter_bg<?=$num_arr[2]?>.jpg" alt="">
							</div>
							<div class="slide" id="<?=$num_arr[3]?>">
								<img src="./images/sub2_letter_bg<?=$num_arr[3]?>.jpg" alt="">
							</div>
							<div class="slide" id="<?=$num_arr[4]?>">
								<img src="./images/sub2_letter_bg<?=$num_arr[4]?>.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn" onclick="_nto.callTrack('6453', callback());saveImageInfo()">
					<img src="./images/sub2_btn.jpg" alt="">
				</button>
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
		<script>
			var prev_bot_idx = 4;
			var realIdx = 1;
		// $('.text-area input').on('keypress', function(e) {
			// $('.text-area input').on('keydown keypress', function(e) {
			// 	var this_val 	= $(this).val();
			// 	$("#"+$(this).attr("id")+"_span").text(this_val);
			// 	console.log($("#"+$(this).attr("id")+"_span").outerWidth());
			// 	if ($("#"+$(this).attr("id")+"_span").outerWidth() > 150)
			// 	{
			// 		// 현재 인풋에서 마지막 문자 삭제
			// 		$(this).val($(this).val().slice(0, -1));
			// 		// 다음 인풋에 마지막 문자 삽입
			// 		var last_str	= this_val.substr(this_val.length - 1);
			// 		$(this).closest('.text-line').next().find('input').val(last_str);
			// 		$(this).closest('.text-line').next().find('input').focus();
			// 	}
			// })

			function changeLine(th)
			{
				var this_val 	= th.value;
				$("#"+th.id+"_span").text(this_val);
				console.log($("#"+th.id+"_span").outerWidth());
				if ($("#"+th.id+"_span").outerWidth() > 150)
				{
					// 현재 인풋에서 마지막 문자 삭제
					$("#"+th.id).val(th.value.slice(0, -1));
					// 다음 인풋에 마지막 문자 삽입
					var last_str	= this_val.substr(this_val.length - 1);
					$("#"+th.id).closest('.text-line').next().find('input').val(last_str);
					$("#"+th.id).closest('.text-line').next().find('input').focus();
				}
			}

			var headlineColorArr = ['#fa5266', '#d55143', '#376639', '#1b4375', '#dd7722'];
//			var swiper = new Swiper ('.slide-area', {
//				// Optional parameters
//				direction: 'horizontal',
//				loop: true,
//				slidesPerView: 'auto',
//				// loopFillGroupWithBlank: true,
//				spaceBetween: 22,
//				// touchAngle: 75,
//				navigation: {
//					nextEl: '.button-next',
//					prevEl: '.button-prev',
//				}
//			})
			$(document).ready(function() {
				$('.slider').slick();
			});
			$('.slider').on('afterChange', function(event, slick, currentSlide) {
				$('.pager a').removeClass('is-active');
				$('.pager a:nth-child('+(currentSlide+1)+')').addClass('is-active');
				$('.text-area .headline > span').css({
					color: headlineColorArr[currentSlide]
				});
				// realIdx = currentSlide + 1;
				realIdx		= $("div.slick-current").prop("id");
				// console.log($("div.slick-current").prop("id"));

				// if (currentSlide == 0)
				// {
				// 	if (prev_bot_idx > currentSlide)
				// 	{
				// 		if (prev_bot_idx == 4)
				// 			var prevIdx = 4;
				// 		else
				// 			var prevIdx = 1;
				// 	}else{
				// 		var prevIdx = 4;
				// 	}
				// }
				// else if (currentSlide == 4)
				// {
				// 	if (prev_bot_idx == 0)
				// 		var prevIdx = 0;
				// 	else
				// 		var prevIdx = 3;
				// }else{
				// 	if (prev_bot_idx > currentSlide)
				// 		var  prevIdx = currentSlide +1;
				// 	else
				// 		var  prevIdx = currentSlide -1;
				// }

				// prev_bot_idx = currentSlide;
				$('.slide-wrap .bot').removeClass('_1');
				$('.slide-wrap .bot').removeClass('_2');
				$('.slide-wrap .bot').removeClass('_3');
				$('.slide-wrap .bot').removeClass('_4');
				$('.slide-wrap .bot').removeClass('_5');
				$('.slide-wrap .bot').addClass('_'+realIdx);
				// $('.slide-wrap .bot').removeClass('_'+prevIdx).addClass('_'+(currentSlide));

			});
			$('.slider').on('init', function(slick) {
				realIdx = <?=$num_arr[0]?>;

				$('.slide-wrap .bot').addClass('_'+realIdx);

			});
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>