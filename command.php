<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * @when before_wp_load
 */

class ConvertTablesToUTF8 extends WP_CLI_Command {

    private function table_list() {
        global $wpdb;
        $tables = array();

        $sqlTablesResults = $wpdb->get_results( 'SHOW TABLES' );
        $outputColumnName = "Tables_in_" . DB_NAME;

        foreach ($sqlTablesResults as $value) {
            array_push($tables, $value->$outputColumnName);
        }

        return $tables;
    }

    function fix_tables( $tables = array() ) {
        if ( empty($tables) ) {
            WP_CLI::error( "Empty table list." );
            return;
        }

        global $wpdb;

        foreach ($tables as $table) {
            $wpdb->get_results( "alter table $table CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci" );
            WP_CLI::success( "Table ${table} converted to utf8" );
        }
    }


    /**
     * Convert database's tables in UTF8.
     */

    public function __invoke() {
        $this->fix_tables($this->table_list());
    }
}

WP_CLI::add_command( 'db2utf8', 'ConvertTablesToUTF8' );
