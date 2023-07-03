<?php
include_once('junk.php');
$que4="SELECT * FROM `booking`";
$result4 = mysqli_query($db, $que4);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Bookings</title>
		<link rel="stylesheet" type="text/css" href="allbookings.css" />
	</head>
	<body>
		<div class="main">
			<ul>
				<ul class="list">
					<li class="logo">
						<a href="mainPage.html"
							><img
								src="earth-globe.png"
								alt="Logo"
								style="width: 36px; height: 36px"
						/></a>
					</li>
					<div class="search">
						<form method="POST" action="info.php">
							<input
								type="text"
								name="search_p"
								placeholder="Search.."
								size="50"
							/>

							<input
								type="image"
								name="submit_p"
								src="search_icon.png"
								alt="Search image"
								style="width: 22; height: 22; margin-left: 35px"
							/>
						</form>
					</div>
				</ul>
				<ul class="list2">
					<li><a href="mainPage.html">Home</a></li>
					<li><a id="long" href="destination.html">Destination</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li class="active-menu"><a href="allbookings.php">Bookings</a></li>
					<li><a href="index.html">Logout</a></li>
				</ul>
			</ul>
		</div>
		
		<div class="feedback">
			<h1>Bookings</h1>

			<div id="booking-container" style="display: block; margin-top: 50px">
				<table
					align="center"
					border="1px"
					style="width: 500px; line-height: 30px"
				>
					<tr>
						<th colspan="8"><h2>Booking Details</h2></th>
					</tr>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>City</th>
						<th>Phone</th>
						<th>Destination</th>
						<th>Departure date</th>
						<th>booking status</th>
					</tr>
					<?php
						while($rows4 = mysqli_fetch_assoc($result4))
						{
					?>
					<tr>
						<td><?php echo $rows4['id']; ?></td>
						<td><?php echo $rows4['ffirst']; ?></td>
						<td><?php echo $rows4['flast']; ?></td>
						<td><?php echo $rows4['femail']; ?></td>
						<td><?php echo $rows4['city']; ?></td>
						<td><?php echo $rows4['fphone']; ?></td>
						<td><?php echo $rows4['fdesti']; ?></td>
						<td><?php echo $rows4['date']; ?></td>
						<td><?php echo $rows4['status']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</body>
</html>
