/**
 *
 * Datepicker config
 * http://www.malot.fr/bootstrap-datetimepicker/demo.php
 *
 */

(function($) {

  // Setup datepicker
  function toggle_mobile_nav() {
    $(".js-datetime").datetimepicker({
      format: "dd MM yyyy - hh:ii",
      minuteStep: 30,
    });
  }

  // Start the show
  $(document).ready(function () {

    toggle_mobile_nav();

  });

})(jQuery);