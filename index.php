<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chat-Box</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat Box</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <br>
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" required/>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name"/>
                    </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" placeholder="Email Address"/>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="text" placeholder="Password"/>
                    </div>

                    <div class="field">
                        <label>Select Profile Image</label>
                        <input type="file"/>
                    </div>
                    <br>
                    <div class="field input">
                        <input class="btn" type="button" value="Continue to Chat"/>
                    </div>
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login Now</a></div>
        </section>
    </div>
</body>
</html>