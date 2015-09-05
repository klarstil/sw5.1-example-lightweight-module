<?php

class Shopware_Plugins_Backend_Test_Bootstrap extends Shopware_Components_Plugin_Bootstrap {
	public function install() {
		$this->registerController('Backend', 'Test');

		$this->createMenuItem(array(
			'label' => 'Test-Plugin',
			'onclick' => 'window.createSimpleModule("Test", "Window-Title")',
			'class' => 'sprite-star',
			'active' => 1,
			'parent' => $this->Menu()->findOneBy('label', 'Einstellungen')
		));

		return true;
	}
}