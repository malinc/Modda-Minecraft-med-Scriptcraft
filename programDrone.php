<!DOCTYPE html>
<html lang="sv">
<head>
	<title>Modda Minecraft med ScriptCraft -
		Programmera drönaren!
	</title>
	<meta charset=utf-8 >
	<link rel="stylesheet" href="minecraft.min.css" type="text/css" />
</head>
<body>
	<header>Modda Minecraft med ScriptCraft</header>
	<article>
		<h1>Programmera drönaren!</h1>
		
		<p>För information om hur man installerar Bukkit-servern och ScriptCraft se föregående sida 
			<a href="index.php">Installera och kom igång!</a></p>
		<p>I ScriptCraft kan man programmera en så kallad drönare (drone på engelska) till att bygga saker i Minecraft. 
			Här beskrivs hur man programmerar drönaren.</p>
			
		<h2>Bygg en husgrund</h2>
		<p>Börja med att göra en mapp till alla dina program. Mappen bör ligga i CraftBukkit/plugins/Scriptcraft/plugins. 
			Döp den exempelvis till <em>MinaProgram</em>.</p>
		<p>Öppna en texteditor och skriv in följande kod:</p>
		<p><img src="images/code1.png" alt="Kod 1" width="385" height="127"/> </p>
		<p>Det är viktigt att du skriver koden själv, istället för att bara kopiera in den (därför visas en bild istället för text).</p>
		<p>Spara filen som <em>mitthus.js</em> i mappen <em>MinaProgram</em>.</p>
		<p>Kör koden inifrån Minecraft genom att skriva:</p>
		<pre>/js mitthus()</pre>
		<p>Prova att göra husgrunden i ett annat material än guld. Välj ett annat ID-nummer än 41 från sidan
			<a href="http://minecraft-ids.grahamedgecombe.com/">Minecraft ID List</a>. Spara filen efter att du ändrat.
			För att ändringan skall märkas i Minecraft, måste du köra kommandot: </p>
		<pre>/js refresh()</pre>
		<p>innan du kör <code>/js mitthus()</code> igen. Använd piltangenterna för att få fram gamla kommandon i Minecraft.</p>
			
		<h3>Vad koden gör</h3>
		<p>På rad 1 anges var programmet hittar Drone-koden.</p>
		<p>På rad 3 definieras en funktion döpt till <em>mitthus</em>. Det går bra att ge funktionen ett annat namn. 
			Efter funktionsnamnet 
			skall det alltid finnas ett par parenteser <code>()</code>. Därefter skriver man vad funktionen skall göra mellan
			måsvingarna <code>{}</code>. </p>
		<p>På rad 4 <b>deklareras</b> ett drönarobjekt <em>d</em>. Det går bra att döpa drönaren till något annat. </p>
		<p>På rad 5 låter man drönaren använda <b>metoden</b> <em>box</em>.</p>
		<p>På rad 8 anger man att kommandot <code>/js mitthus()</code> i Minecraft skall <b>anropa</b> funktionen <em>mitthus</em>. Om 
			du byter rad 8 till: </p>
		<pre>Drone.extend('hejsan', mitthus);</pre>
		<p>så kör du programmet från Minecraft genom att skriva <code>/js hejsan()</code>.</p>
		
		<h2>Bygg ett hus</h2>
		<h3>Flytta drönaren</h3>
		<p>Drönaren är osynlig men befinner sig där du har muspekaren. Det är vid muspekaren huset byggs. För att bygga ett hus av 
			flera olika bitar måste du kunna flytta på drönaren. Nedan finns en lista
			på flyttkommandon.  </p>
		<ul>
			<li><code>up(antalBlock)</code> - flyttar upp drönaren. Koden <code>up()</code> flyttar drönaren ett block up. 
				Koden <code>up(5)</code> flyttar drönaren 5 block upp.</li>
			<li><code>down(antalBlock)</code> - flyttar ner drönaren.</li>
			<li><code>left(antalBlock)</code> - flyttar drönaren åt vänster.</li>
			<li><code>right(antalBlock)</code> - flyttar drönaren åt höger.</li>
			<li><code>fwd(antalBlock)</code> - flyttar drönaren framåt.</li>
			<li><code>back(antalBlock)</code> - flyttar drönaren bakåt.</li>
			<li><code>turn(antalVridningar)</code> - vänder drönaren 90 grader åt höger. Koden <code>turn(2)</code> 
				vänder drönaren två gånger åt höger så att den pekar i rakt motsatt riktning.</li>
		</ul>
		
		<h3>Gör väggar och tak</h3>
		<p>Ändra koden till:</p>
		<p><img src="images/code2.png" alt="Kod 2" width="390" height="185"/> </p>
		<p>Det som står efter <code>//</code> är så kallad kommentarer. Kommentarer är till för den som läser koden och exekveras inte.</p>
		<p>Provkör programmet i Minecraft!</p>
		
		<figure>
			<img src="images/minecraft3.png" alt="Mitt hus" width="700" height="393"/> 
			<figcaption>Mitt hus</figcaption>
		</figure>
		
		<h3>Gör en variabel</h3>
		<p>Om du vill ändra storlek på huset så att det är 5*5 block istället för 10*10 block, så måste du gå in och byta ut en siffra 
			på sex olika ställen i koden. För att göra sådana ändringar enklare, kan du införa en variabel istället för att 
			använda siffran 10.</p>
		<p>Ändra koden till:</p>
		<p><img src="images/code3.png" alt="Kod 3" width="380" height="200"/> </p>
		<p>Prova att ge variabeln <code>storlek</code> olika värden.</p>
		
		<h3>Låt användaren bestämma storleken</h3>
		<p>Istället för att ändra värdet på variabeln <code>storlek</code> inne i koden, kan du låta användaren ange storleken inifrån
			Minecraft. Detta gör du genom att ta bort variabeln och istället ge funktionen en så kallad <b>parameter</b> 
			innanför parenteserna.</p>
		<p>Ändra koden till:</p>
		<p><img src="images/code4.png" alt="Kod 4" width="380" height="185"/> </p>
		<p>Kör koden inifrån Minecraft genom att exempelvis skriva:</p>
		<pre>/js mitthus(10)</pre>
		
		<figure>
			<img src="images/minecraft4.png" alt="Flera hus" width="700" height="393"/> 
			<figcaption>Olika stora hus</figcaption>
		</figure>
		
		<h3>Kedja ihop byggkommandona</h3>
		<p>Istället för att skriva varje byggkommando som <code>d.<em>kommando();</em></code> kan man kedja
		ihop allt byggande med hjälp av punkter till <code>d.<em>kommando().kommando().kommando()</em>;</code>.</p>
		<p>Koden kan skrivas som:</p>
		<p><img src="images/code5.png" alt="Kod 5" width="600" height="125"/> </p>
		<p>där parameternamnet har förkortats till <code>s</code>.</p>
		<p>Man kan också använda en kedja av kommandon som är uppdelad på flera rader.</p>
		<p><img src="images/code6.png" alt="Kod 6" width="370" height="200"/> </p>
		
		<h2>Skriv en villkorssats och ge ett felmeddelande</h2>
		<p>När man låter användare ange parametervärden är det en god idé att kontrollera vad användaren faktiskt matat in, 
			och eventuellt ge ett felmeddelande. Det kan exempelvis fungera så här: </p>
		<div style="width: 30em; margin: auto">
			Om användaren angett en storlek mindre än 3 <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ge ett felmeddelande <br />
			annars <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bygg huset
		</div>
		<p>En sådan villkorssats kan du skriva med hjälp av en så kallad if-else-sats. 
			Principen för en if-else-sats visas här:</p>
		<pre>if (<span style="color: green;"><em>villkor</em></span>) {
	<span style="color: green;">//kod som skall köras om villkoret är sant </span>
} else {
	<span style="color: green;">//kod som skall köras om villkoret är falskt </span>
}</pre>
		<p><span style="color: green;"><em>villkor</em></span> skall vara ett logiskt uttryck, det vill
			säga ett uttryck som är antingen sant eller falskt, exempelvis en olikhet.</p>
		<p>Felmeddelandet kan visas på en Minecraft-skylt. Drönaren kan göra en skylt med hjälp
			av metoden <code>sign</code>.</p>
		<p>Ändra koden till:</p>
		<p><img src="images/code7.png" alt="Kod 7" width="625" height="185"/> </p>
		<p>Provkör:</p>
		<pre>/js mitthus(2)</pre>
		<figure>
			<img src="images/minecraft5.png" alt="Felmeddelande" width="700" height="393"/> 
			<figcaption>Felmeddelande</figcaption>
		</figure>
		
		<p>För mer information (på engelska) om skyltar se 
			<a href="https://github.com/walterhiggins/ScriptCraft/blob/master/docs/API-Reference.md#dronesign-method">Drone.sign() method</a>.</p>
		
		<h2>Skriv en loop</h2>
		<p>Om man vill göra ett flervåningshus, skulle man kunna: bygga ett hus, gå upp ett steg, bygga ett hus, gå upp ett steg, o.s.v.
			För ett trevåningshus skulle sådan kod kunna se ut så här:</p>
		<p><img src="images/code8.png" alt="Kod 8" width="625" height="262"/> </p>
		<p>Istället för att skriva samma två rader kod tre gånger, kan man göra en loop. Ett sätt att göra en loop
			är att skriva en så kallad for-sats. En for-sats kan se ut på många olika sätt men en enkel princip är
			att använda koden: </p>
		<pre>for (var i = 0; i &lt; <span style="color: green;"><em>antalUpprepningar</em></span>; i++) {
	<span style="color: green;">//kod som skall upprepas </span>
}</pre>
		<p><span style="color: green;"><em>antalUpprepningar</em></span> är antingen ett tal skrivet som en siffra, eller
			ett tal som är lagrat i en variabel eller parameter.</p>
		<p>En for-sats som bygger ett hus tre gånger ser ut som i koden nedan:</p>
		<p><img src="images/code9.png" alt="Kod 9" width="654" height="232"/> </p>
		<p>Raderna 9 och 10 körs tre gånger. Först gången är variabeln i=0, andra gången är i=1, tredje gången är i=2; därefter 
			räknas i upp och loopen avslutas 
			eftersom i inte längre är mindre än 3.</p>
		<p>Du kan också införa ännu en parameter för att låta användaren ange antal våningar. I koden nedan kallas denna parameter 
			för <code>n</code> och for-satsen utförs <code>n</code>gånger.</p>
		<p><img src="images/code10.png" alt="Kod 10" width="657" height="230"/> </p>
		<p>Provkör koden inifrån Minecraft:</p>	
		<pre>/js mitthus(20, 4)</pre>
		
		<figure>
			<img src="images/minecraft6.png" alt="Felmeddelande" width="700" height="393"/> 
			<figcaption>Höghus</figcaption>
		</figure>
		
		<h2>Gör egna hus,</h2>
		<p>eller tunnlar, eller järnvägar, eller villa-kvarter, eller...</p>
		<p>För mer information (på engelska) om drönaren, se 
			<a href="https://github.com/walterhiggins/ScriptCraft/blob/master/docs/API-Reference.md#drone-plugin">ScriptCraft/API - Drone Plugin</a>. </p>
			
		<figure>
			<img src="images/MCFractals.gif" alt="Minecraft fraktaler" width="506" height="263"/> 
			<figcaption><a href="https://github.com/malinc/MinecraftFractals">Minecraft-fraktaler</a> programmerade med ScriptCraft</figcaption>
		</figure>	
		
	</article>
	
</body>