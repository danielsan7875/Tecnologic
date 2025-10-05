 $(document).ready(function() {
    $('.vista-selector').click(function(e) {
      e.preventDefault();
      $('.vista-selector').removeClass('active');
      $(this).addClass('active');

      const target = $(this).data('target');
      $('.content-section').hide();
      $(target).fadeIn(300);
    });
  });