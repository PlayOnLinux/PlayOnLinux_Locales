<h1>Home</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnLinux" /><span class="title">I'd like to learn more about PlayOnLinux</span><span class="description">What is PlayOnLinux?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
   <h2>What is PlayOnLinux ?</h2>
   <p>PlayOnLinux is a piece of software which allows you <b>to easily install and use</b> numerous <b>games and apps designed to run with Microsoft&reg; Windows&reg;.</b><br/>
   Few games are compatible with GNU/Linux at the moment and it certainly is a factor preventing the migration to this system. PlayOnLinux brings a cost-free, accessible and efficient solution to this problem.<br/></p>
   <h2>What are PlayOnLinux's features?</h2>
   <p>Here is a non-exhaustive list of the interesting points to know:</p>

	<ul>
   <li>You don't have to own a Windows&reg; license to use PlayOnLinux.</li>
   <li>PlayOnLinux is based on Wine, and so profits from all its features yet it keeps the user from having to deal with its complexity.</li>
   <li>PlayOnLinux is free software.</li>
   <li>PlayOnLinux uses Bash and Python.</li>
	</ul>
   <p>Nevertheless, PlayOnLinux has some bugs, as every piece of software:</p>
	<ul>
   <li>Occasional performance decrease (image may be less fluid and graphics less detailed).</li>
   <li>Not all games are supported. Nevertheless, you can use our manual installation module.</li>
	</ul>

<h2>A few screenshots of PlayOnLinux</h2>
<p>
<?php
for($i = 0; $i < 6; $i++)
{
	?><a href="<?php echo $url; ?>/images/presentation/capture<?php echo $i+1; ?>.<?php echo $lng; ?>.png" title="PlayOnLinux" class="lightbox"><img src="<?php echo $url; ?>/images/presentation/min/capture<?php echo $i+1; ?>.<?php echo $lng; ?>.png" alt="" /></a>&nbsp;&nbsp;<?php
}
?>
</p>
</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnLinux" /><span class="title">I'd like to download PlayOnLinux</span><span class="description">Latest version : <?php include($racine."/script_files/version2.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Download PlayOnLinux</h2>
<p>The latest version of PlayOnLinux is: <?php echo $version; ?><br />To get this version, go to the <a href='<?php echo $prefixe; ?>/download.html'>download page</a>.</p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnLinux" /><span class="title">I'd like to learn how to use PlayOnLinux</span><span class="description">Where can I get help?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Learn how to use PlayOnLinux</h2>
<p>You can read the <a href="<?php echo $page_doc; ?>">documentation</a> or ask for help on the <a href="<?php echo $prefixe; ?>/forums.html">forums</a>.</p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnLinux" /><span class="title">I'd like to help PlayOnLinux</span><span class="description">What can I do to help PlayOnLinux's team ?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Help the project</h2>
<p>There are many ways to help the team. You can:</p>
<ul>
<li>Write some news and send it to the administrators</li>
<li>Help the other users on the <a href="<?php echo $prefixe; ?>/forums.html">forums</a></li>
<li>Send us your installation script</li>
<li><a href='donate.html'>Donate</a></li>

</ul>
</div>
<?php
// PLEASE REPLACE "en" BY THE CODE OF YOUR LANGUAGE 
// PLEASE REPLACE "en" IN LastNews_en ALSO

if(get_last_news("en") == $_COOKIE["LastNews_en"])
	$last = "";
else
	$last = "_2";
?>
<div class="presentation_item" onclick="pres_show(6)" id="presentation6"><img src="<?php echo $url; ?>/images/design/icone6.png" alt="PlayOnLinux" /><span class="title">I'd like to contact the team</span><span class="description">How can I contact the team?</span></div>
<div id="pres_item6" class="presentation_item_hidden">
<h2>Contact the team</h2>
<p>To contact the team, you can: </p>
<ul>
<li>Go on #playonlinux channel on irc.freenode.com</li>
<li>Send a mail to contact &lt; at &gt; playonlinux.com</li>
</ul>
</div>

<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5<?php echo $last; ?>.png" alt="PlayOnLinux" /><span class="title">I'd like to read the latest news</span><span class="description">The ten latest news</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng); ?>
</div>
<div class="espace"></div>
