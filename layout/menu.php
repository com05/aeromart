<?php
    $menuMap = Array(
        "index" => "57",
        "sign-up" => "52",
        "sponsorship" => "53",
        "event-format-program" => "67",
        "event-format-program/concept" => "50",
        "korean-aerospace-industry" => "51",
        "partners" => "370",
        "participants-list" => "89",
        "useful-information" => "54",
        "downloads" => "48",
        "contact" => "47",
    );
    $_MN = $menuMap[$__['m']];;
?>
<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
				
<!-- Your site title as branding in the menu -->
<a class="navbar-brand" href="index.php" title="Aeromart Korea 2014" rel="home">
    <img src="wp-content/uploads/2014/04/logo-AeromartKorea-2.png">
</a>

<!-- The WordPress Menu goes here -->
<div class="nav-collapse collapse navbar-responsive-collapse"><ul id="main-menu" class="nav navbar-nav">
<li id="menu-item-57" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home <?php if($_MN==57) { ?>active <?php } ?> menu-item-57"><a href="index.php" >Home</a></li>
<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==52) { ?>active <?php } ?> menu-item-52"><a href="?m=sign-up" >참가/전시 등록</a></li>
<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==53) { ?>active <?php } ?> menu-item-53"><a href="?m=sponsorship" >스폰서 (후원) 계약</a></li>
<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==67) { ?>active <?php } ?> menu-item-has-children menu-item-49 dropdown"><a href="?m=event-format-program"  data-toggle="dropdown" data-target="#" class="dropdown-toggle">행사형식 및 프로그램<span class="caret"></span></a>
<ul class="dropdown-menu">
	<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==67) { ?>active <?php } ?> menu-item-67"><a href="?m=event-format-program" >행사형식 및 프로그램</a></li>
	<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==50) { ?>active <?php } ?> menu-item-50"><a href="?m=event-format-program/concept" >행사 특성</a></li>
</ul>
</li>
<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==51) { ?>active <?php } ?> menu-item-51"><a href="?m=korean-aerospace-industry" >한국 항공우주산업 개요</a></li>
<li id="menu-item-370" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==370) { ?>active <?php } ?> menu-item-370"><a href="?m=partners" >파트너</a></li>
<li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==89) { ?>active <?php } ?> menu-item-89"><a href="http://www.bciaerospace.com/korea/participants-list/" target="_blank" >참관등록</a></li>
<!--
    <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==89) { ?>active <?php } ?> menu-item-89"><a href="?m=participants-list" >참관등록</a></li>
-->
<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==54) { ?>active <?php } ?> menu-item-54"><a href="?m=useful-information" >유용한 정보</a></li>
<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==48) { ?>active <?php } ?> menu-item-48"><a href="?m=downloads" >다운로드</a></li>
<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==47) { ?>active <?php } ?> menu-item-47"><a href="http://www.bciaerospace.com/korea/contact/" target="_blank" >연락처</a></li>
<!--
<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page <?php if($_MN==47) { ?>active <?php } ?> menu-item-47"><a href="?m=contact" >연락처</a></li>
-->
</ul></div>				