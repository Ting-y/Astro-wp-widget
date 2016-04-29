<!-- This file is used to markup the public-facing widget. -->

<?php 
    extract( $args );
     
    $title  = apply_filters( 'widget_title', $instance['title'] );
    $site_url = $instance['site_url'];
    $collection_type = $instance['collection_type'];
    $post_count = $instance['post_count'];
     
    echo $before_widget;
    if ( $title ) {
        echo $before_title . $title . $after_title;
    }
    echo $after_widget;
    $data_parameters = "";
    if ($collection_type == 'latest') {
        $data_parameters =  'number=' . $post_count;
    }
    else {
        $data_parameters = 'number=' . $post_count . '&category=' . $collection_type;
    }
?>
   <div data-api-host=<?php echo $site_url; ?>>
        <div data-api-endpoint="posts" data-api-parameters="<?php echo $data_parameters; ?>" data-api-template="repeat">
            <div>
                <a data-api-property="URL" data-app-anchor><h1 data-api-property="title"></h1></a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/astro/0.3.1/astro-api.min.js"></script>
