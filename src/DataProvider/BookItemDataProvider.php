<?php

namespace App\DataProvider;

use App\Entity\Book;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;

final class BookItemDataProvider implements ItemDataProviderInterface
{
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])    {
        if (Book::class !== $resourceClass) {
          throw new ResourceClassNotSupportedException();
        }

        // Retrieve the blog post item from somewhere then return it or null if not found
        return new Book($id, 'My awesone book');
    }
}
