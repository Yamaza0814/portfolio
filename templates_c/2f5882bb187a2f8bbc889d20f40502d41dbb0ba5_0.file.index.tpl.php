<?php
/* Smarty version 3.1.32, created on 2018-10-01 12:39:21
  from '/Users/tatsurou_yamazaki/development/PF/tpl/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb21579698845_30214000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5882bb187a2f8bbc889d20f40502d41dbb0ba5' => 
    array (
      0 => '/Users/tatsurou_yamazaki/development/PF/tpl/index.tpl',
      1 => 1538397555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/pages/web/web.tpl' => 1,
    'file:tpl/pages/banner/banner.tpl' => 1,
    'file:tpl/pages/other/other.tpl' => 1,
    'file:tpl/pages/all/all.tpl' => 1,
  ),
),false)) {
function content_5bb21579698845_30214000 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title></title>
</head>
<body>
  <section class="page_top">
    <div class="title_wrap">
      <div class="page_title">PortFolio</div>
      <div class="profile_wrap">
        <div class="profile_title">profile</div>
        <div class="profile_name">山崎 達郎</div>
        <div class="profile_Age">Age:26</div>
        <div class="profile_career">2008年4月　新潟私立北越高等学校スポーツ科入学</div>
        <div class="profile_career">2011年4月　武蔵野ファッションカレッジ　ファッションスタイリング科入学</div>
        <div class="profile_career">2013年4月　株式会社フレックスにWebデザイナーとして入社(2年6ヶ月勤務)</div>
        <div class="profile_career">2016年1月　インターノウス　プログラマーカレッジ入学（3ヶ月の短期学校）</div>
        <div class="profile_career">2016年5月　株式会社GypsophilAにWebディレクター兼デザイナーとして入社</div>
      </div>
    </div>
  </section>
  <section class="work_container">
    <h1 class="work_title">Work</h1>
    <div class="tab_wrap">
      <input id="web_work" type="radio" name="tab_btn" checked>
      <input id="banner_work" type="radio" name="tab_btn">
      <input id="other_work" type="radio" name="tab_btn">
      <input id="all_work" type="radio" name="tab_btn">
      <div class="work_menu_wrap">
        <div class="work_menu">
          <label class="work_list web_label" for="web_work">Web</label>
          <label class="work_list banner_label" for="banner_work">バナー</label>
          <label class="work_list other_label" for="other_work">その他</label>
          <label class="work_list all_label" for="all_work">ALL</label>
        </div>
      </div>
      <div class="panel_area">
        <div id="web_work_item" class="tab_panel">
          <?php $_smarty_tpl->_subTemplateRender('file:tpl/pages/web/web.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="banner_work_item" class="tab_panel">
          <?php $_smarty_tpl->_subTemplateRender('file:tpl/pages/banner/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="other_work_item" class="tab_panel">
          <?php $_smarty_tpl->_subTemplateRender('file:tpl/pages/other/other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="all_work_item" class="tab_panel">
          <?php $_smarty_tpl->_subTemplateRender('file:tpl/pages/all/all.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>
    </div>
  </section>
  <section class="mypr_container">
    <h1 class="mypr_title">PR</h1>
    <div class="mypr_list">
      <p class="pr_text">
        ・挫折からスキルアップに繋げる事が出来ました。
        1社目はWebサイトの制作会社だったため、お客様とWebサイトのコンテンツや方向性について話し合いをしていく
        過程で当時、HTML,CSSしかできなかった自分にはJava,JavaScriptを要するお客様のご希望に応える事ができなかった経験がありました。
        その悔しさ、恥ずかしさでJava,JavaScriptをプログラミング学校で習得し、スキルアップへと繋げることが出来ました。
        自分自身、知らない事やできない事が何より悔しさを感じるので今後、常に新しいことへの挑戦を心がけていく事が出来ます。</p>
      <p class="pr_text">
        ・チームのメンバーの特性や今後の起こりうる問題を想定しディレクションを行います。
        2社目では自社ECサイトのリニューアルを行いました。
        チームで最大限のパフォーマンスをするためメンバー全員の特性や苦手な分野を把握し、業務のスケジュール調整や振り分けを行いました。
        実作業に取り掛かる前には入念にミーティングをし、今後の大きな修正にも短時間で対応できるようオブジェクト
        指向を意識し構成を練ります。
        実際に大きな修正を短時間で行わなければいけない問題に対しても数名にて短時間で対応する事が出来ました。</p>
      <p class="pr_text">・自分自身の進化を常に考えております。
        新しい技術や面白い技術に常に目を向け、自分自身がその技術を再現することができるのかを検証し、できなければ悔しく思い勉強しております。</p>
    </div>
  </section>
  <footer class="footer_container">
    <p class="copy_copyright">＠copyright</p>
  </footer>
</body>
</html>
<?php }
}
