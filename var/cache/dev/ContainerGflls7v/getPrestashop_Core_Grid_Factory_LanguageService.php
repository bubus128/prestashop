<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.language' shared service.

return $this->services['prestashop.core.grid.factory.language'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(${($_ = isset($this->services['prestashop.core.grid.definition.factory.language']) ? $this->services['prestashop.core.grid.definition.factory.language'] : $this->load('getPrestashop_Core_Grid_Definition_Factory_LanguageService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.factory.language_decorator']) ? $this->services['prestashop.core.grid.factory.language_decorator'] : $this->load('getPrestashop_Core_Grid_Factory_LanguageDecoratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.filter.form_factory']) ? $this->services['prestashop.core.grid.filter.form_factory'] : $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'});
