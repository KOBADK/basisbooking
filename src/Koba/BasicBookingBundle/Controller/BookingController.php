<?php
/**
 * @file
 * Contains BookingController.
 */

namespace Koba\BasicBookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class BookingController
 * @package Koba\BasicBookingBundle\Controller
 *
 * @Route("/booking")
 */
class BookingController extends Controller {
  /**
   * @Route("")
   * @Template()
   */
  public function indexAction() {
    return array();
  }
}
