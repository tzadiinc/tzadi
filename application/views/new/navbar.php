<div class="container-fluid">
  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="brand" href="<?=base_url()?>" style="background: url(<?=$this->session->userdata("orgImg")?>) no-repeat left center; background-size: 100%; height:20px; width: 20px; margin:0px 5px;"></a>
  <span class="brand">
    <a href="#"><?= $this->session->userdata("orgName")?></a>
  </span>
  <div class="nav-collapse collapse">
    <ul class="nav">
      <li><a href="http://<?=$this->session->userdata("identity")?>.<?=ENVIRONMENT?>" rel="tooltip" title="Blog"><i class="icon-home icon-large"></i> home</a></li>
      <li><a class="blogLink" href="/blog" rel="tooltip" title="Blog"><i class="icon-coffee icon-large"></i> Blog</a></li>    </ul>
    <ul class="nav pull-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" rel="tooltip" title="<?=lang('tmpt_select_lang')?>"><span class="language"><?=$this->session->userdata('language')?></span> <i class="icon-caret-down"></i></a>
        <ul class="dropdown-menu">
          <li><a id="en" rel="tooltip" title="Translate to English">en -English</a></li>
          <li><a id="pt" rel="tooltip" title="Traduzir para Português">pt - Português</a></li>
        </ul>
      </li>
      <li class="dropdown autoOpen pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-large"></i> <?=$this->session->userdata('name')?></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1"  href="#profile"><?=lang('tmpt_Profile')?></a></li>
          <li><a tabindex="-1"  href="#configuracoes"><?=lang('tmpt_Settings')?></a></li>
          <li class="divider"></li>
          <li><a tabindex="-1"  href="<?=base_url()?><?=lang('rt_logout')?>"><?=lang('tmpt_Logout')?></a></li>
        </ul>
      </li>
    </ul>
  </div><!--/.nav-collapse -->
</div><!-- container -->