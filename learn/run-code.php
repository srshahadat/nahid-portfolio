<?php
/*
  WARNING: This is a live PHP runner. 
  In production, executing arbitrary PHP code is dangerous!
  Only use for learning in safe local environment.
*/

// Get the code from POST
if(isset($_POST['phpcode'])){
    $code = $_POST['phpcode'];

    // Evaluate PHP code
    try {
        // Start output buffering
        ob_start();
        eval($code);
        $output = ob_get_clean();
        echo "<pre style='color: white; font-family: monospace;'>$output</pre>";
    } catch (Throwable $e) {
        echo "<pre style='color: red; font-family: monospace;'>Error: ".$e->getMessage()."</pre>";
    }
} else {
    echo "<pre style='color: gray;'>No code submitted.</pre>";
}
