<?php

require_once(WP_PLUGIN_DIR . '/wordpress-security-protection/tables/Ip_Ban_List_Table.php');

$ip_ban_list_table = new Ip_Ban_List_Table();

echo '<form id="wpse-list-table-form" method="post">';
    $ip_ban_list_table->prepare_items();

    echo "<h3>Geblokkeerde ip-adressen</h3>";

    $ip_ban_list_table->display();
echo '</form>';