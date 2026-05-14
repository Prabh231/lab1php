<?php

function getGradeStatus($score){
    if($score >= 50){
        return "<span class='pass'>PASS</span>";
    }else{
        return "<span class='fail'>FAIL</span>";
    }
}
/**
 * Our data set(array)
 */
$students =[
    ["name"=>"Prabh", "score"=>99, "subject"=>"Mathematics"],
    ["name"=>"Rohan", "score"=>45, "subject"=>"Physics"],
    ["name"=>"Ravi", "score"=>88, "subject"=>"History"],
    ["name"=>"Emma", "score"=>32, "subject"=>"English"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1,device-width-width">
    <title>Lab1 | Student Report Card</title>
    <meta name="description" content="Arrays and functions">
    <meta name="robots" content="noindex, nofollow">
</head>
<body>
<header>
    <h1>Student Report Card</h1>
</header>
<main>
    <section class="student-grid">
        <?php if(empty($students)): ?>
            <p>No students found.</p>
        <?php else: ?>

            <?php foreach($students as $student): ?>
                <div class="student-card">
                    <h3>
                        <?php echo htmlspecialchars($student['name']); ?>
                    </h3>
                    <p class="subject">Subject:<?php echo htmlspecialchars($student['subject']); ?></p>
                    <p class="score">Score:<?php echo $student['score']; ?></p>
                    <p class="status">Status:<?php echo getGradeStatus($student['score']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</main>

<footer><p>&copy; </p>
<p>Total Student Evaluated: <php echo count($students); ?</p>
<p><php echo date("Y-m-d H:i:s"); ?</p>
</footer>

</body>
</html>