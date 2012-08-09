<h1>Главная</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnLinux" /><span class="title">Я хочу узнать больше о PlayOnLinux</span><span class="description">Что такое PlayOnLinux ?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
   <h2>Что такое PlayOnLinux ?</h2>
   <p>PlayOnLinux - это программа, которая позволяет <b>легко устанавливать и использовать</b> большое количество <b>игр и приложений, разработанных для Microsoft&reg;'s Windows&reg;</b>.<br/>
   На данный момент очень мало игр совместимо с GNU/Linux, что, конечно, сильно мешает переходу на эту систему. PlayOnLinux предоставляет доступное и эффективное решение этой проблемы, бесплатное и уважающее свободное ПО.<br/></p>
   <h2>Что особенного в PlayOnLinux?</h2>
   <p>Вот неполный список того, что вам нужно знать о программе:</p>

	<ul>
   <li>Вам не нужна лицензионная Windows&reg;, чтобы использовать PlayOnLinux.</li>
   <li>PlayOnLinux основана на Wine и использует все его возможности, и к тому же, значительно упрощает использование его продвинутых функций.</li>
   <li>PlayOnLinux - свободное программное обеспечение.</li>
   <li>PlayOnLinux использует Bash и Python</li>
	</ul>
   <p>Однако, PlayOnLinux имеет некоторые недостатки, как и любая программа:</p>
	<ul>
   <li>Иногда происходит потеря производительности (изображение становится менее плавным и графика менее детализированной).</li>
   <li>Не все игры поддерживаются. В то же время, вы можете использовать наш модуль ручной установки.</li>
	</ul>

<h2>Немного скриншотов PlayOnLinux</h2>
<p>
<?php
for($i = 0; $i < 6; $i++)
{
	?><a href="<?php echo $url; ?>/images/presentation/capture<?php echo $i+1; ?>.en.png" title="PlayOnLinux" class="lightbox"><img src="<?php echo $url; ?>/images/presentation/min/capture<?php echo $i+1; ?>.en.png" alt="" /></a>&nbsp;&nbsp;<?php
}
?>
</p>
</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnLinux" /><span class="title">Я хочу скачать PlayOnLinux</span><span class="description">Последняя версия : <?php include($racine."/script_files/version2.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Скачать PlayOnLinux</h2>
<p>Последняя версия PlayOnLinux: <?php echo $version; ?><br />Чтобы скачать эту версию, перейдите на <a href='<?php echo $prefixe; ?>/download.html'>страницу загрузки</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnLinux" /><span class="title">Я хочу узнать, как пользоваться PlayOnLinux</span><span class="description">Где я могу получить помощь?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Научиться использовать PlayOnLinux</h2>
<p>Вы можете почитать <a href="<?php echo $page_doc; ?>">документацию</a> или задать вопрос на <a href="<?php echo $prefixe; ?>/forums.html">форуме</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnLinux" /><span class="title">Я хочу помочь PlayOnLinux</span><span class="description">Что я могу сделать, чтобы помочь команде PlayOnLinux?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Помочь проекту</h2>
<p>Есть много способов помочь нашей команде. Вы можете :</p>
<ul>
<li>Писать новости и присылать их новостным редакторам или администраторам</li>
<li>Помогать другим пользователям на <a href="<?php echo $prefixe; ?>/forums.html">форуме</a></li>
<li>Прислать ваш собственный установочный скрипт</li>
<li><a href='donate.html'>Помочь материально</a></li>

</ul>
</div>
<?php
// PLEASE REPLACE "en" BY THE CODE OF YOUR LANGUAGE 
// PLEASE REPLACE "en" IN LastNews_en ALSO

if(get_last_news("ru") == $_COOKIE["LastNews_ru"])
	$last = "";
else
	$last = "_2";
?>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5<?php echo $last; ?>.png" alt="PlayOnLinux" /><span class="title">Я хочу прочитать последние новости</span><span class="description">Десять последних новостей</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng); ?>
</div>
<div class="espace"></div>
