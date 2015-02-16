<?php
/**
 * Basic Link Widget: Default widget template
 * 
 * @since 1.0.0
 */

// Block direct requests
if (!defined('ABSPATH')) die('-1');
?>

<?php echo $args['before_widget']; ?>

<?php if ($this->has_title($instance)) : ?>
<?php echo $args['before_title']; ?>
<a href="<?php $this->the_target($instance);?>" title="<?php $this->the_target_title($instance);?>"><?php $this->the_title($instance); ?></a>
<?php echo $args['after_title']; ?>
<?php endif; ?>

<?php echo $args['after_widget']; ?>
