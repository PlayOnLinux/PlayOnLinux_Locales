<h1>Create a script for <?php echo $website_name; ?>&nbsp;- Chapter 9: Standardization</h1>
<h2>Standardization, what is this thing?</h2>
<p>To improve scripts readability, maintenability, debugging and translation, scripts are standardized. This means that things are added or modified so that scripts look and behave in a similar way.</p>
<p>We will detail what is affected.</p>

<?php
if($website_name == "PlayOnLinux")
{
	?>
	<h2>Make your script available under Mac OS X using PlayOnMac</h2>
	<p>It may be useful to clarify (for those who would not know) that PlayOnLinux and PlayOnMac are really the same software, sharing the same code. Only the name changes depending on the operating system.</p>
	<p>So, making your script available to PlayOnMac users can be very easy. You just have to check that your script runs fine under Mac OS X. Even if you don't have any Mac OS X at hand, for small and simple softwares one can expect that, if it works correctly under GNU/Linux, there's a 99% probability that it will also work under Mac OS X.</p>
	<p>To make your script available under Mac OS X, check the box "PlayOnMac compatible" of the new script submissing form of the PlayOnLinux website.</p>
	<?php
}
elseif($website_name == "PlayOnMac")
{
	?>
	<h2>Your script will also be available under GNU/Linux using PlayOnLinux</h2>
	<p>It may be useful to clarify (for those who would not know) that PlayOnLinux and PlayOnMac are really the same software, sharing the same code. Only the name changes depending on the operating system.</p>
	<p>When you submit a script, it will be automatically available to PlayOnLinux, since if your script works with Mac OS X, it will also work under GNU/Linux (the reverse is not always true).</p>
	<?php
}
?>


<h2>Standardization, let's begin</h2>
<p>We will see several items to standardize in scripts.</p>

<h2>The $TITLE variable</h2>
<p>You should assign the variable <b>$TITLE</b> with the name of the script, and use it every time the name of the script is required.</p>
<h3>Example:</h3>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

TITLE="Mozilla Firefox" # Should be present in all your scripts

POL_SetupWindow_Init
...
POL_SetupWindow_presentation "$TITLE" "Mozilla" "http://www.mozilla.com" "YourNickname" "MozillaFirefox"
...
POL_Shortcut "firefox.exe" "$TITLE"
...'); ?>

<p>Obviously adapt it to the name of your script (that usually matches the name of the software it installs).</p>
<p>The variable <b>$TITLE</b> is notably required for the use of <?php echo $website_name; ?>'s debugging system.</p>

<h2>Use the $TITLE variable for window titles</h2>
<p>To avoid confusing the user with disparate window titles, it is recommended to use the variable $TITLE as window title.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_message "Message" "$TITLE"
POL_SetupWindow_browse "Message" "$TITLE"
POL_SetupWindow_wait "Message" "$TITLE"'); ?>

<h2>The $PREFIX variable</h2>
<p>You should store the name of the prefix in the variable $PREFIX, to make it easier to spot. This also avoids repeating prefix name in your script.</p>

<h3>Example:</h3>
<?php echo script('#!/bin/bash
[ "$PLAYONLINUX" = "" ] && exit 0
source "$PLAYONLINUX/lib/sources"

TITLE="Mozilla Firefox"
PREFIX="MozillaFirefox"

POL_SetupWindow_Init
...
POL_SetupWindow_presentation "$TITLE" "Mozilla" "http://www.mozilla.com" "YourNickname" "$PREFIX"
...
POL_Wine_SelectPrefix "$PREFIX"
...
POL_System_TmpCreate "$PREFIX"
...
'); ?>

<h2>Some informations about the script</h2>
<p>It is recommended to provide some informations near the beginning of the script, right after the #!/bin/bash line.</p>
<h3>Syntax:</h3>
<?php echo script('# Date : (Year-month-day hour-min)
# Last revision : (Year-month-day hour-min)
# Wine version used : 
# Distribution used to test : Distribution
# Author : Your nickname'); ?>

<h3>Example:</h3>
<?php echo script('#!/bin/bash
# Date : (2011-11-19 06-39)
# Last revision : (2011-11-19 06-39)
# Wine version used : 1.3.4
# Distribution used to test : Ubuntu 10.04 LTS
# Author : Your nickname'); ?>

<h2>Enable debugging</h2>
<p><?php echo $website_name; ?> features a script debugging mode, that must be enabled thru a command.</p>
<p>It is mandatory to enable it, even if you have no use for it; Because if some user experiences a problem with your script, it will allow him to sent a bug report to the <?php echo $website_name; ?> website.</p>
<h3>Syntax:</h3>
<?php echo script('POL_Debug_Init'); ?>
<p>This command should be put right after the command <span style="color:#000080"><b>POL_SetupWindow_Init</b></span>.</p>

<h2>Some more informations</h2>
<p>Some more informations that did not fit in previous chapters, but that you should know nonetheless.</p>

<h2>It is forbidden to use sudo</h2>
<p>Commands sudo, su, gksudo, kdesu and similar are <b>forbidden</b> for the sake of security.</p>
<p>However, if you really need sudo (for example to display hidden files from hybrid PC/MAC DVDs, using mount command), you can use the following command:</p>

<h3>Syntax:</h3>
<?php echo script('POL_Call POL_Function_RootCommand "sudo command; exit"'); ?>

<h2>Winetricks forbidden in scripts</h2>
<p>Winetricks, or a similar script, is forbidden in <?php echo $website_name; ?> scripts.</p>
<p>Instead, you can use the very similar command <span style="color:#000080"><b>POL_Call</b></span>.</p>
<h3>Syntax:</h3>
<?php echo script('POL_Call Script'); ?>
<h3>Example:</h3>
<?php echo script('POL_Call POL_Install_vcrun6'); ?>
<p>The list of all the available scripts can be seen on <a href="http://www.playonlinux.com/repository/?cat=100">this page</a>.</p>

<h2>Scripts translation</h2>
<p>We're almost done with scripts standardization, the only item left is scripts translation. This will be the topic of the next chapter.</p>
