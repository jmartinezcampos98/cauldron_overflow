<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{any_word}", name="app_question_show")
     */
    public function show($any_word)
    {
        $answers = [
            'Make sure your cat is sitting still',
            'Honestly, I like furry shoes better',
            'Maybe try saying the spell backwards',
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $any_word)),
            'answers' => $answers,
        ]);
    }

}