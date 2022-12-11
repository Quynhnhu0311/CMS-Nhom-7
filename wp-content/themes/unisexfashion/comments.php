<?php
function glw_show_comments($comment, $args, $depth){
    global $count;
    $count++;
    if ($comment->comment_approved == '1') :
?>
    <li <?php comment_class( 'pb-10 count-'.$count ) ?> id="comment-<?php comment_ID(); ?>" style="list-style-type: none;display: flex;margin-top: 25px;">
        <div class="author-img pull-left">
            <?php echo get_avatar( $comment, 82); ?>
        </div>
        <div class="text pt-5">
            <h5 class="text-capitalize"><?php comment_author($comment ); ?></h5>
            <?php echo nl2br(get_comment_text( $comment)); ?>
            <?php
                $rating = get_comment_meta( get_comment_ID(), 'rating', true );
                $stars = '<p class="stars">';
                for ( $i = 1; $i <= $rating; $i++ ) {
                    $stars .= '<span class="dashicons dashicons-star-filled"></span>';
                }
                $stars .= '</p>';
                echo $stars;
            ?>
            <h6>
                <?php comment_date('M d Y', $comment); ?> 
                <span>|</span> 
                <?php 
                    comment_reply_link( 
                         array_merge( 
                               $args, 
                               array('depth' => $depth, 'max_depth' => $args['max_depth']) 
                         ) 
                    ); 
                ?>
            </h6>
        </div>
    </li>

<?php 
    endif;
}
    
?>

<div class="comment-area mr-minus-30">
    <div class="comment_box mb-60">
        <div class="comment-box">
            <!-- <form action=""></form> -->
            <?php
                comment_form( array(
                    'comment_field'     => '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
                    'fields'            => array(
                        'author'        => '<div class="row">
                                                <div class="col-sm-3">
                                                    <input type="text" name="name" placeholder="Your Name" style="width: 265px;height: 40px;"/>
                                                </div>',
                        'email'         =>      '<div class="col-sm-3">
                                                    <input type="text" name="email" placeholder="Your Email" style="width: 265px;height: 40px;"/>
                                                </div>
                                            </div>',
                        'url'           =>  '<input type="text" name="website" placeholder="Website" style="width: 557px;height: 40px;margin-top: 5px;"/>',
                        

                    ),
                    'class_form'            =>  'custom-input',
                    'submit_button'         =>  '<button class="btn" type="submit" name="submit" style="background-color: #000;color: #fff;padding-left: 35px;padding-right: 35px;font-weight: bold;margin-left: 160px;">'.__('SEND','glw').'</button>',
                    'title_reply_before'    =>  '<div class="comment-title mb-40">
                                                        <h5 class="mb-5">',
                    'title_reply'           =>  __('Leave A Comment','glw'),
                    'title_reply_after'     =>  '   </h5>
                                                    <div class="horizontal-line">
                                                        <hr class="top"/>
                                                        <hr class="bottom"/>
                                                    </div>
                                                </div>'
                ));
            ?>
        </div>
    </div>
    <div class="comment-list mb-60">
        <div class="comment-title mb-40">
            <h5 class="mb-5">
                <?php
                    comments_number( 
                        __('No comments','glw'), 
                        __('One comment','glw'), 
                        __('% comments','glw')
                    );
                ?>
            </h5>
            <div class="horizontal-line">
                <hr class="top"/>
                <hr class="bottom"/>
            </div>
        </div>
        <ul>
            <?php
                wp_list_comments( array('callback' => 'glw_show_comments') );
            ?>
        </ul>
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="clear"></div>
            <!-- start: #comment-nav -->
            <nav id="comment-nav" >
                <div class="nav-previous float-left">
                    <?php previous_comments_link( __('<< Previous', 'gola') ); ?>
                </div>
                <div class="nav-next float-right">
                    <?php next_comments_link( __('Next >>', 'gola')); ?>
                </div>
            </nav>
            <!-- end: #comment-nav -->
        <?php endif; ?>
    </div>
</div>