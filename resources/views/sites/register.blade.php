                            <h2>Register</h2>
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
                            
                         
                             
                             
                            