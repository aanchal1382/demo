<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to SuperCars</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/aanchaljaiswal/partials/_handleLogin.php" method="POST">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="loginEmail" class="form-label">Username</label>
                        <input type="text" class="form-control" id="loginEmail" name="loginEmail"
                        aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>