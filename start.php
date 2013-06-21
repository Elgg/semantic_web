<?php
/**
 * Semantic web
 */

elgg_register_event_handler('init', 'system', 'semantic_web_init');

function semantic_web_init() {
	elgg_extend_view('page/elements/head', 'semantic_web/metatags');
}
