<h1>Créer un script pour <?php echo $website_name; ?>&nbsp;- Chapitre 9&nbsp;: Standardisation</h1>
<h2>La standardisation, qu'est-ce que ce truc encore&nbsp;?</h2>
<p>Afin de faciliter la lecture des scripts, la mise à jour, le débogage et la traduction, les scripts sont standardisés. Cela implique d'ajouter/modifier certaines choses afin d'uniformiser les scripts.</p>
<p>Nous allons voir tout ça, point par point.</p>

<?php
if($website_name == "PlayOnLinux")
{
	?>
	<h2>Rendre votre script disponible sous Mac OS X avec PlayOnMac</h2>
	<p>Il est peut-être utile de préciser (pour ceux qui l'ignorent) que le logiciel PlayOnLinux et le logiciel PlayOnMac ne sont qu'un seul et unique logiciel, avec un code identique. Juste le nom change suivant le système d'exploitation.</p>
	<p>Bref, il est possible de rendre votre script utilisable dans PlayOnMac, de manière très simple. Mais vous devez auparavant vous assurer qu'il fonctionne sous Mac OS X. Si vous n'avez pas de Mac OS X sous la main, et qu'il s'agit d'un petit logiciel simple, on peut dire qu'il fonctionnera (si il fonctionne correctement sous GNU/Linux) dans 99% des cas sous Mac OS X.</p>
	<p>Pour rendre votre script disponible sous Mac OS X, cochez la case "PlayOnMac compatible" dans la fenêtre d'ajout de script sur le site de PlayOnLinux.</p>
	<?php
}
elseif($website_name == "PlayOnMac")
{
	?>
	<h2>Votre script sera aussi disponible sous GNU/Linux avec PlayOnLinux</h2>
	<p>Il est peut-être utile de préciser (pour ceux qui l'ignorent) que le logiciel PlayOnLinux et le logiciel PlayOnMac ne sont qu'un seul et unique logiciel, avec un code identique. Juste le nom change suivant le système d'exploitation</p>
	<p>Lors de l'ajout de votre script, il sera automatiquement disponible dans PlayOnLinux, car si le programme fonctionne sous Mac OS X, alors il fonctionnera sous GNU/Linux (l'inverse n'est pas toujours vrai).</p>
	<?php
}
?>


<h2>Standardisation, c'est parti</h2>
<p>Nous allons maintenant voir plusieurs points pour la standardisation des scripts.</p>

<h2>La variable $TITLE</h2>
<p>Il est demandé de déclarer la variables <b>$TITLE</b>, avec le nom du script dedans, et d'utiliser cette variable chaque fois que vous avez besoin du nom du script.</p>
<h3>Exemple&nbsp;:</h3>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

TITLE="Mozilla Firefox" # à mettre dans tous les scripts

POL_SetupWindow_Init
...
POL_SetupWindow_presentation "$TITLE" "Mozilla" "http://www.mozilla.com" "VotrePseudo" "MozillaFirefox"
...
POL_Shortcut "firefox.exe" "$TITLE"
...'); ?>

<p>Adaptez évidemment avec le nom de votre script (qui correspond au nom du logiciel dans la plupart des cas).</p>
<p>La variable <b>$TITLE</b> est nécessaire notamment pour l'utilisation du système de débogage de <?php echo $website_name; ?>.</p>

<h2>Utiliser la variable $TITLE comme titre des fenêtres</h2>
<p>Afin que l'utilisateur ne soit pas perdu par différents titres de fenêtres, il est recommandé d'utiliser la variable $TITLE comme titre de fenêtre.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_message "Message" "$TITLE"
POL_SetupWindow_browse "Message" "$TITLE"
POL_SetupWindow_wait "Message" "$TITLE"'); ?>

<h2>La variable $PREFIX</h2>
<p>Il est recommandé de mettre le nom du préfixe dans la variable $PREFIX, afin de la voir du premier coup d'œil. Cela permet aussi d'éviter de répéter plusieurs fois le nom du préfixe.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

TITLE="Mozilla Firefox"
PREFIX="MozillaFirefox"

POL_SetupWindow_Init
...
POL_SetupWindow_presentation "$TITLE" "Mozilla" "http://www.mozilla.com" "VotrePseudo" "$PREFIX"
...
POL_Wine_SelectPrefix "$PREFIX"
...
POL_System_TmpCreate "$PREFIX"
...
'); ?>

<h2>Quelques infos sur le script</h2>
<p>Il est recommandé de mettre quelques infos sur le script au début, juste après le #!/bin/bash.</p>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('# Date : (Année-mois-jour heure-minute)
# Last revision : (Année-mois-jour heure-minute)
# Wine version used : 
# Distribution used to test : Distribution
# Author : Votre pseudo'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('#!/bin/bash
# Date : (2011-11-19 06-39)
# Last revision : (2011-11-19 06-39)
# Wine version used : 1.3.4
# Distribution used to test : Ubuntu 10.04 LTS
# Author : Votre pseudo'); ?>

<h2>Activer le mode de débogage</h2>
<p><?php echo $website_name; ?> dispose d'un mode de débogage pour les scripts, qui doit être activé via une commande.</p>
<p>Il est obligatoire de l'activer, même si vous n'en avez pas besoin. Car si un utilisateur rencontre un problème avec votre script, un rapport de bug pourra être envoyé sur le site de <?php echo $website_name; ?>.</p>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Debug_Init'); ?>
<p>Cette commande doit aller juste après la commande <span style="color:#000080"><b>POL_SetupWindow_Init</b></span>.</p>

<h2>Quelques autres informations</h2>
<p>Voici quelques autres informations diverses non abordées dans les chapitres précédents, mais que vous devez quand même savoir.</p>

<h2>Interdiction d'utiliser sudo</h2>
<p>Les commandes sudo, su, gksudo, kdesu, et compagnie sont <b>interdites</b> pour des raisons de sécurité.</p>
<p>Néanmoins, si vous avez absolument besoin de sudo (notamment pour afficher les fichiers cachés des DVD hybrides PC/MAC, via la commande mount), vous pouvez utiliser la commande suivante&nbsp;:</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Call POL_Function_RootCommand "sudo commande; exit"'); ?>

<h2>Pas d'utilisation de Winetricks dans les scripts</h2>
<p>Winetricks, ou tout autre script du genre est interdit dans les scripts <?php echo $website_name; ?>.</p>
<p>À la place, vous pouvez utiliser un système semblable, avec la commande <span style="color:#000080"><b>POL_Call</b></span>.</p>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Call Script'); ?>
<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Call POL_Install_vcrun6'); ?>
<p>La liste des commandes possibles est disponible sur <a href="http://www.playonlinux.com/repository/?cat=100">cette page</a>.</p>

<h2>Traduction des scripts</h2>
<p>Nous avons presque terminé avec la standardisation des scripts, il ne manque plus que le système de traduction des scripts à voir. Cela se fait dans le prochain chapitre.</p>
