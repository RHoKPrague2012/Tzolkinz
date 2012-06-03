<?php //netteCache[01]000367a:2:{s:4:"time";s:21:"0.74102300 1338736467";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:45:"/home/vava/rhok/app/templates/Food/list.latte";i:2;i:1338736464;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/vava/rhok/app/templates/Food/list.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7wsao8nt6z')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7578e67ee6_content')) { function _lb7578e67ee6_content($_l, $_args) { extract($_args)
?><h3>Vhodnost potravin - seznam</h3>

<div id="diet_type">

    <div id="diet_type_desc">typ diety:</div>
    <select class="select_diet">
        <option value="1">nízkosacharidová</option>
        <option selected value="1">bezlepková</option>
    </select>
    <br />
    <br />Seznam ukazuje vhodnost potravin pro vybranou dietu od 1 (vhodné) až po 5 (nebezpečné).
</div>

pro: <?php echo Nette\Templating\Helpers::escapeHtml($diet->name, ENT_NOQUOTES) ?>

<div id="product_list">

<ul>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($categories) as $c): ?>
    <li class="category<?php if ($iterator->first): ?> category_first<?php endif ?>">
        <?php echo Nette\Templating\Helpers::escapeHtml($c->name, ENT_NOQUOTES) ?>

    </li>
<?php $iterations = 0; foreach ($list as $l): if ($l->category_id == $c->id): ?>
            <li>
                <div><a href="<?php echo htmlSpecialChars($_control->link("Food:detail", array('dietId' => 1, 'foodId' => $l->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($l->fname, ENT_NOQUOTES) ?></a><span class="vhodnost<?php echo htmlSpecialChars($l->rank) ?>
 product_rating"> <?php echo Nette\Templating\Helpers::escapeHtml($l->rank, ENT_NOQUOTES) ?></span></div>
            </li>
<?php endif ;$iterations++; endforeach ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
</ul>

    <div class="clear"></div>
</div><?php
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
?>



<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 