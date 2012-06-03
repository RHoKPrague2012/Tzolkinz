<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.89161400 1338712803";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"/home/vava/rhok/app/templates/Administration/commentNew.latte";i:2;i:1338712802;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/vava/rhok/app/templates/Administration/commentNew.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7gjqt4hwaq')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf83f5fb65a_content')) { function _lbf83f5fb65a_content($_l, $_args) { extract($_args)
;Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["commentNew"], array()) ?>
    
<?php if ($form->getErrors()): ?>
        <div class="error">
            <?php echo Nette\Templating\Helpers::escapeHtml($form->render('errors'), ENT_NOQUOTES) ?>

        </div>
<?php endif ?>
    <?php if ($_label = $_form["nick"]->getLabel()) echo $_label->addAttributes(array()) ?>
 <?php echo $_form["nick"]->getControl()->addAttributes(array()) ?>

    <?php if ($_label = $_form["message"]->getLabel()) echo $_label->addAttributes(array()) ?>
 <?php echo $_form["message"]->getControl()->addAttributes(array()) ?>

    <?php echo $_form["renderTime"]->getControl()->addAttributes(array()) ?>

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