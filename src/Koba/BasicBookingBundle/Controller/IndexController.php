<?php
/**
 * @file
 * Contains IndexController.
 */

namespace Koba\BasicBookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class IndexController
 * @package Koba\BasicBookingBundle\Controller
 *
 * @Route("/")
 */
class IndexController extends Controller {
  /**
   * @Route("")
   * @Template()
   */
  public function indexAction() {
    return array();
  }
}
