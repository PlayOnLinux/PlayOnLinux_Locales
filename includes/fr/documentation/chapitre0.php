<h1>Créer un script pour <?php echo $website_name; ?> - Annexes</h1>
<h2>Les variables <?php echo $website_name; ?></h2>
<p>$POL_USER_ROOT = $HOME/.PlayOnLinux</p>
<p>$PLAYONLINUX = répertoire d'installation de <?php echo $website_name; ?> (/usr/share/playonlinux par défaut)

<h2>Les répertoires de <?php echo $website_name; ?></h2>
<p>$HOME/.PlayOnLinux/wineprefix = Préfixes Wine</p>
<p>$HOME/.PlayOnLinux/fonts = polices Microsoft</p>
<p>$HOME/.PlayOnLinux/configurations/installed = Lanceurs</p>

<h2>Creer un configurateur pour votre programme</h2>
<p>Vous pouvez créer un script spécialement conçu pour configurer votre programme. Ce script sera accessible depuis la fenêtre "Configurer" de <?php echo $website_name; ?> en tant que bouton "Lancer l'assistant de configuration".</p>
<p>Pour faire ceci, il faut dire à votre script de créer un nouveau fichier contenant le script du configurateur. (Un peu tordu je sais)</p>
<p>Voici la syntaxe (à ajouter à la fin de votre script, avant le exit&nbsp;:</p>

<?php echo script('cat << _EOF_ > "$POL_USER_ROOT/configurations/configurators/Nom De Votre Lanceur"
#!/bin/bash
[ "\$PLAYONLINUX" = "" ] && exit 0
source "\$PLAYONLINUX/lib/sources" 
POL_SetupWindow_Init

# Votre script ici

POL_SetupWindow_Close
_EOF_'); ?>

<p>Note&nbsp;: Il est important de bien mettre le caractère \ avant chaque variable pour que celle-ci ne soit pas interpretée au moment de la création du fichier.</p>

<h2>POL_Call</h2>
<p>Il existe désormais une nouvelle fonction : POL_Call</p>
<p>Elle permet d'appeler des scripts spéciaux. Les scripts concernés sont ceux présents dans la catégorie <b>Functions</b></p>
<p>Exemple simple&nbsp;:</p>
<?php echo script("POL_Call POL_Function_sleep 10"); ?>
<p>Cette ligne télécharge le script POL_Function_sleep de la catégorie Function et l'exécute avec 10 comme premier argument.</p>
