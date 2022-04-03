<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Mali">
</head>
<style>

body{
  font-family : Mali;
}
</style>
<body><br><br>
<div class="container">
  <center><h1>Codeigniter Add </h1></center><br>
 </div>
<body><div class="card mx-auto" style="max-width: 450px; margin-top:100px border-style: outset ;">
  <div class="card-body ">
    

    <form id="add_create" method="post" id="membername" name="membername" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Firstname</label>
        <input type="text" name="Firsname" class="form-control" >
      </div>

      <div class="form-group">
        <label>Lastname</label>
        <input type="text" name="Lastname" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="Email" name="Email" class="form-control"  placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label>Time</label>
        <input type="Text" name="Time" class="form-control">
      </div>

      <div class="form-group">
        <label>Time In</label>
        <input type="Text" name="Time_in" class="form-control">
      </div>

      <div class="form-group">
        <label>Time Out</label>
        <input type="Text" name="Time_out" class="form-control">
      </div>

      <div class="form-group">
       <center><h3> <button type="submit" class="btn btn-info">Add To Information<h3></button></center>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          Firsname: {
            required: true,
          },

          Lastname: {
            required: true,
          },

          Email: {
            required: true,
            maxlength: 60,
            email: true,
          },

          Time: {
            required: true,
          },

          time_in: {
            required: true,
          },

          time_out: {
            required: true,
          },


        },
        messages: {
          Firsname: {
            required: "First name is required.",
          },
          Lastname: {
            required: "Last name is required.",
          },
          Email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
          Time: {
            required: "Please specify the period of use.",
          },
          Time_in: {
            required: "Please specify the time of entry.",
          },
          Time_out: {
            required: "Please specify the time of departure.",
          },
        },
      })
    }
  </script>
</body>

</html>