<?php
/*
Plugin Name: NEX-Forms - Form Themes - ADD-ON
Plugin URI: https://basixonline.net/nex-forms/pricing/
Description: Enables overall color scheme change with a single click to adapt your form to your theme's look and feel instantly. Includes 25 preset Bootstrap Themes and 19 preset Google Materail Design Themes. <strong>Requires at least: <a href="https://basixonline.net/nex-forms/pricing/?utm_source=nex-forms-add-on&utm_medium=form-themes&utm_content=plugins-page" target="_blank" style="display:block">NEX-Forms v9.x</a></strong>
Author: Basix
Version: 9.1
Text Domain: nex-forms-form-themes-add-on
License: GPLv3 or later
*/

function enqueue_nf_form_themes_scripts($hook) {
wp_enqueue_script('jquery');
wp_enqueue_script('nex-forms-themes-add-on', plugins_url( '/js/themes.js',__FILE__),'','9.1',true);
}


function nf_form_themes_prefix_register_resources(){

wp_register_style('nex-forms-jq-ui-theme-black-tie', plugins_url( '/css/black-tie/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-blitzer', plugins_url( '/css/blitzer/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-cupertino', plugins_url( '/css/cupertino/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-dark-hive', plugins_url( '/css/dark-hive/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-default', plugins_url( '/css/default/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-dot-luv', plugins_url( '/css/dot-luv/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-eggplant', plugins_url( '/css/eggplant/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-excite-bike', plugins_url( '/css/excite-bike/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-flick', plugins_url( '/css/flick/jquery.ui.theme.css',__FILE__),'','9.1');
wp_register_style('nex-forms-jq-ui-theme-hot-sneaks', plugins_url( '/css/hot-sneaks/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-humanity', plugins_url( '/css/humanity/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-le-frog', plugins_url( '/css/le-frog/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-mint-choc', plugins_url( '/css/mint-choc/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-overcast', plugins_url( '/css/overcast/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-pepper-grinder', plugins_url( '/css/pepper-grinder/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-redmond', plugins_url( '/css/redmond/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-smoothness', plugins_url( '/css/smoothness/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-south-street', plugins_url( '/css/south-street/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-start', plugins_url( '/css/start/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-sunny', plugins_url( '/css/sunny/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-swanky-purse', plugins_url( '/css/swanky-purse/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-trontastic', plugins_url( '/css/trontastic/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-ui-darkness', plugins_url( '/css/ui-darkness/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-ui-lightness', plugins_url( '/css/ui-lightness/jquery.ui.theme.css',__FILE__),'','9.1',true);
wp_register_style('nex-forms-jq-ui-theme-vader', plugins_url( '/css/vader/jquery.ui.theme.css',__FILE__),'','9.1',true);
}
add_action( 'init', 'nf_form_themes_prefix_register_resources');
add_action( 'admin_enqueue_scripts', 'enqueue_nf_form_themes_scripts');


function nf_not_found_notice_ft() {
    
		if(!function_exists('NEXForms_ui_output'))
			{
			?>
			<div class="error notice">
            	<p>
                <strong>
				<?php echo wp_kses(__( 'NEX-Forms Core not installed:', 'nex-forms-form-themes-add-on' ), NEXForms_FormThemes_allowed_tags()); ?>
                </strong>
                <?php echo wp_kses(__('You have just installed the <strong>Form Themes Add-on</strong> for NEX-Forms. You need the NEX-Forms core plugin to run this add-on! Get NEX-Forms Core Now - ', 'nex-forms-form-themes-add-on'), NEXForms_FormThemes_allowed_tags()); ?>
                <a href="https://basixonline.net/nex-forms/pricing/?utm_source=nex-forms-add-on&utm_medium=form-themes&utm_content=add-on-notice">
                <?php echo wp_kses(__( 'NEX-Forms - The Ultimate WordPress Form Builder', 'nex-forms-form-themes-add-on'), NEXForms_FormThemes_allowed_tags()); ?>
                </a>
                </p>
			</div>
			<?php
			}
		
}
add_action( 'admin_notices', 'nf_not_found_notice_ft' );

function NEXForms_FormThemes_allowed_tags(){
	$default_attribs = array(
            'id' 			=> true,
            'class' 		=> true,
			'width' 		=> true,
			'height' 		=> true,
			'align' 		=> true,
			'valign' 		=> true,
            'title' 		=> true,
			'type' 			=> true,
            'style' 		=> true,
			'name' 			=> true,
			'value' 		=> true,
			'label' 		=> true,
			'val' 			=> true,
			'tabindex'		=> true,
			'role'			=> true,
			'onClick' 		=> true,
			'onBlur' 		=> true,
			'onChange' 		=> true,
			'click' 		=> true,
			'change' 		=> true,
			'keyup' 		=> true,
			'for' 			=> true,
			'multiple' 		=> true,
			'placeholder' 	=> true,
			'bgcolor' 		=> true,
			'minlength'		=> true,
			'maxlength'		=> true,	
			'selected'		=> true,
			'checked'		=> true,
			'disabled'		=> true,
            'data-*' 		=> true,
        );

	$allowed_tags = array(
		'div'           	=> $default_attribs,
		'span'          	=> $default_attribs,
		'p'             	=> $default_attribs,
		'a'             	=> array_merge( $default_attribs, array(
			'href' 			=> array(),
			'rel' 			=> array(),
			'target' 		=> array('_blank', '_top'),
		) ),
		'h1'             	=> $default_attribs,
		'h2'             	=> $default_attribs,
		'h3'             	=> $default_attribs,
		'h4'             	=> $default_attribs,
		'h5'             	=> $default_attribs,
		'h6'             	=> $default_attribs,
		'u'             	=> $default_attribs,
		'i'             	=> $default_attribs,
		'q'             	=> $default_attribs,
		'b'             	=> $default_attribs,
		'ul'            	=> $default_attribs,
		'ol'            	=> $default_attribs,
		'li'           	 	=> $default_attribs,
		'br'            	=> $default_attribs,
		'hr'            	=> $default_attribs,
		'strong'        	=> $default_attribs,
		'strike'        	=> $default_attribs,
		'caption'			=> $default_attribs,
		'blockquote'    	=> $default_attribs,
		'del'           	=> $default_attribs,
		'strike'        	=> $default_attribs,
		'input'        		=> $default_attribs,
		'select'        	=> $default_attribs,
		'option'        	=> $default_attribs,
		'optgroup'        	=> $default_attribs,
		'textarea'        	=> $default_attribs,
		'small'       	 	=> $default_attribs,
		'label'        		=> $default_attribs,
		'em'            	=> $default_attribs,
		'code'          	=> $default_attribs,
		'canvas'			=> $default_attribs,
		'nav'				=> $default_attribs,
		'iframe'          			=> array_merge( $default_attribs, array(
			'src' 					=> array(),
			'allow' 				=> array(),
			'allowfullscreen' 		=> array(),
			'allowpaymentrequest' 	=> array(),
			'height' 				=> array(),
			'loading' 				=> array(),
			'name' 					=> array(),
			'referrerpolicy' 		=> array(),
			'sandbox' 				=> array(),
			'srcdoc' 				=> array(),
			'width' 				=> array(),
		) ),
		'img'          		=> array_merge( $default_attribs, array(
			'src' 			=> array(),
			'alt' 			=> array(),
			'valign' 		=> array(),
			'halign' 		=> array(),
		) ),
		'table'          	=> array_merge( $default_attribs, array(
			'border' 		=> array(),
			'bordercolor' 	=> array(),
			'cellspacing' 	=> array(),
			'cellpadding' 	=> array(),
			'background' 	=> array(),
		) ),
		'tbody'        		=> $default_attribs,
		'thead'        		=> $default_attribs,
		'tfoot'        		=> $default_attribs,
		'th'        		=> $default_attribs,
		'tr'        		=> $default_attribs,
		'td'          		=> array_merge( $default_attribs, array(
			'colspan' 		=> array(),
			'rowspan' 		=> array(),
		) ),
		'button'        	=> $default_attribs,
		'style'         	=> $default_attribs,
		'body'         		=> $default_attribs,
		'head'         		=> $default_attribs,
		'form'          	=> array_merge( $default_attribs, array(
			'name' 			=> array(),
			'method' 		=> array(),
			'enctype' 		=> array(),
			'action' 		=> array(),
		) ),
		'link'          	=> array_merge( $default_attribs, array(
			'rel' 			=> array(),
			'href' 			=> array(),
		) ),
		'video'          	=> array_merge( $default_attribs, array(
			'autoplay' 		=> array(),
			'controls' 		=> array(),
			'loop' 			=> array(),
			'muted' 		=> array(),
			'poster' 		=> array(),
			'preload' 		=> array(),
			'src' 			=> array(),
		) ),
		'audio'          	=> array_merge( $default_attribs, array(
			'autoplay' 		=> array(),
			'controls' 		=> array(),
			'loop' 			=> array(),
			'muted' 		=> array(),
			'preload' 		=> array(),
			'src' 			=> array(),
		) ),
		'source'          	=> array_merge( $default_attribs, array(
			'srcset' 		=> array(),
			'sizes' 		=> array(),
			'src' 			=> array(),
			'media' 		=> array(),
		) ),
	);
	return $allowed_tags;
}