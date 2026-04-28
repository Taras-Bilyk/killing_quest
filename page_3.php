<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Killing quest</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="form_with_letters" action="page_3.php" method="post" autocomplete="off">

        <?php 
        

        # settings oncontextmenu="return false;"

        $correct_symbol_1 = "1";
        $correct_symbol_2 = "2";
        $correct_symbol_3 = "3";
        $correct_symbol_4 = "4";
        $correct_symbol_5 = "5";
        $correct_symbol_6 = "6";

        $correct_word = "pink";

        $tip_filename_1 = "tip_1.png";
        $tip_filename_2 = "tip_2.png";
        $tip_filename_3 = "tip_3.png";
        $tip_filename_4 = "tip_4.png";
        $tip_filename_5 = "tip_5.png";
        $tip_filename_6 = "tip_6.png";
        $tip_filename_7 = "tip_7.png";

        $tips_folder = "img/tips/";

        #___

        $get_letter_1 = $_POST['letter_1'];
        $get_letter_2 = $_POST['letter_2'];
        $get_letter_3 = $_POST['letter_3'];
        $get_letter_4 = $_POST['letter_4'];
        $get_letter_5 = $_POST['letter_5'];
        $get_letter_6 = $_POST['letter_6'];

        $letter_1_correct = "0";
        $letter_2_correct = "0";
        $letter_3_correct = "0";
        $letter_4_correct = "0";
        $letter_5_correct = "0";
        $letter_6_correct = "0";
        
        $is_level_2_unlocked = "0";
        $is_level_3_unlocked = "0";
        $is_level_4_unlocked = "0";
        $is_level_5_unlocked = "0";
        $is_level_6_unlocked = "0";

        $current_tip = "1";

        $restart = "0";

        $c_s = $_POST['c_s'];


        if ($get_letter_1 == $correct_symbol_1){
            $letter_1_correct = "1";
            $is_level_2_unlocked = "1";
            $current_tip = "2";
        };
        if ($get_letter_2 == $correct_symbol_2){
            $letter_2_correct = "1";
            $is_level_3_unlocked = "1";
            $current_tip = "3";
        };
        if ($get_letter_3 == $correct_symbol_3){
            $letter_3_correct = "1";
            $is_level_4_unlocked = "1";
            $current_tip = "4";
        };
        if ($get_letter_4 == $correct_symbol_4){
            $letter_4_correct = "1";
            $is_level_5_unlocked = "1";
            $current_tip = "5";
        };
        if ($get_letter_5 == $correct_symbol_5){
            $letter_5_correct = "1";
            $is_level_6_unlocked = "1";
            $current_tip = "6";
        };
        if ($get_letter_6 == $correct_symbol_6){
            $letter_6_correct = "1";
            $current_tip = "7";
        };


        if($get_letter_1 != $correct_symbol_1){$is_level_2_unlocked = "0";$is_level_3_unlocked = "0";$is_level_4_unlocked = "0";$is_level_5_unlocked = "0";$is_level_6_unlocked = "0";};if($get_letter_2 != $correct_symbol_2){$is_level_3_unlocked = "0";$is_level_4_unlocked = "0";$is_level_5_unlocked = "0";$is_level_6_unlocked = "0";};if($get_letter_3 != $correct_symbol_3){$is_level_4_unlocked = "0";$is_level_5_unlocked = "0";$is_level_6_unlocked = "0";};if($get_letter_4 != $correct_symbol_4){$is_level_5_unlocked = "0";$is_level_6_unlocked = "0";};



        ####
        if(($get_letter_1 != "" && $letter_1_correct == "0") || ($get_letter_2 != "" && $letter_2_correct == "0") || ($get_letter_3 != "" && $letter_3_correct == "0") || ($get_letter_4 != "" && $letter_4_correct == "0") || ($get_letter_5 != "" && $letter_5_correct == "0") || ($get_letter_6 != "" && $letter_6_correct == "0")){$restart = "1";};


        


        if($restart == "1"){$current_tip = "1";};
        if($restart == "1"){$is_level_2_unlocked = "0";$is_level_3_unlocked = "0";$is_level_4_unlocked = "0";$is_level_5_unlocked = "0";$is_level_6_unlocked = "0";};


        ?>

        <div class="first_sy"><div class="<?php if($current_tip == "1"){echo("current_sym");}; ?>"><input type="text" name="letter_1" value="<?php if($restart == "0"){$text_from_textinput = $_POST['letter_1']; echo($text_from_textinput);}else{echo("");};?>" placeholder="_"></div></div>
        <div class="<?php if($current_tip == "2"){echo("current_sym");}; ?>"><input type="text" name="letter_2" value="<?php if($restart == "0"){$text_from_textinput = $_POST['letter_2']; echo($text_from_textinput);}else{echo("");};?>" placeholder="_" <?php if($is_level_2_unlocked == "0"){echo("disabled");};?>></div>
        <div class="<?php if($current_tip == "3"){echo("current_sym");}; ?>"><input type="text" name="letter_3" value="<?php if($restart == "0"){$text_from_textinput = $_POST['letter_3']; echo($text_from_textinput);}else{echo("");};?>" placeholder="_" <?php if($is_level_3_unlocked == "0"){echo("disabled");};?>></div>
        <div class="<?php if($current_tip == "4"){echo("current_sym");}; ?>"><input type="text" name="letter_4" value="<?php if($restart == "0"){$text_from_textinput = $_POST['letter_4']; echo($text_from_textinput);}else{echo("");};?>" placeholder="_" <?php if($is_level_4_unlocked == "0"){echo("disabled");};?>></div>
        <div class="<?php if($current_tip == "5"){echo("current_sym");}; ?>"><input type="text" name="letter_5" value="<?php if($restart == "0"){$text_from_textinput = $_POST['letter_5']; echo($text_from_textinput);}else{echo("");};?>" placeholder="_" <?php if($is_level_5_unlocked == "0"){echo("disabled");};?>></div>
        <div class="<?php if($current_tip == "6"){echo("current_sym");}; ?>"><input type="text" name="letter_6" value="<?php if($restart == "0"){$text_from_textinput = $_POST['letter_6']; echo($text_from_textinput);}else{echo("");};?>" placeholder="_" <?php if($is_level_6_unlocked == "0"){echo("disabled");};?>></div>
        <input class="submit_letters_button" type="submit" value="submit">
    </form>
    <div class="div_with_tips">
        <?php if($get_letter_1 != $correct_symbol_1 && $get_letter_1 != ""){$current_tip = "1";};if($get_letter_2 != $correct_symbol_2 && $get_letter_2 != ""){$current_tip = "2";};if($get_letter_3 != $correct_symbol_3 && $get_letter_3 != ""){$current_tip = "3";};if($get_letter_4 != $correct_symbol_4 && $get_letter_4 != ""){$current_tip = "4";};if($get_letter_5 != $correct_symbol_5 && $get_letter_5 != ""){$current_tip = "5";};if($get_letter_6 != $correct_symbol_6 && $get_letter_6 != ""){$current_tip = "6";};if($get_letter_7 != $correct_symbol_7 && $get_letter_7 != ""){$current_tip = "7";};?>
        <?php if($restart == "1"){$current_tip = "1";}; ?>
        <img <?php if($current_tip == "1"){$path_to_tip = "../".$tips_folder.$tip_filename_1;};if($current_tip == "2"){$path_to_tip = "../".$tips_folder.$tip_filename_2;};if($current_tip == "3"){$path_to_tip = "../".$tips_folder.$tip_filename_3;};if($current_tip == "4"){$path_to_tip = "../".$tips_folder.$tip_filename_4;};if($current_tip == "5"){$path_to_tip = "../".$tips_folder.$tip_filename_5;};if($current_tip == "6"){$path_to_tip = "../".$tips_folder.$tip_filename_6;};if($current_tip == "7"){$path_to_tip = "../".$tips_folder.$tip_filename_7;};$echo_command = "src=".$path_to_tip;echo($echo_command);;?> alt="">
    </div>




    <?php


        $letter_1 = $_POST['letter_1'];
        $letter_2 = $_POST['letter_2'];
        $letter_3 = $_POST['letter_3'];
        $letter_4 = $_POST['letter_4'];
        $letter_5 = $_POST['letter_5'];
        $letter_6 = $_POST['letter_6'];




        



    ?>


    <div class="div_with_word">
        <form action="page_3.php" method="post" autocomplete="off">
            <div class="<?php if($current_tip == "7"){echo("current_sym");}; ?>"><input type="text" name="word_from_textinput" value="<?php $word_from_input = $_POST['word_from_textinput']; if($word_from_input == $correct_word && $c_s == "7"){echo($word_from_input);}else{echo("");}; ?>" placeholder="word..." <?php if($current_tip == 7){echo("");}else{echo("disabled");}; ?>></div>
            <input type="hidden" name="c_s" value="<?php echo($current_tip); ?>">
            <input class="submit_word_button" type="submit" value="submit">
        </form>
    </div>


    <?php if($word_from_input == $correct_word && $c_s == "7"){header("Location: page_2.php");exit;};?>



</body>
</html>
