<h1>PlayOnLinux User Manual</h1>
<p>Please note that this manual is a work in progress and not all functionality may be documented.</p>
<h2>Installing and launching PlayOnLinux</h2>
<p>Installing PlayOnLinux depends on what distribution you use, these details are found on the <a href="http://www.playonlinux.com/en/download.html">downloads</a> page. After PlayOnLinux has been installed, you should find it under "Games" in most distributions, here shown under KDE3.<br />
<img src="<?php echo $url; ?>/doc/images/launch.jpg" /></p>
<p>If you are unable to locate it in the menus, you may try to launch it using the command "playonlinux" from a terminal window. If this fails it is probably not correctly installed and you should consult the download instructions again.</p>
<h2>PlayOnLinux main window</h2>
<p>When you first start PlayOnLinux, you will find that the main screen is rather empty. That is because most of the space is reserved for the list of application that are installed, which are currently none. In order to install applications, click the Install button.<br />
<img src="<?php echo $url; ?>/doc/images/mainwindow-install.jpg" /></p>
<h2>The installer dialog</h2>
<p>The install dialog allows you to select an application either by navigating through the categories listed on the left, or through the search bar located at the top of the dialog.<br />
<img src="<?php echo $url; ?>/doc/images/install-category.jpg" style="width:600px"/><br />
<br />
<img src="<?php echo $url; ?>/doc/images/install-search.jpg" style="width:600px" /><br />
<br />
After you have located the application you want, you must first select it in the list and then click "Apply".<br />
<br />
<img src="<?php echo $url; ?>/doc/images/install-selectapply.jpg" style="width:600px" /><br />
<br />
Once you have clicked apply, the application specific installer is launched. Unless you are installing a patch to an existing application, most installers will begin with a presentation of the application. Following that it will create the PlayOnLinux directory for this application's files.<br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-presentation.jpg" /><br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-wineprefix.jpg" /><br />
<br />
After this point several things could happen - the installer may begin downloading, it may ask for a setup file, it may ask for the CD-ROM of the game depending on what the game needs to do. This will depend completely on the application and what is scripted for it. Some examples are included below as illustration<br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-download.jpg" /><br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-browse.jpg" /><br />
<br />
At some point, PlayOnLinux will launch the application's native Windows installer. Since the form is completely up to the application, there is no example but you must navigate through this yourself. What is important is that scripts may need to modify this installation after it has completed, so please install to the default directory using the default options unless you have been instructed otherwise. After the installer has finished, PlayOnLinux will present a shortcut dialog of its own. Please select the options you want.<br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-shortcut.jpg" /><br />
</p>
<h2>Running an application</h2>
<p>At this point PlayOnLinux will tell you that the installation is finished, and you will return to the main window. The application you installed will have been added to the list. To run this application, simply select the application from the list and click run. You can also double-click the application instead, or you can launch it from the desktop or regular menu if you chose to install those shortcuts.
<br />
<img src="<?php echo $url; ?>/doc/images/mainwindow-run.jpg" /><br />
</p>
<h2>Removing an application</h2>
<p>To remove an application, simply select it in the list and click Remove. Note that while the application and all its files and registry settings are deleted, currently PlayOnLinux may not remove all shortcuts to the application.<br />
<br />
<img src="<?php echo $url; ?>/doc/images/mainwindow-remove.jpg" /></p>
<h2>Refreshing the repository</h2>
<p>If you are unable to find the application you want, you may want to refresh the local list of applications by clicking the "Refresh the repository" button. This will make sure you have the latest available scripts.</p>
<h2>FAQ: The installation doesn't work</h2>
<p>Since each application has its own script, it's impossible to make any general answers to what the problem might be. Try asking in the integrated PlayOnLinux chat or forum which may be able to help you solve the problem.</p>
<h2>FAQ: The script/AppDB says it requires a crack/no-cd...</h2>
<p>Then you will not find it on PlayOnLinux, nor will anyone here help you find it and the WINE AppDB has pretty much the same policy. While sadly some games require such means in order to run, it would be very wrong to get PlayOnLinux or WINE dragged into it. Consider it a bit like the distro repositories - you will not find anything naughty in the default repositories there either.</p>
<h2>FAQ: The application I want isn't there</h2>
<p>This can be for one of two reasons - either the application doesn't work well under WINE (that PlayOnLinux is a front-end to) or noone has written a script for it yet. You can check the WINE AppDB about the former, if it does run well maybe you can either install it manually or write an install script for it - it's not that hard.</p>
