<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
include_once "pdo.php";

class try1 {
    public string $code;
    public $con;
    public string $response;

    public function __construct($db) {
        $this->con = $db;
    }

    public function fetchLatestCode() {
        $stmt = $this->con->prepare('SELECT MAX(code) as latest_code FROM try');
        $stmt->execute();
        $row = $stmt->fetch();
        return $row ? (int)$row['latest_code'] : 0;
    }

    public function add() {
        if (isset($_POST['add'])) {
            $latestCode = $this->fetchLatestCode();
            $this->code = $latestCode + 1;
            $_SESSION['incremented_code'] = $this->code;
            header("Location: halaman1.php");
            exit();
        }
    }

    public function getAll() {
        $stmt = $this->con->prepare('SELECT * FROM try');
        $stmt->execute();
        return $stmt->rowCount() ? $stmt->fetchAll() : [];
    }

    public function save() {
        if (isset($_POST['save'])) {
            if (isset($_SESSION['incremented_code'])) {
                $this->code = $_SESSION['incremented_code'];
                $stmt = $this->con->prepare("INSERT INTO try (code) VALUES (?)");
                $stmt->execute([$this->code]);
                $this->responseSQL($stmt);
                unset($_SESSION['incremented_code']);
                header("Location: halaman1.php");
                exit();
            }
        }
    }

    public function responseSQL($stmt) {
        if ($stmt->rowCount()) {
            $this->response = 'success';
        } else {
            $this->response = 'failed';
        }
    }

    public function getResponse() {
        return $this->response;
    }
}

$try1 = new try1($db);
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
