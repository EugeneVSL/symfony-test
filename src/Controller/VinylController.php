<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $tracks = [
            'Gangsta\'s Paradise - Coolio',
            'Waterfalls - TLC',
            'Creep - Radiohead',
            'Kiss from a rose - Seal'
        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PG & Jams',
            'tracks' => $tracks
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse($slug = null): Response
    {
        if($slug) {
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = "All Genres";
        }
        return new Response('Breakup vinyl? Angsty 90s rock Browse for collection.');
    }
}