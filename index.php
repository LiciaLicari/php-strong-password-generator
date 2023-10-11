<!-- Descrizione

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<?php
$password_length = $_GET['password_length'];
//var_dump($password_length);

function generatePsw(int $length)
{

    $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&/()?^*#-_'; /* characters length 76 */

    $generate_password = '';
    for ($i = 0; $i < $length; $i++) {
        $generate_password .= substr($characters, rand(0, (strlen($characters))), 1);
    };

    return $generate_password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strong psw generator</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
    </header>


    <main>
        <div class="container my-5">
            <div class="row my-3 d-flex justify-content-center align-items-center">
                <h1 style="color:rgba(255,80,192,100);" class="mb-2 d-flex justify-content-center align-items-center">Strong Password Generator</h1>
                <h6 style="color:rgba(167,114,252,100);" class="mb-4 d-flex justify-content-center align-items-center">&#128126; Genera un password sicura &#128126;</h6>
            </div>
            <form class="py-4 m-4" method="GET">
                <div class="row mb-3">
                    <label for="password_length" class="col-4 col-form-label">Lunghezza password:</label>
                    <div class="col-8">
                        <input type="number" class="form-control border-info bg-dark text-white" name="password_length" id="password_length" placeholder="immetti o scegli il numero di caratteri desiderati">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-info" style="color:rgba(167,114,252,100);">Genera</button>
                    </div>
                </div>
                
            </form>
            <div class="row">
                <div class="col-6 m-4 align-items-center justify-content-center">
                    <h5 style="color:rgba(167,114,252,100)">La tua password da <?php echo $password_length; ?> caratteri:</h5>
                    <span class="text-wrap text-info p-1" style="background-color:rgba(167,114,252,100);"><?php echo generatePsw($password_length); ?></span>
                </div>
            </div>





        </div>
    </main>


    <footer>

    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>