<?php /* Smarty version Smarty-3.1.19, created on 2015-02-09 23:20:29
         compiled from "C:\xampp\htdocs\prestashop\modules\mobilecasedesign\views\frontend\footer_area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1113854d8f365a1e460-24104655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2bdea9018a9aea4fd6eac3457ab73f880cd556' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mobilecasedesign\\views\\frontend\\footer_area.tpl',
      1 => 1423245176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1113854d8f365a1e460-24104655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url_marge_image' => 0,
    'base_url_module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d8f365a54998_64558342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d8f365a54998_64558342')) {function content_54d8f365a54998_64558342($_smarty_tpl) {?><script type="text/javascript">
/*Product Details Variation Check*/
jQuery( document ).ready(function() {
	if(jQuery("#design_canvas").length == 1){
		$('#add_to_cart').hide();
		if(jQuery("#availability_value").length == 1){
			$('#availability_statut').hide();
		}
	}
});
jQuery(function($) {
	if(jQuery(".attribute_select").length == 1){
		jQuery(".attribute_select").change(function(){
			var getCode = $( ".attribute_select option:selected" ).text();
			if(getCode !='' && getCode == 'Custom Add'){
				setTimeout(function() {
					$('#add_to_cart').hide();
					$('#design_canvas').show();
					jQuery(".unvisible").hide();
				}, 500);
			}
			else{
				setTimeout(function() {
					$('#add_to_cart').show();
					$('#design_canvas').hide();
					jQuery(".unvisible").show();
				}, 500);
			}
		});
	}
});
//color change in cart page
jQuery(function($) {
	if(jQuery(".special-price").length == 1){
		jQuery(".special-price").css('color','#777777');
		jQuery(".old-price").hide();
		jQuery(".price-percent-reduction").hide();
	}
});
/*Cart Page Image Change Based on custom ID*/
jQuery(function($) {	
	if(jQuery("#cart_summary").length == 1){
		jQuery('#cart_summary > tbody  > tr').each(function() {
			var design_code = '';
			jQuery(this).find('.cart_description small a').each(function () {
        		var atag_html = this.innerHTML;  
        		var custom_val = atag_html.split(':');
				if(custom_val[0] != '' && custom_val[0].trim() == 'custom'){
					design_code = custom_val[1].trim();
					jQuery(this).after("<br/><span id='c_"+design_code+"'><span>");
				}
        	});
			jQuery(this).find('.cart_product a img').each(function () {
				if(design_code != ''){
					this.src = "<?php if (isset($_smarty_tpl->tpl_vars['base_url_marge_image']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url_marge_image']->value;?>
<?php }?>" + design_code + '__front.png';
				}
			});
		});
	}
});

/*Mini Cart Image change Based On Custom ID*/
jQuery(function($) {	
	if(jQuery(".cart_block").length == 1){
  		jQuery('.cart_block_list dl dt').each(function() {
    	var yyy = jQuery(this).find('.cart-info .product-atributes a').text();  
			if(yyy.trim().length > 0 && yyy.trim().length == 32){
				var img_src = jQuery(this).find('a img');
				//jQuery(jQuery(this).find('a')).after("<br/><span id='m_" + yyy.trim() + "'><span>");
				//loadCustomVariationInfo('m_',yyy.trim());
				if(img_src.attr('src') != ''){
					img_src.attr('src', '<?php if (isset($_smarty_tpl->tpl_vars['base_url_marge_image']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url_marge_image']->value;?>
<?php }?>' + yyy.trim() + '__front.png');
					img_src.css('width','80');
					img_src.css('height','80');
				}
			}
		});
	}
});

/*Customer Account Details*/
jQuery(function($) {	
	if(jQuery("#block-history").length == 1){
  		jQuery('#order-list > tbody > tr').each(function() {
    		jQuery(this).find('td .color-myaccount').each(function () {
				var href_text = $(this).attr('href');
				$(this).attr('href',href_text + 'slowCustomerData();');
			});
		});
	}
});
jQuery(function($) {	
	if(jQuery("#block-history").length == 1){
  		jQuery('#order-list > tbody > tr').each(function() {
    		jQuery(this).find('.history_detail a').each(function () {
				var href_text = $(this).attr('href');
				$(this).attr('href',href_text + 'slowCustomerData();');
			});
		});
	}
});
function slowCustomerData(){
	setTimeout(function() {
    	  loadCustomerData();
	}, 6000);
}
function loadCustomerData(){
	if(jQuery("#order-detail-content").length == 1){
		jQuery('#order-detail-content .table > tbody > tr').each(function() {
			jQuery(this).find('td').each(function () {
				var yyy = jQuery(this).find('label').text();  
				var ff = yyy.split(':');
				if(ff.length > 1 && ff[1].trim().length == 32){
				  var old_c = $(this).text();
				  $(this).html(old_c + "<br/><a style='color:red;font-weight:bold;' href='javascript:void(0);' onclick=loadDesignInfoPopup('"+ff[1].trim()+"');>View Details</a>");
				}
			});
		});
	}
}
function loadDesignInfoPopup(xcode){
	var post_url = "<?php if (isset($_smarty_tpl->tpl_vars['base_url_module']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url_module']->value;?>
<?php }?>custominfofront.php";
	$.ajax({
		type: "POST",
		url: post_url,
		data: 'did=' + xcode,
		success: function(msg) {
			if(msg != ''){
				$("#designitpopup").html(msg);
				jQuery("#designitpopup").dialog({
				 modal: true
				 , width: 400
				 , height: 500
				});
			}
		},
	});
}
/**/
</script>
<div id="designitpopup" title="Design Information" style="display:none;"></div>
<?php }} ?>
