<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Change Password</title>
  <style>
     .container {
  width: 500px;
  margin: 0 auto;
}

h1 {
  font-size: 24px;
  margin-top: 0;
}

form {
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 10px;
}

label {
  font-weight: bold;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btn {
  width: 100%;
  margin-top: 10px;
  background-color: #000;
  color: #fff;
  font-weight: bold;
  border: none;
  cursor: pointer;
}

  </style>
</head>
<body>
  <div class="container">
    <h1>Change Password</h1>
    <form action="/change-password" method="post">
      <div class="form-group">
        <label for="old-password">Old Password</label>
        <input type="password" class="form-control" id="old-password" name="old-password" required>
      </div>
      <div class="form-group">
        <label for="new-password">New Password</label>
        <input type="password" class="form-control" id="new-password" name="new-password" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
      </div>
      <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
  </div>
</body>
</html>