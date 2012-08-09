<h1>Accueil</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnLinux" /><span class="title">J'aimerais en savoir plus sur PlayOnLinux</span><span class="description">Qu'est-ce que PlayOnLinux ?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
<h2>Qu'est-ce que PlayOnLinux ?</h2>
   <p>PlayOnLinux est un logiciel vous permettant <b>d'installer et d'utiliser facilement</b> de nombreux <b>jeux et logiciels prévus pour fonctionner exclusivement sous Windows&reg; de Microsoft&reg;</b>.<br/>
   En effet, à l'heure actuelle, encore peu de jeux vidéo sont compatibles avec GNU/Linux, ce qui peut être un frein à l'adoption de ce système. PlayOnLinux apporte une solution accessible et efficace à ce problème, gratuitement et dans le respect du logiciel libre.</p>
<h2>Quelles sont les caractéristiques de PlayOnLinux ?</h2>
   <p>Voici une liste, non exaustive, des points intéressants à connaître :</p>
	<ul>
   <li>Il n'est pas nécessaire de posséder une licence du système Windows&reg; pour utiliser PlayOnLinux.</li>
   <li>PlayOnLinux se base sur le logiciel Wine, et profite de toutes ses possibilités, tout en évitant à l'utilisateur d'appréhender sa complexité et en exploitant certaines de ses fonctions avancées.</li>
   <li>PlayOnLinux est un logiciel libre et gratuit.</li>
   <li>PlayOnLinux est écrit en bash Bash et en Python</li>
	</ul>
   <p>PlayOnLinux présente néanmoins, comme tout logiciel, quelques inconvénients :</p>
	<ul>
   <li>Perfomances parfois moins bonnes (image un peu moins fluide, graphismes moins détaillés, etc...).</li>
   <li>Tous les jeux ne sont pas supportés. Vous pouvez néanmoins utiliser notre module d'installation manuelle.</li>
	</ul>

<h2>Quelques captures d'écran de PlayOnLinux</h2>
<p>
<?php
for($i = 0; $i < 6; $i++)
{
	?><a href="<?php echo $url; ?>/images/presentation/capture<?php echo $i+1; ?>.<?php echo $lng; ?>.png" title="PlayOnLinux" class="lightbox"><img src="<?php echo $url; ?>/images/presentation/min/capture<?php echo $i+1; ?>.<?php echo $lng; ?>.png" alt="" /></a>&nbsp;&nbsp;<?php
}
?>
</p>
</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnLinux" /><span class="title">J'aimerais télécharger PlayOnLinux</span><span class="description">Dernière version : <?php include($racine."/script_files/version2.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Télécharger PlayOnLinux</h2>
<p>La dernière version de PlayOnLinux est <?php echo $version; ?><br />Pour obtenir cette version, rendez vous sur <a href='<?php echo $prefixe; ?>/download.html'>la page de téléchargement</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnLinux" /><span class="title">J'aimerais apprendre à utiliser PlayOnLinux</span><span class="description">Comment puis-je me documenter ?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Apprendre à utiliser PlayOnLinux</h2>
<p>Vous pouvez aller lire la <a href="<?php echo $page_doc; ?>">documentation</a> ou demander de l'aide sur les <a href="<?php echo $prefixe; ?>/forums.html">forums</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnLinux" /><span class="title">J'aimerais aider le projet PlayOnLinux</span><span class="description">Que puis-je faire pour aider
 l'équipe du projet ?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Participer au projet</h2>
<p>Il existe plein de façon d'aider le projet. Vous pouvez :</p>
<ul>
<li>Proposer des news en contactant par message privé les newseurs ou les administrateurs</li>
<li>Aider les utilisateurs sur les <a href="<?php echo $prefixe; ?>/forums.html">forums</a></li>
<li>Proposer vos scripts d'installation</li>
<li><a href='donate.html'>Faire un don</a></li>
</ul>
</div>
<?php
//echo $_COOKIE["LastNews"];

if(get_last_news("fr") == $_COOKIE["LastNews_fr"])
	$last = "";
else
	$last = "_2";
?>
<div class="presentation_item" onclick="pres_show(6)" id="presentation6"><img src="<?php echo $url; ?>/images/design/icone6.png" alt="PlayOnLinux" /><span class="title">J'aimerais contacter l'équipe du projet</span><span class="description">Comment contacter l'équipe du projet ?</span></div>
<div id="pres_item6" class="presentation_item_hidden">
<h2>Contacter l'équipe</h2>
<p>Pour contacter l'équipe du projet, vous pouvez : </p>
<ul>
<li>Par irc : aller sur le channel #playonlinux sur irc.freenode.com</li>
<li>Nous envoyer un mail a contact &lt; at &gt; playonlinux.com</li>
</ul>
</div>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5<?php echo $last; ?>.png" alt="PlayOnLinux" /><span class="title">J'aimerais lire les dernières nouvelles du projet</span><span class="description">Les dix dernières news</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng); ?>
</div>
<div class="espace"></div>
