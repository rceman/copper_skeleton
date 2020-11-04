<?php /** @var \Copper\Component\Templating\ViewHandler $view */

use App\Entity\User;
use App\Service\UserService; ?>

<?= $view->render('header') ?>

<ul class="navbar">
    <li><a href="<?= $view->path(ROUTE_index) ?>">Home</a></li>

    <?php if ($view->auth->check() === false) { ?>
        <li><a href="<?= $view->path(ROUTE_get_auth_login) ?>">Login</a></li>
    <?php } else { ?>
        <?php if ($view->auth->user()->role === User::ROLE_ADMIN) { ?>
            <li><a href="<?= $view->path(ROUTE_get_admin) ?>">Admin Panel</a></li>
        <?php } ?>
        <li><a href="<?= $view->path(ROUTE_get_account) ?>">User Account</a></li>
        <li><a href="<?= $view->path(ROUTE_get_auth_logout) ?>">Logout</a></li>
    <?php } ?>

</ul>
<h4><?= $view->out($view->data('message')) ?></h4>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Login</td>
        <td>Password</td>
        <td>Role</td>
        <td>Email</td>
    </tr>
    <?php
    foreach (UserService::DEFAULTS as $user => $fields) {
        echo "<tr>";
        foreach ($fields as $field) {
            echo "<td>$field</td>";
        }
        echo "</tr>";
    }
    ?>
</table>