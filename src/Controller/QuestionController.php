<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/questions/{any_word}")
     */
    public function show($any_word)
    {
        $answers = [
            'Make sure your cat is sitting still',
            'Honestly, I like furry shoes better',
            'Maybe try saying the spell backwards',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $any_word)),
            'answers' => $answers,
        ]);
    }

}