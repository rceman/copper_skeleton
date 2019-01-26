<?php /** @var \Copper\Component\Templating\ViewHandler $view */ ?>

<?= $view->render('header') ?>

<body>
<h4><?= $view->out($view->data('message')) ?></h4>
</body>