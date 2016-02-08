<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <title>Neon | Dashboard</title>

    <link rel="stylesheet" href="/admin/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="/admin/assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="/admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/admin/assets/css/neon-core.css">
    <link rel="stylesheet" href="/admin/assets/css/neon-theme.css">
    <link rel="stylesheet" href="/admin/assets/css/neon-forms.css">
    <link rel="stylesheet" href="/admin/assets/css/custom.css">

    <script src="/admin/assets/js/jquery-1.11.0.min.js"></script>
    <script>$.noConflict();</script>

    <!--[if lt IE 9]><script src="/admin/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('scripts')


</head>
<body class="page-body  page-fade">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    @include('admin.includes.side-nav')

    <div class="main-content">

        <div class="row">

       <div class="col-md-6"></div>


            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                <ul class="list-inline links-list pull-right">

                    <li>
                        <a href="extra-login.html">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>







@section('content')
@show

        <!-- Footer -->
        <footer class="main">

            &copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

        </footer>
    </div>

</div>



<script>


    var $ = jQuery;

    $('[name=select_all]').on('click', function(){

        if($(this).is(":checked")){
            $('.destroy').prop('checked', true);
            return;
        }

        $('.destroy').prop('checked', false);

    });

    $('#destroy_selected').on('click', function(){

        $('.destroy:checked').each(function(){

            var selectform = this.form;

            $.ajax({
                url: this.form.action,
                method: this.form.method,
                data: $(this.form).serialize(),
                error: function (request, status, error) {
                    $(selectform).submit();
                },
                success: function(){
                    $(selectform).closest('tr').hide();
                }
            });


        });


    });

</script>

<!-- Imported styles on this page -->
<link rel="stylesheet" href="/admin/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="/admin/assets/js/rickshaw/rickshaw.min.css">

<!-- Bottom scripts (common) -->
<script src="/admin/assets/js/gsap/main-gsap.js"></script>
<script src="/admin/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="/admin/assets/js/bootstrap.js"></script>
<script src="/admin/assets/js/joinable.js"></script>
<script src="/admin/assets/js/resizeable.js"></script>
<script src="/admin/assets/js/neon-api.js"></script>
<script src="/admin/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


<!-- Imported scripts on this page -->
<script src="/admin/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
<script src="/admin/assets/js/jquery.sparkline.min.js"></script>
<script src="/admin/assets/js/rickshaw/vendor/d3.v3.js"></script>
<script src="/admin/assets/js/rickshaw/rickshaw.min.js"></script>
<script src="/admin/assets/js/raphael-min.js"></script>
<script src="/admin/assets/js/morris.min.js"></script>
<script src="/admin/assets/js/toastr.js"></script>
<script src="/admin/assets/js/neon-chat.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="/admin/assets/js/neon-custom.js"></script>


<!-- Demo Settings -->
<script src="/admin/assets/js/neon-demo.js"></script>

</body>
</html>