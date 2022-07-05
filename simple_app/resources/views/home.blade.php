<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kamil Rogalski">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>SunPage</title>
</head>
<body>
    <main>
        <header>
            <div class="left_header">
                <h2>SunPage</h2>
            </div>
            <div class="right_header">
                <a href="#" class="blue_button">Pokaż wpisy</a>
            </div>
        </header>
        <section id="contact">
            <div id="formulage">
                <p>Napisz do nas</p>
                <form action="#" method="post">
                    <div id="first_grid">
                        <input type="text" name="name" placeholder="Imię">
                        <input type="text" name="surrname" placeholder="Nazwisko">
                        <input type="email" name="email" placeholder="Adres e-mail">
                        <input type="number" name="number" placeholder="Numer telefonu">
                        <textarea name="message" cols="50" rows="12" placeholder="Twoja wiadomość"></textarea>
                    </div>
                    <div id="second_grid">
                        <label for="check">
                            <input type="checkbox" name="check" id="check">
                            Zapoznałem się z regulaminem i wyrażam zgodę na przetwarzanie moich danych osobowych przez
                            Sungroup.pl
                        </label>
                    </div>
                    <button type="submit">Wyślij wiadomość</button>
                </form>
            </div>
            <div id="contact_image"></div>
        </section>
    </main>
    <footer>
        <div>
            <h2>SunPage</h2>
            <a href="#" id="show_db">Pokaż wpisy</a>
        </div>
        <hr>
        <div id="social_buttons">
            <p>&copy; Copyrights 2021 Sungroup</p>
            <a href="#"><img src="linkedin.png" alt="linkedin"></a>
            <a href="#"><img src="twitter.png" alt="twitter"></a>
            <a href="#"><img src="facebook.png" alt="facebook"></a>
        </div>
    </footer>
</body>
</html>