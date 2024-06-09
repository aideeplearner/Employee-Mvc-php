
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:70px;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><h4>Home</h4> <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button class="btn-danger"><a class="nav-link text-light" data-toggle="modal" data-target="#exampleModal"> Logout</a></button>
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- EMPLOYEE Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        Do You Want to Log Out ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary"><a class="text-light" href="<?php echo ROOT ?>/index.php?controller=Main & action=loggedout"><span class="glyphicon glyphicon-log-out"></span>Ok</a></button>
      </div>
    </div>
  </div>
</div>
<!-- authorizer -->
<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        Only Admins Can Change the Data Please Contact Admin
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-btn-outline-info" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>





