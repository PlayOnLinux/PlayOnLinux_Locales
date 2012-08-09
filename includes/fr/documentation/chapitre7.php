<h1>Créer un script pour <?php echo $website_name; ?> - Chapitre 7&nbsp;: Supports d'installation</h1>
<p>Nous allons voir dans ce chapitre comment installer un programme depuis un CD/DVD, ou comment le télécharger sur Internet si il est disponible.</p>

<h2>Utiliser un CD/DVD comme support d'installation</h2>
<p><?php echo $website_name; ?> permet de manière très simple d'utiliser un CD/DVD pour installer le programme.</p>

<h2>Demander à l'utilisateur de sélectionner son CD/DVD</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_cdrom') ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_cdrom') ?>
<p><img src="<?php echo $url; ?>/doc/images/ch07-01.fr.png"></p>
<p>Le chemin vers le CD/DVD est stocké dans la variable <b>$CDROM</b> (exemple de valeur de <b>$CDROM</b> : <b>/media/cdrom0</b>).</p>

<h2>Vérifier la présence du bon CD-ROM (après avoir appelé POL_SetupWindow_cdrom)</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_check_cdrom "chemin/vers/un/fichier/du/CD"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_check_cdrom "Data/media1.dat"'); ?>
<p>Vérifie si le fichier existe, sinon, exécute <span style="color:#000080"><b>POL_SetupWindow_cdrom</b></span> à nouveau.</p>
<p>Essayez d'éviter dans la mesure du possible de vérifier la présence des Setup.exe, autorun.inf, et compagnie, car ils sont très répandus.</p>


<h2>Télécharger le programme d'installation sur Internet</h2>
<p><?php echo $website_name; ?> permet de manière simple de télécharger un fichier sur Internet. Cela est particulièrement utile pour les logiciels disponibles gratuitement sur Internet.</p>

<h2>Télécharger un fichier</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Download "URL" "Somme md5 du fichier téléchargé"'); ?>
<p style="color:#008000">Somme md5, késako ?</p>

<h3>Explications&nbsp;:</h3>
<p>La somme md5, est un code du genre <b>b1bbd74395a34ff7fd069d3b6fe23016</b>, ce code est unique pour chaque fichier.</p>
<p>La somme md5 est utilisée afin de s'assurer qu'un fichier téléchargé n'est pas corrompu (ce qui peut se produire parfois, suite à une erreur de téléchargement).</p>
<p>Pour générer la somme md5, utilisez la commande suivante dans une console/terminal&nbsp;:</p>
<?php
if($website_name == "PlayOnLinux")
{
	echo bbencode('[code language=console]md5sum "/Chemin/vers/mon/setup.exe"[/code]');
}
elseif($website_name == "PlayOnMac")
{
	echo bbencode('[code language=console]md5 "/Chemin/vers/mon/setup.exe"[/code]');
}
?>

<p>Le fichier téléchargé est mis dans le répertoire actuel (que vous pouvez changer avec la commande cd), la plupart du temps, le fichier téléchargé doit aller dans le répertoire temporaire, créé par la commande <span style="color:#000080"><b>POL_System_TmpCreate</b></span>. Afin de le mettre dans le répertoire temporaire, utilisez la commande suivante, juste avant <span style="color:#000080"><b>POL_Download</b></span>&nbsp;:</p>
<?php echo script('cd "$POL_System_TmpDir"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('cd "$POL_System_TmpDir"
POL_Download "http://www.example.com/download/setup.exe" "b1bbd74395a34ff7fd069d3b6fe23016"'); ?>
<p>Le fichier garde le même nom que celui du serveur, donc, si vous avez une adresse comme celle-là : http://www.example.com/download/setup.exe, le nom du fichier sera <b>setup.exe</b>.</p>

<h2>Choisir son mode d'installation</h2>
<p style="color:#008000">Mais comment on fait pour que l'utilisateur puisse choisir quel mode d'installation il veut utiliser&nbsp;?</p>
<p>Tadaa, voici la fonction <span style="color:#000080"><b>POL_SetupWindow_InstallMethod</b></span>. Cette fonction va demander à l'utilisateur de choisir par quel support il veut installer son programme.</p>

<h2>Fonction POL_SetupWindow_InstallMethod</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_InstallMethod "Modes d\'installation"'); ?>

<h3>Explications&nbsp;:</h3>
<p>Différents modes d'installation sont disponibles, mais pour commencer, on va se limiter aux 4 modes suivants, qui sont les plus simples (et les plus courants).</p>

<p>Modes possibles&nbsp;:</p>
<p><b>LOCAL</b>&nbsp;: Pour demander à l'utilisateur de sélectionner un fichier sur son ordinateur.</p>
<p><b>DOWNLOAD</b>&nbsp;: Pour télécharger le programme d'installation sur Internet.</p>
<p><b>CD</b>&nbsp;: Pour installer le programme depuis le CD.</p>
<p><b>DVD</b>&nbsp;: Pour installer le programme depuis le DVD.</p>
<p>Il faut séparer les différents modes d'installation par une virgule.</p>
<p>le mode choisi par l'utilisateur est renvoyé dans la variable <b>$INSTALL_METHOD</b>. Ensuite il suffit de faire une série de <b>if</b>, <b>then</b>, <b>elif</b>, <b>then</b> et <b>fi</b> pour détecter quel mode a été choisi, et agir en conséquence. Tout ceci sera détaillé dans le prochain chapitre.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_InstallMethod "LOCAL,DOWNLOAD"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch07-02.fr.png"></p>

<h2>Maintenant, il ne reste plus qu'à créer un lanceur dans <?php echo $website_name; ?></h2>
<p>Créer un lanceur (ou raccourci) dans <?php echo $website_name; ?> est extrêmement facile, la preuve&nbsp;:</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Shortcut "Exécutable.exe" "Nom du lanceur"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Shortcut "JediKnightII.exe" "Star Wars : Jedi Knight II"'); ?>
<p>Il ne faut pas inscrire le dossier dans lequel se trouve l'exécutable, il sera trouvé automatiquement par <?php echo $website_name; ?>.</p>
