<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom Styyes -->
    <link rel="stylesheet" href="/css/user_list.css">
<title>User list exercise</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
      <button type="button" id="" class="btn btn-primary pds-btn pds-btn__primary pds-shadow pds-shadow-hover float-right mb-3" data-toggle="modal" data-target="#createNewCandidate">+ Create new Candidate</button>
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Candidate Name</th>
                <th class="text-center">Status</th>
                <th class="action text-right">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            if (isset($users)){
            foreach ($users as $key) {
              ?>
                   
                    
                    <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="<?php echo($key['profile_pic']); ?>" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#"><?php echo($key['first_name']); ?> <?php echo($key['last_name']); ?> </a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i><?php echo($key['position']); ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                  <span class="candidate-list-time order-1"><?php echo($key['status']); ?></span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
                    
    
                <?php 
            }
        }
        ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal: Create new study -->
<div class="modal fade" id="createNewCandidate" tabindex="-1" aria-labelledby="createNewCandidate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content pds-modal-content">
        <div class="modal-header pds-modal-header">
            <h5 class="modal-title" id="createNewStudyLabel">Create new candidate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="material-icons pds-modal-header__icon">close</span>
            </button>
        </div>
        <div class="modal-body pds-modal-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="CandidateFirstName" class="form-label mb-0 pds-text--grey-dark pds-form-label">Candidate first name</label>
                    <input type="text" class="form-control pds-form-control" name="CandidateFirstName" id="CandidateFirstName" aria-describedby="CandidateFirstName" required="required">
                </div>
                <div class="mb-3">
                    <label for="studyDescription" class="form-label mb-0 pds-text--grey-dark pds-form-label">Candidate last name</label>
                    <input type="text" class="form-control pds-form-control" name="studyDescription" id="studyDescription">
                </div>
                <div class="mb-3">
                    <label for="studyDescription" class="form-label mb-0 pds-text--grey-dark pds-form-label">profile pic (URL)</label>
                    <input type="text" class="form-control pds-form-control" name="studyDescription" id="studyDescription">
                </div>
                <div class="mb-3">
                    <label for="studyDescription" class="form-label mb-0 pds-text--grey-dark pds-form-label">Position</label>
                    <input type="text" class="form-control pds-form-control" name="studyDescription" id="studyDescription">
                </div>
                <div class="pds-mb-24">
                    <label for="StudyFolder" class="form-label mb-0 pds-text--grey-dark pds-form-label">Status</label>
                    <select class="form-control pds-form-control" name="StudyFolder" aria-label="Please select a folder for the new study" id="StudyFolder">
                    <option value="Shortlisted" selected>Shortlisted</option>
                      <option value="Active" >Active</option>
                      <option value="Archived" >Archived</option>
                      <option value="Test" >Test</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer justify-content-start pds-mb-40 pds-modal-footer">
            <button type="submit" name="submit_study" class="btn btn-primary pds-btn pds-btn__primary pds-shadow pds-shadow-hover">Create study</button>
            <button type="button" class="btn pds-btn pds-btn__secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>