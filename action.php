<?php
/**
 * Action Plugin: Inserts a button into the toolbar to add file tags
 *
 * @author Heiko Barth
 */
 
if (!defined('DOKU_INC')) die();
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
require_once (DOKU_PLUGIN . 'action.php');
 
class action_plugin_codebuttongs extends DokuWiki_Action_Plugin {

    /**
     * Register the eventhandlers
     */
    function register(Doku_Event_Handler $controller) {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array ());
    }
 
    /**
     * Inserts the toolbar button
     */
    function insert_button(& $event, $param) {
        $event->data[] = array (
            'type' => 'format',
            'title' => $this->getLang('insertcode'),
            'icon' => '../../plugins/codebuttongs/image/code.png',
            'open' => '<code | download>\n',
            'close' => '\n</code>',
        );
    }
}
