<h1>Create a script for <?php echo $website_name; ?>&nbsp;- Chapter 8: My first real script</h1>
<p>Do you feel ready to write your first complete script? Yes, so let's go!</p>
<p>Your goal is to try to write this script by yourself.</p>

<h2>Instructions:</h2>
<p>For this exercise, we will work on <b>Mozilla Firefox</b> (Windows version), that is easily and freely available for download.</p>

<h3>Installation methods</h3>
<p>Two methods of installation should be supported: <b>LOCAL</b> and <b>DOWNLOAD</b></p>
<p>Since Mozilla Firefox must be downloaded from mirror servers, I'll give you the address of the mirror server you should use:</p>
<p>http://mirror3.mirrors.tds.net/pub/mozilla.org/firefox/releases/latest/win32/en-US/Firefox Setup <span style="color:#FF0000"><b>7.0</b></span>.exe</p>
<p>You just have to replace the version number in red with the current version (as found on <a href="http://mirror3.mirrors.tds.net/pub/mozilla.org/firefox/releases/latest/win32/en-US/">this page</a>).</p>

<h3>Name of the executable</h3>
<p>The executable to pass to the <span style="color:#000080"><b>POL_Shortcut</b></span> command is: <b>firefox.exe</b>.</p>

<h3>List of useful commands</h3>
<p>To make your task easier, here are the commands that you'll need (in usage order):</p>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"
POL_SetupWindow_Init

POL_SetupWindow_presentation
POL_Wine_SelectPrefix
POL_Wine_PrefixCreate
POL_System_TmpCreate
POL_SetupWindow_InstallMethod
if [ "$INSTALL_METHOD" = "LOCAL" ]
then
	POL_SetupWindow_browse
	POL_SetupWindow_wait
	POL_Wine
elif [ "$INSTALL_METHOD" = "DOWNLOAD" ]
then
	cd
	POL_Download
	POL_SetupWindow_wait
	POL_Wine
fi
POL_System_TmpDelete
POL_Shortcut

POL_SetupWindow_Close
exit
') ?>
<h2>It's your turn now!</h2>
<p>Additional arguments may be required, check the previous chapters.</p>
<p>You should now have all the necessary infomations to achieve this task. Try to complete the script as much as possible by yourself.</p>
<p>Once you're done, you can check the solution below.</p>

<h2>Correction</h2>
<p>Here's a working script:</p>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

POL_SetupWindow_Init

POL_SetupWindow_presentation "Mozilla Firefox" "Mozilla" "http://www.mozilla.com" "YourNickname" "MozillaFirefox"

POL_Wine_SelectPrefix "MozillaFirefox"
POL_Wine_PrefixCreate

POL_System_TmpCreate "MozillaFirefox"

POL_SetupWindow_InstallMethod "LOCAL,DOWNLOAD"

if [ "$INSTALL_METHOD" = "LOCAL" ]
then
	POL_SetupWindow_browse "Please select the installation file to run." "Mozilla Firefox installation"
	POL_SetupWindow_wait "Installation in progress." "Mozilla Firefox installation"
	POL_Wine start /unix "$APP_ANSWER"
elif [ "$INSTALL_METHOD" = "DOWNLOAD" ]
then
	cd "$POL_System_TmpDir"
	POL_Download "http://mirror3.mirrors.tds.net/pub/mozilla.org/firefox/releases/latest/win32/en-US/Firefox Setup 7.0.exe"
	POL_SetupWindow_wait "Installation in progress." "Mozilla Firefox installation"
	POL_Wine start /unix "$POL_System_TmpDir/Firefox Setup 7.0.exe"
fi

POL_System_TmpDelete

POL_Shortcut "firefox.exe" "Mozilla Firefox"

POL_SetupWindow_Close
exit'); ?>
<p>The tighter the ressemblance of your script with this one, the better your understanding of scripting. The exact messages used are not important, what matters is that you used all the functions in your own script.</p>
<p>You can try to adapt this code to the installation of other programs, but keep in mind that some programs do not work with the default settings of Wine, and that additionnal functions may be required. Wine technology is not perfect, so some programs may not work no matter how hard you will try.</p>
<p>The test reports available from <a href="http://appdb.winehq.org">WineHQ AppDB</a> may prove useful to you.</p>

<h2>Ok, I'm done, can I write <?php echo $website_name; ?> scripts now?</h2>
<p>Sadly <b>not yet</b>, you've learned to write "basic" scripts, but additionnal requirements need to be taken care of, like allowing for localization or debugging. We'll see that in the next chapters.</p>
