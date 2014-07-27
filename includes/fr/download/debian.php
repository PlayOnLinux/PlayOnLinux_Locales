<h2>Debian</h2>
<h3>Fichiers deb :</h3>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>PlayOnLinux : <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.deb">PlayOnLinux_<?php echo $version; ?>.deb</a></p>

<p><span style='color:red;font-weight:bold'>Utilisateurs de wheezy : Vous devez installer le paquet wine:i386 pour faire fonctionner PlayOnLinux</span></p>

<?php 
$supported_distrib = array("etch", "lenny", "squeeze","wheezy");
$supported_distrib = array_reverse($supported_distrib);
foreach($supported_distrib as $key)
{
?>
 
<h3>Avec le dépôt <?php echo ucfirst($key); ?></h3>
<p>Tapez les commandes suivantes :</p>
<kbd>wget -q "http://deb.playonlinux.com/public.gpg" -O- | apt-key add -<br />
wget http://deb.playonlinux.com/playonlinux_<?php echo $key; ?>.list -O /etc/apt/sources.list.d/playonlinux.list<br />
apt-get update<br />
apt-get install playonlinux</kbd>

<?php
}
?>
