<h1>Create a script for <?php echo $website_name; ?> - Chapter 6: The file system</h1>
<p>There are a couple of good ways to manipulate your files and directories in Bash. We'll give you the most important commands for writing <?php echo $website_name; ?> scripts.</p>

<h2><?php echo $website_name; ?> temporary directories</h2>
<p>You can use a temporary directory in your script.</p>

<h2>Create a temporary directory</h2>
<h3>Syntax:</h3>
<?php echo script('POL_System_TmpCreate "NameOfTemporaryDirectory"'); ?>
<p>It is recommended to use the name of the prefix as temporary directory name.</p>

<h3>Example:</h3>
<?php echo script('POL_System_TmpCreate "MozillaFirefox"'); ?>
<p>It will create a variable <b>$POL_System_TmpDir</b> that will contain the path of the temporary directory.</p>
<p>In this directory, you'll be free to store and modify all the files you want, for the whole script duration.</p>

<h2>Delete the temporary directory</h2>
<h3>Syntax:</h3>
<?php echo script('POL_System_TmpDelete'); ?>

<h3>Example:</h3>
<?php echo script('POL_System_TmpDelete'); ?>
<p>Note that it's useless to remove the files you created in the temporary directory before calling the <span style="color:#000080"><b>POL_System_TmpDelete</b></span> command.</p>

<h2>Switching directory</h2>
<h3>Syntax:</h3>
<?php echo script('cd "path"'); ?>

<h3>Examples:</h3>
<?php echo script('cd "/path/to/a/directory"'); ?>
<?php echo script('cd "$HOME" # Switch to user\'s personal directory'); ?>
<?php echo script('cd "$CDROM" # Switch to CD/DVD directory'); ?>
<?php echo script('cd "$POL_System_TmpDir" # Switch to temporary directory'); ?>

<h2>Removing a file or directory</h2>
<p style="color:#FF0000">Warning, this command is very dangerous. It could destroy all your files if you don't handle it properly. For example, if you decide to remove /home/user/.PlayOnLinux/tmp/ and that you inadvertently insert a blank between /home/user/ and .PlayOnLinux, you can say farewell to your documents. <?php echo $website_name; ?> could not be held responsible for any mishandling on your part.</p>
<h3>Syntaxes:</h3>
<?php echo script('rm "filename"'); ?>
<?php echo script('rm -r "directory"'); ?>

<h3>Examples:</h3>
<?php echo script('rm "$POL_System_TmpDir/file.txt"'); ?>
<?php echo script('rm -r "$POL_System_TmpDir/directory"'); ?>
<p>If they are any remaining files and/or subdirectories in the directory you're removing, they'll also be removed for good.</p>

<h2>Copying a file or a directory</h2>
<h3>Syntax:</h3>
<?php echo script('cp "SourceFile" "TargetFile"'); ?>
<?php echo script('cp -r "SourceDirectory" "TargetDirectory"'); ?>

<h3>Examples of file copies:</h3>
<?php echo script('cp "/home/user/file.txt" "/home/user/copy_of_file.txt"'); ?>
<?php echo script('cp "/home/user/file.txt" "/home/user/data/file.txt"'); ?>
<?php echo script('cp "$CDROM/file.txt" "$POL_System_TmpDir/file.txt"'); ?>

<h3>Example of directory copy:</h3>
<?php echo script('cp -r "/home/user/My Folder" "/home/user/Desktop/Test/"'); ?>

<h2>Moving or renaming a file or directory</h2>
<?php echo script('mv "/home/user/file.txt" "home/user/data.txt"'); ?>
<?php echo script('mv "/home/user/file.txt" "/home/user/Desktop/file.txt"'); ?>
<?php echo script('mv "/home/user/file.txt" "/home/user/Desktop/data.txt"'); ?>
<p>1<sup>st</sup> command will rename the file file.txt to data.txt.</p>
<p>2<sup>nd</sup> command will move the file.</p>
<p>3<sup>rd</sup> command will move AND rename the file.</p>
