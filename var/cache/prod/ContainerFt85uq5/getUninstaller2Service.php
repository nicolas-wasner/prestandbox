<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\PsxMarketingWithGoogle\Database\Uninstaller' shared service.

return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Database\\Uninstaller'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Database\Uninstaller(${($_ = isset($this->services['psxmarketingwithgoogle']) ? $this->services['psxmarketingwithgoogle'] : $this->load('getPsxmarketingwithgoogleService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] : ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] : $this->load('getSegment2Service.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] : ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler())) && false ?: '_'});
