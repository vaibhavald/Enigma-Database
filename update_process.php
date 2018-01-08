<?php

require"database.php";
$form=$_POST['form_no'];
$name=$_POST['name1'];
$id=$_POST['cid'];
$college=@$_POST['co'];
//$college=@implode(",",$j);
$ocollege=$_POST['oc'];
$branch=$_POST['br'];
$year=@$_POST['year1'];
$contact=$_POST['contact'];
$mail=$_POST['mail'];
$f=@$_POST['cb'];
$events=@implode("," ,$f);

$query=mysqli_query($db,"select * from enigma where Form_no='$form'");
if(mysqli_num_rows($query)==1)
{
    if($name)
    {
        $up=mysqli_query($db,"update enigma set Uname='$name' where Form_no='$form'");
    }

    if($id)
    {
        $up=mysqli_query($db,"update enigma set Uid='$id' where Form_no='$form'");
    }
    if($college)
    {

        $up=mysqli_query($db,"update enigma set Ucollege='$college' where Form_no='$form'");
        $up=mysqli_query($db,"update enigma set Ocollege='' where Form_no='$form'");
    }
    if($ocollege)
    {
        $up=mysqli_query($db,"update enigma set Ocollege='$ocollege' where Form_no='$form'");
        $up=mysqli_query($db,"update enigma set Ucollege='' where Form_no='$form'");
    }
    if($branch)
    {
        $up=mysqli_query($db,"update enigma set Ubranch='$branch' where Form_no='$form'");
    }
    if($year)
    {

        $up=mysqli_query($db,"update enigma set Uyear='$year' where Form_no='$form'");
    }
    if($contact)
    {
        $up=mysqli_query($db,"update enigma set Ucontact='$contact' where Form_no='$form'");
    }
    if($mail)
    {
        $up=mysqli_query($db,"update enigma set Uemail='$mail' where Form_no='$form'");
    }

    if($events)
    {
        $up=mysqli_query($db,"update enigma set Uevents='$events' where Form_no='$form'");
    }?>
<script>
    window.alert("updated successfully");
    window.location="details.php";
</script><?php

}
else
{?>
<script>
    window.alert("updation failed");
    window.location="updation.php";
</script><?php

}
