<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    
    include '../Class/MenuPrincipal.php';
    $menu = new MenuPrincipal();
    $menuItems = $menu->getMenuItems();
?>

<ul id="menu-principal">
    <?php foreach ($menuItems as $item): ?>

        <li id="<?php echo $item['id']; ?>">
            <a href="<?php echo $item['link']; ?>">
                <?php echo $item['nome']; ?>
            </a>
        </li>

    <?php endforeach; ?>
</ul>