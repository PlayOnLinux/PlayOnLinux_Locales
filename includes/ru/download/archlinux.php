<h2>Arch Linux</h2>
<h3>Добавление репозитория archlinufr:</h3>
<p>Как root (или через sudo), добавьте в <b>/etc/pacman.conf</b> следующие строки (для архитектур i686):</p>
<div class="codeconsole"><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/i686</code></div>

<p>Или эти строки (для архитектур x86_64):</p>
<div class="codeconsole"><code>[archlinuxfr]<br />
Server = http://repo.archlinux.fr/x86_64</code></div>

<h3>Установка PlayOnLinux</h3>
<p>Как root (или через sudo), выполните следующую команду:</p>
<div class="codeconsole"><code>pacman -Sy playonlinux</code></div>
