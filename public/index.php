
<?php

require '../private/functions.php';

$connect = dbConnect();

$sql1 		= 'SELECT * FROM `about`';
$statement1 = $connect->query($sql1);

$sql3 		= 'SELECT * FROM `news`';
$statement3 = $connect->query($sql3);

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
		<table>
			<tr>
				<th>Date/time</th>
				<th>Event</th>
				<th>Location</th>
			</tr>
			<tr>
				<td>23 - 26 May / 15:10 (tracktime)</td>
				<td>Formula 1 Grand Prix de Monaco 2019</td>
				<td>Monte Carlo, Cricuit de Monaco</td>
			</tr>
			<tr>
				<td>07 - 09 Jun / 14:10 (tracktime)</td>
				<td>Formula 1 Pirelli Grand Prix du Canada 2019</td>
				<td>Canada, Montréal Cricuit Gilles-Villeneuve</td>
			</tr>
			<tr>
				<td>21 - 23 Jun / 15:10 (tracktime)</td>
				<td>Formula 1 Grand Prix de France 2019</td>
				<td>France, Le Castellet Circuit Paul Ricard</td>
			</tr>
			<tr>
				<td>28 - 30 Jun / 15:10 (tracktime)</td>
				<td>Formula 1 Grand Prix von Austria 2019</td>
				<td>Austria, Spielberg Red Bull Ring</td>
			</tr>
			<tr>
				<td>12 - 14 Jul / 14:10 (tracktime)</td>
				<td>Formula 1 Rolex British Grand Prix 2019</td>
				<td>Britain, Silverstone Circuit</td>
			</tr>
			<tr>
				<td>26 - 28 Jul / 15:10 (tracktime)</td>
				<td>Formula 1 Mercedes-Benz Grand Prix von Germany 2019</td>
				<td>Germany, Hockenheim Hockenheimring</td>
			</tr>
			<tr>
				<td>02 - 04 Aug / 15:10 (tracktime)</td>
				<td>Formula 1 Rolex Grand Prix Hungary 2019</td>
				<td>Hungary, Budapest Hungaroring</td>
			</tr>
			<tr>
				<td>30 Aug - 01 Sep / 15:10 (tracktime)</td>
				<td>Formula 1 Johnnie Walker Grand Prix Belgium 2019</td>
				<td>Belgium, Spa-Francorchamps Circuit de Spa-Francorchamps</td>
			</tr>
			<tr>
				<td>. . .</td>
				<td>. . .</td>
				<td>. . .</td>
			</tr>
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
		<h2>F1 History</h2>
		<p class="text1">The Formula One series originated with the European Championship of Grand Prix motor racing (for pre-1947 history) of the 1920s and 1930s. The formula is a set of rules that all participants' cars must meet. Formula One was a new formula agreed upon after World War II during 1946, with the first non-championship races being held that year. The first one, the first Formula 1 race ever, was the Turin Grand Prix. A number of Grand Prix racing organisations had laid out rules for a world championship before the war, but due to the suspension of racing during the conflict, the World Drivers' Championship was not formalised until 1947. The first world championship race was held at Silverstone, United Kingdom in 1950. A championship for constructors followed in 1958. National championships existed in South Africa and the UK in the 1960s and 1970s. Non-championship Formula One events were held for many years, but due to the increasing cost of competition, the last of these occurred in 1983.[9] On 26 November 2017, Formula One unveiled its new logo, following the 2017 season finale in Abu Dhabi during the Abu Dhabi Grand Prix at Yas Marina Circuit. The new logo replaced F1's iconic 'flying one', which had been the sport's trademark since 1993.</p>
		<img class="img1" src="images/stir-lotus.jpg">
	</div>

	<div class="contact-link" id="contact">
		<form action="mailto:27202@ma-web.nl" method="post" enctype="text/plain">
			<input type="submit" name="contact" value="Contact">
			<p>You can contact us by clicking on the contact button.</p>
		</form>
	</div>

</main>

<?php include 'head-foot/footer.php' ?>
