<h1>Startsida</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnLinux" /><span class="title">Jag vill lära mig mer om PlayOnLinux</span><span class="description">Vad är PlayOnLinux ?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
   <h2>Vad är PlayOnLinux ?</h2>
   <p>PlayOnLinux är ett program som gör det möjligt att <b>enkelt installera och använda</b> många olika <b>spel och programvaror som utformats för att köra på Microsoft&reg;'s Windows&reg;</b>.<br/>
   Få spel är kompatibla med GNU/Linux för tillfället och det är en uppenbart något som hindrar en användares övergång till GNU/Linux. PlayOnLinux är en lättillgänglig och effektiv lösning på det här problemet, den är kostnadsfri och respekterar den fria programvaran.<br/></p>
   <h2>Vad innebär PlayOnLinux?</h2>
   <p>Det här är en del av det som är intressant att veta om PlayOnLinux:</p>

	<ul>
   <li>Du behöver inte äga en Windows&reg;-lisens för att använda PlayOnLinux.</li>
   <li>PlayOnLinux baseras på Wine, och utnyttjar alla dess möjligheter och håller användaren borta från alla dess komplexiteter samtidigt som det utnyttjar dess avancerade funktioner.</li>
   <li>PlayOnLinux är fri programvara.</li>
   <li>PlayOnLinux använder Bash och Python</li>
	</ul>
   <p>Icke desto mindre har PlayOnLinux vissa svagheter, som alla programvaror:</p>
	<ul>
   <li>Tillfällig prestandaförsämring (bilduppdateringen kan vara mindre [fluid] och grafiken mindre detaljerad).</li>
   <li>Inte alla spel stöds. Du kan inte desto mindre använda vår manuella installationmodul.</li>
	</ul>

<h2>Några skärmbilder av PlayOnLinux</h2>
<p>
<?php
for($i = 0; $i < 6; $i++)
{
	?><a href="<?php echo $url; ?>/images/presentation/capture<?php echo $i+1; ?>.<?php echo $lng; ?>.png" title="PlayOnLinux" class="lightbox"><img src="<?php echo $url; ?>/images/presentation/min/capture<?php echo $i+1; ?>.<?php echo $lng; ?>.png" alt="" /></a>&nbsp;&nbsp;<?php
}
?>
</p>
</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnLinux" /><span class="title">Jag vill ladda ner PlayOnLinux</span><span class="description">Senaste version : <?php include($racine."/script_files/version2.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Ladda ner PlayOnLinux</h2>
<p>Den senaste versionen av PlayOnLinux är : <?php echo $version; ?><br />För att ladda ner denna version, gå till <a href='<?php echo $prefixe; ?>/download.html'>nedladdningssidan</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnLinux" /><span class="title">Jag vill lära mig hur man använder PlayOnLinux</span><span class="description">Var kan jag få hjälp?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Lär dig använda PlayOnLinux</h2>
<p>Du kan läsa <a href="<?php echo $page_doc; ?>">dokumentationen</a> eller fråga efter hjälp på <a href="<?php echo $prefixe; ?>/forums.html">forumet</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnLinux" /><span class="title">Jag vill hjälpa till med PlayOnLinux</span><span class="description">Vad kan jag göra för att hjälpa PlayOnLinuxteamet ?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Hjälp projektet</h2>
<p>Det finns många sätt att hjälpa PlayOnLinux-teamet. Du kan :</p>
<ul>
<li>Skriva nyheter och skicka dem till nyhetarna eller administratörerna</li>
<li>Hjälpa andra användare på <a href="<?php echo $prefixe; ?>/forums.html">forumet</a></li>
<li>Skicka dina installations-script</li>
<li><a href='donate.html'>Donera</a></li>

</ul>
</div>
<?php
// PLEASE REPLACE "en" BY THE CODE OF YOUR LANGUAGE 
// PLEASE REPLACE "en" IN LastNews_en ALSO

if(get_last_news("sv") == $_COOKIE["LastNews_sv"])
	$last = "";
else
	$last = "_2";
?>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5<?php echo $last; ?>.png" alt="PlayOnLinux" /><span class="title">Jag vill läsa de senaste nyheterna</span><span class="description">De tio senaste nyheterna</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng); ?>
</div>
<div class="espace"></div>
