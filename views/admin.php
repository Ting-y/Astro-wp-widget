<!-- This file is used to markup the administration form of the widget. -->
<?php
    $title = !empty($instance['title']) ? $instance['title'] : __('Astro0', 'text_domain');
?>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
<br>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
