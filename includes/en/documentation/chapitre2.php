<h1>Create a script for <?php echo $website_name; ?> - Chapter 2: Basic functions</h1>
<h2>Let's see some basic commands for writing <?php echo $website_name; ?> scripts.</h2>
<p>Note: all the commands we're about to see must be inserted between the <span style="color:#000080"><b>POL_SetupWindow_Init</b></span> and the <span style="color:#000080"><b>POL_SetupWindow_Close</b></span> commands.</p>

<h2>Displaying a message</h2>
<p>Here comes the command <span style="color:#000080"><b>POL_SetupWindow_message</b></span>:</p>

<h3>Syntax:</h3>
<?php
echo script('POL_SetupWindow_message "Message" "Window title"');
?>

<h3>Example:</h3>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

POL_SetupWindow_Init

POL_SetupWindow_message "Hello World!" "My first message"

POL_SetupWindow_Close
exit'); ?>

<p>This is what you will get:</p>
<img src="<?php echo $url; ?>/doc/images/ch02-01.en.png">
<p>You can now display a message. Happy?</p>

<h2>A text zone</h2>
<p>You want to ask something to the user? The function <b>POL_SetupWindow_textbox</b> was created for that purpose. Add the following code to your script:</p>

<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_textbox "Message" "Window title"'); ?>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_textbox "What is your name?" "Text zone"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-02.en.png"></p>
<p>We'll see in the next chapter how to retrieve the text that the user entered.</p>

<h2>A question?</h2>
<p>You want the user the answer <b>by yes or no</b>? Then use this function <b>POL_SetupWindow_question</b></p> 
<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_question "Question" "Window title"'); ?>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_question "Do you like PlayOnLinux?" "My first question"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-03.en.png"></p>
<p>In the next chapter we will see how to retrieve the answer to the question.</p>

<h2>A little menu</h2>
<p>Just like for the two previous functions, you can create a menu for <?php echo $website_name; ?>.</p>

<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_menu "Message" "Window title" "Available choices separated with the separator" "The separator"'); ?>

<h3>Explications:</h3>
<p>The different entries must be separated a single character separator, that is provided as the next argument, the characters most often used for that are dash (-), and tilda (~).</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_menu "What would you like to eat tonight?" "Tonight\'s menu" "Carrots|Potatoes|French-Fries" "|"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-04.en.png"></p>
<p>In the next chapter we will see how to retrieve the selected entry.</p>

<h2>Select a file</h2>
<p>You can ask the user to select a file from his/her computer.</p>

<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_browse "Message" "Window title"'); ?>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_browse "Select installation program" "File selection"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch02-05.en.png"></p>
<p>In the next chapter we will see how to retrieve the selected file.</p>


<h2>Introducing your application</h2>
<p>This command is very important. It allows you to introduce the application to the user before he installs it.</p>

<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_presentation "Name of the program" "Editor of the program" "Editor\'s site" "your pseudo" "Program\'s prefix (cf chapter 5)"'); ?>

<p>Example:</p>
<?php echo script('POL_SetupWindow_presentation "Mozilla Firefox" "Mozilla" "http://www.mozilla.com" "Script author" "MozillaFirefox"'); ?><br />
<p><img src="<?php echo $url; ?>/doc/images/ch02-06.en.png"></p>

<h2>Comment your code</h2>
<p>The symbol "#" tells Bash to ignore the text until the end of the line. Here's an example:</p>
<?php echo script('POL_SetupWindow_message "Hello" "Test"
# A nice comment
POL_SetupWindow_message "Goodbye" "Test"'); ?>
<p>You should comment your scripts as much as possible to improve their readability and help scripters in their validation task.</p>

