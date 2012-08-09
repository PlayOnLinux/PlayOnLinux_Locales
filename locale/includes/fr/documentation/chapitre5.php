<h1>Créer un script pour <?php echo $website_name; ?> - Chapitre 5&nbsp;: Wine</h1>

<h2>C'est qui celui là&nbsp;?</h2>
<p>C'est le moteur de <?php echo $website_name; ?>. Ce logiciel, développé par <a href="http://www.winehq.com/">WineHQ</a> permet de faire tourner des logiciels conçus pour Windows sous <b>GNU/Linux</b> et <b>Mac OS X</b>.</p>
<p>Dans ce chapitre, vous allez voir les fonctions principales de <?php echo $website_name; ?> en rapport avec Wine, mais pas toutes. Pour les fonctions plus techniques, je vous invite à lire l'annexe répertoriant toutes les fonctions.</p>

<h2>Les préfixes (ou disques dur virtuels)</h2>
<p><?php echo $website_name; ?> gère les préfixe de Wine. Pour expliquer ça, rien ne vaut un bon schéma.</p>
<p>Sous Wine, par défaut, l'installation d'un jeu ressemble à ceci&nbsp;:</p>
<p><img src="<?php echo $url; ?>/doc/images/wine_fr.jpg"></p>

<p>Avec <?php echo $website_name; ?>, on pourrait plutôt résumer ça comme ceci :</p>
<p><img src="<?php echo $url; ?>/doc/images/playonlinux_fr.jpg"></p>

<p>L'intérêt&nbsp;: Cela permet d'avoir une configuration spécifique à chaque programme, et la désinstallation d'un programme est extrêmement simple (juste à supprimer un dossier).</p>

<h2>Nous allons maintenant étudier quelques commandes courantes pour les préfixes de Wine sous <?php echo $website_name; ?>.</h2>

<h2>Sélectionner le préfixe</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Wine_SelectPrefix "NomDuPrefixe"') ?>
<p>Un préfixe ne doit contenir que des caractères alpha-numériques (en gros, pas d'espaces, et pas de caractères spéciaux).</p>
<p>Évitez les noms de préfixes du genre WoW, préférez WorldOfWarcraft.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_SelectPrefix "Steam"') ?>
<p>Sélectionnera le préfixe de Steam (à faire même si le préfixe n'existe pas encore).</p>

<h2>Créer le préfixe (après l'avoir sélectionné)</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Wine_PrefixCreate') ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_PrefixCreate') ?>
<p><img src="<?php echo $url; ?>/doc/images/ch05-01.fr.png"></p>
<p>Permet de créer le préfixe ou de le mettre à jour. Nécessaire avant chaque installation.</p>

<h2>Utiliser wine pour exécuter un .exe</h2>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Wine start /unix "chemin/vers/un/fichier.exe"'); ?>

<h3>Exemples&nbsp;:</h3>
<?php echo script('POL_Wine start /unix "/home/utilisateur/fichier.exe"'); ?>
<?php echo script('POL_Wine start /unix "$APP_ANSWER"'); ?>
<p>Le 2<sup>ème</sup> exemple est utilisé pour exécuter un fichier .exe sélectionné par l'utilisateur avec la commande <span style="color:#000080"><b>POL_SetupWindow_browse</b></span>.</p>

<h2>Afficher une fenêtre veuillez patienter</h2>
<p>Il est parfois utile d'afficher une fenêtre "veuillez patienter" pendant que certaines commandes sont en cours d'exécution. Cela s'applique particulièrement à la commande <span style="color:#000080"><b>POL_Wine</b></span> qui s'exécutera tant que le programme lancé n'est pas terminé (donc, dans le cas d'une installation, tant que l'installation n'est pas terminée).</p>
<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_SetupWindow_wait "Message" "Titre"
# Commandes'); ?>
<p>Vous pouvez mettre autant de commandes que vous voulez. La fenêtre "Veuillez patienter" se terminera dès qu'une commande changeant la fenêtre sera utilisée.</p>
<h3>Exemple :</h3>
<?php echo script('POL_SetupWindow_wait "Veuillez patienter" "Installation en cours"
POL_Wine start /unix "chemin/vers/un/fichier.exe"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch05-02.fr.png"></p>

<h2>Utiliser une version de Wine particulière</h2>
<p>Il est possible d'assigner une version de Wine particulière à un jeu (indépendamment de la version de Wine installée chez l'utilisateur).</p>
<p>Cela est particulièrement utile pour les gros programmes/jeux, dont les performances peuvent changer d'une version à une autre de Wine.</p>
<p>Il est aussi possible d'utiliser cette méthode si un logiciel ne fonctionne plus avec les versions récentes de Wine.</p>
<p>Pour utiliser cette possibilité, il suffit d'ajouter un argument à la fonction <span style="color:#000080"><b>POL_Wine_PrefixCreate</b></span>.</p>

<h3>Syntaxe&nbsp;:</h3>
<?php echo script('POL_Wine_PrefixCreate "Version de Wine"'); ?>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_PrefixCreate "1.3.4"'); ?>

