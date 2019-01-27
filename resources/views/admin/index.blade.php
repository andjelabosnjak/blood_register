@extends('layouts.master')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1> <img src="{{ asset('images/plazma.PNG') }}"> 
          Admin panel
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{!! $donors !!}<sup style="font-size: 20px"> darivatelja</sup></h3>
  
                <p>Registrirani darivatelji</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Više informacija <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{!!$trans_depts!!} <sup style="font-size: 20px"> ustanova</sup></h3>
  
                <p>Transfuziološke ustanove</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Više informacija <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
  
       
  <div class="row">
    <div class="col-sm-6">
      <center> <br><br><br>
        <img class="d-block w-100" src="{{ asset('images/blood_plus.PNG') }}" alt="Blood image">
      </center>
  
    </div>
    <div class="col-sm-6">
            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
              <div class="box-header">
                <i class="fa fa-calendar"></i>
  
                <h3 class="box-title">Kalendar</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li><a href="#">Dodaj novi događaj</a></li>
                      <li><a href="#">Obriši događaje</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Vidi kalendar</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-black">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Progress bars -->
                    <div class="clearfix">
                      <span class="pull-left">Zadatak #1</span>
                      <small class="pull-right">90%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                    </div>
  
                    <div class="clearfix">
                      <span class="pull-left">Zadatak #2</span>
                      <small class="pull-right">70%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="clearfix">
                      <span class="pull-left">Zadatak #3</span>
                      <small class="pull-right">60%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                    </div>
  
                    <div class="clearfix">
                      <span class="pull-left">Zadatak #4</span>
                      <small class="pull-right">40%</small>
                    </div>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
  
      </section>
      <!-- /.content -->
@endsection