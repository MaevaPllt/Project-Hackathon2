<?php

namespace ContainerMUOyZVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LrqFrI6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lrqFrI6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lrqFrI6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'buyerRepository' => ['privates', 'App\\Repository\\BuyerRepository', 'getBuyerRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'cityRepository' => ['privates', 'App\\Repository\\CityRepository', 'getCityRepositoryService', true],
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'farmerRepository' => ['privates', 'App\\Repository\\FarmerRepository', 'getFarmerRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'slugify' => ['privates', 'App\\Service\\Slugify', 'getSlugifyService', true],
            'transactionRepository' => ['privates', 'App\\Repository\\TransactionRepository', 'getTransactionRepositoryService', true],
        ], [
            'buyerRepository' => 'App\\Repository\\BuyerRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'cityRepository' => 'App\\Repository\\CityRepository',
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'farmerRepository' => 'App\\Repository\\FarmerRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'slugify' => 'App\\Service\\Slugify',
            'transactionRepository' => 'App\\Repository\\TransactionRepository',
        ]);
    }
}
