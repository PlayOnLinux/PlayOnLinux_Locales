<h1>Créer un script pour <?php echo $website_name; ?> - Chapitre 4&nbsp;: Des conditions</h1>
<h2>Des conditions&nbsp;? ça se mange&nbsp;?</h2>
<p>Si vous avez très faim, pourquoi pas. Plus sérieusement, une condition vous permettra de faire faire des choses différentes à votre script selon <b>un test</b>. Par exemple, la valeur d'une variable.</p>

<h2>Quelques exemples, c'est toujours mieux pour comprendre</h2>
<h3>Un test, sans action en cas d'échec&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu "Que voulez-vous manger ce soir ?" "Menu du soir" "Carottes-Patates-Frites" "-"
if [ "$APP_ANSWER" = "Carottes" ]
then
	POL_SetupWindow_message "A table" "Menu du soir"
fi'); ?>
<p>Le message "A table" ne s'affichera que si l'utilisateur a choisi Carottes.</p>

<h3>Un test, avec action en cas d'échec&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu "Que voulez-vous manger ce soir ?" "Menu du soir" "Carottes-Patates-Frites" "-"
if [ "$APP_ANSWER" = "Carottes" ]
then
	POL_SetupWindow_message "Je fais la grève de la faim" "Menu du soir"
else
	POL_SetupWindow_message "Je peux me resservir ?" "Menu du soir"
fi'); ?>
<p>Le message "Je fais la grève de la faim" ne s'affichera que si l'utilisateur a choisi Carottes. Sinon, c'est le message "Je peux me resservir ?" qui apparait.</p>

<h3>Triple test, sans action en cas d'échec&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu "Que voulez-vous manger ce soir ?" "Menu du soir" "Carottes-Patates-Frites" "-"
if [ "$APP_ANSWER" = "Frites" ]
then
	POL_SetupWindow_message "J\'adore les frites" "Menu du soir"
elif [ "$APP_ANSWER" = "Patates" ]
then
	POL_SetupWindow_message "J\'accepte de manger des patates" "Menu du soir"
elif [ "$APP_ANSWER" = "Carottes" ]
then
	POL_SetupWindow_message "J\'aime pas les carottes" "Menu du soir"
fi'); ?>
<p>Vous devriez arriver à comprendre ce code en vous basant sur les codes précédents.</p>

