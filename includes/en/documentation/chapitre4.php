<h1>Create a script for PlayOnLinux - Chapter 4: Conditions</h1>
<h2>Conditions? Can one eat it?</h2>
<p>You'd have to be very hungry but why not. More seriously, a condition will allow you to order your script to do different things according to <b>a test</b>. For example, the value of a variable.</p>

<h2>Some examples will make it easier to understand</h2>
<h3>A test, with no action taken in case of failure:</h3>
<?php echo script('POL_SetupWindow_menu "What\'s for dinner?" "Tonight\'s menu" "Carrots Potatoes French-fries" " "
if [ "$APP_ANSWER" = "Carrots" ]
then
   POL_SetupWindow_message "Let\'s eat" "Tonight\'s menu"
fi'); ?>
<p>The message "let's eat" will only appear if the user chooses Carrots.</p>

<h3>A test, with some action in case of failure:</h3>
<?php echo script('POL_SetupWindow_menu "What\'s for dinner?" "Tonight\'s menu" "Carrots Potatoes French-fries" " "
if [ "$APP_ANSWER" = "Carrots" ]
   POL_SetupWindow_message "I\'m on a hunger strike" "Tonight\'s menu"
else
   POL_SetupWindow_message "Can I have a second helping?" "Tonight\'s menu"
fi'); ?>
<p>The message "I'm on a hunger strike" will only be displayed if the user chooses Carrots. Otherwise the message "Can I have a second helping?" will be displayed</p>

<h3>Threefold test, with no action in case of failure:</h3>
<?php echo script('POL_SetupWindow_menu "What do you want to eat tonight?" "Tonight\'s menu" "Carrots Potatoes French-fries" " "
if [ "$APP_ANSWER" = "French-fries" ]
then
	POL_SetupWindow_message "I love french fries" "Tonight\'s menu"
elif [ "$APP_ANSWER" = "Potatoes" ]
then
	POL_SetupWindow_message "I agree to eat potatoes tonight" "Tonight\'s menu"
elif [ "$APP_ANSWER" = "Carottes" ]
then
	POL_SetupWindow_message "I do not like carrots" "Tonight\'s menu"
fi'); ?>
<p>What this code does should be clear enough after seeing the previous examples.</p>



