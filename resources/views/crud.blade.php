@extends('layouts.app')
@section('content')

<style>
  ul {
       list-style: none;
  }
  .nav__list {
     
      margin: 0;
      padding: 25px 0 0;
      text-align: center;
}
   
   li {
      margin-bottom: 40px;
  }
  section {
      display: grid;
      width: 100%;
      height: 100vh;
      grid-template-columns: 77px auto;
  }

  aside {
      background: #F7F9FC;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      padding: 0;
      justify-content: space-between;
  } 
  main {
      background: #fff;
      width: 100%;
  }
  ::placeholder {
      color: #E5E5E5;
  }
  .box {
      position: relative;
      display: flex;
      align-items: center;
      height: 100% !important;
      width: 100% !important;
  }
  .box_item {
      width: 185px;
      height: 80px;
      border-radius: 8px;
  }
  .box:nth-child(1) {
      width: 32px;
      height: 32px;
  }
  .box:nth-child(2) {
      width: 32px;
      height: 32px;
  }
  .card_summary {
      border: 1px solid #F0F0F0 !important;
      border-radius: 8px;
  }
  
  </style>
<section>
  <aside>
      <ul class="nav__list">
          <li>
              <a href="{{ route('home') }}">
                  <img src="{{ asset('assets/admin_logo.png')}}" alt="">
              </a>
          </li>
          <li>
              <a href="#">
                  <img src="{{ asset('assets/element-equal.svg')}}" alt="">
              </a>
          </li>
          <li>
              <a href="#">
                  <img src="{{ asset('assets/book.png')}}" alt="">
              </a>
          </li>
          <li style="padding: 10px; background: rgba(51, 102, 255, 0.2); border-radius: 8px;">
              <a href="{{ route('crud')}}">
                  <img src="{{ asset('assets/teacher.png')}}" alt="">
              </a>
          </li>
          <li>
              <a href="#">
                  <img src="{{ asset('assets/calendar.png')}}" alt="">
              </a>
          </li>
          <li>
              <a href="#">
                  <img src="{{ asset('assets/messages-2.png')}}" alt="">
              </a>
          </li>
          
      </ul>
      <ul class="text-center p-0">
          <li>
              <a href="#">
                  <img src="{{ asset('assets/setting.svg')}}" alt="">
              </a>
          </li>
          <li>
              <a href="{{ route('logout')}}">
                  <img src="{{ asset('assets/logout.svg')}}" alt="">
              </a>
          </li>
      </ul>
  </aside>
  <main style="padding: 10px 50px">
    <div style="display: flex; justify-content: space-between; position: relative; align-items: center;">
        <div style="flex-basis: 400px; flex-grow: 1; position: relative;">
            <a href="#" style="position: absolute; top: -11px; left: 233px;">
                <img src="{{ asset('assets/play.svg')}}" alt="">
            </a>
        </div>
        <div class="search" style="position: relative;">
        <input type="text" placeholder="Search..." style="border-radius: 5px; padding: 5px 20px; width:212px; border: 1px solid #E5E5E5; outline: none !important; background: transparent">
        <img style="position: absolute; top: 11px; right: 59px;" src="{{asset('assets/search.svg')}}" alt="">
        <img style="margin-left: 27px;" src="{{asset('assets/bell.svg')}}" alt="">
      </div>
    </div>

    <div style="padding: 0 90px;">
      <div class="header" style="display: flex; justify-content: space-between; margin-top: 58px; margin-bottom: 46px;">
        <h1 style="font-size: 20px; color: #2E3A59; font-weight: bold;">Student List</h1>
        <button class="btn btn-primary" style="padding: 7px 19px;font-size: 14px; font-weight: bold; letter-spacing: 1px;" id="add_student">Add a new student</button>
      </div>
        <table class="table table-hover " id="mytable" >
          <thead>
            <tr style="margin-top: 20px;">
              <th>Name</th>
              <th>Contact</th>
              <th>Region</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($students as $student)
                <tr id="{{ $student->id}}">
                  <td style="padding: 18px;">{{ $student->name }}</td>
                  <td style="padding: 18px;">{{ $student->contact }}</td>
                  <td style="padding: 18px;">{{ $student->region }}</td>
                  <td style="padding: 18px;">
                    @if ($student->status == 'active')
                        <span style="background: #F0FFF8;padding: 8px 12px; border-radius: 8px; font-size: 16px; color: #18AB56; font-weight: bold;">Active</span>
                    @elseif ($student->status == 'drop')
                        <span style="background: #FFF0F0;padding: 8px 12px; border-radius: 8px; font-size: 16px; color: #EB5757; font-weight: bold;">Drop out</span>
                    @else 
                        <span style="background: #FEFFE6;padding: 8px 12px; border-radius: 8px; font-size: 16px; color: #EB5757; font-weight: bold;">Pending</span>
                    @endif

                  </td>
                  <td style="width: 8%; padding: 18px; position: relative;">
                    <div class="action" style="display: flex; justify-content: space-between; padding: 0 10px;">
                      <a href="#">
                        <img src="{{ asset('assets/dotdot.svg')}}" alt="">
                      </a>
                      <a href="#" id="show_action" data-id="{{ $student->id }}">
                        <i class="fa-solid fa-chevron-down text-dark"></i>
                      </a>

                      <div class="d-none" id="drop-{{$student->id}}" style="z-index: 100;position: absolute; display:flex; flex-direction: column; top:42px; right: 0; background: #fff; width: 107px; height: 134px; padding:20px; border: 1px solid rgba(0, 0, 0, 0.2); ">
                          <button class="btn btn-sm btn-success mb-2">View</button>
                          <button id="edit" data-id="{{ $student->id}}" class="mb-2 btn btn-sm btn-primary">Edit</button>
                          <button id="delete" data-id="{{ $student->id}}" class="btn btn-sm btn-danger mb-3" id="{{ $student->id }}">Delete</button>

                      </div>
                    </div>
                  </td>
                </tr>
            @empty
                
            @endforelse
          </tbody>
        </table>
    </div>
  </main>
</section>
<!-- Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body p-3">
        <div class="text-center">
          <h1 style="font-size: 20px; color: #2E3A59; font-weight: bold;">Are you sure that you want to delete this record?</h1>

          <p style="font-size: 14px; font-weight: 400; color: #2E3A59;">Once done, It cannot be recover</p>
        </div>
        <form style="display: flex; justify-content: space-between;">
          @csrf
          @method('DELETE')
          <input type="hidden" name="hidden_id" id="hidden_id">
          <button type="button" style="padding: 4px 35px;" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" id="yes_delete" style="padding: 4px 35px;" class="btn btn-danger">Yes</button>


        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <form method="post" id="form_insert" style="padding: 30px;">
            @csrf
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Full Name</small>
              <input type="text" name="name" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Contact</small>
              <input type="number" min="0" name="contact" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Region</small>
              <input type="text" name="region" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Course</small>
              <select type="text" name="course" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
                <option selected disabled>Select Course</option>
                <option value="test1">Test Course 1</option>
                <option value="test2">Test Course 2</option>
              </select>
            </div>
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Section</small>
              <input type="text" name="section" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            <div class="form-group" style="display: flex; justify-content: space-between;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: #FF3333; font-size: 16px; border: none !important;">Cancel</button>
              <button type="button" class="btn btn-primary" style="background: #009933; font-size: 16px; border: none !important;
;              " id="form_submit">Submit</button>
            </div>
            
          </form>

      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <form method="post" id="form_update" style="padding: 30px;">
            @csrf
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Full Name</small>
              <input type="text" id="name_1" name="name_1" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            <input type="hidden" name="h_id" id="h_id">
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Contact</small>
              <input type="number" id="contact_1" min="0" name="contact_1" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Region</small>
              <input type="text" id="region_1" name="region_1" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Course</small>
              <select type="text" name="course_1" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
                <option selected disabled>Select Course</option>
                <option value="test1">Test Course 1</option>
                <option value="test2">Test Course 2</option>
              </select>
            </div>
            <div class="form-group mb-4" style="position: relative;">
              <small style="position: absolute; top:-11px; left: 11px; background: #fff; padding: 3px;color: #9E9E9E;">Section</small>
              <input type="text" id="section_1" name="section_1" style="width: 100%; padding: 10px; border: 2px solid #9E9E9E; border-radius: 4px; font-weight: 500;">
            </div>
            <div class="form-group" style="display: flex; justify-content: space-between;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: #FF3333; font-size: 16px; border: none !important;">Cancel</button>
              <button type="button" class="btn btn-primary" style="background: #0066CC; font-size: 16px; border: none !important;
;              " id="form_update">Update</button>
            </div>
            
          </form>

      </div> 
    </div>
  </div>
</div>


@endsection
@push('scripts')
    <script>
      
      $(function() {


        $(document).on('click', '#edit', function() {

          var id = $(this).data('id');

          $.ajax({
            url: '{{ url('get')}}',
            method: 'GET',
            data: {id: id},
            dataType: 'json',
            success: function(res) {
              console.log(res)
              if(res.data) {
                $('#h_id').val(res.data[0].id);
                $('#name_1').val(res.data[0].name);
                $('#contact_1').val(res.data[0].contact);
                $('#region_1').val(res.data[0].region);
                $('#section_1').val(res.data[0].section);
              }
            }
          })
          

          $('#update').modal('show');
        })


        $(document).on('click', '#yes_delete', function() {

          var id = $('#hidden_id').val();
          let csrf = '{{ csrf_token() }}';

          $.ajax({
            url: '{{ url('delete')}}',
            method: 'DELETE',
            data: {id: id, _token: csrf},
            success: function(res) {
              if(res.status === 'success') {

                $('#delete_modal').modal('hide');
                
                Swal.fire(
                  'Deleted!',
                  'Student has been deleted.',
                  'success'
                );
                location.reload();
              }
            }
          })
         

        })


        $(document).on('click', '#delete', function(e) {
          var id = $(this).data('id');
         
          $('#delete_modal').modal('show');

          $('#hidden_id').val(id);

        })

        $(document).on('click', '#show_action', function() {
          var id = $(this).data('id');

          $('#drop-' + id).toggleClass('d-none');
        })

        $('#add_student').click(function(e) {
          $('#exampleModalLong').modal('show');
        });

        $('#form_submit').click(function(e) {
          e.preventDefault();

          console.log($('#form_insert').serialize());

          $.ajax({
            url: '{{ url('insert') }}',
            method: 'POST',
            data: $('#form_insert').serialize(),
            success: function(res) {
              $('#form_insert')[0].reset();
              if(res.status === 'success') {
                Swal.fire(
                  'Successfully Created',
                  'New student has been added!',
                  'success'
                );
          $('#exampleModalLong').modal('hide');
                setInterval(() => {
                  location.reload();
                }, 2000);
              }
            }
          })
        })

        let example = $('#mytable').DataTable({
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }],
    select: {
        style: 'os',
        selector: 'td:first-child'
    },
    order: [
        [1, 'asc']
    ]
});
example.on("click", "th.select-checkbox", function() {
    if ($("th.select-checkbox").hasClass("selected")) {
        example.rows().deselect();
        $("th.select-checkbox").removeClass("selected");
    } else {
        example.rows().select();
        $("th.select-checkbox").addClass("selected");
    }
}).on("select deselect", function() {
    ("Some selection or deselection going on")
    if (example.rows({
            selected: true
        }).count() !== example.rows().count()) {
        $("th.select-checkbox").removeClass("selected");
    } else {
        $("th.select-checkbox").addClass("selected");
    }
});

      })
    </script>
@endpush