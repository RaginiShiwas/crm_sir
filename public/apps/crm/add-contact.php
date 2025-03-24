<?php include 'header.php'; ?>
      <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="border-bottom mb-7 mx-n3 px-2 mx-lg-n6 px-lg-6">
          <div class="row">
            <div class="col-xl-9">
              <div class="d-sm-flex justify-content-between">
                <h2 class="mb-4">Create a new lead</h2>
                <div class="d-flex mb-3">
                  <button class="btn btn-phoenix-primary me-2 px-6">Cancel</button>
                  <button class="btn btn-primary">Create lead</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-9">
            <div class="d-flex align-items-end position-relative mb-7">
              <input class="d-none" id="upload-avatar" type="file" />
              <div class="hoverbox" style="width: 150px; height: 150px">
                <div class="hoverbox-content bg-black rounded-circle d-flex flex-center z-index-1" style="--phoenix-bg-opacity: .56;"><span class="fa-solid fa-camera fs-7 text-300"></span></div>
                <div class="position-relative bg-400 rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                  <div class="avatar avatar-5xl"><img class="rounded-circle" src="../../assets/img/team/150x150/58.webp" alt="" /></div>
                  <label class="w-100 h-100 position-absolute z-index-1" for="upload-avatar"></label>
                </div>
              </div>
            </div>
            <h4 class="mb-3">Lead Information </h4>
            <form class="row g-3 mb-9">
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectOwner">
                    <option selected="selected"> Max Ernst</option>
                    <option value="1">Ernst</option>
                    <option value="2">Max </option>
                  </select>
                  <label for="floatingSelectOwner">Lead owner</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputFirstname" type="text" placeholder="First name" />
                  <label for="floatingInputFirstname">First name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputLastname" type="text" placeholder="Last name" />
                  <label for="floatingInputLastname">Last name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputCompany" type="text" placeholder="Company" />
                  <label for="floatingInputCompany">Company</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputTitle" type="text" placeholder="title" />
                  <label for="floatingInputTitle">Title</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputEmail" type="text" placeholder="email" />
                  <label for="floatingInputEmail">Email</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputAlternativeEmail" type="text" placeholder="alternative email" />
                  <label for="floatingInputAlternativeEmail">Alternative Email</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputPhone" type="tel" placeholder="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                  <label for="floatingInputPhone">Phone</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputWebsite" type="text" placeholder="website" />
                  <label for="floatingInputWebsite">Website</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputLinkedin" type="text" placeholder="linkedin" />
                  <label for="floatingInputLinkedin">linkedin</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputSkype" type="text" placeholder="skype" />
                  <label for="floatingInputSkype">Skype id</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputTwitter" type="text" placeholder="twitter" />
                  <label for="floatingInputTwitter">Twitter </label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputEmployees" type="text" placeholder="employees" />
                  <label for="floatingInputEmployees">Number of employees</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputRevenue" type="text" placeholder="revenue" />
                  <label for="floatingInputRevenue">Annual revenue </label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectIndustry">
                    <option selected="selected">Large Enterprise</option>
                    <option value="1">Manufacturing</option>
                    <option value="2">Education</option>
                    <option value="3">Technology</option>
                  </select>
                  <label for="floatingSelectIndustry">industry</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectStatus">
                    <option selected="selected">New</option>
                    <option value="1">suspended</option>
                    <option value="2">ongoing</option>
                    <option value="3">Current</option>
                  </select>
                  <label for="floatingSelectStatus">Lead status </label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectLeadSource">
                    <option selected="selected">Advertisement</option>
                    <option value="1">Advertisement One</option>
                    <option value="2">Advertisement Two</option>
                    <option value="3">Consulting</option>
                  </select>
                  <label for="floatingSelectLeadSource">lead source</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectRating">
                    <option selected="selected"> Active</option>
                    <option value="1">Inactive</option>
                    <option value="2">Active</option>
                  </select>
                  <label for="floatingSelectRating">rating</label>
                </div>
              </div>
              <h4 class="mt-6">Address Information</h4>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputStreet" type="text" placeholder="street" />
                  <label for="floatingInputStreet">Street</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectCity">
                    <option selected="selected"> Neo centrola</option>
                    <option value="1">London</option>
                    <option value="2">New York </option>
                  </select>
                  <label for="floatingSelectCity">City</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectState">
                    <option selected="selected"> Qualimando</option>
                    <option value="1">Sovereign</option>
                    <option value="2">Northeastern United States</option>
                  </select>
                  <label for="floatingSelectState">State</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectCountry">
                    <option selected="selected"> United Empire of Brekania</option>
                    <option value="1">UK</option>
                    <option value="2">USA</option>
                  </select>
                  <label for="floatingSelectCountry">Country</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-floating">
                  <input class="form-control" id="floatingInputZipcode" type="text" placeholder="zip code" />
                  <label for="floatingInputZipcode">zip code</label>
                </div>
              </div>
              <h4 class="mt-6">Description</h4>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 128px"></textarea>
                  <label for="floatingProjectOverview">Lead description</label>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end mt-6">
                <button class="btn btn-primary">Create lead</button>
              </div>
            </form>
          </div>
        </div>
        <?php include 'footer.php'; ?>      