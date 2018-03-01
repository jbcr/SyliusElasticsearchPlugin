<?php

declare(strict_types=1);

namespace BitBag\SyliusElasticsearchPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class BitBagSyliusElasticSearchPlugin extends Bundle
{
    use SyliusPluginTrait;
}
