<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="JS/jquery-3.2.1.min.js"></script>
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/bootstrap.js"></script>
        <link rel="stylesheet" href="ADMINSTYLE.css">

</head>
<body>
                <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            ADMINISTRATION
                        </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dashboard" style="font-size:24px"></i>
                                    Dashboard</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-anchor" style="font-size:24px"></i>
                                    Organizations</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-gears" style="font-size:24px"></i> Advanced
                                </a>
                            </li>
                        <li class="sidebar-brand">
                            USER
                        </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user-circle" style="font-  size:24px"></i>
                                        Manage Accounts</a></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out" style="font-size:24px"></i>
                                        Log out</a></li>
                    </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                    <nav class="navbar navbar-default">
                 <a href="#" class="nav-toggler" id="menu-toggle"><i style="font-size:24px;padding:10px;" class="fa">&#xf0c9;</i></a>
                </nav>
                  <div class="page-header">
                <h1>ADD ORGANIZATION</h1>
                </div>
<div class="addform">
        <form>
          <div class="form-group">
            <label for="org-name">Name of Organization</label>
            <input type="text" class="form-control" id="org-name" placeholder="Enter Organization Name" required>
          </div>
          <div class="form-group">
            <label for="org-number">Recognition Number</label>
            <input type="password" class="form-control" id="org-number" placeholder="Recognition Number" required>
          </div>
          <div class="form-group">
            <label for="org-type">Type of Organization</label>
            <select class="form-control" id="org-type" required>
                <option>PLEASE CHOOSE ONE</option>
                <option>COLLEGE BASED</option>
                <option>UNIVERSITY WIDE</option>
            </select>

          </div>
            <div class="form-group">
            <label for="org-college">College</label>
            <input type="text" class="form-control" id="org-college" placeholder="Enter Organization's College" required>
          </div>

            <div class="form-group">
            <label for="org-date">Date of Formation</label>
            <input type="date" class="form-control" id="org-date" placeholder="Enter Organization's Date of Formation" required>
          </div>

          <div class="form-group">
              <div clasS="LOGO">
                  <label for="org-logo">Upload Logo</label>
                  <input type="file" class="form-control-file" id="org-logo">
              </div>
         </div>

          <fieldset class="form-group">
            <legend>Nature of Organization</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="org-nature" id="org-nature1" value="option1" checked>
               ACADEMIC
              </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="org-nature" id="org-nature2" value="option2">
              FRATERNITY/SORORITY
              </label>
            </div>
            <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="org-nature" id="org-nature3" value="option3" >
               SPIRITUAL/RELIGIOUS
              </label>
            </div>
              <div class="right">
                  <div class="form-check ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="org-nature" id="org-nature4" value="option4" >
                       ENVIRONMENTAL
                      </label>
            </div>
                <div class="form-check ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="org-nature" id="org-nature5" value="option5" >
                        CIVIC/SOCIAL
                    </label>
                </div>
                <div class="form-check ">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="org-nature" id="org-nature6" value="option6" >
                        POLITICAL
                    </label>
                </div>
              </div>
          </fieldset>
          <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
</div>

            </div>
            <div class="container">
            <table class="table table-striped">
    <thead>
      <tr>
          <th>No.</th>
          <th>Recognition Number</th>
          <th>Organization</th>
          <th>Type</th>
          <th>College</th>
          <th>Admin</th>
          <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <td>01</td>
        <td>2015890</td>
        <td>SWITS</td>
        <td>COLLEGE BASED</td>
        <td>CICT</td>
        <td>-----</td>
        <td>-----</td>
    </tbody>
  </table>
            </div>

    </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


<script src="JS/bootstrap.min.js"></script>
</body>
</html>
