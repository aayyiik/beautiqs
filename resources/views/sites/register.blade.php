<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Login Form with Blue Background</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
/* body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
} */

.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>
</head>
<body>
<div class="signup-form">
    <form action="/postregister" method="POST">
		<h2>Register</h2>
		<p>Daftarkan dirimu menjadi pegawai Beautiqs Store</p>
		<hr>
    {{csrf_field()}}
    <div class="from-group">
        <label for="id_kota" class="form-label">Id Kota</label>
        <select name="id_kota" class="form-control">
              <option value="">- Pilih -</option>
            @foreach ($kotas as $kota)
              <option value="{{ $kota->id_kota }}">{{ $kota->nama_kota }}</option>
            @endforeach                      
        </select>
      </div>

      <div class="from-group">
        <label for="id_role" class="form-label">Id Role</label>
        <select name="id_role" class="form-control">
              <option value="">- Pilih -</option>
            @foreach ($roles as $role)
              <option value="{{ $role->id_role }}">{{ $role->nama_role }}</option>
            @endforeach                      
        </select>
      </div>

      <div class="from-group">
        <label for="nama_user" class="form-label">Nama User</label>
        <input name="nama_user" type="text" class="form-control" id="nama_user" placeholder="Nama User">
      </div>

      <div class="from-group">
        <label for="alamat" class="form-label">Alamat User</label>
        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat User">
      </div>

      <div class="from-group">
        <label for="telp" class="form-label">Telp</label>
        <input name="telp" type="text" class="form-control" id="telp" placeholder="Telp User">
      </div>

      <div class="from-group">
        <label for="email" class="form-label">Username</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Username">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input name="password" type="password" class="form-control" id="password" name="password">
      </div>
		
		  <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
      </div>
    </form>

</body>
</html>

{{-- <h2>Register</h2>
                                <form action="/postregister" method="POST">
                                    {{csrf_field()}}
                                    <div class="from-group">
                                        <label for="id_kota" class="form-label">Id Kota</label>
                                        <select name="id_kota" class="form-control">
                                              <option value="">- Pilih -</option>
                                            @foreach ($kotas as $kota)
                                              <option value="{{ $kota->id_kota }}">{{ $kota->nama_kota }}</option>
                                            @endforeach                      
                                        </select>
                                      </div>
                    
                                      <div class="from-group">
                                        <label for="id_role" class="form-label">Id Role</label>
                                        <select name="id_role" class="form-control">
                                              <option value="">- Pilih -</option>
                                            @foreach ($roles as $role)
                                              <option value="{{ $role->id_role }}">{{ $role->nama_role }}</option>
                                            @endforeach                      
                                        </select>
                                      </div>
                    
                                      <div class="from-group">
                                        <label for="nama_user" class="form-label">Nama User</label>
                                        <input name="nama_user" type="text" class="form-control" id="nama_user" placeholder="Nama User">
                                      </div>
                    
                                      <div class="from-group">
                                        <label for="alamat" class="form-label">Alamat User</label>
                                        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat User">
                                      </div>
                    
                                      <div class="from-group">
                                        <label for="telp" class="form-label">Telp</label>
                                        <input name="telp" type="text" class="form-control" id="telp" placeholder="Telp User">
                                      </div>
                    
                                      <div class="from-group">
                                        <label for="email" class="form-label">Username</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Username">
                                      </div>

                                      <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input name="password" type="password" class="form-control" id="password" name="password">
                                      </div>
                            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div>
                                </form>
                             --}}
                         
                             
                             
                            