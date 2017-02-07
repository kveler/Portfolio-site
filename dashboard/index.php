
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
include 'database.php';
?>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CV Aanpassen</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">CV <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">CV van Max</h1>

            <?php
            if(isset($_POST['opslaan'])){
                $database = new database();
                $database->updateDatabase();

            }
            ?>

            <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <h3>Persoonlijke gegevens</h3><br/>
            <div class="form-group">
                <label for="inputNaam" class="col-sm-2 control-label">Naam</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputNaam" placeholder="Voor en achternaam">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputAdres" class="col-sm-2 control-label">Adres</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputAdres" placeholder="Straat, huisnummer, woonplaats">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputNummer" class="col-sm-2 control-label">Telefoon nummer</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputNummer" placeholder="Telefoonnummer">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="inputEmail" placeholder="Mail adres">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputGeboorte" class="col-sm-2 control-label">Geboortedatum en plaats</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputGeboorte" placeholder="Geboortedatum en plaats">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputLeeftijd" class="col-sm-2 control-label">Leeftijd</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="inputLeeftijd" placeholder="Leeftijd">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputNationaliteit" class="col-sm-2 control-label">Nationaliteit</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputNationaliteit" placeholder="nationaliteit">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWebsite" class="col-sm-2 control-label">Website</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWebsite" placeholder="Website">
                </div>
            </div><br/><br/>

            <h3>Opleidingen</h3><br/>
            <div class="form-group">
                <label for="inputOpleiding1" class="col-sm-2 control-label">Opleiding</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputOpleiding1" placeholder="Opleiding informatie">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputOpleiding2" class="col-sm-2 control-label">Opleiding</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputOpleiding2" placeholder="Opleiding informatie">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputOpleiding3" class="col-sm-2 control-label">Opleiding</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputOpleiding3" placeholder="Opleiding informatie">
                </div>
            </div><br/><br/>

            <h3>Werkervaring</h3><br/>
            <div class="form-group">
                <label for="inputWerkervaring1" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring1" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring2" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring12" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring3" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring3" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring4" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring4" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring5" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring5" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring6" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring6" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring7" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring7" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring8" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring8" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputWerkervaring9" class="col-sm-2 control-label">Werkervaring</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputWerkervaring9" placeholder="Informatie over werkervaring">
                </div>
            </div><br/><br/>

            <h3>Talen, overige vaardigheden & hobby’s</h3><br/>
            <div class="form-group">
                <label for="inputTalen" class="col-sm-2 control-label">Talen</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputTalen" placeholder="Informatie over gesproken talen">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputNederlands" class="col-sm-2 control-label">Nederlands</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputNederlands" placeholder="Informatie over beheersing nederlands">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputComputer" class="col-sm-2 control-label">Computerkennis</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputComputer" placeholder="Informatie over computerkennis">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputRijbewijs" class="col-sm-2 control-label">Rijbewijs</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputRijbewijs" placeholder="Behaalde rijbewijzen">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputDiplomas" class="col-sm-2 control-label">Behaalde diploma's</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputDiplomas" placeholder="Informatie over de behaalde diploma's">
                </div>
            </div><br/><br/>
            <div class="form-group">
                <label for="inputProgrammeer" class="col-sm-2 control-label">Beheerste programmeertalen.</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputProgrammeer" placeholder="Informatie over de beheerste programmeertalen">
                </div>
            </div><br/><br/><br/>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="opslaan" value="Opslaan">
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
