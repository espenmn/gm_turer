<?php /* Template Name: Custom Tur 
        Template Post Type: post, page, event, tur
      */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Single Tur Template
 *
 * @package:       gm_turer
 * @file           single-tur.php
 * @author         Espen Moe-Nilssen
 * @copyright      GPL
 */

get_header(); ?>

<div id="content" class="<?php echo esc_attr( implode( ' ', responsive_get_content_classes() ) ); ?>">

	<?php get_template_part( 'loop-header', get_post_type() ); ?>

	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta', get_post_type() ); ?>

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>

					<?php if ( get_the_author_meta( 'description' ) != '' ) : ?>

						<div id="author-meta">
							<?php if ( function_exists( 'get_avatar' ) ) {
								echo get_avatar( get_the_author_meta( 'email' ), '80' );
							} ?>
							<div class="about-author"><?php _e( 'About', 'responsive' ); ?> <?php the_author_posts_link(); ?></div>
							<p><?php the_author_meta( 'description' ) ?></p>
						</div><!-- end of #author-meta -->

					<?php endif; // no description, no author's meta ?>

					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div><!-- end of .post-entry -->

				<div class="navigation">
					<div class="previous"><?php previous_post_link( '&#8249; %link' ); ?></div>
					<div class="next"><?php next_post_link( '%link &#8250;' ); ?></div>
				</div><!-- end of .navigation -->

				<?php get_template_part( 'post-data', get_post_type() ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav', get_post_type() );

	else :

		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	?>



<div class="widget">
    <h1>Tur til verdens største pløyeblokk&nbsp;<span class="enkel uticon-fottur" aria-hidden="true"></span></h1>
 
</div>

                    </div>
                    <div class="col g50">
                        
                        
<div class="widget facts cf">                
    <div class="col">
        <table>
            <tbody >
                <tr>
                    <th>Type:</th>
                    <td class="indent">
                        <span aria-hidden="true" class="uticon-fottur"></span>
                        <div>Fottur                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Lengde:</th>
                    <td class="indent">
                        <span aria-hidden="true" class="uticon-lengde"></span>
                        <div>Ca. 0,6 km </div>
                    </td>
                </tr>
                <tr>
                    <th>Varighet:</th>
                    <td class="indent">
                        <span aria-hidden="true" class="uticon-varighet"></span>
                        <div>
                            1 time
                            <span class="showmoreinfo">+</span>
                            <ul class="moreinfo visuallyhidden">
                                <li>Bereget gangtid for en voksen mann, i god form, uten pauser. Les mer om tidsberegning <a href="/artikkel/1.6678864/" title="Artikkel om tidsberegning av turer">her</a></li>
                            </ul>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <th>Gradering:</th>
                    <td class="indent">
                        <span class="diff_enkel"></span>
                        <div>
                            Enkel
                            <span class="showmoreinfo">+</span>
                            <ul class="moreinfo visuallyhidden">
                                <li>Alle turforslag på UT.no er gradert i henhold til Merkehåndboka. Les mer <a href="/artikkel/1.8404239/" title="Artikkel om merking av turer">her</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                    <tr data-facts="passer">
                        <th>Passer:</th>
                        <td>
                            <div data-passer="Barn" class="fixcase">Barn</div>
                        </td>
                    </tr>
            </tbody>
        </table>

    </div>
        <div class="col">
            <table>
                <tbody class="season">
                        <tr data-facts="omrade">
                            <th>Område:</th>
                            <td>
                                <div data-omrade="1" class="">
        <span data-omradenr="0"><a href="/omrade/52408144e7926dcf1500003c/">Skarvheimen</a></span>

</div>
                            </td>
                        </tr>
                    <tr>
                        <th>Sesong:</th>
                        <td>
                                    <div class="month" data-monthnumber="5">mai</div>
                                    <div class="month" data-monthnumber="6">jun</div>
                                    <div class="month" data-monthnumber="7">jul</div>
                                    <div class="month" data-monthnumber="8">aug</div>
                                    <div class="month" data-monthnumber="9">sep</div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                    </div>
                </header>
            </div>
            <div class="underborder flexbox-container meta-widget">
                <div class="col g50 box1">
                    <div class="leftborder">
                        

    <figure class="image widget brief">
        <noscript>
            <img src="https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-260.jpg" alt="Verdens største pløyeblokk - Foto: Kerim Hestnes Nisancioglu" title="Verdens største pløyeblokk - Foto: Kerim Hestnes Nisancioglu" />
        </noscript>
        <img src="data:image/gif;base64,R0lGODlhAwACAIABAP///////yH5BAEAAAEALAAAAAADAAIAAAICjF8AOw==" id="558ec1d106b9ce0600340976" class="js-img" data-srcset="[{&quot;150&quot; : &quot;https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-150.jpg&quot;},{&quot;260&quot; : &quot;https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-260.jpg&quot;},{&quot;500&quot; : &quot;https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-500.jpg&quot;},{&quot;800&quot; : &quot;https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-800.jpg&quot;},{&quot;1200&quot; : &quot;https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-full.jpg&quot;}]" alt="Verdens største pløyeblokk" />
            <figcaption>
                <div>
                        <p>Verdens største pløyeblokk</p>
                                            <small class="fr">
                            Foto: Kerim Hestnes Nisancioglu                         </small>
                </div>
            </figcaption>
    </figure>
    <script>
        require(['core/tools/image.loader'], function(Img) {
            Img.load('558ec1d106b9ce0600340976');
        });

        var popupItems = window.popupItems || [];
        var item = {
            src: 'https://s3-eu-west-1.amazonaws.com/jotunheimr/prod/xO/cs/ZP-full.jpg',
            title: 'Verdens største pløyeblokk - Foto: Kerim Hestnes Nisancioglu'
        }
        popupItems.push(item);
    </script>


                    </div>
                </div>
                <div class="col g50 fr box2">
                    <div class="rightborder">
<section class="map-container">
    
    <div class="fokuskart" id="map" aria-hidden="true"></div>

</section>                            <div class="mapcaption">
                                <div>
                                    <a href="/kart/?lat=60.6027238560962&amp;lng=7.50233427993045&amp;zoom=15&amp;ao=2.14771" class="uticon-kart utenfor">Stort kart</a>
                                    <a href="/tur/2.14771/gpx/" class="uticon-nedlasting utenfor" title="Last ned denne turen i GPX format">GPX spor</a>
                                </div>
                                        <div class="fylker">Fylke: Hordaland</div>

                            </div>
                    </div>
                </div>
                <div class="col g50 box3 clear">
                        <div class="widget eiere">

<div class="author-reference">
    <address class="author widget vcard">
        <div class="avatar">
            <a href="/gruppe/8.1819/" title="Mer om Universitetet i Bergen   ">                    
                <img src="//www2.turistforeningen.no/share/img/profil/767-profil.png" alt="Profilbilde for Universitetet i Bergen" />
            </a>
        </div>
            <div class="url fn org">
                Universitetet i Bergen
                <div class="metadata clear">
    <a href="/gruppe/8.1819/">Om gruppa</a><span aria-hidden="true"> | </span>
                    <a href="/finn/?types=trip&amp;id=8.1819&amp;type=gruppe">13 turforslag</a>&nbsp;
                </div>
            </div>
            
    </address>
</div>
                        </div>
                    <div class="widget">
                        <div class="beskrivelse-container">
                            <div class="beskrivelse">
                                <p><strong>I dalsiden over hyttefeltet nord for Finse ligger en stein som er så spesiell at den har fått sitt eget navn: Finseblokka. Du når den på en kort tur fra Finsehytta eller stasjonen</strong>.</p><p>Fra stasjonen krysser du jernbanelinjen og følger den merkede ruten mot Geiteryggshytta over Sankt Pål. Når du har passert de siste hyttene, vil du se en stor granittblokk like ved stien. Den har ligget der siden den store innlandsisen fra istiden smeltet bort under den for cirka 9000 år siden.</p><p>Det vil si, den svære steinen ligger ikke i ro. Den pløyer seg nedover og har laget et plogspor bak seg. Derfor kalles den en pløyeblokk. Foran blokken kan du se en voll av jordmasser som den har dratt med seg på ferden.</p><p>Selv om det nok finnes større slike blokker, er pløyeblokken på Finse den største som er dokumentert. Den veier 364 tonn og rugger seg nedover dalsiden fordi bakken under den fryser om vinteren og tiner om sommeren. Is har større volum enn vann, så når vannet i jorden fryser, blir underlaget tykkere, og steinblokken flyttes utover. Når isen tiner, faller blokken loddrett ned, litt lengre nede i dalen enn den var da frosten kom.</p><p>Det går ikke så fort, bare 0,5 centimeter i året. Det kan man regne ut fordi man vet hvor langt pløyeblokken har beveget seg siden isen smeltet bort for 9000 år siden.&nbsp;</p><p>På vei tilbake&nbsp;igjen&nbsp;kan du prøve å beregne hvor lenge&nbsp;det vil gå før Finseblokka krysser jernbanesporet.&nbsp;</p><p>UiB/Turspor: Kerim Nisancioglu og Ellen Viste</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col g50 fr box4">
                    <section class="widget map-profile">
    <h2>Høydeprofil</h2>
    <div id="hoydekurve" class="hoydekurve"></div>
</section>
                
                    
    <aside class="widget arival">
        <h2>Adkomst</h2>
        <p>
            Skal du kjøre bil østfra anbefaler vi at du parkerer på Geilo eller Ustaoset. Kommer du vestfra anbefaler vi parkering på Voss. Så tar du toget videre til Finse.
        </p>
    </aside>
    <aside class="widget arival">
        <h2>Adkomst med kollektivtransport</h2>
        <p>
            Tog til Finse stasjon fra Oslo eller Bergen. 
        </p>
    </aside>


                    <aside class="widget rutebeskrivelse">
    <h2>Veibeskrivelse fra Google Maps</h2>
    <p>La Google Maps vise deg veien frem. Du kan bruke den posisjonen du har nå, eller skrive inn stedsnavnet du reiser fra.</p>
    <div class="googlemapsrouting nostack">
        <div class="col g40">
            <div id="google_geoloc" class="knapp">
                <a href="#" title="Fra min posisjon"><span aria-hidden="true" class="navicon uticon-hoyre1"></span><span class="headfont">Fra min posisjon</span></a>
            </div>
        </div>
        <div class="col g20 center"> eller </div>
        <div class="col g40">
            <div id="google_nameloc" class="knapp">
                <a href="#" title="Fra stedsnavn"><span aria-hidden="true" class="navicon uticon-hoyre1"></span><span class="headfont">Fra sted</span></a>
            </div>
        </div>
        <div id="google_namefield" class="col namefield">
            <input placeholder="Stedsnavn eller søkeord" type="text" value="" name="saddr" id="saddr" />
        </div>
        <div id="google_errorloc" class="col g100 error">Feil...</div>
        <div id="google_findingloc" class="col g100 henter"><span class="uticon-spinner"></span><span>Finner posisjon…</span></div>
        <div id="google_openurl" class="knapp googleurl">
            <a href="http://maps.google.com/maps?daddr=,&amp;saddr=" target="_blank"><span aria-hidden="true" class="navicon uticon-ekstern"></span><span class="headfont">Vis rutebeskrivelsen</span></a>
        </div>
    </div>   
    <div class="metadata">Denne tjenesten leveres av Google Maps. UT.no har ikke ansvar for innhold eller tjenester levert av eksterne aktører.</div>
</aside>

<script>
    require(['jquery','cookie'], function ($) {
        var lat = 60.6027238560962;
        var lng = 7.50233427993045;
        var daddr = lat.toFixed(7) + ',' + lng.toFixed(7);    
        //var daddr = utConfig.modules[0].params.StartKoordinat.Punkter[1].toFixed(7) + ',' + utConfig.modules[0].params.StartKoordinat.Punkter[0].toFixed(7);

        function makeGoogleUrl(to, from) {
            var newurl = 'http://maps.google.com/maps?daddr=' + to + '&saddr=' + from;
            $('#google_openurl a').attr('href', newurl);
            $('#google_openurl').show();
        }

        function makeGeoposCookie(geopos) {
            var cookieJson = {
                'timestamp': geopos.timestamp,
                'coords': {
                    'latitude': geopos.coords.latitude,
                    'longitude': geopos.coords.longitude,
                    'altitude': geopos.coords.altitude,
                    'accuracy': geopos.coords.accuracy,
                    'altitudeAccuracy': geopos.coords.altitudeAccuracy,
                    'speed': geopos.coords.speed
                }
            };

            $.cookie('utSettings.geopos', JSON.stringify(cookieJson), { path: '/' });
        }

        function initiateGeolocation() {
            var geoOptions = {
                timeout: 2 * 60 * 1000,
                enableHighAccuracy: true,
                maximumAge: 0
            };
            navigator.geolocation.getCurrentPosition(handleGeolocationQuery, handleGeolocationErrors, geoOptions);
        };

        function handleGeolocationErrors(error) {
            $('.narhet a .navicon').removeClass('spinner').css('color', '#D99C17');
            $('#google_findingloc').hide();
            var feil;
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    feil = 'Geoposisjon avslått/ikke godtatt';
                    $('.narhet a').attr('title', feil);
                    $('#google_errorloc').text(feil).show();
                    break;

                case error.POSITION_UNAVAILABLE:
                    feil = 'Kunne ikke finne geoposisjon';
                    $('.narhet a').attr('title', feil);
                    $('#google_errorloc').text(feil).show();
                    break;

                case error.TIMEOUT:
                    feil = 'Henting av geoposisjon gikk ut på tid';
                    $('.narhet a').attr('title', feil);
                    $('#google_errorloc').text(feil).show();
                    break;

                default:
                    feil = 'Det oppstod en feil';
                    $('.narhet a').attr('title', feil);
                    $('#google_errorloc').text(feil).show();
                    break;
            }
        }

        function handleGeolocationQuery(geopos) {
            makeGeoposCookie(geopos);
            
            var date = new Date(geopos.timestamp);
            $('.narhet a').attr('title', 'Din posisjon var latitude: ' + geopos.coords.latitude.toFixed(7) + ' og longitude: ' + geopos.coords.longitude.toFixed(7) + ' (' + date.toLocaleString() + ')').find('.navicon').css('color', '#2668b1');
            $('#google_findingloc').hide();
            var saddr = geopos.coords.latitude.toFixed(7) + ',' + geopos.coords.longitude.toFixed(7);
            makeGoogleUrl(daddr, saddr);
        }
        
        $(window).load(function () {
            $('#google_geoloc a').click(function (evt) {
                evt.preventDefault();
                $('#google_nameloc').removeClass('aktiv');
                $(this).parent().addClass('aktiv');
                $('#google_openurl').hide();
                $('#google_namefield').hide();
                $('#google_errorloc').hide();

                var geopos = $.cookie("utSettings.geopos");
                
                if (geopos) {
                    geopos = JSON.parse(geopos);
                    var forGammel = ((new Date().getTime() - geopos.timestamp) / 60000) > 5 ? true : false;
                    if (forGammel) {
                        $('#google_findingloc').show();
                        initiateGeolocation();
                    } else {
                        var cookieCoords = geopos.coords.latitude.toFixed(7) + ',' + geopos.coords.longitude.toFixed(7);
                        makeGoogleUrl(daddr, cookieCoords);    
                    }
                } else {
                    $('#google_findingloc').show();
                    initiateGeolocation();
                }
               
            });

            $('#google_nameloc a').click(function (evt) {
                evt.preventDefault();
                $('#google_geoloc').removeClass('aktiv');
                $(this).parent().addClass('aktiv');
                $('#google_findingloc').hide();
                $('#google_errorloc').hide();
                $('#google_openurl').hide();
                var currloc = $('#google_namefield input').val();
                if (currloc != '') {
                    makeGoogleUrl(daddr, currloc);
                }
                else {
                    $('#google_openurl').hide();
                }

                $('#google_namefield').show().children('input').focus().on('keyup', function () {
                    var val = $(this).val();
                    makeGoogleUrl(daddr, val);
                });
                
            });
        });
    });
</script>

                    <div class="bgwrapper noprint" style="margin-left: 15px; margin-right: 15px">
    <div class="narmeste">Annonse</div>
    <!-- "Turforslagside_545x453" (section "Turforslagside") -->
    <div style="max-width: 545px">
        <script type="text/javascript" src="https://ad1.emediate.dk/eas?cu=33870;cre=mu;js=y;pageviewid=;target=_blank"></script>
    </div>
    <noscript>
        <a target="_blank" href="https://ad1.emediate.dk/eas?cu=33870;ty=ct;pageviewid=">
            <img src="https://ad1.emediate.dk/eas?cu=33870;cre=img;pageviewid=" alt="Cxense Display" width="545" height="453" style="border: 0px"/>
        </a>
    </noscript>
</div>
                </div>
                <div class="col g100 box5">
                    <div class="widget">
                        <div class="dato metadata">
                                <span>Sist oppdatert: </span><time datetime="2016-11-18">18.11.2016</time>
                        </div>
                        <div class="lisens metadata">
                            Tur til verdens største pløyeblokk av Universitetet i Bergen. Tilgjengelig under en <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.no">CC BY-SA 4.0 lisens</a>.
                        </div>
                        
                        <hr/>
                          <div class="deling cf nostack noprint">
                            <div class="col g25">&nbsp;</div>
                        
                            <div class="col g50">
                                <div class="deleknapper">
                                    <a data-share-service="facebook" href="https://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.ut.no%2ftur%2f2.14771%2f" class="ikonlenke" title="Del på Facebook" target="_blank"><span class="uticon-facebook"></span></a>
                                    <a data-share-service="twitter" href="https://twitter.com/intent/tweet?url=https%3a%2f%2fwww.ut.no%2ftur%2f2.14771%2f&amp;text=Tur+til+verdens+st%c3%b8rste+pl%c3%b8yeblokk" class="ikonlenke" title="Del på Twitter" target="_blank"><span class="uticon-twitter"></span></a>
                                    <a data-share-service="GooglePlus" href="https://plus.google.com/share?url=https%3a%2f%2fwww.ut.no%2ftur%2f2.14771%2f" class="ikonlenke" title="Del på Google +" target="_blank"><span class="uticon-googleplus"></span></a>
                                    <a data-share-service="Epost" href="mailto:?subject=UT.no:%20Tur%20til%20verdens%20st%C3%B8rste%20pl%C3%B8yeblokk&amp;body=Tur%20til%20verdens%20st%C3%B8rste%20pl%C3%B8yeblokk%0D%0A%0D%0A%20&amp;nbsp;I%20dalsiden%20over%20hyttefeltet%20nord%20for%20Finse%20ligger%20en%20stein%20som%20er%20s%C3%A5%20spesiell%20at%20den%20har%20f%C3%A5tt%20sitt%20eget%20navn:%20Finseblokka.%20Du%20n%C3%A5r%20den%20p%C3%A5%20e%E2%80%A6%0D%0A%0D%0ALes%20mer%3A%20https%3a%2f%2fwww.ut.no%2ftur%2f2.14771%2f" class="ikonlenke" title="Del med epost" target="_blank"><span class="uticon-epostikon"></span></a>
                                </div>
                            </div>
                            <div class="col g25">
                                <a href="/tur/2.14771/pdf/" id="lastnedpdf" class="ikonlenke" title="Last ned denne siden som PDF"><span class="uticon-pdf_fil" aria-hidden="true"></span><span class="visuallyhidden">Last med PDF</span></a>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
        <div class="bgwrapper noprint">
            <div style="margin-left: 15px; margin-right: 15px; padding-top: 15px; padding-bottom: 15px; margin-top: 15px;">
    <div class="narmeste">Annonse</div>
    <!-- "Turforslagside_1150x367" (section "Turforslagside") -->
    <script type="text/javascript" src="https://ad1.emediate.dk/eas?cu=33871;cre=mu;js=y;pageviewid=;target=_blank"></script>
    <noscript>
        <a target="_blank" href="https://ad1.emediate.dk/eas?cu=33871;ty=ct;pageviewid=">
            <img src="https://ad1.emediate.dk/eas?cu=33871;cre=img;pageviewid=" alt="Cxense Display" width="1150" height="367" style="border: 0px"/>
        </a>
    </noscript>
</div>
        </div>
        <div class="bgwrapper bgspacer noprint">
            
<section class="relatertinnhold cf">
    <div class="col g100">
        <div id="relaterteturerpartial" class="widget">
            
                <div class="flere fr"><a href="/finn/?types=trip&amp;id=2.14771&amp;type=tur">Flere turforslag</a></div>
            
            <div class="narmeste">Turforslag i n&#230;rheten</div>
                        
            <div class="henterrelatert"><span class="uticon-spinner"></span><span>Henter turer...</span></div>
            <div class="dummy clear"></div>
        </div>
    </div>
    <div class="col g100">
        <div id="relatertehytterpartial" class="widget">
            
                <div class="flere fr"><a href="/finn/?types=cabin&amp;id=2.14771&amp;type=tur">Flere hytter</a></div>
            <div class="narmeste">Hytter i n&#230;rheten</div>
            <div class="henterrelatert"><span class="uticon-spinner"></span><span>Henter hytter...</span></div>
            <div class="dummy clear"></div>
        </div>
    </div>
</section>
        </div>
        <div class="bgwrapper bgspacer wideonpad noprint">
            <div class="underborder meta-widget cf">
                <section class="webcams col g100">
                    <div class="widget cf" id="ut-webcams">
                    </div>
                </section>
                <section class="diskusjon col g100">
                    <div class="widget">
                            <div id="disqus_thread"></div> 
    <script type='text/javascript'>
        var disqus_shortname = 'utnotur';
        var disqus_developer = '0';
        var disqus_url = 'http://www.ut.no/tur/2.14771/';

        (function () {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script> 
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="https://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>

                    </div>
                </section>
            </div>
        </div>
    </article>
</div>




        <div class="grid">
            <footer class="ut-footer meta-widget cf">
                <div class="col">
                    <div class="widget">
                        
                        <nav>
                            <div class="fl">
                                <ul class="meny kjernesider cf">
                                    <li>
                                        <a class="footerlenke" href="/">Forsiden</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="/tur/">Turforslag</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="/hytte/">Hytter</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="/kart/">Kart</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="/omrade/">Områder</a>
                                    </li>
                                    <li>
                                        <span class="footerlenke"><a class="ekstern" href="http://www.turistforeningen.no/aktiviteter/">Kalendersøk (DNT)</a></span>
                                    </li>
                                    <li>
                                        <span class="footerlenke"><a class="ekstern" href="http://www.dntbutikken.no/">Nettbutikk (DNT)</a></span>
                                    </li>
                                </ul>
                                <ul class="meny nettsted">
                                    <li>
                                        <a class="footerlenke" href="http://sporsmalogsvar.ut.no/knowledgebase/articles/745092-om-ut-no">Om UT.no</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="https://www.dnt.no/personvern/">Om personvern og informasjonskapsler (cookies)</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="http://utno.uservoice.com/knowledgebase">Spørsmål og svar</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="http://sporsmalogsvar.ut.no/knowledgebase/articles/745107-kontakt-oss">Kontakt UT.no</a>
                                    </li>
                                    <li>
                                        <a class="footerlenke" href="http://sporsmalogsvar.ut.no/knowledgebase/articles/915783-annonsere-p%C3%A5-ut-no">Annonsere?</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="meny innhold">
                                <li>
                                    <a class="footerlenke" href="https://tur.app.dnt.no/login">Legg inn dine turer</a>
                                </li>
                            </ul>
                            <ul class="meny innhold">
                                <li>
                                    <span class="footerlenke">Lag eller organisasjon? <a href="http://sporsmalogsvar.ut.no/knowledgebase/articles/386526">Legg inn hytte</a>, <a href="http://sporsmalogsvar.ut.no/knowledgebase/articles/764454">legg inn turer</a></span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="widget">
                        <section class="clear">
                            <p class="partners">
                                <a class="dnt logo" href="http://www.turistforeningen.no/">
                                    <img alt="Den Norske Turistforening logo" src="/Content/Images/Logos/dnt-logo.png"/></a>
                            </p>
                            <p>
                                UT.no er en tjeneste fra
                                <br/>
                                Den Norske Turistforening<br/>
                                <br/>
                                Ansvarlig redaktør<br/>
                                Nils Øveraas
                            </p>
                            <p class="copyright">
                                Opphavsrett, der ikke annet er angitt, Den Norske Turistforening og NRK ©&nbsp;2008&nbsp;-&nbsp;2015. Den Norske Turistforening ©&nbsp;2015&nbsp;-&nbsp;2017
                            </p>
                        </section>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<div id="google_translate_disclaimer" class="mfp-hide">
    <div id="google_translate_disclaimer_wrapper">
        <div id="google_translate_disclaimer_contents">
            <div id="google_translate_disclaimer_norsk" class="disclaimer_tekst" style="display: none;">
                <h1>Bruk av Google Translate på UT.no</h1>
                <a href="#" id="disclaimer_show_english" style="margin-bottom: 15px; display: block;">Show in English</a>
                <p>UT.no tilbyr oversettelse av innholdet på nettstedet gjennom bruk av Google Translate, som en hjelp for brukere som ikke snakker norsk.</p>
                <p>Google Translate er en gratis og maskinbasert oversettelsestjeneste som automatisk oversetter tekster til flere språk. Ettersom tekster og innhold blir maskinoversatt, kan det forekomme feil eller mangler i oversettelsene. UT.no kan ikke kontrollere oversettelsene som blir gjort av Google Translate.</p>
                <p>Alle brukere av UT.no som benytter Google Translate eller andre tilsvarende oversettelsestjenester for å lese innholdet på andre språk gjør dette for egen risiko. UT.no er ikke ansvarlige for feil eller mangelfull oversettelse, og kan ikke bli holdt ansvarlig for skader eller situasjoner som måtte oppstå som et resultat av oversettelser fra Google Translate eller tilsvarende tjenester.</p>
                <div class="disclaimer_buttons" style="float: right;">
                    <div class="knapp" style="text-align: center; display: inline-block;">
                        <a href="#" title="Avbryt" style="padding: 5px 30px;" class="disclaimer_cancel">
                            <span class="headfont">Avbryt</span>
                        </a>
                    </div>
                    <div class="knapp" style="text-align: center; display: inline-block;">
                        <a href="#" title="Ok, jeg aksepterer" style="padding: 5px 30px;" class="disclaimer_accept">
                            <span class="headfont">Ok, jeg aksepterer</span>
                        </a>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div id="google_translate_disclaimer_english" class="disclaimer_tekst">
                <h1>Google Translate Disclaimer</h1>
                <a href="#" id="disclaimer_vis_norsk" style="margin-bottom: 15px; display: block;">Vis på norsk</a>
                <p>UT.no offers translation provided by Google Translate, to support site visitors around the world who would like to know more about our offering and services.</p>
                <p>Google Translate is a free, automated service that use technology and data to provide translations for informational purposes only. Translations through this service is not officially approved by our organization. UT.no cannot claim responsibility for content in any other language but Norwegian, and cannot guarantee accuracy or reliability of the translation provided.</p>
                <p>Any individual or party that choose to use Google Translate or similar tools for translation of UT.no content, do so at their own risk. UT.no is not responsible for any damages or issues that may occur due to translated content, that is not officially approved by the organization.</p>
                <div class="disclaimer_buttons" style="float: right;">
                    <div class="knapp" style="text-align: center; display: inline-block;">
                        <a href="#" title="Cancel" style="padding: 5px 30px;" class="disclaimer_cancel">
                            <span class="headfont">Cancel</span>
                        </a>
                    </div>
                    <div class="knapp" style="text-align: center; display: inline-block;">
                        <a href="#" title="I accept" style="padding: 5px 30px;" class="disclaimer_accept">
                            <span class="headfont">I accept</span>
                        </a>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>
    <div id="errorlog"></div>
<script>
    require(['ac'],
        function(ac) {
            var acurl = '/finn/autocomplete/?types=trip%2Ccabin%2Comr%C3%A5de%2Cgruppe%2Cpoi%2Cpoi2%2Cartikkel';
            ac.init('.sok input', acurl);
        });
    require(['geolocation'],
        function(geo) {
            geo.init('Tur');
        });
</script>

    <script>
        require(['core/tools/CoreHeight']);

        require(['core/tools/adScaler'], function (adResizer) {
            adResizer.rescaleAds();
        });

        require(['core/tools/CreatePDF'], function (pdf) {
            var url = '/pdf/2.14771/';
            pdf.create(url);
        });

        require(['relaterte'], function(relaterte) {
            relaterte.hentObjekter('/tur/2.14771/relaterteturer/', '2.14771', 'relaterteturerpartial');
            relaterte.hentObjekter('/tur/2.14771/relatertehytter/', '2.14771', 'relatertehytterpartial');
            relaterte.hentWebcams('60.6027238560962', '7.50233427993045', 'ut-webcams', 6);
        });

        require(['sistbesokt'], function (recent) {
            recent.addToList('2.14771','tur', 'Tur til verdens største pløyeblokk','enkel','fottur','Fottur');
        });

        
    </script>


<script type="text/javascript">function googleTranslateElementInit() {
    new google.translate.TranslateElement({
            pageLanguage: 'no',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false,
            gaTrack: true,
            gaId: 'UA-43617939-4'
        },
        'google_translate_element');
    require(['ut-oversettelse-disclaimer'], function (disclaimer) {
        disclaimer({
            interceptElementSelector: '#google_translate_intercept',
            translateElementSelector: '#google_translate_element',
            disclaimerSelector: '#google_translate_disclaimer',
            allDisclaimerTextSelector: '.disclaimer_tekst',
            norwegianDisclaimerSelector: '#google_translate_disclaimer_norsk',
            switchToNorwegianLink: '#disclaimer_vis_norsk',
            englishDisclaimerSelector: '#google_translate_disclaimer_english',
            switchToEnglishLink: '#disclaimer_show_english',
            acceptDisclaimer: '.disclaimer_accept',
            cancelDisclaimer: '.disclaimer_cancel',
        });
    });
}</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
            function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-43617939-4', 'www.ut.no');
    ga('set', 'anonymizeIp', true);
    ga('set', 'forceSSL', true);
    ga('send',
        'pageview'
    , '/tur/2.14771/' );
</script>



<script>
    (function() {
        var uv = document.createElement('script');
        uv.type = 'text/javascript';
        uv.async = true;
        uv.src = '//widget.uservoice.com/i1m1WQbwI4dMA7tn2Z2UEA.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(uv, s)
    })()
</script>
<script>
    UserVoice = window.UserVoice || [];
    UserVoice.push([
        'showTab', 'classic_widget',
        {
            mode: 'support',
            primary_color: '#2b2b2b',
            link_color: '#d63c51',
            support_tab_name: 'Ta kontakt eller meld om feil',
            tab_label: 'Kontakt UT.no',
            tab_color: '#FF5853',
            tab_position: 'middle-right',
            tab_inverted: false
        }
    ]);
</script>




</div><!-- end of #content -->

<!--?php get_sidebar(); ?-->
<?php get_footer(); ?>
