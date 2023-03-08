<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id ="search-bar">
        <label>Search Bar</label>
        <input type="text" id="search" autocomplete="off">
    </div>
  <table id="main" border="0">
        <tr>
            <td id="insrt">
            <form id="addForm">
                <input type="text" name="fnam" id="fnam" placeholder="Enter your First Name"/>
                <input type="text" name="lnam" id="lnam" placeholder="Enter your Last Name"/>
                <input type="button" name="sav" id="sav" value="Submit"/>
            </form>
            

            </td>
        </tr>
        <tr>
        <td id="table-data">
        </td>
        </tr>

    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>
    <div id = "modal">
      <div id = "modal-form">
        <h2>Edit Form</h2>
        <table cellpadding="10" width="100%">
        </table>
        <div id="close-btn">X</div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    
 $(document).ready(function(){
        function loadTable(){
    $.ajax({
        url : "ajax_read.php",
        type : "POST",
        success : function(data){
          $("#table-data").html(data);
        }
      });
    }
    loadTable(); // Load Table Records on Page Load

    $("#sav").on("click",function(t) {
            t.preventDefault();
            var fname = $("#fnam").val();
            var lname = $("#lnam").val();
            if(fname == "" || lname == ""){
            $("#error-message").html("All fields are required.").slideDown();
            $("#success-message").slideUp();
            }
            else{
                $.ajax({
                    url:"ajax_insrt.php",
                    type:"POST",
                    data : {'f':fname, 'l':lname},
                    success:function(data)
                    {
                        if(data == 1){
                        loadTable();
                    $("#addForm").trigger("reset");
                    $("#success-message").html("Data Inserted Successfully.").slideDown();
                    $("#error-message").slideUp();
                    }else{
                    $("#error-message").html("Can't Save Record.").slideDown();
                    $("#success-message").slideUp();
                    }

                    }
                });
                }
            
    }); 
    $(document).on("click",".delete-btn",function()
    {
        var st =$(this).data("id");
        var element = this;
        $.ajax({
            url:"delete_ajax.php",
            type:"POST",
            data: {idsd : st},
            success:function(reas)
            {
                if(reas==1)
                {
                   $(element).closest("tr").fadein();
                }
                else{
                    alert("cannt delete Record");

                }

            }

        });

    });
    $(document).on("click",".edit-btn",function()
    {
        $("#modal").show();
        var st =$(this).data("eid");
        var element = this;
        $.ajax({
            url:"ajax_update.php",
            type:"POST",
            data: {idsd : st},
            success:function(reas)
            {
                $("#modal-form table").html(reas);
            }
        })

    });
    $("#close-btn").on("click",function()
    {
        $("#modal").hide();

    });
    $(document).on("click","#edit_submit",function(){
        var s_id = $("#edit_id").val();
        var fname = $("#edit_fname").val();
        var lname = $("#edit_lname").val();
      
        $.ajax({
            url:"ajax_update_main.php",
            type:"POST",
            data: {id : s_id, f_name: fname,l_name: lname},
             success:function(reas)
            {
                if(reas ==1)
                {
                  $("#modal").hide();
                  loadTable();
                }
            }

        });

    });
    $("#search").on("keyup",function(){
       var search_item = $(this).val();

       $.ajax({
        url:"ajax_live_search.php",
            type:"POST",
            data: {search:search_item },
            success:function(reas)
            {
                $("#table-data").html(reas)

            }

       });
    });

    

});
  
</script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>