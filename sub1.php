<?
    include_once "sub_head.php";
?>
<body>
    <div class="page-wrap">
<?
    include_once "sub_header.php";
?>        
        <div class="content sub">
			<div class="sub-wrap">
				<div class="inner">
					<div class="step-area _1">
						<!-- <div class="step-num _1"> -->
							<img src="./images/sub_step1_icon.png" alt="">
						<!-- </div> -->
						<!-- <div class="step-rail"></div> -->
					</div>
					<div class="title-area _1">
						<img src="./images/sub_step1_title.png" alt="">
					</div>
					<div class="video-area" id="video-area">
						<div id="player_area">
							<!-- <img src="./images/sub_video_sample.png" alt=""> -->
							<!-- <iframe allowfullscreen="1" style="width:100%; height: 165px;"src="https://www.youtube.com/embed/sarZNWn77GE?controls=0&loop=1&playlist=sarZNWn77GE&modestbranding=1&showinfo=0&wmode=opaque&enablejsapi=1&rel=0&autoplay=1" frameborder="0" id="ytplayer" class="ytplayer"></iframe> -->
						</div>
					</div>
					<div class="btn-area _1">
                        <button type="button" id="next_btn" onclick="alert('영상 재생 후 15초 뒤에 다음단계로 넘어가실 수 있습니다.')">
							<img src="./images/sub_step1_before_btn.png" alt="">
                        </button>
                        <div class="balloon">
                            <img src="./images/sub1_message_balloon.png" alt="">
                        </div>
					</div>
				</div>
			</div>
			<div class="footer-wrap">
				<div class="copyright">
					<img src="./images/sub_footer.png" alt="">
				</div>
			</div>
        </div>
    </div>
    <script>
    // $("document").ready(function(){
    //     var yt_width = $(".video-area").width();
    //     var yt_height = ($(".video-area").width() / 16) * 9;
    //     $("#ytplayer").width(yt_width);
    //     $("#ytplayer").height(yt_height);
    // });
    	// 유튜브 api 재생 클릭시 이벤트 설정
	var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    // if ($(window).width() < 1040)
    // {
        var yt_width = $(".video-area").width();
        var yt_height = Math.round((yt_width / 16) * 9);
    // }else{
    //     var yt_width = '1040';
    //     var yt_height = '582';
    // }
// console.log(yt_width);
// console.log(yt_height);
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player_area', {
            height: yt_height,
            width: yt_width,
            videoId: 'sarZNWn77GE',
            events: {
                // 'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    var play_flag = 0;
    function onPlayerStateChange(event) {
        if (event.data == 1)
        {
            if (play_flag == 0)
            {
                console.log("1");
                $(".balloon").fadeOut("fast");
                setTimeout(() => {
                    // $("#next_btn").show();
//                    $("#next_btn").css("background","url(./images/sub_step1_btn.png)");
//                    $("#next_btn").css("background","url(./images/sub_step1_btn.png)");
					$("#next_btn").find('img').attr('src', './images/sub_step1_btn.png');
                    $("#next_btn").attr("onclick","nextPage(2)");
                }, 15000);
            }
        }else if (event.data == 2){
            play_flag = 1;
            console.log("2");
        }
    }

    </script>
</body>
</html>