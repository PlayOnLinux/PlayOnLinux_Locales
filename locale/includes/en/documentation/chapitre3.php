<h1>Create a script for <?php echo $website_name; ?> - Chapter 3: Variables</h1>
<h2>Variable? Is that a new insult?</h2>
<p>No, it's not an insult. The variable is a very important element in programming. It is defined by a name and a value. This value can vary along the script.</p>
<p>If you don't understand, keep on reading and you'll find out what it's all about.</p>

<h2>Declaring a variable</h2>
<?php echo script('MY_VARIABLE="My value"'); ?>

<h2>Reading a variable</h2>
<p>You have to put this sign "$" in front of the variable.</p>
<p>Here's an example of code:</p>
<?php echo script('FRUIT="Pear"

POL_SetupWindow_message "I like to eat a $FRUIT" "My favorite fruit"'); ?>

<h3>Result:</h3>
<p><img src="<?php echo $url; ?>/doc/images/ch03-01.en.png"></p>
<p>You can use variables in any message, menu, etc.</p>

<h2>POL_SetupWindow_menu and variables</h2>
<p>Do you remember this code?</p>
<?php echo script('POL_SetupWindow_menu "What do you want to eat tonight?" "Tonight\'s menu" "Carrots Potatoes French-fries" " "'); ?>
<p>The result is actually sent to the variable <b>$APP_ANSWER</b>. This is the way to retrieve user's choice:</p>
<?php echo script('POL_SetupWindow_menu "What do you want to eat tonight?" "Tonight\'s menu" "Carrots Potatoes French-fries" " "

POL_SetupWindow_message "Tonight we\'ll be eating $APP_ANSWER, a very good choice." "Tonight\'s menu"'); ?>

<h2>POL_SetupWindow_browse and variables</h2>
<p>For <span style="color:#000080"><b>POL_SetupWindow_browse</b></span>, it is the path to the file selected by the user that is stored into <b>$APP_ANSWER</b>.</p>

<h2>POL_SetupWindow_question and variables</h2>
<p>For <span style="color:#000080"><b>POL_SetupWindow_question</b></span>, <b>$APP_ANSWER</b> will contain <b>TRUE</b> if the user answered yes, and <b>FALSE</b> if (s)he answered no.
