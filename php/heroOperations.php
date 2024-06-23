<?php
if(isset($_POST['option'])) {
    $option = $_POST['option'];
    // Database connection setup
    include 'db.php';

    switch($option) {
        case 'option1':
            echo "Data for Option 1";
            break;
        case 'option2':
            echo "Data for Option 2";
            break;
        case 'option3':
            echo "Data for Option 3";
            break;
        case 'option4':
            echo "Data for Option 4";
            break;
        case 'option5':
            echo "Data for Option 5";
            break;
        default:
            echo "Select a valid option.";
            break;
    }
} else {
    echo "No option selected.";
}
?>
