<h1>Create a script for <?php echo $website_name; ?>&nbsp;- Annex</h1>

<h2>Legend of the color of the arguments</h2>
<p style="color:#FF0000">Red: Required argument.</p>
<p style="color:#FF8000">Orange&nbsp;: Required argument if further arguments are present, but can be left empty ("").</p>
<p style="color:#0000FF">Blue&nbsp;: Optional argument, but in some cases required.</p>
<p style="color:#004000">Green&nbsp;: Optional argument.</p>

<h1>Start and stop the graphical interface</h1>

<h2 style="color:#000080">POL_GetSetupImages</h2>
<h3>Arguments:</h3>
<p style="color:#FF8000">#1: URL of top image.</p>
<p style="color:#FF8000">#2: URL of left image.</p>
<p style="color:#FF0000">#3: Name of the directory where to store the images (often <b>$TITLE</b>).</p>

<h3>Description:</h3>
<p>Download top and left images of the script from the <?php echo $website_name; ?> site.</p>

<h3>Prerequisite:</h3>
<p>Must be used before <span style="color:#000080"><b>POL_SetupWindow_Init</b></span>.</p>

<h3>Example:</h3>
<?php echo script('POL_GetSetupImages "http://files.playonlinux.com/resources/setups/AC2/top.jpg" "http://files.playonlinux.com/resources/setups/AC2/left.jpg" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_Init</h2>
<h3>Description:</h3>
<p>Opens the installation wizard window.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_Init'); ?>

<h2 style="color:#000080">POL_SetupWindow_Close</h2>
<h3>Description:</h3>
<p>Closes the installation wizard window.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_Close'); ?>

<h1><?php echo $website_name; ?> graphical interface</h1>
<p>Note: All the functions below need the command <span style="color:#000080"><b>POL_SetupWindow_Init</b></span> to be executed beforehand.</p>

<h2 style="color:#000080">POL_SetupWindow_presentation</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Software name (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Software publisher.</p>
<p style="color:#FF0000">#3: Site of the publisher.</p>
<p style="color:#FF0000">#4: Script author.</p>
<p style="color:#FF0000">#5: Prefix name (usually <b>$PREFIX</b>).</p>

<h3>Description:</h3>
<p>Present the software.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_presentation "$TITLE" "Mozilla" "http://www.mozilla.com" "SuperPlumus and NSLW" "$PREFIX"'); ?>

<h2 style="color:#000080">POL_SetupWindow_free_presentation</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Software name (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Message.</p>

<h3>Description:</h3>
<p>Present the software with more freedom than <b style="color:#000080">POL_SetupWindow_presentation</b>.</p>

<h3>Exemple:</h3>
<?php echo script('POL_SetupWindow_free_presentation "$TITLE" "Welcome to Mozilla Firefox installation wizard."'); ?>

<h2 style="color:#000080">POL_SetupWindow_message</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>

<h3>Description:</h3>
<p>Display a message.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_message "Hello world!" "$TITLE"'); ?>

<h2 style="color:#000080">check_one</h2>
<h2 style="color:#000080">POL_SetupWindow_missing</h2>
<h3>Arguments for check_one:</h3>
<p style="color:#FF0000">#1: Program that must be present.</p>
<p style="color:#FF0000">#2: Package that contains this program.</p>

<h3>Description:</h3>
<p>Check the availability of one or more programs required by the script.</p>
<p>Call <b style="color:#000080">check_one</b> as many times as needed (once per program), then use <b style="color:#000080">POL_SetupWindow_missing</b>.</p>

<h3>Example:</h3>
<?php echo script('check_one "p7zip" "p7zip"
POL_SetupWindow_missing'); ?>

<h2 style="color:#000080">POL_SetupWindow_file</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#3: File to display.</p>

<h3>Description:</h3>
<p>Display the content of a file.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_file "Changelog" "$TITLE" "$POL_System_TmpDir/changelog.txt"'); ?>

<h2 style="color:#000080">POL_SetupWindow_licence</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#3: File to display.</p>

<h3>Description:</h3>
<p>Similar to the command <b style="color:#000080">POL_SetupWindow_file</b>, but adds an "I agree" checkbox.</p>
<p>Useful for displaying licenses.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_licence "Licence:" "$TITLE" "$POL_System_TmpDir/licence.txt"'); ?>

<h2 style="color:#000080">POL_SetupWindow_pulsebar</h2>
<h2 style="color:#000080">POL_SetupWindow_pulse</h2>
<h2 style="color:#000080">POL_SetupWindow_set_text</h2>

<h3>Arguments for POL_SetupWindow_pulsebar:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>

<h3>Arguments pour POL_SetupWindow_pulse:</h3>
<p style="color:#FF0000">#1: Percentage.</p>

<h3>Arguments pour POL_SetupWindow_set_text:</h3>
<p style="color:#FF0000">#1: Current text.</p>

<h3>Description:</h3>
<p>Display a progression bar, from 0 to 100%.</p>
<p><b style="color:#000080">POL_SetupWindow_pulsebar</b> display the progression bar.</p>
<p><b style="color:#000080">POL_SetupWindow_pulse</b> changes the progression value, from 0 to 100%.</p>
<p><b style="color:#000080">POL_SetupWindow_set_text</b> modifies the current message (different from <b style="color:#000080">POL_SetupWindow_pulsebar</b> message).</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_pulsebar "Installing patchs 1 to 5." "$TITLE"

POL_SetupWindow_set_text "Installation of patch 1 in progress"
POL_Wine start /unix "$POL_System_TmpDir/patch1.exe"
POL_SetupWindow_pulse "20" # meaning 20%

POL_SetupWindow_set_text "Installation of patch 2 in progress"
POL_Wine start /unix "$POL_System_TmpDir/patch2.exe"
POL_SetupWindow_pulse "40"

POL_SetupWindow_set_text "Installation of patch 3 in progress"
POL_Wine start /unix "$POL_System_TmpDir/patch3.exe"
POL_SetupWindow_pulse "60"

POL_SetupWindow_set_text "Installation of patch 4 in progress"
POL_Wine start /unix "$POL_System_TmpDir/patch4.exe"
POL_SetupWindow_pulse "80"

POL_SetupWindow_set_text "Installation of patch 5 in progress"
POL_Wine start /unix "$POL_System_TmpDir/patch5.exe"
POL_SetupWindow_pulse "100"'); ?>

<h2 style="color:#000080">POL_SetupWindow_wait</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>

<h3>Description:</h3>
<p>Display an indeterminate progress bar.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_wait "Please wait" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_textbox</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#004000">#3: Default value.</p>

<h3>Description:</h3>
<p>Display some window asking the user to type in something.</p>

<h3>Return:</h3>
<p>What the user typed is returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_textbox "Votre pseudo :" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_textbox_multiline</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#004000">#3: Default value.</p>

<h3>Description:</h3>
<p>Similar to <b style="color:#000080">POL_SetupWindow_textbox</b>, but typing happens on several lines.</p>

<h3>Return:</h3>
<p>What the user typed is returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_textbox_multiline "Enter a description for the program" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_browse</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#004000">#3: Default file.</p>

<h3>Description:</h3>
<p>Ask the user to select a file.</p>

<h3>Return:</h3>
<p>The path of the file selected by the user is returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_browse "Please select the program." "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_question</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>

<h3>Description:</h3>
<p>Ask a question to the user (that can be answered by Yes or No).</p>

<h3>Return:</h3>
<p>Answer is returned in the <b>$APP_ANSWER</b> variable (<b>TRUE</b> for Yes, <b>FALSE</b> for No).</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_question "Message" "Titre"'); ?>

<h2 style="color:#000080">POL_SetupWindow_menu</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Available choices.</p>
<p style="color:#FF0000">#2: Separator character (often <b>~</b> or <b>-</b>).</p>

<h3>Description:</h3>
<p>Display a menu to the user, asking him to select one entry among the choices provided.</p>

<h3>Return:</h3>
<p>The choice selected by the user is returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_menu "What\'s your favorite color?" "$TITLE" "Red~Green~Blue" "~"'); ?>

<h2 style="color:#000080">POL_SetupWindow_menu_num</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Available choices.</p>
<p style="color:#FF0000">#2: Separator character (often <b>~</b> or <b>-</b>).</p>

<h3>Description:</h3>
<p>Similar to the command <b style="color:#000080">POL_SetupWindow_menu</b> except that instead of returning the name of the selected choice (Red for example), it returns the position of the selected choice in the list, as a number (0 being the 1<sup>st</sup> choice).</p>

<h3>Return:</h3>
<p>The choice selected by the user is returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_menu_num "What\'s your favorite color?" "$TITLE" "Red~Green~Blue" "~"'); ?>
<p>$APP_ANSWER will contain 0 if the user selected Red, 1 for Green, or 2 for Blue.</p>

<h2 style="color:#000080">POL_SetupWindow_menu_list</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Available choices.</p>
<p style="color:#FF0000">#2: Separator character (often <b>~</b> or <b>-</b>).</p>
<p style="color:#004000">#3: Default choice.</p>

<h3>Description:</h3>
<p>Similar to the command <b style="color:#000080">POL_SetupWindow_menu</b> but displays a drop-down list.</p>

<h3>Return:</h3>
<p>The choice selected by the user is returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_menu_list "What\'s your favorite color?" "$TITLE" "Red~Green~Blue" "~"'); ?>

<h2 style="color:#000080">POL_SetupWindow_checkbox_list</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>
<p style="color:#FF0000">#2: Title (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Available choices.</p>
<p style="color:#FF0000">#2: Separator character (often <b>~</b> or <b>-</b>).</p>

<h3>Description:</h3>
<p>Show a list of options and checkboxen to the user, asking him to select the option(s) he wants.</p>

<h3>Return:</h3>
<p>The option(s) selected by the user are returned in the <b>$APP_ANSWER</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_checkbox_list "What are your favorite colors?" "$TITLE" "Red~Green~Blue" "~"
if [ "$(echo $APP_ANSWER | grep -o "Red")" != "" ]
then
	# Red was selected
fi
if [ "$(echo $APP_ANSWER | grep -o "Green")" != "" ]
then
	# Green was selected
fi
if [ "$(echo $APP_ANSWER | grep -o "Blue")" != "" ]
then
	# Blue was selected
fi'); ?>

<h2 style="color:#000080">POL_SetupWindow_cdrom</h2>
<h3>Description:</h3>
<p>Ask the user to select him CD/DVD.</p>

<h3>Return:</h3>
<p>The path to the drive selected by the user is returned in the <b>$CDROM</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_cdrom'); ?>

<h2 style="color:#000080">POL_SetupWindow_check_cdrom</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: File that must be present.</p>

<h3>Description:</h3>
<p>Check that the file specified exists on the CD/DVD. If it doesn't, execute <b style="color:#000080">POL_SetupWindow_cdrom</b> again.</p>

<h3>Prerequisite:</h3>
<p>Should be used right after <b style="color:#000080">POL_SetupWindow_cdrom</b>.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_check_cdrom "Data/32_icon.ico"'); ?>

<h2 style="color:#000080">POL_SetupWindow_InstallMethod</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Comma separated list of installation methods available.</p>

<h3>Description:</h3>
<p>Ask the user want installation method he wants, among the available choices.</p>

<h3>Available installation methods:</h3>
<p><b>LOCAL</b>, <b>CD</b>, <b>DVD</b>, <b>DOWNLOAD</b>, <b>STEAM</b>, <b>STEAM_DEMO</b>.</p>

<h3>Return:</h3>
<p>The choice selected by the user is returned in the <b>$INSTALL_METHOD</b> variable.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_InstallMethod "LOCAL,CD,STEAM"'); ?>

<h2 style="color:#000080">POL_Shortcut</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Executable filename.</p>
<p style="color:#FF0000">#2: Launcher name (often <b>$TITLE</b>).</p>
<p style="color:#FF8000">#3: Name of the icon to download from <?php echo $website_name; ?> website.</p>
<p style="color:#004000">#4: Executable arguments.</p>

<h3>Description:</h3>
<p>Create a launcher in <?php echo $website_name; ?>.</p>

<h3>Prerequisite:</h3>
<p>The command <span style="color:#000080"><b>POL_Wine_SelectPrefix</b></span> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Shortcut "firefox.exe" "$TITLE"'); ?>

<h2 style="color:#000080">POL_Shortcut_InsertBeforeWine</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Launcher name (often <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2: Command to add.</p>

<h3>Description:</h3>
<p>Allows to run an extra command each time a program will be about to start.</p>

<h3>Example:</h3>
<?php echo script('POL_Shortcut_InsertBeforeWine "Jedi Knight II" "export __GL_ExtensionStringVersion=17700"'); ?>

<h2 style="color:#000080">POL_Browser</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: URL to open.</p>

<h3>Description:</h3>
<p>Opens an URL in the user's default Internet browser.</p>

<h3>Example:</h3>
<?php echo script('POL_Browser "http://www.playonlinux.com"'); ?>

<h2 style="color:#000080">POL_System_TmpCreate</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Name of the temporary directory (often <b>$PREFIX</b>).</p>

<h3>Description:</h3>
<p>Creates the temporary directory dedicated to the script.</p>

<h3>Return:</h3>
<p><b>$POL_System_TmpDir</b> will contain the path of the created temporary directory.</p>

<h3>Example:</h3>
<?php echo script('POL_System_TmpCreate "$PREFIX"'); ?>

<h2 style="color:#000080">POL_System_TmpDelete</h2>
<h3>Description:</h3>
<p>Removes the script's temporary directory.</p>

<h3>Example:</h3>
<?php echo script('POL_System_TmpDelete'); ?>

<h2 style="color:#000080">POL_System_SetArch</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Supported architectures (see below).</p>

<h3>Description:</h3>
<p>Set the (Wine) architectures supported by the script.</p>

<h3>Allowed values:</h3>
<p><b>auto</b>: Use the version of Wine matching the system architecture (Wine x86 on x86 and Wine x64 on amd64)</p>
<p><b>x86</b>: Use the x86 version of Wine for installation (useful if the program doesn't work well with the x64 version)</p>
<p><b>amd64</b>: Use the x64 version of Wine for installation (if the system architecture is x86, the script stops).</p>

<h3>Example:</h3>
<?php echo script('POL_System_SetArch "auto"'); ?>

<h2 style="color:#000080">POL_Call</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Function name.</p>
<p style="color:#0000FF">#2, #3, etc.: Function arguments, if necessary (very few functions take arguments).</p>

<h3>Description:</h3>
<p>Download and execute a script from the Functions category (<a href="http://www.playonlinux.com/repository/?cat=100">the list is available here</a>).</p>

<h3>Prerequisite:</h3>
<p>For most functions, the commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Call POL_Install_vcrun6'); ?>

<h1>Wine related functions</h1>

<h2 style="color:#000080">POL_Wine_SelectPrefix</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Prefix name (often <b>$PREFIX</b>).</p>

<h3>Description:</h3>
<p>Select the prefix that will be used by Wine (mandatory, even if the prefix hasn't been created yet).</p>

<h3>Exemple:</h3>
<?php echo script('POL_Wine_SelectPrefix "$PREFIX"'); ?>

<h2 style="color:#000080">POL_Wine_PrefixExists</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Prefix name (often <b>$PREFIX</b>.</p>

<h3>Description:</h3>
<p>Check if a prefix exists (useful for game extensions and patches).</p>

<h3>Return:</h3>
<p>The function displays <b>True</b> if the prefix exists, and <b>False</b> otherwise.</p>

<h3>Example:</h3>
<?php echo script('if [ "$(POL_Wine_PrefixExists "$PREFIX")" = "False" ]
then
	# The préfixe doesn\'t exist
fi
'); ?>

<h2 style="color:#000080">POL_Wine_PrefixCreate</h2>
<h3>Arguments:</h3>
<p style="color:#004000">#1: Wine version.</p>

<h3>Description:</h3>
<p>Creates or updates a prefix. It is possible to use a version of Wine different from the one installed system wide on user's computer, by specifying this version as first argument.</p>

<h3>Prerequisite:</h3>
<p>The command <span style="color:#000080"><b>POL_Wine_SelectPrefix</b></span> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_PrefixCreate "1.3.4"'); ?>

<h2 style="color:#000080">POL_Wine</h2>
<h3>Description:</h3>
<p>This command works exactly like the "wine" command, but uses the Wine versions management of <?php echo $website_name; ?>.</p>
<p>Note: Using <b>start /unix</b> can fix issues of access and installation paths with several CD/DVD.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Examples:</h3>
<?php echo script('POL_Wine "Setup.exe"
POL_Wine start /unix "Setup.exe"'); ?>

<h2 style="color:#000080">POL_SetupWindow_VMS</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Minimum amount of RAM required, in MB.</p>

<h3>Description:</h3>
<p>Ask the user how much (dedicated) RAM his videocard has.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_VMS "128"'); ?>

<h2 style="color:#000080">Set_OS</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Windows version to emulate.</p>
<p style="color:#004000">#2: Service pack.</p>

<h3>Description:</h3>
<p>Modifies the Windows version emulated by Wine.</p>
<p>Default value: <b>winxp</b> (Windows XP).</p>

<h3>Allowed values:</h3>
<p>Windows versions: <b>win7</b>, <b>vista</b>, <b>win2003</b>, <b>winxp</b>, <b>win2k</b>, <b>winnt</b>, <b>winme</b>, <b>nt40</b>, <b>win98</b>, <b>win95</b>, <b>win31</b>.</p>
<p>Services packs: <b>sp1</b>, <b>sp2</b>, <b>sp3</b>.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('Set_OS "win2k"'); ?>

<h2 style="color:#000080">Set_Managed</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: <b>On</b>/<b>Off</b>.</p>

<h3>Description:</h3>
<p>Set if the window manager will be allowed to manage Wine windows.</p>
<p>Default value: <b>On</b>.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('Set_Managed "Off"'); ?>

<h2 style="color:#000080">Set_SoundDriver</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: <b>alsa</b>/<b>oss</b>/<b>esd</b>.</p>

<h3>Description:</h3>
<p>Set the audio driver Wine will use.</p>
<p>Note: This command does nothing under PlayOnMac, since it is useless in that environment.

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('Set_SoundDriver "alsa"'); ?>

<h2 style="color:#000080">POL_Wine_Direct3D</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Setting to create/modify.</p>
<p style="color:#FF0000">#2: New setting value.</p>

<h3>Description:</h3>
<p>Creates or modifies a registry setting below key <b>[HKEY_CURRENT_USER\Software\Wine\Direct3D]</b>.</p>

<h3>Allowed values:</h3>
<p>See <a href="http://wiki.winehq.org/UsefulRegistryKeys">WineHQ's Wiki</a>.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_Direct3D "UseGLSL" "disabled"'); ?>

<h2 style="color:#000080">POL_Wine_X11Drv</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Setting to create/modify.</p>
<p style="color:#FF0000">#2: New setting value.</p>

<h3>Description:</h3>
<p>Creates or modifies a registry setting below key <b>[HKEY_CURRENT_USER\Software\Wine\X11 Driver]</b>.</p>

<h3>Allowed values:</h3>
<p>See <a href="http://wiki.winehq.org/UsefulRegistryKeys">WineHQ's Wiki</a>.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_X11Drv "DXGrab" "Y"'); ?>

<h2 style="color:#000080">POL_Wine_DirectSound</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Setting to create/modify.</p>
<p style="color:#FF0000">#2: New setting value.</p>

<h3>Description:</h3>
<p>Creates or modifies a registry setting below key <b>[HKEY_CURRENT_USER\Software\Wine\DirectSound]</b>.</p>

<h3>Allowed values:</h3>
<p>See <a href="http://wiki.winehq.org/UsefulRegistryKeys">WineHQ's Wiki</a>.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_DirectSound "HardwareAcceleration" "Emulation"'); ?>

<h2 style="color:#000080">POL_Wine_DirectInput</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Setting to create/modify.</p>
<p style="color:#FF0000">#2: New setting value.</p>

<h3>Description:</h3>
<p>Creates or modifies a registry setting below key <b>[HKEY_CURRENT_USER\Software\Wine\DirectInput]</b>.</p>

<h3>Allowed values:</h3>
<p>See <a href="http://wiki.winehq.org/UsefulRegistryKeys">WineHQ's Wiki</a>.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_DirectInput "MouseWarpOverride" "force"'); ?>

<h2 style="color:#000080">POL_Wine_GetRegValue</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Setting to read (the key is not required).</p>

<h3>Description:</h3>
<p>This function returns the value of a setting from the registry.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Return:</h3>
<p>The function displays the value of the specified setting.</p>

<h3>Example:</h3>
<?php echo script('VALUE="$(POL_Wine_GetRegValue "MouseWarpOverride")"'); ?>

<h2 style="color:#000080">Set_Desktop</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: <b>On</b>/<b>Off</b>.</p>
<p style="color:#0000FF">#2: Virtual desktop width (if it is enabled).</p>
<p style="color:#0000FF">#3: Virtual desktop height (if it is enabled).</p>

<h3>Description:</h3>
<p>Sets the Wine virtual desktop settings.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('Set_Desktop "On" "1024" "768"'); ?>

<h2 style="color:#000080">Set_WineWindowTitle</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Virtual desktop name.</p>

<h3>Description:</h3>
<p>Set the title of the virtual desktop window (purely aesthetic effect).</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('Set_WineWindowTitle "$TITLE"'); ?>

<h2 style="color:#000080">POL_Wine_InstallFonts</h2>
<h3>Description:</h3>
<p>This command installs standard (but not installed by default) fonts into the prefix.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_InstallFonts'); ?>

<h2 style="color:#000080">POL_Wine_SetVideoDriver</h2>
<h3>Description:</h3>
<p>Set correct video driver (when Wine fails to do it properly).</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_SetVideoDriver'); ?>

<h2 style="color:#000080">POL_Wine_OverrideDLL</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Mode of override.</p>
<p style="color:#004000">#2, #3, #4, etc.: DLL names (without .dll suffix).</p>

<h3>Description:</h3>
<p>Set the override mode for one or more dynamic library(ies).</p>

<h3>Allowed override modes:</h3>
<p><b>native</b>, <b>builtin</b>, <b>native,builtin</b>, <b>builtin,native</b>, or empty value (<b>""</b>) to disable the DLL(s).</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Examples:</h3>
<?php echo script('POL_Wine_OverrideDLL "native" "msvcrt"
POL_Wine_OverrideDLL "" "msvcrt" # To disable the DLL'); ?>

<h2 style="color:#000080">POL_Wine_OverrideDLL_App</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Executable name.</p>
<p style="color:#FF0000">#2: Mode of override.</p>
<p style="color:#004000">#3, #4, #5, etc.: DLL names (without .dll suffix).</p>

<h3>Description:</h3>
<p>Set the override mode for one or more dynamic library(ies), but only for a specific program.</p>

<h3>Allowed override modes:</h3>
<p><b>native</b>, <b>builtin</b>, <b>native,builtin</b>, <b>builtin,native</b>, or empty value (<b>""</b>) to disable the DLL(s).</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Examples:</h3>
<?php echo script('POL_Wine_OverrideDLL_App "firefox.exe" "native" "msvcrt"
POL_Wine_OverrideDLL_App "firefox.exe" "" "msvcrt" # To disable the DLL'); ?>

<h2 style="color:#000080">POL_Wine_WaitExit</h2>
<h3>Arguments:</h3>
<p style="color:#004000">#1: Program name.</p>

<h3>Description:</h3>
<p>Wait for the completion of the program started with the <b style="color:#000080">POL_Wine</b> command.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_WaitExit "$TITLE"'); ?>

<h2 style="color:#000080">POL_Wine_reboot</h2>
<h3>Description:</h3>
<p>Emulate a Windows reboot.</p>

<h3>Prerequisite:</h3>
<p>The commands <b style="color:#000080">POL_Wine_SelectPrefix</b> and <b style="color:#000080">POL_Wine_PrefixCreate</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Wine_reboot'); ?>

<h1>Debugging commands</h1>

<h2 style="color:#000080">POL_Debug_Init</h2>
<h3>Description:</h3>
<p>Start debugging system.</p>

<h3>Example:</h3>
<?php echo script('POL_Debug_Init'); ?>

<h2 style="color:#000080">POL_Debug_Message</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>

<h3>Description:</h3>
<p>Write a message to the installation log (not shown to the user).</p>

<h3>Prerequisite:</h3>
<p>The command <b style="color:#000080">POL_Debug_Init</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Debug_Message "Modifying config.cfg file."'); ?>

<h2 style="color:#000080">POL_Debug_Warning</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>

<h3>Description:</h3>
<p>Write a warning message to the installation log (not shown to the user).</p>

<h3>Prerequisite:</h3>
<p>The command <b style="color:#000080">POL_Debug_Init</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Debug_Warning "File config.cfg did not exist, creating one."'); ?>

<h2 style="color:#000080">POL_Debug_Error</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>

<h3>Description:</h3>
<p>Write an error message to the installation log (The user receives the error message, but the script goes on).</p>

<h3>Prerequisite:</h3>
<p>The command <b style="color:#000080">POL_Debug_Init</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Debug_Error "Error while modifying config.cfg file"'); ?>

<h2 style="color:#000080">POL_Debug_Fatal</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1: Message.</p>

<h3>Description:</h3>
<p>Raises a fatal error (the script is immediately aborted).</p>

<h3>Prerequisite:</h3>
<p>The command <b style="color:#000080">POL_Debug_Init</b> must have been used beforehand.</p>

<h3>Example:</h3>
<?php echo script('POL_Debug_Fatal "Error while modifying config.cfg file"'); ?>
