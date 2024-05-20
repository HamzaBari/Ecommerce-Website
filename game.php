<?php
    //This is the php code which is linking to this file. 
    include('output.php'); 

    //This fucntion outputs the top html content.
    outputTop("Game");

    //This fucntion outputs the Banner & Navigation-Bar.
    outputBannerNavigation("Game");
?>

<!-- Game -->
<div class="game-row">
    <!-- This row contains game information -->
    <div class="game-column-1">
        <h2>How to play the game?</h2>
        <h3>Follow these instructions below to see how to play the game. Make sure you enter the correct key's on the keyboard.</h3>
        <p>1.) Press S to start the game.</p>
        <p>2.) Press the spacebar to jump over the obstacle.</p>
        <p>3.) Press P to pause the game.</p>
        <p>4.) Press C to continue the game.</p>
        <p>5.) Press R to restart the game.</p>
        <p>You will recive a final score once the game ends.</p>
    </div>
    <!-- This row contains the game window -->
    <div class="game-column-2">
        <canvas id="Game-Window"></canvas>
    </div>
</div>

<?php
    //This function is being called for adding the breaks.
    includeBreaks();
    includeBreaks();
?>


<?php
    //This is used for outtputting the footer bar at the bottom of the webpage.
    outputFooterBar();

    //This is used for outputting the bottom html content.
    outputFooter();
?>