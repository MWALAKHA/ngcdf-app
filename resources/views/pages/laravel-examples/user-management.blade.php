<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Registered Users"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            
                            
                            
                        </div>

                        <!--admin create user modal -->
                        <div class=" me-3 my-3 text-end">
                            <div id="add-user-modal-trigger">
                              <a class="btn bg-gradient-dark mb-0" href="javascript:;">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New User
                              </a>
                            </div>
                        </div>

                        <div id="add-user-modal" style="display:none;">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <!-- Add form or other content here -->
                                <form method="POST" action="/submit-form">
                                    @csrf
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" required>
                                    {{-- @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                                    {{-- @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
    
                                    <label for="email">Password:</label>
                                    <input type="text" id="password" name="password"required>
                                    {{-- @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                
                                    
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                              </div>
                              
                            </div>
                          </div>
                          
                          
                          
                          <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                              @php
                                  $users = DB::table('users')->select('name','email_verified_at','email','phone','location','about')
                                                              ->orderBy('id','desc')
                                                              ->simplePaginate(5);
                                  echo '<table class="table align-items-center mb-0">';
                                  echo '<thead>';
                                  echo '<tr>';
                                  // echo '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>';
                                  echo '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAME</th>';
                                  echo '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATION DATE</th>';
                                  echo '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">EMAIL</th>';
                                  echo '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PHONE</th>';
                                  echo '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LOCATION</th>';
                                  echo '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SCHOOL</th>';
                                  echo '<th class="text-secondary opacity-7"></th>';
                                  echo '</tr>';
                                  echo '</thead>';
                                  foreach ($users as $row) {
                                      echo '<tbody>';
                                      echo '<tr>';
                                      // echo '<td>' . $row->id . '</td>';
                                      echo '<td>' . $row->name . '</td>';
                                      echo '<td>' . $row->email_verified_at . '</td>';
                                      echo '<td>' . $row->email . '</td>';
                                      echo '<td>' . $row->phone . '</td>';
                                      echo '<td>' . $row->location . '</td>';
                                      echo '<td>' . $row->about . '</td>';
                                      echo '<td class="align-middle">';
                                      echo '<form method="GET" action="user-management">';
                                      echo '<input type="hidden" name="id" value=" ">';
                                      //echo '<button type="submit" class="btn btn-danger btn-link" data-original-title="" title="">';
                                      //echo '<i class="material-icons">delete</i>';
                                      echo'<div class="ms-auto text-end">
                                              <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                  href="javascript:;"><i
                                                      class="material-icons text-sm me-2">delete</i>Delete</a>
                                              <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                      class="material-icons text-sm me-2">edit</i>Edit</a>
                                           </div>';
                                      echo '<div class="ripple-container"></div>';
                                      //echo '</button>';
                                      echo '</form>';
                                      echo '</td>';
                                      echo '</tr>';
                                      echo '</tbody>';
                                  }
                                  echo '</table>';
                                  echo $users->links();
                              @endphp
                          </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

    <script>
        // Get the modal and trigger elements by ID
        var modalTrigger = document.getElementById('add-user-modal-trigger');
        var modal = document.getElementById('add-user-modal');
      
        // Add a click event listener to the trigger element
        modalTrigger.addEventListener('click', function() {
          // Set the display property of the modal to block to show it
          modal.style.display = 'block';
        });
    </script>
      

</x-layout>
