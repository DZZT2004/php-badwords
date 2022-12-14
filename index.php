<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $word = isset($_GET['word']) ? $_GET['word'] : '';
        $censor = '<span class="censored">***</span>';
        $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, molestias. 
        Repellendus aliquid, dolor voluptates hic dolorem quo sit error debitis similique aut id harum, 
        sunt expedita. Atque laboriosam nesciunt alias.';
        $text_censored = str_ireplace($word, $censor, $text, $substitutions);
    ?>
    <h1>Testo censura</h1>
    <form method="get" action="">
		<label for="word-id">Parola da censurare</label>
		<input type="text" name="word" id="word-id" value="<?= $word; ?>">
		<button>Censura</button>
	</form>

	<h2>Paragrafo originale</h2>
	<?= $text; ?>

	<h2>Caratteri paragrafo originale: <?= strlen($text); ?></h2>

	<h2>Paragrafo censurato</h2>
	<?= $text_censored; ?>

	<h2>Caratteri paragrafo censurato: <?= strlen($text_censored); ?></h2>
	<h2>Parole censurate: <?= $substitutions ?></h2>
</body>
</html>