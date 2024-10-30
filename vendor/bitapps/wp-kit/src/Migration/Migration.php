<?php
/**
 * Class For Database.
 */

namespace BitApps\SMTP\Deps\BitApps\WPKit\Migration;

/**
 * Helps to migrate tables on plugin activate.
 */
abstract class Migration
{
    /**
     * Migrate tables.
     */
    abstract public function up();

    /**
     * Drop tables, columns.
     */
    abstract public function down();
}
