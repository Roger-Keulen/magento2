<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\GraphQl\Argument\Find;

use Magento\Framework\GraphQl\Argument\ArgumentValueInterface;

/**
 * Specific interface for the find argument of a field used for filtering
 */
interface FindArgumentValueInterface extends ArgumentValueInterface
{
    /**
     * Return a structure as connective that defines a find argument used for filtering
     *
     * @return Connective
     */
    public function getValue();
}
