<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=80; */

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<!-- Texts. -->
<div id="item-metadata">
<?php echo all_element_texts('item'); ?>
</div>

<!-- Files. -->
<?php echo files_for_item(
        array(
            'linkAttributes' => array('rel' => 'lightbox')
        )
    ); ?>
<hr />

<!-- Link. -->
<?php echo link_to(
  get_current_record('item'), 'show', 'View this ad in the database'
); ?>
