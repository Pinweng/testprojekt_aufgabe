<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./form/index.css">
<title>Document</title>
</head>
<body>
<form class="form" method="post" action="#">
    
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="firstname" id="input-firstname" value="<?php echo htmlspecialchars($firstname ?? "") ?> ">
            <span>first name</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="lastname" id="input-lastname" value="<?php echo htmlspecialchars($lastename ?? "") ?>">
            <span>last name</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="email" id="input-email" value="<?php echo htmlspecialchars($email ?? "") ?>">
        <span>email</span>
    </label> 
        
    <label>
        <input required="" type="tel" placeholder="" class="input" name="contactnumber" id="input-contactnumber" value="<?php echo htmlspecialchars($contactnumber ?? "" )?>">
        <span>contact number</span>
    </label>
    
    
    <button class="fancy" type="submit" >
        <span class="top-key"></span>
        <span class="text">submit</span>
        <span span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>
</form>

<small><?php echo $errormsg ?? ''; ?></small>
</body>
</html>