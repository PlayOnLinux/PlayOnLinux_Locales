<h1>Create a script for <?php echo $website_name; ?>&nbsp;- Chapter 10: Scripts translation</h1>
<p style="color:#008000">A chapter dedicated to scripts translation, is it that important?</p>
<p>Yes. <?php echo $website_name; ?> scripts must be translated in all languages so that a maximum of people can use them.</p>
<p style="color:#008000">But I do not speak russian!</p>
<p>Don't worry, you won't be doing all the translations, it will be the job of the <a href="https://translations.launchpad.net/playonlinux/arietis">Launchpad</a> team of translators, that we gratefully thank here for all their work.</p>
<p>But, to make it possible for the Launchpad to translate your script, your script need some arrangements.</p>

<h2>All the messages must be written in english!</h2>
<p>This is the core requirement for translations to take place (messages being translated from english to the other languages).</p>

<h2>Messages reuse</h2>
<p>To lessen translators workload, messages should be as much as possible identical among scripts (because if the message has already been translated, it won't need to be translated again for the new script).</p>
<p>Hence, we made a list of the most common messages.</p>

<h3>List of messages:</h3>
<?php echo bbencode('[quote]Please select the setup file to run.
Please insert the game media into your disk drive.
Please wait while $TITLE is installed.
$TITLE has been successfully installed.
[/quote]'); ?>
<p>Use those whenever you can. If you need some message that is not in this list, go ahead and write it in english. What you must avoid are messages that are not in this list but have the same meaning as one that does.</p>

<h2>The eval_gettext command</h2>
<p>The command eval_gettext takes an english message as argument, and returns its translation into current user's language (as automatically determined).</p>

<h3>Example:</h3>
<?php echo script('eval_gettext \'Please select the setup file to run.\''); ?>

<h3>Usage:</h3>
<p>The problem is, how to simply pass the return value of the eval_gettext function to, say, the <span style="color:#000080"><b>POL_SetupWindow_message</b></span> command? The solution is to evaluate eval_gettext inside arguments.</p>
<p style="color:#008000">One can evaluate a function inside an argument? Wow, this is getting complicated!</p>
<p>This is achieve by inserting the function eval_gettext between the symbols: <b>$()</b> meaning that the code between <b>(</b> and <b>)</b> is to be executed.</p>

<h3>Example:</h3>
<?php echo script('POL_SetupWindow_message "$(eval_gettext \'Please select the setup file to run.\')" "$TITLE"'); ?>
<p>That may look a bit twisted, but you'll get used to it.</p>

<h1 style="text-align:center;color:#FF8000">THE END</h1>
<p>That is all, the tutorial ends here, you should have enough knowledge to stand on your own feet.</p>
<p>An annex is available in the next chapter, that lists all the variables and all the functions that can be used in <?php echo $website_name; ?> scripts, because we have seen something like one quarter of existing functions. One of those may come handy in a specific script, so think about having a look to this annex at that time. Note however, that the functions used in this tutorial will be all what you need for most scripts.</p>
<p>If you have any question, do not hesitate to ask it in the forums.</p>
