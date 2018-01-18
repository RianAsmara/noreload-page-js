<!DOCTYPE html>
<html>
<title>MySite</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=width-device, initial-scale=1">

<!--css-->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/semanticUi/semantic.min.css">
<link rel="stylesheet" href="assets/custom/lombokcyber.css">

<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


<body>
    <nav class="navbar navbar-default" id="menu">
        <div class="jumbotron">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                        <a class="navbar-brand" href="#">MySite</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" data-target="programming"><i class="icon terminal" ></i> Programming</a></li>
                            <li><a href="#" data-target="server"><i class="icon server" ></i> Server Service</a></li>
                            <li><a href="#" data-target="network"><i class="icon wifi" ></i> Networking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container" id="konten">
        <?php include('programming.php'); ?>
    </div>

    <script type="text/javascript" src="assets/plugin/jquery.js"></script>
    <script type="text/javascript" src="assets/plugin/scrollspy.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var trigger = $('#menu ul li a'),
                container = $('#konten');

            trigger.on('click', function() {

                var $this = $(this)

                target = $this.data('target');

                container.load(target + '.php');

                return false;
            })
        });

    </script>
</body>


</html>
