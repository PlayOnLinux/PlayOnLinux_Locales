<h1>Créer un script pour <?php echo $website_name; ?> - Chapitre 3&nbsp;: Les variables</h1>
<h2>Une variable&nbsp;? C'est une nouvelle insulte&nbsp;?</h2>
<p>Non, ce n'est pas une insulte. La variable est un élément essentiel dans la programmation. Elle est définie par un nom et une valeur. Cette valeur pourra varier durant le script.</p>
<p>Si vous ne comprenez pas, lisez la suite et vous allez vite voir de quoi il s'agit.</p>

<h2>Déclarer une variable&nbsp;:</h2>
<?php echo script('MA_VARIABLE="Ma valeur"'); ?>

<h2>Lire une variable</h2>
<p>Il suffit de mettre le signe "$" devant le nom de la variable.</p>
<h3>Voici un exemple de code :</h3>
<?php echo script('FRUIT="Poire"

POL_SetupWindow_message "J\'aime bien manger une $FRUIT" "Mon fruit préféré"'); ?>
<h3>Résultat :</h3>
<p><img src="<?php echo $url; ?>/doc/images/ch03-01.fr.png"></p>
<p>Vous pouvez utiliser les variables dans toutes les fonctions, que se soit les messages, menus, etc.</p>

<h2>POL_SetupWindow_menu et les variables</h2>
<p>Vous vous rappelez de ce code&nbsp;?</p>
<?php echo script('POL_SetupWindow_menu "Que voulez-vous manger ce soir ?" "Menu du soir" "Carottes-Patates-Frites" "-"'); ?>
<p>Le résultat est en fait envoyé dans la variable <b>$APP_ANSWER</b>. Ainsi, vous pouvez récupérer le choix de l'utilisateur :</p>
<?php echo script('POL_SetupWindow_menu "Que voulez-vous manger ce soir ?" "Menu du soir" "Carottes-Patates-Frites" "-"

POL_SetupWindow_message "Vous avez choisi de manger des $APP_ANSWER, très bon choix." "Menu du soir"'); ?>

<h2>POL_SetupWindow_browse et les variables</h2>
<p>Pour <span style="color:#000080"><b>POL_SetupWindow_browse</b></span>, le chemin du fichier choisi par l'utilisateur est aussi inscrit dans <b>$APP_ANSWER</b>.</p>

<h2>POL_SetupWindow_question et les variables</h2>
<p>Pour <span style="color:#000080"><b>POL_SetupWindow_question</b></span>, <b>$APP_ANSWER</b> vaut <b>TRUE</b> si la réponse est oui, <b>FALSE</b> si la réponse est non.</p>
