<?php declare(strict_types=1);

namespace Shopware\Api\Currency\Event\Currency;

use Shopware\Api\Entity\Search\IdSearchResult;
use Shopware\Context\Struct\ShopContext;
use Shopware\Framework\Event\NestedEvent;

class CurrencyIdSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'currency.id.search.result.loaded';

    /**
     * @var IdSearchResult
     */
    protected $result;

    public function __construct(IdSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ShopContext
    {
        return $this->result->getContext();
    }

    public function getResult(): IdSearchResult
    {
        return $this->result;
    }
}