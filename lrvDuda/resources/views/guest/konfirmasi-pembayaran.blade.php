@extends('guest.layout')

@section('script')
 <script type="text/javascript" src="{{asset('datepicker/bootstrap-datepicker.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('datepicker/bootstrap-datepicker.css')}}" >
    <script>
        $(function() {
        $('.dates #usr1').datepicker({
          'format': 'yyyy-mm-dd',
          'autoclose': true
        });
      });
    </script>
@stop

@section('content')
<div class="text-inner-banner-one pos-r">
  <div class="shape-wrapper">
    <svg class="img-shape shape-one">
    <path fill-rule="evenodd"  fill="rgb(255, 223, 204)"
     d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
    </svg>
    <svg class="img-shape shape-two">
    <path fill-rule="evenodd"  fill="rgb(182, 255, 234)"
     d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
    </svg>
    <svg class="img-shape shape-three">
    <path fill-rule="evenodd"  fill="rgb(181, 198, 255)"
     d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.372 18.627,-0.000 12.000,-0.000 C5.372,-0.000 -0.000,5.372 -0.000,12.000 C-0.000,18.627 5.372,24.000 12.000,24.000 Z"/>
    </svg>
    <svg class="img-shape shape-four">
    <path fill-rule="evenodd"  fill="rgb(255, 156, 161)"
     d="M7.500,15.000 C11.642,15.000 15.000,11.642 15.000,7.500 C15.000,3.358 11.642,-0.000 7.500,-0.000 C3.358,-0.000 -0.000,3.358 -0.000,7.500 C-0.000,11.642 3.358,15.000 7.500,15.000 Z"/>
    </svg>
    <svg class="img-shape shape-five">
    <path fill-rule="evenodd"  fill="rgb(178, 236, 255)"
     d="M12.500,25.000 C19.403,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.403,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z"/>
    </svg>
  </div> <!-- /.shape-wrapper -->
  <div class="container">
    <p>Konfirmasi Pembayaran</p>
    <h2 class="pt-30 pb-15">Provide wide range of</h2>
    <p class="sub-heading">digital services</p>
  </div>
</div> <!-- /.text-inner-banner-one -->

<!-- Element Style -->
<div class="team-standard pb-250 sm-pb-90" style="margin-top: 101px">
  <div class="agn-about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 custom-svg-bl">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player 
            src="https://assets9.lottiefiles.com/packages/lf20_FOP8fR.json"  background="transparent"  speed="1"  style="width: 884px; height: 602px;" loop  autoplay >
        </lottie-player>
      </div>
      <div class="col-lg-6">
        <div class="text-wrapper text-wrapper-custom">
          <div class="theme-title-one">
            <h2 class="main-title">Leading Digital Agency for Business Solution.</h2>
          </div> <!-- /.theme-title-one -->
          <p>Lorem ipsum dolor sit amet, hendrerit omittantur mel, es vidit animal iracundia. Ius te altera essent incorrupte. Id alien accu consetetur eam, nibh aliquam iracundia.</p>
        
        </div>
      </div>
      
    </div>
  </div> <!-- /.container -->
  
</div> <!-- /.row -->
</div> <!-- /.team-standard -->
<style type="text/css">
  .danger-sm{
    color: red;
  }
  .border-danger{
    border: 1px solid red;
  }
</style>
<div class="container">
  <form data-plugin="parsley" data-option="{}">
        <div class="card">
          <div class="card-header">
            <strong>Type constraints</strong>
          </div>
          <div class="card-body">   
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">No. Invoice</label>
              <div class="col-sm-9">
                <input type="number" onkeyup="valInvoice()" id="invoice" class="form-control" required placeholder="Username">    
                <small id="InvoiceMessage" class="danger-sm"></small>
              </div>
            </div>        
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Pengirim</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required placeholder="Nama Pengirim">    
              </div>
            </div>           
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tanggal Pembayaran</label>
              <div class="col-sm-9">

                <input type="text" class="form-control" id="picker">
                <small id="EmailMessage" class="danger-sm"></small>
              </div>
            </div>
            <div class="dates" style="margin-top:100px;color:#2471a3;">
              <label>Choose DOB</label>
              <input type="text" style="width:200px;background-color:#aed6f1;" class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Url</label>
              <div class="col-sm-9">
                <input type="url" class="form-control" placeholder="url">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Integer</label>
              <div class="col-sm-9">
                <input type="text" data-parsley-type="integer" class="form-control" placeholder="Integer">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Digits</label>
              <div class="col-sm-9">
                <input type="text" data-parsley-type="digits" class="form-control" placeholder="digits">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Number</label>
              <div class="col-sm-9">
                <input type="text" data-parsley-type="number" class="form-control" placeholder="number">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Alphanum</label>
              <div class="col-sm-9">
                <input type="text" data-parsley-type="alphanum" class="form-control" placeholder="alphanumeric string">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Equal To</label>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6"><input type="text" value="foo" id="foo" class="form-control"></div>
                  <div class="col-sm-6"><input type="text" data-parsley-equalto="#foo" placeholder="equal to foo" class="form-control"></div>
                </div>                            
              </div>
            </div>
            
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </form>
  
</div>
@stop