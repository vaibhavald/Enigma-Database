<html>
<head>
	<title>Enigma 9.0</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script>
	  $(document).ready(function(){
						$("input[type='checkbox']").change(function(){
						var maxAllowed=4;
									  checked=$("input[type='checkbox']:checked").length;
										if(checked>maxAllowed){
											$(this).prop("checked","");
											alert("You can select maximum 4 Events");
										}
											
									  });
	  });
	</script>
  
<style>
@media (max-width: 480px)
{
.well
{
width:600px;
}
}
</style>
</head>
<body class="container">
<br>
	<center><div class="panel panel-primary">
      <h3>Enigma 9.0 Database of Registered Users</h3>
      </div></center>
    <div class="panel panel-primary" style="width: 450px;">
       
	<h3>Total Number of Entries: </b><?php
    require "database.php";
    $query = mysqli_query($db, "select count(Form_no) from enigma ");
    while ($row = mysqli_fetch_array($query)) {
        echo $row['count(Form_no)'];

    }
	?> <a  class="btn btn-primary" href="details.php">Show Details</a></h3>
	</div>
		
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"	>
 
 <div class="well" style="width: 500px;">
<form method="post" action="index_process.php">
  <div class="form-group">
       <label for="form_no">Enter Form Number:</label>
         <input type="text" class="form-control input-sm" name="form_no" placeholder="Form Number" id="t1" required  minlength="4" maxlength="4">
   </div>
    <div class="form-group">
       <label for="form_no">Enter Full Name:</label>
          <input type="text" class="form-control input-sm" name="name1" placeholder="Full Name" id="t2" required>
	</div>   
      <div class="form-group">
       <label for="form_no">Enter ID:</label>
                <td><input type="text" class="form-control input-sm" name="cid" placeholder="College ID" id="t3" required>
	 </div> 
         <div class="form-group">
         <label for="form_no">Select college:</label>
       		<div class="form-control input-sm">
			 <label class="radio-inline"><input type="radio" name="co" value="ucer">UCER</lable>
              <label class="radio-inline"><input type="radio" name="co" value="ucem">UCEM</lable>
               <label class="radio-inline"><input type="radio" name="co" value="uit">UIT</lable>
			 <label class="radio-inline"><input type="radio" name="co" value="uip">UIP</label>
			 <label class="radio-inline"><input type="radio" name="co" value="uim">UIM</label>
                <label class="radio-inline"><input type="radio" name="co" value="uim-fugs">UIM-FUGS</label>
			</div>
            </div>
        <div class="form-group">
       <label for="form_no">Enter College Name(if other than UGI):</label>
            <input type="text" class="form-control input-sm"  name="oc" placeholder="College Name" id="t8">
        </div>
               <div class="form-group">
      		 <label for="form_no">Enter Branch/Course:</label>
         <input type="text" class="form-control input-sm" name="br" placeholder="Branch/Course" id="t4" required>
			 </div>
		<div class="form-group">
       <label for="form_no">Select Year:</label>
             <div class="form-control input-sm">
              <label class="radio-inline"><input type="radio" name="year1" value="1" required>I<sup>st</sup></label>
               <label class="radio-inline"><input type="radio" name="year1" value="2">II<sup>nd</sup></label>
                <label class="radio-inline"> <input type="radio" name="year1" value="3">III<sup>rd</sup></label>
                <label class="radio-inline"><input type="radio" name="year1" value="4">IV<sup>th</sup></label>
			</div>
		</div>
        <div class="form-group">
       <label for="form_no">Enter Contact:</label>
           <input type="number" class="form-control input-sm" name="contact" placeholder="Mobile Number" id="t5" required>
		</div>
        <div class="form-group">
       <label for="form_no">Enter Email(optional):</label>
               <input type="email" class="form-control input-sm" name="mail" placeholder="E-mail" id="t6">
            
		</div>
   </div>
    </div>
  
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <div class="well">
    <h2><u>Events</u></h2>
       <div class="table-responsive">  
        <table class="table">
           <thead>
			  <tr>
				<th>A,B</th>
				<th>C,E,F</th>
				<th>H,I,J</th>
				</tr>
			</thead>
                <tbody>
                   <tr>
                   <td>
                    <input type="checkbox" name="cb[]" value="Ad-Maniac">Ad-Maniac<br>
                    <input type="checkbox" name="cb[]" value="Acoustics">Acoustics<br>
                    <input type="checkbox" name="cb[]" value="Be An Enterpreneur">Be An Enterpreneur<br>
                    <input type="checkbox" name="cb[]" value="Battle of Breadboard">Battle of Breadboard<br>
                    <input type="checkbox" name="cb[]" value="Bottle Rocket">Bottle Rocket<br>
                    <input type="checkbox" name="cb[]" value="Battle on Beats">Battle on Beats
                	</td>
					
               
                   <td>
                    <input type="checkbox" name="cb[]" value="CODEX">CODEX<br>
                    <input type="checkbox" name="cb[]" value="Code Hunt">Code Hunt<br>
                    <input type="checkbox" name="cb[]" value="Counter Strike">Counter Strike<br>
                    <input type="checkbox" name="cb[]" value="Enigma Idol">Enigma Idol<br>
                    <input type="checkbox" name="cb[]" value="Face Painting">Face Painting<br>
                    
                    </td>
                    
                    <td>
                    <input type="checkbox" name="cb[]" value="Hurdle Mania">Hurdle Mania<br>
                    <input type="checkbox" name="cb[]" value="IOT">IOT<br>
                    <input type="checkbox" name="cb[]" value="Junk Yard">Junk Yard<br>
                    </td>
					</tr>
					
					<thead>
					<tr>
					<th>M,N,O</th>
					<th>P,R,S</th>
					<th>T</th>
					</tr>
					</thead>
               		<tr>
                	<td>
                    <input type="checkbox" name="cb[]" value="Maze-Runner">Maze-Runner<br>
                    <input type="checkbox" name="cb[]" value="Megastructure">Megastructure<br>
                    <input type="checkbox" name="cb[]" value="Mehendi">Mehendi<br>
                    <input type="checkbox" name="cb[]" value="Mock-Drill">Mock-A-Drill<br>
                    <input type="checkbox" name="cb[]" value="Mini Militia">Mini Militia<br>
                    <input type="checkbox" name="cb[]" value="NFS">NFS<br>
                    <input type="checkbox" name="cb[]" value="Ok-Doki@FB">OK-DOKI@FB
                    
                	</td>
		  		 

                	<td>
                  	<input type="checkbox" name="cb[]" value="Prastuti">Prastuti<br>
                   	<input type="checkbox" name="cb[]" value="Rusties">Rusties<br>
                   	<input type="checkbox" name="cb[]" value="Rangoli">Rangoli<br>
                    <input type="checkbox" name="cb[]" value="Snap-Shot">Snap-Shot<br>
                    <input type="checkbox" name="cb[]" value="Step-UP">Step-UP<br>
                    <input type="checkbox" name="cb[]" value="Standup Comedy">Standup Comedy
                    
                    </td>
                	<td>
                   
                    <input type="checkbox" name="cb[]" value="Tshirt-Painting">Tshirt Painting<br>
                    <input type="checkbox" name="cb[]" value="Tattoo-Making">Tattoo-Making<br>
                    <input type="checkbox" name="cb[]" value="Treasure-Hunt">Treasure-Hunt<br>
                    
                </td>

            </tr>
        </table>
        <br>


        		<input class=" btn btn-success" type="submit" value="submit">
               
           
    </div>
	</div>


</form>
	  </div>
	</div>
	<?php require_once "footer.php";?>
	</div>
<br>


</body>

</html>
