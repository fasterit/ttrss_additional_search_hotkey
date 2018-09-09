<?php
class Additional_Search_Hotkey extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"Make h open the search dialog, too. And H for help.",
			"DLange/Faster IT GmbH");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	function hook_hotkey_map($hotkeys) {

		$hotkeys["h"]  = "search_dialog";
		$hotkeys["*h"] = "help_dialog";

		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}