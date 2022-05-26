<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title></title>
</head>
<body class="bg-dark">
    <div style="background-color:darkslategray;width:430px;margin-left: 35%;margin-top: 15%;border-radius:20px; " class="form">
        <center>
        <table>
        <form method="POST" action="dataProcess.php">
           <p style="color:white"> This is the Register Page</p>
        <tr>
            <td style="color:white">Name:</td>
            <td><input type="text" name="inpName"></td>
        </tr>
        <tr>
            <td style="color:white">Family Name:</td>
            <td><input type="text" name="inpFam"></td>
        </tr>
         <tr>
            <td style="color:white">Birth Date:</td>
            <td><input type="text" name="inpBirth"></td>
        </tr>
        <tr>
            <td style="color:white">UserName:</td>
            <td><input type="text" name="inpUser"></td>
        </tr>
        <tr>
            <td style="color:white">Password:</td>
            <td><input type="password" name="inpPass"></td>
        </tr>
        <tr>
            <td style="color:white">Configure Password:</td>
            <td><input type="password" name="inpConfPass"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"><button class="btn-success">New Add</button></td>
            <td></td>
        </tr>
    </form>
    </table>
        
        </center>>
    </div>
</body>
