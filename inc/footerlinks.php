<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<!-- Jquery JS -->
<script>
    // sub menu js starts here
    document.addEventListener("DOMContentLoaded", function() {

        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {
            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.megasubmenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.has-submenu a').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('megasubmenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }
                    }
                });
            }) // end foreach
        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
    $(document).ready(function() {
        // Mobile Nav js starts here
        $('header .canvas-icon i').click(function() {
            $("header .mobile-header").addClass('show');
        });
        $('header .mobile-header .cancel').click(function() {
            $("header .mobile-header").removeClass('show');
        });
        // Mobile Nav js ends here
        // product add and sub 
        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
        // product add and sub 
        // loader starts here
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        // loader starts here
        // wishlist icon js starts here
        $('i.fa-heart-o').click(function() {
            $(this).toggleClass('fa-heart').css('color', '#FC5112').toggleClass('fa-heart-o')
        });
        // wishlist icon js ends here
    });
</script>