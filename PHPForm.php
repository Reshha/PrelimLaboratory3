<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form class="p-5" action="PHPOutput.php" method="post">
        
        <div class="container">
            <p class="display-1">Student Registration</p>
            <p class="lead">Thank you for applying to our college. Please fill in the form below to complete the registration process for admission.</p>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName">
                </div>

                <div class="col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName">
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="studentID">Student ID</label>
                <input type="text" class="form-control" id="studentID">
            </div>

            <div class="form-group mt-3">
                <div class="form-col">
                    <label for="gender" class="form-label">Gender</label>
                </div>

                <input type="radio" name="gender" id="male" class="form-check-input-inline">
                <label for="male" class="form-check-label">Male</label>
                    
                    
                <input type="radio" name="gender" id="female" class="form-check-input-inline">
                <label for="female" class="form-check-label">Female</label>
                    
                    
                <input type="radio" name="gender" id="other" class="form-check-input-inline">
                <label for="other" class="form-check-label">Other</label>
            </div>
        
            <div class="form-row mt-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" id="birthday" class="form-control">
            </div>
        <!--Course-->
        <div class="form-group mt-3">
            <label for="course">Course</label>
            <select class="form-select">
                <option selected> --Choose Course--</option>
                <option value="BS in Information Technology">BS in Information Technology</option>
                <option value="BS in Computer Science">BS in Computer Science</option>
                <option value="BS in Information Systems">BS in Information Systems</option>
            </select>
        </div>
        <!--Year Level-->
        <div class="form-group mt-3">
            <label for="yrLevel">Year Level</label>
            <select class="form-select">
                <option selected> --Year Level--</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
            </select>
        </div>
        <!--Email-->
        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control">
        </div>
        <!--num-->
        <div class="form-group mt-3">
            <label for="contact">Contact Number</label>
            <input type="tel" id="contact" class="form-control">
        </div>
        <!--additional info-->
        <div class="form-group mt-3">
            <label for="addInfo">Additional Information</label>
            <textarea rows="5" class="form-control" id="addInfo"></textarea>
        </div>
        <input type="submit" value="Submit" class="form-control w-100 mt-4 btn btn-primary">
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body> 
</html>