<?php
require_once "header.php";
?>
<html>
<body class="container">
<br>
<div class="container">
   <ol class="breadcrumb">
    <li><a  href="index1.php">Home /</a></li>
    <li><a href="#">Details</a></li>      
  </ol>
</div>
<h1 >
    Details of Participants!<h3>Total Number of Entries: </b><?php
    require "database.php";
    $query = mysqli_query($db, "select count(Form_no) from enigma ");
    while ($row = mysqli_fetch_array($query)) {
        echo $row['count(Form_no)'];

    }
	?>
</h1>
<div>
		<div class="well">
		<form class="  form " method="post" action="">
      <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <label for="s">Enter Id or Form Number to Search Participants Details</label>
       <div class="form-group">
       <input type="search" class="form-control" placeholder="Enter Id number or Form number" name="s" required id="a">
       </div>
       </div>
       	 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
       	 <br>
    	<input class="btn btn-success" type="submit" value="Search" name="b" id="b">
		  </div>
		</div>



        <div class="table-responsive">
        <table class="table table-condensed table-striped">
     <?php
        require "database.php";

        if (isset($_POST['b'])) {
            $search = $_POST['s'];

            $query = mysqli_query($db, "select * from enigma where Uid='$search'or Form_no='$search'");

            echo "<thead>";
            echo "<tr>";
            echo "<th>Form no.</th>";

            echo "<th>Name</th>";

            echo "<th>College id</th>";

            echo "<th>College</th>";

            echo "<th>Branch</th>";

            echo "<th>Year</th>";

            echo "<th>Contact</th>";

            echo "<th>Email</th>";

            echo "<th>Events</th>";
            echo "<th>Other College</th>";

            echo "</tr>";
			echo "</thead>";

            if (mysqli_num_rows($query) == 1) {
                $row = mysqli_fetch_assoc($query);

                echo "<tr>";
                echo "<td>";
                echo $row['Form_no'];
                echo "</td>";


                echo "<td>";
                echo $row['Uname'];
                echo "</td>";


                echo "<td>";
                echo $row['Uid'];
                echo "</td>";


                echo "<td>";
                echo $row['Ucollege'];
                echo "</td>";


                echo "<td>";
                echo $row['Ubranch'];
                echo "</td>";


                echo "<td>";
                echo $row['Uyear'];
                echo "</td>";


                echo "<td>";
                echo $row['Ucontact'];
                echo "</td>";


                echo "<td>";
                echo $row['Uemail'];
                echo "</td>";


                echo "<td>";
                echo $row['Uevents'];
                echo "</td>";


                echo "<td>";
                echo $row['Ocollege'];
                echo "</td>";


                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='10'>";
                echo "<center><a href='details.php'>OK</a></center>";
                echo "</td>";
                echo "</tr>";


                echo "";


            } else {
  ?>
                <script>
                   window.alert("user is not in database...")
                   window.location = "details.php";


               </script><?php
            }
		}
        ?>
     </table>
     
			<a  type="button" class="btn btn-primary"href="updation.php">Update details</a>
     <a type="button" class="btn btn-primary" href="check_event.php">Event Wise Details</a>


    <span style="position: relative;"><?php $query = mysqli_query($db, "select * from enigma GROUP BY Form_no ASC ");
        echo "<table class=\"  table-bordered table-responsive table-striped table-hover table-condensed\">";
       
        echo "<tr>";
        echo "<th>Form no.</th>";

        echo "<th>Name</th>";

        echo "<th> College Id</th>";

        echo "<th>College</th>";

        echo "<th>Branch</th>";

        echo "<th>Year</th>";

        echo "<th>Contact</th>";
		
		echo "<th>Events</th>";

        echo "<th>Email</th>";

        
        echo "<th>Other college</th>";

        echo "</tr>";


        if (mysqli_num_rows($query) > 0) {

            $allrows = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($allrows, $row);
            }
            foreach ($allrows as $data) {

                echo "<tr>";
                echo "<td>";
                echo $data['Form_no'];
                echo "</td>";


                echo "<td style='text-transform:capitalize;'>";
                echo $data['Uname'];
                echo "</td>";


                echo "<td>";
                echo $data['Uid'];
                echo "</td>";


                echo "<td style='text-transform:uppercase;'>";
                echo $data['Ucollege'];
                echo "</td>";


                echo "<td style='text-transform:uppercase;'>";
                echo $data['Ubranch'];
                echo "</td>";


                echo "<td>";
                echo $data['Uyear'];
                echo "</td>";


                echo "<td>";
                echo $data['Ucontact'];
                echo "</td>";


                echo "<td>";
                echo $data['Uevents'];
                echo "</td>";
				
				echo "<td>";
                echo $data['Uemail'];
                echo "</td>";


                echo "<td>";
                echo $data['Ocollege'];
                echo "</td>";


                echo "</tr>";
            }
        }

        echo "</table>";
?> </span>


</form>
</div>
</div>
<?php require_once "footer.php";?>
</body>
</html>
