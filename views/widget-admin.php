<?php
/**
 * Basic Link Widget: Widget Admin Form 
 */

// Block direct requests
if ( !defined( 'ABSPATH' ) )
	die( '-1' );
?>

<p>
	<label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo $instance['title'];?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('target');?>"><?php _e('Target link:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('target'); ?>" name="<?php echo $this->get_field_name('target');?>" type="text" value="<?php echo $instance['target'];?>" />
</p>
<?php $custom_template_list = $this->get_custom_template_list(); ?>
<?php if (!empty($custom_template_list)) : ?>
<p>
	<label for="<?php echo $this->get_field_id('template');?>"><?php _e('Template:', $this->get_widget_text_domain()); ?></label> 
	<select class="widefat" id="<?php echo $this->get_field_id('template');?>" name="<?php echo $this->get_field_name('template');?>">
	<?php $selected_str = ($this->is_template($instance, 'default')) ? ' selected="selected"' : ''; ?>
	<option value="default"<?php echo $selected_str;?> ><?php _e('default', $this->get_widget_text_domain()); ?></option>
	<?php foreach ($custom_template_list as $template) : ?>
	<?php $selected_str = ($this->is_template($instance, $template['name'])) ? ' selected="selected"' : ''; ?>
	<option value="<?php echo $template['name'];?>"<?php echo $selected_str;?> ><?php echo $template['label'];?></option>
	<?php endforeach; ?>
	</select>
</p>
<?php else : ?>
<input id="<?php echo $this->get_field_id('template'); ?>" name="<?php echo $this->get_field_name('template');?>" type="hidden" value="default" />
<?php endif; ?>
