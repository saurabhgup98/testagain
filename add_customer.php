<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <form id="form" method="post" action="action/action_addcustomer.php" >
        <div class="row"><span id="error"></span></div>
            <div class="form-group">
                <label for="custname">Customer Name<span class="required">*</span></label>
                <input type="text" class="custname" required id="custname" placeholder="Customer Name" name="custname">
                <span id="errorname"></span>
            </div>
            <p class="text-center"><input type="submit" class="btn" onclick="callResult()"></button></p>
        </div>
    </form>

    <script src="assets/scripts/jquery.min.js"></script>
    <script type="text/javascript">

        
        function validatecustomername() {
            var custname = $("#custname").val();
            var reg = /^[-_a-zA-Z0-9]{5,}$/;
            if(reg.test(custname)){					
                return true;
            }else{
                return false;
            }
        }

        $(document).on('keyup', '.custname', function() {    	
            if(!validatecustomername()) {
                $("#errorname").
                html("<p style='color:red; font-size:15px'> customer name should contain atleast 5 characters and no spaces allowed");      
            } else {
                $("#errorname").text("correct user name");         
            }
        });

        function showSubmitBtn() {				
            if(validatecustomername()){								
                return true;
            }else{					
                return false;
            }
        };

        function callResult() {
				$('#error').html('');

				var custname = $("#custname").val();
                var error = '';

                if (custname = " ") {
                    error = 'Enter all fields';
					$('#error').html(error);                    
                }else if (showSubmitBtn() == false) {					
					error = 'please correct required fields'; 
					$('#error').html(error);
				} else {
                    console.log("success");
                }
        }
    </script>
</body>
</html>