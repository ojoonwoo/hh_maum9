<?php
	// 설정파일
	include_once "../config.php";
/*
	if (isset($_SESSION['ss_mb_id']) == false)
	{
		//header('Location: index.php');
		echo "<script>location.href='index.php'</script>";
		exit;
	}
*/
	include "./head.php";

?>

  <div id="page-wrapper">
    <div class="container-fluid">
    <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">캠페인 아웃링크 클릭 수 PC / Mobile</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-6">
          <div class="table-responsive">
            <!-- 필리핀 -->
            <div id="daily_applicant_count_div1" style="display:block">
              <table class="table table-hover">
                <thead>
                  <tr><th>날짜</th><th>유입매체</th><th>더페이스샵 홈페이지</th><th>더페이스샵 상세페이지</th><th>Total</th></tr>
                </thead>
                <tbody>
<?php
	$daily_date_query	= "SELECT outlink_date FROM ".$_gl['outlink_info_table']." Group by substr(outlink_date,1,10) ORDER BY outlink_date DESC";
	$date_res			= mysqli_query($my_db, $daily_date_query);
	while($date_daily_data = mysqli_fetch_array($date_res))
	{
		$daily_date		= substr($date_daily_data['outlink_date'],0,10);
		$media_query	= "SELECT outlink_media, COUNT( outlink_media ) media_cnt FROM ".$_gl['outlink_info_table']." WHERE 1 AND outlink_date LIKE  '%".$daily_date."%' GROUP BY outlink_media";
		$media_res		= mysqli_query($my_db, $media_query);

		unset($media_name);
		unset($media_cnt);
		unset($pc_cnt);
		unset($mobile_cnt);
		unset($daily_unique_outlink_count);
		$total_media_cnt = 0;
		$total_mobile_cnt = 0;
		$total_pc_cnt = 0;
		$daily_unique_outlink_query = "SELECT * FROM ".$_gl['outlink_info_table']." WHERE 1 AND outlink_date LIKE '%".$daily_date."%' GROUP BY outlink_ipaddr";
		$daily_unique_outlink_res = mysqli_query($my_db, $daily_unique_outlink_query);
		$daily_unique_outlink_count = mysqli_num_rows($daily_unique_outlink_res);
		while ($media_daily_data = mysqli_fetch_array($media_res))
		{
			$media_name[]	= $media_daily_data['outlink_media'];
			$media_cnt[]	= $media_daily_data['media_cnt'];
			$home_query		= "SELECT * FROM ".$_gl['outlink_info_table']." WHERE 1 AND outlink_date LIKE  '%".$daily_date."%' AND outlink_media='".$media_daily_data['outlink_media']."' AND outlink_name='homePage'";
			$home_count		= mysqli_num_rows(mysqli_query($my_db, $home_query));
			$detail_query	= "SELECT * FROM ".$_gl['outlink_info_table']." WHERE 1 AND outlink_date LIKE  '%".$daily_date."%' AND outlink_media='".$media_daily_data['outlink_media']."' AND outlink_name='detailPage'";
			$detail_count	= mysqli_num_rows(mysqli_query($my_db, $detail_query));
			$home_cnt[]		= $home_count;
			$detail_cnt[]	= $detail_count;


		}
		$rowspan_cnt =  count($media_name);
		$i = 0;
		foreach($media_name as $key => $val)
		{
?>
                  <tr>
<?
			if ($i == 0)
			{
?>
                    <td rowspan="<?=$rowspan_cnt?>"><?php echo $daily_date?></td>
<?
			}
?>
                    <td><?=$val?></td>
                    <td><?=number_format($home_cnt[$i])?></td>
                    <td><?=number_format($detail_cnt[$i])?></td>
                    <td><?=number_format($media_cnt[$i])?></td>
                  </tr>
<?php
			$total_media_cnt += $media_cnt[$i];
			$total_mobile_cnt += $mobile_cnt[$i];
			$total_pc_cnt += $pc_cnt[$i];
			$i++;
		}
?>
                  <tr bgcolor="skyblue">
                    <td colspan="2">합계</td>
                    <td><?php echo number_format($total_pc_cnt)?></td>
                    <td><?php echo number_format($total_mobile_cnt)?></td>
                    <td><?php echo number_format($total_media_cnt)." / IP기준 유니크 : ".$daily_unique_outlink_count ?></td>
                  </tr>

<?
	}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
</body>

</html>