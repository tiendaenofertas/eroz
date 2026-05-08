<?php
class EROZ_Activator{
	public static function activate(){
		add_option( 'eroz_meta_video', 'embed' );
		add_option( 'eroz_meta_duration', 'duration' );
		add_option( 'eroz_meta_video_trailer', 'trailer_url' );
		update_option('thumbnail_size_w', 250);
		update_option('thumbnail_size_h', 140);
		update_option('eroz_sidebar_position', 'left');

		$cookie_text = get_option( 'eroz_cookie_text_announce', false );
		if( !$cookie_text or $cookie_text == '' ) {
			update_option('eroz_cookie_text_announce', 'We use cookies on this site to enhance your user experience.');
		}
	}
}