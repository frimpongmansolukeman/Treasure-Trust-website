<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gold trust security</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-bar1">
      <a class="navbar-brand" href="#"
        ><img src="./images/logo2.png" alt="" style="width: 150px; height: 40px"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index-two.php">Gold storage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index3.php">insurance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index4.php">safety and security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index5.php">contact us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid container-one">
      <h2>
        your traesure is <br />
        safe with us
      </h2>
      
    </div>
    <div class="container-fluid container-two">
      <div class="row mt-5">
        <div class="col-sm-12 col-md-3 login-section p-4">
          <h3>login to access vault storage with us</h3>
         
          <form method="post" action="action.php">
          <?php if(isset($_GET['error'])){ ?>
            <p class="errors"><?php echo $_GET['error']; ?></p>
            <?php
          } ?>
            <div class="form-group">
              <label for="email">Email:</label>
              <input
                type="text"
                class="form-control"
                placeholder="username"
                name="uname"
              />
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input
                type="password"
                class="form-control"
                placeholder="Enter password"
                name="passwrd"
              />
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="remember"
                />
                Remember me
              </label>
            </div>
            <input
                type="submit"
                class="btn btn-primary"
                name="submit"
              />
          </form>
        </div>
        <div class="col-sm-12 col-md-6 about">
          <h1>about us</h1>
          <h2>
            Gold trust security company ltd <br />vault storage for gold and
            silver
          </h2>
          <p align="justify">
            You can rest well knowing your precious metals are stored with Gold trust
             Security Company Limited. We offer the safest and most cost
            effective gold and silver vault storage in the industry, with 24
            hour online access and our legendary customer service. Through
            strategic partnerships with the world’s top institutional vault
            providers, our customers can attain fully-insured and segregated
            gold and silver storage around the world, at prices far below the
            alternatives.
          </p>
          <ul>
            <li>
              <p align="justify">
                Metals are held solely in your name (or a joint account, trust,
                LLC or other option you choose).
              </p>
            </li>
            <li>
              <p align="justify">
                The exact bullion you buy is always stored separately, and
                independently audited and verified – no pooling or shared
                ownership, just your metals in your title.
              </p>
            </li>
            <li>
              <p align="justify">
                Customers receive regular custody certificates documenting their
                holdings and account inventory levels.
              </p>
            </li>
            <li>
              <p align="justify">
                Your holdings are a secure phone call or a few clicks away from
                door delivery or a sellback directly from storage.
              </p>
            </li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="row">
            <div class="col">
              <img
                src="./images/images-2.jpg"
                style="width: 100%"
                height="200px"
                alt=""
              />
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <img
                src="./images/images.jpg"
                style="width: 100%"
                height="200px"
                alt=""
              />
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <img
                src="./images/gold-vault-300x200.png"
                style="width: 100%"
                height="200px"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid container-three">
      <div class="row">
        <div class="col">
          <h3>Your gold and silver is secured</h3>
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  class="d-block w-100"
                  src="./images/vaul12.jpg"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./images/goge.jpg" alt="Second slide" />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="./images/security3.jpg"
                  alt="Third slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="./images/security2.jpg"
                  alt="forth-slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-center">
      <img src="/badge.png" alt="" />
    </div>
    <div class="container-fluid container-five p-5">

        
      <h3 align="justify">
        Gold trust Security Company Limited. Vault storage keeps your
        investments secure .Providing the most prestigious offerings in Customer
        Service, Security, Privacy, Gold exchange and Exclusivity to high end
        clientele.
      </h3>
      <h2>Secure Your Valuables Today! Get in Touch</h2>
    </div>
    <div class="container-fluid container-six pl-5 pr-5">
      <p>
        &copy;2020 Gold Trust Security Company Limited . All rights reserved. A
        certfied member of the Safety Deposit Association. FCA Regisration
        Number: 61343654
      </p>

    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
