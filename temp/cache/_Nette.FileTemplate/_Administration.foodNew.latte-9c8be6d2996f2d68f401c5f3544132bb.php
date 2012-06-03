<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.96500700 1338718001";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"/home/vava/rhok/app/templates/Administration/foodNew.latte";i:2;i:1338718000;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/vava/rhok/app/templates/Administration/foodNew.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'wtmt0107xu')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb27727a5128_content')) { function _lb27727a5128_content($_l, $_args) { extract($_args)
;Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["foodNewForm"], array()) ?>
    
    <h3>přidání potraviny</h3>
<?php if ($form->getErrors()): ?>
        <div class="error">
            <?php echo Nette\Templating\Helpers::escapeHtml($form->render('errors'), ENT_NOQUOTES) ?>

        </div>
<?php endif ?>

    <?php if ($_label = $_form["name"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["name"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["desc"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["desc"]->getControl()->addAttributes(array()) ?>


<div> zdroje/odkazy
    <?php if ($_label = $_form["sourceTitle1"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceTitle1"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["sourceUrl1"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceUrl1"]->getControl()->addAttributes(array()) ?>


    <?php if ($_label = $_form["sourceTitle2"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceTitle2"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["sourceUrl2"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceUrl2"]->getControl()->addAttributes(array()) ?>


    <?php if ($_label = $_form["sourceTitle3"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceTitle3"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["sourceUrl3"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceUrl3"]->getControl()->addAttributes(array()) ?>


    <?php if ($_label = $_form["sourceTitle4"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceTitle4"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["sourceUrl4"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceUrl4"]->getControl()->addAttributes(array()) ?>


    <?php if ($_label = $_form["sourceTitle5"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceTitle5"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["sourceUrl5"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["sourceUrl5"]->getControl()->addAttributes(array()) ?>

</div>
    <?php if ($_label = $_form["dietType"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["dietType"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["danger"]->getLabel()) echo $_label->addAttributes(array()) ;echo $_form["danger"]->getControl()->addAttributes(array()) ?>

    
    
    <?php echo $_form["submit"]->getControl()->addAttributes(array()) ?>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 