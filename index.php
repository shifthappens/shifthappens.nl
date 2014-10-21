<html>
	<head>
		<title>Shifthappens.nl</title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
		<link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
		<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" media="screen, projection" />
		<![endif]-->
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/night.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/positioning.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/general.css" />
		<base href="http://shift/"></base>
		
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js"></script>
<script type="text/javascript" src="js/scriptaculous/effects.js"></script>

			<script type="text/javascript">
				document.observe("dom:loaded", function()
				{
					console.log("hello");
									
					var trans_body = new Effect.Morph('body', { style: 'background: #F2F7D4;', duration: 30, afterFinish: function() { console.log("transition to daytime complete.") } } );
/*
					$$('h1').each(function(event, index) { console.log("h1 transition starting..."); Effect.Morph(event, { style: 'color: #B6D903;', duration: 30, afterFinish: function() { console.log("transition to daytime complete (h1).") } } ) } );
					$$('h2').each(function(event, index) { console.log(event); var effect = Effect.Morph(event.identify(), { style: 'color: #B6D903;', duration: 30, afterFinish: function() { console.log("transition to daytime complete (h2).") } } ) } );
*/
					var effect = new Effect.Morph('h2-one', { style: 'color: #B6D903;', duration: 30, afterFinish: function() { console.log("transition to daytime complete (h1).") } } );
					var effect = new Effect.Morph('h2-two', { style: 'color: #B6D903;', duration: 30, afterFinish: function() { console.log("transition to daytime complete (h2).") } } );

					var effect = new Effect.Morph('sidebar', { style: 'color: #000000;', duration: 30, afterFinish: function() { console.log("transition to daytime complete (h1).") } } );
					var effect = new Effect.Morph('content', { style: 'color: #000000;', duration: 30, afterFinish: function() { console.log("transition to daytime complete (h2).") } } );

					var trans_body = new Effect.Morph('body', { style: 'background: #F2F7D4;', duration: 30, afterFinish: function() { console.log("transition to daytime complete.") } } );
					var trans_body = new Effect.Morph('container', { style: 'background: #F2F7D4;', duration: 30, afterFinish: function() { console.log("transition to daytime complete.") } } );

					var trans_body = new Effect.Morph('block-1', { style: 'background: #FFFFFF; background-image: url(images/text.png)', duration: 30, afterFinish: function() { console.log("transition to daytime complete.") } } );
					var trans_body = new Effect.Morph('block-2', { style: 'background: #FFFFFF; background-image: url(images/text.png)', duration: 30, afterFinish: function() { console.log("transition to daytime complete.") } } );

					console.log("body = " + $('body'));
				});
			</script>

	</head>
	<body id="body">
	<div class="container" id="container">
		<div class="span-20 last logo">
			
		</div>
				
		<div id="block-1" class="span-5 topmargin left block">
		<h2 id="h2-one">Menu</h2>
			<ul>
				<li>Home</li>
				<li>Over mij</li>
				<li>Portfolio</li>
			</ul>
			
		<p id="sidebar" class="textjustify">Nog maar een stukje tekst om wat op te vullen. Isn't this nice?</p>
		</div>
		
		<div id="block-2" class="span-18 append-1 content topmargin last block">
		<h2 id="h2-two">Welkom op shifthappens.nl!</h2>
		
		<p id="content">Leuk dat je even langs bent komen wapperen. Je ziet nu de testpagina...</p>
		</div>
		
		<div class="span-23 append-1 footer topmargin nobackground last">
			<p class="quiet small textcentered">&copy; shift happens 2009</p>
		</div>
	</div>
	
	</body>
</html>