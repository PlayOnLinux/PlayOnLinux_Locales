<h1>Strona główna</h1>
<div class="presentation_item" onclick="pres_show(1)"><img src="<?php echo $url; ?>/images/logos/logo48.png" alt="PlayOnLinux" /><span class="title">Chciałbym dowiedzieć się więcej na temat projektu PlayOnLinux</span><span class="description">Czym jest PlayOnLinux?</span></div>
<div id="pres_item1" class="presentation_item_hidden">
   <h2>Czy jest PlayOnLinux?</h2>
   <p>PlayOnLinux jest programem, który umożliwia ci <b>łatwą instalację i używanie</b> wielu <b>gier i oprogramowania stworzonych dla Microsoft&reg;'s Windows&reg;</b>.<br/>
   Niewiele gier jest w tym momencie przystosowane do uruchamiania w środowisku GNU/Linux, co jest zapewne jednym z kluczowych przeszkód migracji wielu użytkowników na ten system. PlayOnLinux przynosi przyjazny i efektywny sposób na rozwiązanie tego problemu, bezpłatnie i z pełnym poważaniem dla Wolnego Oprogramowania.</p>
<br/>
   <h2>Jakie są funkcje PlayOnLinux?</h2>
   <p>Oto niewyczerpująca lista najważniejszych rzeczy jakie powinnienłeś wiedzieć:</p>

	<ul>
   <li>ie potrzebujesz licencji na Windows&reg;, aby korzystać z PlayOnLinux.</li>
   <li>layOnLinux bezuje na Wine, a więc czerpie korzyści ze wszystkich jego funkcji, nawet tych zaawansowanych.</li>
   <li>PlayOnLinux jest Wolnym Oprogramowaniem.</li>
   <li>PlayOnLinux używa Basha oraz Pythona</li>
	</ul>
   <p>Niemniej, PlayOnLinux ma pewne wady:</p>
	<ul>
   <li>Sporadyczne obniżenia wydajności (lekkie zacięcia obrazu, mniej szczegółowa grafika itd.).</li>
   <li>>Nie wszystkie gry są wspierane. Niemniej jednak, możesz użyć naszego kreatora instalacji ręcznej.</li>
	</ul>


</div>
<div class="presentation_item" onclick="pres_show(2)"><img src="<?php echo $url; ?>/images/design/icone2.png" alt="PlayOnLinux" /><span class="title">Chciałbym pobrać PlayOnLinux</span><span class="description">Najnowsza wersja: <?php include($racine."/script_files/version2.php"); ?></span></div>
<div id="pres_item2" class="presentation_item_hidden">
<h2>Pobierz PlayOnLinux</h2>
<p>Najnowszą wersją PlayOnLinux jest wersja: <?php echo $version; ?><br />Aby pobrać przejdź do <a href='<?php echo $prefixe; ?>/download.html'>strony pobierania</a></p>
</div>
<div class="presentation_item" onclick="pres_show(3)"><img src="<?php echo $url; ?>/images/design/icone3.png" alt="PlayOnLinux" /><span class="title">Chciałbym dowiedzieć się, jak korzystać z PlayOnLinux.</span><span class="description">Gdzie mogę znaleźć pomoc?</span></div>
<div id="pres_item3" class="presentation_item_hidden"><h2>Dowiedz się, jak korzystać z PlayOnLinux</h2>
<p>Możesz przeczytać <a href="<?php echo $page_doc; ?>">dokumentację</a> albo zapytać na <a href="<?php echo $prefixe; ?>/forums.html">forum</a></p></div>
<div class="presentation_item" onclick="pres_show(4)" id="presentation4"><img src="<?php echo $url; ?>/images/design/icone4.png" alt="PlayOnLinux" /><span class="title">Chciałbym pomóc projektowi PlayOnLinux.</span><span class="description">Co mogę zrobić, żeby pomóc?</span></div>
<div id="pres_item4" class="presentation_item_hidden"><h2>Pomóż projektowi</h2>
<p>Jest wiele dróg, aby pomóc. Możesz:</p>
<ul>
<li>Pisz newsy, a następnie wysyłaj je do newsera lub administracji</li>
<li>Pomagaj innym użytkownikom na <a href="<?php echo $prefixe; ?>/forums.html">forum</a></li>
<li>Wysyłaj swoje skrypty instalacyjne</li>
</ul>
</div>
<?php
//echo $_COOKIE["LastNews"];

if(get_last_news("pl") == $_COOKIE["LastNews_pl"])
	$last = "";
else
	$last = "_2";
?>
<div class="presentation_item no_bottom" onclick="pres_show(5)" id="presentation5"><img src="<?php echo $url; ?>/images/design/icone5<?php echo $last; ?>.png" alt="PlayOnLinux" /><span class="title">Chciałbym przeczytać ostatnie newsy</span><span class="description">10 ostatnich newsów</span></div>
<div id="pres_item5" class="presentation_item_hidden no_bottom">
<?php afficher_10_last($lng); ?>
</div>
<div class="espace"></div>
