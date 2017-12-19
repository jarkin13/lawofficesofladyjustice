<?php
/**
 * The sidebar containing the main widget area
 *
 */

if ( ! is_active_sidebar('sidebar-1') || ! apply_filters('mesmerize_blog_sidebar_enabled', true)) {
    return;
}
?>

<div class="sidebar-row">
    <?php dynamic_sidebar('sidebar-1'); ?>
</div>
