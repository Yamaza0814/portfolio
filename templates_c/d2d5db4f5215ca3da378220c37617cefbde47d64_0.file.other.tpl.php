<?php
/* Smarty version 3.1.32, created on 2018-10-01 12:26:54
  from '/Users/tatsurou_yamazaki/development/PF/tpl/pages/other/other.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb2128e25e112_54151530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d5db4f5215ca3da378220c37617cefbde47d64' => 
    array (
      0 => '/Users/tatsurou_yamazaki/development/PF/tpl/pages/other/other.tpl',
      1 => 1538396812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../parts/tag/photoshop.tpl' => 2,
    'file:../../parts/year/2013.tpl' => 1,
    'file:../../parts/year/2014.tpl' => 1,
  ),
),false)) {
function content_5bb2128e25e112_54151530 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="work_item frame_2013">
  <div class="work_item_image">
    <img src="img/other_item_01.png">
  </div>
  <div class="work_item_info">
    <div class="work_item_info_title">ストリートビュー</div>
    <div class="work_item_info_type">撮影・加工</div>
    <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/photoshop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../parts/year/2013.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="web_work_item_link">サイトを見る</div>
  </div>
</div>
<div class="work_item frame_2014">
  <div class="work_item_image">
    <img src="img/other_item_02.png">
  </div>
  <div class="work_item_info">
    <div class="work_item_info_title">パノラマビュー(自社サービス)</div>
    <div class="work_item_info_type">撮影・加工・デザイン</div>
    <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/photoshop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../parts/year/2014.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="web_work_item_link">サイトを見る</div>
  </div>
</div>
<?php }
}
