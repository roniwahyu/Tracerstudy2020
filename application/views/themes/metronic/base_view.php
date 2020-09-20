<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $title; ?>
    </title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <?php echo $metadata; ?>
    <!--end::Fonts -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?= themes_url('general') ?>/animate.css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('general') ?>/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Fonts -->
    <link href="<?= themes_url('custom') ?>/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('custom') ?>/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('custom') ?>/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('custom') ?>/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('default/skins') ?>/header/base/light.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('default/skins') ?>/header/menu/light.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('default/skins') ?>/brand/dark.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('default/skins') ?>/aside/dark.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('default/base') ?>/style.bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= themes_url('custom/datatables') ?>/datatables.bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= assets_url('js/parsley') ?>/parsley.css" rel="stylesheet" type="text/css" />
    <link href="<?= assets_url('css') ?>/custom.css" rel="stylesheet" type="text/css" />
    <?php echo $css; ?>
    <?php echo $header_assets; ?>
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?php echo assets_url('images') ?>/icon.ico" />
</head>
<!-- end::Head -->
<!-- begin::Body -->

<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <?php echo $body ?>
    <section id="imgoverlay" style="display:none">
        <div id="overlay">
            <i class="fa fa-spinner fa-spin spin-big"></i>
            <!-- <p>Loading...harap menunggu</p> -->
        </div>
    </section>
    <script>
    var KTAppOptions = {

        "colors": {

            "state": {

                "brand": "#366cf3",

                "light": "#ffffff",

                "dark": "#282a3c",

                "primary": "#5867dd",

                "success": "#34bfa3",

                "info": "#36a3f7",

                "warning": "#ffb822",

                "danger": "#fd3995"

            },

            "base": {

                "label": [

                    "#c5cbe3",

                    "#a1a8c3",

                    "#3d4465",

                    "#3e4466"

                ],

                "shape": [

                    "#f0f3ff",

                    "#d9dffa",

                    "#afb4d4",

                    "#646c9a"

                ]

            }

        }

    };
    </script>
    <!-- end::Global Config -->
    <!-- end::Global Config -->
    <!--begin:: Global Mandatory Vendors -->
    <script src="<?= themes_url('general') ?>/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/wnumb/wNumb.js" type="text/javascript"></script>
    <script src="<?= themes_url('general')?>/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?= themes_url('general') ?>/sweetalert2/dist/sweetalert2.min.js" rel="stylesheet" type="text/javascript"></script>
    <script src="<?php echo themes_url('default/base') ?>/scripts.bundle.min.js" type="text/javascript"></script>
    <script src="<?php echo themes_url('app/bundle/') ?>/app.bundle.min.js" type="text/javascript"></script>
    <!-- <script src="<?php //echo themes_url('app/custom/general') ?>/dashboard.min.js" type="text/javascript"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="<?php  echo themes_url('custom/datatables/')?>/datatables.bundle.min.js" type="text/javascript"></script>
    <script src="<?php  echo assets_url('js/parsley/')?>/parsley.min.js" type="text/javascript"></script>
    <script src="<?php  echo assets_url('js/parsley/i18n/')?>/id.js" type="text/javascript"></script>
    <script>
    WebFont.load({

        google: {

            "families": [

                "Poppins:300,400,500,600,700"

            ]

        },

        active: function() {

            sessionStorage.fonts = true;

        }

    });
    </script>
    <script type="text/javascript">
    $(document).ajaxStart(function() {
        $("#imgoverlay").fadeIn(50);
    });
    $(document).ajaxComplete(function() {
        $("#imgoverlay").fadeOut(200);
    });
    </script>
    <?php echo $js; ?>
    <?php echo $footer_assets; ?>
    <!--end::Page Scripts -->
</body>
<!-- end::Body -->

</html>