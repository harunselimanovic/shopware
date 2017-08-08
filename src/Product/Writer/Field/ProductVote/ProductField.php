<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductVote;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\VirtualField;

class ProductField extends VirtualField
{
    public function __construct()
    {
        parent::__construct('product', \Shopware\Product\Writer\Field\ProductVote\ProductUuidField::class);
    }
}