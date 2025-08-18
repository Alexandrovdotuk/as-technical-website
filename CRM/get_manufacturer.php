<?php
header('Content-Type: application/json');

require_once 'db_connect.php';
require_once 'auth.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $db->prepare("SELECT * FROM manufacturers WHERE id = ?");
        $stmt->execute([$id]);
        $manufacturer = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($manufacturer) {
            $data = [
                'id' => $manufacturer['id'],
                'machine' => $manufacturer['machine'],
                'manufacturer' => $manufacturer['manufacturer'],
                'contact_person' => $manufacturer['contact_person'],
                'phone' => $manufacturer['phone'],
                'notes' => $manufacturer['notes'],
                'links' => $manufacturer['links'],
                'created_by' => $manufacturer['created_by'],
                'created_at' => $manufacturer['created_at'],
                'last_modified_by' => $manufacturer['last_modified_by'],
                'last_modified_at' => $manufacturer['last_modified_at']
            ];

            // Füge die description-Spalte zur Abfrage hinzu
            $stmt = $db->prepare("SELECT file_path, file_type, description FROM manufacturer_files WHERE manufacturer_id = ?");
            $stmt->execute([$id]);
            $data['files'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Hersteller nicht gefunden']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'ID fehlt']);
}
