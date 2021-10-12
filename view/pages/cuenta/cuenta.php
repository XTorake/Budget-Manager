<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->
<div class="d-flex align-items-center flex-wrap search-Account bg-white px-0 mb-4">
  <div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-6 col-12 search-dropdown d-flex align-items-center">
    <button type="button" id="add_movement_btn" class="btn btn-primary btn-block " ><i class="fas fa-plus"></i>  Add</button>

  </div>
  <div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-6 col-12 search-dropdown d-flex align-items-center">
    <select class="form-control border-0 default-select style-1 h-auto">
      <option>Sort by</option>
      <option>Budget ↑</option>
      <option>Budget ↓</option>
      <option>Name ↑</option>
      <option>Name ↓</option>
    </select>
  </div>
  <div class="col-xl-8 col-xxl-6 col-lg-6 col-12 d-md-flex Account-title-search pe-0">
    <div class="input-group search-area">
      <input type="text" class="form-control h-auto" placeholder="search Account here...">
    <span class="input-group-text"><a href="javascript:void(0)" class="btn btn-primary btn-rounded">Search<i class="flaticon-381-search-2 ms-2"></i></a></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-9">
    <div class="mt-4 d-flex justify-content-between align-items-center flex-wrap">
      <div class="mb-4">
        <h5>Showing 12 of 124 Accounts Results</h5>
        <span>Based your preferences</span>
      </div>
      <div class="d-flex align-items-center mb-4">
        <div class="default-tab Account-tabs">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#Boxed">
                <i class="fas fa-th-large"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#List1">
                <i class="fas fa-list"></i>
              </a>
            </li>
          </ul>
        </div>
        <div>
          <select class="default-select dashboard-select border-0 bg-transparent">
            <option data-display="newest">newest</option>

            <option value="2">oldest</option>
          </select>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="Boxed" role="tabpanel">
        <div class="row">
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-457 -443)">
                      <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
                      <g  transform="translate(457 443)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
                        <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
                        <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">UI Designer</h4>
                  <span class="text-primary mb-3 d-block">Bubbles Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-0.332)">
                      <rect  width="71" height="71" rx="12" transform="translate(0.332)" fill="#c5c5c5"/>
                      <g  transform="translate(0.332)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#ee27c0"/>
                        <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">Programmer</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(0.093)">
                      <rect  width="71" height="71" rx="12" transform="translate(-0.093)" fill="#c5c5c5"/>
                      <g  transform="translate(-0.093)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#27beee"/>
                        <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="11.211" cy="11" rx="11.211" ry="11" transform="translate(35.5 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">UX Researcher</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-0.483)">
                      <rect  width="71" height="71" rx="12" transform="translate(0.483)" fill="#c5c5c5"/>
                      <g  transform="translate(0.483)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#bec747"/>
                        <ellipse  data-name="Ellipse 12" cx="18.46" cy="18" rx="18.46" ry="18" transform="translate(14.2 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">Data Scientist</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(0.228)">
                      <rect  width="71" height="71" rx="12" transform="translate(-0.228)" fill="#c5c5c5"/>
                      <g  transform="translate(-0.228)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#7b25d1"/>
                        <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="11.211" cy="11" rx="11.211" ry="11" transform="translate(35.5 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">Graphic Designer</h4>
                  <span class="text-primary mb-3 d-block">Bubbles Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-0.394)">
                      <rect  width="71" height="71" rx="12" transform="translate(0.394)" fill="#c5c5c5"/>
                      <g  transform="translate(0.394)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#345ad6"/>
                        <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">Animator</h4>
                  <span class="text-primary mb-3 d-block">Bubbles Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-0.016)">
                      <rect  width="71" height="71" rx="12" transform="translate(0.016)" fill="#c5c5c5"/>
                      <g  transform="translate(0.016)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#ee9827"/>
                        <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="11.36" cy="11" rx="11.36" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">Animator</h4>
                  <span class="text-primary mb-3 d-block">Bubbles Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(0.362)">
                      <rect  width="71" height="71" rx="12" transform="translate(-0.362)" fill="#c5c5c5"/>
                      <g  transform="translate(-0.362)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#3ca44d"/>
                        <ellipse  data-name="Ellipse 12" cx="18.217" cy="18" rx="18.217" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">Lead Design Rese..</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(0.228)">
                      <rect  width="71" height="71" rx="12" transform="translate(-0.228)" fill="#c5c5c5"/>
                      <g  transform="translate(-0.228)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#cba336"/>
                        <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="11.211" cy="11" rx="11.211" ry="11" transform="translate(35.5 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">UI Designer</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-0.394)">
                      <rect  width="71" height="71" rx="12" transform="translate(0.394)" fill="#c5c5c5"/>
                      <g  transform="translate(0.394)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#80bc3b"/>
                        <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">UX Researcher</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(-0.016)">
                      <rect  width="71" height="71" rx="12" transform="translate(0.016)" fill="#c5c5c5"/>
                      <g  transform="translate(0.016)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#858585"/>
                        <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="11.36" cy="11" rx="11.36" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">UX Researcher</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
            <div class="card">
              <div class="Accounts2 card-body">
                <div class="text-center">
                  <span>
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                      <g  transform="translate(0.362)">
                      <rect  width="71" height="71" rx="12" transform="translate(-0.362)" fill="#c5c5c5"/>
                      <g  transform="translate(-0.362)">
                        <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#df2c57"/>
                        <ellipse  data-name="Ellipse 12" cx="18.217" cy="18" rx="18.217" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                        <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                      </g>
                      </g>
                    </svg>
                  </span>
                  <h4 class="fs-20 mb-0">UX Researcher</h4>
                  <span class="text-primary mb-3 d-block">Kleon Studios</span>
                </div>
                <div>
                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                  <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between flex-wrap">
          <div class="mb-sm-0 mb-3">
            <h5 class="mb-0">Showing 5 of 102 Data</h5>
          </div>
          <nav>
            <ul class="pagination pagination-circle">
              <li class="page-item page-indicator Account-search-page">
                <a class="page-link" href="javascript:void(0)">Prev</a>
              </li>
              <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
              <li class="page-item page-indicator Account-search-page">
                <a class="page-link" href="javascript:void(0)">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="tab-pane fade" id="List1">
        <div class="row">
          <div class="col-xl-12">
            <div class="d-flex flex-wrap search-row bg-white p-3 mb-3 rounded justify-content-between align-items-center">
              <div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                  <g  transform="translate(0.243)">
                  <rect  width="71" height="71" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
                  <g  transform="translate(-0.243)">
                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
                    <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                    <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                  </g>
                  </g>
                </svg>

                <div>
                  <h2 class="title"><a href="javascript:void(0);" class="text-black">Programmer</a></h2>
                  <span class="text-primary">Highspeed Studios</span>
                </div>
              </div>
              <div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
                <svg class="me-3 ml-lg-0 ml-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="54" height="54" rx="15" fill="#2BC155"></rect>
                  <g clip-path="url(#clip6)">
                  <path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"></path>
                  <path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"></path>
                  <path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"></path>
                  <path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"></path>
                  <path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"></path>
                  </g>
                  <defs>
                  <clipPath >
                  <rect width="28" height="28" fill="white" transform="translate(13 12)"></rect>
                  </clipPath>
                  </defs>
                </svg>
                <div>
                  <h4 class="sub-title text-black">$14,000 - $25,000</h4>
                  <span>Monthly Salary</span>
                </div>
              </div>
              <div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
                <svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="54" height="54" rx="15" fill="#FBA556"></rect>
                  <path d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z" fill="white"></path>
                </svg>
                <div>
                  <h4 class="sub-title text-black">London, England</h4>
                  <span>Location</span>
                </div>
              </div>
              <div class="col-xl-2 col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary rounded me-2">Apply Now</a>
              </div>
            </div>
            <div class="d-flex flex-wrap search-row bg-white p-3 mb-3 rounded justify-content-between align-items-center">
              <div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                  <g  transform="translate(0.243)">
                  <rect  width="71" height="71" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
                  <g  transform="translate(-0.243)">
                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
                    <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                    <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                  </g>
                  </g>
                </svg>

                <div>
                  <h2 class="title"><a href="javascript:void(0);" class="text-black">Animator</a></h2>
                  <span class="text-primary">Highspeed Studios</span>
                </div>
              </div>
              <div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
                <svg class="me-3 ml-lg-0 ml-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="54" height="54" rx="15" fill="#2BC155"></rect>
                  <g clip-path="url(#clip6)">
                  <path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"></path>
                  <path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"></path>
                  <path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"></path>
                  <path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"></path>
                  <path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"></path>
                  </g>
                  <defs>
                  <clipPath >
                  <rect width="28" height="28" fill="white" transform="translate(13 12)"></rect>
                  </clipPath>
                  </defs>
                </svg>
                <div>
                  <h4 class="sub-title text-black">$14,000 - $25,000</h4>
                  <span>Monthly Salary</span>
                </div>
              </div>
              <div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
                <svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="54" height="54" rx="15" fill="#FBA556"></rect>
                  <path d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z" fill="white"></path>
                </svg>
                <div>
                  <h4 class="sub-title text-black">London, England</h4>
                  <span>Location</span>
                </div>
              </div>
              <div class="col-xl-2 col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary rounded me-2">Apply Now</a>
              </div>
            </div>
            <div class="d-flex flex-wrap search-row bg-white p-3 mb-3 rounded justify-content-between align-items-center">
              <div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                  <g  transform="translate(0.243)">
                  <rect  width="71" height="71" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
                  <g  transform="translate(-0.243)">
                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
                    <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
                    <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                  </g>
                  </g>
                </svg>

                <div>
                  <h2 class="title"><a href="javascript:void(0);" class="text-black">Designer</a></h2>
                  <span class="text-primary">Highspeed Studios</span>
                </div>
              </div>
              <div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
                <svg class="me-3 ml-lg-0 ml-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="54" height="54" rx="15" fill="#2BC155"></rect>
                  <g clip-path="url(#clip6)">
                  <path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"></path>
                  <path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"></path>
                  <path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"></path>
                  <path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"></path>
                  <path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"></path>
                  </g>
                  <defs>
                  <clipPath >
                  <rect width="28" height="28" fill="white" transform="translate(13 12)"></rect>
                  </clipPath>
                  </defs>
                </svg>
                <div>
                  <h4 class="sub-title text-black">$14,000 - $25,000</h4>
                  <span>Monthly Salary</span>
                </div>
              </div>
              <div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
                <svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="54" height="54" rx="15" fill="#FBA556"></rect>
                  <path d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z" fill="white"></path>
                </svg>
                <div>
                  <h4 class="sub-title text-black">London, England</h4>
                  <span>Location</span>
                </div>
              </div>
              <div class="col-xl-2 col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary rounded me-2">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4>Account Preview</h4>
      <a href="javascript:void(0);"><i class="fas fa-times fs-30"></i></a>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header bg-blue">
            <div class="researcher">
            </div>
          </div>
          <div class="card-body">
            <span class="text-center d-block block">
              <svg xmlns="http://www.w3.org/2000/svg" width="141" height="141" viewBox="0 0 141 141">
                <g  transform="translate(8.243 8)">
                <g  transform="translate(-0.243)" fill="#c5c5c5" stroke="#fff" stroke-width="8">
                  <rect width="125" height="125" rx="12" stroke="none"/>
                  <rect x="-4" y="-4" width="133" height="133" rx="16" fill="none"/>
                </g>
                <g  transform="translate(-0.243)">
                  <rect  data-name="placeholder" width="125" height="125" rx="12" fill="#2769ee"/>
                  <ellipse  data-name="Ellipse 12" cx="31.25" cy="31.69" rx="31.25" ry="31.69" transform="translate(26.316 35.211)" fill="#fff"/>
                  <ellipse  data-name="Ellipse 11" cx="18.914" cy="19.366" rx="18.914" ry="19.366" transform="translate(64.145 26.408)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                </g>
                </g>
              </svg>
            </span>
            <h4 class="fs-20 mb-0 text-center">UX Researcher</h4>
            <span class="text-primary mb-3 d-block text-center">Kleon Studios</span>

            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
            <div>
              <span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Tempor incididunt ut labore </span>
              <span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Lorem ipsum dolor </span>
              <span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Sit amet consectetur  </span>
              <span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Labore adipsicans elit do uasde </span>
            </div>
            <div class="location">
              <span class="fs-14 font-w500 d-flex align-items-center mb-3"><i class="fas fa-map-marker-alt"></i>Manchester, England</span>
              <span class="fs-14 font-w500 d-flex align-items-center"><i class="fas fa-comment-dollar"></i>$2,000 - $2,500</span>
            </div>
          </div>
          <div class="card-footer border-0 pt-0">
            <div class="d-flex justify-content-between align-items-center">
              <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
              </a>
              <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                  </g>
                </svg>
              </a>
              <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
