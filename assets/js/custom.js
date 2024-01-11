$(document).ready(function() {
    $(".notification-drop .item-noti").on('click',function() {
      $(this).find('.notification').toggle();
    });
  });