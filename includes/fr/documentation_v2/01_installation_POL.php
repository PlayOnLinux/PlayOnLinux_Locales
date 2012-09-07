<p>Il est séparé en plusieurs sections, chacune décrivant comment l'installer dans un différent environnement.</p>
<p>Les environnements et méthodes suivants sont supportés</p>

<ul>
  <li><a href="#Archlinux">Archlinux</a></li>
  <li><a href="#Debian">Debian</a></li>
  <li><a href="#Fedora">Fedora</a></li>
  <li><a href="#Frugalware">Frugalware</a></li>
  <li><a href="#Gentoo">Gentoo</a></li>
  <li><a href="#Mandriva">Mandriva</a></li>
  <li><a href="#NuTyx">NuTyx</a></li>
  <li><a href="#OpenSUSE">OpenSUSE</a></li>
  <li><a href="#PCLinuxOS">PCLinuxOS</a></li>
  <li><a href="#Ubuntu">Ubuntu</a></li>
  <li><a href="#Méthode générique">Méthode générique</a></li>
  <li><a href="#Méthode générique avancée">Méthode générique avancée</a></li>
</ul>

<p>Les "codes" (les textes blancs sur fond noir) sont des commandes à exécuter dans une console.
Il faut chercher dans vos applications un programme nommé "Terminal" et l'ouvrir puis taper dedans les commandes (utiliser le copier/coller).</p>
<p>Toutes les commandes données doivent être exécutées par l'utilisateur "root" (l'utilisateur système).
Pour ce faire, il faut à chaque ouverture d'une nouvelle console la "transformer" en console root.
Si vous connaissez le mot de passe root, taper cette commande puis entrer le mot de passe lorsque que demandé :</p>
<div class="codeconsole" ><code>su</code></div>
Si vous ne connaissez pas le mot de passe root, taper cette commande puis entrer votre mot de passe lorsque que demandé :</p>
<div class="codeconsole" ><code>sudo su</code></div>


<h2 id="Archlinux">Archlinux</h2>

<h3>Méthode automatique (recommandée)</h3>
<p>Tapez la commande suivante :</p>
<div class="codeconsole" ><code>echo -e "[archlinuxfr]\nServer = http://repo.archlinux.fr/$(uname -m)" >> /etc/pacman.conf && pacman -Sy playonlinux</code></div>

<h3>Méthode manuelle</h3>
<h4>Ajout du dépôt</h4>
<p>Il faut ajouter le dépôt de archlinux.fr, pour avoir les mises à jour les plus récentes :</p>
<br>Il faut ajouter au fichier <b>/etc/pacman.conf</b> les lignes suivantes:</br>

<p>Pour un ordinateur 64 bits (x86_64), en général, un ordinateur récent, tapez la commande suivante :</p>
<div class="codeconsole" ><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/x86_64</code></div>

<p>Pour un ordinateur 32 bits (i386), en général, un ordinateur un peu vieux, tapez la commande suivante :</p>
<div class="codeconsole" ><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/i686</code></div>

<h4>Installation</h4>
<p>Tapez la commande suivante :</p>
<div class="codeconsole" ><code>pacman -Sy playonlinux</code></div>


<h2 id="Debian">Debian</h2>

<h3>Méthode automatique (recommandée)</h3>
<p>Tapez la commande suivante :</p>
<div class="codeconsole" ><code>wget -q "http://deb.playonlinux.com/public.gpg" -O- | apt-key add - && wget http://deb.playonlinux.com/playonlinux_$(lsb_release -c).list -O /etc/apt/sources.list.d/playonlinux.list &&  apt-get update &&  apt-get install playonlinux</code></div>

<h3>Méthode manuelle</h3>

<?php 
$supported_distrib = array("etch", "lenny", "squeeze");
$supported_distrib = array_reverse($supported_distrib);
foreach($supported_distrib as $key)
{
?>
 
<h4>Avec le dépôt <?php echo ucfirst($key); ?></h4>
<p>Tapez les commandes suivantes :</p>
<div class="codeconsole" ><code>wget -q "http://deb.playonlinux.com/public.gpg" -O- | apt-key add -<br />
wget http://deb.playonlinux.com/playonlinux_<?php echo $key; ?>.list -O /etc/apt/sources.list.d/playonlinux.list<br />
apt-get update<br />
apt-get install playonlinux</code></div>

<?php
}
?>

<h4>Fichiers deb</h4>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>Télécharger l'installeur : <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.deb">PlayOnLinux_<?php echo $version; ?>.deb</a></p>
<p>/!\ Installeur automatique sous Debian maintenant? /!\</p>



<h2 id="Fedora">Fedora</h2>
<p>Rendez-vous <a href="http://rpm.playonlinux.com/">ici</a>, téléchargez le paquet playonlinux-yum et installez le avec la commande suivante (en remplaçant avec le nom de fichier correct) :</p>
<div class="codeconsole" ><code>yum install [nom du fichier téléchargé]</code></div>


<h2 id="Frugalware">Frugalware</h2>
<p>Tapez la commande suivante :</p>
<div class="codeconsole"><code>pacman-g2 -S playonlinux</code></div>


<h2 id="Gentoo">Gentoo</h2>
<p>Tapez la commande suivante :</p>
<div class="codeconsole" ><code>emerge -av playonlinux</code></div>


<h2 id="Mandriva">Mandriva</h2>
<p>Allez <a href="http://fr2.rpmfind.net/linux/rpm2html/search.php?query=playonlinux&amp;system=&amp;arch=">ici</a>, téléchargez le RPM le plus récent puis installez-le.</p>



<h2 id="NuTyx">NuTyx</h2>
<p>Tapez la commande suivante :</p>
<div class="codeconsole"><code>get playonlinux</code></div>


<h2 id="OpenSUSE">OpenSUSE</h2>
<p>Cliquer <a href="http://packman.links2linux.de/install/PlayOnLinux">ici</a>.</p>


<h2 id="PCLinuxOS">PCLinuxOS</h2>
<p>/!\ 404 <a href="http://pclinuxos.bluefusion.hu/apt/pclinuxos/PlayOnLinux/">http://pclinuxos.bluefusion.hu/apt/pclinuxos/PlayOnLinux/</a>/!\</p>


<h2 id="Ubuntu">Ubuntu</h2>

<h3>Méthode automatique (recommandée)</h3>

<div class="codeconsole" ><code>wget -q "http://deb.playonlinux.com/public.gpg" -O- | apt-key add - && wget http://deb.playonlinux.com/playonlinux_$(lsb_release -c).list -O /etc/apt/sources.list.d/playonlinux.list &&  apt-get update &&  apt-get install playonlinux</code></div>

<h3>Méthode manuelle</h3>

<?php 
$supported_distrib = array("lucid","maverick","natty","oneiric","precise");
$supported_distrib = array_reverse($supported_distrib);
foreach($supported_distrib as $key)
{
?>
 
<h4>Avec le dépôt <?php echo ucfirst($key); ?></h4>
<p>Tapez les commandes suivantes :</p>
<div class="codeconsole" ><code>wget -q "http://deb.playonlinux.com/public.gpg" -O- | apt-key add -<br />
wget http://deb.playonlinux.com/playonlinux_<?php echo $key; ?>.list -O /etc/apt/sources.list.d/playonlinux.list<br />
apt-get update<br />
apt-get install playonlinux</code></div>

<?php
}
?>

<h4>Fichiers deb</h4>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>Télécharger l'installeur : <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.deb">PlayOnLinux_<?php echo $version; ?>.deb</a>, ouvrez-le et installez-le.</p>


<h2 id="Méthode générique">Méthode générique</h2>
<!-- Last version : <?php include($racine."/script_files/version2.php"); ?> -->
<p>Télécharger les sources : <a href="<?php echo $url; ?>/script_files/PlayOnLinux/<?php echo $version; ?>/PlayOnLinux_<?php echo $version; ?>.tar.gz">PlayOnLinux_<?php echo $version; ?>.tar.gz</a>, en extraire les fichiers puis lancez le fichier "playonlinux".</p>


<h2 id="Méthode générique avancée">Méthode générique avancée</h2>
<p>Il faut installer git en se référant à <a href="http://git-scm.com/download/linux">cette page</a>.</p>
<p>Puis, il faut récupérer les sources avec la commande suivante :</p>
<div class="codeconsole" ><code>git clone https://github.com/PlayOnLinux/POL-POM-4</code></div>
<p>Enfin, il faut lancer le fichier "playonlinux" contenu dans le dossier crée.</p>


