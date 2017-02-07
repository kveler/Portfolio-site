<?php

class database
{
    public function __construct()
    {
        $conn = new mysqli('localhost', 'root', '', 'portfolio');
        var_dump($conn);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }

    private function createVariables(){
        var_dump($conn);
        $inputNaam = $_POST['inputNaam'];
        $inputAdres = $_POST['inputAdres'];
        $inputNummer = $_POST['inputNummer'];
        $inputEmail = $_POST['inputEmail'];
        $inputGeboorte = $_POST['inputGeboorte'];
        $inputLeeftijd = $_POST['inputLeeftijd'];
        $inputNationaliteit = $_POST['inputNationaliteit'];
        $inputWebsite = $_POST['inputWebsite'];
    }

    public function updateDatabase(){
        $this->createVariables();

        var_dump($conn);

        $this->conn->query('UPDATE portfolio SET Naam = "' . $inputNaam . '",'
            . ' Adres = "' . $inputAdres . '",'
            . ' Nummer = "' . $inputNummer . '",'
            . ' Email = "' . $inputEmail . '",'
            . ' Geboorte = "' . $inputGeboorte. '",'
            . ' Leeftijd = "' . $inputLeeftijd . '",'
            . ' Nationaliteit = "' . $inputNationaliteit . '",'
            . ' Website = "' . $inputWebsite . '" WHERE id=1');

        echo "<script>  alert ('Wijzigingen zijn opgeslagen.'); window.location.href=window.location.href;</script>";
    }


}