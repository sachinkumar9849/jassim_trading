<?php include 'header.php'; ?>
<section class="inner-slider" style="background:url(./images/inner-bg.png)">
    <div class="container">
        <div class="inner-slide-detail">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <h1>Apply Now</h1>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>
            </div>

        </div>
    </div>
</section>
<section class="section job-apply-form">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="job-apply-form-wrap shadow">
                    <h4 class="pb-3">Fill this form to apply for the job post !</h4>

                    <form action="" class="pt-5">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="education" class="form-label">Education</label>

                                    <select class="form-select" id="education">
                                <option selected>Select One</option>
                                <option value="slc">SLC</option>
                                <option value="intermidate">Intermidate(+2)</option>
                                <option value="bachelor">Bachelor Degree</option>
                                <option value="master">Master Degree</option>
                              </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="education" class="form-label">Job Post</label>

                                    <select class="form-select" id="education">
                                <option selected>Select One</option>
                                <option value="job1">job1</option>
                                <option value="job2">job2</option>
                                <option value="job3">job3</option>
                                <option value="job4">job4</option>
                              </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Upload Resume</label>
                                    <input class="form-control" type="file" id="photo">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="citizen_photo" class="form-label">Upload Cover Letter</label>
                                    <input class="form-control" type="file" id="citizen_photo">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary mt-5">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12"></div>
        </div>
    </div>
</section>

<?php include 'clients.php'; ?>

<?php include 'footer.php'; ?>