<h1>Create a script for PlayOnLinux&nbsp;- Chapter 1: Getting to know Bash</h1>
<h2>Introduction</h2>
<p>You would like to create your own scripts for <?php echo $website_name; ?> but you don't know squat about programming? This tutorial will explain the basics and you'll soon be a pro in playonlinuxian Bash.</p>

<h2>Bash?</h2>
<p>Bash is a command interpretor (or "shell") in <b>GNU/Linux</b> and <b>Mac OS X</b>. It's the one appearing when you launch a terminal. It also allows you to make <b>scripts</b>. A script is a list of commands that your shell will execute one after the other.</p>
<p><?php echo $website_name; ?> has advanced functions in Bash to make the scripting process easier. Let's get acquainted with them.</p>

<h2>Requirements of every script</h2>

<p>Every <?php echo $website_name; ?> script must contain this boilerplate code:</p>
<?php 
echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

POL_SetupWindow_Init

POL_SetupWindow_Close
exit');
?>

<p>Above code may not make sense to you yet. We will explain what it does as we go.</p>

<p>During this tutorial, I will not repeat this code over and over in the examples, as it is necessary. Remember to include it otherwise your script won't work.</p>

<h2>Executing your script</h2>
<p>Ask your favorite text editor to save your script, then use the function <span style="color:#FF8000"><b>Run a local script</b></span> from the <span style="color:#FF8000"><b>Tools</b></span> menu of <?php echo $website_name; ?>.</p>

<h3>Scripts signing</h3>
<p><?php echo $website_name; ?> uses digital signing (authentication) on scripts to certify that scripts have been validated by <?php echo $website_name; ?> scripters. All the scripts available from the <span style="color:#FF8000"><b>Install</b></span> window of <?php echo $website_name; ?> are validated.</p>
<p>Each time you will try to run a script that has not been validated by <?php echo $website_name; ?> scripters, you will get a warning message telling you that the script has no valid signature (see screenshot below).</p>
<p><img src="<?php echo $url; ?>/doc/images/ch01-01.en.png"></p>
<p>You must click on <span style="color:#FF8000"><b>Next</b></span> button to get <?php echo $website_name; ?> to show you the script source, then click on the <span style="color:#FF8000"><b>I Agree</b></span> checkbox, before you can (finally) run the script (see screeshot below).</p>
<p><img src="<?php echo $url; ?>/doc/images/ch01-02.en.png"></p>
