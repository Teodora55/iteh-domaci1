<?php
    include 'dbb.php';
    include 'model/user.php';

    session_start();
    if(isset($_POST['login']) ){
        $email = $_POST['email'];
        $password = $_POST['password'];
         $user = new User(null,$email,$password,null,null);
        
         $status = User::loginUser($conn,$user);
        if($status->num_rows > 0){

            $_SESSION['ulogovaniKorisnik'] = User::getUserByEmail($email,$conn);
            header('Location: pocetna.php'); //ako je korisnik ulogovan mozemo da ga posaljemo na glavnu stranicu
        }else{
            echo "<script>alert('Pogresan email ili lozinka');</script>";
        }
    }

    if(isset($_POST['register']) ){ //kada korisnik klikne dugme register
        //preuzimamo podatke iz forme 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];

        if($password===$password2){
            $user = new User($username,$email,$password,$firstname,$lastname);

            $status = User::registerUser($conn,$user);
    
            if($status){
                echo "Registrovan";
                $_SESSION['ulogovaniKozmeticar'] = User::getUserByEmail($email,$conn);
                header('Location: pocetna.php'); //ako je korisnik ulogovan mozemo da ga posaljemo na glavnu stranicu
            }else{
                echo "GRESKA";
            }
        }else{
            echo '<script>alert("Lozinke moraju da se poklapaju")</script>';
        }
    }

?>