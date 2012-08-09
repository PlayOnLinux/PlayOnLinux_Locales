<style>
div.codeconsole
{
	margin-left:50px;
}
</style>
<h1>Documentation of the functions available in the PlayOnLinux's scripts.</h1>
<h2 id="Preambule">Preamble</h2>
<p>The functions presented below are usable in the scripts designed to be used in PlayOnLinux. Green written parameters are mandatory, others are optionnal.
<br>In order to give a parameter to a function, the order must be respected, for example the "exemple" function can have 3 parameters, the first and the last are mandatory, the second is optionnal. The function's call will have to be like this (at least):<br>
exemple "<span style="color: green;">mandatory parameter 1</span>" "" "<span style="color: green;">mandatory parameter 2</span>"<br>
or<br>
exemple "<span style="color: green;">mandatory parameter 1</span>" "optinnal parameter 1" "<span style="color: green;">mandatory parameter 2</span>"<br>
<br><br>
Will be presented in this documentation only the useful functions for the script's creation, PlayOnLinux uses other functions which aren't presented here.
<br><br>
<span style="color: red;"><b>Using the su, sudo, gksu, kdesu ... commands (any command which changes the user's privileges) are formaly forbidden in any PlayOnLinux's script (as well as in the software itself)</b></span>
<br><br>
</p>
<h2 id="creer_lanceur">creer_lanceur</h2>
<p>
The creer_lanceur function allows to create a launcher, accessible in the PlayOnLinux's menu, on the desktop, or in the window manager.
</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">WinePrefix</span></td>
	<td>Defines in which prefix the piece of software is installed</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">Directory</span></td>
	<td>Defines in which directory or sub-directory of the prefix the piece of software is installed.</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">Binary</span></td>
	<td>Defines the name of the executable which will be launched.</td>
	<td>Character's string</td>
</tr>
<tr>
	<td>Icon</td>
	<td>Icon's name which will be displayed during the shortcut's creation. <br>Allowed formats are png and xpm.<br>The files have to be hosted on the PlayOnLinux's website.
	<br><i>Contact the administrators for more informations</i></td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Icon's name</td>
	<td>Defines the launcher's name, the prefix's name is used as default parameter.</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Nothing</td>
	<td>This parameter isn't used, it's for compatibility with the versions &lt; 2.0 </td>
	<td>Nothing</td>
</tr>
<tr>
	<td>Possible argument</td>
	<td>Possible parameter to be given to the program when launching it</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code> creer_lanceur "My Big Game" "Program Files/The_MulXGame/" "YetAnotherGame.exe"</code></div>
<p>
<img src="<?php echo $url; ?>/doc/images/creer_lanceur_1.png" alt="Example image of launcher's creation"><br><br>
<img src="<?php echo $url; ?>/doc/images/creer_lanceur_2.png" alt="Example image of launcher's creation"></p>
<h2 id="message">message</h2>
<p>This function displays a message for the user running the script.<br></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>The message's content</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Title</td>
	<td>Title of the window displaying the message</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Define the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>NextButton</td>
	<td>Defines the text on the "Next" button</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code>message "Everybody need, needed or will need a drawing to get the message to be understood."</code></div>
<p><img src="<?php echo $url; ?>/doc/images/messageBox.png" alt="Example image for the message window"></p>
<br>
<h2 id="erreur">error</h2>
<p>The error function has a behaviour similar to the message function's.<br>
<div class="codeconsole"><code> error "Those who are never wrong never try."</code></div>
<P>
<img src="<?php echo $url; ?>/doc/images/erreurBox.png" alt="Example image for the error window"></p> 
<h2 id="attention">warning</h2>
<p>The warning function has a behaviour similar to the message function's.<br>
</p><div class="codeconsole"><code> warning "The greater danger in times of turbulence is not the turbulence. It's acting with yesterday's logic."</code></div>
<p><img src="<?php echo $url; ?>/doc/images/attentionBox.png" alt="Example image for the warning window"></p>
<h2 id="question">question</h2>
<p>Asks a question to the user.<br>
The answer is returned as a boolean. '1' means that the user answered "No" and '0' that the user answered "Yes"</P>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">message</span></td>
	<td>The question to display</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>WindowTitle</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
</table>
<br>
<div class="codeconsole"><code>question "Do you know the Answer to the Ultimate Question of Life, the Universe and Everything ?" "Don't Panic, It's just a question ! "</code></div>
<p><img src="<?php echo $url; ?>/doc/images/questionBox.png" alt="Example image for a question">
</p>
<h2 id="champ">text_field</h2>
<p>The text_field command allows the user to fill a field. The informations entered by the user are returned (without modifications) if he clicks on "Next", else nothing is returned.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">message</span></td>
	<td>The text justifying the user's intervention (usually a question)</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Default</td>
	<td>The default text field's value</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>WindowTitle</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code>text_field "WHAT DO YOU GET IF YOU MULTIPLY SIX BY NINE?" "42" "" "" "" "Arthur's Scrabble tiles"</code></div>
<p>
<img src="<?php echo $url; ?>/doc/images/champ.png" alt="Example image for the text_field window">
<br></p>
<h2 id="menu">menu</h2>
<p>This function displays a menu. The user's choice is returned, if no entry is choosed nothing is returned.</p>

<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message's text</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">Items</span></td>
	<td>The menu's entries</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Title</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Separator</td>
	<td>Defines the character used as a separator between the menu's entries</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Next</td>
	<td>"Next" button's text</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Return's type</td>
	<td>[ 1 = Return the ID, 0 = Return the name ] Default = 0</td>
	<td>Boolean</td>
</tr>
</table>
<div class="codeconsole"><code>menu "Choose between the oven and the mill !" "oven mill" "" "" "" "" "wizard.png"</code></div>
<p><img alt="Example image for the menu function" hspace="20px"></P>
<h2 id="menu_list">menu_list</h2>
<p><i><span style="color: orange;">This function is known as "menu" in the versions &lt; 2.1.0</span><br>
</i></p>
<p>This function proposes a list of choices. Once the user's choice is done, the choosed value is returned.
<br>If no value has been choosed the function returns nothing.</P>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message's text</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">Items</span></td>
	<td>The menu's entries</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Title</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Separator</td>
	<td>Defines the character used as a separator between the menu's entries</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Next</td>
	<td>"Next" button's text</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code> menu_list "You have to make a choice in the list" "First choice~Second choice" "This is the fabulous title :)" "" "" "" "" "~"</code></div>
<p><img src="<?php echo $url; ?>/doc/images/menu_list.png" alt="Example image for the menu_list function"></p>
<h2 id="attendre">run_and_wait</h2>
<p>This function displays a dialog box indicating to the user that he must waits for the running command to finish</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message to be displayed.</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">Command</span></td>
	<td>Command to be runned by the system.<BR><span style="color: orange;"><B>Beware to use only commands available for all the distributions.<BR>It isn't a PlayOnLinux-specific command.</B></span></td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Title</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>autoExit</td>
	<td>Determines if the window has to be closed automatically once the command is finished.
	<br>1 = the window will be automatically closed, 0 = the window won't be closed.</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>exitMessage</td>
	<td>Message to be displayed once the command is finished
	<br>It replaces the message defined in the first parameter</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Next</td>
	<td>Defines the "Next" button's text</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code> run_and_wait "Please wait 10 seconds and you will know the answer" "sleep 10s" "Don't panic! " "" "" "0" "" "" "So the answer is? 42 ;-)<br> 
But do you know the real question?" "Yet H2G2"</code></div>
<P><img src="<?php echo $url; ?>/doc/images/attendre_1.png" alt="The message during the command's execution">
<br><br>
<img src="<?php echo $url; ?>/doc/images/attendre_2.png" alt="The message after the command's execution">
</P>
<h2 id="telecharger">download</h2>
<p>This function downloads a file from internet, then save it into the directory where the function was runned.</P>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message to be displayed.</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">File</span></td>
	<td>The address of the file to download, with this syntax http://www.example.com/file.txt</td>
	<td>Characters' string, URL</td>
</TR>
<tr>
	<td>Title</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>autoExit</td>
	<td>Determines if the window has to be closed automatically once the command is finished.
	<br>1 = the window will be automatically closed, 0 = the window won't be closed.</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>autoDl</td>
	<td>Launch the download automatically
	<br>1 = the download starts automatically, 0 = the download doesn't start automatically.</td>
	<td>Boolean</td>
</TR>
</table>
<div class="codeconsole"><code> download "Downloading Wine for Windows System (Strange isn't it?) "http://heanet.dl.sourceforge.net/sourceforge/wine/wine-dlls-0.9.14.zip" "" "" "" "0"</code></div>
<P>
<img src="<?php echo $url; ?>/doc/images/telecharger_1.png" alt="Example of file donwload">
<br><br>
<img src="<?php echo $url; ?>/doc/images/telecharger_2.png" alt="Example of file donwload">
<br><br>
<img src="<?php echo $url; ?>/doc/images/telecharger_3.png" alt="Example of file donwload">
</P>
<h2 id="selectionner_fichier">select_file</h2>
<p>The select_file function allows to select a file. The absolute access path is returned as a character's string.
</P>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message to be displayed.</td>
	<td>Characters' string</td>
</TR>
<tr>
	<td>Default</td>
	<td>Default path value</td>
	<td>Characters' string, access path</td>
</TR>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code>select_file "Where is Dave? " "/dev/null"</code></div>
<p><img src="<?php echo $url; ?>/doc/images/selectionner_fichier.png" alt="Example image for select_file" hspace="20px"></p>
<h2 id="afficher_fichier">show_file</h2>
<p>This function displays a file's contents.
</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">File</span></td>
	<td>Path to the file. It can be absolute or relative.</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>Title</td>
	<td>The window's title</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CancelButton</td>
	<td>Defines the "Cancel" button's visibility.<br>1 = Visible ; 0 = Not visible</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image to display in the window</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td>NextButton</td>
	<td>Defines the "Next" button's text</td>
	<td>Characters' string</td>
</tr>
</table>
<div class="codeconsole"><code>show_file "/proc/diskstats"</code></div>
<p><img src="<?php echo $url; ?>/doc/images/afficher_fichier.png" alt="Example image for show_file"></p>
<h2 id="navigateur">browser</h2>
<p>Opens the default browser at the given address.
</p>
<div class="codeconsole"><code>browser http://www.playonlinux.com</code></div>
<h2 id="simuler_reboot">simulate_reboot</h2>
<p>This command allows to simulate a reboot of the system.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
</table>
<h2 id="select_prefixe">select_prefix</h2>
<p>This function allows to select the prefix used by Wine or DosBox.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Prefix</span></td>
	<td>Path to the prefix of Wine or DosBox you want to use</td>
	<td>Characters' string</td>
</tr>
</table>
<h2 id="creer_prefixe">polprefixcreate</h2>
<p>This function allows to create and update a Wine's prefix, which was defined before with <a href="select_prefixe">select_prefix</a>.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
</table>
<h2 id="Ask_For_cdrom">Ask_For_cdrom</h2>
<p>This function asks to the user the path to the CD-ROM and defines the CDROM variable as the CDROM's path.
</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td>StepNumber</td>
	<td>Number of the current step</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>TotalStepNumber</td>
	<td>Total number of steps of the script</td>
	<td>Non signed integer</td>
</tr>
<tr>
	<td>CdNumber</td>
	<td>The CD-ROM's number during a mutli-cd application's installation.</td>
	<td>Non signed integer</td>
</tr>
</table>
<p><img src="<?php echo $url; ?>/doc/images/Ask_For_cdrom.png" alt="Example image of Ask_For_cdrom's use"></P>
<h2 id="Check_cdrom">Check_cdrom</h2>
<p>This function checks the presence of the file given as parameter.
<br><span style="color: red;">It must be called after <a href="#Ask_For_cdrom">Ask_For_cdrom</a></span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Program</span></td>
	<td>Relative path (based on $CDROM's value) allowing to confirm the presence of the (good) CD-ROM.</td>
	<td>Characters' string</td>
</tr>
</table>
<h2 id="Set_OS">Set_OS</h2>
<p>This function changes the version of the operating system simulated by Wine.
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Version</span></td>
	<td>The different available versions are: vista, win2003, winxp, win2k, winnt, winme, win98, win95, win31<br>
	<span style="color: orange;"><b>Only one value in the same time</b></span></td>
	<td>Characters' string</td>
</tr>
</table>
<h2 id="Set_Managed">Set_Managed</h2>
<p>This function allows to let the window manager control the window
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Managed</span></td>
	<td>The two possible values are: On or Off.<br>The case must be respected</td>
	<td>Boolean</td>
</tr>
</table>
<h2 id="Set_SoundDriver">Set_SoundDriver</h2>
<p>This function defines the audio driver to be used
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Audio</span></td>
	<td>The possible values are: alsa ; oss ; esd<br>The case must respected</td>
	<td>Trilean :-/ </td>
</tr>
</table>
<h2 id="Set_GLSL">Set_GLSL</h2>
<p>This function allows to define the Wine's GLSL support (see <a href="http://en.wikipedia.org/wiki/GLSL">the wikipedia page</a> for more informations).
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">GLSL</span></td>
	<td>The two possible values are: On or Off.<br>The case must be respected</td>
	<td>Boolean</td>
</tr>
</table>
<h2 id="Set_DXGrab">Set_DXGrab</h2>
<p>This function defines if DirectX &copy; can control the mouse's pointer
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">DXGrab</span></td>
	<td>The two possible values are: On or Off.<br>The case must be respected</td>
	<td>Boolean</td>
</tr>
</table>
<h2 id="Set_Iexplorer">Set_Iexplorer</h2>
<p>This function simulates the presence of Microsoft Internet Explorer 6 &copy;
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<h2 id="Set_Desktop">Set_Desktop</h2>
<p>This function enables or disables the Wine's virtual desktop
<br><span style="color: red;">The Wine's prefix must be defined before (with <a href="#select_prefixe">select_prefix</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Desktop</span></td>
	<td>The two possible values are: On or Off.<br>The case must be respected</td>
	<td>Boolean</td>
</tr>
<tr>
	<td>Width</td>
	<td>Defines the virtual desktop's width when it's enabled (first parameter is On)</td>
	<td>Non signed integer</td>
</tr>
<tr>	
	<td>Height</td>
	<td>Defines the virtual desktop's height when it's enabled (first parameter is On)</td>
	<td>Non signed integer</td>
</tr>
</table>
<h2 id="fonts_to_prefixe">fonts_to_prefixe</h2>
<p>This function copies the fonts in the Wine directory, which was defined before with <a href="select_prefixe">select_prefix</a></p>
<h2 id="Set_WineVersion_Assign">Set_WineVersion_Assign</h2>
<p>This function allows to change the Wine version used by an application.
<br>Every game rated "Platinum" on <a href="http://appdb.winehq.org/">Wine's website</a> must be associated to a fixed version of Wine, because of regression problems between the different Wine's versions.
<br>If the Wine version isn't present in the user's directory, it will be installed automatically (then assigned)</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Version</span></td>
	<td>Wine's version to be assigned. Use --reset to go back to the Wine's version installed on the user's system.</td>
	<td>Characters' string</td>
</tr>
<tr>
	<td><span style="color: green;">Game</span></td>
	<td>Application's name to be assigned, it must be the same than the one used in <a href="#creer_lanceur">creer_lanceur</a></td>
	<td>Characters' string</td>
</tr>
</table>
<h2 id="Set_WineVersion_Session">Set_WineVersion_Session</h2>
<p>This function allows to change the Wine's version to be used.
<br>Contrarly to <a href="#Set_WineVersion_Assign">Set_WineVersion_Assign</a> this function modifies the Wine's version only during the script's execution.
<br>This function shoud be used to do an installation with a Wine's version that is well known for working without troubles.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Parameter</td>
	<td>Function</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Version</span></td>
	<td>Wine's version to be assigned. Use --reset to go back to the Wine's version installed on the user's system.</td>
	<td>Characters' string</td>
</tr>
</table>
<h2 id="Variable">Variable</h2>
<p>It's a non-exaustive list of the available variables for the scripts.
<br>The variables' content is obtained when adding the "$" symbol in front of the variables' name <i>example: $LANG</i>
<br>A variable's value is affected by the = operand <i>example: author="MulX" ; the author variable is created (if non existing before) and initializated to the MulX value.</i> When assigning a character's string, you have to "frame" the string with " (double quotes).
<br>The case must be respected when using a variable <i>author</i> is different from <i>Author</i> which is also different from <i>AUTHOR</i>
<br>If you have a doubt about variales' use feel free to read <a href="<?php echo $prefixe; ?>/dev-documentation-3.html">this page</a> again
<br>So the different variables are: </p>
<table>
<thead class="grisclair">
<tr>
	<td>Name</td>
	<td>Content</td>
</tr>
</thead>
<tr>
	<td>PLAYONLINUX</td>
	<td>Contains the absolute path to the PlayOnLinux software</td>
</tr>
<tr>
	<td>REPERTOIRE</td>
	<td>Contains the absolute path to the user's PlayOnLinux directory ( equivalent to $HOME/.PlayOnLinux )</td>
</tr>
<tr>
	<td>POL_LANG</td>
	<td>Contains the language used by PlayOnLinux</td>
</tr>
<tr>
	<td>CDROM</td>
	<td>Contains the absolute path to the CD-ROM, it's initialized after <a href="#Ask_For_cdrom">Ask_For_cdrom</a>'s call</td>
</tr>
<tr>
	<td>WINEPREFIX</td>
	<td>Variable used by Wine to know where is installed the application, initialized with <a href="#select_prefixe">select_prefix</a>'s call</td>
</tr>
</table>