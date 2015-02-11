<?php /* Smarty version Smarty-3.1.19, created on 2015-02-07 00:30:35
         compiled from "C:\wamp\www\prestashop\modules\mobilecasedesign\views\admin\mobilecasedesign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233454d50f530d08a8-73476385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e21e94e8278a5f236c7f73744fe37e2c9bc1d0' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\mobilecasedesign\\views\\admin\\mobilecasedesign.tpl',
      1 => 1423245175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233454d50f530d08a8-73476385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chk_is_custom' => 0,
    'min_qty' => 0,
    'front_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d50f531af350_13164996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d50f531af350_13164996')) {function content_54d50f531af350_13164996($_smarty_tpl) {?><h4><?php echo smartyTranslate(array('s'=>'Mobile Case Customization Setup (Please save product first)','mod'=>'tshirtdesign'),$_smarty_tpl);?>
</h4>
<div class="separation"></div>
<table id="save_custom_info">
	<tr>
		<td>
			<label>Design Product ? &nbsp;&nbsp;</label>
		</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['chk_is_custom']->value==0) {?>
			<input type="checkbox" id="setCustomValue" onclick="setHidden();" name="chk_is_custom" />
			<?php } elseif ($_smarty_tpl->tpl_vars['chk_is_custom']->value==1) {?>
			<input type="checkbox" id="setCustomValue" onclick="setHidden();" checked="checked" name="chk_is_custom" />
			 <?php }?>
			 <input type="hidden" id="hdncustom" name="hdncustom" value="<?php if (isset($_smarty_tpl->tpl_vars['chk_is_custom']->value)) {?><?php echo $_smarty_tpl->tpl_vars['chk_is_custom']->value;?>
<?php }?>" />
		</td>
	</tr>
	<tr>
		<td>
			<label>Minimum Quantity&nbsp;&nbsp;</label>
		</td>
		<td>
			<input type="text" name="min_qty" value="<?php if (isset($_smarty_tpl->tpl_vars['min_qty']->value)) {?><?php echo $_smarty_tpl->tpl_vars['min_qty']->value;?>
<?php }?>"  />
		</td>
	</tr>
	<tr>
		<td>
			<label>Front Design Image&nbsp;&nbsp;</label>
		</td>
		<td>
			<input type="file" name="file_front_image" />
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<div style="width:100px;height:100px;float:left;margin-top:20px;">
				<div align="center" style="width:100px;height:100px;border:solid 1px #666666;"><img style="padding-top:10px;" src="<?php if (isset($_smarty_tpl->tpl_vars['front_image']->value)) {?><?php echo $_smarty_tpl->tpl_vars['front_image']->value;?>
<?php }?>" width="85" height="85"  /></div>
				<div align="center"><b>Front Image</b></div>
			</div>
		</td>
	</tr>
</table>
<br/><br/><br/>
<div class="panel-footer">
		<button class="btn btn-default pull-right" name="submitAddproduct" type="submit"><i class="process-icon-save"></i> Save</button>
		<button style="margin-right:5px;" class="btn btn-default pull-right" name="submitAddproductAndStay" type="submit"><i class="process-icon-save"></i> Save and stay</button>
</div>

<script type="text/javascript">
function setHidden(){
	if(document.getElementById("setCustomValue").checked){
		jQuery("#hdncustom").val('1');
	}
	else{
		jQuery("#hdncustom").val('0');
	}
}
</script>

<style type="text/css">
#save_custom_info{
	font-size:12px !important;
}
#save_custom_info tr td {
	padding-top:7px !important;
}
</style><?php }} ?>
