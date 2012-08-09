<h1>Créer un script pour <?php echo $website_name; ?> - Chapitre 2&nbsp;: Les fonctions de base</h1>
<h2>Nous allons maintenant voir quelques commandes de base pour les scripts <?php echo $website_name; ?>.</h2>
<p>Petite remarque&nbsp;: Toutes les commandes que nous allons voir vont entre <span style="color:#000080"><b>POL_SetupWindow_Init</b></span> et <span style="color:#000080"><b>POL_SetupWindow_Close</b></span>.</p>

<h2>Afficher un message</h2>
<p>Voici la commande <span style="color:#000080"><b>POL_SetupWindow_message</b></span>&nbsp;:</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_message "Votre Message" "Titre de la fenêtre"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

POL_SetupWindow_Init

POL_SetupWindow_message "Hello World!" "Mon premier message"

POL_SetupWindow_Close
exit'); ?>

<p>Voici ce que vous obtenez&nbsp;:</p>
<p><img src="<?php echo $url; ?>/doc/images/ch02-01.fr.png"></p>
<p>Vous arrivez à afficher des messages. Alors, heureux&nbsp;?</p>

<h2>Une zone de texte</h2>
<p>Vous voulez demander une information à l'utilisateur&nbsp;? La fonction <span style="color:#000080"><b>POL_SetupWindow_textbox</b></span> a été créée pour&nbsp;:</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_textbox "Message" "Titre de la fenêtre"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_textbox "Comment vous appelez-vous ?" "Ma première zone de texte"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-02.fr.png"></p>
<p>Nous verrons dans le prochain chapitre comment récupérer ce que l'utilisateur a entré.</p>

<h2>Une question&nbsp;?</h2>
<p>Vous voulez que l'utilisateur vous réponde par <b>oui</b>, ou par <b>non</b>&nbsp;? Il existe la fonction <span style="color:#000080"><b>POL_SetupWindow_question</b></span></p> 

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_question "Question" "Titre de la fenêtre"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_question "Aimez vous ce tutoriel ?" "Ma première question"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-03.fr.png"></p>
<p>Nous verrons dans le prochain chapitre comment récupérer ce que l'utilisateur a entré.</p>


<h2>Un petit menu</h2>
<p>De la même façon que les trois fonctions précédentes, vous pouvez créer un joli menu pour <?php echo $website_name; ?>.</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu "Message" "Titre de la fenêtre" "Choix possibles séparés par le séparateur" "Séparateur"'); ?>

<h3>Explications&nbsp;:</h3>
<p>Les différentes entrées doivent être séparées par un séparateur (1 caractère) qui est indiqué à la fin, les caractères couramment utilisés sont le tiret (-), ou le tilde (~).</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu "Que voulez-vous manger ce soir ?" "Menu du soir" "Carottes-Patates-Frites" "-"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-04.fr.png"></p>
<p>Nous verrons dans le prochain chapitre comment récupérer ce que l'utilisateur a entré.</p>

<h2>Sélectionner un fichier</h2>
<p>Vous pouvez demander à l'utilisateur de sélectionner un fichier sur son ordinateur.</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_browse "Message" "Titre de la fenêtre"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_browse "Sélectionnez le programme d\'installation" "Sélection d\'un fichier"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-05.fr.png"></p>
<p>Nous verrons dans le prochain chapitre comment récupérer ce que l'utilisateur a entré.</p>

<h2>Présenter votre application</h2>
<p>Cette commande est très importante. Elle permet de présenter une application à l'utilisateur avant qu'il l'installe.</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_presentation "Nom du programme" "Éditeur du programme" "Site de l\'éditeur" "Auteur du script" "Préfixe du programme (Voir le chapitre 5)"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_presentation "Mozilla Firefox" "Mozilla" "http://www.mozilla.com" "Auteur du script" "MozillaFirefox"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-06.fr.png"></p>

<h2>Commenter votre code</h2>
<p>Le symbole "#" permet de dire à bash d'ignorer le texte qui suit. Voici un exemple :</p>
<?php echo script('POL_SetupWindow_message "Bonjour" "Test"
# Un joli commentaire
POL_SetupWindow_message "Au revoir" "Test"'); ?>
<p>Nous vous conseillons de commenter votre code le plus possible pour améliorer la lisibilité et aider les scripteurs à la validation.</p>
