    <?php wp_footer(); ?>
<script src="https://cdn.rawgit.com/aFarkas/lazysizes/gh-pages/lazysizes.min.js"></script>
<?php if ( !wp_is_mobile() ) { ?>

    <!-- Facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=169368486461548";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <?php if (is_home() || is_front_page() || is_category() ) { ?>
    <!--banner-slider-->
    <script>//<![CDATA[
        $(function(){
            $('#banner-slider div:gt(0)').hide();
            setInterval(function(){
                $('#banner-slider div:first-child').fadeOut(500)
                .next('div').fadeIn(500)
                .end().appendTo('#banner-slider');
            }, 4000);
        });
    //]]>
    </script>
    <?php } ?>

<?php } ?>

    <!-- Sidr JS -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidr/jquery.sidr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#simple-menu').sidr({
                source: '#primary-navigation'
            });
        });
    </script>

  <!-- Download Links -->
    <script>
        $(document).ready(function() {
            // Open thank you page
            $('.open-pop').on('touchstart click', function(event){
                console.log('test');
                var link = $(this).attr('href');
                $('#gracias-wrapper').show('fast');
                $('#gracias-link').attr('href', link);
            });
            $('.cerrar-gracias').on('touchstart click', function(event){
                $('#gracias-wrapper').hide();
            });

            //hide it when clicking anywhere else except the popup and the trigger
            $(document).bind('click touch', function(event) {
              if (!$(event.target).parents().addBack().is('.open-pop')) {
                $('#gracias-wrapper').hide();
              }
            });

            // Stop propagation to prevent hiding "#tooltip" when clicking on it
           /* $('#gracias-wrapper').bind('click touch', function(event) {
              event.stopPropagation();
            }); */


         });
    </script>

<?php if( is_single() &&  get_post_type() != 'autores' ) { ?>
    <!--sidebar fija -->
    <script>
        $(function() {
            var offset = $('#sidebar').offset();
            var swidth = $('#sidebar').parent().width();
            $(window).scroll(function() {
                var bottomPadding = $('#footer').offset().top - $('#sidebar').height() - 60;
                if ($(window).scrollTop() > offset.top && $(window).scrollTop() < bottomPadding) {
                    $('#sidebar').css({
                        'position':'fixed',
                        'bottom':'',
                        'top':0,
                        'width': swidth,
                    });
                } else if ($(window).scrollTop() > offset.top && $(window).scrollTop() > bottomPadding) {
                    $('#sidebar').css({
                        'position':'absolute',
                        'top':'',
                        'bottom': '30px',
                        'width': swidth,
                    });
                } else {
                    $('#sidebar').css({
                        'position':'absolute',
                        'bottom':'',
                        'top': 0,
                        'width': swidth,
                    });
                };
            });
        });
    </script>
<?php }; ?>

<?php if( is_post_type_archive('autores') ) { ?>
    <!-- Buscador autores -->
    <script>
        $("#search-author").on("keyup", function() {

        function removeAccents(srt) {
            var map={
            'À':'A','Á':'A','Â':'A','Ã':'A','Ä':'A','Å':'A','Æ':'AE','Ç':'C','È':'E','É':'E','Ê':'E','Ë':'E','Ì':'I','Í':'I','Î':'I','Ï':'I','Ð':'D','Ñ':'N','Ò':'O','Ó':'O','Ô':'O','Õ':'O','Ö':'O','Ø':'O','Ù':'U','Ú':'U','Û':'U','Ü':'U','Ý':'Y','ß':'s','à':'a','á':'a','â':'a','ã':'a','ä':'a','å':'a','æ':'ae','ç':'c','è':'e','é':'e','ê':'e','ë':'e','ì':'i','í':'i','î':'i','ï':'i','ñ':'n','ò':'o','ó':'o','ô':'o','õ':'o','ö':'o','ø':'o','ù':'u','ú':'u','û':'u','ü':'u','ý':'y','ÿ':'y','Ā':'A','ā':'a','Ă':'A','ă':'a','Ą':'A','ą':'a','Ć':'C','ć':'c','Ĉ':'C','ĉ':'c','Ċ':'C','ċ':'c','Č':'C','č':'c','Ď':'D','ď':'d','Đ':'D','đ':'d','Ē':'E','ē':'e','Ĕ':'E','ĕ':'e','Ė':'E','ė':'e','Ę':'E','ę':'e','Ě':'E','ě':'e','Ĝ':'G','ĝ':'g','Ğ':'G','ğ':'g','Ġ':'G','ġ':'g','Ģ':'G','ģ':'g','Ĥ':'H','ĥ':'h','Ħ':'H','ħ':'h','Ĩ':'I','ĩ':'i','Ī':'I','ī':'i','Ĭ':'I','ĭ':'i','Į':'I','į':'i','İ':'I','ı':'i','Ĳ':'IJ','ĳ':'ij','Ĵ':'J','ĵ':'j','Ķ':'K','ķ':'k','Ĺ':'L','ĺ':'l','Ļ':'L','ļ':'l','Ľ':'L','ľ':'l','Ŀ':'L','ŀ':'l','Ł':'L','ł':'l','Ń':'N','ń':'n','Ņ':'N','ņ':'n','Ň':'N','ň':'n','ŉ':'n','Ō':'O','ō':'o','Ŏ':'O','ŏ':'o','Ő':'O','ő':'o','Œ':'OE','œ':'oe','Ŕ':'R','ŕ':'r','Ŗ':'R','ŗ':'r','Ř':'R','ř':'r','Ś':'S','ś':'s','Ŝ':'S','ŝ':'s','Ş':'S','ş':'s','Š':'S','š':'s','Ţ':'T','ţ':'t','Ť':'T','ť':'t','Ŧ':'T','ŧ':'t','Ũ':'U','ũ':'u','Ū':'U','ū':'u','Ŭ':'U','ŭ':'u','Ů':'U','ů':'u','Ű':'U','ű':'u','Ų':'U','ų':'u','Ŵ':'W','ŵ':'w','Ŷ':'Y','ŷ':'y','Ÿ':'Y','Ź':'Z','ź':'z','Ż':'Z','ż':'z','Ž':'Z','ž':'z','ſ':'s','ƒ':'f','Ơ':'O','ơ':'o','Ư':'U','ư':'u','Ǎ':'A','ǎ':'a','Ǐ':'I','ǐ':'i','Ǒ':'O','ǒ':'o','Ǔ':'U','ǔ':'u','Ǖ':'U','ǖ':'u','Ǘ':'U','ǘ':'u','Ǚ':'U','ǚ':'u','Ǜ':'U','ǜ':'u','Ǻ':'A','ǻ':'a','Ǽ':'AE','ǽ':'ae','Ǿ':'O','ǿ':'o'
            };
            var valueResult='';

            for (var i=0;i<srt.length;i++) {
                c=srt.charAt(i);
                valueResult+=map[c]||c;
            }

            return valueResult;

        }

        var value = removeAccents( $(this).val().toLowerCase() );

        $("li.autor-li").each(function(index) {

                $row = $(this);

                var id = removeAccents( $row.find("span").text().toLowerCase() );

                if (id.indexOf(value) == -1) {
                    $row.hide();
                }
                else {
                    $row.show();
                }
        });
    });
    </script>

<?php } ?>

</body>

</html>