<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact Us Form In PHP</title>
  </head>
  <style>
    * {
      padding: 0px;
      margin: 0px;
    }

    .container {
      height: 100vh;

      display: flex;
      align-items: center;
      justify-content: center;
      font-family: sans-serif;
      background: rgb(148, 124, 255);
      background: linear-gradient(90deg, rgba(148, 124, 255, 1) 0%, rgba(0, 168, 255, 1) 100%);
    }

    .card {
      display: flex;
      flex-direction: column;
      width: 20em;
      background-color: rgba(255, 255, 255, 0.575);
      padding: 1.5em;
      border-radius: 10px;
    }

    .card:hover {
      background-color: rgba(255, 255, 255, 0.7);
      transition: 0.2s;
    }

    .form {
      display: flex;
      flex-direction: column;
    }

    input {
      margin-top: 0.5em;
      margin-bottom: 0.5em;
      border-radius: 4px;
      padding: 0.3em;
      background-color: rgba(255, 255, 255, 0.925);
      border: none;
      font-size: small;
      font-weight: 300;
    }

    hr {
      margin-top: 0.5em;
      margin-bottom: 0.5em;
    }

    textarea {
      margin-top: 0.5em;
      margin-bottom: 0.5em;
      border-radius: 4px;
      padding: 0.3em;
      background-color: rgba(255, 255, 255, 0.925);
      border: none;
      font-size: small;
      font-weight: 300;
      font-family: inherit;
    }
    .btn {
      margin-top: 0.5em;
      padding: 0.5em;
      background: rgb(106, 106, 253);
      color: #fff;
      border: none;
      font-size: small;
      font-weight: bold;
    }
  </style>
  <body>
    <div class="container">
      <div class="card mt-5">
        <div class="card-title">
          <h2 class="text-center py-2">Contact Us</h2>
          <hr />
          <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
        </div>
        <div class="card-body">
          <form class="form">
            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2" />
            <input type="email" name="Email" placeholder="Email" class="form-control mb-2" />
            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2" />
            <textarea
              name="msg"
              class="form-control mb-2"
              placeholder="Write The Message"
            ></textarea>
            <button class="btn" name="btn-send">Send</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
