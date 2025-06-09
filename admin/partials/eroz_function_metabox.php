<?php
/** * Post Editor WP-admin * Metabox Post * Change: Add metabox over player */
global $post;
wp_nonce_field('act_nonce_name', 'meta-box-nonce');
$input_video    = get_option('eroz_meta_video', true);
$input_duration = get_option('eroz_meta_duration', true);
$input_trailer  = get_option('eroz_meta_video_trailer', true);
$input_src      = get_option('eroz_meta_src', true);
?>
<table class="form-table eroz-video-meta">
    <tbody>
        <tr>
            <td class="first"><span class="dashicons dashicons-clock wp-ui-text-highlight"></span><label
                    for="input-duration"><?php _e('Duration', 'eroz'); ?></label></td>
            <td><input name="<?php echo $input_duration; ?>" type="text"
                    value="<?php echo get_post_meta($post->ID, $input_duration, true); ?>"></td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-video-alt2 wp-ui-text-highlight"></span><label
                    for="input-metabox"><?php _e('Video', 'eroz'); ?></label></td>
            <td><textarea
                    name="<?php echo $input_video; ?>"><?php echo get_post_meta($post->ID, $input_video, true); ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-video-alt2 wp-ui-text-highlight"></span><label
                    for="input-metabox"><?php _e('Video Optional', 'eroz'); ?></label></td>
            <td><textarea
                    name="video_optional_1"><?php echo get_post_meta($post->ID, 'video_optional_1', true); ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-video-alt2 wp-ui-text-highlight"></span><label
                    for="input-metabox"><?php _e('Video Optional', 'eroz'); ?></label></td>
            <td><textarea
                    name="video_optional_2"><?php echo get_post_meta($post->ID, 'video_optional_2', true); ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-video-alt2 wp-ui-text-highlight"></span><label
                    for="input-metabox"><?php _e('Video Optional', 'eroz'); ?></label></td>
            <td><textarea
                    name="video_optional_3"><?php echo get_post_meta($post->ID, 'video_optional_3', true); ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-video-alt2 wp-ui-text-highlight"></span><label
                    for="input-metabox"><?php _e('Video Optional', 'eroz'); ?></label></td>
            <td><textarea
                    name="video_optional_4"><?php echo get_post_meta($post->ID, 'video_optional_4', true); ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-format-aside wp-ui-text-highlight"></span><label
                    for="input-duration"><?php _e('Description', 'eroz'); ?></label></td>
            <td><textarea name="eroz_post_desc" cols="30"
                    rows="10"><?php echo get_post_meta($post->ID, 'eroz_post_desc', true); ?></textarea></td>
        </tr>
        <tr>
            <td class="first"><span
                    class="dashicons dashicons-download wp-ui-text-highlight"></span><label><?php _e('Download Link', 'eroz'); ?></label>
            </td>
            <td><input name="eroz_ads_link" type="text"
                    value="<?php echo get_post_meta($post->ID, 'eroz_ads_link', true); ?>"></td>
        </tr>
        <tr>
            <td class="first"><span
                    class="dashicons dashicons-download wp-ui-text-highlight"></span><label><?php _e('Download Optional', 'eroz'); ?></label>
            </td>
            <td><input name="eroz_ads_link_2" type="text"
                    value="<?php echo get_post_meta($post->ID, 'eroz_ads_link_2', true); ?>"></td>
        </tr>
        <tr>
            <td class="first"><span
                    class="dashicons dashicons-download wp-ui-text-highlight"></span><label><?php _e('Download Optional', 'eroz'); ?></label>
            </td>
            <td><input name="eroz_ads_link_3" type="text"
                    value="<?php echo get_post_meta($post->ID, 'eroz_ads_link_3', true); ?>"></td>
        </tr>
        <tr>
            <td class="first"><span
                    class="dashicons dashicons-download wp-ui-text-highlight"></span><label><?php _e('Download Optional', 'eroz'); ?></label>
            </td>
            <td><input name="eroz_ads_link_4" type="text"
                    value="<?php echo get_post_meta($post->ID, 'eroz_ads_link_4', true); ?>"></td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-video-alt2 wp-ui-text-highlight"></span><label
                    for="input-duration"><?php _e('Video Trailer', 'eroz'); ?></label></td>
            <td><input name="<?php echo $input_trailer; ?>" type="text"
                    value="<?php echo get_post_meta($post->ID, $input_trailer, true); ?>"></td>
        </tr>
        <tr>
            <td class="first"><span class="dashicons dashicons-format-image wp-ui-text-highlight"></span><label
                    for="input-duration"><?php _e('Imagen ( URL )', 'eroz'); ?></label></td>
            <td><input name="eroz_meta_src" type="url"
                    value="<?php echo get_post_meta($post->ID, 'eroz_meta_src', true); ?>"></td>
        </tr>
    </tbody>
</table>