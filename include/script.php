<!--== Javascript Plugins ==-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eO-IAC9PhPE5APzZDSs8W40ewuxnsu8"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/master.js"></script>

<!-- Paricle Add-On Files -->
<link rel="stylesheet" href="revolution/css/revolution.addon.particles4bf4.css?ver=1.0.3" />
<script src="revolution/js/revolution.addon.particles.min4bf4.js?ver=1.0.3"></script>

<script>
    var tpj = jQuery;
    var revapi6;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_6_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_6_1");
        } else {
            revapi6 = tpj("#rev_slider_6_1")
                .show()
                .revolution({
                    sliderType: "hero",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    particles: {
                        startSlide: "first",
                        endSlide: "last",
                        zIndex: "1",
                        particles: {
                            number: {
                                value: 100
                            },
                            color: {
                                value: "#ffffff"
                            },
                            shape: {
                                type: "triangle",
                                stroke: {
                                    width: 0,
                                    color: "#ffffff",
                                    opacity: 1
                                },
                                image: {
                                    src: ""
                                },
                            },
                            opacity: {
                                value: 0.3,
                                random: true,
                                min: 0.1,
                                anim: {
                                    enable: false,
                                    speed: 1,
                                    opacity_min: 0,
                                    sync: false
                                }
                            },
                            size: {
                                value: 10,
                                random: true,
                                min: 0.5,
                                anim: {
                                    enable: false,
                                    speed: 40,
                                    size_min: 1,
                                    sync: false
                                }
                            },
                            line_linked: {
                                enable: false,
                                distance: 200,
                                color: "#000000",
                                opacity: 0.2,
                                width: 1
                            },
                            move: {
                                enable: true,
                                speed: 1,
                                direction: "top",
                                random: true,
                                min_speed: 3,
                                straight: false,
                                out_mode: "out"
                            },
                        },
                        interactivity: {
                            events: {
                                onhover: {
                                    enable: true,
                                    mode: "bubble"
                                },
                                onclick: {
                                    enable: true,
                                    mode: "repulse"
                                }
                            },
                            modes: {
                                grab: {
                                    distance: 400,
                                    line_linked: {
                                        opacity: 0.5
                                    }
                                },
                                bubble: {
                                    distance: 400,
                                    size: 0,
                                    opacity: 0.05
                                },
                                repulse: {
                                    distance: 500
                                }
                            },
                        },
                    },
                    navigation: {},
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 0, 55],
                    },
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    },
                });
        }

        RsParticlesAddOn(revapi6);
    }); /*ready*/
</script>

<!-- Revolution js Files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/revolution.extension.actions.min.js"></script>
<script src="revolution/js/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/revolution.extension.migration.min.js"></script>
<script src="revolution/js/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/revolution.extension.video.min.js"></script>
<!--== Javascript Plugins End ==-->