<h1>Create a script for <?php echo $website_name; ?> - Chapter 5: Wine</h1>

<h2>Who's that?</h2>
<p>This is the engine inside <?php echo $website_name; ?>. This software developped by <a href="http://www.winehq.com/">WineHQ</a> permits to run softwares that were created for Windows on <b>Linux</b> and <b>Mac OS X</b>.</p>
<p>In this chapter, I will show you some important <?php echo $website_name; ?> functions in regard to Wine, but not all of them. For the more technical functions, you should read the annex listing them all.</p>

<h2>The Prefixes (aka virtual disks)</h2>
<p><?php echo $website_name; ?> manages Wine's prefixes. Nothing better than an illustration to explain this.</p>
<p>With Wine, the installation of a game looks like this:</p>
<p><img src="<?php echo $url; ?>/doc/images/wine_en.jpg"></p>

<p>With <?php echo $website_name; ?>, it can be summed up this way:</p>
<p><img src="<?php echo $url; ?>/doc/images/playonlinux_en.jpg"></p>

<p>The point being: It allows to have a specific configuration per program, and the uninstallation of a program is simplified (you just have to remove a folder).</p>

<h2>We'll now see some usual commands to manage Wine prefixes with <?php echo $website_name; ?>.</h2>

<h2>Select a prefix</h2>
<h3>Syntax:</h3>
<?php echo script('POL_Wine_SelectPrefix "PrefixName"') ?>
<p>A prefix name should only contain alphanumerical characters (roughly meaning no spaces, no special chars).</p>
<p>Avoid short cryptic prefix names like WoW, prefer WorldOfWarcraft.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_SelectPrefix "Steam"') ?>
<p>Will select Steam's prefix (must be done even if the prefix doesn't exist yet).</p>

<h2>Create a prefix (after having selected it)</h3>
<h3>Syntax:</h3>
<?php echo script('POL_Wine_PrefixCreate'); ?>

<h3>Example:</h3>
<?php echo script('POL_Wine_PrefixCreate'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch05-01.en.png"></p>
<p>Will either create or update a prefix. It is necessary before each installation.</p>

<h2>Use Wine to run an .exe file</h2>
<h3>Syntax:</h3>
<?php echo script('POL_Wine start /unix "path/to/the/file.exe"'); ?>

<h3>Examples:</h3>
<?php echo script('POL_Wine start /unix "/home/user/file.exe"'); ?>
<?php echo script('POL_Wine start /unix "$APP_ANSWER"'); ?>
<p>The 2<sup>nd</sup> example show how to run an executable selected by the user thru the command <span style="color:#000080"><b>POL_SetupWindow_browse</b></span>.</p>

<h2>Display a "please wait" message</h2>
<p>It's sometimes useful to display a "please wait" message while commands are running. This is particularly useful for the command <span style="color:#000080"><b>POL_Wine</b></span> that will last as long as the program it launched has not completed (hence, in the case of an installation, until the installation is over).</p>
<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_wait "Message" "Title"
# Commands'); ?>
<p>You can put as many commands as you want; The "please wait" message will stay around until another command affecting the window is used.</p>
<h3>Example:</h3>
<?php echo script('POL_SetupWindow_wait "Please wait" "Installation in progress"
POL_Wine start /unix "path/to/some/file.exe"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch05-02.en.png"></p>

<h2>Use of a specific version of Wine</h2>
<p>It is possible to assign some version of Wine to a game (independantly of the version of Wine installed system-wide).</p>
<p>This is specially useful for large games or applications, whose performance may vary from version to version of Wine.</p>
<p>This can also be used if some software stopped working with recent versions of Wine.</p>
<p>To do this, you just have to add an argument to the function <span style="color:#000080"><b>POL_Wine_PrefixCreate</b></span>.</p>

<h3>Syntax:</h3>
<?php echo script('POL_Wine_PrefixCreate "Version of Wine"'); ?>

<h3>Example:</h3>
<?php echo script('POL_Wine_PrefixCreate "1.3.4"'); ?>
