<?php /* Smarty version Smarty-3.1.19, created on 2015-02-07 00:21:51
         compiled from "C:\wamp\www\prestashop\modules\mobilecasedesign\views\admin\footer_area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1342954d50d4760d610-92718122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ac396688defde00d419232f8423a79e9b1d5a5' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\mobilecasedesign\\views\\admin\\footer_area.tpl',
      1 => 1423245175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1342954d50d4760d610-92718122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url_marge_image' => 0,
    'base_url_module' => 0,
    'base_url2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d50d479033c8_19621491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d50d479033c8_19621491')) {function content_54d50d479033c8_19621491($_smarty_tpl) {?><script type="text/javascript">
/*admin Order Details pagfe Image Change*/
jQuery(function($) {	
	if(jQuery("#orderProducts").length == 1){
		var design_code = '';
		jQuery('#orderProducts > tbody  > tr').each(function() {
			var yyy = jQuery(this).find('a span').text();
			var xCode = yyy.split(':');
			var img_src = jQuery(this).find('.img-thumbnail');  
			if(xCode.length > 1 && xCode[1].trim() != '' && xCode[1].trim().length == 32){
				//here we got the custom ID
				img_src.attr('src', '<?php if (isset($_smarty_tpl->tpl_vars['base_url_marge_image']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url_marge_image']->value;?>
<?php }?>' + xCode[1].trim() + '__front.png');
				jQuery(this).find('a').after("<a onclick=loadDesignInfoPopup('"+xCode[1].trim()+"'); style='color:red;font-weight:bold;font-szie:14px;' href='javascript:void(0);'>Custom Design Info</a><br/><span id='"+xCode[1].trim()+"'><span>");
				loadCustomVariationInfo(xCode[1].trim());
			}
			img_src.css('width','60px');
			img_src.css('height','60px');
		});
	}
});


function loadCustomVariationInfo(xcode){
	var post_url = "<?php if (isset($_smarty_tpl->tpl_vars['base_url_module']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url_module']->value;?>
<?php }?>getvariationinfo.php";
	$.ajax({
		type: "POST",
		url: post_url,
		data: 'did=' + xcode,
		success: function(msg) {
			if(msg != ''){
				$("#"+xcode).html(msg);
			}
		},
	});
}


function loadDesignInfoPopup(xcode){
	var post_url = "<?php if (isset($_smarty_tpl->tpl_vars['base_url_module']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url_module']->value;?>
<?php }?>custominfo.php";
	$.ajax({
		type: "POST",
		url: post_url,
		data: 'did=' + xcode,
		success: function(msg) {
			if(msg != ''){
				$("#designitpopup").html(msg);
				jQuery("#designitpopup").dialog({
				 modal: true
				 , width: 550
				 , height: 550
				});
				loadTab();
			}
		},
	});
}
function makeme300dpi(source){
	$("#ploader").show();
	var post_url = "<?php if (isset($_smarty_tpl->tpl_vars['base_url2']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url2']->value;?>
<?php }?>admin300DPI.php";
	$.ajax({
		type: "POST",
		url: post_url,
		data: 'design_id=' + source,
		success: function(msg) {
			//done 300DPI
			var fileURL = msg;
			var fileName = source + '_300dpi.pdf';
			SaveToDisk(fileURL,fileName);
			$("#ploader").hide();
		},
	});
}
function SaveToDisk(fileUrl, fileName) {
    var hyperlink = document.createElement('a');
    hyperlink.href = "<?php if (isset($_smarty_tpl->tpl_vars['base_url2']->value)) {?><?php echo $_smarty_tpl->tpl_vars['base_url2']->value;?>
<?php }?>" + fileUrl;
    hyperlink.target = '_blank';
    hyperlink.download = fileName || fileUrl;

    var mouseEvent = new MouseEvent('click', {
        view: window,
        bubbles: true,
        cancelable: true
    });

    hyperlink.dispatchEvent(mouseEvent);
    (window.URL || window.webkitURL).revokeObjectURL(hyperlink.href);
}
function printDiv(divID) {
	var divElements = document.getElementById(divID).innerHTML;
	var win = window.open("", "_blank", "height=500,width=550");
	win.document.write("<html><head><title>Custom Design Print</title></head><body style='background:black';><br/><br/><div align='center'>" + divElements + "</div><br/><br/><div align='center'><a style='color:red;font-weight:bold;' href='javascript:void(0);' onclick='window.print();return false;'>Print</a></div></body></html>");
}
function loadTab(){
	$( "#tabs" ).tabs();
}
</script>
<style type="text/css">
.me_button_style{
	box-shadow: 0px 1px 0px 0px rgb(84, 163, 247) inset; 
	background: linear-gradient(to bottom, rgb(0, 125, 193) 5%, rgb(0, 97, 167) 100%) repeat scroll 0% 0% rgb(0, 125, 193); 
	border-radius: 3px; border: 1px solid rgb(18, 77, 119); 
	display: inline-block; 
	cursor: pointer; 
	color: rgb(255, 255, 255); 
	font-family: arial; 
	font-size: 13px; 
	padding: 6px 24px; 
	text-decoration: none; 
	text-shadow: 0px 1px 0px rgb(21, 70, 130);
}
</style>
<div id="designitpopup" title="Design Information" style="display:none;"></div><?php }} ?>
