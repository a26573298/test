<?php

$c = glob('evil'.DIRECTORY_SEPARATOR.'*');
$cc = [];
foreach( $c as $ccc  ){
	$yahoo = explode("evil".DIRECTORY_SEPARATOR, $ccc) ;
	array_push( $cc ,$yahoo[1] );
}

$a = glob('evil'.DIRECTORY_SEPARATOR.'*');
$aa = [];
$aaa1 = [];
//glob($a.DIRECTORY_SEPARATOR.'*');

foreach ($a as $aaa){
	
 			// 處理去除 (evil/)路徑
 			$str_sec = explode("evil".DIRECTORY_SEPARATOR,$aaa);
 				// 印出連結 引用下方 test function()

			//////////以下抓 更新時間 和 New
			//抓資料 
	 		//$bbb = max(glob($aaa.DIRECTORY_SEPARATOR.'*'));

	 		
	 		if( empty( glob($aaa.DIRECTORY_SEPARATOR.'*')) ){
	 			$bbb = "";
	 		}else{
	 			$bbb = max(glob($aaa.DIRECTORY_SEPARATOR.'*'));
	 		}

			//目前時間
			$datetime = date ('Y-m-d H:i:s');

			//資料夾修改時間
			$datetime1 = date('Y-m-d H:i:s', filemtime($bbb));

			//判斷三天內的視為新出漫畫 (目前時間和資料夾修改時間比對)
			if (floor((strtotime($datetime)-strtotime($datetime1))/3600/24) < 3)
			{
				
				array_push( $aa, date( 'Y-m-d H:i:s',filemtime($bbb))  );
				array_push( $aaa1, " New!!" );

			}else{

				array_push( $aa , "<br><br>");
				array_push( $aaa1, "<br><br>");

			}
							 
	 	}

//撈圖片
$h = glob('imgs'.DIRECTORY_SEPARATOR.'*');
$hh = [];
foreach( $h as $hhh  ){
	$asdff = explode("imgs".DIRECTORY_SEPARATOR, $hhh);
	array_push( $hh ,$asdff[1] );
}



$x = [ glob('evil'.DIRECTORY_SEPARATOR.'*'), $cc, $aa, $hh, $aaa1 ];


print json_encode($x);


 	/**
  		//標題
 		print'<center><H1><font class = "formatfirst" Color = "blue">二維數據資料集</font></center>';

 		//取得路徑下的目錄
 		$a = glob('evil'.DIRECTORY_SEPARATOR.'*');

 		print "<div class = 'container' ><fieldset><legend><b>Two-dimensional data</legend><br>";
 		
 		
 		foreach ($a as $aaa){
 			// 處理去除 (evil/)路徑
 			$str_sec = explode("evil".DIRECTORY_SEPARATOR,$aaa);
 				// 印出連結 引用下方 test function()
 			print test($str_sec[1], $aaa);

			//////////以下抓 更新時間 和 New
			//抓資料 
	 		$bbb = max(glob($aaa.DIRECTORY_SEPARATOR.'*'));

			//目前時間
			$datetime = date ('Y-m-d H:i:s');

			//資料夾修改時間
			$datetime1 = date('Y-m-d H:i:s', filemtime($bbb));

			//判斷三天內的視為新出漫畫 (目前時間和資料夾修改時間比對)
			if (floor((strtotime($datetime)-strtotime($datetime1))/3600/24) < 3)
			{
				print "<th>&nbsp".date('Y-m-d H:i:s',filemtime($bbb))."</th><th style='color:red;' ><i>&nbspNEW!!</i></th> ";

			}else{
				print"";

			}
							 
	 	}

 		print "</fieldset><div>";


 		#evil\OnePice
	 	function test($m, $j){
	 		print"<table border = '0'>
	 			    <th>

		 			     <form action='link1.php' method='POST'  name='".$m."' >

							<input type='hidden' value='".$j."' name='action' />
								<a href='javascript:document.".$m.".submit()'>
									<img src= 'yap.png' height='20' width='20'>".$m."</a>
						 </form>

				    </th>";

 		}
print (json_encode($a));
 		**/
?>