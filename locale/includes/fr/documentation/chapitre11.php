<h1>Créer un script pour <?php echo $website_name; ?>&nbsp;- Annexe</h1>

<h2>Couleurs des arguments</h2>
<p style="color:#FF0000">Rouge&nbsp;: Argument obligatoire.</p>
<p style="color:#FF8000">Orange&nbsp;: Argument obligatoire si on utilise un des arguments suivants, mais qui peut être laissé vide ("").</p>
<p style="color:#0000FF">Bleu&nbsp;: Argument optionnel, mais dans certains cas obligatoire.</p>
<p style="color:#004000">Vert&nbsp;: Argument optionnel.</p>

<h1>Démarrage et arrêt de l'interface graphique</h1>

<h2 style="color:#000080">POL_GetSetupImages</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF8000">#1&nbsp;: Adresse de l'image top.</p>
<p style="color:#FF8000">#2&nbsp;: Adresse de l'image left.</p>
<p style="color:#FF0000">#3&nbsp;: Nom du dossier dans lequel enregistrer les images (souvent <b>$TITLE</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Permet de télécharger les images top et left du script sur le site de <?php echo $website_name; ?>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Doit être utilisé avant <span style="color:#000080"><b>POL_SetupWindow_Init</b></span>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_GetSetupImages "http://files.playonlinux.com/resources/setups/AC2/top.jpg" "http://files.playonlinux.com/resources/setups/AC2/left.jpg" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_Init</h2>
<h3>Description&nbsp;:</h3>
<p>Ouvre la fenêtre de l'assistant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_Init'); ?>

<h2 style="color:#000080">POL_SetupWindow_Close</h2>
<h3>Description&nbsp;:</h3>
<p>Ferme la fenêtre de l'assistant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_Close'); ?>

<h1>Interface graphique de <?php echo $website_name; ?></h1>
<p>Note&nbsp;: Toutes les fonctions que nous allons voir dès maintenant nécessitent que la commande <span style="color:#000080"><b>POL_SetupWindow_Init</b></span> soit présente au début du script.</p>

<h2 style="color:#000080">POL_SetupWindow_presentation</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du logiciel (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Éditeur du logiciel.</p>
<p style="color:#FF0000">#3&nbsp;: Site de l'éditeur.</p>
<p style="color:#FF0000">#4&nbsp;: Auteur du script.</p>
<p style="color:#FF0000">#5&nbsp;: Nom du préfixe (souvent <b>$PREFIX</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Présente l'application.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_presentation "$TITLE" "Mozilla" "http://www.mozilla.com" "SuperPlumus and NSLW" "$PREFIX"'); ?>

<h2 style="color:#000080">POL_SetupWindow_free_presentation</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du logiciel (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Message.</p>

<h3>Description&nbsp;:</h3>
<p>Permet de faire une présentation plus libre que <b style="color:#000080">POL_SetupWindow_presentation</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_free_presentation "$TITLE" "Bienvenue dans l\'assistant d\'installation de Mozilla Firefox."'); ?>

<h2 style="color:#000080">POL_SetupWindow_message</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Affiche un message.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_message "Hello world!" "$TITLE"'); ?>

<h2 style="color:#000080">check_one</h2>
<h2 style="color:#000080">POL_SetupWindow_missing</h2>
<h3>Arguments pour check_one:</h3>
<p style="color:#FF0000">#1&nbsp;: Commande dont la présence doit être vérifiée.</p>
<p style="color:#FF0000">#2&nbsp;: Paquet dans lequel se trouve ce programme.</p>

<h3>Description&nbsp;:</h3>
<p>Vérifie la présence de une ou plusieurs commandes particulières requises par le script.</p>
<p>Exécutez autant de <b style="color:#000080">check_one</b> que besoin (1 par commande), puis appelez <b style="color:#000080">POL_SetupWindow_missing</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('check_one "p7zip" "p7zip"
POL_SetupWindow_missing'); ?>

<h2 style="color:#000080">POL_SetupWindow_file</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#3&nbsp;: Fichier à afficher.</p>

<h3>Description&nbsp;:</h3>
<p>Affiche le contenu d'un fichier.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_file "Changelog" "$TITLE" "$POL_System_TmpDir/changelog.txt"'); ?>

<h2 style="color:#000080">POL_SetupWindow_licence</h2>
<h3>Arguments:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#3&nbsp;: Fichier à afficher.</p>

<h3>Description&nbsp;:</h3>
<p>Identique à la commande <b style="color:#000080">POL_SetupWindow_file</b>, excepté qu'une case "J'accepte" est présente.</p>
<p>Très utile pour les licences.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_licence "Licence :" "$TITLE" "$POL_System_TmpDir/licence.txt"'); ?>

<h2 style="color:#000080">POL_SetupWindow_pulsebar</h2>
<h2 style="color:#000080">POL_SetupWindow_pulse</h2>
<h2 style="color:#000080">POL_SetupWindow_set_text</h2>

<h3>Arguments pour POL_SetupWindow_pulsebar&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>

<h3>Arguments pour POL_SetupWindow_pulse&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Pourcentage.</p>

<h3>Arguments pour POL_SetupWindow_set_text&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Texte actuel.</p>

<h3>Description&nbsp;:</h3>
<p>Affiche une barre de progression, de 0 à 100%.</p>
<p><b style="color:#000080">POL_SetupWindow_pulsebar</b> affiche la barre de progression.</p>
<p><b style="color:#000080">POL_SetupWindow_pulse</b> change le niveau d'avancement de la barre, de 0 à 100%.</p>
<p><b style="color:#000080">POL_SetupWindow_set_text</b> change le message actuel (différent du message de <b style="color:#000080">POL_SetupWindow_pulsebar</b>).</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_pulsebar "Installation des patchs 1 à 5." "$TITLE"

POL_SetupWindow_set_text "Installation du patch 1 en cours"
POL_Wine start /unix "$POL_System_TmpDir/patch1.exe"
POL_SetupWindow_pulse "20" # pour 20%

POL_SetupWindow_set_text "Installation du patch 2 en cours"
POL_Wine start /unix "$POL_System_TmpDir/patch2.exe"
POL_SetupWindow_pulse "40"

POL_SetupWindow_set_text "Installation du patch 3 en cours"
POL_Wine start /unix "$POL_System_TmpDir/patch3.exe"
POL_SetupWindow_pulse "60"

POL_SetupWindow_set_text "Installation du patch 4 en cours"
POL_Wine start /unix "$POL_System_TmpDir/patch4.exe"
POL_SetupWindow_pulse "80"

POL_SetupWindow_set_text "Installation du patch 5 en cours"
POL_Wine start /unix "$POL_System_TmpDir/patch5.exe"
POL_SetupWindow_pulse "100"'); ?>

<h2 style="color:#000080">POL_SetupWindow_wait</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Affiche une barre qui fait des allers-retours.</p>
<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_wait "Veuillez patienter" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_textbox</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#004000">#3&nbsp;: Valeur par défaut.</p>

<h3>Description&nbsp;:</h3>
<p>Affiche une fenêtre demandant à l'utilisateur d'inscrire quelque chose.</p>

<h3>Retour&nbsp;:</h3>
<p>La saisie de l'utilisateur est renvoyée dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_textbox "Votre pseudo :" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_textbox_multiline</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#004000">#3&nbsp;: Valeur par défaut.</p>

<h3>Description&nbsp;:</h3>
<p>Identique à <b style="color:#000080">POL_SetupWindow_textbox</b>, excepté que la saisie se fait sur plusieurs lignes.</p>

<h3>Retour&nbsp;:</h3>
<p>La saisie de l'utilisateur est renvoyée dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_textbox_multiline "Entrez la description du logiciel" "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_browse</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#004000">#3&nbsp;: Fichier par défaut.</p>

<h3>Description&nbsp;:</h3>
<p>Demande à l'utilisateur de sélectionner un fichier.</p>

<h3>Retour&nbsp;:</h3>
<p>Le chemin vers le fichier sélectionné par l'utilisateur est renvoyé dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_browse "Veuillez sélectionner le logiciel." "$TITLE"'); ?>

<h2 style="color:#000080">POL_SetupWindow_question</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Pose une question à l'utilisateur (il peut répondre par Oui ou par Non).</p>

<h3>Retour&nbsp;:</h3>
<p>La réponse de l'utilisateur est renvoyée dans la variable <b>$APP_ANSWER</b> (<b>TRUE</b> si oui, <b>FALSE</b> si non).</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_question "Message" "Titre"'); ?>

<h2 style="color:#000080">POL_SetupWindow_menu</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Choix possibles.</p>
<p style="color:#FF0000">#2&nbsp;: Séparateur (souvent <b>~</b> ou <b>-</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Montre un menu à l'utilisateur, et lui demande de choisir parmi les choix proposés.</p>

<h3>Retour&nbsp;:</h3>
<p>Le choix de l'utilisateur est renvoyé dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu "Quel est votre couleur préférée ?" "$TITLE" "Rouge~Vert~Bleu" "~"'); ?>

<h2 style="color:#000080">POL_SetupWindow_menu_num</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Choix possibles.</p>
<p style="color:#FF0000">#2&nbsp;: Séparateur (souvent <b>~</b> ou <b>-</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Identique à la fonction <b style="color:#000080">POL_SetupWindow_menu</b> excepté que au lieu de renvoyer le nom de l'entrée sélectionnée (Rouge, par exemple), elle renvoie un nombre selon qu'il s'agit de la 1<sup>ère</sup> entrée, 2<sup>ème</sup> entrée, etc. 0 correspond à la 1<sup>ère</sup> entrée.</p>

<h3>Retour&nbsp;:</h3>
<p>Le choix de l'utilisateur est renvoyé dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu_num "Quel est votre couleur préférée ?" "$TITLE" "Rouge~Vert~Bleu" "~"'); ?>

<h2 style="color:#000080">POL_SetupWindow_menu_list</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Choix possibles.</p>
<p style="color:#FF0000">#2&nbsp;: Séparateur (souvent <b>~</b> ou <b>-</b>).</p>
<p style="color:#004000">#3&nbsp;: Entrée par défaut.</p>

<h3>Description&nbsp;:</h3>
<p>Identique à la fonction <b style="color:#000080">POL_SetupWindow_menu</b> excepté qu'il s'agit d'un menu déroulant.</p>

<h3>Retour&nbsp;:</h3>
<p>Le choix de l'utilisateur est renvoyé dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_menu_list "Quel est votre couleur préférée ?" "$TITLE" "Rouge~Vert~Bleu" "~"'); ?>

<h2 style="color:#000080">POL_SetupWindow_checkbox_list</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>
<p style="color:#FF0000">#2&nbsp;: Titre (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Choix possibles.</p>
<p style="color:#FF0000">#2&nbsp;: Séparateur (souvent <b>~</b> ou <b>-</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Montre une liste de cases à cocher à l'utilisateur, et lui demande de cocher les options voulues.</p>

<h3>Retour&nbsp;:</h3>
<p>Les choix de l'utilisateur sont renvoyés dans la variable <b>$APP_ANSWER</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_checkbox_list "Quels sont vos couleurs préférées ?" "$TITLE" "Rouge~Vert~Bleu" "~"
if [ "$(echo $APP_ANSWER | grep -o "Rouge")" != "" ]
then
	# Rouge coché
fi
if [ "$(echo $APP_ANSWER | grep -o "Vert")" != "" ]
then
	# Vert coché
fi
if [ "$(echo $APP_ANSWER | grep -o "Bleu")" != "" ]
then
	# Bleu coché
fi'); ?>

<h2 style="color:#000080">POL_SetupWindow_cdrom</h2>
<h3>Description&nbsp;:</h3>
<p>Demande à l'utilisateur de sélectionner son CD/DVD.</p>

<h3>Retour&nbsp;:</h3>
<p>Le choix de l'utilisateur est renvoyé dans la variable <b>$CDROM</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_cdrom'); ?>

<h2 style="color:#000080">POL_SetupWindow_check_cdrom</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Fichier dont la présence doit être vérifiée.</p>

<h3>Description&nbsp;:</h3>
<p>Vérifie que le fichier passé en argument existe bien sur le CD/DVD. Dans le cas contraire, exécute <b style="color:#000080">POL_SetupWindow_cdrom</b> à nouveau.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Doit être utilisé juste après <b style="color:#000080">POL_SetupWindow_cdrom</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_check_cdrom "Data/32_icon.ico"'); ?>

<h2 style="color:#000080">POL_SetupWindow_InstallMethod</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Modes d'installation disponibles.</p>

<h3>Description&nbsp;:</h3>
<p>Demande à l'utilisateur de choisir la méthode d'installation qu'il veut utiliser parmi les choix proposés.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p><b>LOCAL</b>, <b>CD</b>, <b>DVD</b>, <b>DOWNLOAD</b>, <b>STEAM</b>, <b>STEAM_DEMO</b>.</p>

<h3>Retour&nbsp;:</h3>
<p>Le choix de l'utilisateur est renvoyé dans la variable <b>$INSTALL_METHOD</b>.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_InstallMethod "LOCAL,CD,STEAM"'); ?>

<h2 style="color:#000080">POL_Shortcut</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom de l'exécutable.</p>
<p style="color:#FF0000">#2&nbsp;: Nom du logiciel (souvent <b>$TITLE</b>).</p>
<p style="color:#FF8000">#3&nbsp;: Nom de l'icône à télécharger sur le site de <?php echo $website_name; ?>.</p>
<p style="color:#004000">#4&nbsp;: Arguments pour le .exe.</p>

<h3>Description&nbsp;:</h3>
<p>Crée un lanceur dans <?php echo $website_name; ?>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>La commande <span style="color:#000080"><b>POL_Wine_SelectPrefix</b></span> doit être éxécutée avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Shortcut "firefox.exe" "$TITLE"'); ?>

<h2 style="color:#000080">POL_Shortcut_InsertBeforeWine</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du lanceur (souvent <b>$TITLE</b>).</p>
<p style="color:#FF0000">#2&nbsp;: Commande à ajouter.</p>

<h3>Description&nbsp;:</h3>
<p>Permet d'exécuter une commande juste avant chaque lancement du logiciel.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Shortcut_InsertBeforeWine "Jedi Knight II" "export __GL_ExtensionStringVersion=17700"'); ?>

<h2 style="color:#000080">POL_Browser</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Adresse de la page à ouvrir.</p>

<h3>Description&nbsp;:</h3>
<p>Ouvre une page web sur le navigateur par défaut de l'utilisateur.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Browser "http://www.playonlinux.com"'); ?>

<h2 style="color:#000080">POL_System_TmpCreate</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du dossier temporaire (souvent <b>$PREFIX</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Crée le dossier temporaire du script.</p>

<h3>Retour&nbsp;:</h3>
<p><b>$POL_System_TmpDir</b> contient le chemin vers le dossier temporaire.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_System_TmpCreate "$PREFIX"'); ?>

<h2 style="color:#000080">POL_System_TmpDelete</h2>
<h3>Description&nbsp;:</h3>
<p>Supprime le dossier temporaire du script.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_System_TmpDelete'); ?>

<h2 style="color:#000080">POL_System_SetArch</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Architectures supportées (voir ci-dessous).</p>

<h3>Description&nbsp;:</h3>
<p>Définit quels sont les architectures supportées par le script (concernant Wine).</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p><b>auto</b>&nbsp;: La version de Wine correspondant à l'architecture du système sera utilisée (Wine x86 pour x86 et Wine x64 pour amd64)</p>
<p><b>x86</b>&nbsp;: Force l'installation avec la version x86 de Wine (en cas de bugs avec la version x64 de Wine concernant un programme)</p>
<p><b>amd64</b>&nbsp;: Force l'installation avec la version x64 de Wine (si le système est en x86, alors le script s'arrète).</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_System_SetArch "auto"'); ?>

<h2 style="color:#000080">POL_Call</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom de la fonction.</p>
<p style="color:#0000FF">#2, #3, etc.&nbsp;: Arguments pour la fonction, si besoin (très peu de fonctions prennent des arguments).</p>

<h3>Description&nbsp;:</h3>
<p>Permet d'exécuter un script de la catégorie functions (<a href="http://www.playonlinux.com/repository/?cat=100">liste ici</a>).</p>

<h3>Prérequis&nbsp;:</h3>
<p>Pour la plupart des fonctions appelées, les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Call POL_Install_vcrun6'); ?>

<h1>Fonctions pour Wine</h1>

<h2 style="color:#000080">POL_Wine_SelectPrefix</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du préfixe (souvent <b>$PREFIX</b>).</p>

<h3>Description&nbsp;:</h3>
<p>Sélectionne le préfixe qui sera utilisé par Wine (obligatoire, même si le préfixe n'existe pas encore).</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_SelectPrefix "$PREFIX"'); ?>

<h2 style="color:#000080">POL_Wine_PrefixExists</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du préfixe (souvent <b>$PREFIX</b>.</p>

<h3>Description&nbsp;:</h3>
<p>Vérifie si le préfixe existe (utile pour les extensions de jeux et les patchs).</p>

<h3>Retour&nbsp;:</h3>
<p>La fonction affiche <b>True</b> si le préfixe existe, <b>False</b> si il n'existe pas.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('if [ "$(POL_Wine_PrefixExists "$PREFIX")" = "False" ]
then
	# Le préfixe n\'existe pas
fi
'); ?>

<h2 style="color:#000080">POL_Wine_PrefixCreate</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#004000">#1&nbsp;: Version de Wine.</p>

<h3>Description&nbsp;:</h3>
<p>Crée le préfixe ou le met à jour. Il est possible d'utiliser une autre version de Wine que celle installée chez l'utilisateur, en la précisant dans le 1<sup>er</sup> argument.</p>

<h3>Prérequis&nbsp;:</h3>
<p>La commande <span style="color:#000080"><b>POL_Wine_SelectPrefix</b></span> doit être éxécutée avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_PrefixCreate "1.3.4"'); ?>

<h2 style="color:#000080">POL_Wine</h2>
<h3>Description&nbsp;:</h3>
<p>Cette fonction s'utilise de la même manière que la commande wine, mais permet d'utiliser le système de gestion des versions de Wine de <?php echo $website_name; ?>.</p>
<p>Note&nbsp;: l'utilisation de <b>start /unix</b> permet parfois d'éviter certains problèmes de chemins d'accès et d'installation avec plusieurs CD/DVD.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemples&nbsp;:</h3>
<?php echo script('POL_Wine "Setup.exe"
POL_Wine start /unix "Setup.exe"'); ?>

<h2 style="color:#000080">POL_SetupWindow_VMS</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Minimum de mémoire nécessaire.</p>

<h3>Description&nbsp;:</h3>
<p>Demande à l'utilisateur de saisir la quantité de mémoire de sa carte graphique.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_SetupWindow_VMS "128"'); ?>

<h2 style="color:#000080">Set_OS</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Version de Windows à simuler.</p>
<p style="color:#004000">#2&nbsp;: Service pack.</p>

<h3>Description&nbsp;:</h3>
<p>Change la version de Windows simulée par Wine.</p>
<p>Valeur par défaut&nbsp;: <b>winxp</b> (Windows XP).</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Versions de Windows&nbsp;: <b>win7</b>, <b>vista</b>, <b>win2003</b>, <b>winxp</b>, <b>win2k</b>, <b>winnt</b>, <b>winme</b>, <b>nt40</b>, <b>win98</b>, <b>win95</b>, <b>win31</b>.</p>
<p>Services packs: <b>sp1</b>, <b>sp2</b>, <b>sp3</b>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('Set_OS "win2k"'); ?>

<h2 style="color:#000080">Set_Managed</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: <b>On</b>/<b>Off</b>.</p>

<h3>Description&nbsp;:</h3>
<p>Définit si le gestionnaire de fenêtres a le droit de gérer les fenêtres de Wine.</p>
<p>Valeur par défaut&nbsp;: <b>On</b>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('Set_Managed "Off"'); ?>

<h2 style="color:#000080">Set_SoundDriver</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: <b>alsa</b>/<b>oss</b>/<b>esd</b>.</p>

<h3>Description&nbsp;:</h3>
<p>Définit quel pilote audio est utilisé par Wine.</p>
<p>Note&nbsp;: Cette fonction est désactivée sous PlayOnMac, car elle est inutile (si cette fonction est présente dans un script exécuté sous PlayOnMac, elle sera simplement ignorée).

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('Set_SoundDriver "alsa"'); ?>

<h2 style="color:#000080">POL_Wine_Direct3D</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Valeur à modifier.</p>
<p style="color:#FF0000">#2&nbsp;: Contenu de la valeur.</p>

<h3>Description&nbsp;:</h3>
<p>Permet de créer/modifier une valeur dans la clé <b>[HKEY_CURRENT_USER\Software\Wine\Direct3D]</b>.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Voir le <a href="http://wiki.winehq.org/UsefulRegistryKeys">wiki de WineHQ</a>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_Direct3D "UseGLSL" "disabled"'); ?>

<h2 style="color:#000080">POL_Wine_X11Drv</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Valeur à modifier.</p>
<p style="color:#FF0000">#2&nbsp;: Contenu de la valeur.</p>

<h3>Description&nbsp;:</h3>
<p>Permet de créer/modifier une valeur dans la clé <b>[HKEY_CURRENT_USER\Software\Wine\X11 Driver]</b>.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Voir le <a href="http://wiki.winehq.org/UsefulRegistryKeys">wiki de WineHQ</a>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_X11Drv "DXGrab" "Y"'); ?>

<h2 style="color:#000080">POL_Wine_DirectSound</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Valeur à modifier.</p>
<p style="color:#FF0000">#2&nbsp;: Contenu de la valeur.</p>

<h3>Description&nbsp;:</h3>
<p>Permet de créer/modifier une valeur dans la clé <b>[HKEY_CURRENT_USER\Software\Wine\DirectSound]</b>.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Voir le <a href="http://wiki.winehq.org/UsefulRegistryKeys">wiki de WineHQ</a>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_DirectSound "HardwareAcceleration" "Emulation"'); ?>

<h2 style="color:#000080">POL_Wine_DirectInput</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Valeur à modifier.</p>
<p style="color:#FF0000">#2&nbsp;: Contenu de la valeur.</p>

<h3>Description&nbsp;:</h3>
<p>Permet de créer/modifier une valeur dans la clé <b>[HKEY_CURRENT_USER\Software\Wine\DirectInput]</b>.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Voir le <a href="http://wiki.winehq.org/UsefulRegistryKeys">wiki de WineHQ</a>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_DirectInput "MouseWarpOverride" "force"'); ?>

<h2 style="color:#000080">POL_Wine_GetRegValue</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Valeur à récupérer (sans la clé).</p>

<h3>Description&nbsp;:</h3>
<p>Cette fonction permet de récupérer le contenu d'une valeur du registre.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Retour&nbsp;:</h3>
<p>La fonction affiche le contenu de la valeur spécifiée.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('VALUE="$(POL_Wine_GetRegValue "MouseWarpOverride")"'); ?>

<h2 style="color:#000080">Set_Desktop</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: <b>On</b>/<b>Off</b>.</p>
<p style="color:#0000FF">#2&nbsp;: Largeur du bureau virtuel (si activé).</p>
<p style="color:#0000FF">#3&nbsp;: Hauteur du bureau virtuel (si activé).</p>

<h3>Description&nbsp;:</h3>
<p>Cette fonction permet de définir le bureau virtuel de Wine.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('Set_Desktop "On" "1024" "768"'); ?>

<h2 style="color:#000080">Set_WineWindowTitle</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Nom du bureau virtuel.</p>

<h3>Description&nbsp;:</h3>
<p>Définit le nom du bureau virtuel (effet uniquement esthétique).</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('Set_WineWindowTitle "$TITLE"'); ?>

<h2 style="color:#000080">POL_Wine_InstallFonts</h2>
<h3>Description&nbsp;:</h3>
<p>Cette fonction permet d'installer certaines polices d'écritures manquantes dans le préfixe.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_InstallFonts'); ?>

<h2 style="color:#000080">POL_Wine_SetVideoDriver</h2>
<h3>Description&nbsp;:</h3>
<p>Cette fonction permet de définir correctement le pilote video (parfois mal défini par Wine).</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_SetVideoDriver'); ?>

<h2 style="color:#000080">POL_Wine_OverrideDLL</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Type d'override.</p>
<p style="color:#004000">#2, #3, #4, etc.&nbsp;: Noms des DLL (sans le .dll).</p>

<h3>Description&nbsp;:</h3>
<p>Effectue une override sur une ou plusieurs DLL.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Pour #1&nbsp;: <b>native</b>, <b>builtin</b>, <b>native,builtin</b>, <b>builtin,native</b>. Pour désactiver la DLL, ne rien mettre dans #1 (<b>""</b>).</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemples&nbsp;:</h3>
<?php echo script('POL_Wine_OverrideDLL "native" "msvcrt"
POL_Wine_OverrideDLL "" "msvcrt" # Pour désactiver la DLL'); ?>

<h2 style="color:#000080">POL_Wine_OverrideDLL_App</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Application.</p>
<p style="color:#FF0000">#2&nbsp;: Type d'override.</p>
<p style="color:#004000">#3, #4, #5, etc.&nbsp;: Noms des DLL (sans le .dll).</p>

<h3>Description&nbsp;:</h3>
<p>Effectue une override sur une ou plusieurs DLL, mais qui ne concerne qu'une seule application.</p>

<h3>Valeurs possibles&nbsp;:</h3>
<p>Pour #2&nbsp;: <b>native</b>, <b>builtin</b>, <b>native,builtin</b>, <b>builtin,native</b>. Pour désactiver la DLL, ne rien mettre dans #2 (<b>""</b>).</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemples&nbsp;:</h3>
<?php echo script('POL_Wine_OverrideDLL_App "firefox.exe" "native" "msvcrt"
POL_Wine_OverrideDLL_App "firefox.exe" "" "msvcrt" # Pour désactiver la DLL'); ?>

<h2 style="color:#000080">POL_Wine_WaitExit</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#004000">#1&nbsp;: Nom de l'application.</p>

<h3>Description&nbsp;:</h3>
<p>Permet d'attendre la fin du logiciel lancé avec la commande <b style="color:#000080">POL_Wine</b>.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_WaitExit "$TITLE"'); ?>

<h2 style="color:#000080">POL_Wine_reboot</h2>
<h3>Description&nbsp;:</h3>
<p>Simule un redémarrage de Windows.</p>

<h3>Prérequis&nbsp;:</h3>
<p>Les commandes <b style="color:#000080">POL_Wine_SelectPrefix</b> et <b style="color:#000080">POL_Wine_PrefixCreate</b> doivent êtres exécutées avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Wine_reboot'); ?>

<h1>Fonctions de déboguage</h1>

<h2 style="color:#000080">POL_Debug_Init</h2>
<h3>Description&nbsp;:</h3>
<p>Démarre le système de débogage.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Debug_Init'); ?>

<h2 style="color:#000080">POL_Debug_Message</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>

<h3>Description&nbsp;:</h3>
<p>Affiche un message dans le log de l'installation (invisible pour l'utilisateur).</p>

<h3>Prérequis&nbsp;:</h3>
<p>La commande <b style="color:#000080">POL_Debug_Init</b> doit être utilisée avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Debug_Message "Modification du fichier config.cfg."'); ?>

<h2 style="color:#000080">POL_Debug_Warning</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>

<h3>Description&nbsp;:</h3>
<p>Affiche un warning dans le log de l'installation (invisible pour l'utilisateur).</p>

<h3>Prérequis&nbsp;:</h3>
<p>La commande <b style="color:#000080">POL_Debug_Init</b> doit être utilisée avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Debug_Warning "Le fichier config.cfg n\'existait pas, il vient d\'être créé."'); ?>

<h2 style="color:#000080">POL_Debug_Error</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>

<h3>Description&nbsp;:</h3>
<p>Affiche une erreur dans le log de l'installation (l'utilisateur est avertit qu'une erreur s'est produite, mais le script continue).</p>

<h3>Prérequis&nbsp;:</h3>
<p>La commande <b style="color:#000080">POL_Debug_Init</b> doit être utilisée avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Debug_Error "Erreur lors de la modification du fichier config.cfg"'); ?>

<h2 style="color:#000080">POL_Debug_Fatal</h2>
<h3>Arguments&nbsp;:</h3>
<p style="color:#FF0000">#1&nbsp;: Message.</p>

<h3>Description&nbsp;:</h3>
<p>Déclare une erreur fatale (le script est arrêté immédiatement).</p>

<h3>Prérequis&nbsp;:</h3>
<p>La commande <b style="color:#000080">POL_Debug_Init</b> doit être utilisée avant.</p>

<h3>Exemple&nbsp;:</h3>
<?php echo script('POL_Debug_Fatal "Erreur lors de la modification du fichier config.cfg"'); ?>

