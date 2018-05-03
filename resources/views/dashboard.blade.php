@extends('master-back')

@section('page-title', 'Dashboard')

@section('main-content')
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="green">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title"><b>Number of Post</b></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                <!-- tabs -->
                </ul>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <div class="row">
            <div class="content">
              <div class="card-content table-responsive table-full-width">
                <center><h1>10</h1></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="green">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title"><b>Number of Portfolios</b></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                <!-- tabs -->
                </ul>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <div class="row">
            <div class="content">
              <div class="card-content table-responsive table-full-width">
                <center><h1>10</h1></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="green">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title"><b>Number of Post</b></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                <!-- tabs -->
                </ul>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <div class="row">
            <div class="content">
              <div class="card-content table-responsive table-full-width">
                <center><h1>10</h1></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="green">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title"><b>Number of Post</b></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                <!-- tabs -->
                </ul>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <div class="row">
            <div class="content">
              <div class="card-content table-responsive table-full-width">
                <center><h1>10</h1></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="green">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title"><b>Number of Post</b></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                <!-- tabs -->
                </ul>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <div class="row">
            <div class="content">
              <div class="card-content table-responsive table-full-width">
                <!-- this section must be a chart -->
                <canvas id="bopo" width="auto" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- chart bopo -->
  <script>
  new Chart(document.getElementById("bopo"), {
    type: 'horizontalBar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
  });
  </script>
@endsection
