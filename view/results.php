<main class="main-results" aria-label="flash card container">
    <?php $cards = null;
    for ($i = 1; $i <= 12; $i++) {
        $result = $number * $i;
        $cards .= "
        <div class='card' tabindex='0' aria-label= '{$number} multtplied by {$i} equels {$result}'>
            <div class='card-front'>
                {$number} x {$i}
            </div>
            <div class='card-back' aria-label= '{$number} multtpled by {$i} equels {$result}'>
                {$result}
            </div>  
        </div>";
    };
    echo $cards;
    ?>

</main>