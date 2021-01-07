<?php
/* Smarty version 3.1.33, created on 2021-01-06 20:44:26
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff6131a2e7255_25724690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1609962237,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ff6131a2e7255_25724690 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/prestashop/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl -->
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/index.php?id_category=4&amp;controller=category">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Świąteczna promocja </h2>
                  <div class="caption-description"><p><strong>ŚWIĄTECZNA PROMOCJA</strong></p>
<p>WSZYSTKIE KURSY Z KAREGORII "JĘZYKI PROGRAMOWANIA" -20%<br />TYLKO DO 26 GRUDNIA</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/index.php?id_category=7&amp;controller=category&amp;q=Marka-Arkadiusz+W%C5%82odarczyk">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/sample-2.jpg" alt="Przed Świąteczna promocja ">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Przed Świąteczna Promocja </h2>
                  <div class="caption-description"><h3>PRZED ŚWIĄTECZNA PROMOCJA</h3>
<p>-10% na kursy Arkadiusz Włodarczyka w kategorii "Tworzenie Stron Internetowych"</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Poprzedni</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Następny</span>
      </a>
    </div>
  </div>
<!-- end /var/www/html/prestashop/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl --><?php }
}
