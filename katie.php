<style>
<?php include 'css/maids.css'; ?>
</style>

<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "B") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "A") { $totalCorrect++; }
    if ($answer5 == "B") { $totalCorrect++; }
    if ($answer6) { $totalCorrect++; }
    if ($answer7 == "B") { $totalCorrect++; }
    if ($answer8 == "C") { $totalCorrect++; }  


    echo "<div id='results'>You got $totalCorrect / 8 correct !!</div>

    <div class='question-link'>
    <h2><a href='maid-of-honor.html'>One last question...</a></h2>
    <img src='images/maids/Love_Roses_Wreath.png'>
    </div>";
    
?>
