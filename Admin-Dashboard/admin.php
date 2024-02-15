<!-- codepen link for form https://codepen.io/NielsVoogt/pen/eYBQpPR -->
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="demo-page">
  <div class="demo-page-navigation">
    <nav>
        <h1 style='font-weight: 500;
        font-size: 1.25rem;
        color: #000;
        margin: 0.85rem;'>Navigation</h1>
      <ul> 
        <li>
          <a href="#basic-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
              <polygon points="12 2 2 7 12 12 22 7 12 2" />
              <polyline points="2 17 12 22 22 17" />
              <polyline points="2 12 12 17 22 12" />
            </svg>
            Basic Information</a>
        </li>
        <li>
          <a href="#social-links">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
          <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
        </svg>
            Social Profiles</a>
        </li>
        <li>
          <a href="#Assignments">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather">
              <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z" />
              <line x1="16" y1="8" x2="2" y2="22" />
              <line x1="17.5" y1="15" x2="9" y2="15" />
            </svg>
            Assignments</a>
        </li>
      </ul>
    </nav>
  </div>
  <main class="demo-page-content">
    <section>
      <div class="href-target" id="intro"></div>
      <h1 class="package-name">Create Account</h1>
      <p>
        Enter the details to create a new account.
      </p>
      
    </section>
    <form method="post" action="dashboard.php">
    <section>
      <div class="href-target" id="basic-info"></div>
      <h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
          <polygon points="12 2 2 7 12 12 22 7 12 2" />
          <polyline points="2 17 12 22 22 17" />
          <polyline points="2 12 12 17 22 12" />
        </svg>
        Basic Information
      </h1>
      
      <div class="nice-form-group">
        <label>Write Something About You</label>
        <input type="text" placeholder="About You" name='about'/>
      </div>

      <div class="nice-form-group">
        <label>Provide a list of your Skills</label>
        <!-- <small></small> -->
        <input type="text" placeholder="Your Skills" name='skills' />
      </div>

      <div class="nice-form-group">
        <label>Give Nice Title to your Dashboard</label>
        <input type="text" placeholder="Enter a personalised title" name='title'/>
        <!-- <small>Or additional text below</small> -->
      </div>
      <div class="nice-form-group">
        <label>Provide a Nice Logo</label>
        <small>only png and jpeg possible</small>
        <input type="file" accept="image/png, image/jpeg"  name='logo'/>
      </div>

      <!--  -->
    </section>

    <section>
      <div class="href-target" id="social-links"></div>
      <h1>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
          <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
        </svg>
        Social Profiles
      </h1>
      <p>Provide Links of your all social profiles.</p>

      <div class="nice-form-group">
        <label>Google Sites</label>
        <input type="url" placeholder="Your Google Site link" value="" name="gsites" />
      </div>

      <div class="nice-form-group">
        <label>LinkedIn</label>
        <input type="url" placeholder="Your LinkedIn link" value="" name="linkedin" />
      </div>


      <div class="nice-form-group">
        <label>GitHub Link</label>
        <input type="url" placeholder="Your Github link" value="" name="github" />
      </div>

      <div class="nice-form-group">
        <label>Blog Link</label>
        <small>if any</small>
        <input type="url" placeholder="Your Blog's link" value="" name="blog" />
      </div>
    </section>

    <section>
      <div class="href-target" id="Assignments"></div>
      <h1>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather">
              <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z" />
              <line x1="16" y1="8" x2="2" y2="22" />
              <line x1="17.5" y1="15" x2="9" y2="15" />
            </svg>
        Assignments
      </h1>
      <p>Provide Links of your all Assignments.</p>

      <div class="nice-form-group">
        <label>Task 1</label>
        <input type="url" placeholder="Task 1 link" value="" name="task1" />
      </div>

      <div class="nice-form-group">
        <label>Task 2</label>
        <input type="url" placeholder="Task 2 link" value="" name="task2" />
      </div>

      <div class="nice-form-group">
        <label>Task 3</label>
        <input type="url" placeholder="Task 3 link" value="" name="task3" />
      </div>

      <div class="nice-form-group">
        <label>Task 4</label>
        <input type="url" placeholder="Task 4 link" value="" name="task4" />
      </div>

      <div class="nice-form-group">
        <label>Task 5</label>
        <input type="url" placeholder="Task 5 link" value="" name="task5" />
      </div>


      <div class="nice-form-group">
        <label>Minor Project Module</label>
        <input type="url" placeholder="Minor Project Module link" value="" name="minorm" />
      </div>

      <div class="nice-form-group">
        <label>Database Module</label>
        <input type="url" placeholder="Database Module link" value="" name="databasem" />
      </div>

      <div class="nice-form-group">
        <label>Your Project (Watch)</label>
        <input type="url" placeholder="Project link" value="" name="watch" />
      </div>
    </section>

    <section>
      <input type='submit' class='to-repo' />
      <input type='reset' class='to-repo' />
      
    </section>
</form>
  </main>
</div>
    </body>
</html>