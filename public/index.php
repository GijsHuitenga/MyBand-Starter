
<?php

/**
 * Dit is de Front controller
 * ALLE requests die naar de webserver worden gedaan worden via de .htaccess naar dit script gestuurd.
 * Zo voorkom je dat je heel veel PHP bestanden hebt met dubbele code en logica.
 *
 * Alle urls hebben de volgende structuur: http://localhost/<controller>/<actie>/<optionele parameters>
 *
 * Bijv: http://localhost/page/show/about-us
 * (roept de show functie aan in de page controller met de parameter 'about-us')
 *
 * controller: page
 * actie: show
 * parameter: about-us
 *
 * De Front Controller (dit bestand) doorloopt elke keer de volgende procedure:
 *
 * 1. Inspecteert de URL die wordt opgevraagd
 * 2. Zoekt op in een "routing" tabel of hij deze URL of dit URL patroon kent
 * 3. Zo niet, dan is het een 404 oagina, want de website kent deze url niet
 * 4. Als de url wel wordt herkend en er een "route" is naar de juiste code dan:
 *  A. Wordt de juiste controller actie aangeroepen
 *  B. De controller krijgt alle gegevens door (de url, $_GET, $_POST, $_FILES etc)
 *  C. De controller haalt eventueel gegevens op via de Model laag (database queries e.d.)
 *  D. De controller geeft de gegevens aan de juiste view
 *  E. De view toont de gegevens op de juiste manier (met behulp van een foreach, if, switch e.d.)
 *  F. De complete view (met data) wordt door de controller teruggestuurd naar de gebruiker (dit is de Response)
 *
 */

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
		<h2>About us</h2>
		<p>We made this website to keep our fellow F1 fans up to date with everything that is happening in and around F1. This website is made for F1 fans, by F1 fans.</p>
	</div>

	<div class="f1-calender" id="agenda">
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

		<section>
			<img src="images/zand-circuit.jpg">
			<h2>Dutch Grand Prix to return at Zandvoort from 2020</h2>
			<p><strong>Formula 1 is delighted to announce that the Dutch Grand Prix returns to the FIA Formula 1 World Championship from 2020. An agreement has recently been signed between Formula 1 and Dutch Grand Prix – a partnership formed by SportVibes, TIG Sports and the Circuit Zandvoort – and will run for at least three years.</strong></p>
			<p>Furthermore, Heineken, one of the longstanding Global Partners of Formula 1, will be the Title Sponsor of the event.</p>
			<p>Situated not far from the vibrant city of Amsterdam, Zandvoort is a major beach resort in the Netherlands, known for its long beach bordered by magnificent coastal dunes separating the North Sea from the track. The Circuit of Zandvoort has a long history as a Formula 1 venue, and over the coming months, the facility will be rebuilt with help from Zandvoort town council and several other partners. The track and the infrastucture will be modified in order to meet the standards laid out by the FIA in order to host a Formula 1 World Championship event.</p>
			<a href="https://www.formula1.com/en/latest/article.dutch-grand-prix-to-return-at-zandvoort-from-2020.1OTLRqLZB6mXdD1VPyHiNx.html" target="_blank">Read more at www.f1.com</a>
		</section>

		<section>
			<img src="images/spain-win.jpg">
			<h2>The Winners and Losers of the Spanish Grand Prix</h2>
			<p>For one team, the trophy cabinet needed reorganising to find yet more space, while for others it was back to the drawing board after a testing weekend at the Circuit de Barcelona-Catalunya. We pick out the winners and losers of the Spanish Grand Prix...</p>
			<p>It was not the cleanest weekend for Lewis Hamilton. In fact, it has not been the cleanest season. He was uncomfortable in the car at Barcelona, and struggled with the tyres in qualifying once again, which meant he was beaten to pole by team mate Valtteri Bottas for the third time in a row.</p>
			<a href="https://www.formula1.com/en/latest/article.the-winners-and-losers-of-the-spanish-grand-prix.2bcK8oeFZWe1C3dE5qxHhB.html" target="_blank">Read more at www.f1.com</a>
		</section>
	</div>

	<div class="school-proj" id="proj">
		<h2>School Project</h2>
		<p>This is a school project to create a website about your favorite things, <br>
		or create a fan website for something like your favorite sport.</p>
	</div>

</main>

<?php include 'head-foot/footer.php' ?>
