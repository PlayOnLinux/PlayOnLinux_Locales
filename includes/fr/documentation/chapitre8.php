<h1>Créer un script pour <?php echo $website_name; ?>&nbsp;- Chapitre 8&nbsp;: Mon premier vrai script</h1>
<p>Vous êtes prêt, vous voulez tenter de créer votre premier script complet&nbsp;? Oui, alors en avant toute&nbsp;!</p>
<p>Le but est que vous essayez de créer ce script par vous-même.</p>

<h2>Consignes&nbsp;:</h2>
<p>L'exercice se portera sur le logiciel <b>Mozilla Firefox</b> (version Windows), qui est installable facilement, et est disponible librement.</p>

<h3>Modes d'installation</h3>
<p>Les 2 méthodes d'installation suivantes doivent être possibles&nbsp;: <b>LOCAL</b> et <b>DOWNLOAD</b></p>
<p>Étant donné que le téléchargement de Mozilla Firefox se fait sur des serveurs miroirs, je vais vous donner l'adresse d'un des miroirs&nbsp;:</p>
<p>http://mirror3.mirrors.tds.net/pub/mozilla.org/firefox/releases/latest/win32/fr/Firefox Setup <span style="color:#FF0000"><b>7.0</b></span>.exe</p>
<p>Il vous suffit de changer la partie en rouge par le numéro de la version actuelle (indiqué sur <a href="http://mirror3.mirrors.tds.net/pub/mozilla.org/firefox/releases/latest/win32/fr/">cette page</a>).</p>

<h3>Nom de l'exécutable</h3>
<p>L'exécutable à inscrire dans la commande <span style="color:#000080"><b>POL_Shortcut</b></span> est&nbsp;: <b>firefox.exe</b>.</p>

<h3>Liste des commandes nécessaires</h3>
<p>Pour vous aider, voici la liste des commandes que vous aurez besoin d'utiliser (dans l'ordre de leur utilisation)&nbsp;:</p>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"
POL_SetupWindow_Init

POL_SetupWindow_presentation
POL_Wine_SelectPrefix
POL_Wine_PrefixCreate
POL_System_TmpCreate
POL_SetupWindow_InstallMethod
if [ "$INSTALL_METHOD" = "LOCAL" ]
then
	POL_SetupWindow_browse
	POL_SetupWindow_wait
	POL_Wine
elif [ "$INSTALL_METHOD" = "DOWNLOAD" ]
then
	cd
	POL_Download
	POL_SetupWindow_wait
	POL_Wine
fi
POL_System_TmpDelete
POL_Shortcut

POL_SetupWindow_Close
exit
') ?>
<h2>À vous de jouer&nbsp;!</h2>
<p>Il vous faudra ajouter les arguments aux fonctions, si besoin, regardez les chapitres précédents.</p>
<p>Vous avez normalement assez d'éléments pour faire un script. Le mieux est d'essayer de faire le maximum de parties du script par vous-même.</p>
<p>Si vous ne vous sentez pas de faire le script vous-même, vous pouvez regarder la correction ci-dessous.</p>

<h2>Correction</h2>
<p>Voici la correction du script&nbsp;:</p>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

POL_SetupWindow_Init

POL_SetupWindow_presentation "Mozilla Firefox" "Mozilla" "http://www.mozilla.com" "VotrePseudo" "MozillaFirefox"

POL_Wine_SelectPrefix "MozillaFirefox"
POL_Wine_PrefixCreate

POL_System_TmpCreate "MozillaFirefox"

POL_SetupWindow_InstallMethod "LOCAL,DOWNLOAD"

if [ "$INSTALL_METHOD" = "LOCAL" ]
then
	POL_SetupWindow_browse "Merci de choisir le fichier d\'installation à exécuter." "Installation de Mozilla Firefox"
	POL_SetupWindow_wait "Installation en cours." "Installation de Mozilla Firefox"
	POL_Wine start /unix "$APP_ANSWER"
elif [ "$INSTALL_METHOD" = "DOWNLOAD" ]
then
	cd "$POL_System_TmpDir"
	POL_Download "http://mirror3.mirrors.tds.net/pub/mozilla.org/firefox/releases/latest/win32/fr/Firefox Setup 7.0.exe"
	POL_SetupWindow_wait "Installation en cours" "Installation de Mozilla Firefox"
	POL_Wine start /unix "$POL_System_TmpDir/Firefox Setup 7.0.exe"
fi

POL_System_TmpDelete

POL_Shortcut "firefox.exe" "Mozilla Firefox"

POL_SetupWindow_Close
exit'); ?>
<p>Plus votre code ressemblera à celui-là, mieux vous aurez compris. Les messages utilisés ne sont pas très importants, ce qui compte c'est que chaque fonction qui est dans le code ci-dessus soit présente dans votre code.</p>
<p>Vous pouvez essayer d'adapter ce code pour installer un autre programme, mais gardez en tête que certains programmes ne fonctionnent pas avec la configuration par défaut de Wine, dans ce cas, des fonctions supplémentaires doivent êtres utilisées. La technologie de Wine n'étant pas parfaite, il se peut que dans certains cas, malgré tous vos efforts, une application ne fonctionne pas.</p>
<p>Vous pouvez vous aider des rapports de tests pour les applications disponibles sur <a href="http://appdb.winehq.org">WineHQ AppDB</a>.</p>

<h2>C'est bon, je peux maintenant faire des scripts pour <?php echo $website_name; ?>&nbsp;?</h2>
<p>Malheureusement, <b>non</b>, car bien que le code ci-dessus permet de faire un script "de base", il faut tenir compte de certaines spécificités supplémentaires visant à faciliter notamment la traduction et le débogage des scripts. Ceci vous sera expliqué dans les prochains chapitres.</p>
