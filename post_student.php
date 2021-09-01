<?php
    require 'students_controller_class.php';

    $controller = new StudentsController();
    $controller->postStudentForm($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Example Application</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="bg-primary text-white p-3">
                <h1>Example application</h1>
            </div>
            <h2>
                Registration performed successfully
                <br />
                <a href="studentstable" class="btn btn-primary">Go back</a>
            </h2>
        </div>
    </body>
</html>
