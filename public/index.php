
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

		<section>
			<img src="images/fer-improv.jpg">
			<h2>Ferrari not expecting major improvement anytime soon - Binotto</h2>
			<p><strong>After their impressive showing in pre-season testing, big things were expected of Ferrari this year. But six races in, a single second place is their best result to date. That has to change soon, though, right? Unlikely – at least according to Team Principal Mattia Binotto.</strong></p>
			<p>Ferrari’s SF90 has displayed excellent straight-line speed, with its power unit generally considered to be the best on the grid. However, in the handling, balance and tyre departments the Italian team have trailed their Mercedes – and often Red Bull – rivals.</p>
			<small>3 June, 2019</small><br>
			<a href="https://www.formula1.com/en/latest/article.ferrari-not-expecting-major-improvement-anytime-soon-binotto.2WK6RcOUFDNYxiTxqfodxu.html" target="_blank">Read more at www.f1.com</a>
		</section>

		<section>
			<img src="images/two-merc.jpg">
			<h2>Hamilton anticipating Mercedes engine upgrade in Canada</h2>
			<p><strong>Mercedes have been the class of the field in 2019, winning all six races so far and getting both cars on the podium on each occasion. And in an attempt to maintain and extend that advantage, they could well introduce their first upgraded engine of the season in Canada…</strong></p>
			<p>Lewis Hamilton had to work hard for victory in Monaco – his third triumph on the streets of the Principality – after Mercedes opted to fit him with medium tyres for the majority of the race, which ultimately turned out to be the wrong compound to be on.</p>
			<small>3 June, 2019</small><br>
			<a href="https://www.formula1.com/en/latest/article.hamilton-anticipating-mercedes-engine-upgrade-in-canada.1EU9SS2LZ5VoWczs9qY3tv.html" target="_blank">Read more at www.f1.com</a>
		</section>

		<section>
			<img src="images/zand-circuit.jpg">
			<h2>Dutch Grand Prix to return at Zandvoort from 2020</h2>
			<p><strong>Formula 1 is delighted to announce that the Dutch Grand Prix returns to the FIA Formula 1 World Championship from 2020. An agreement has recently been signed between Formula 1 and Dutch Grand Prix – a partnership formed by SportVibes, TIG Sports and the Circuit Zandvoort – and will run for at least three years.</strong></p>
			<p>Furthermore, Heineken, one of the longstanding Global Partners of Formula 1, will be the Title Sponsor of the event.</p>
			<p>Situated not far from the vibrant city of Amsterdam, Zandvoort is a major beach resort in the Netherlands, known for its long beach bordered by magnificent coastal dunes separating the North Sea from the track. The Circuit of Zandvoort has a long history as a Formula 1 venue, and over the coming months, the facility will be rebuilt with help from Zandvoort town council and several other partners. The track and the infrastucture will be modified in order to meet the standards laid out by the FIA in order to host a Formula 1 World Championship event.</p>
			<small>14 May, 2019</small><br>
			<a href="https://www.formula1.com/en/latest/article.dutch-grand-prix-to-return-at-zandvoort-from-2020.1OTLRqLZB6mXdD1VPyHiNx.html" target="_blank">Read more at www.f1.com</a>
		</section>

		<section>
			<img src="images/spain-win.jpg">
			<h2>The Winners and Losers of the Spanish Grand Prix</h2>
			<p>For one team, the trophy cabinet needed reorganising to find yet more space, while for others it was back to the drawing board after a testing weekend at the Circuit de Barcelona-Catalunya. We pick out the winners and losers of the Spanish Grand Prix...</p>
			<p>It was not the cleanest weekend for Lewis Hamilton. In fact, it has not been the cleanest season. He was uncomfortable in the car at Barcelona, and struggled with the tyres in qualifying once again, which meant he was beaten to pole by team mate Valtteri Bottas for the third time in a row.</p>
			<small>13 May, 2019</small><br>
			<a href="https://www.formula1.com/en/latest/article.the-winners-and-losers-of-the-spanish-grand-prix.2bcK8oeFZWe1C3dE5qxHhB.html" target="_blank">Read more at www.f1.com</a>
		</section>

	</div>

	<div class="f1-history" id="history">
		<h2>F1 History</h2>
		<p class="text1">The Formula One series originated with the European Championship of Grand Prix motor racing (for pre-1947 history) of the 1920s and 1930s. The formula is a set of rules that all participants' cars must meet. Formula One was a new formula agreed upon after World War II during 1946, with the first non-championship races being held that year. The first one, the first Formula 1 race ever, was the Turin Grand Prix. A number of Grand Prix racing organisations had laid out rules for a world championship before the war, but due to the suspension of racing during the conflict, the World Drivers' Championship was not formalised until 1947. The first world championship race was held at Silverstone, United Kingdom in 1950. A championship for constructors followed in 1958. National championships existed in South Africa and the UK in the 1960s and 1970s. Non-championship Formula One events were held for many years, but due to the increasing cost of competition, the last of these occurred in 1983.[9] On 26 November 2017, Formula One unveiled its new logo, following the 2017 season finale in Abu Dhabi during the Abu Dhabi Grand Prix at Yas Marina Circuit. The new logo replaced F1's iconic 'flying one', which had been the sport's trademark since 1993.</p>
		<img class="img1" src="images/stir-lotus.jpg">
	</div>

	<div class="contact-link" id="contact">
		<h2>Contact</h2>
		<p>This is a school project. If you would like to contact me, you can send an email to 27202@ma-web.nl.</p>
	</div>

</main>

<?php include 'head-foot/footer.php' ?>
