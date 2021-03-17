<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        </style>
        </head>
        <body>
        
        <h2>leave us a message</h2>
        <p>We’re here to help you. Get in touch with us.</p>
        
        <img src="gt.jfif" style="width:50%;">
        
        </body>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}
            
            input[type=text], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid darkorange;
              border-radius: 4px;
              box-sizing: border-box;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: vertical;
            }
            
            input[type=submit] {
              background-color: red;
              color: rosybrown;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            
            input[type=submit]:hover {
              background-color: darkorange;
            }
            
            .container {
              border-radius: 5px;
              background-color: darkorange;
              padding: 15px;
            }
            </style>
            </head>
            <body>
            
            <h3>message us through..</h3>
            
            <div class="container">
              <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
                <label for="country">Country</label>
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>
            
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            
                <input type="submit" value="Submit">
              </form>
            </div>
</body>
</html>