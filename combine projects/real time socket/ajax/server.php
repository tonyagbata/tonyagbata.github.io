<?php
// Set an infinite execution time
set_time_limit(0);

// Start the main loop
while (true) {
    // Check for new data or updates
    $newData = checkForUpdates();

    if ($newData) {
        // Send the response to the client
        echo json_encode($newData);
        flush();
        exit;
    }

    // Wait for a short interval before checking again
    usleep(100000); // 100 milliseconds
}

// Function to check for updates
function checkForUpdates()
{
    // Perform necessary checks or fetch updated data
    // ...

    $updatedData = array("Benz", "BMW", "Toyota");

    // Return the updated data if available
    return $updatedData;
}
?>

<script src="jquerry.3.6.js"></script>

<script>
    alert("hello")
</script>
