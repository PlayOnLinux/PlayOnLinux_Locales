<h2>Debian</h2>
<h3>Deb-filer :</h3>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>PlayOnLinux : <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.deb">PlayOnLinux_<?php echo $version; ?>.deb</a></p>

<?php 
$supported_distrib = array("etch", "lenny", "squeeze");
$supported_distrib = array_reverse($supported_distrib);
foreach($supported_distrib as $key)
{
?>
 
<h3>Med <?php echo ucfirst($key); ?>-förrådet</h3>
<p>Skriv (eller klipp och klistra) följande kommandon i terminalen:</p>
<div class="codeconsole" ><code>wget -q "http://deb.playonlinux.com/public.gpg" -O - | apt-key add -<br />
wget http://deb.playonlinux.com/playonlinux_<?php echo $key; ?>.list -O /etc/apt/sources.list.d/playonlinux.list<br />
apt-get update<br />
apt-get install playonlinux</code></div>

<?php
}
?>
