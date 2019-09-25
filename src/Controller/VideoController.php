<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FFMpeg;

class VideoController extends AbstractController
{
    public function displayVideos()
    {
        require '../vendor/autoload.php';
        $directory = '../public/videos';

        $finder = new Finder();
        // find all files in the current directory
        $finder->files()->in($directory);
        
        // check if there are any search results
        if ($finder->hasResults()) {
            // ...
        }

        $videos = array();
        $videosPreview = array();
        foreach ($finder as $file) {
            $myVideo = array();
            $absoluteFilePath = $file->getRealPath();
            $fileNameWithExtension = $file->getRelativePathname();
            array_push($videos, $fileNameWithExtension);

            $ffprobe = FFMpeg\FFProbe::create();
            $videoLenth = $ffprobe
                ->format('../public/videos/'.$fileNameWithExtension) // extracts file informations
                ->get('duration'); 

            for ($i=0; $i < $videoLenth; $i+= 30) { 
                $ffmpeg = FFMpeg\FFMpeg::create();
                $video = $ffmpeg->open($directory.'/'.$fileNameWithExtension);
                $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($i));
                $frame->save($fileNameWithExtension.'_preview_'.$i.'.jpg');
                array_push($myVideo, $fileNameWithExtension.'_preview_'.$i.'.jpg');
            }
            array_push($videosPreview, $myVideo);
        }

        return $this->render('videos.html.twig', [
            'videos' => $videos,
            'videosPreview' => $videosPreview
        ]);
    }
}