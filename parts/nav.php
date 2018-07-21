<ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a id="test" class="nav-link">
              <i class="material-icons">apps</i>
              <p> Test
                <b class="caret"></b>
              </p>
            </a>
            <div class="tab-s">
              <ul class="nav">
              
              <li class="nav-item">
            <a class="nav-link" href="./alltest.php">
            <span class="sidebar-mini"> ALT </span>
             <span class="sidebar-normal"> All Test </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./upcomingtest.php">
            <span class="sidebar-mini"> UT </span>
            <span class="sidebar-normal"> upcoming Test </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pasttest.php">
            <span class="sidebar-mini"> PT </span>
            <span class="sidebar-normal"> Past Test </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./addtest.php">
            <span class="sidebar-mini"> AT </span>
            <span class="sidebar-normal"> Add Test </span>
            </a>
          </li>
              </ul>
            </div>
          </li>

          
          <li class="nav-item">
            <a  class="nav-link" href="./users.php">
            <i class="material-icons">dashboard</i>
              <p> Users </p>
            </a>
          </li>

        <li class="nav-item ">
				<a id="test1" class="nav-link">
				  <i class="material-icons">apps</i>
				  <p> Groups
					<b class="caret"></b>
				  </p>
				</a>
			  <div  class="tab-s1">
				  <ul class="nav">
					  <li class="nav-item">
						<a class="nav-link" href="./allgroup.php">
						<span class="sidebar-mini"> ALG </span>
						<span class="sidebar-normal "> All group</span>
						</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="./addgroup.php">
						<span class="sidebar-mini"> AG </span>
						<span class="sidebar-normal"> Add group</span>
						</a>
					  </li>
				 </ul>
			</div>
		</li>
      </ul>
    </div>
    </div>
	
	<script type="text/javascript">
		$("#test").on('click', function() {
		  $(".tab-s").toggle("show-tb");
		})
	</script>
		<script type="text/javascript">
		$("#test1").on('click', function() {
		  $(".tab-s1").toggle("show-tb1");
		})
	</script>
