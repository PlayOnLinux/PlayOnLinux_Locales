<h1>Créer un script pour <?php echo $website_name; ?>&nbsp;- Chapitre 10&nbsp;: Traduction des scripts</h1>
<p style="color:#008000">Un chapitre rien que pour la traduction des scripts, c'est si important que ça&nbsp;?</p>
<p>Oui. Afin que la maximum de personnes puissent utiliser les scripts de <?php echo $website_name; ?>, il faut qu'ils soient disponibles dans toutes les langues.</p>
<p style="color:#008000">Mais je ne connais pas le russe moi&nbsp;!</p>
<p>Rassurez-vous, ce n'est pas vous qui allez traduire réellement votre script, c'est l'équipe des traducteurs du <a href="https://translations.launchpad.net/playonlinux/arietis">Launchpad</a>, que nous remercions au passage pour leur travail.</p>
<p>Mais, afin que les traductions sur le Launchpad soient possible, il faut adapter votre script sur certains points.</p>

<h2>Tous les messages dans le script doivent être en anglais&nbsp;!</h2>
<p>Ceci est la condition sine qua non pour que la traduction puisse être effectuée (les messages étant traduits de l'anglais vers les autres langues).</p>

<h2>Réutilisation des messages</h2>
<p>Afin d'alléger la charge de travail des traducteurs, nous voulons que le maximum de messages soient identiques dans les scripts (car si le même message a déjà été traduit, alors le nouveau n'aura pas besoin de l'être).</p>
<p>Donc, nous avons établi une liste des messages les plus courants.</p>

<h3>Liste des messages&nbsp;:</h3>
<?php echo bbencode('[quote]Merci de choisir le fichier d\'installation à exécuter. -> Please select the setup file to run.
Veuillez insérer le disque du jeu dans le lecteur. -> Please insert the game media into your disk drive.
Installation de $TITLE en cours. -> Please wait while $TITLE is installed.
$TITLE a été installé avec succès. -> $TITLE has been successfully installed.
[/quote]'); ?>
<p>Chaque fois que c'est possible, utilisez les. Si vous avez besoin d'un message qui n'est pas dans la liste ci-dessus, écrivez le, mais en anglais. Ce que nous ne voulons pas, c'est un message différent que ceux ci-dessus, mais qui veut dire la même chose.</p>

<h2>La commande eval_gettext</h2>
<p>La commande eval_gettext prend en argument le message en anglais, et renvoie le message dans la langue de l'utilisateur (qui est déterminée automatiquement).</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('eval_gettext \'Please select the setup file to run.\''); ?>

<h3>Utilisation&nbsp;:</h3>
<p>Le problème qui se pose, c'est comment transmettre facilement ce que la fonction eval_gettext renvoie vers la fonction <span style="color:#000080"><b>POL_SetupWindow_message</b></span> (par exemple)&nbsp;? Il y a une solution, c'est d'exécuter la fonction directement dans l'argument.</p>
<p style="color:#008000">On peut exécuter une fonction dans un argument&nbsp;? Houla ça devient compliqué tout ça&nbsp;!</p>
<p>On va en fait mettre la commande eval_gettext dans ces symboles&nbsp;: <b>$()</b> qui demandent d'exécuter le code se trouvent entre le <b>(</b> et le <b>)</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_message "$(eval_gettext \'Please select the setup file to run.\')" "$TITLE"'); ?>
<p>C'est un peu tordu, mais avec la pratique ça rentrera.</p>

<h1 style="text-align:center;color:#FF8000">FIN</h1>
<p>C'est fini, le tutoriel prend fin, vous avez normalement assez de connaissances pour voler de vos propres ailes.</p>
<p>Une annexe est disponible dans le chapitre suivant, elle répertorie toutes les variables et fonctions disponibles pour les scripts <?php echo $website_name; ?>, car nous n'avons vu que le quart des fonctions disponibles. Il est possible qu'une fois, pour un script, vous ayez besoin d'une fonction particulière, alors pensez à regarder dans l'annexe. Sachez cependant que vous n'utiliserez jamais la plupart des autres fonctions que celles que nous avons vues dans ce tutoriel.</p>
<p>En cas de question, le forum est à votre disposition, n'hésitez pas à l'utiliser.</p>
