
<?php

require '../private/functions.php';

$connect = dbConnect();

$sql1 		= 'SELECT * FROM `about`';
$statement1 = $connect->query($sql1);

$sql2		= 'SELECT * FROM `calender`';
$statement2 = $connect->query($sql2);

$sql3 		= 'SELECT * FROM `news`';
$statement3 = $connect->query($sql3);

$sql4		= 'SELECT * FROM `history`';
$statement4 = $connect->query($sql4);

$sql5		= 'SELECT * FROM `history2`';
$statement5 = $connect->query($sql5);

?>

<?php include 'head-foot/header.php' ?>

<main>
	
	<div class="top-image">
		<img src="images/top-image.jpg">
		<div class="top-image-text">
			<h1>F1-local</h1>
			<p>On this website you can stay up to date with the <br>current F1 news and with the full F1 calendar, <br>including F1 events.</p>
		</div>
	</div>

	<div class="about-text" id="about">
		<?php foreach ($statement1 as $about) ?>
		<h2><?php echo $about['title'] ?></h2>
		<p><?php echo $about['content'] ?></p>
	</div>

	<div class="f1-calender" id="calender">
		<h2>F1 calender</h2>
		<input type="text" id="table-search" onkeyup="searchTable()" placeholder="Search for races..." title="Type in a name" name="table-search">
		<table id="calender-table">
			<tr>
				<th>Date/time</th>
				<th>Event</th>
				<th>Location</th>
			</tr>
			<?php foreach ($statement2 as $calender): ?>
				<tr>
					<td><?php echo $calender['date'] ?></td>
					<td><?php echo $calender['event'] ?></td>
					<td><?php echo $calender['location'] ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<div class="f1-news" id="news">
		<h1>F1 News</h1>

		<?php foreach ($statement3 as $news): ?>
			<section>
				<img src="<?php echo $news['image'] ?>">
				<h2><?php echo $news['title'] ?></h2>
				<p><?php echo $news['content'] ?></p>
				<small><?php echo $news['date'] ?></small><br>
				<a href="<?php echo $news['link'] ?>" target="_blank">Read more at www.f1.com</a>
			</section>
		<?php endforeach; ?>
	</div>

	<div class="f1-history" id="history">
		<?php foreach ($statement4 as $history1) ?>
			<h2><?php echo $history1['title'] ?></h2>
			<p class="text1"><?php echo $history1['content'] ?></p>
			<img class="img1" src="<?php echo $history1['image'] ?>" alt="Stirling Moss' Lotus 18">
		<?php foreach ($statement5 as $history2) ?>
			<h2 class="title2"><?php echo $history2['title'] ?></h2>
			<p class="text2"><?php echo $history2['content'] ?></p>
			<img class="img2" src="<?php echo $history2['image'] ?>" alt="Juan M. Fangio's Alfa Romeo 159">
	</div>

	<div class="contact-link" id="contact">
		<form class="contact-form" action="mailto:27202@ma-web.nl" method="post" enctype="text/plain">
			<input type="submit" name="contact" value="Contact">
			<p>You can contact us by clicking on the contact button.</p>
		</form>
	</div>

</main>

<?php include 'head-foot/footer.php' ?>
