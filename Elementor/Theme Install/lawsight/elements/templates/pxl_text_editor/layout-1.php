<?php
$editor_content = $widget->get_settings_for_display( 'text_ed' );
$editor_content = $widget->parse_text_editor( $editor_content );
?>
<div class="pxl-text-editor <?php echo esc_attr($settings['gradient_style']); ?>">
	<div class="pxl-item--inner <?php echo esc_attr($settings['pxl_animate']); ?> ">
		<?php echo wp_kses_post($editor_content); ?>		
	</div>
</div>