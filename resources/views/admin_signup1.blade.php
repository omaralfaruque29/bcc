<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<form method="post" action="{{url('/create-admin')}}">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control p_input" name="admin_email" placeholder="email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input" name="admin_password" placeholder="password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
              </form>

</body>
</html>

