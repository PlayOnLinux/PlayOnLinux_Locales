<h1>Accueil</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnMac" /><span class="title">J'aimerais en savoir plus sur PlayOnMac</span><span class="description">Qu'est-ce que PlayOnMac ?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
<h2>Qu'est-ce que PlayOnMac ?</h2>
   <p>PlayOnMac est, comme wineskin, crossover ou winebottler, un logiciel vous permettant <b>d'installer et d'utiliser facilement</b> de nombreux <b>jeux et logiciels prévus pour fonctionner exclusivement sous Windows&reg; de Microsoft&reg;</b>.</p>
<h2>Quelles sont les caractéristiques de PlayOnMac ?</h2>
   <p>Voici une liste, non exaustive, des points intéressants à connaître :</p>
	<ul>
   <li>Il n'est pas nécessaire de posséder une licence du système Windows&reg; pour utiliser PlayOnMac.</li>
   <li>PlayOnMac est simple d'utilisation</li>
   <li>PlayOnMac se base sur le logiciel Wine, et profite de toutes ses possibilités, tout en évitant à l'utilisateur d'appréhender sa complexité et en exploitant certaines de ses fonctions avancées.</li>
   <li>PlayOnMac est un logiciel libre et gratuit.</li>
   <li>PlayOnMac est écrit en bash Bash et en Python</li>
	</ul>
   <p>PlayOnMac présente néanmoins, comme tout logiciel, quelques inconvénients :</p>
	<ul>
   <li>Toutes les applications ne sont pas supportées. Vous pouvez néanmoins utiliser notre module d'installation manuelle.</li>
	</ul>

<h2>Quelques captures d'écran de PlayOnMac</h2>
<p>
<?php
for($i = 0; $i < 7; $i++)
{
	?><a href="<?php echo $url; ?>/images/presentation_mac/capture<?php echo $i+1; ?>.fr.png" title="PlayOnMac" class="lightbox"><img src="<?php echo $url; ?>/images/presentation_mac/min/capture<?php echo $i+1; ?>.fr.png" alt="" /></a>&nbsp;&nbsp;<?php
}
?>
</p>
</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnMac" /><span class="title">J'aimerais télécharger PlayOnMac</span><span class="description">Dernière version : <?php include($racine."/script_files/version_mac.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Télécharger PlayOnMac</h2>
<p>La dernière version de PlayOnMac est <?php echo $version; ?><br />Pour obtenir cette version, rendez vous sur <a href='<?php echo $prefixe; ?>/download.html'>la page de téléchargement</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnMac" /><span class="title">J'aimerais apprendre à utiliser PlayOnMac</span><span class="description">Comment puis-je me documenter ?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Apprendre à utiliser PlayOnMac</h2>
<p>Vous pouvez aller lire la <a href="<?php echo $page_doc; ?>">documentation</a> ou demander de l'aide sur les <a href="<?php echo $prefixe; ?>/forums.html">forums</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnMac" /><span class="title">J'aimerais aider le projet PlayOnMac</span><span class="description">Que puis-je faire pour aider
 l'équipe du projet ?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Participer au projet</h2>
<p>Il existe plein de façon d'aider le projet. Vous pouvez :</p>
<ul>
<li>Proposer des news en contactant par message privé les newseurs ou les administrateurs</li>
<li>Aider les utilisateurs sur les <a href="<?php echo $prefixe; ?>/forums.html">forums</a></li>
<li>Proposer vos scripts d'installation</li>
</ul>
</div>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5.png" alt="PlayOnLinux" /><span class="title">J'aimerais lire les dernières nouvelles du projet</span><span class="description">Les dix dernières news</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng, "playonlinux"); ?>
</div>
<div class="espace"></div>
