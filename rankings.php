<?php
    //This is the php code which is linking to this file. 
    include('output.php');

    //This fucntion outputs the top html content.
    outputTop("Rankings");

    //This fucntion outputs the Banner & Navigation-Bar.
    outputBannerNavigation("Rankings");
?>

<!-- Rankings -->
<!-- This is the box where the rankings title & table is placed -->
<div class="rankings-box">
    <div class="Rankings-Table">
        <!--This is the Title of the Rankings Form -->
        <h1 class="ranking-title">Rankings</h1>
        <!--This is the Table of the Rankings Information -->
        <table><br>
            <tr> 
                <!-- th is an element to define the table heading -->
                <th>Username</th> 
                <th>Score</th>
                <th>Ranking Spot</th>
            </tr>
            <tr>
                <!-- td is the element to define the table data -->
                <td></td> 
                <td></td>
                <td>1</td> 
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>5</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>6</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>7</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>8</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>9</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>10</td>
            </tr>
        </table>
    </div>
</div>

<?php
    //This is used for outtputting the footer bar at the bottom of the webpage.
    outputFooterBar();

    //This is used for outputting the bottom html content.
    outputFooter();
?>