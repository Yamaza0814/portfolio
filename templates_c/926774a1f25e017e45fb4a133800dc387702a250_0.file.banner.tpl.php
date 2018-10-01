<?php
/* Smarty version 3.1.32, created on 2018-10-01 12:18:05
  from '/Users/tatsurou_yamazaki/development/PF/tpl/pages/banner/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb2107d573bf8_82001286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926774a1f25e017e45fb4a133800dc387702a250' => 
    array (
      0 => '/Users/tatsurou_yamazaki/development/PF/tpl/pages/banner/banner.tpl',
      1 => 1538396283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../parts/tag/photoshop.tpl' => 4,
    'file:../../parts/year/2014.tpl' => 4,
    'file:../../parts/tag/illustrator.tpl' => 2,
  ),
),false)) {
function content_5bb2107d573bf8_82001286 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="myModal">
  <input id="myModal_open" type="radio" name="myModal_switch" />
  <label for="myModal_open">
    <div class="work_item work_item_banner frame_2013">
      <div class="work_item_image">
        <img src="img/banner_item_01.png">
      </div>
      <div class="work_item_info">
        <div class="work_item_info_title">自社サイト誘導バナー</div>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/photoshop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/year/2014.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="web_work_item_link">詳細を見る</div>
      </div>
    </div>
    <div class="work_item work_item_banner frame_2013">
      <div class="work_item_image">
        <img src="img/banner_item_02.png">
      </div>
      <div class="work_item_info">
        <div class="work_item_info_title">自社サイト誘導バナー</div>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/photoshop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/year/2014.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <div class="web_work_item_link">詳細を見る</div>
      </div>
    </div>
    <div class="work_item work_item_banner frame_2013">
      <div class="work_item_image">
        <img src="img/banner_item_03.png">
      </div>
      <div class="work_item_info">
        <div class="work_item_info_title">キャンペーンバナー</div>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/photoshop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/illustrator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/year/2014.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <div class="web_work_item_link">詳細を見る</div>
      </div>
    </div>
    <div class="work_item work_item_banner frame_2013">
      <div class="work_item_image">
        <img src="img/banner_item_04.png">
      </div>
      <div class="work_item_info">
        <div class="work_item_info_title">キャンペーンバナー</div>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/photoshop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/tag/illustrator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../parts/year/2014.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <div class="web_work_item_link">詳細を見る</div>
      </div>
    </div>
  </label>
  <input id="myModal_close-overlay" type="radio" name="myModal_switch" />
  <label for="myModal_close-overlay"></label>
  <input id="myModal_close-button" type="radio" name="myModal_switch" />
  <label for="myModal_close-button">閉じる</label>
  <div class="myModal_popUp">
  <div class="myModal_popUp-content">
    <img class="popimg" src="img/banner_item_01.png">
    <p class="banner_info">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
  </div>
 </div>
 <input id="myModal_close-overlay" type="radio" name="myModal_switch" />
 <label for="myModal_close-overlay"></label>
 <input id="myModal_close-button" type="radio" name="myModal_switch" />
 <label for="myModal_close-button">閉じる</label>
 <div class="myModal_popUp">
 <div class="myModal_popUp-content">
   <img class="popimg" src="img/banner_item_01.png">
   <p class="banner_info">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
 </div>
</div>
</section>
<?php }
}
