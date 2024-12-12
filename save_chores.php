<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $type = $_GET['type'] ?? 'selected'; // Check the type of save operation (default to 'selected')

    if ($data) {
        $file = $type === 'original' ? 'original_chores.json' : 'selected_chores.json';
        file_put_contents($file, $data);
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No data received']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
