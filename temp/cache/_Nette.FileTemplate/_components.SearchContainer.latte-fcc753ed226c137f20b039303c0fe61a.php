<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.13785700 1338646787";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"/home/vava/rhok/app/components/SearchContainer.latte";i:2;i:1338646319;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/vava/rhok/app/components/SearchContainer.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'g26py23wl9')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<h3>Jak je potravina vhodná?</h3>

<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["searchForm"], array()) ?>


<?php if ($form->getErrors()): ?>
        <div class="error">
            <?php echo Nette\Templating\Helpers::escapeHtml($form->render('errors'), ENT_NOQUOTES) ?>

        </div>
<?php endif ?>

    
    <div class="diet_type">
        
        <div class="diet_type_desc"><?php if ($_label = $_form["dietType"]->getLabel()) echo $_label->addAttributes(array()) ?></div>
            <?php echo $_form["dietType"]->getControl()->addAttributes(array()) ?>

        
    </div>
    <?php echo $_form["search"]->getControl()->addAttributes(array()) ?>

    <div class="search_button">
        <?php echo $_form["submit"]->getControl()->addAttributes(array()) ?>

    </div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>



