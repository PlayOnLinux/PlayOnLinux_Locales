<h2>Arch Linux</h2>
<h3>Lägg till archlinufr-förrådet:</h3>
<p>Som root (eller med sudo), lägg till följande rader i <b>/etc/pacman.conf</b> (för i686 (32-bitars) arkitektur):</p>
<div class="codeconsole"><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/i686</code></div>

<p>Eller följande rader (för x86_64 (64-bitars) arkitektur):</p>
<div class="codeconsole"><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/x86_64</code></div>

<h3>Installera PlayOnLinux</h3>
<p>Som root (eller med sudo), skriv följande kommando:</p>
<div class="codeconsole"><code>pacman -Sy playonlinux</code></div>
