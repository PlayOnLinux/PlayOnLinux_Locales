<h1>PlayOnLinux: Manuel de l'utilisateur</h1>
<p>Ce manuel est en cours de réalisation et il se peut que que les diverses fonctionnalités ne sont pas toutes expliquées encore.</p>
<h2>Installation et lancement de PlayOnLinux</h2>
<p>L'installation de PlayOnLinux dépend de la distribution que vous utilisez, les détails se trouvent sur cette <a href="http://www.PlayOnLinux.com/en/download.html">page</a>. Une fois PlayOnLinux installé, vous devriez le trouver dans l'onglet jeu sous la plupart des distributions. Voilà ce que ça donne sous KDE3.<br />
<img src="<?php echo $url; ?>/doc/images/launch.jpg" /></p>
<p>Si vous ne pouvez pas le trouver depuis le menu vous pouvez essayer de le lancer en utilisant la commande "PlayOnLinux" à partir de la console. Si cela ne fonctionne pas, PlayOnLinux n'est probablement pas bien installé et vous devriez consultez les instructions de téléchargement à nouveau.</p>
<h2>Fenêtre principale de PlayOnLinux</h2>
<p>Quand vous lancerez PlayOnLinux pour la première fois vous risquez de trouver l'écran principal un peu vide. C'est tout simplement parce que cet espace est réservé à la liste des applications installées et qu'il n'y en a aucune pour le moment. Pour installer une application, veuillez appuyer sur le bouton Installer.<br />
<img src="<?php echo $url; ?>/doc/images/mainwindow-install.jpg" /></p>
<h2>La fenêtre d'installation</h2>
<p>Cette fenêtre vous permet de choisir une application soit en naviguant dans les catégories listées sur la gauche ou en utilisant la barre de recherche qui se situe en haut de la fenêtre.<br />
<img src="<?php echo $url; ?>/doc/images/install-category.jpg" style="width:600px"/><br />
<br />
<img src="<?php echo $url; ?>/doc/images/install-search.jpg" style="width:600px" /><br />
<br />
Une fois que vous avez trouvé l'application désirée, vous devez d'abord la sélectionner dans la liste puis cliquer sur "Appliquer".<br />
<br />
<img src="<?php echo $url; ?>/doc/images/install-selectapply.jpg" style="width:600px" /><br />
<br />
Une fois que vous avez appuyez sur "Appliquer", l'installeur spécifique à l'application se met en route. A moins que vous n'installiez un patch pour une application déjà existante la plupart des installeurs commenceront par une présentation de l'application. Après quoi il créera un répertoire PlayOnLinux pour les fichiers de cette application.<br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-presentation.jpg" /><br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-wineprefix.jpg" /><br />
<br />
Après quoi plusieurs choses peuvent se produire - l'installeur commencera à télécharger, il vous demandera peut-être un fichier set-up ou bien il vous demandera le CD-ROM du jeu suivant ce que le jeu a besoin de faire. Tout ceci dépend de l'application et de ce qui a été scripté pour celle ci. Ci dessous quelques illustrations<br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-download.jpg" /><br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-browse.jpg" /><br />
<br />
A un certain point, Plyonlinux lancera l'installeur natif de l'application. Comme la forme dépend entièrement de l'application il n'y a pas d'exemple et vous devrez naviguez à travers tout ça par vous même. L'important est que le script aura peut être besoin de modifier cette installtion une fois celle-ci terminée, alors veuillez l'installer dans le répertoire par défaut en utilisant les options par défaut à moins qu'il ne vous soit dit de faire autrement. Une fois que l'installeur aura fini, PlayOnLinux vous présentera sa propre fenêtre de raccourcis. Sélectionnez alors les options que vous voulez.<br />
<br />
<img src="<?php echo $url; ?>/doc/images/installer-shortcut.jpg" /><br />
</p>
<h2>Lancer une application</h2>
<p>Ici, PlayOnLinux vous dira que l'installation est finie et vous retournerez à la fenêtre principale. L'installation que vous avez installée aura été ajoutée à la liste. Pour lancer cette application, Sélectionner simplement l'application dans la liste et cliquez sur Lancer. Vous pouvez également choisir de double cliquer,ou de lancer l'application depuis le bureau ou depuis le menu si vous avez choisi d'installer ces raccourcis.
<br />
<img src="<?php echo $url; ?>/doc/images/mainwindow-run.jpg" /><br />
</p>
<h2>Désinstaller une application</h2>
<p>Pour enlever une application, sélectionnez la simplement sur la liste et cliquez sur Supprimer. Notez que bien que l'application, tous ses fichiers et tous ses paramètres de registre auront été supprimés, à l'heure actuelle, PlayOnLinux n'efface pas tous les raccourcis.<br />
<br />
<img src="<?php echo $url; ?>/doc/images/mainwindow-remove.jpg" /></p>
<h2>Actualiser le dépôt</h2>
<p>Si vous ne trouvez pas l'application que vous cherchez, vous devriez rafraîchir la liste des applications en cliquant sur le bouton "Actualiser le dépôt". Vous serez certain d'avoir les derniers scripts à jours.</p>
<h2>FAQ: Si l'installation ne fonctionne toujours pas</h2>
<p>Vu que l'application a son propre script, il est impossible de donner une réponse générique sur l'origine du problème. Essayez de demander sur le chat intégré de PlayOnLinux ou sur le forum où on sera peut-être capable de trouver une solution à votre problème
<h2>FAQ: Le script/AppDB demande un crack/no-cd...</h2>
<p>Vous ne pourrez pas le trouver sur PlayOnLinux, personne ici ne vous aidera à le trouver et Wine AppDB fonctionne de la même manière. Bien que malheureusement certains jeux nécessitent ce procédé pour tourner, il serait mauvais d'entraîner PlayOnLinux ou Wine sur cette pente. Considérez ça un peu comme les dépôts des distib - Vous ne trouverez rien de vilain sur les répertoires par défaut non plus.</p>
<h2>FAQ: L'application que je cherche n'apparaît pas</h2>
<p>Celà peut être à cause de l'une de ces deux raisons - soit l'application ne marche pas bien avec wine (et PlayOnLinux en est un front-end) ou bien personne n'a encore écrit de script pour ce jeu. Dans le premier cas, vous pouvez aller voir la Wine AppDB et si il tourne bien vous pouvez soit l'installer manuellement soit écrire un script d'installation - C'est pas si difficile.</p>
