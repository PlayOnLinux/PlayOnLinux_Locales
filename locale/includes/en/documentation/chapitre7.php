<h1>Create a script for <?php echo $website_name; ?> - Chapter 7: Installation media</h1>
<p>In this chapter we will see how to install some software from a CD/DVD, or how to download it if it is available from the Internet.</p>

<h2>CD/DVD media</h2>
<p><?php echo $website_name; ?> allows to easily install a software from a CD/DVD.</p>

<h2>Ask the user to select his/her CD/DVD</h2>
<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_cdrom') ?>

<h3>Example&nbsp;:</h3>
<?php echo script('POL_SetupWindow_cdrom') ?>
<p><img src="<?php echo $url; ?>/doc/images/ch07-01.en.png"></p>
<p>The path to the CD/DVD will be stored in the variable <b>$CDROM</b> (for example <b>$CDROM</b> value could be: <b>/media/cdrom0</b>).</p>

<h2>Check if the CD/DVD is the expected one (after having used POL_SetupWindow_cdrom)</h2>
<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_check_cdrom "path/to/some/file/on/the/CD"'); ?>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_check_cdrom "Data/media1.dat"'); ?>
<p>Check if this file exists, otherwise run <span style="color:#000080"><b>POL_SetupWindow_cdrom</b></span> again.</p>
<p>Try to choose some file specific to the expected CD, not Setup.exe, autorun.inf, and the like.</p>


<h2>Download a program from the Internet</h2>
<p>With <?php echo $website_name; ?> you can easily download files from the Internet. This is specially useful for software that is available for free from the 'net.</p>

<h2>Download a file</h2>
<h3>Syntax:</h3>
<?php echo script('POL_Download "URL" "MD5 digest of the file"'); ?>
<p style="color:#008000">MD5 Digest, what is that?</p>

<h3>Explanation:</h3>
<p>The MD5 digest is some code that looks like <b>b1bbd74395a34ff7fd069d3b6fe23016</b>, that's unique for each file.</p>
<p>It's used to make sure that the downloaded file is not corrupted (as it sometimes happens, because of download errors).</p>
<p>To compute the MD5 digest of a file, use the following command in a console/terminal:</p>
<?php
if($website_name == "PlayOnLinux")
{
	echo bbencode('[code language=console]md5sum "/path/to/some/setup.exe"[/code]');
}
elseif($website_name == "PlayOnMac")
{
	echo bbencode('[code language=console]md5 "/path/to/some/setup.exe"[/code]');
}
?>

<p>The file downloaded will be written in the current working directory (as selected with the cd command). Most of the time, the right place for downloaded files is the temporary directory, created by the command <span style="color:#000080"><b>POL_System_TmpCreate</b></span>. To put files in the temporary directory, use the following command right before <span style="color:#000080"><b>POL_Download</b></span>:</p>
<?php echo script('cd "$POL_System_TmpDir"'); ?>

<h3>Example:</h3>
<?php echo script('cd "$POL_System_TmpDir"
POL_Download "http://www.example.com/download/setup.exe" "b1bbd74395a34ff7fd069d3b6fe23016"'); ?>
<p>The file will be named after the name of the file on the server, so if the URL looks like, say: http://www.example.com/download/setup.exe, the downloaded file will be called <b>setup.exe</b>.</p>

<h2>Select installation method</h2>
<p style="color:#008000">How to ask the user what installation method he wants to use?</p>
<p>Poof, here comes the function <span style="color:#000080"><b>POL_SetupWindow_InstallMethod</b></span>. This function will ask the user from what media he wants to install a program.</p>

<h2>Function POL_SetupWindow_InstallMethod</h2>
<h3>Syntax:</h3>
<?php echo script('POL_SetupWindow_InstallMethod "Installation methods"'); ?>

<h3>Explanations:</h3>
<p>Many different installation methods exist, but let's start with the 4 most simple ones (and the most common).</p>

<p>Some existing methods:</p>
<p><b>LOCAL</b>: The user will select a file from his computer.</p>
<p><b>DOWNLOAD</b>: Download the installation file from the Internet.</p>
<p><b>CD</b>: Install the program from a CD.</p>
<p><b>DVD</b>: Install the program from a DVD.</p>
<p>The methods available to the user should be separated with commas.</p>
<p>The method selected by the user will be returned in the variable <b>$INSTALL_METHOD</b>. You can then use a combinaison of <b>if</b>, <b>then</b>, <b>elif</b>, <b>then</b> and <b>fi</b> to determine what method has been choosen, and act accordingly. Details will be given in the next chapter.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_InstallMethod "LOCAL,DOWNLOAD"'); ?>
<p><img src="<?php echo $url; ?>/doc/images/ch07-02.en.png"></p>

<h2>Now, all what's left to do is to create a launcher inside <?php echo $website_name; ?></h2>
<p>Creating a launcher (or shortcut) in <?php echo $website_name; ?> is extremely easy, look:</p>

<h3>Syntax:</h3>
<?php echo script('POL_Shortcut "Executable.exe" "Name of the launcher"'); ?>

<h3>Example:</h3>
<?php echo script('POL_Shortcut "JediKnightII.exe" "Star Wars: Jedi Knight II"'); ?>
  <p>You should not specify the whole path to the executable, <?php echo $website_name; ?> will find it automatically.</p>
