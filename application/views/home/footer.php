 <div class="menu-bottom">
            <ul>
                <li><a href="#">CATERING</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">OUR STORY</a></li>
                <li><a href="#">F.A.Q</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div>

        <footer>
            <span>Design and Developmen by </span><a href="">Batu Web Design</a>
        </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                if ($('#tabs-swipe-demo').length) {
                    $('#tabs-swipe-demo').tabs({ 'swipeable': true});
                }
            });

        </script>
        <script>
        $(".button-collapse").sideNav();
        </script>
        <!-- <script type="text/javascript">
            $('#t1').addClass('animated bounceOutLeft');
        </script> -->
    </body>
</html>
