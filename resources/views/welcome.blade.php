<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome! JobSeekr</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"
    />
    <link rel="stylesheet" href="css/app.css" />
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"
    ></script>
  </head>
  <body class="index-body" style="background: url('images/index-bg.jpg') no-repeat center center fixed;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-4"></div>
          <div class="column is-4">
            <figure class="image is-3by1">
              <img src="https://bulma.io/images/placeholders/720x240.png" />
              <br />
            </figure>
          </div>
          <div class="column is-4"></div>
        </div>
        <div class="columns">
          <div class="column is-2"></div>
          <div class="column is-8 has-text-centered">
            <h4 class="title is-1 has-text-white">
              Hi There! Let's start here
            </h4>
          </div>
          <div class="column is-2"></div>
        </div>
        <div class="columns">
          <div class="column is-5">
            <div class="box has-text-centered home-choose-user-box">
              <div class="box-title">
                <h4 class="subtitle is-4">I'm looking for work</h4>
                <h5 class="subtitle is-5">Signup or signin as jobseeker</h5>
              </div>
              <div class="columns">
                <div class="column">
                  <div class="box-button">
                    <br />
                    <a href="/auth"
                      class="button is-info is-large is-fullwidth"
                      >Start looking for jobs</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-2">
            <div class="divider">
              <div class="columns">
                <hr class="vertical-line" />
              </div>
              <div class="divider-content white-background">
                <h5
                  class="is-size-2 has-text-white push-left-a-bit has-text-weight-semibold"
                >
                  Or
                </h5>
              </div>
              <div class="columns">
                <hr class="vertical-line" />
              </div>
            </div>
          </div>
          <div class="column is-5">
            <div class="box has-text-centered home-choose-user-box">
              <div class="box-title">
                <h4 class="subtitle is-4">I'm looking to hire</h4>
                <h5 class="subtitle is-5">Signup or signin as recruiter</h5>
              </div>
              <div class="columns">
                <div class="column">
                  <div class="box-button">
                    <br />
                    <a
                      href="/recruiter/auth"
                      class="button is-success is-large is-fullwidth"
                      >Start hiring</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="black-transparent"></div>
    <!-- <div class="bg">
      <img src="" />
    </div> -->
  </body>
</html>
