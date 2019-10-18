<div class="sidebar">
	
    <!-- Scrollbar -->
    <div class="scrollbar-inner sidebar-wrapper">
					
        <!-- User -->
        <div class="user">
						
            <!-- Photo -->          
            <div class="photo">
				<img src="assets/img/profile.jpg">
			</div>
            <!-- /# Photo --> 
			
            <!-- Info --> 
            <div class="info">
				
                <!-- Details --> 
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
					<span>
						Hizrian
						<span class="user-level">Administrator</span>
						<span class="caret"></span>
					</span>
				</a>
                <!-- /# Details --> 
							
                <div class="clearfix"></div>

                <!-- Settings --> 
				<div class="collapse in" id="collapseExample" aria-expanded="true" style="">                    
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>              
			    </div>
                <!-- /# Settings -->

            </div>
            <!-- /# Info -->

        </div>
        <!-- /# User -->
					
        <!-- Nav -->         
        <ul class="nav">

            <!-- Item - Dashboard -->  		
            <li class="nav-item" id="dashboard">
				<a href="{{ action('Admin@Dashboard') }}">
					<i class="la la-dashboard"></i>
					<p>Dashboard</p>
					<span class="badge badge-count">1</span>
				</a>
			</li>
            <!-- /# Item - Dashboard  -->

            <!-- Item - Users -->  		
            <li class="nav-item" id="users">
				<a href="{{ action('Admin@Users') }}">
					<i class="la la-user"></i>
					<p>Users</p>
					<span class="badge badge-count">2</span>
				</a>
			</li>
            <!-- /# Item - Users  -->

            <!-- Item - View PDS -->  		
            <li class="nav-item" id="view-pds">
				<a href="{{ action('Admin@ViewPDS') }}">
					<i class="la la-file-text-o"></i>
					<p>View PDS</p>
					<span class="badge badge-count">3</span>
				</a>
			</li>
            <!-- /# Item - View PDS  -->

            <!-- Item - Edit PDS -->  		
            <li class="nav-item" id="edit-pds">
				<a href="{{ action('Admin@EditPDS') }}">
					<i class="la la-edit"></i>
					<p>Edit PDS</p>
					<span class="badge badge-count">4</span>
				</a>
			</li>
            <!-- /# Item - Edit PDS  -->
						
		</ul>
        <!-- /# Nav -->  

	</div>
    <!-- /# Scrollbar -->

</div>