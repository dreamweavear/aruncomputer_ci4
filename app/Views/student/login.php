



<main class="main-content p-4">



   <div class="container my-4">

 <!--

   <h2>Student Login</h2>

    <?php if(session()->getFlashdata('error')): ?>

        <p style="color:red"><?= session()->getFlashdata('error') ?></p>

    <?php endif; ?>



    <form method="post" action="<?= site_url('student/attempt') ?>">

        <input type="text" name="email" placeholder="Email or Mobile" required><br><br>

        <input type="password" name="password" placeholder="Password" required><br><br>

        <button type="submit">Login</button>

    </form>

        <p>Don't have an account? <a href="<?= site_url('admissionpage') ?>">Apply Now</a></p>

    <p>Forgot your password? <a href="<?= site_url('student/reset-password') ?>">Reset Password</a></p> 

    <p>Need help? <a href="<?= site_url('contact') ?>">Contact Us</a></p>   

    <p>Back to <a href="<?= site_url('/') ?>">Home</a></p>



    </div>

    <div class="container my-4">

        <div class="text-center">

            <button class="btn btn-primary" onclick="window.location.href='<?= site_url('student/login') ?>'">Login as Student</button>

            <button class="btn btn-secondary" onclick="window.location.href='<?= site_url('admin/login') ?>'">Login as Admin</button>

    -->



<div class="container mt-5">

    <div class="card shadow p-4 col-md-6 mx-auto">

        <h2 class="mb-3">Student Login</h2>



        <?php if(session()->getFlashdata('error')): ?>

            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>

        <?php endif; ?>



        <form method="post" action="<?= site_url('student/attempt') ?>">

            <div class="mb-3">

                <label>Email or Mobile</label>

                <input type="text" name="email" class="form-control" required>

            </div>

            <div class="mb-3">

                <label>Password</label>

                <div class="input-group">

                    <input type="password" name="password" class="form-control" id="student-password" required>

                    <button type="button" class="btn btn-outline-secondary" id="student-toggle-password">

                        <i class="fas fa-eye" id="student-eye-icon"></i>

                    </button>

                </div>

            </div>

            <button class="btn btn-primary w-100">Login</button>

        </form>



        <div class="mt-3 text-center">

            <a href="<?= site_url('admission') ?>">Apply Now</a> |

            <a href="#">Reset Password</a>

        </div>

    </div>

</div>







<script>
document.getElementById('student-toggle-password').addEventListener('click', function() {
    const passwordField = document.getElementById('student-password');
    const eyeIcon = document.getElementById('student-eye-icon');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.className = 'fas fa-eye-slash';
    } else {
        passwordField.type = 'password';
        eyeIcon.className = 'fas fa-eye';
    }
});
</script>



    </div>  

</main>

</div>

</div>

