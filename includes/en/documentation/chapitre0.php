<h1>Create a script for PlayOnLinux - Annexes</h1>
<h2>PlayOnLinux's variables</h2>
<p>$POL_USER_ROOT = $HOME/.PlayOnLinux</p>
<p>$PLAYONLINUX = PlayOnLinux's installation directory (usually /usr/share/playonlinux)

<h2>PlayOnLinux's directories</h2>
<p>$HOME/.PlayOnLinux/wineprefix = Wine Prefixes</p>
<p>$HOME/.PlayOnLinux/fonts = Microsoft fonts</p>
<p>$HOME/.PlayOnLinux/configurations/installed = Launchers</p>

<h2>Create a configurator for your program</h2>
<p>You can create a script especially for your program configuration. This script will be available in the "Configure" window like a "Run configuration wizard" button.</p>
<p>In order to do this, you need to instruct your script to create a new file containing the configurator's script (twisted you say?).</p>
<p>Here is the syntax you need to use, it's to be put at the end of your script before the exit:</p>

<?php echo script('cat << _EOF_ > "$POL_USER_ROOT/configurations/configurators/Name Of Your Launcher"
#!/bin/bash
[ "\$PLAYONLINUX" = "" ] && exit 0
source "\$PLAYONLINUX/lib/sources" 
POL_SetupWindow_Init

# Your script here

POL_SetupWindow_Close
_EOF_'); ?>

<p>Note: It is important to use the character \ before each variable so that the variable is not interpreted when the file is being created.</p>

<h2>POL_Call</h2>
<p>There's now a new function: POL_Call</p>
<p>It allows to call special scripts. Those scripts are the ones in the <b>Functions</b> category.</p>
<p>Simple example:</p>
<?php echo script("POL_Call POL_Function_sleep 10"); ?>
<p>This command will download the script POL_Function_sleep from the Function category and call it with 10 as first argument.</p>

