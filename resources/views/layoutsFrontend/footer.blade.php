<footer class="text-center py-sm-4 py-3">
    <div class="container py-xl-5 py-3">
        <div class="w3l-footer footer-social-agile mb-4">
            <ul class="list-unstyled">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="mx-1">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- copyright -->
        <p class="copy-right-grids text-light my-lg-5 my-4 pb-4">© 2023 Rotiku. All Rights Reserved | By Rotiku Web Maker</p>
        <!-- //copyright -->
    </div>
    <!-- chef -->
    <img src="{{ asset('assetsFrontend/images/chef.png') }}" alt="" class="img-fluid chef-style" />
    <!-- //chef -->
</footer>
<!-- //footer -->


{{-- jumlah barang yang di beli --}}

   

{{-- //jumlah barang yang di beli --}}

<!-- Js files -->
<!-- JavaScript -->
<script src="{{ asset('assetsFrontend/js/jquery-2.2.3.min.js') }}"></script>
<!-- Default-JavaScript-File -->

<!-- flexisel (for special offers) -->
<script src="{{ asset('assetsFrontend/js/jquery.flexisel.js') }}"></script>
<script>
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- script for tabs -->
<script>
    $(function() {

        var menu_ul = $('.faq > li > ul'),
            menu_a = $('.faq > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });
</script>
<!-- script for tabs -->

<!-- stats -->
<script src="{{ asset('assetsFrontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assetsFrontend/js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- menu-js -->
<script>
    $('.navicon').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('navicon--active');
        $('.toggle').toggleClass('toggle--active');
    });
</script>
<!-- //menu-js -->

<!-- banner slider -->
<script src="{{ asset('assetsFrontend/js/image-slider.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assetsFrontend/css/image-slider.css') }}">
<!-- //banner slider -->

<!-- smooth scrolling -->
<script src="{{ asset('assetsFrontend/js/SmoothScroll.min.js') }}"></script>
<!-- move-top -->
<script src="{{ asset('assetsFrontend/js/move-top.js') }}"></script>
<!-- easing -->
<script src="{{ asset('assetsFrontend/js/easing.js') }}"></script>
<!--  necessary snippets for few javascript files -->
<script src="{{ asset('assetsFrontend/js/cakes-bakery.js') }}"></script>

<script src="{{ asset('assetsFrontend/js/bootstrap.js') }}"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

{{-- image slider --}}
<script>
    var arr = ["<?= asset('/assetsFrontend/images/1.jpg') ?>", "<?= asset('/assetsFrontend/images/2.jpg') ?>"]; //an array of image sources
    var pos = 0; //initializes image position in the array
    $(document).ready(function() {
        var interval = 5000; //interval for slide
        var loaderHtml = '';
        arr.forEach(function(src) {
            loaderHtml += '<img src="' + src + '">';
        });

        $('.load-images').html(loaderHtml);

        var htm = '';
        /* initializes the small circles html*/
        for (var i = 0; i < arr.length; i++) {
            htm += '<div id="' + i + '" class="circle" onclick="circleClick(' + i + ')"> </div> ';

        }

        $('#circles').html(htm); //show small circles
        $('#slider').html('<img src="' + arr[0] + '" class="img-slide image-animated"">'); //show first image
        $('#0').css({
            'background': '#fff',
            'color': '#fff'
        }); //sets the background of the first small circle to black


        /* Auto slides the images with the image sources array given as first argument and interval as second argument */
        function autoSlide(arr, interval) {

            setInterval(function() {
                $('.img-slide').css({
                    'opacity': '.1 !important'
                });
                pos++;
                if (pos > arr.length - 1) {
                    pos = 0;
                }

                $('#slider').html('<img src="' + arr[pos] + '" class="img-slide img' + pos +
                    ' image-animated">'); //shows image
                $('#' + pos).css({
                    'background': '#fff',
                    'color': '#fff'
                }); //sets background-color of circle representing the current active image to black
                $('#' + (pos - 1)).css({
                    'background': 'transparent',
                    'color': 'transparent'
                }); //sets background-color of circle before active to white
                if (pos == 0) {
                    $('#' + (arr.length - 1)).css({
                        'background': 'transparent',
                        'color': 'transparent'
                    });
                }

            }, interval);
        }
        /* end of function autoSlide */

        autoSlide(arr, interval); //calls function autoSlide

        /* displays next image */
        function next() {
            if (pos > arr.length - 2) {
                pos = -1;
            }
            $('#slider').html('<img src="' + arr[pos + 1] + '" class="img-slide image-animated">'); //show image
            pos++;

            $('#' + pos).css({
                'background': '#fff',
                'color': '#fff'
            }); //sets background-color of circle representing the current active image to black
            $('#' + (pos - 1)).css({
                'background': 'transparent',
                'color': 'transparent'
            }); //sets background-color of circle before active to white
            if (pos == 0) {
                $('#' + (arr.length - 1)).css({
                    'background': 'transparent',
                    'color': 'transparent'
                });
            }
        }
        /* end of function next  */

        /* displays previous image */
        function previous() {
            if (pos < 1) {
                pos = arr.length;
            }
            $('#slider').html('<img src="' + arr[pos - 1] + '" class="img-slide image-animated">');
            pos--;

            $('#' + pos).css({
                'background': '#fff',
                'color': '#fff'
            }); //sets background-color of circle representing the current active image to black
            $('#' + (pos + 1)).css({
                'background': 'transparent',
                'color': 'transparent'
            }); //sets background-color of circle before active to white
            if (pos == arr.length - 1) {
                $('#0').css({
                    'background': 'transparent',
                    'color': 'transparent'
                });
            }
        }
        /* end of function previous */

        /* onclick next */
        $('button#next').on('click', function(e) {
            e.preventDefault();
            next(); //call function next
        });
        /* end of onclick next */

        /* onclick previous */
        $('button#prev').on('click', function(e) {
            e.preventDefault();
            previous(); //call function previous
        });
        /* end of onclick previous */

    });

    /* displays image represented by the small circle */
    function circleClick(position) {
        if (position != pos) {
            $('#slider').html('<img src="' + arr[position] + '" class="img-slide image-animated">'); //show image

            $('#' + position).css({
                'background': '#fff',
                'color': '#fff'
            }); //sets background-color of circle representing the current active image to black
            $('#' + (pos)).css({
                'background': 'transparent',
                'color': 'transparent'
            }); //sets background-color of circle before active to white

            pos = position;
        }
        /* end of function circleClick */


    }
</script>

</body>

</html>
