<?php
require_once "header.php";
?>
<head xmlns="http://www.w3.org/1999/html">
    <title> Participant details</title>
</head>
<div>
<div class="container">
   <ol class="breadcrumb">
    <li><a  href="index1.php">Home</a></li>
    <li><a href="details.php">Details/</a></li>
    <li><a href="#">Event Wise Details</a></li>      
  </ol>
</div>
    
    <h1>
        <center>Participants details</center>
    </h1>
    <h3>
        <center>Select the Event  to get Participants details</center>
    </h3>
</div>
<body class="container">
<div class="well">
    <form class="form form-horizontal" action="" method="post">
        <h2><u>Events</u></h2>
        <div class="table-responsive">  
        <table class="table">
           <thead>
			  <tr>
				<th>A,B</th>
				<th>C,E,F</th>
				<th>H,I,J</th>
				<th>M,N,O</th>
				<th>P,R,S</th>
				<th>T</th>
				
                <tbody>
                   <tr>
                   <td>
                    <input type="checkbox" name="cb" value="Ad-Maniac">Ad-Maniac<br>
                    <input type="checkbox" name="cb" value="Acoustics">Acoustics<br>
                    <input type="checkbox" name="cb" value="Be An Enterpreneur">Be An Enterpreneur<br>
                    <input type="checkbox" name="cb" value="Battle of Breadboard">Battle of Breadboard<br>
                    <input type="checkbox" name="cb" value="Bottle Rocket">Bottle Rocket<br>
                    <input type="checkbox" name="cb" value="Battle on Beats">Battle on Beats
                	</td>
					
               
                   <td>
                    <input type="checkbox" name="cb" value="CODEX">CODEX<br>
                    <input type="checkbox" name="cb" value="Code Hunt">Code Hunt<br>
                    <input type="checkbox" name="cb" value="Counter Strike">Counter Strike<br>
                    <input type="checkbox" name="cb" value="Enigma Idol">Enigma Idol<br>
                    <input type="checkbox" name="cb" value="Face Painting">Face Painting<br>
                    
                    </td>
                    
                    <td>
                    <input type="checkbox" name="cb" value="Hurdle Mania">Hurdle Mania<br>
                    <input type="checkbox" name="cb" value="IOT">IOT<br>
                    <input type="checkbox" name="cb" value="Junk Yard">Junk Yard<br>
                    </td>
					
                	<td>
                    <input type="checkbox" name="cb" value="Maze-Runner">Maze-Runner<br>
                    <input type="checkbox" name="cb" value="Megastructure">Megastructure<br>
                    <input type="checkbox" name="cb" value="Mehendi">Mehendi<br>
                    <input type="checkbox" name="cb" value="Mock-Drill">Mock-A-Drill<br>
                    <input type="checkbox" name="cb" value="Mini Militia">Mini Militia<br>
                    <input type="checkbox" name="cb" value="NFS">NFS<br>
                    <input type="checkbox" name="cb" value="Ok-Doki@FB">OK-DOKI@FB
                    
                	</td>
		  		 

                	<td>
                  	<input type="checkbox" name="cb" value="Prastuti">Prastuti<br>
                   	<input type="checkbox" name="cb" value="Rusties">Rusties<br>
                   	<input type="checkbox" name="cb" value="Rangoli">Rangoli<br>
                    <input type="checkbox" name="cb" value="Snap-Shot">Snap-Shot<br>
                    <input type="checkbox" name="cb" value="Step-UP">Step-UP<br>
                    <input type="checkbox" name="cb" value="Standup Comedy">Standup Comedy
                    
                    </td>
                	<td>
                   
                    <input type="checkbox" name="cb" value="Tshirt-Painting">Tshirt Painting<br>
                    <input type="checkbox" name="cb" value="Tattoo-Making">Tattoo-Making<br>
                    <input type="checkbox" name="cb" value="Treasure-Hunt">Treasure-Hunt<br>
                    
                </td>

            </tr>
        </table>
		</div>
        <br>
        <table class="container-fluid">
            <tr>
                <td><input class=" btn btn-success" type="submit" name="submit"></td>
            </tr>
        </table>
    </form>


</div>

<div class="well">
    <table class="table-bordered table-responsive table-striped table-hover table-condensed" id="t0">
        <?php
        require "database.php";

        if (isset($_POST['submit'])) {

            $event = $_POST['cb'];

            $sql = mysqli_query($db, "SELECT * FROM enigma");
            $row = mysqli_num_rows($sql);


            $allRows = [];
			
			echo "<thead>";
			echo "<tr>";
			echo "<th colspan='5'>";
			echo "Details of Participants Participated in "; echo $event = $_POST['cb']; 
			echo "</th>";
			echo "</tr>";
            echo "<tr>";
            echo "<th>";
            echo "Form Number";
            echo "</th>";
            echo "<th>";
            echo "Participant name";
            echo "</th>";
            echo "<th>";
            echo "Year";
            echo "</th>";
            echo "<th>";
            echo "College";
            echo "</th>";
            echo "<th>";
            echo "Contact number";
            echo "</th>";
            echo "<th>";
            echo "Events Participated";
            echo "</th>";
            echo "</tr>";
			echo "</thead>";
            while ($row = mysqli_fetch_array($sql)) {
                array_push($allRows, $row);
            }
            $i = 0;
            foreach ($allRows as $data) {
                $event1 = explode(",", $data['Uevents']);
                //print_r($event1);

                foreach ($event1 as $eve) {

                    if ($event == $eve) {
                        echo "<tr>";
                         
                         echo "<td>";
               		 echo $data['Form_no'];
                         echo "</td>";
                        
                        echo "<td style='text-transform:capitalize;'>";
                        echo $data['Uname'];
                        echo "</td>";

                        echo "<td>";
                        echo $data['Uyear'];
                        echo "</td>";

                        echo "<td style='text-transform:uppercase;'>";
                        echo $data['Ucollege'];
                        echo "</td>";

                        echo "<td>";
                        echo $data['Ucontact'];
                        echo "</td>";


                        echo "<td>";
                        echo $data['Uevents'];
                        echo "</td>";


                        echo "</tr>";

                        $i++;


                    }


                }

            }
            echo "<tr><th>Total Participant &nbsp &nbsp&nbsp &nbsp $i &nbsp &nbsp</th>";
            echo "<td colspan='10'>";
            echo "<center><a href='check_event.php'>OK</a></center>";
            echo "</td>";
            echo "</tr>";

        }


        ?>

    </table>
</div>
</body>
<?php require_once "footer.php"; ?>
