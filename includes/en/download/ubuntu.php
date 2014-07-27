<h2>Ubuntu</h2>
<h3>Deb files:</h3>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>PlayOnLinux: <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.deb">PlayOnLinux_<?php echo $version; ?>.deb</a></p>

<p><span style='color:red;font-weight:bold'>Ubuntu Precise (and superior) users : You must install the package wine:i386 to get PlayOnLinux working</span></p>

<?php 
$supported_distrib = array("precise","saucy", "trusty");

$supported_distrib = array_reverse($supported_distrib);
foreach($supported_distrib as $key)
{
?>
 
<h3>For the <?php echo ucfirst($key); ?> version</h3>
<p>Type the following commands:</p>
<kbd>wget -q "http://deb.playonlinux.com/public.gpg" -O- | sudo apt-key add -<br />
sudo wget http://deb.playonlinux.com/playonlinux_<?php echo $key; ?>.list -O /etc/apt/sources.list.d/playonlinux.list<br />
sudo apt-get update<br />
sudo apt-get install playonlinux</kbd>

<?php
}
?>

