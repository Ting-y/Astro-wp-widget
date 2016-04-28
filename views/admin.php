<!-- This file is used to markup the administration form of the widget. -->
<?php
    $title = !empty($instance['title']) ? $instance['title'] : __('Astro0', 'text_domain');
    $site_url = !empty($instance['site_url']) ? $instance['site_url'] : __('https://public-api.wordpress.com/rest/v1.1/sites/dailypost.wordpress.com/', 'text_domain');
    $collection_type = !empty($instance['collection_type']) ? $instance['collection_type'] : 'latest';
    $post_count = !empty($instance['post_count']) ? $instance['post_count'] : '5';
    $is_open_tab = $instance['is_open_tab'] ? true : false;
    $show_featured_image = $instance['show_featured_image'] ? true : false;
?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('site_url'); ?>"><?php _e('Site URL:'); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id('site_url'); ?>" name="<?php echo $this->get_field_name('site_url'); ?>" type="text" value="<?php echo $site_url; ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('collection_type'); ?>"><?php _e('Collection:'); ?></label> 
    <select class="widefat" id="<?php echo $this->get_field_id('collection_type'); ?>" name="<?php echo $this->get_field_name('collection_type'); ?>" >
    <option value="latest" <?php echo ($collection_type=='latest') ? 'selected': '' ?>>Latest</option>
</select>
</p>
<p>
    <label for="<?php echo $this->get_field_id('post_count'); ?>"><?php _e('Number of posts:'); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id('post_count'); ?>" name="<?php echo $this->get_field_name('post_count'); ?>" type="text" value="<?php echo $post_count; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'is_open_tab' ); ?>">Open links in new tab</label>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'is_open_tab' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'is_open_tab' ); ?>" name="<?php echo $this->get_field_name( 'is_open_tab' ); ?>" /> 
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'show_featured_image' ); ?>">show featured image</label>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'show_featured_image' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'show_featured_image' ); ?>" name="<?php echo $this->get_field_name( 'show_featured_image' ); ?>" /> 
</p>
