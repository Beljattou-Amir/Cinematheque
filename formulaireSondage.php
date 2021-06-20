<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Satisfyc | Satisfaction Survey form Wizard</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="style_3">


<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <a href="Accueil.html"><img src="img/logo.png" alt="" width="500" height="505"></a>
            </div>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</header>

<div class="wrapper_centering">
    <div class="container_centering">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="main_title_1">
                        <h3><img src="img/cs.png" width="80" height="80" alt=""> Questionnaire de satisfaction</h3>
                        <p>Ce questionnaire nous permettra d'avoir l'avis de la communauté csgo sur le jeu.</p>
                        <p><em>- Valve Corporation</em></p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>

                        <form id="wrapped" method="POST" action="formulaireSondage.php" autocomplete="off">
                            <input id="website" name="website" type="text" value="">

                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><strong>1 sur 15</strong>Êtes vous satisfait des matchmaking?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_1">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_1" name="question_1" class="required" value="0<" onchange="getVals(this, 'question_1');">
                                                    <label class="radio very_bad" for="very_bad_1">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_1" name="question_1" class="required" value="1" onchange="getVals(this, 'question_1');">
                                                    <label class="radio bad" for="bad_1">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_1" name="question_1" class="required" value="2" onchange="getVals(this, 'question_1');">
                                                    <label class="radio average" for="average_1">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_1" name="question_1" class="required" value="3" onchange="getVals(this, 'question_1');">
                                                    <label class="radio good" for="good_1">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_1" name="question_1" class="required" value="4" onchange="getVals(this, 'question_1');">
                                                    <label class="radio very_good" for="very_good_1">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="step">
                                    <h3 class="main_question"><strong>2 sur 15</strong>Êtes vous satisfait des maps?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_2">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_2" name="question_2" class="required" value="0<" onchange="getVals(this, 'question_2');">
                                                    <label class="radio very_bad" for="very_bad_2">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_2" name="question_2" class="required" value="1" onchange="getVals(this, 'question_2');">
                                                    <label class="radio bad" for="bad_2">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_2" name="question_2" class="required" value="2" onchange="getVals(this, 'question_2');">
                                                    <label class="radio average" for="average_2">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_2" name="question_2" class="required" value="3" onchange="getVals(this, 'question_2');">
                                                    <label class="radio good" for="good_2">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_2" name="question_2" class="required" value="4" onchange="getVals(this, 'question_2');">
                                                    <label class="radio very_good" for="very_good_2">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="step">
                                    <h3 class="main_question"><strong>3 sur 15</strong>Êtes vous satisfait du système anti triche?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_3">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_3" name="question_3" class="required" value="0<" onchange="getVals(this, 'question_3');">
                                                    <label class="radio very_bad" for="very_bad_3">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_3" name="question_3" class="required" value="1" onchange="getVals(this, 'question_3');">
                                                    <label class="radio bad" for="bad_3">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_3" name="question_3" class="required" value="2" onchange="getVals(this, 'question_3');">
                                                    <label class="radio average" for="average_3">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_3" name="question_3" class="required" value="3" onchange="getVals(this, 'question_3');">
                                                    <label class="radio good" for="good_3">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_3" name="question_3" class="required" value="4" onchange="getVals(this, 'question_3');">
                                                    <label class="radio very_good" for="very_good_3">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="step">
                                    <h3 class="main_question"><strong>4 sur 15</strong>Êtes-vous satisfait des serveurs ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_4">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_4" name="question_4" class="required" value="0<" onchange="getVals(this, 'question_4');">
                                                    <label class="radio very_bad" for="very_bad_4">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_4" name="question_4" class="required" value="1" onchange="getVals(this, 'question_4');">
                                                    <label class="radio bad" for="bad_4">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_4" name="question_4" class="required" value="2" onchange="getVals(this, 'question_4');">
                                                    <label class="radio average" for="average_4">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_4" name="question_4" class="required" value="3" onchange="getVals(this, 'question_4');">
                                                    <label class="radio good" for="good_4">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_4" name="question_4" class="required" value="4" onchange="getVals(this, 'question_4');">
                                                    <label class="radio very_good" for="very_good_4">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="step">
                                    <h3 class="main_question"><strong>5 sur 15</strong>Êtes vous satisfait du support ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_5">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_5" name="question_5" class="required" value="0<" onchange="getVals(this, 'question_5');">
                                                    <label class="radio very_bad" for="very_bad_5">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_5" name="question_5" class="required" value="1" onchange="getVals(this, 'question_5');">
                                                    <label class="radio bad" for="bad_5">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_5" name="question_5" class="required" value="2" onchange="getVals(this, 'question_5');">
                                                    <label class="radio average" for="average_5">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_5" name="question_5" class="required" value="3" onchange="getVals(this, 'question_5');">
                                                    <label class="radio good" for="good_5">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_5" name="question_5" class="required" value="4" onchange="getVals(this, 'question_5');">
                                                    <label class="radio very_good" for="very_good_5">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>6 sur 15</strong>Les nouveaux skin vous plaisent  ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_6">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_6" name="question_6" class="required" value="0<" onchange="getVals(this, 'question_6');">
                                                    <label class="radio very_bad" for="very_bad_6">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_6" name="question_6" class="required" value="1" onchange="getVals(this, 'question_6');">
                                                    <label class="radio bad" for="bad_6">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_6" name="question_6" class="required" value="2" onchange="getVals(this, 'question_6');">
                                                    <label class="radio average" for="average_6">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_6" name="question_6" class="required" value="3" onchange="getVals(this, 'question_6');">
                                                    <label class="radio good" for="good_6">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_6" name="question_6" class="required" value="Very 4" onchange="getVals(this, 'question_6');">
                                                    <label class="radio very_good" for="very_good_6">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>8 sur 15</strong>Êtes vous satisfait du nouveau pass ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_8">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_8" name="question_8" class="required" value="0<" onchange="getVals(this, 'question_8');">
                                                    <label class="radio very_bad" for="very_bad_8">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_8" name="question_8" class="required" value="1" onchange="getVals(this, 'question_8');">
                                                    <label class="radio bad" for="bad_8">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_8" name="question_8" class="required" value="2" onchange="getVals(this, 'question_8');">
                                                    <label class="radio average" for="average_8">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_8" name="question_8" class="required" value="3" onchange="getVals(this, 'question_8');">
                                                    <label class="radio good" for="good_8">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_8" name="question_8" class="required" value="4" onchange="getVals(this, 'question_8');">
                                                    <label class="radio very_good" for="very_good_8">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Tres mauvais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres bien</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>9 sur 15</strong>A quel fréquence achetez vous des objets en boutique ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_9">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_9" name="question_9" class="required" value="0<" onchange="getVals(this, 'question_9');">
                                                    <label class="radio very_bad" for="very_bad_9">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_9" name="question_9" class="required" value="1" onchange="getVals(this, 'question_9');">
                                                    <label class="radio bad" for="bad_9">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_9" name="question_9" class="required" value="2" onchange="getVals(this, 'question_9');">
                                                    <label class="radio average" for="average_9">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_9" name="question_9" class="required" value="3" onchange="getVals(this, 'question_9');">
                                                    <label class="radio good" for="good_9">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_9" name="question_9" class="required" value="4" onchange="getVals(this, 'question_9');">
                                                    <label class="radio very_good" for="very_good_9">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Jamais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres souvent</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>10 sur 15</strong>Êtes vous satisfait du taux de récompense dans les caisses ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_10">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_10" name="question_10" class="required" value="0<" onchange="getVals(this, 'question_10');">
                                                    <label class="radio very_bad" for="very_bad_10">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_10" name="question_10" class="required" value="1" onchange="getVals(this, 'question_10');">
                                                    <label class="radio bad" for="bad_10">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_10" name="question_10" class="required" value="2" onchange="getVals(this, 'question_10');">
                                                    <label class="radio average" for="average_10">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_10" name="question_10" class="required" value="3" onchange="getVals(this, 'question_10');">
                                                    <label class="radio good" for="good_10">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_10" name="question_10" class="required" value="4" onchange="getVals(this, 'question_10');">
                                                    <label class="radio very_good" for="very_good_10">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Jamais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres souvent</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>11 sur 15</strong>Êtes vous satisfait des graphismes du jeu ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_11">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_11" name="question_11" class="required" value="0<" onchange="getVals(this, 'question_11');">
                                                    <label class="radio very_bad" for="very_bad_11">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_11" name="question_11" class="required" value="1" onchange="getVals(this, 'question_11');">
                                                    <label class="radio bad" for="bad_11">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_11" name="question_11" class="required" value="2" onchange="getVals(this, 'question_11');">
                                                    <label class="radio average" for="average_11">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_11" name="question_11" class="required" value="3" onchange="getVals(this, 'question_11');">
                                                    <label class="radio good" for="good_11">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_11" name="question_11" class="required" value="4" onchange="getVals(this, 'question_11');">
                                                    <label class="radio very_good" for="very_good_11">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Jamais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres souvent</em>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>12 sur 15</strong>Recommanderiez vous le jeu a vos proches ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_12">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_12" name="question_12" class="required" value="0<" onchange="getVals(this, 'question_12');">
                                                    <label class="radio very_bad" for="very_bad_12">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_12" name="question_12" class="required" value="1" onchange="getVals(this, 'question_12');">
                                                    <label class="radio bad" for="bad_12">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_12" name="question_12" class="required" value="2" onchange="getVals(this, 'question_12');">
                                                    <label class="radio average" for="average_12">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_12" name="question_12" class="required" value="3" onchange="getVals(this, 'question_12');">
                                                    <label class="radio good" for="good_12">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_12" name="question_12" class="required" value="4" onchange="getVals(this, 'question_12');">
                                                    <label class="radio very_good" for="very_good_12">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Jamais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres souvent</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>13 sur 15</strong>Êtes vous satisfait de l’utilisation du jeu ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_13">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_13" name="question_13" class="required" value="0<" onchange="getVals(this, 'question_13');">
                                                    <label class="radio very_bad" for="very_bad_13">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_13" name="question_13" class="required" value="1" onchange="getVals(this, 'question_13');">
                                                    <label class="radio bad" for="bad_13">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_13" name="question_13" class="required" value="2" onchange="getVals(this, 'question_13');">
                                                    <label class="radio average" for="average_13">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_13" name="question_13" class="required" value="3" onchange="getVals(this, 'question_13');">
                                                    <label class="radio good" for="good_13">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_13" name="question_13" class="required" value="4" onchange="getVals(this, 'question_13');">
                                                    <label class="radio very_good" for="very_good_13">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Jamais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres souvent</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>14 sur 15</strong>En somme êtes vous satisfait du jeu en général  ?</h3>
                                    <div class="review_block_numbers">
                                        <ul class="clearfix" id="question_14">
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_bad_14" name="question_14" class="required" value="0<" onchange="getVals(this, 'question_14');">
                                                    <label class="radio very_bad" for="very_bad_14">1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="bad_14" name="question_14" class="required" value="1" onchange="getVals(this, 'question_14');">
                                                    <label class="radio bad" for="bad_14">2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="average_14" name="question_14" class="required" value="2" onchange="getVals(this, 'question_14');">
                                                    <label class="radio average" for="average_14">3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="good_14" name="question_14" class="required" value="3" onchange="getVals(this, 'question_14');">
                                                    <label class="radio good" for="good_14">4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container_numbers">
                                                    <input type="radio" id="very_good_14" name="question_14" class="required" value="4" onchange="getVals(this, 'question_14');">
                                                    <label class="radio very_good" for="very_good_14">5</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                            <div class="col-4">
                                                <em>Jamais</em>
                                            </div>
                                            <div class="col-4 text-right">
                                                <em>Tres souvent</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit step">
                                    <h3 class="main_question"><strong></strong>Information personnelle</h3>
                                    <div class="form-group">
                                        <label for="firstname">Prenom</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Nom</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="grade">Votre grade</label>
                                        <input type="text" name="grade" id="grade" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-3">
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="text" name="age" id="age" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-3">
                                            <div class="form-group">
                                                <label for="hdj">Heure de jeu</label>
                                                <input type="text" name="age" id="hdj" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group radio_input">
                                                <label class="container_radio">Homme
                                                    <input type="radio" name="gender" id="gender" value="Homme" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container_radio">Femme
                                                    <input type="radio" name="gender" id="gender" value="Femme" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
								<div class="step">
								<canvas id="myChart"></canvas>
								<script>
									var ctx = document.getElementById('myChart').getContext('2d');
									var chart = new Chart(ctx, {
										// The type of chart we want to create
										type: 'line',

										// The data for our dataset
										data: {
											labels: ['Tres negatif', 'Negatif', 'Moyen', 'Positif', 'Très Positif'],
											datasets: [{
												label: 'My First dataset',
												backgroundColor: #132858,
												borderColor: 'rgb(255, 99, 132)',
												data: [0, 10, 5, 2, 20, 30, 45]
											}]
										},

										// Configuration options go here
										options: {}
									});
								</script>
								</div>

                            </div>


                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Retour</button>
                                <button type="button" name="forward" class="forward">Suivant</button>
                                <button type="submit" id="process" name="process" class="submit">Envoyer</button>
                            </div>


                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<script src="js/test.js"></script>
<script src="js/fonction.js"></script>

<?php

if(!empty($_POST)){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $grade=$_POST["grade"];
    $age=$_POST["age"];
    $heure=$_POST["heure"];
    $sexe=$_POST["sexe"];
    $reponse1=$_POST["reponse1"];
    $reponse2=$_POST["reponse2"];
    $reponse3=$_POST["reponse3"];
    $reponse4=$_POST["reponse4"];
    $reponse5=$_POST["reponse5"];
    $reponse6=$_POST["reponse6"];
    $reponse8=$_POST["reponse8"];
    $reponse9=$_POST["reponse9"];
    $reponse10=$_POST["reponse10"];
    $reponse11=$_POST["reponse11"];
    $reponse12=$_POST["reponse12"];
    $reponse13=$_POST["reponse13"];
    $reponse14=$_POST["reponse14"];



    $keys =
        array(
            $nom,$prenom,$email,$grade,$age,$heure,$sexe,$reponse1,$reponse2,$reponse3,$reponse4,$reponse5,$reponse6,$reponse8,$reponse9,$reponse10,$reponse11,$reponse12,$reponse13,$reponse14
        );

    $cvsData = $nom . "," . $prenom . "," . $email . "," . $grade . "," . $age . "," . $heure . "," . $sexe . "," . $reponse1 . "," .$reponse2 . "," . $reponse3 . "," . $reponse4 . "," . $reponse5 . "," . $reponse6 . "," . $reponse8 . "," . $reponse9 . "," . $reponse10 . "," . $reponse11 . "," . $reponse12 . "," . $reponse13 . "," . $reponse14 ."\n";
    $fp = fopen("data.csv","a");
    if($fp){
        fwrite($fp,$cvsData); // Write information to the file
        fclose($fp); // Close the file
    }
}


?>


?>
<script>
    var btn = document.getElementById('process');
    btn.addEventListener('click', envoyerDonnees);
    function envoyerDonnees(event){
        //annulation du comportement par défaut (envoi des données)
        event.preventDefault();

        //*** construction de la requête à envoyer au serveur ***\\\
        var request = new XMLHttpRequest();

        //on spécifie le type de la requête
        // method : POST, GET ou autres
        // url : page cible
        // async : true pour asynchrone
        request.open('POST', 'formulaireSondage.php',true);



        var question_1 = document.querySelector('input[name=question_1]:checked').value;
        var question_2 = document.querySelector('input[name=question_2]:checked').value;
        var question_3 = document.querySelector('input[name=question_3]:checked').value;
        var question_4 = document.querySelector('input[name=question_4]:checked').value;
        var question_5 = document.querySelector('input[name=question_5]:checked').value;
        var question_6 = document.querySelector('input[name=question_6]:checked').value;
        var question_8 = document.querySelector('input[name=question_8]:checked').value;
        var question_9 = document.querySelector('input[name=question_9]:checked').value;
        var question_10 = document.querySelector('input[name=question_10]:checked').value;
        var question_11 = document.querySelector('input[name=question_11]:checked').value;
        var question_12 = document.querySelector('input[name=question_12]:checked').value;
        var question_13 = document.querySelector('input[name=question_13]:checked').value;
        var question_14 = document.querySelector('input[name=question_14]:checked').value;



        var elemNom = document.getElementById('lastname');
        var nomValue = elemNom.value;
        var elemPrenom = document.getElementById('firstname');
        var prenomValue = elemPrenom.value;
        var elemEmail = document.getElementById('email');
        var emailValue = elemEmail.value;
        var elemgrade = document.getElementById('grade');
        var gradeValue = elemgrade.value;
        var elemAge = document.getElementById('age');
        var ageValue = elemAge.value;
        var elemHeure = document.getElementById('hdj');
        var heureValue = elemHeure.value;
        var elemSexe = document.getElementById('gender');
        var sexeValue = elemSexe.value;

        var Reponse1Value = question_1;
        var Reponse2Value = question_2;
        var Reponse3Value = question_3;
        var Reponse4Value = question_4;
        var Reponse5Value = question_5;
        var Reponse6Value = question_6;
        var Reponse8Value = question_8;
        var Reponse9Value = question_9;
        var Reponse10Value = question_10;
        var Reponse11Value = question_11;
        var Reponse12Value = question_12;
        var Reponse13Value = question_13;
        var Reponse14Value = question_14;


        //on envoie la requête http au serveur
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send('nom='+nomValue+'&prenom='+prenomValue+'&email='+emailValue+'&grade='+gradeValue+'&age='+ageValue+'&heure='+heureValue+'&sexe='+sexeValue+'&reponse1='+Reponse1Value+'&reponse2='+Reponse2Value+'&reponse3='+Reponse3Value+'&reponse4='+Reponse4Value+'&reponse5='+Reponse5Value+'&reponse6='+Reponse6Value+'&reponse8='+Reponse8Value+'&reponse9='+Reponse9Value+'&reponse10='+Reponse10Value+'&reponse11='+Reponse11Value+'&reponse12='+Reponse12Value+'&reponse13='+Reponse13Value+'&reponse14='+Reponse14Value);

    }

</script>
</body>
</html>