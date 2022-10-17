<?php
global $wpdb;
$db = $wpdb->prefix. 'equipos';
$equipo_id = get_the_id();
$marca = $wpdb->get_var("SELECT `marca` FROM $db WHERE `equipo_ID` = $equipo_id");
$modelo = $wpdb->get_var("SELECT `modelo` FROM $db WHERE `equipo_ID` = $equipo_id");
$informacion_equipo = $wpdb->get_var("SELECT `informacion` FROM $db WHERE `equipo_ID` = $equipo_id");
?>