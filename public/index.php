<?php
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="" />

        <!-- Open Graph meta data -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="LeadDesk Tasks" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="LeadDesk Tasks" />

        <!-- Links -->
        <link rel="icon" href="favicon.ico" />
        <link rel="apple-touch-icon" href="logo.png" />
        <link rel="manifest" href="manifest.json" />
        <link rel="stylesheet" href="style.css">

        <title>LeadDesk Tasks</title>
    </head>

    <body>
        <div class="App">
            <section class="wrapper">
                <div class="container">
                    <form class="box" id="subarrayForm">
                        <h1>Max Sub Array</h1>
                        <div class="data">
                            <div class="input-box">
                                <label>Input a valid array</label>
                                <input id="subarray" name="subarray" type="text" value="[-1, 1, 5, -6, 3]" required>
                            </div>
                        </div>
                        <div class="result">
                            <div class="input-box">
                                <input name="subarraySubmit" type="submit" value="Get highest sum">
                            </div>
                            <div class="input-box">
                                <p id="subarrayResult"></p>
                            </div>
                        </div>
                    </form>
                    <form class="box" id="anagramForm">
                        <h1>Anagram</h1>
                        <div class="data">
                            <div class="input-box">
                                <label>Input word 1</label>
                                <input id="word1" name="word1" type="text" value="RAT" required>
                            </div>
                            <div class="input-box">
                                <label>Input word 2</label>
                                <input id="word2" name="word2" type="text" value="CAR" required>
                            </div>
                        </div>
                        <div class="result">
                            <div class="input-box">
                                <input name="anagramSubmit" type="submit" value="Check">
                            </div>
                            <div class="input-box">
                                <p id="anagramResult"></p>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="img-container">
                    <img src="https://leaddesk.com/wp-content/themes/LeadDesk/images/templates/page-home-2022/hero_2023_logo.png">
                </div>
            </section>
        </div>
    </body>

    <script>
        document.getElementById('subarrayForm').addEventListener('submit', () => {
            event.preventDefault();
            const array = document.getElementById('subarray').value;

            const formData = new FormData();
            formData.append('type', 'SUB_ARRAY');
            formData.append('array', array);

            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('subarrayResult').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        });

        document.getElementById('anagramForm').addEventListener('submit', () => {
            event.preventDefault();
            const word1 = document.getElementById('word1').value;
            const word2 = document.getElementById('word2').value;

            const formData = new FormData();
            formData.append('type', 'ANAGRAM');
            formData.append('word1', word1);
            formData.append('word2', word2);

            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('anagramResult').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</html>