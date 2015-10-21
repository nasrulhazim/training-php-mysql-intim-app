<?php 

function message() {
    if(isset($_SESSION['message'])) {
        
        if(isset($_SESSION['auth']) && $_SESSION['auth'] == false)  {
            unset($_SESSION['auth']);
            e($_SESSION['message'], 'div', array('class' => 'alert alert-danger'));
        } else if(isset($_SESSION['auth']) && $_SESSION['auth'] == true)  {
            e($_SESSION['message'], 'div', array('class' => 'alert alert-success'));
        } else {
            e($_SESSION['message'], 'div', array('class' => 'alert alert-info'));
        }

        // if(isset($_SESSION['auth'])) {
        //     unset($_SESSION['auth']);
        // }
        unset($_SESSION['message']);
    }
}

?>