<h1>Créer un script pour <?php echo $website_name; ?>&nbsp;- Chapitre 1&nbsp;: Se familiariser avec le Bash</h1>
<h2>Introduction</h2>
<p>Vous aimeriez créer vos scripts pour <?php echo $website_name; ?>, seulement vous êtes une quiche en programmation&nbsp;? Ce tutoriel vous l'expliquera très simplement et vous serez vite un pro en Bash.</p>

<h2>Le bash ?</h2>
<p>Le bash est un interpréteur de commande (ou "shell") sous <b>GNU/Linux</b> et <b>Mac OS X</b>. C'est celui qui apparait lorsque vous ouvrez une console/terminal. Il permet également de faire des <b>scripts</b>. Un script est une liste de commandes que votre shell exécutera les unes après les autres.</p>
<p><?php echo $website_name; ?> dispose de fonctions avancées en Bash destinées à vous simplifier la vie lorsque vous scriptez. Nous allons les découvrir.</p>

<h2>Le code de base de tout script</h2>

<p>Tout script <?php echo $website_name; ?> doit contenir un code de base, le voici&nbsp;:</p>
<?php 
echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

POL_SetupWindow_Init

POL_SetupWindow_Close
exit');
?>
<p>Ce code n'est pas forcément clair au premier coup d'œil. Vous le comprendrez petit à petit.</p>

<p>Dans ce tutoriel, ce code ne sera pas présent à chaque fois lors des exemples vu qu'il est nécessaire. Pensez à l'inclure sinon votre script ne fonctionnera pas.</p>

<h2>Exécuter son script</h2>
<p>Sur un éditeur de texte, enregistrez votre script et utilisez la fonction <span style="color:#FF8000"><b>Exécuter un script local</b></span> du menu <span style="color:#FF8000"><b>Outils</b></span> de <?php echo $website_name; ?>.</p>

<h3>Signature des scripts</h3>
<p><?php echo $website_name; ?> possède un système de signature (authentification) des scripts permettant de s'assurer que le script a bien été validé par les scripteurs de <?php echo $website_name; ?>. Tous les scripts accessibles dans la fenêtre <span style="color:#FF8000"><b>Installer</b></span> de <?php echo $website_name; ?> sont des scripts validés.</p>
<p>Quand vous exécutez un script non validé par les scripteurs de <?php echo $website_name; ?>, un message vous avertira que la signature du script n'est pas valide (voir capture ci-dessous).</p>
<p><img src="<?php echo $url; ?>/doc/images/ch01-01.fr.png"></p>
<p>Il faut cliquer sur <span style="color:#FF8000"><b>Suivant</b></span>, ensuite <?php echo $website_name; ?> vous montre le script, et vous devez cocher la case <span style="color:#FF8000"><b>J'accepte</b></span>, pour pouvoir (enfin) exécutez le script (voir capture ci-dessous).</p>
<p><img src="<?php echo $url; ?>/doc/images/ch01-02.fr.png"></p>
