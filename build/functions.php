
<?php

function kayitekle()
{
    if ($_POST) {
        if ($_POST["name"] == "" or $_POST["surname"] == "" or $_POST["number"] == "") {
            echo '<script>alert("Boşlukları Doldurunuz!!!");</script>';
        } else {
            include('Connectmysql.php');
            $sql = "INSERT INTO rehberimtable (firstname, lastname, Telefon_numarasi) VALUES ('" . $_POST['name'] . "', '" . $_POST['surname'] . "', '" . $_POST['number'] . "')";
            if ($conn->connect_errno) {
                echo "Hata Var. " . $conn->connect_errno;
            } elseif ($conn->query($sql) === TRUE) {
                $conn->close();
                echo '<script>window.location.href ="index.php";</script>';
            } else
                echo '<script>alert("Sıradışı Durum Mevcuttur.");</script>';
            $conn->close();
        }
    }
}


function kay(){
    
}
function kayitsil($s_id)
{
    include("Connectmysql.php");
    $sql = "DELETE FROM rehberimtable WHERE id=$s_id";
    $conn->query($sql);
    $conn->close();
    echo '<script>window.location.href ="index.php";</script>';
}


function kayitduzenle($duz_id) {
    include("Connectmysql.php");

}
?>