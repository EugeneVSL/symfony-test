<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a rose', 'artist' => 'Seal']
        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PG & Jams',
            'tracks' => $tracks
        ]);
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse($slug = null): Response
    {

        $genre = ($slug) ? ucwords(str_replace('-', ' ', $slug)) : null; 

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre
        ]);
    }
}