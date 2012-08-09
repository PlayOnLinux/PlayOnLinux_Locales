<h1>Inicio</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnLinux" /><span class="title">Me gustaría aprender más sobre PlayOnLinux</span><span class="description">¿ Qué es PlayOnLinux ?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
<h2>¿ Qué es PlayOnLinux ?</h2>
   <p>PlayOnLinux es un programa que os permite <b>instalar y usar fácilmente</b> numerosos <b>juegos y programas previstos para correr exclusivamente en Windows&reg; de Microsoft&reg;</b>.<br/>
   En efecto, actualmente, aún pocos videojuegos son compatibles con GNU/Linux, lo que puede ser un freno para dar el salto. PlayOnLinux aporta una solución accesible y eficaz a este problema, de forma gratuita y siempre respetando los programas libres.</p>
<h2>¿ Cuáles son las características de PlayOnLinux ?</h2>
   <p>Aquí viene una lista, no exhaustiva, de los puntos interesantes de conocer :</p>
	<ul>
   <li>No es necesario poseer una licencia del sistema Windows&reg; para usar PlayOnLinux.</li>
   <li>PlayOnLinux se basa en el programa Wine, y se beneficia de todas sus posibilidades, evitando al usuario enfrentarse a su complejidad y siempre explotando algunas funciones avanzadas.</li>
   <li>PlayOnLinux es un programa libre y gratuito.</li>
   <li>PlayOnLinux está escrito en Bash y en Python</li>
	</ul>
   <p>PlayOnLinux presenta sin embargo, como todo programa, algunos inconvenientes :</p>
	<ul>
   <li>Resultados generales más bajos en algunos casos (imágen menos fluida, gráficos menos detallados, etc...).</li>
   <li>Todos los juegos no son soportados. Podéis sin embargo usar nuestro módulo de instalación manual.</li>
	</ul>


</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnLinux" /><span class="title">Me gustaría descargar PlayOnLinux</span><span class="description">Última versión : <?php include($racine."/script_files/version2.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Descargar PlayOnLinux</h2>
<p>La última versión de PlayOnLinux es <?php echo $version; ?><br />Para obtener esta versión, visitad <a href='<?php echo $prefixe; ?>/download.html'>la página de descarga</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnLinux" /><span class="title">Me gustaría aprender a usar PlayOnLinux</span><span class="description">¿ Cómo me puedo documentar ?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Aprender a usar PlayOnLinux</h2>
<p>Podéis ir a leer la <a href="<?php echo $page_doc; ?>">documentación</a> o pedir ayuda en los <a href="<?php echo $prefixe; ?>/forums.html">foros</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnLinux" /><span class="title">Me gustaría aportar ayuda al proyecto PlayOnLinux</span><span class="description">¿ Qué puedo hacer para ayudar al equipo del proyecto ?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Participar en el proyecto</h2>
<p>Existen varias formas de aportar ayuda al proyecto. Podéis :</p>
<ul>
<li>Proponer artículos contactando por mensaje privado a los escritores o los administradores</li>
<li>Ayudar a los usuarios en los <a href="<?php echo $prefixe; ?>/forums.html">foros</a></li>
<li>Proponer vuestros scripts de instalación</li>
</ul>
</div>
<?php
//echo $_COOKIE["LastNews"];

if(get_last_news("es") == $_COOKIE["LastNews_es"])
	$last = "";
else
	$last = "_2";
?>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5<?php echo $last; ?>.png" alt="PlayOnLinux" /><span class="title">Me gustaría leer las últimas noticias del proyecto</span><span class="description">Las diez últimas noticias</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng); ?>
</div>
<div class="espace"></div>
