<style>
div.codeconsole
{
	margin-left:50px;
}
</style>
<h1>Documentation des fonctions accessibles dans les scripts de PlayOnLinux.</h1>
<h2 id="Preambule">Préambule</h2>
<p>Les fonctions présentées ci-dessous sont utilisables dans les scripts prévus pour être utilisées dans PlayOnLinux. Les paramètres écrits en vert sont obligatoires, les autres facultatifs.
<br>Pour passer un paramètre à une fonction l'ordre doit être respecté, par exemple la fonction "exemple" reçoit 3 paramètres le premier et le dernier sont obligatoires, le deuxième facultatif. L'appel devra être au moins comme ceci :<br>
exemple "<span style="color: green;">paramètre obligatoire 1</span>" "" "<span style="color: green;">paramètre obligatoire 2</span>"<br>
ou<br>
exemple "<span style="color: green;">paramètre obligatoire 1</span>" "paramètre facultatif 1" "<span style="color: green;">paramètre obligatoire 2</span>"<br>
<br><br>
Ne sont présentées dans cette documentation que les fonctions utiles lors de la création de script, PlayOnLinux utilise d'autres fonctions qui ne sont pas présentées ici.
<br><br>
<span style="color: red;"><b>L'utilisation des commandes su, sudo, gksu, kdesu ... (toutes les commandes qui changent les privilèges de l'utilisateur) sont strictement interdites dans tous les scripts de PlayOnLinux (ainsi que dans le logiciel)</b></span>
<br><br>
</p>
<h2 id="creer_lanceur">creer_lanceur</h2>
<p>
La fonction creer_lanceur permet de créer un lanceur accessible dans le menu PlayOnLinux, sur le bureau, ou dans le gestionnaire de fenêtre.
</p>
<table>
<thead class="grisclair">
<tr>
	<td>Paramètre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">WinePrefix</span></td>
	<td>Définit dans quel préfixe le logiciel est installé</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td><span style="color: green;">Repertoire</span></td>
	<td>Définit dans quel dossier ou sous-dossier du préfixe le logiciel est installé.</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td><span style="color: green;">Binaire</span></td>
	<td>Définit le nom de l'exécutable devant être lancé.</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td>Icone</td>
	<td>Nom de l'icône devant être affichée lors de la création du raccourci. <br>Les formats acceptés sont png et xpm.<br>Les fichiers doivent être situés sur le site de PlayOnLinux.
	<br><i>Contacter les administrateurs pour de plus amples informations</i></td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td>Nom de l'icone</td>
	<td>Définit le nom qui sera donné au lanceur, par défaut le nom du préfixe est utilisé.</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td>Rien</td>
	<td>Ce paramètre n'est pas utilisé, il s'agit d'une compatibilité avec les versions &lt; 2.0 </td>
	<td>Rien</td>
</tr>
<tr>
	<td>Eventuel argument</td>
	<td>Paramètre éventuel à passer au programme lors du lancement</td>
	<td>Chaîne de caractères</td>
</tr>
</table>
<div class="codeconsole"><code> creer_lanceur "My Big Game" "Program Files/The_MulXGame/" "YetAnotherGame.exe"</code></div>
<p>
<img src="<?php echo $url; ?>/doc/images/creer_lanceur_1.png" alt="Image d'exemple de création de lanceur"><br><br>
<img src="<?php echo $url; ?>/doc/images/creer_lanceur_2.png" alt="Image d'exemple de création de lanceur"></p>
<h2 id="message">message</h2>
<p>Cette fonction affiche un message à l'intention de l'utilisateur du script.<br></p>
<table>
<thead class="grisclair">
<tr>
	<td>Paramètre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Le corps du message</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td>Titre</td>
	<td>Titre de la fenàtre affichant le message</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Numéro de l'étape en cours</td>
	<td>Entier non signé</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'étapes du script</td>
	<td>Entier non signé</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>Définit la visibilité du bouton annulé.<br>1 = Visible ; 0 = Non visible</td>
	<td>Booléen</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image à afficher dans la fenêtre</td>
	<td>Chaîne de caractères</td>
</tr>
<tr>
	<td>BoutonSuivant</td>
	<td>Définit le texte du bouton suivant</td>
	<td>Chaîne de caractères</td>
</tr>
</table>
<div class="codeconsole"><code>message "Everybody need, needed or will need a drawing to get the message to be understood."</code></div>
<p><img src="<?php echo $url; ?>/doc/images/messageBox.png" alt="Image d'exemple de la fenêtre message"></p>
<br>
<h2 id="erreur">erreur</h2>
<p>La fonction erreur a un comportement identique à la fonction message.<br>
<div class="codeconsole"><code> erreur "Those who are never wrong never try."</code></div>
<P>
<img src="<?php echo $url; ?>/doc/images/erreurBox.png" alt="Image d'exemple de la fenêtre d'erreur"></p> 
<h2 id="attention">attention</h2>
<p>La fonction attention a un comportement identique à la fonction message.<br>
</p><div class="codeconsole"><code> attention "The greater danger in times of turbulence is not the turbulence. It's acting with yesterday's logic."</code></div>
<p><img src="<?php echo $url; ?>/doc/images/attentionBox.png" alt="Image d'exemple de la fenêtre attention"></p>
<h2 id="question">question</h2>
<p>Pose une question � l'utilisateur.<br>
La r�ponse est renvoy�e comme un bool�en. '1' signifie que l'utilisateur a r�pondu "Non" et '0' que l'utilisateur a r�pondu "Oui"</P>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">message</span></td>
	<td>La question � afficher</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>titreFenetre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Booleen</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<br>
<div class="codeconsole"><code>question "Do you know the Answer to the Ultimate Question of Life, the Universe and Everything ?" "Don't Panic, It's just a question ! "</code></div>
<p><img src="<?php echo $url; ?>/doc/images/questionBox.png" alt="Image d'exemple d'une question">
</p>
<h2 id="champ">champ</h2>
<p>La commande champ permet � l'utilisateur de remplir un champ. La saisie de l'utilisateur est retourn�e tel quel si il clique sur suivant, sinon rien n'est retourn�.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">message</span></td>
	<td>Le texte justifiant la saisie de l'utilisateur (g�n�ralement une question)</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>D�faut</td>
	<td>Valeur par d�faut du champ</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Bool�en</td>
</tr>
<tr>
	<td>titreFenetre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<div class="codeconsole"><code>champ "WHAT DO YOU GET IF YOU MULTIPLY SIX BY NINE?" "42" "" "" "" "Arthur's Scrabble tiles"</code></div>
<p>
<img src="<?php echo $url; ?>/doc/images/champ.png" alt="Image d'exemple de la fen�tre champ">
<br></p>
<h2 id="menu">menu</h2>
<p>Cette fonction affiche un menu � l'utilisateur. Le choix de l'utilisateur est renvoy�, si aucun choix n'est effectu� rien n'est retourn�.</p>

<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>texte du message</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td><span style="color: green;">Items</span></td>
	<td>�l�ments du menu</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Titre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Bool�en</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>S�parateur</td>
	<td>D�finit sur quel caract�re les �l�ments du menu seront s�par�s</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Suivant</td>
	<td>Texte du bouton suivant</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Type de retour</td>
	<td>[ 1 = Par ID, 0 = Par Nom ] D�faut = 0</td>
	<td>Bool�en</td>
</tr>
</table>
<div class="codeconsole"><code>menu "Choose between oven, and the mill ! " "oven mill" "" "" "" "" "wizard.png"</code></div>
<p><img alt="Image d'exemple de la fonction menu" hspace="20px"></P>
<h2 id="menu_list">menu_list</h2>
<p><i><span style="color: orange;">Cette fonction est connue sous le nom de menu dans les versions &lt; 2.1.0</span><br>
</i></p>
<p>Cette fonction propose une liste de choix � l'utilisateur. Une fois le choix de l'utilisateur fait, la valeur choisie est retourn�e.
<br>Si aucune valeur n'a �t� choisie la fonction ne retourne rien.</P>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Texte du message</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td><span style="color: green;">Items</span></td>
	<td>�l�ment du menu.</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Titre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�fini la visibilit� du bouton annul�, par d�faut le bouton n'est pas activ�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Bool�en</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>S�parateur</td>
	<td>D�finit sur quel caract�re les �l�ments du menu seront s�par�s</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Suivant</td>
	<td>D�finit le texte du bouton suivant</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<div class="codeconsole"><code> menu_list "You must do a choice from this list" "First choice~Second choice" "This is the fabulous title :)" "" "" "" "" "~"</code></div>
<p><img src="<?php echo $url; ?>/doc/images/menu_list.png" alt="Image d'exemple de la fonction menu_list"></p>
<h2 id="attendre">attendre</h2>
<p>Cette fonction affiche une boite de dialogue indiquant � l'utilisateur qu'il doit attendre le temps que la commande lanc�e soit termin�e</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message devant �tre affich� � l'utilisateur.</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td><span style="color: green;">Commande</span></td>
	<td>Commande devant �tre ex�cut�e par le syst�me.<BR><span style="color: orange;"><B>Attention � ne pas utiliser des commandes propres � une distribution.<BR>Il ne s'agit pas d'une commande interne � PlayOnLinux.</B></span></td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Titre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�, par d�faut le bouton est activ�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Booleen</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>autoExit</td>
	<td>D�termine si la fen�tre doit �tre ferm�e automatiquement une fois que la commande est termin�e.
	<br>1 = la fen�tre sera ferm�e automatiquement, 0 = la fen�tre ne sera pas ferm�e.</td>
	<td>Bool�en</td>
</tr>
<tr>
	<td>exitMessage</td>
	<td>Message devant �tre affich� une fois que la commande est termin�e
	<br>Ceci remplace le message d�fini par le premier param�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Suivant</td>
	<td>D�finit le texte du bouton suivant</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<div class="codeconsole"><code> attendre "Wait 10s and you can know the answer" "sleep 10s" "Don't panic ! " "" "" "0" "" "" "So the answer ? It's 42 for what ;-)<br>
But do you know the real question ?" "Yet H2G2"</code></div>
<P><img src="<?php echo $url; ?>/doc/images/attendre_1.png" alt="Le message pendant l'ex�cution de la commande">
<br><br>
<img src="<?php echo $url; ?>/doc/images/attendre_2.png" alt="Le message apr�s l'ex�cution de la commande">
</P>
<h2 id="telecharger">telecharger</h2>
<p>Cette fonction t�l�charge depuis internet un fichier, et l'enregistre dans le r�p�rtoire o� la fonction a �t� execut�e.</P>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message devant �tre affich� � l'utilisateur.</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td><span style="color: green;">Fichier</span></td>
	<td>Adresse du fichier � t�l�charger, de la forme http://www.exemple.com/fichier.txt</td>
	<td>Cha�ne de caract�res, URL</td>
</TR>
<tr>
	<td>Titre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�, par d�faut le bouton est activ�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Booleen</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>autoExit</td>
	<td>D�termine si la fen�tre doit �tre ferm�e automatiquement une fois que la commande est termin�e.
	<br>1 = la fen�tre sera ferm�e automatiquement, 0 = la fen�tre ne sera pas ferm�e.</td>
	<td>Bool�en</td>
</tr>
<tr>
	<td>autoDl</td>
	<td>Lance le t�l�chargement automatiquement
	<br>1 = le t�l�chargement d�marre automatiquement, 0 = le t�l�chargement ne d�marre pas automatiquement.</td>
	<td>Bool�en</td>
</TR>
</table>
<div class="codeconsole"><code> telecharger "Downloading Wine for Windows System (Strange is'nt it ? ) " "http://heanet.dl.sourceforge.net/sourceforge/wine/wine-dlls-0.9.14.zip" "" "" "" "0"</code></div>
<P>
<img src="<?php echo $url; ?>/doc/images/telecharger_1.png" alt="Exemple de t�l�chargement de fichier">
<br><br>
<img src="<?php echo $url; ?>/doc/images/telecharger_2.png" alt="Exemple de t�l�chargement de fichier">
<br><br>
<img src="<?php echo $url; ?>/doc/images/telecharger_3.png" alt="Exemple de t�l�chargement de fichier">
</P>
<h2 id="selectionner_fichier">selectionner_fichier</h2>
<p>La fonction selectionner_fichier permet de s�lectionner un fichier. Le chemin d'acc�s absolu est retourn� comme �tant une cha�ne de caract�res.
</P>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Message</span></td>
	<td>Message devant �tre affich� � l'utilisateur.</td>
	<td>Cha�ne de caract�res</td>
</TR>
<tr>
	<td>Defaut</td>
	<td>Valeur du chemin par d�faut</td>
	<td>Cha�ne de caract�res, chemin d'acc�s</td>
</TR>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�, par d�faut le bouton est activ�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Booleen</td>
</tr>
<tr>
	<td>Titre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<div class="codeconsole"><code>selectionner_fichier "Where is Dave ? " "/dev/null"</code></div>
<p><img src="<?php echo $url; ?>/doc/images/selectionner_fichier.png" alt="Image d'exemple de selectionner_fichier" hspace="20px"></p>
<h2 id="afficher_fichier">afficher_fichier</h2>
<p>Cette fonction affiche le contenu d'un fichier.
</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Fichier</span></td>
	<td>Chemin d'acc�s au fichier. Le chemin peut �tre absolu ou relatif.</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>Titre</td>
	<td>Le titre de la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</TR>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>BoutonAnnule</td>
	<td>D�finit la visibilit� du bouton annul�, par d�faut le bouton est activ�.<br>1 = Visible ; 0 = Non visible</td>
	<td>Booleen</td>
</tr>
<tr>
	<td>Image</td>
	<td>Image � afficher dans la fen�tre</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td>BoutonSuivant</td>
	<td>D�finit le texte du bouton suivant</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<div class="codeconsole"><code>afficher_fichier "/proc/diskstats"</code></div>
<p><img src="<?php echo $url; ?>/doc/images/afficher_fichier.png" alt="Image d'exemple d'afficher_fichier"></p>
<h2 id="navigateur">navigateur</h2>
<p>Ouvre le navigateur web par d�faut � l'adresse sp�fici�e en argument.
</p>
<div class="codeconsole"><code>navigateur http://www.playonlinux.com</code></div>
<h2 id="simuler_reboot">simuler_reboot</h2>
<p>Cette commande permet de simuler un red�marrage de syst�me.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
</table>
<h2 id="select_prefixe">select_prefixe</h2>
<p>Cette fonction permet de s�lectionner le pr�fixe utilis� par Wine ou DosBox.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Prefixe</span></td>
	<td>Chemin d'acc�s au pr�fixe de Wine ou DosBox devant �tre utilis�</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<h2 id="creer_prefixe">creer_prefixe</h2>
<p>Cette fonction permet de cr�er et de mettre � jour le pr�fixe de Wine pr�alablement d�fini par <a href="select_prefixe">select_prefixe</a>.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
</table>
<h2 id="Ask_For_cdrom">Ask_For_cdrom</h2>
<p>Cette fonction demande � l'utilisateur le chemin d'acc�s vers le CD-ROM et d�finit la variable CDROM comme chemin d'acc�s au CDROM.
</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td>NumeroEtape</td>
	<td>Num�ro de l'�tape en cours</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NombreEtape</td>
	<td>Nombre total d'�tapes du script.</td>
	<td>Entier non sign�</td>
</tr>
<tr>
	<td>NumeroCd</td>
	<td>Le num�ro du CD-ROM lors de l'installation d'application multi-cd.</td>
	<td>Entier non sign�</td>
</tr>
</table>
<p><img src="<?php echo $url; ?>/doc/images/Ask_For_cdrom.png" alt="Image d'exemple de l'utilisation de Ask_For_cdrom"></P>
<h2 id="Check_cdrom">Check_cdrom</h2>
<p>Cette fonction v�rifie la pr�sence du fichier pass� en param�tre.
<br><span style="color: red;">Cette fonction doit �tre appel�e apr�s <a href="#Ask_For_cdrom">Ask_For_cdrom</a></span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Program</span></td>
	<td>Chemin d'acc�s relatif (bas� sur le contenu de $CDROM) permettant de confirmer la pr�sence du (bon) CD-ROM.</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<h2 id="Set_OS">Set_OS</h2>
<p>Cette fonction change la version du syst�me d'exploitation simul� par Wine.
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Version</span></td>
	<td>Les diff�rentes valeurs possibles sont : vista, win2003, winxp, win2k, winnt, winme, win98, win95, win31<br>
	<span style="color: orange;"><b>Une seule valeur possible � la fois</b></span></td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<h2 id="Set_Managed">Set_Managed</h2>
<p>Cette fonction permet de d�finir si le gestionnaire de fen�tre contr�le la fen�tre
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Managed</span></td>
	<td>Les deux valeurs possibles sont : On ou Off.<br>La casse doit �tre respect�e</td>
	<td>Bool�en</td>
</tr>
</table>
<h2 id="Set_SoundDriver">Set_SoundDriver</h2>
<p>Cette fonction d�finit le pilote audio qui doit �tre utilis�
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Audio</span></td>
	<td>Les valeurs possibles sont : alsa ; oss ; esd<br>La casse doit �tre respect�e</td>
	<td>Tril�en :-/ </td>
</tr>
</table>
<h2 id="Set_GLSL">Set_GLSL</h2>
<p>Cette fonction permet de d�finir le support de GLSL par Wine (voir <a href="http://en.wikipedia.org/wiki/GLSL">la page de wikipedia (en)</a> pour de plus amples informations).
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">GLSL</span></td>
	<td>Les deux valeurs possibles sont : On ou Off.<br>La casse doit �tre respect�e</td>
	<td>Bool�en</td>
</tr>
</table>
<h2 id="Set_DXGrab">Set_DXGrab</h2>
<p>Cette fonction d�finie si DirectX &copy; peut contr�ler la souris
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">DXGrab</span></td>
	<td>Les deux valeurs possibles sont : On ou Off.<br>La casse doit �tre respect�e</td>
	<td>Bool�en</td>
</tr>
</table>
<h2 id="Set_Iexplorer">Set_Iexplorer</h2>
<p>Cette fonction simule la pr�sence de Microsoft Internet Explorer 6 &copy;
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<h2 id="Set_Desktop">Set_Desktop</h2>
<p>Cette fonction active ou d�sactive le bureau virtuel Wine
<br><span style="color: red;">Le pr�fixe de Wine doit �tre pr�alablement d�fini (par <a href="#select_prefixe">select_prefixe</a>)</span></p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Desktop</span></td>
	<td>Les deux valeurs possibles sont : On ou Off.<br>La casse doit �tre respect�e</td>
	<td>Bool�en</td>
</tr>
<tr>
	<td>Width</td>
	<td>D�finit la largeur du bureau virtuel obligatoire lors de l'activation (premier param�tre � On)</td>
	<td>Entier non sign�</td>
</tr>
<tr>	
	<td>Height</td>
	<td>D�finit la hauteur du bureau virtuel obligatoire lors de l'activation (premier param�tre � On)</td>
	<td>Entier non sign�</td>
</tr>
</table>
<h2 id="fonts_to_prefixe">fonts_to_prefixe</h2>
<p>Cette fonction copie les polices de caract�res dans le dossier Wine d�fini au pr�alable par <a href="select_prefixe">select_prefixe</a></p>
<h2 id="Set_WineVersion_Assign">Set_WineVersion_Assign</h2>
<p>Cette version permet de changer la version de Wine utilis� par une application pour une autre.
<br>Tous les jeux not�s "Platinum" sur le site de <a href="http://appdb.winehq.org/">Wine</a> doivent �tre d�finis � une version fixe de Wine, en raison de probl�mes de r�gression possible entre les diff�rentes versions de Wine.
<br>Si la version de Wine n'est pas pr�sente dans le dossier de l'utilisateur, elle sera automatiquement install�e (puis assign�e)</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Version</span></td>
	<td>Version de Wine devant �tre assign�e. Utiliser --reset pour revenir � la version de Wine install�e sur le syst�me de l'utilisateur.</td>
	<td>Cha�ne de caract�res</td>
</tr>
<tr>
	<td><span style="color: green;">Jeu</span></td>
	<td>Nom de l'application devant �tre assign�e, le nom doit �tre identique � celui utilis� dans <a href="#creer_lanceur">creer_lanceur</a></td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<h2 id="Set_WineVersion_Session">Set_WineVersion_Session</h2>
<p>Cette fonction permet de changer la version de Wine devant �tre utilis�e.
<br>Contrairement � <a href="#Set_WineVersion_Assign">Set_WineVersion_Assign</a> cette fonction modifie la version de Wine uniquement pour la dur�e d'ex�cution du script.
<br>Cette fonction devrait aussi �tre utilis�e pour r�aliser une installation avec une version de Wine dont le fonctionnement est connu sans probl�me.</p>
<table>
<thead class="grisclair">
<tr>
	<td>Param�tre</td>
	<td>Fonction</td>
	<td>Type</td>
</tr>
</thead>
<tr>
	<td><span style="color: green;">Version</span></td>
	<td>Version de Wine devant �tre assign�e. Utiliser --reset pour revenir � la version de Wine install�e sur le syst�me de l'utilisateur.</td>
	<td>Cha�ne de caract�res</td>
</tr>
</table>
<h2 id="Variable">Variable</h2>
<p>Il s'agit d'une liste non-exaustive des variables pouvant �tre utilis�es dans les scripts.
<br>Le contenu des variables est obtenu par l'ajout du symbole $ devant le nom de la variable <i>exemple : $LANG</i>
<br>La valeur d'une variable est affect�e par l'op�rande = <i>exemple : auteur="MulX" ; la variable auteur est cr��e (si non existante) et initialis�e � la valeur MulX .</i> Lors de l'affectation d'une cha�ne de caract�res il faut "encadrer" la cha�ne par des " (double quotes).
<br>La casse doit �tre respect�e lors de l'utilisation d'une variable <i>auteur</i> est diff�rent de <i>Auteur</i> qui est aussi diff�rent de <i>AUTEUR</i>
<br>Si vous avez un doute sur l'utilisation des variables n'h�sitez pas venir relire <a href="<?php echo $prefixe; ?>/dev-documentation-3.html">cette page</a>
<br>Les diff�rentes variables sont donc : </p>
<table>
<thead class="grisclair">
<tr>
	<td>Nom</td>
	<td>Contenu</td>
</tr>
</thead>
<tr>
	<td>PLAYONLINUX</td>
	<td>Contient le chemin d'acc�s absolu au logiciel PlayOnLinux</td>
</tr>
<tr>
	<td>REPERTOIRE</td>
	<td>Contient le chemin d'acc�s absolu au dossier PlayOnLinux de l'utilisateur de PlayOnLinux ( �quivalent � $HOME/.PlayOnLinux )</td>
</tr>
<tr>
	<td>POL_LANG</td>
	<td>Contient la langue utilis�e par PlayOnLinux</td>
</tr>
<tr>
	<td>CDROM</td>
	<td>Contient le chemin absolu vers le CD-ROM, elle est initialis�e apr�s l'appel de <a href="#Ask_For_cdrom">Ask_For_cdrom</a></td>
</tr>
<tr>
	<td>WINEPREFIX</td>
	<td>Variable utilis�e par Wine pour savoir o� est install�e l'application, initialis�e par l'appel de <a href="#select_prefixe">select_prefixe</a></td>
</tr>
</table>
