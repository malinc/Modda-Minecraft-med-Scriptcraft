<!DOCTYPE html>
<html lang="sv">
<head>
	<title>Modda Minecraft med ScriptCraft -
		Installera och kom igång!
	</title>
	<meta charset=utf-8 >
	<link rel="stylesheet" href="minecraft.min.css" type="text/css" />
</head>
<body>
	<header>Modda Minecraft med ScriptCraft</header>
	<article>
		<h1>Installera och kom igång!</h1>
		
		<p>ScriptCraft är ett plugin till en Minecraft-server. Med ScriptCraft kan du modda Minecraft genom att programmera 
			i Javascript. ScriptCraft är speciellt gjord för nybörjare och innehåller bland annat en så kallad drönare 
			(drone på engelska). Drönaren används för att bygga saker i Minecraft och du programmerar själv vad drönaren skall 
			bygga. </p>	
		<p>För att använda ScriptCraft måste du först sätta upp en egen server. ScriptCraft är gjord för att fungera med en så
			kallad Bukkit-server.  </p>
		<p>Det finns utförliga instruktioner på engelska för installering av både <a href="http://scriptcraftjs.org/">ScriptCraft</a> och 
			<a href="http://wiki.bukkit.org/Setting_up_a_server">CraftBukkit</a>. Det här en sammanfattning på svenska.  </p>
		<p>När man skriver kod använder man inte vanliga ordbehandlare (som exempelvis Word) eftersom ordbehandlare formaterar texten. 
			Det finns speciella utvecklingsmiljöer gjorda för 
			programmering som ofta är svåra att använda för nybörjare. Det finns också enklare texteditorer som inte är så avancerade men 
			lättanvända. Här får du förslag på en texteditor som inte är allt 
			för avancerad men funkar bra för programmering.   </p>
		<p>För att kunna modda Minecraft måste du ha ett Minecraft-konto. All annan programvara som behövs är gratis.</p>
			
			
		<h2>Ladda ner och installera en texteditor</h2>
		<h3>Linux</h3>
		<p>Använd exempelvis <b>gedit</b> vilket är förinstallerat på många Linux-distributioner. </p>
		<h3>Mac</h3>
		<p>Installera <b>TextWrangler</b> från App Store.</p>
		<h3>Windows</h3>
		<p>Ladda ner och installera <a href="http://notepad-plus-plus.org/">Notepad++</a>. </p>
		
		<h2>Sätt upp Bukkit-servern</h2>
		
		<p>Om du inte redan har Java installerat så <a href="http://www.java.com/sv/">installera det</a>!</p>
		
		<h3>Linux</h3>
		<ol>
			<li>
				<dl>
					<dt>Hämta serverfilen</dt>
					<dd>För att köra servern behöver du en serverfil som skall placeras på ett lämpligt ställe.</dd>
				</dl>
				<ol>
					<li>Gör en ny mapp kallad <em>CraftBukkit</em> i din <em>Hem</em>-mapp.</li>
					<li>Ladda ner den senaste versionen av serverfilen 
							<a href="http://dl.bukkit.org/latest-rb/craftbukkit.jar">härifrån</a>. Serverfilen heter 
							<em>craftbukkit-1.6.4-R2.0.jar</em> eller något liknande.</li>
					<li>Placera den nedladdade filen i den nygjorda mappen <em>CraftBukkit</em>.</li>
				</ol>
			</li>
			<li>
				<dl>
					<dt>Gör ett startscript</dt>
					<dd>För att på ett enkelt sätt kunna starta servern behöver du ett startscript.</dd>
				</dl>
				<ol>
					<li>Öppna gedit (eller en annan texteditor) och klistra in följande kod
						<pre>#!/bin/sh
BINDIR=$(dirname "$(readlink -fn "$0")")
cd "$BINDIR"
java -Xmx1024M -jar <span style="color: green;">craftbukkit-1.6.4-R2.0.jar</span> -o true</pre>
					Om din serverfil inte heter <em>craftbukkit-1.6.4-R2.0.jar</em> så byt ut filnamnet (den gröna texten) till
					rätt filnamn.
					</li>
					<li>Spara filen som <em>craftbukkit.sh</em> i mappen <em>CraftBukkit</em></li>
					<li>
						<dl>
							<dt>Ändra behörigheten på startscriptet så att den blir körbar</dt>
							<dd>Öppna terminalen och skriv in följande kommando:</dd>
							<dd><code>chmod +x ~/CraftBukkit/craftbukkit.sh</code></dd>
						</dl>
						
					</li>
				</ol>
			</li>
			<li>
				<dl>
					<dt>Starta servern</dt>
					<dd>Första gången du kör servern skapas de filer som behövs för att konfigurera servern. 
						Starta servern genom att skriva följande kommando i terminalen:</dd>
					<dd><code>~/CraftBukkit/craftbukkit.sh</code></dd>
					<dd>Efter att alla filer skapats, stänger du ner servern genom att skriva <code>stop</code>
						i terminalfönstret. Stäng <b>alltid</b> ner servern genom att skriva <code>stop</code>.
						</dd>
				</dl>
			</li>
		</ol>
		
		<h3>Mac</h3>
		<ol>
			<li>
				<dl>
					<dt>Hämta serverfilen</dt>
					<dd>För att köra servern behöver du en serverfil som skall placeras på ett lämpligt ställe.</dd> 
				</dl>
				<ol>
					<li>Öppna Finder-fönstret och gör en ny mapp kallad <em>CraftBukkit</em> 
						inuti mappen <em>Dokument</em>.</li>
					<li>Ladda ner den senaste versionen av serverfilen 
								<a href="http://dl.bukkit.org/latest-rb/craftbukkit.jar">härifrån</a>. Serverfilen heter 
								<em>craftbukkit-1.6.4-R2.0.jar</em> eller något liknande.</li>
					<li>Flytta serverfilen från mappen <em>Hämtade filer</em> till den nygjorda mappen 
						<em>CraftBukkit</em>.</li>
				</ol>
			</li>
			<li>
				<dl>
					<dt>Gör ett startscript</dt>
					<dd>För att på ett enkelt sätt kunna starta servern behöver du ett startscript.</dd>
				</dl>
				<ol>
					<li>Öppna TextWrangler (eller en annan texteditor) och klistra in följande kod
						<pre>#!/bin/bash
cd "$( dirname "$0" )"
java -Xmx1024M -jar <span style="color: green;">craftbukkit-1.6.4-R2.0.jar</span> -o true</pre>
					Om din serverfil inte heter <em>craftbukkit-1.6.4-R2.0.jar</em> så byt ut filnamnet (den gröna texten) till
					rätt filnamn.
					</li>
					<li>Spara filen som <em>start_server.command</em> i mappen <em>CraftBukkit</em>.</li>
					<li>
						Ändra behörigheten på startscriptet så att den blir körbar 
						<ul>
							<li>Öppna programmet Terminal. Du hittar Terminal i mappen <em>Verktygsprogram</em> inuti <em>Program</em>-mappen. </li>
							<li>När du skall ändra behörigheten på filen <em>start_server.command</em> skall du ange filnamnet och var filen ligger. 
								Detta kan du göra genom att dra filen <em>start_server.command</em> in i terminal-fönstret, då anges hela 
								sökvägen till filen.
								<ul>
									<li>Börja skriva kommandot <code>chmod a+x </code> i terminalfönstret. </li>
									<li>Se till att det finns en blank efter kommandot (använd mellanslagstangenten).</li>
									<li>Klicka <b>inte</b> på returtangenten.</li>
									<li>Dra in filen <em>start_server.command</em> från Findern in i terminalfönstret.</li>
									<li>Klicka på returtangenten!</li>
								</ul>
							</li>
						</ul>
					</li>
				</ol>
			</li>
			<li>
				<dl>
					<dt>Starta servern</dt>
					<dd>Första gången du kör servern skapas de filer som behövs för att konfigurera servern. 
						Starta servern genom att dubbelklicka 
						på <em>start_server.command</em>. Efter att alla filer skapats, stänger du ner servern genom att skriva <code>stop</code>
						i terminalfönstret. Stäng <b>alltid</b> ner servern genom att skriva <code>stop</code>.
						</dd>
				</dl>
			</li>
		</ol>
		
		<h3>Windows</h3>
		<p>Till Windows finns det ett grafiskt användargränssnitt kallat 
			<a href="http://dev.bukkit.org/bukkit-plugins/bukkitgui/">BukkitGUI</a> (Graphical User Interface).</p>
		<ol>
			<li>
				<dl>
					<dt>Hämta serverfilen</dt>
					<dd>För att köra servern behöver du en serverfil som skall placeras på ett lämpligt ställe.</dd> 
				</dl>
				<ol>
					<li>Gör en ny mapp kallad <em>CraftBukkit</em> 
						inuti mappen <em>Mina Dokument</em>.</li>
					<li>Ladda ner den senaste versionen av serverfilen 
								<a href="http://dev.bukkit.org/bukkit-plugins/bukkitgui/">härifrån</a>.</li>
					<li>Flytta serverfilen till den nygjorda mappen <em>CraftBukkit</em> och dubbelklicka på <em>BukkitGUI.exe</em>.</li>
				</ol>
			</li>
			<li>
				Starta servern
				<ol>
					<li>Välj tabben <em>SuperStart</em> och klicka på <em>Download Latest Recommended Build</em>.</li>
					<li>Klicka på <em>Launch Server</em>.</li>
					<li>Om du får felmeddelandet <em>The java path could not be found</em>, gör följande:
						<ol>
							<li>Välj <em>Alternative java path</em> efter <em>Java version</em>.</li>
							<li>Sök efter <em>java.exe</em> och klicka på ok när sökvägen hittats</li>
						</ol>
					</li>
					<li>Efter dessa inställningar kan du kan starta och stänga av servern under tabben <em>General</em>.
						Klicka på <em>Stop</em> för att stänga ner servern.</li>
					
				</ol>
			</li>
			
			
		</ol>
		
		<h2>Konfigurera servern (valfritt)</h2>
		<p>När du installerat CraftBukkit kan du konfigurera servern.</p>
		<p> Med Linux och Mac konfigurerar du servern genom att 
			öppna filen <em>server.properties</em> med den texteditor du laddat ner. Skriv sedan in de ändringar du vill 
			göra. </p>
		<p>Med Windows väljer du tabben <em>Server Options</em>.</p> 
		<p>Här är några exempelkonfigureringar:</p>
			
		<pre># en helt platt värld kan vara bra om man vill bygga allt själv
level-type=FLAT
generate-structures=false

# creative mode
gamemode=1
pvp=false

# inställningar som kan vara bra i klassrumsmiljöer
online-mode=false
spawn-npcs=false
spawn-monsters=false</pre>
		<p>När du körde servern första gången skapades det en värld. För ett göra en ny värld med den nya konfigureringen måste den
			gamla världen slängas (eller sparas undan). Släng mappen <em>world</em>, det skapas en ny mapp nästa gång du kör servern. </p>

		<p>För mer information se den engelska 
			Minecraft-sidan 
			<a href="http://minecraft.gamepedia.com/Server.properties">server.properties - Minecraft Wiki</a>. </p>
		
		<h2>Hämta ScriptCraft</h2>
		<p>Ladda ner den senaste versionen av ScriptCraft <a href="http://scriptcraftjs.org/download/latest/">härifrån</a>. 
			Flytta filen <em>Scripcraft.jar</em> till CraftBukkit/plugins.</p>
			
		<h2>Testa servern i Minecraft</h2>
		
		<ol>
			<li>Starta Bukkit-servern.</li>
			<li>
				<dl>
					<dt>Gör dig själv till "server operatör"</dt>
					<dd>Med Linux eller Mac skriver du <code>op <span style="color: green">spelarnamn</span></code>
						i konsolen. Ordet spelarnamn skall bytas till ditt eget spelarnamn i Minecraft.</dd>
					<dd>Med Windows väljer du tabben <em>Server Options</em> och lägger till ditt spelarnamn till <em>OPs</em>.</dd>
				</dl>
			</li>
			<li>Starta Minecraft.</li>
			<li>
				<dl>
					<dt>Välj rätt version av Minecraft. </dt>
					<dd>Den senaste versionen av Minecraft är troligen nyare än den senaste rekommenderade versionen av CraftBukkit.
						Om CraftBukkit-filen heter <em>craftbukkit-1.6.4-R2.0.jar</em> så är den gjord för version 1.6.4. </dd>
					<dd>Välj <em>Edit Profile</em> i Minecraft och välj sedan en version som passar CraftBukkit efter <em>Use version</em>.</dd>
					<dd>Spara profilen.</dd>
					<dd>Det är också möjligt att ladda ner nyare versioner av CraftBukkit men de nyare versionerna är oftast 
						beta-versioner. Du hittar beta-versioner av CraftBukkit 
						<a href="https://dl.bukkit.org/downloads/craftbukkit/list/beta/">här</a>.</dd>
				</dl>
			</li>
			<li>Klicka på Play och välj Multiplayer.</li>
			<li>Klicka på Add server.</li>
			<li>Välj ett servernamn vilket som helst och skriv in <code>localhost</code> under Server Address.</li>
			<li>Börja spela på den nya servern.</li>
			<li>Klicka på t för att få upp en textrad som man kan skriva på. Skriv in
				<pre>/js 1+1</pre></li>
			<li>Om talet 2.0 dyker upp så har du lyckats köra din första Javascript-kod i Minecraft! </li>
		</ol>
		
		<h2>Några enkla byggkommandon</h2>
		<p>Alla byggblock i Minecraft har ett id-nummer. På sidan <a href="http://minecraft-ids.grahamedgecombe.com/">Minecraft ID List</a> 
			finns en fullständig lista. Exempelvis har guld id-nummer 41 och röd ull id-nummer 35:14.</p>
		<p>Prova att skriva in kommandona:</p>
		<pre>/js box('41')
/js box('35:14')</pre>
		<p>Ett rätblock har en bredd, ett djup och en höjd. Gör ett rätblock genom att skriva kommandot:</p>
		<pre>/js box('41', 3, 5, 10)</pre>
		<p>Hur gör man ett rätblock av röd ull som är 2 block bred, 100 block hög och 1 block djupt? Testa dig fram!</p>
		<figure>
			<img src="images/minecraft1.png" alt="Pelare av röd ull" width="700" height="393"/> 
			<figcaption>Pelare av röd ull</figcaption>
		</figure>
		<p>Det finns även kommandon för att göra cylindrar. Prova kommandona:</p>
		<pre>/js cylinder('41', 3, 5)
/js cylinder0('41', 5, 3)</pre>
		<p>Du kan återanvända kommandon som du skrivit. När textraden visas trycker du på pil upp eller pil ned för att se gamla kommandon.
			Sedan kan du förflytta dig längs ett kommando med hjälp av högerpil och vänsterpil.</p>
		<p>Hur gör man en ihålig guldcylinder som har radien 10 och höjden 2?</p>
		<figure>
			<img src="images/minecraft2.png" alt="Guldcylindrar" width="700" height="393"/> 
			<figcaption>Guldcylindrar i skymningen</figcaption>
		</figure>
		<p>Om man vill göra tak till hus kan man använda sig av ett prisma. Prova kommandona:</p>
		<pre>/js prism('35:14', 6, 10)
/js prism0('35:14', 15, 5)</pre>

		<h3>Färdiga program</h3>
		<p>I mappen CraftBukkit/plugins/scriptcraft/plugins/drone/contrib finns exempelprogram som olika användare gjort. Prova 
			några av programmen genom att skriva:</p>
		<pre>/js rainbow(30)
/js amazing(5, 7)
/js dancefloor(10, 8)</pre>
		<p>Öppna något av programmen i texteditorn och betrakta koden!</p>
		<p>Om du vill göra ett längre program själv, måste du skriva det i texteditorn, spara filen, och sedan köra programmet
			inifrån Minecraft. Se nästa sida <a href="programDrone.php">Programmera drönaren!</a> för mer information.</p>
	</article>
	
</body>