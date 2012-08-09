<h1>Créer un script pour <?php echo $website_name; ?> - Chapitre 6&nbsp;: Le système de fichiers</h1>
<p>Il existe plusieurs commandes pour manipuler vos fichiers et vos dossiers en Bash. Nous allons vous donner les commandes les plus utilisées dans les scripts <?php echo $website_name; ?>.</p>

<h2>Le dossier temporaire de <?php echo $website_name; ?></h2>
<p>Vous avez la possibilité d'utiliser un dossier temporaire pour votre script.</p>

<h2>Créer le dossier temporaire</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_System_TmpCreate "NomDuDossierTemporaire"'); ?>
<p>Il est recommandé d'utiliser le nom du préfixe comme nom du dossier.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_System_TmpCreate "MozillaFirefox"'); ?>
<p>La variable <b>$POL_System_TmpDir</b> sera créée, contenant le chemin vers votre dossier temporaire.</p>
<p>Dans ce répertoire vous pouvez stocker et modifier les fichiers que vous voulez, pendant toute la durée du script.</p>

<h2>Supprimer le dossier temporaire</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_System_TmpDelete'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_System_TmpDelete'); ?>
<p>Notez que vous n'avez pas besoin d'effacer les fichiers que vous avez mis dans le dossier temporaire avant d'appeler la commande <span style="color:#000080"><b>POL_System_TmpDelete</b></span>.</p>

<h2>Changer de répertoire</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('cd "chemin"'); ?>

<h3>Exemples&nbsp;:</h3>
<?php echo script('cd "/chemin/vers/un/repertoire"'); ?>
<?php echo script('cd "$HOME" # Se déplacer dans le dossier personnel de l\'utilisateur'); ?>
<?php echo script('cd "$CDROM" # Se placer dans le répertoire du CD/DVD'); ?>
<?php echo script('cd "$POL_System_TmpDir" # Se placer dans le dossier temporaire'); ?>

<h2>Supprimer un fichier ou un dossier</h2>
<p style="color:#FF0000">Attention, cette commande est très dangereuse. Elle pourrait détruire tous vos fichiers si vous l'utilisez mal. Par exemple, si vous décidez d'effacer /home/utilisateur/.PlayOnLinux/tmp/ et que sans faire exprès vous mettez un espace entre /home/utilisateur/ et .PlayOnLinux, dites adieu à vos documents. <?php echo $website_name; ?> ne pourra être tenu responsable d'une mauvaise manipulation de votre part.</p>
<h3>Syntaxes&nbsp;:</h3>
<?php echo script('rm "fichier"'); ?>
<?php echo script('rm -r "dossier"'); ?>

<h3>Exemples&nbsp;:</h3>
<?php echo script('rm "$POL_System_TmpDir/fichier.txt"'); ?>
<?php echo script('rm -r "$POL_System_TmpDir/dossier"'); ?>
<p>S'il reste des fichiers et/ou des dossiers dans le dossier que vous supprimez, il seront également effacés définitivement.</p>

<h2>Copier un fichier/dossier</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('cp "FichierSource" "FichierCible"'); ?>
<?php echo script('cp -r "DossierSource" "DossierCible"'); ?>

<h3>Exemples pour copier un fichier&nbsp;:</h3>
<?php echo script('cp "/home/utilisateur/fichier.txt" "/home/utilisateur/copie_fichier.txt"'); ?>
<?php echo script('cp "/home/utilisateur/fichier.txt" "/home/utilisateur/data/fichier.txt"'); ?>
<?php echo script('cp "$CDROM/fichier.txt" "$POL_System_TmpDir/fichier.txt"'); ?>

<h3>Exemple pour copier un dossier&nbsp;:</h3>
<?php echo script('cp -r "/home/utilisateur/Mon Dossier" "/home/utilisateur/Bureau/Test/"'); ?>

<h2>Déplacer et/ou renommer un fichier ou un dossier</h2>
<?php echo script('mv "/home/utilisateur/fichier.txt" "home/utilisateur/data.txt"'); ?>
<?php echo script('mv "/home/utilisateur/fichier.txt" "/home/utilisateur/Bureau/fichier.txt"'); ?>
<?php echo script('mv "/home/utilisateur/fichier.txt" "/home/utilisateur/Bureau/data.txt"'); ?>
<p>La 1<sup>ère</sup> commande va renommer le fichier de fichier.txt en data.txt.</p>
<p>La 2<sup>ème</sup> commande va déplacer le fichier.</p>
<p>La 3<sup>ème</sup> commande va déplacer ET renommer le fichier.</p>
