 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $targetDir = 'uploads/'; // Specify the directory where you want to save the uploaded files
        $targetFile = $targetDir . basename($_FILES['file']['name']);
        
        // Move the temporary uploaded file to the desired location
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            echo 'File uploaded successfully.';
        } else {
            echo 'Error uploading file.';
        }
    } else {
        echo 'Error: ' . $_FILES['file']['error'];
    }
}
?>
