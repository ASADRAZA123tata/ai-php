<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practising Again Ajax</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table id="main2" border="0">
        <tr>
            <td>
                <h1 id="heading">
                    PHP WITH AJAX
                </h1>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id ="form-data">
                  <label>Name: </label> <input type="text" id="Name" name="Name">
                  <label>Age: </label> <input type="number" id ="Age" name="age">
                   <label>Address: </label> <input type="text" id ="Address" name="address">
                  <label>Image: </label> <input type="file" id ="Image" name = "image">
                  <input type="submit" id="save-button" value ="Save">
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
               
            </td>
        </tr>
    </table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function loadTable(){
        $.ajax({
           url : "ajax_read2.0.php",
           type : "POST",
           success : function(data){
             $("#table-data").html(data);
           }
        });

        };
        loadTable(); 
        $("#save-button").on("click",function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "ajax_insert2.0.php",
                type : "POST",
                data : formData,
                contentType : false,
                processData : false,
                succes : function(data){
                    // if(data == 1)
                    // {
                    //   loadTable();
                    // }else{
                    //     echo "cannot save record";
                    // }
                  console.log(data);
                }
            });
        });
        

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>