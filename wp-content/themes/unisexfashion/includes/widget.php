<?php
function create_widgets_init(){
    // Thêm SB footer
    register_sidebar( array(
        'name'          => __( 'Footer', 'text_domain'), // Tên sidebar hiển thị trong admin
        'id'            => 'sidebar-footer', // ID của sidebar không được trùng, dùng để hiển thị SB
        'description'   => __( 'Thêm các widget *[Footer] vào đây', 'text_domain'), // Mô tả cho SB nảy
        'before_widget' => '<section id="%1$s" class="widget %2$s">', // Bạn có thể thêm Class cho SB vào đây
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">', // Thẻ mở để tạo tiêu đề chung cho tất cả các Widget nẳm trong Sidebar này
        'after_title'   => '</h2>', // Đóng thẻ tiêu đề
    ) );
    
    // Thêm SB phải
    register_sidebar( array(
        'name'          => __( 'Sidebar phải', 'text_domain' ),
        'id'            => 'sidebar-right',
        'description'   => __( 'Thêm các widget *[Phải] vào đây', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb-right %2$s">',
        'after_widget'  => '</div><hr>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
    // Thêm các SB tiếp theo
}
add_action( 'widgets_init', 'create_widgets_init' );