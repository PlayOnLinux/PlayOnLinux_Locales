<h2>Arch Linux</h2>
<h3>Adding the archlinuxfr repository:</h3>
<p>As root (or with sudo), add to <b>/etc/pacman.conf</b> the following lines (for i686 architectures):</p>
<div class="codeconsole"><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/i686</code></div>

<p>Or the following lines (for x86_64 architectures):</p>
<div class="codeconsole"><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/x86_64</code></div>

<h3>Installing PlayOnLinux</h3>
<p>As root (or with sudo), type the following command:</p>
<div class="codeconsole"><code>pacman -Sy playonlinux</code></div>
