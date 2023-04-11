<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta/>
        <title>CEIS</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/images/favicon-32x32.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://kit.fontawesome.com/471326bbab.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="resources/css/add.css"> 
        <!-- <script src="js/app.js"></script>   -->
    </head>
    
    <body class="intro">
        <!-- start code here -->
        <div class="container">
            <div class="addEmployee">
                <form class="add" method="post">
                    <div class="row">
                        <div class="">
                            <h1 class="forAdd">Register an Employee</h1>
                        </div>
                    </div>
                    <div class="detailCat">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-sm deets" type="text" placeholder="Employee ID" required />
                            <label for ="floatingInput" class="">Employee ID</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-4">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Last Name"/>
                            <label for = "floatingInput" class="">Last Name</label>
                        </div>
                        <div class="form-floating col-md-4">
                            <input class="form-control form-control-md deets"  type="text" placeholder="First Name"/>
                        <label for = "floatingInput" class="">First Name</label>
                        </div>
                        <div class="form-floating col-md-4">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Middle Name"/>
                            <label for = "floatingInput" class="">Middle Name</label>
                        </div>            
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Age" required />
                            <label for ="floatingInput" class="">Age</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="date" placeholder="Date of Birth" required />
                            <label for ="floatingInput" class="">Date of Birth</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">       
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Gender" required />
                            <label for ="floatingInput" class="">Gender</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Civil Status" required />
                            <label for ="floatingInput" class="">Civil Status</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-sm deets" type="text" placeholder="Home Address" required />
                            <label for ="floatingInput" class="">Home Address</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Contact Number" required />
                            <label for ="floatingInput" class="">Contact Number</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Email Address" required />
                            <label for ="floatingInput" class="">Email Address</label>
                        </div>
                    </div>
                    <!-- EMPLOYMENT DETAILS -->
                    <div class="detailCat">
                        <h3>Employment Details</h3>
                    </div>   
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Position" required />
                            <label for ="floatingInput" class="">Position</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Department" required />
                            <label for ="floatingInput" class="">Department</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="date" placeholder="Date Hired" required />
                            <label for ="floatingInput" class="">Date Hired</label>
                        </div>
                        <div class="form-group col-md-6">
                            <!-- <input class="form-control form-control-sm" type="text" placeholder="Employment Status" required /> -->
                            <label for ="floatingInput" class="form-control-md empStat">Employment Status</label>
                            <select id="#" class="form-control deets2">
                                <option>Fixed Term</option>
                                <option>Probationary</option>
                                <option>Permanent</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Rank" required />
                            <label for ="floatingInput" class="">Rank</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets" type="text" placeholder="Salary" required />
                            <label for ="floatingInput" class="">Salary</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets" type="date" placeholder="Date Hired" required />
                            <label for ="floatingInput" class="">Date of Permanency</label>
                        </div>
                    </div>
                    <!-- GOVERNMENT NUMBERS -->
                    <div class="detailCat">
                        <h3>Government Numbers</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-4">
                            <input class="form-control form-control-md deets"  type="text" placeholder="SSS"/>
                            <label for = "floatingInput" class="">SSS</label>
                        </div>
                        <div class="form-floating col-md-4">
                            <input class="form-control form-control-md deets"  type="text" placeholder="PhilHealth"/>
                        <label for = "floatingInput" class="">PhilHealth</label>
                        </div>
                        <div class="form-floating col-md-4">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Middle Name"/>
                            <label for = "floatingInput" class="">Pag-IBIG</label>
                        </div>            
                    </div>   
                    <!-- EDUCATIONAL ATTAINMENT -->
                    <div class="detailCat">
                        <h3>Educational Attainment</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Bachelor's Degree"/>
                            <label for = "floatingInput" class="">Bachelor's Degree</label>
                        </div>    
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Major"/>
                            <label for = "floatingInput" class="">Major</label>
                        </div>   
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Honors Received"/>
                            <label for = "floatingInput" class="">Honors Received</label>
                        </div>     
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Master's Degree"/>
                            <label for = "floatingInput" class="">Master's Degree</label>
                        </div>     
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Doctoral Degree"/>
                            <label for = "floatingInput" class="">Doctoral Degree</label>
                        </div>     
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets"  type="text" placeholder="License/s"/>
                            <label for = "floatingInput" class="">License/s</label>
                        </div>     
                    </div>
                    <!-- LEAVE -->
                    <div class="detailCat">
                        <h3>Leave Credit</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Vacation Leave"/>
                            <label for = "floatingInput" class="">Vacation Leave</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Sick Leave"/>
                        <label for = "floatingInput" class="">Sick Leave</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Emergency Leave"/>
                            <label for = "floatingInput" class="">Emergency Leave</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Maternity/Paternity Leave"/>
                            <label for = "floatingInput" class="">Maternity/Paternity Leave</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Solo Parent Leave"/>
                        <label for = "floatingInput" class="">Solo Parent Leave</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-12">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Others"/>
                            <label for = "floatingInput" class="">Others</label>
                        </div>
                    </div>       
                        <hr>

                    <!-- EMERGENCY CONTACT DETAILS -->
                    <div class="detailCat">
                        <h3>Emergency Contact Details</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-7">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Contact Person"/>
                            <label for = "floatingInput" class="">Contact Person</label>
                        </div>
                        <div class="form-floating col-md-5">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Relation"/>
                        <label for = "floatingInput" class="">Relation</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-floating col-md-5">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Contact Number"/>
                            <label for = "floatingInput" class="">Contact Number</label>
                        </div>
                        <div class="form-floating col-md-7">
                            <input class="form-control form-control-md deets"  type="text" placeholder="Address"/>
                        <label for = "floatingInput" class="">Address</label>
                        </div>
                    </div>

                    <!--Submit button-->
                    <div class="row justify-content-center">
                        <div class="form-group col-md-12 subbtn">
                            <input class="tosub" type="submit" value="Add Employee"/>
                        </div>
                    </div>                        
                </form>
            </div>
        </div>
     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/471326bbab.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>