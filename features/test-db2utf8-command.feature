Feature: Test db2utf8 command

  Scenario: The default charset on tables is utf8mb4_unicode_ci
    Given a WP install

    When I run `wp db query "SELECT table_collation FROM information_schema.tables WHERE table_schema = DATABASE();"`

    Then STDOUT should not contain:
      """
      utf8_general_ci
      """

  Scenario: The updated charset on tables is utf8_general_ci
    Given a WP install

    When I run `wp db2utf8`

    Then STDOUT should contain:
      """
      Success: Table wp_commentmeta converted to utf8
      Success: Table wp_comments converted to utf8
      Success: Table wp_links converted to utf8
      Success: Table wp_options converted to utf8
      Success: Table wp_postmeta converted to utf8
      Success: Table wp_posts converted to utf8
      Success: Table wp_term_relationships converted to utf8
      Success: Table wp_term_taxonomy converted to utf8
      Success: Table wp_termmeta converted to utf8
      Success: Table wp_terms converted to utf8
      Success: Table wp_usermeta converted to utf8
      Success: Table wp_users converted to utf8
      """

    When I run `wp db query "SELECT table_collation FROM information_schema.tables WHERE table_schema = DATABASE();"`

    Then STDOUT should contain:
      """
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      utf8_general_ci
      """
