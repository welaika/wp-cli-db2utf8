<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Says "Hello World" to new users
 *
 * @when before_wp_load
 */

class UTF8mb4_to_UTF8 extends WP_CLI_Command {
    /**
     * Convert database's tables in UTF8. Used to downgrade the UTF8-mb4 encoding
     */

    public function __invoke() {
        global $wpdb;

        $sqlTablesResults = $wpdb->get_results( 'SHOW TABLES' );
        $outputColumnName = "Tables_in_" . DB_NAME;
        $tables = array();

        foreach ($sqlTablesResults as $value) {
            array_push($tables, $value->$outputColumnName);
        }

        if ( empty($tables) ) {
            WP_CLI::error( "Empty table list." );
            return;
        }

        foreach ($tables as $table) {
            $wpdb->get_results( "alter table $table CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci" );
            WP_CLI::success( "Table ${table} converted to utf8" );
        }
    }
}

WP_CLI::add_command( 'utf8mb4-2-utf8', 'UTF8mb4_to_UTF8' );
