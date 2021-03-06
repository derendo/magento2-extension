<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Listing\Moving;

class GetFailedProducts extends \Ess\M2ePro\Controller\Adminhtml\Listing\Moving
{
    //########################################

    public function execute()
    {
        $block = $this->createBlock(
            'Listing\Moving\FailedProducts','',
            ['data' => [
                'grid_url' => $this->getUrl('*/listing_moving/failedProductsGrid', array('_current'=>true))
            ]]
        );

        $this->setAjaxContent($block);
        return $this->getResult();
    }

    //########################################
}