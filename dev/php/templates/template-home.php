<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<article class="content-article content-1-article-1 u-gridCol4">
				<h4 class="content-1-article-1-h4">Welkom bij the cartoon factory</h4>
				<ul class="content-1-article-1-ul">
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="/karikaturen">karikaturen</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="/sneltekenen">sneltekenen</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="/cartoon">cartoons</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="/animatie">animaties</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="/strips">strips</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="/characters">karakterontwerp</a></span>
					</li> 
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg> 
						<span><a href="/workshop">workshops</a></span>
					</li> 

				</ul>
			</article>
			<article class="content-article content-1-article-2 u-gridCol8">
				<iframe class="content-1-article-2-video" src="//www.youtube.com/embed/7Ky1HfscI2Q?list=UUSXyGD7M-h9sefqenMDK0Vg" frameborder="0" allowfullscreen></iframe>
			</article>
		</content> 

		<content class="content-2 u-gridRow">
			<article class="content-article content-2-article-1 u-gridCol12">  
				<p>
					The Cartoon Factory is al ruim 20 jaar actief als illustratiestudio.<br />
					Klanten zijn o.a. DSM, ING, BASF, Politie Midden west Brabant, Specsavers, Nedcar en vele anderen.
				</p>
			</article>
		</content> 

	 	<content class="content-3 u-gridRow">
	 		<article class="content-article content-3-article-1  u-gridCol8">
	 			<a class="button1 u-gridCol4">karikaturen</a>
	 			<p class="box-padding" >The Cartoon Factory heeft een reputatie hoog te houden op het gebied van karikaturen tekenen. 
					Al vele jaren verzorgen wij karikatuur tekeningen en sneltekenen voor zowel het be-drijfsleven als de particuliere markt.
	 				Een tekening kan in zwart wit of in kleur en op elk gewenst formaat gemaakt worden. Een paar foto’s mailen en we kunnen aan de 
					slag. Wat het sneltekenen betreft kunnen we zowel op papier als digitaal tekenen en in beide gevallen kan het op een vaste plek 
					of rondlopend tussen het publiek.
				</p>
			</article>
	 		<article class="content-article content-3-article-2 u-gridCol4"> 
	 			<a class="button-bottom-left">sneltekenen</a><p>
			</article> 
		</content>  

		<content class="content-4 u-gridRow">
			<article class="content-article content-4-article-1 u-gridCol3"><a class="button-bottom-right">cartoons</a><p></article>
			<article class="content-article content-4-article-2 u-gridCol6 ">
				<a class="button1 u-gridCol5">Cartooning</a><p class="box-padding">Cartoons, strips, karakters en animaties zijn voor velerlei doeleinden inzetbaar.Deze kunnen voor een (glim)lach 
					zorgen en tegelijkertijd ook een boodschap overbrengen. Een interessante mogelijkheid is het tekenen 
					op locatie, met digitale apparatuur kunnen we tijdens 
					bijvoorbeeld een lezing zaken op een leuke manier 
					visualiseren, dit heet cartooning. 
				</p>

			</article>
			<article class="content-article content-4-article-3 u-gridCol3"><a class="button-bottom-right">animaties</a><p></article> </article>
		</content>

		<content class="content-5 u-gridRow">
			<article class="content-article content-5-article-1 u-gridCol3">
				<a class="button-bottom-left">strips</a><p></article>
			</article>
			<article class="content-article content-5-article-2 u-gridCol3">
				<a class="button-bottom-right">karakters</a><p></article>
			</article>
			<article class="content-article content-5-article-3 u-gridCol3">
				<a class="button-bottom-left">fantasie art</a><p></article>
			</article>
			<article class="content-article content-5-article-4 u-gridCol3">
				<a class="button-bottom-right">divers</a><p></article>
			</article>
		</content> 

		<content class="content-6 u-gridRow">
			<article class="content-article content-6-article-1 u-gridCol12">
				<a class="button1 u-gridCol3">tot slot!</a><p class="box-padding" >Bent u op zoek naar een mogelijkheid om uw communicatie met humor aan te pakken, maar wel een 
					hoog niveau handhaven, dan bent u bij The Cartoon Factory aan het juiste adres. Kijk voor voorbeelden in de albums en laat u inspireren, maar bedenk dat iedere opdracht uniek 
					is en het overzicht een door-snee is van reeds eerder gemaakt werk.
				</p>
			</article>
		</content> 

	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   

