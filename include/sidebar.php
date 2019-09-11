<?php 
    $json = file_get_contents('./../customerData/menu.json');
    // echo "<pre>";
    $data = json_decode($json, true);
    // print_r($data); die;
?>
<div id="sidebar">
	<div class="inner">
		<!-- Menu -->
		<nav id="menu">
			<header class="major">
                <h2>Menu</h2>
			</header>
			<ul>
                <?php foreach($data as $key1 => $item){ ?>
                    <?php if($item['children']){ ?>
                        <li>
                            <span class="opener"><?= $item['name']?></span>
                            <ul>
                                <?php foreach($item['children'] as $key2 => $subMenu1){ ?>
                                    <?php $href = (!$subMenu1['children']) ? $subMenu1['url'] : $subMenu1['url'] . '?nivel1=' . $key1 . '&nivel2=' . $key2 ;?>
                                    <li><a href="<?=$href?>"><?= $subMenu1['name']?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } else { ?>
                            <li><a href="<?=$item['url']?>"><?= $item['name']?></a></li>
                    <?php } ?>
                <?php } ?>
			</ul>
		</nav>
		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">Proyecto Luisa Forero</p>
		</footer>
	</div>
</div>  

<?php
// echo "</pre>";
function prueba(){
    $str = "<h1>HolaMundo</h1>";
    return $str;
}

?>