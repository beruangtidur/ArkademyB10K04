<?php
Header('Content-type: application/json');

$conn = new mysqli('127.0.0.1', 'root', 'root', 'programmer_db');

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $data = [];
        $q = "SELECT users.*, skills.name AS skills FROM users LEFT JOIN skills ON users.id = skills.user_id";
        if ($result = $conn->query($q)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_object()) {
                    if (isset($data[$row->id])) {
                        array_push($data[$row->id]['skills'], $row->skills);
                    } else {
                        $data[$row->id] = ['name' => $row->name, 'skills' => [$row->skills]];
                    }
                }
            } else {
                $data = null;
            }
            echo json_encode($data);
        }
        break;

    case 'POST':
        $name = $_POST['prg_name'];
        $q = "INSERT INTO users (name) VALUES ('$name')";
        if ($conn->query($q)) {
            echo json_encode(true);
        }
        break;

    case 'DELETE':
        $id = $_GET['id'];
        $q = "DELETE FROM users WHERE id=$id";

        if ($conn->query($q)) echo json_encode(true);
        else  echo json_encode(false);
        break;

    case 'PATCH':
        $skills = $_GET['skills'];
        $id = $_GET['id'];
        $q = "INSERT INTO skills (name,user_id) VALUE ('$skills', $id)";
        if ($conn->query($q)) echo json_encode(true);
        else  echo json_encode(false);
        break;
    default:
        break;
}
