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
            <div class="p-3">
                <h2>
                    New student
                </h2>
                <form action="poststudent" method="POST" class="form">
                    <div class="form-group">
                        <label for="txtFirstName">First name:</label>
                        <input type="text" class="form-control" name="firstName" />
                    </div>
                    <div class="form-group">
                        <label for="txtLastName">Last name:</label>
                        <input type="text" class="form-control" name="lastName" />
                    </div>
                    <div class="form-group">
                        <label for="txtCity">City:</label>
                        <input type="text" class="form-control" name="city" />
                    </div>
                    <div class="form-group">
                        <label for="txtSemester">Semester:</label>
                        <input type="number" class="form-control" name="semester" />
                    </div>
                    <div>
                        <input type="submit" value="Send" class="btn btn-primary" />
                        <a href="studentstable" class="btn btn-primary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>