<!DOCTYPE html>

<html lang="zh-Hant" >
<head>
 <title>Two-dimensional data</title>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="\Semantic-UI-CSS-master\semantic.min.css">
<script src="\Semantic-UI-CSS-master\semantic.min.js"></script>


</head>
 <body>
 
    <div align="left" style='padding-left:5%; padding-right:5%; padding-top:3%;'>
    <div id="hello"></div>

<script>


    


      $.ajax({
           url: "container.php", 
           type: "POST", 
           dataType:"json",
           success: function(test) {


        //       for( i = 0 ; i <test[0].length; i++){
        //         if ( test[4][i] == " New!!" ){
        //             var s = "";
        //             s += '<div class="col-sm-6 col-md-4" style="width:230px;">';
        //             s += '<div class="thumbnail"  style="height:430px; box-shadow: -1px 5px 6px 3px rgba(0%,0%,0%,0.5);" >';

        //             //圖片比對判斷
        //             if ( test[1][i]+".png" == test[3][i]){
        //               s +=     '<img src = "imgs/'+test[3][i]+'" alt="..."  class="thumbnail">';
        //             }else{
        //               s +=     '<img src = img/"'+test[3][1]+'" alt="..."  class="thumbnail">';
        //             }

        //             s += '<div class="caption">';
        //             s += '<span style="font-size:20px;"><b>'+test[1][i]+'<b></span>';
        //             s += '<form  id ="action" name = "'+test[1][i]+'" action="link1.php" method="POST">';
        //             s += '<input type="hidden" name="action" value="'+test[0][i]+'">';
        //                 //button按鈕
        //             s += '<input type="submit" value="點我觀看" class="btn btn-primary" role="button" ></a>';
        //           //s += '<a href="javascript:document.'+test[1][i]+'.submit()" class="btn btn-primary" role="button">點我觀看</a>';
        //                 //更新日期
        //             s += '<br><br><span style ="color:red;"><b>'+test[2][i]+'</b></span>';
        //             s += '</div>';
        //             s += '</div>';
        //             s += '</div>';

        //             $("#hello").append(s); 

        //           }else{
        //             continue;
        //           }
        //       }


        //       for( i = 0 ; i <test[0].length; i++){

                
        //         if ( test[4][i] != " New!!" ){
        //             var s = "";
        //             s += '<div class="col-sm-6 col-md-4" style="width:230px;">';
        //             s += '<div class="thumbnail"  style="height:430px; box-shadow: -1px 5px 6px 3px rgba(0%,0%,0%,0.5);" >';
        //             //圖片比對判斷
        //             if ( test[1][i]+".png" == test[3][i]){
        //               s +=     '<img src = "imgs/'+test[3][i]+'" alt="..."  class="thumbnail">';
        //             }else{
        //               s +=     '<img src = "img/'+test[3][1]+'" alt="..."  class="thumbnail">';
        //             }

        //             s += '<div class="caption">';
        //             s += '<span style="font-size:20px;"><b>'+test[1][i]+'<b></span>';
        //             s += '<form  id ="action" name = "'+test[1][i]+'" action="link1.php" method="POST">';
        //             s += '<input type="hidden" name="action" value="'+test[0][i]+'">';
        //                 //button按鈕
        //             s += '<input type="submit" value="點我觀看" class="btn btn-primary" role="button" ></a>';
        //           //s += '<a href="javascript:document.'+test[1][i]+'.submit()" class="btn btn-primary" role="button">點我觀看</a>';
        //                 //更新日期
        //             s += '<br><br><span style ="color:red;"><b>'+test[2][i]+'</b></span>';
        //             s += '</div>';
        //             s += '</div>';
        //             s += '</div>';

        //             $("#hello").append(s); 

        //           }else{
        //             continue;
        //           }

        //       }


        //     },

        //    error: function(test){
        //      alert("Error");
        //     }

        // });


        var s = "";
        s += '<div class="ui special cards link">';

        for( i = 0 ; i <test[0].length; i++){
                if ( test[4][i] == " New!!" ){
                    
                    //s += '<div class="ui special cards">';
                    s += '<div class="card">';
                    s += '<div class="blurring dimmable image">';
                    s += '<div class="ui dimmer">';
                    s += '<div class="content">';
                    s += '<div class="center">';


                    s += '<div class="ui inverted">';
                    s +=' <form  id ="action" name = "'+test[1][i]+'" action="link1.php" method="POST">';
                    s +=' <input type="hidden" name="action" value="'+test[0][i]+'">';
                    s +=' <input type="submit" class="ui button inverted" value="點我觀看"></div></div></div></div></form>'; //button


                    //圖片比對判斷
                    if ( test[1][i]+".png" == test[3][i]){
                      s +=     '<img src = "imgs/'+test[3][i]+'"></div>';
                    }else{
                      s +=     '<img src = "img/'+test[3][1]+'"></div>';
                    }

                    s += '<div class="content">';
                    s +='<a class="header">'+test[1][i]+'</a>';//標題名稱
                    s +='<div class="meta">';
                    s +='<span class="date">-----</span></div></div>';//標題下方概述
                    s +='<div class="extra content">';
                    s +='<a>';
                    //s +=' <i class="users icon"></i>';
                    s +=' 更新日期：<span style ="color:red;"><b>'+test[2][i]+'</b></span>';
                    //s +='</a></div></div></div>';
                    s +='</a></div></div>';

                    //$("#hello").append(s); 

                  }else{
                    continue;
                  }
              }


              for( i = 0 ; i <test[0].length; i++){

                
                if ( test[4][i] != " New!!" ){
                     
                    //s += '<div class="ui special cards">';
                    s += '<div class="card">';
                    s += '<div class="blurring dimmable image">';
                    s += '<div class="ui dimmer">';
                    s += '<div class="content">';
                    s += '<div class="center">';


                    s += '<div class="ui inverted">';
                    s +=' <form  id ="action" name = "'+test[1][i]+'" action="link1.php" method="POST">';
                    s +=' <input type="hidden" name="action" value="'+test[0][i]+'">';
                    s +=' <input type="submit" class="ui button inverted" value="點我觀看"></div></div></div></div></form>';


                    //圖片比對判斷
                    if ( test[1][i]+".png" == test[3][i]){
                      s +=     '<img src = "imgs/'+test[3][i]+'"></div>';
                    }else{
                      s +=     '<img src = "img/'+test[3][1]+'"></div>';
                    }

                    s += '<div class="content">';
                    s +='<a class="header">'+test[1][i]+'</a>';
                    s +='<div class="meta">';
                    s +='<span class="date">-----</span></div></div>';
                    s +='<div class="extra content">';
                    s +='<a>';
                    //s +=' <i class="users icon"></i>';
                    s +=' 更新日期：<b> 尚無更新 </b>';
                    //s +='</a></div></div></div>';
                    s +='</a></div></div>';

                    

                  }else{
                    continue;
                  }

              }

              s += '</div>';
              $("#hello").append(s); 




                $('.special.cards .image').dimmer({
                on: 'hover'
                });

                $('.ui.sticky')
                  .sticky()
                ;
            },

           error: function(test){
             alert("Error");
            }

        });

        
    </script>

  </body>
</html>