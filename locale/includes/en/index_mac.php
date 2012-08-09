<h1>Accueil</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnMac" /><span class="title">I'd like to learn more about PlayOnMac</span><span class="description">What is PlayOnMac ?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
   <h2>What is PlayOnMac ?</h2>
   <p>PlayOnMac is like wineskin, winebottler or crossover a piece of sofware which allows you <b>to easily install and use</b> numerous <b>games and softwares designed to run with Microsoft&reg;'s Windows&reg;</b>.</p>
   <h2>What are PlayOnMac's features?</h2>
   <p>Here is a non-exhaustive list of the interesting points to know:</p>

	<ul>
   <li>You don't have to own a Windows&reg; license to use PlayOnMac.</li>
   <li>PlayOnMac is based on Wine, and so profits from all its possibilities yet it keeps the user away from its complexity while exploiting some of its advanced functions.</li>
   <li>PlayOnMac is a free software.</li>
   <li>PlayOnMac uses Bash and Python</li>
	</ul>
   <p>Nevertheless, PlayOnMac has some defects, as every piece of software:</p>
	<ul>
   <li>Not all games are supported. Nevertheless, you can use our manual installation module.</li>
	</ul>

<h2>A few screenshots of PlayOnMac</h2>
<p>
<?php
for($i = 0; $i < 7; $i++)
{
	?><a href="<?php echo $url; ?>/images/presentation_mac/capture<?php echo $i+1; ?>.fr.png" title="PlayOnMac" class="lightbox"><img src="<?php echo $url; ?>/images/presentation_mac/min/capture<?php echo $i+1; ?>.fr.png" alt="" /></a>&nbsp;&nbsp;<?php
}
?>
</p>
</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnMac" /><span class="title">I'd like to download PlayOnMac</span><span class="description">Latest version : <?php include($racine."/script_files/version_mac.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Download PlayOnMac</h2>
<p>The latest version of PlayOnMac is : <?php echo $version; ?><br />To get this version, go on the <a href='<?php echo $prefixe; ?>/download.html'>download page</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnMac" /><span class="title">I'd like to learn how to use PlayOnMac</span><span class="description">Where can I get help?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Learn how to use PlayOnMac</h2>
<p>You can read the <a href="<?php echo $page_doc; ?>">documentation</a> or ask for help on the <a href="<?php echo $prefixe; ?>/forums.html">forums</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnMac" /><span class="title">I'd like to help PlayOnMac</span><span class="description">What can I do to help PlayOnMac's team ?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Help the projet</h2>
<p>There are many ways by which you can hep the team. You can :</p>
<ul>
<li>Write some news and send them to the newsers or the administrators</li>
<li>Help the other users on the <a href="<?php echo $prefixe; ?>/forums.html">forums</a></li>
<li>Send your installation script</li>
</ul>
</div>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5.png" alt="PlayOnMac" /><span class="title">I'd like to read the latest news</span><span class="description">The ten latest news</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng,"playonmac"); ?>
</div>
<div class="espace"></div>
