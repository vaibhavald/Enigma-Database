<?php
require"database.php";
$form=$_POST['form_no'];
$name=$_POST['name1'];
$id=$_POST['cid'];
$college=@$_POST['co'];
//$college=@implode(",",$j);

$ocollege=$_POST['oc'];
$branch=$_POST['br'];
$year=$_POST['year1'];
$contact=$_POST['contact'];
$mail=$_POST['mail'];
$f=$_POST['cb'];
$events=implode("," ,$f);
if(!$mail){
    $mail='';
}



$query=mysqli_query($db,"insert into enigma(Form_no,Uname,Uid,Ucollege,Ubranch,Uyear,Ucontact,Uemail,Uevents,Ocollege)values('$form','$name','$id','$college','$branch','$year','$contact','$mail','$events','$ocollege')");
if($query)
{
  
    ?>
<script>
    window.alert("registration successful :");
    window.location="index1.php";
</script>
    <?php
}

else{
  
    ?>
<!--<script>
    window.alert("registration failed");
    window.location="index.php";
</script>--><?php

}