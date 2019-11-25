<?php

use Gedmo\Uploadable\MimeType\MimeTypeGuesserInterface;
namespace Stof\DoctrineExtensionsBundle\Uploadable;
use Symfony\Component\Mime\MimeTypes;

class MimeTypeGuesserAdapter implements MimeTypeGuesserInterface
{
    public function guess($filePath)
    {
        return MimeTypes::getDefault()->guess($filePath);
    }

}
