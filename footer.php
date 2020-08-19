<footer id="colophon" class="site-footer clearfix">
    <?php
        global $myplugin;
        $optionTheme  = $myplugin->themeSettings->getSettings();
    ?>
    <div id="quaternary" class="sidebar-container ">
        <div class="sidebar-inner">
            <div class="widget-area clearfix">
                <div id="azh_widget-3" class="widget widget_azh_widget"><div class="footer-1 bg-dark" data-group="footer">
                        <div class="container text-center">
                            <img class="img-responsive margin-auto" src="<?php echo !empty($optionTheme['awe_footer_logo']) ? esc_url($optionTheme['awe_footer_logo']) : '' ?>" alt="">
                            <?php
                                wp_nav_menu(
                                    [
                                        'theme_location' => 'awesome-footer-menu',
                                        'container' => '',
                                        'menu_class'     => 'copyright clearfix',
                                        'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
                                    ]
                                );
                            ?>
                            <p><?php echo !empty($optionTheme['awe_footer_copyright']) ? trim($optionTheme['awe_footer_copyright']) : '' ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/design-construct/js/js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var simpleLikes = {"ajaxurl":"http:\/\/azexo.com\/madison\/restaurant\/wp-admin\/admin-ajax.php","like":"Like","unlike":"Unlike"};
    /* ]]> */
</script>

<script type="text/javascript">
    /* <![CDATA[ */
    var azexo = {"ajaxurl":"http:\/\/azexo.com\/madison\/restaurant\/wp-admin\/admin-ajax.php","logged_in":"","nonce":"618ee57576","homeurl":"http:\/\/azexo.com\/madison\/restaurant","templateurl":"http:\/\/azexo.com\/madison\/restaurant\/wp-content\/themes\/restaurant"};
    /* ]]> */
</script>
<?php wp_footer() ?>

<script>
    jQuery(document).ready(function($) {
        $('#primary-menu > li > a').addClass('menu-link');
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        //$( document ).ajaxStart(function() {
        //});


        for (var i = 0; i < document.forms.length; ++i) {
            var form = document.forms[i];
            if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="XrUsGEYAeiJKVt" value="sBFV6x5YgM@HGN" />'); }
            if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="KbloPAGL" value="Yrx*h0PA" />'); }
            if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="apwJkTuZOvABt" value="[JfUA70GFZPI1" />'); }
            if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="mjgrWIGNhPRO" value="VWPIO7rpQS0Y" />'); }
        }


        $(document).on('submit', 'form', function () {
            if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="XrUsGEYAeiJKVt" value="sBFV6x5YgM@HGN" />'); }
            if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="KbloPAGL" value="Yrx*h0PA" />'); }
            if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="apwJkTuZOvABt" value="[JfUA70GFZPI1" />'); }
            if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="mjgrWIGNhPRO" value="VWPIO7rpQS0Y" />'); }
            return true;
        });


        jQuery.ajaxSetup({
            beforeSend: function (e, data) {

                //console.log(Object.getOwnPropertyNames(data).sort());
                //console.log(data.type);

                if (data.type !== 'POST') return;

                if (typeof data.data === 'object' && data.data !== null) {
                    data.data.append("XrUsGEYAeiJKVt", "sBFV6x5YgM@HGN");
                    data.data.append("KbloPAGL", "Yrx*h0PA");
                    data.data.append("apwJkTuZOvABt", "[JfUA70GFZPI1");
                    data.data.append("mjgrWIGNhPRO", "VWPIO7rpQS0Y");
                }
                else {
                    data.data =  data.data + '&XrUsGEYAeiJKVt=sBFV6x5YgM@HGN&KbloPAGL=Yrx*h0PA&apwJkTuZOvABt=[JfUA70GFZPI1&mjgrWIGNhPRO=VWPIO7rpQS0Y';
                }
            }
        });

    });
</script>

        <div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
        <div id="lightbox" class="lightbox" style="display: none;">
            <div class="lb-outerContainer">
                <div class="lb-container">
                    <img class="lb-image" src="http://azexo.com/madison/restaurant/?fbclid=IwAR06dtVhcq52gnvo5CGsBKZh7ujaz7HEgxOJyv2E2PeV3xM-NrrSD8bbYeI">
                    <div class="lb-nav">
                        <a class="lb-prev" href="http://azexo.com/madison/restaurant/?fbclid=IwAR06dtVhcq52gnvo5CGsBKZh7ujaz7HEgxOJyv2E2PeV3xM-NrrSD8bbYeI"></a>
                        <a class="lb-next" href="http://azexo.com/madison/restaurant/?fbclid=IwAR06dtVhcq52gnvo5CGsBKZh7ujaz7HEgxOJyv2E2PeV3xM-NrrSD8bbYeI"></a>
                    </div>
                    <div class="lb-loader">
                        <a class="lb-cancel"></a>
                    </div>
                </div>
            </div>
            <div class="lb-dataContainer">
                <div class="lb-data">
                    <div class="lb-details">
                        <span class="lb-caption"></span>
                        <span class="lb-number"></span>
                    </div>
                    <div class="lb-closeContainer">
                        <a class="lb-close"></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>