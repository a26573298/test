<!DOCTYPE html>
<html lang="zh-Hant" >
<head>
 <title>Two-dimensional data</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Semantic UI -->
	<link rel="stylesheet" href="\Semantic-UI-CSS-master\semantic.min.css">
	<script src="\Semantic-UI-CSS-master\semantic.min.js"></script>

</head >
<body style="margin: 2% 5% 0% 5%;" >

<?php

$aaa = $_POST["action"];
$bbb = glob($_POST["action"].DIRECTORY_SEPARATOR.'*'.DIRECTORY_SEPARATOR);


if( empty($bbb) ){
	$test = "";
}else{
	$test = max( $bbb );
}

$test1 = explode("".DIRECTORY_SEPARATOR."", $test);

?>
<div style="position: fixed;top:0px; left:50px;">
<a href='https://a26573298.github.io/test/Comic/index.php'><button class='btn btn-danger'>回首頁 </button></a><br>
<button style="font-size: 20px;" type="button" class="btn btn-link"  data-toggle="modal" data-target=".bs-example-modal-lg">觀看圖片</button>
<div class="modal fade bs-example-modal-lg" >
  <div class="modal-dialog modal-lg"  >
    <div class="modal-content" style="width:1000px;" >
    <div class="modal-body" style="margin: 2% 2% 0% 0%;"><center><table><tr>

<?php
		krsort($bbb);
		$a = 0;
		foreach( $bbb as $bbb1 ){

			if( $a < 10){

				print "<td><button class='btn btn-default' value=".$bbb1." data-toggle='modal' data-target='.bs-example-modal-lg'><b>".basename($bbb1)."</b></button></td>";

				$a++;
			}else{
				print "</tr><tr><td><button  class='btn btn-default' value=".$bbb1." data-toggle='modal' data-target='.bs-example-modal-lg'><b> ".basename($bbb1)."</b></button></td>";
				$a = 1;
			}
	
		}
?>

</table>
</div>
</div>
</div>
</div>
</div>


<center><div  id='comic' style="width:70%;"></div></center><br><br>


<script type="text/javascript">


$(function(){
	$(".btn-default").click(function(){
		$("#comic").empty();
		ComicLink( $(this).val() ); 
	});
});



		function ComicLink(a){
		$.ajax({
			url: "link2.php", 
			type: "POST",
			dataType:"json",
			data: {
				Comic :a,
			},

			success: function(response){
				// val() 切陣列
				var string = a; 
				string = string.split('/');
				var result = string[0]+"/"+string[1]+"/"+(string[2]-1)+"/";
				var result1 = string[0]+"/"+string[1]+"/"+( (parseInt(string[2])+1).toString() )+"/"; //  (parseInt(string[2])+1).toString())  parseInt轉數字運算後轉回字串


				s = "";
				s += '<br><button class="btns ui button" value="'+result+'">上一話</button>';
				// s += '<button class="ui button" id="godown">第'+string[2]+'話</button>';
				 s += '<button class="ui button" id="godown">Bottom</button>';


				if(  string[2] != "<?php print( $test1[2]); ?>"){ //判斷話數
					s += '<button class="btns ui button" value="'+result1+'">下一話</button><br><br>';
				}else{
					s += '<br><br>';
				}


				for (  c in response){
					// s += "<img src='"+response[c]+"'  style='width: 65%;'><br>";
					s += "<img src='"+response[c]+"'>";
				}

				s += '<br><br><button class="btns ui button" value="'+result+'">上一話</button>';
				s += '<button id="gotop" class="ui button" >TOP</button>';


				if(  string[2] != "<?php print( $test1[2]); ?>"){//判斷話數
					s += '<button class="btns ui button" value="'+result1+'">下一話</button>';
				}

				$("#comic").append(s)



				$("#gotop").click(function(){ //TOP功能
					$("html,body").animate({ scrollTop:0 },1);
				});

				$("#godown").click(function(){ //down功能
					$("html,body").animate({ scrollTop:9999999 },1);
				});


				$(".btns").click(function(){ //上下頁面功能
					$("#comic").empty();
					ComicLink( $(this).val() );
					$("html,body").animate({ scrollTop:0 },1);
				});


			},

			error: function(response){
				return alert('失敗');
			}

		});
	}
</script>


  </body>
</html>