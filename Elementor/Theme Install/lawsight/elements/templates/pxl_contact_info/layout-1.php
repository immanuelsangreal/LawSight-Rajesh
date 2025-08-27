<?php 
	if ( ! empty( $settings['link']['url'] ) ) {
	    $widget->add_render_attribute( 'button', 'href', $settings['link']['url'] );

	    if ( $settings['link']['is_external'] ) {
	        $widget->add_render_attribute( 'button', 'target', '_blank' );
	    }

	    if ( $settings['link']['nofollow'] ) {
	        $widget->add_render_attribute( 'button', 'rel', 'nofollow' );
	    }
	}
?>
<div class="pxl-contact-info pxl-contact-info1 <?php echo esc_attr($settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
	<?php if(!empty($settings['pxl_icon'])) {  ?>
		<div class="pxl-item--icon pxl-mr-12">
			<?php \Elementor\Icons_Manager::render_icon( $settings['pxl_icon'], [ 'aria-hidden' => 'true', 'class' => '' ], 'i' ); ?>
		</div>
	<?php } ?>
	<div class="pxl-item--meta">
		<h6 class="pxl-item--title el-empty"><?php echo esc_html($settings['title']); ?></h6>
		<div class="pxl-item--subtitle el-empty"><?php echo esc_html($settings['sub_title']); ?></div>
		<div class="pxl-item--subtitle el-empty"><?php echo esc_html($settings['sub_title2']); ?></div>


	</div>
	<a class="pxl-item--link" <?php pxl_print_html($widget->get_render_attribute_string( 'button' )); ?>></a>
</div>