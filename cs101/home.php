<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <div class="page-header">
    <h1>Vistaar music room booking</h1>
    </div>
    <nav class="navbar navbar-default navbar-static-left">
  <div class="container" align = "l">
    <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="form.html">Booking Slot</a></li>
</ul>

  </div>
</nav>
<div class="panel panel-default">
  <div class="panel-heading">Calendar</div>

  <div class = "panel-body">
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'vistaar'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
		FROM appointments
		LIMIT 10';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
$date = time();
$day = date('d',$date);
$month = date('m',$date);
$year = date('y',$date);
$first_day = mktime(0,0,0,$month,1,$year);
$title = date('F',$first_day);
$day_of_week = date('D', $first_day);

switch($day_of_week)
{
	case "Sun": $blank = 0; break;
	case "Mon": $blank = 1; break;
	case "Tue": $blank = 2; break;
	case "Wed": $blank = 3; break;
	case "Thu": $blank = 4; break;
	case "Fri": $blank = 5; break;
	case "Sat": $blank = 6; break;
}

$days_in_month = cal_days_in_month(0,$month,$year);

echo "<table border = 1 width = 400>";
echo "<tr><th = colspan = 60> $title $year </th></tr>";
echo "<tr><td width = 60> S</td><td width = 60> M </td> <td width = 60> T </td><td width = 60> W</td><td width = 60>Th</td><td width = 60>F</td><td width = 60> Sa</td>";

$day_count = 1;

echo "<tr>";

while
($blank >0)
{
	echo "<td></td>";
	$blank = $blank -1;
	$day_count++;
}

$day_num = 1;

while($day_num<=$days_in_month)
{
	echo "<td> $day_num </td>";
	$day_num++;
	$day_count++;

 if ($day_count>7)
{
	echo "<tr></tr>";
	$day_count = 1;
}
}
while
($day_count>1 && $day_count<=7)
{
	echo "<td> </td>";
	$day_count++;
}

echo "</tr></table>";

?>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">Last 10 appointments</div>

  <div class = "panel-body">
  <?php
  echo "<table border='1'>
 <tr>
 <th>Firstname</th>
 <th>Email</th>
 <th> Date</th>
 <th>ID</th>
 </tr>";
  $no 	= 1;
  $total 	= 0;
  while ($row = mysqli_fetch_array($query))
  {
    echo '<tr>
 	 		<br>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'. date('F d, Y', strtotime($row['date'])) . '</td>
 			 </br>
      </tr>';
    $no++;
  }?>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
