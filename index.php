<?php
require_once './class/Answer.php';
require_once './class/Question.php';
require_once './class/Qcm.php';

function pretyDump($data){
    highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
}

$qcm = new Qcm();

$question1 = new Question("POO signifie :");

$question1->setAnswer(new Answer("Php Orienté Objet"));
$question1->setAnswer(new Answer("ProgrammatiOn Orientée Outil"));
$question1->setAnswer(new Answer("Programmation Orientée Objet", true));
$question1->setAnswer(new Answer("Papillon Onirique Ostentatoire"));
$question1->setExplaination("Sans commentaires si vous avez eu faux :-°");

$qcm->setQuestions($question1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM POO</title>
</head>
<body>

    <form action="./process/process_qcm.php" method="post">

        <?php $qcm->generate(); ?>

        <button type="submit">envoyer le questionnaire</button>
    </form>

</body>
</html>
