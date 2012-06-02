<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.17816900 1338639537";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"/home/vava/rhok/app/components/SearchContainer.latte";i:2;i:1338639536;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/vava/rhok/app/components/SearchContainer.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ng7gtj2rai')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["searchForm"], array()) ?>

<?php if ($form->getErrors()): ?>
    <div class="error">
        <?php echo Nette\Templating\Helpers::escapeHtml($form->render('errors'), ENT_NOQUOTES) ?>

    </div>
<?php endif ?>
 <?php if ($_label = $_form["search"]->getLabel()) echo $_label->addAttributes(array()) ?>
 <?php echo $_form["search"]->getControl()->addAttributes(array()) ?> <?php echo $_form["submit"]->getControl()->addAttributes(array()) ?>


<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;