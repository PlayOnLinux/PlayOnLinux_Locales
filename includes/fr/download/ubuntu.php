<h2>Ubuntu</h2>
<h3>Fichiers .deb :</h3>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>PlayOnLinux : <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.deb">PlayOnLinux_<?php echo $version; ?>.deb</a></p>

<span style='color:red;font-weight:bold'>Utilisateurs de precise (et superieur) : Vous devez installer le paquet wine:i386 pour faire fonctionner PlayOnLinux</span>


<?php 
$supported_distrib = array("precise","saucy", "trusty");
$supported_distrib = array_reverse($supported_distrib);
foreach($supported_distrib as $key)
{
?>
 
<h3>Avec le dépôt <?php echo ucfirst($key); ?></h3>
<p>Tapez les commandes suivantes :</p>
<kbd>wget -q "http://deb.playonlinux.com/public.gpg" -O- | sudo apt-key add -<br />
sudo wget http://deb.playonlinux.com/playonlinux_<?php echo $key; ?>.list -O /etc/apt/sources.list.d/playonlinux.list<br />
sudo apt-get update<br />
sudo apt-get install playonlinux</kbd>

<?php
}
?>
