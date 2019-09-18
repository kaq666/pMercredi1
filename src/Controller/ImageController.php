<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImageController extends AbstractController
{
    public function displayImages()
    {
        $finder = new Finder();
        // find all files in the current directory
        $finder->files()->in('../public/images');
        
        // check if there are any search results
        if ($finder->hasResults()) {
            // ...
        }

        $images = array();
        foreach ($finder as $file) {
            $absoluteFilePath = $file->getRealPath();
            $fileNameWithExtension = $file->getRelativePathname();
        
            array_push($images, $fileNameWithExtension);
        }

        return $this->render('images.html.twig', [
            'images' => $images
        ]);
    }
}