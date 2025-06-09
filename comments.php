<div id="comments" class="comments-area widget">
	<?php if( get_comments_number()>0 ){  ?>
    <div class="comments-title widget-title"><?php _e('Comments', 'eroz') ?></div>
	    <ul class="comment-list">
	        <?php wp_list_comments();  ?>
	    </ul>
	    <div class="nav-links"><?php paginate_comments_links(); ?></div>
    <?php } 
    if( comments_open() ) : 
    	comment_form();
    endif ?>
</div>