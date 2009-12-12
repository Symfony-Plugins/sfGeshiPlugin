<?php

/**
 * sfGeshiExample actions.
 *
 * @package     sfGeshiPlugin
 * @author      Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class sfGeshiExampleActions extends sfActions
{
    /**
     * Demo action. Displays code highlighting example.
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $geshi = new sfGeshi(implode("", file(__FILE__)), 'php');
        $this->code = $geshi->parse_code();
    }
}
