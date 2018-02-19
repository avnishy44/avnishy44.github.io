<?php
    require('doc.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script>$('.top').on('click', function() {
	$parent_box = $(this).closest('.box');
	$parent_box.siblings().find('.bottom').hide();
	$parent_box.find('.bottom').toggle();
});
</script>  
  <title>Document</title>
<style>.containerbelowbuttons .box {
  float: left;
  width: 150px;
  margin: 20px;
}

.containerbelowbuttons .box .top {
  padding: 12px;
  background-color: ;
  color: white;
  cursor: pointer;
}

.containerbelowbuttons .box .bottom {
  padding: 12px;
  background-color:;
  color: white;
  display: none;
}
</style>
</head>
<body>
   
   <div style="text-align:center;background:white;">
    <h1 style="width:100%;background-color:#e0e0e0">Fill up the form:</h1>
    <iframe src="https://www.polydojo.com/@officialhksahil/form?formId=5a890fd89c139f0004a2808e&amp;workflowId=5a8913519c139f0004a2809b" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0" style="max-width: 100%;">Loading...</iframe>
     <br>
    <form action="index.php" method="POST">
    </form>
    
    <br><br>
   </div> 
   
   <div class="containerbelowbuttons  ">
  
  
  <div class="box">
    <div class="top" style="margin:0 auto;">
      <div class='pm-button' style="margin-left:600px"><a href='https://www.payumoney.com/paybypayumoney/#/E66251B26181FC2180D600B565BFC101' target="_blank"><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/21.png' /></a></div> 
	
    </div>
    <div class="bottom">
     <input type="text" name="folio" placeholder="After Clicking on Submit button,Paste Folio generated ID here" style="width:390px;margin-left:500px">
    <input type="submit" name="submit" label="submit" style="margin-left:630px;margin-top:20px"><br><br><br>
	
    </div>
  </div>
</div>
   
    <script>$('.top').on('click', function() {
	$parent_box = $(this).closest('.box');
	$parent_box.siblings().find('.bottom').hide();
	$parent_box.find('.bottom').toggle();
});
</script>		
   
   <?php
//function check(){
    $check_folio = isset($_POST["folio"])?htmlentities($_POST["folio"]):"";
$key=in_array($check_folio,$folio_id);
    if (in_array($check_folio, $folio_id)) {
       echo "<p>";
       
	   echo  $folio_id[$key].'<br>'.$prescription[$key].' <br>'.$comment[$key].'<br>'.$nextvisit[$key];
       echo "</p>"; 
    }
    else{
        echo "" ;//"Your application has not yet been approved";
    }
//}

?>
   
</body>
</html>
