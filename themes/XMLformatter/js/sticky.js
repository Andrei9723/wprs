  $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 110) {
            $('.menu-container').addClass( "fix-menu" );
              $(".slider").css("margin-top", "50px");

        } else {
            $('.menu-container').removeClass("fix-menu");
            $(".slider").css("margin-top", "0px");
          
        }

    });