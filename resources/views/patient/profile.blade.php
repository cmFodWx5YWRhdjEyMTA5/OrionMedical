@extends('layouts.default')
@section('content')
<section class="vbox">
            <header class="header bg-white b-b b-light">
              <p>{{ $patients->fullname }}'s Facesheet</p>
            </header>
            <section class="scrollable">
              <section class="hbox stretch">
                <aside class="aside-lg bg-light lter b-r">
                  <section class="vbox">
                    <section class="scrollable">
                      <div class="wrapper">
                        <div class="clearfix m-b">
                          <a href="/images/{{ $patients->image }}" class="pull-left thumb m-r">
                            <img src="/images/{{ $patients->image }}" class="img-circle">
                          </a>
                          <div class="clear">
                            <div class="h3 m-t-xs m-b-xs">{{ $patients->fullname }}</div>
                            <small class="text-muted"><i class="fa fa-map-marker"></i>ID :{{ $patients->patient_id }}</small>
                             <input type="hidden" id="get_patient_id" name="get_patient_id" value="{{ $patients->patient_id }}">
                          </div>                
                        </div>
                        <div class="panel wrapper panel-success">
                          <div class="row">
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block">{{ $patients->gender }}</span>
                                <small class="text-muted">Gender</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block">{{ $patients->date_of_birth->age }}</span>
                                <small class="text-muted">Age</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block">{{ $patients->civil_status }}</span>
                                <small class="text-muted">Status</small>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="btn-group btn-group-justified m-b">
                          <a href="whatsapp://tel:3216541234" class="btn btn-primary btn-rounded">
                            <span class="text">
                              <i class="fa fa-eye"></i> Whatsapp
                            </span>
                            <span class="text-active">
                              <i class="fa fa-eye-slash"></i> Call
                            </span>
                          </a>
                          <a href="tel:+23351448708" class="btn btn-dark btn-rounded" data-loading-text="Connecting">
                            <i class="fa fa-comment-o"></i> SMS
                          </a>
                        </div>
                        <div>
                          <small class="text-uc text-xs text-muted">Mobile</small>
                          <p>{{ $patients->mobile_number }}</p>
                          <div class="line"></div>
                          <small class="text-uc text-xs text-muted">Address</small>
                          <p>{{ $patients->postal_address }}</p>
                          <div class="line"></div>
                          
                          <small class="text-uc text-xs text-muted">Email</small>
                          <p class="m-t-sm">
                            <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
                          </p>
                          
                          </div>
                          <video autoplay  width="200" height="200">
                          <source src="/images/AboutUs@2x.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
                <aside class="bg-white">
                  <section class="vbox">
                    <header class="header bg-light bg-gradient">
                      <ul class="nav nav-tabs nav-white">
                      <li class=""><a href="#information" data-toggle="tab">Basic Information</a></li>
                        <li class="active"><a href="#consultations" data-toggle="tab">Encounters</a></li>
                        @role(['System Admin','Medical Records Manager'])
                        <li class=""><a href="#procedures" data-toggle="tab">Vitals</a></li>
                        <li class=""><a href="#allergy" data-toggle="tab">Allergy</a></li>
                         <li class=""><a href="#statement" data-toggle="tab">Statement</a></li>
                         @endrole
                        <li class=""><a href="#documents" data-toggle="tab">Documents</a></li>
                       
                        {{-- <li class=""><a href="#images" data-toggle="tab">Images</a></li> --}}
                        <span class="hidden-sm">.</span>
                        
                      </ul>
                    </header>
                    <section class="scrollable">
                      <div class="tab-content">

                        <div class="tab-pane" id="information">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                          <section class="panel panel-default">
                <header class="panel-heading font-bold">
                  Patient Info
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="get">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Place of birth</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->place_of_birth }}" class="form-control rounded">                        
                      </div>
                    </div>
                     <div class="line line-dashed line-lg pull-in"></div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Blood Group</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->blood_group }}" class="form-control rounded">                        
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                   <div class="form-group">
                      <label class="col-sm-2 control-label">Account Type</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->accounttype }}" class="form-control rounded">                        
                      </div>
                    </div>
                     <div class="line line-dashed line-lg pull-in"></div>
                   <div class="form-group">
                      <label class="col-sm-2 control-label">Works with</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->company }}" class="form-control rounded">                        
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Insurer</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->insurance_company }}" class="form-control rounded">                        
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">ID Type</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->id_type }}" class="form-control rounded">                        
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">ID Number</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->id_number }}" class="form-control rounded">                        
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Occupation</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->occupation }}" class="form-control rounded">                        
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Nationality</label>
                      <div class="col-sm-10">
                        <input type="text" readonly="true" value="{{ $patients->nationality }}" class="form-control rounded">                        
                      </div>
                    </div>
                    

                    </form>
                    </div>
                    </section>

                        <section class="panel panel-default">
                        <header class="panel-heading font-bold">
                          Address
                        </header>
                        <div class="panel-body">
                          <form class="form-horizontal" method="get">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Residential</label>
                              <div class="col-sm-10">
                                <input type="text" readonly="true" value="{{ $patients->residential_address }}" class="form-control rounded">                        
                              </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-2 control-label">Office</label>
                              <div class="col-sm-10">
                                <input type="text" readonly="true" value="{{ $patients->postal_address }}" class="form-control rounded">                        
                              </div>
                            </div>
                            </form>
                            </div>
                    </section>
                          </ul>
                        </div>


                        <div class="tab-pane active" id="consultations">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                          @foreach($consultations as $consult)
                            @if($consult->referal_doctor != null)
                            <li class="list-group-item animated fadeInRightBig">
                              <a href="#" class="thumb-sm pull-left m-r-sm" data-toggle="class:show,hide">
                                <img src="/images/{{ $patients->image }}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">{{ Carbon\Carbon::parse($consult->created_on)->diffForHumans() }}
                                @role(['Doctor','System Admin','Dentist'])
                              @if($consult->consultation_type=='DENTAL CONSULTATION')
                              <td><a href="/dental-review/{{ $consult->opd_number }}"  class="btn btn-rounded btn-sm btn-primary" id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-stethoscope" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consult"> </i> View </a></td>
                              

                              @elseif($consult->consultation_type=='DENTAL CONSULTATION FOLLOW UP')
                              <td><a href="/dental-review/{{ $consult->opd_number }}"  class="btn btn-rounded btn-sm btn-primary" id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-stethoscope" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consult"> </i> View </a></td>
                              

                              @elseif($consult->consultation_type=='OPHTHALMOLOGY CONSULTATION')
                              <td><a href="/ophthalmology-review/{{ $consult->opd_number }}" class="btn btn-rounded btn-sm btn-primary" id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-stethoscope" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consult"> </i> View </a></td>
                              
                              @elseif($consult->consultation_type=='ANTENATAL')
                              <td><a href="/antenatal-review/{{ $patient->opd_number }}" class="btn btn-rounded btn-sm btn-primary" id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-stethoscope" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consult"> </i> View </a></td>

                              @elseif($consult->visit_type=='Admission')
                              <td><a href="/consultation-ipd/{{ $consult->opd_number }}" class="btn btn-rounded btn-sm btn-primary" id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-stethoscope" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consult"> </i> View </a></td>

                              @else
                              <td><a href="/consultation/{{ $consult->opd_number }}" class="btn btn-rounded btn-sm btn-primary" id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-stethoscope" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consult"> </i> View </a></td>
                              @endif

                            @endrole
                                </small>
                                <strong class="block">{{ $consult->consultation_type }}</strong>
                                <small> {{ $consult->referal_doctor }}</small>
                                <br>
                                <small> Visit Type -  {{ $consult->visit_type }}</small>
                                 <br>
                                <small>Visit Number -  {{ $consult->opd_number }}</small>
                                 <br>
                                <small>Co Payer -  {{ $consult->care_provider }}</small>
                              </a>
                            </li>
                            @else
                            

                            @endif
                            @endforeach
                          </ul>
                        </div>
                        <div class="tab-pane" id="diagnosis">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                          @foreach($diagnosis as $diagnosis)
                             @if($diagnosis->diagnosis != null)
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="/images/{{ $patients->image }}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">{{ $diagnosis->date }}</small>
                                <strong class="block">{{ $diagnosis->diagnosis }}</strong>
                                <small>{{ $consult->created_by }}</small>
                              </a>
                            </li>
                            @else
                            

                            @endif
                            @endforeach
                          </ul>
                        </div>
                        <div class="tab-pane" id="medications">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                          @foreach($medications as $drug)
                          @if($drug->drug_name != null)
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="/images/{{ $patients->image }}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">{{ $drug->drug_cost }}</small>
                                <strong class="block">{{ $drug->drug_name }}</strong>
                                <small>Requested by - {{ $drug->created_by }}</small>
                                <br>
                                <small>Remark - {{ $drug->application }}</small>
                              </a>
                            </li>
                            @else
                            

                            @endif
                            @endforeach
                          </ul>
                        </div>
                        <div class="tab-pane" id="documents">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                                  <header class="panel-heading">
                      <a href="#attach_document" class="bootstrap-modal-form-open" data-toggle="modal"><span class="label bg-success pull-right">Add New Document</span></a>
                      
                    </header>
                          <div class="table-responsive">
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped m-b-none text-sm" width="100%">
                        <tbody>
                        
                        @foreach($images as $keys => $image)
                   

                   <div class="col-md-3 col-sm-4 thumb-lg">
  
                    @if($image->mime == 'docx')
                   <a href="{!! '/uploads/images/'.$image->filepath !!}">
                              <img src="{!! '/images/ms_word.png' !!}" class="img-circle">
                              </a>  {{ $image->filename }}  <a href="#" class="bootstrap-modal-form-open" onclick="deleteImage('{{  $image->id }}','{{ $image->filename }}')"  id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-trash"></i></a>
                    @elseif($image->mime == 'pdf')
                     <a href="{!! '/uploads/images/'.$image->filepath !!}">
                              <img src="{!! '/images/pdf.png' !!}" class="img-circle">
                              </a>{{ $image->filename }}  <a href="#" class="bootstrap-modal-form-open" onclick="deleteImage('{{  $image->id }}','{{ $image->filename }}')"  id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-trash"></i></a>
                      @else 
                     <a href="{!! '/uploads/images/'.$image->filepath !!}">
                              <img src="{!! '/uploads/images/'.$image->filepath !!}" class="img-circle">
                              </a> {{ $image->filename }}  <a href="#" class="bootstrap-modal-form-open" onclick="deleteImage('{{  $image->id }}','{{ $image->filename }}')"  id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-trash"></i></a>
                    @endif        
                      </div>
                    @endforeach


                        </tbody>
                      </table>
                    </div>
                          </ul>
                        </div>

{{--                          <div class="tab-pane" id="images">
                        <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                                  <header class="panel-heading">
                      <a href="#attach_document" class="bootstrap-modal-form-open" data-toggle="modal"><span class="label bg-info pull-right">Add New Image</span></a>
                      
                    </header>
                          <div class="table-responsive">
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped m-b-none text-sm" width="100%">
                        <thead>
                          <tr>
                            <th>Image Name</th>
                            <th>Comment</th>
                            <th>Added</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($images as $image)
                         <tr>
                          @if($image->mime == 'docx')
                         <td><div class="thumb-lg">
                            <a href="{!! '/uploads/images/'.$image->filepath !!}">
                              <img src="{!! '/images/ms_word.png' !!}" class="img-circle">
                              </a>
                            </div>
                          </td>
                          @elseif($image->mime == 'pdf')
                          <td><div class="thumb-lg">
                            <a href="{!! '/uploads/images/'.$image->filepath !!}">
                              <img src="{!! '/images/pdf.png' !!}" class="img-circle">
                              </a>
                            </div>
                          </td>
                          @else
                          <td><div class="thumb-lg">
                            <a href="{!! '/uploads/images/'.$image->filepath !!}">
                              <img src="{!! '/uploads/images/'.$image->filepath !!}" class="img-circle">
                              </a>
                            </div>
                          </td>
                          @endif
                        <td>{{ $image->filename }}</td>
                        <td>{{ $image->created_by }}</td>
                        <td>{{ $image->created_on }}</td>
                        <td>
                            <a href="{!! '/uploads/images/'.$image->filepath !!}" class="bootstrap-modal-form-open"   id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-eye"></i></a>
                        </td>
                         <td>
                            <a href="#" class="bootstrap-modal-form-open" onclick="deleteImage('{{  $image->id }}','{{ $image->filename }}')"  id="edit" name="edit" data-toggle="modal" alt="edit"><i class="fa fa-trash"></i></a>
                        </td>
                          
                        </tr>
                        @endforeach

                        </tbody>
                      </table>
                    </div>
                          </ul>
                        </div> --}}

                        <div class="tab-pane" id="allergy">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                           @foreach($allergies as $allergy)
                          
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="/images/{{ $patients->image }}" class="img-circle">
                              </a>
                              <a href="{{ $allergy->visitid }}"  class="clear">
                                <small class="pull-right">{{ $allergy->created_on }}</small>
                                <strong class="block"><label class="badge bg-info">{{ $allergy->allergy }}</label></strong>
                                <strong class="block"><label class="badge bg-danger">{{ $allergy->medical_history }}</label></strong>
                                 <strong class="block"><label class="badge bg-warning">{{ $allergy->family_history }}</label></strong>
                                   <strong class="block"><label class="badge bg-dark">{{ $allergy->social_history }}</label></strong>
                                    <strong class="block"><label class="badge bg-danger">{{ $allergy->drug_history }}</label></strong>
                                <small>Examined by - {{ $allergy->created_by }}</small>
                                <br>
                                 <small>Visit Number - {{ $allergy->visitid }}</small>
                              </a>
                            </li>
                           
                            @endforeach
                          </ul>
                        </div>

                       <div class="tab-pane" id="procedures">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                          <img src="/images/139328.svg" width="7%" align="right"> 
                        <section class="panel panel-info">
                                <header class="panel-heading font-bold">Vital Signs Chart</header>
                                <div class="panel-body">
                                      <div class="table-responsive">
                       <table id="vitalTable" cellpadding="0" cellspacing="0" border="0" class="table table-striped m-b-none text-sm" width="100%">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Weight (kg)</th>
                              <th>Height (m)</th>
                              <th>BMI</th>
                              <th>Temperature (C)</th>
                              <th>BP (mm of Hg)</th>
                              <th>Pulse Rate (/ min)</th>
                               <th>Respiration (/ min)</th>
                              <th>Remark</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          </tbody>
                        </table>
                    </div>
                    </div>

                     
                    </section>
                          </ul>
                        </div>



                    
                    <div class="tab-pane" id="statement">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                          <img src="/images/139328.svg" width="7%" align="right"> 
                        <section class="panel panel-info">
                                <header class="panel-heading font-bold">Patient Statement of Account</header>
                                <div class="panel-body">
                                      <div class="table-responsive">
                       <table id="" cellpadding="0" cellspacing="0" border="0" class="table table-striped m-b-none text-sm" width="100%">
                          <thead>
                            <tr>
                              <th>Visit ID</th>
                              <th>Debit</th>
                              <th>Receipt</th>
                              <th>Description</th>
                              <th>Debit Date</th>
                              <th>Receipt Date</th>
                              <th>Provider</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($bills as $keys => $bill)
   
                        @if($bill->note  == 'Unpaid')
                          <tr bgcolor="#F5B7B1">
                        @else
                        <tr>
                        @endif
                           
                            <td>{{ $bill->visit_id }}</td>
                            <td>{{ $bill->debit }}</td>
                            <td>{{ $bill->receipt }}</td>
                            <td>{{ $bill->item_name }}</td>
                            <td>{{ $bill->date }}</td>
                             <td>{{ $bill->paymentdate  }}</td>
                             <td>{{ $bill->care_provider  }}</td>
                             </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                    </div>
                    </div>

                     
                    </section>
                          </ul>
                        </div>



                      </div>
                    </section>
                  </section>
                </aside>
               
                    </section>
                    </section>
                    </section>

  @stop

<script src="{{ asset('/event_components/jquery.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function () {

                loadVitals();
  });
</script>

<script>

function getDetails(acct_no)
{ 

  //alert(acct_no);
  $.get("/edit-patient",
          {"patient_id":acct_no},
          function(json)
          {

                $('#modal_check_in input[name="patient_id"]').val(json.patient_id);
                $('#modal_check_in input[name="fullname"]').val(json.fullname);
                $('#modal_check_in select[name="referal_doctor"]').select2();
                $('#modal_check_in select[name="consultant_doctor"]').select2();
                $('#modal_check_in select[name="department"]').select2();
               

          },'json').fail(function(msg) {
          alert(msg.status + " " + msg.statusText);
        });

}


  function deleteImage(id,name)
   {
      swal({   
        title: "Are you sure?",   
        text: "Do you want to remove "+name+" from the file list?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, delete it!",   
        cancelButtonText: "No, cancel plx!",   
        closeOnConfirm: false,   
        closeOnCancel: false }, 
        function(isConfirm){   
          if (isConfirm) 
          { 
          $.get('/delete-image-request',
          {
             "ID": id 
          },
          function(data)
          { 
            
            $.each(data, function (key, value) 
            {
            if(value == "OK")
            {
              swal("Deleted!", name +" was removed from file list.", "success"); 
               location.reload(true);
             }
            else
            { 
              swal("Cancelled", name +" failed to be removed from list.", "error");
              
            }
           
        });
                                          
          },'json');    
           
             } 
        else {     
          swal("Cancelled", name +" failed to be removed from list.", "error");   
        } });

    
   }



 function loadVitals()
   {

        $.get('/patient-vitals-all',
          {
            "patient_id": $('#get_patient_id').val()
          },
          function(data)
          { 

            $('#vitalTable tbody').empty();
            $.each(data, function (key, value) 
            {           
            $('#vitalTable tbody').append('<tr><td>'+ value['created_on'] +'</td><td>'+ value['weight'] +'</td><td>'+ value['height'] +'</td><td>'+ value['weight'] / (value['height'] * value['height']) + (value['bmi_status'] == "Normal" ? '<span class="label label-success btn-rounded">'+ value['bmi_status'] +'</span>' :  '<span class="label label-danger btn-rounded">'+ value['bmi_status'] +'</span>' ) +'</td><td>'+ value['temperature'] + (value['temp_status'] == "Normal" ? '<span class="label label-success btn-rounded">'+ value['temp_status'] +'</span>' :  '<span class="label label-danger btn-rounded">'+ value['temp_status'] +'</span>' ) +'</td><td>'+ value['sbp'] + '/' + value['dbp'] + (value['bp_status'] == "Normal" ? '<span class="label label-success btn-rounded">'+ value['bp_status'] +'</span>' :  '<span class="label label-danger btn-rounded">'+ value['bp_status'] +'</span>' ) +'</td><td>'+ value['pulse_rate'] +'</td><td>'+ value['respiration'] +'</td><td><a a href="#"><i onclick="removeVital(\''+value['id']+'\',\''+value['weight']+'\')" class="fa fa-trash-o"></i></a></td></tr>');
            });
                                          
         },'json');      
    }

</script>

<div class="modal fade" id="attach_document" size="600">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Attach Document</h4>
        </div>

        <div class="modal-body">
         <div class="fallback">
          <form method="post"  enctype="multipart/form-data" action="/uploadfiles">
          <input type="text" class="form-control" width="1000px" height="40px" name="filename" id="filename" placeholder="Enter file name" /><br>
          <input type="file" class="form-control dropbox" width="500px" accept=".doc, .docx, .png, .jpeg, .pdf" height="40px" name="image" /><br>
           <div class="checkbox">
                          <label>
                            <input type="checkbox" name="check" unchecked ><a href="#" class="text-info">is Lab Document</a>
                          </label>
                        </div>
                           <div class="checkbox">
                          <label>
                            <input type="checkbox" name="check" unchecked ><a href="#" class="text-info">is Imaging Document</a>
                          </label>
                        </div>

          <input type="submit" name="submit"  class="btn btn-success btn-s-xs" value="upload" />
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input type="hidden" name="selectedid" id="selectedid" value="{{ $patients->patient_id }}">
        </form>
        </div>
          <br>
          <br>
          <br>
              <div class="jumbotron how-to-create">
                <ul>
                    <li>Documents/Images are uploaded as soon as you drop them</li>
                    <li>Maximum allowed size of image is 8MB</li>
                </ul>

            </div>

      </div>
      </div>
      </div>
      </div>


<div class="modal fade" id="modal_check_in" size="600">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">OPD Registration</h4>
        </div>
        <div class="modal-body">
          <p></p>
                      <section class="vbox">
                    <header class="header bg-light bg-gradient">
                      <ul class="nav nav-tabs nav-white">
                          <li class="active"><a href="#equitytab" data-toggle="tab">Check-in Details</a></li>
                      </ul>
                    </header>
                    <section class="scrollable">
                      <div class="tab-content">
                        <div class="tab-pane active" id="individual">
                           <form  class="bootstrap-modal-form" method="post" action="/create-opd" class="panel-body wrapper-lg">
                          @include('opd/checkin')
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                      </form>
                        </div>
                  
                  
                        </div>
                      </div>
                    </section>
                  </section>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->




