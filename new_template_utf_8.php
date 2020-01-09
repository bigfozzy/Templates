<?php

$xhe_host = "127.0.0.1:7010";

// The following code is required to properly run XWeb Human Emulator
require("[[TEMPLATE]]/xweb_human_emulator.php");

// navigate to google
$browser->navigate("http://www.ya.ru");
$input->set_inner_text_by_name("text","中文秘書");

// Quit
$app->quit();
?>