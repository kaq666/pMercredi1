<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VideoController extends AbstractController
{
    public function displayVideos()
    {
        $finder = new Finder();
        // find all files in the current directory
        $finder->files()->in('../public/videos');
        
        // check if there are any search results
        if ($finder->hasResults()) {
            // ...
        }

        $videos = array();
        foreach ($finder as $file) {
            $absoluteFilePath = $file->getRealPath();
            $fileNameWithExtension = $file->getRelativePathname();
        
            array_push($videos, $fileNameWithExtension);
        }

        return $this->render('videos.html.twig', [
            'videos' => $videos
        ]);
    }
}