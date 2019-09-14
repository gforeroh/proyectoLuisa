<?php
    $json = file_get_contents('./../customerData/menu.json');
    $data = json_decode($json, true);
    $dataDoc = [];
    if($_GET){
        $dataDoc = $data[$_GET['nivel1']]['children'][$_GET['nivel2']];
    }

    // $url = $_SERVER['REQUEST_URI'];

    // echo "<pre>";
    // print_r($dataDoc);
    // echo "</pre>";
    // die;
?>


<style>
    div#page_header nav ul li{
        list-style: none;
    }
    
    #page_header a{
        text-decoration: none;
        float: left;
        height: 40px;
        line-height: 40px;
        padding: 0 10px;
        margin: 5px 5px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        background-color: #f56a6a;
        font-size: 12px;
        color: #ffffff;
        font-family: arial, verdana, sans-serif;
        width: 30%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    
    #page_header a:hover{
        background-color: #c9c9c9;
    }

    .titulo {
        text-transform: lowercase;
        margin-bottom: 0 !important;
    }

    .titulo:first-letter {
        text-transform: uppercase;
    }

    
</style>

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 10px;
    transition: 0.3s;
    font-size: 12px;
    line-height: 1em;
    height: 3em;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<section>
    <?php if($dataDoc){ ?>
        <header class="main">
            <h1 class="titulo"><?=$dataDoc['name'];?></h1>
        </header>
    
        <div id="page_header" style="display: flow-root;">
            <nav>
                <ul id="procesos-btn" style="padding-left: 0em;">
                    <?php foreach($dataDoc['children'] as $key3 => $proceso){ ?>
                        <li><a href="#" class="lnk-proceso" title="<?=$proceso['name']?>" data-json='<?=json_encode($proceso)?>'><?=$proceso['name']?></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div>
            <div class="tab" id="tab1">
                <!-- <button class="tablinks" onclick="openCity(event, 'London')">London</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button> -->
            </div>

            <div id="arbol-box" class="tabcontent">
                <h3 class="title-document" style="margin-bottom: 0px;">Documentos</h3>
                <div id="diagram_nodo_file" style="padding: 10px 5px;">
                    
                </div>          
                <div id="jstree_demo_div"></div>
            </div>
        </div>
    <?php } ?>
</section>

<script>
    (function($) {
        openCity(null, 'arbol-box');
    })();

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";        
        if(evt) evt.currentTarget.className += " active";
    }
</script>

