<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Message;

/**
 * Message controller.
 *
 * @Route("/tweet")
 */
class TweetController extends Controller
{

    /**
     * @Route("/{id}", name="show_one_tweet")
     * @Method("GET")
     **/
    public function showTweetAction(Message $message)
    {
        return $this->render('showTweet.html.twig', array(
            'message' => $message));
    }
}
