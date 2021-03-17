<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php
    require_once '../controllers/MenuController.php';

    $menu = new MenuController;
    $menus = $menu->all();
?>

<link rel="stylesheet" href="../css/style.css">
<div id="topHeader">
            <div id="topHeaderFilter"></div>
            <div id="topHeaderContent">
                <a href="index.php"><h3>Football News</h3></a>
                <ul>
                    <?php for($i=0;$i<count($menus);$i++){ ?>
                    <li class = "<?= ($activePage == $menus[$i]['menu_name'].".php") ? "active":"";?>"><a href="<?php echo $menus[$i]['menu_name']; ?>.php" ><?php echo $menus[$i]['menu_name']; ?></a></li>
                    <?php if((isset($menus[$i+1]['menu_name']))){?>
                    <li class="menuLines">|</li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div id="headerColorfulLine"></div>
        </div>
</div>