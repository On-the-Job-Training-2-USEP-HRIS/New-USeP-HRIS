<div class="sidebar">
	
    <!-- Scrollbar -->
    <div class="scrollbar-inner sidebar-wrapper">
					
        <!-- User -->
        <div class="user">        
            <button onClick="CreatePDS('{{ action('DatabasePDS@CreatePDS') }}')" class="btn btn-primary btn-border btn-block">Create PDS <i class="la la-plus"></i></button>   
            <button class="btn btn-primary btn-border btn-block">Save Changes <i class="la la-check"></i></button>
        </div>
        <!-- /# User -->
        
        <!-- Nav -->         
        <ul class="nav">

            <!-- Item - View PDS -->  		
            <li class="nav-item" id="view-pds">
				<a href="{{ action('User@Registration') }}">
					<i class="la la-file-text-o"></i>
					<p>Personal Data Sheet</p>
				</a>
			</li>
            <!-- /# Item - View PDS  -->
						
		</ul>
        <!-- /# Nav -->  

	</div>
    <!-- /# Scrollbar -->

</div>