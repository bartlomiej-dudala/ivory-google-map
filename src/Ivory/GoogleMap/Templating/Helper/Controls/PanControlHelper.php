<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Templating\Helper\Controls;

use Ivory\GoogleMap\Controls\PanControl;

/**
 * Pan control helper.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class PanControlHelper
{
    /** @var \Ivory\GoogleMap\Templating\Helper\Controls\ControlPositionHelper */
    protected $controlPositionHelper;

    /**
     * Creates a pan control helper.
     *
     * @param \Ivory\GoogleMap\Templating\Helper\Controls\ControlPositionHelper $controlPositionHelper The control position helper.
     */
    public function __construct(ControlPositionHelper $controlPositionHelper = null)
    {
        if ($controlPositionHelper === null) {
            $controlPositionHelper = new ControlPositionHelper();
        }

        $this->setControlPositionHelper($controlPositionHelper);
    }

    /**
     * Gets the control position helper.
     *
     * @return \Ivory\GoogleMap\Templating\Helper\Controls\ControlPositionHelper The control position helper.
     */
    public function getControlPositionHelper()
    {
        return $this->controlPositionHelper;
    }

    /**
     * Sets the control position helper.
     *
     * @param \Ivory\GoogleMap\Templating\Helper\Controls\ControlPositionHelper $controlPositionHelper The control position helper.
     */
    public function setControlPositionHelper(ControlPositionHelper $controlPositionHelper)
    {
        $this->controlPositionHelper = $controlPositionHelper;
    }

    /**
     * Renders a pan control.
     *
     * @param \Ivory\GoogleMap\Controls\PanControl $panControl The pan control.
     *
     * @return string The JS output.
     */
    public function render(PanControl $panControl)
    {
        return sprintf('{"position":%s}', $this->controlPositionHelper->render($panControl->getControlPosition()));
    }
}
