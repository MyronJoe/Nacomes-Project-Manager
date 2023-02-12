<style>

    body {
        background-color: #eee
    }

    .card {
        background-color: #fff;
        padding: 30px;
        border: none;
        width: auto;
    }

    .input-box {
        position: relative;
    }

    .input-box i {
        position: absolute;
        right: 13px;
        top: 30px;
        color: #ced4da;
    }
/*
    .form-control {
        height: 30px;
        background-color: #eeeeee69
    }

    .form-control:focus {
        background-color: #eeeeee69;
        box-shadow: none;
        border-color: #eee
    } */

    .list {
        padding-top: 20px;
        padding-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .border-bottom {
        border-bottom: 2px solid #eee;
    }

    .list i {
        font-size: 19px;
        color: red;
    }

    .list small {
        color: #dedddd;
    }
    </style>






    <div class="container mt-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-6">
                <div class="card">

                    @forelse($products as $item)
      <a href="{{ route('project-details', $item->id) }}">
{{--
    <div class="d-flex flex-column ml-3" style="margin-left: 10px"> <span>Title: {{ $item->title }} </span>   </div>

    <div class="d-flex flex-column ml-3" style="margin-left: 10px"> <span>{{ $item->description }} </span>   </div>
    <div class="d-flex flex-column ml-3" style="margin-left: 10px"> <span>Year: {{ $item->year }} </span>   </div>
    </div> --}}

    <table>
        <tr>
            <td>  <span class="text-danger">TITLE:</span> {{ $item->title }}</td>
            <hr>
            <td>  <span class="text-danger"> YEAR:</span> {{ $item->year }}</td>
        </tr>
    </table>


</a>

    @empty
         <h3 class="text-danger text-center">No Project Found</h3>
    @endforelse

                </div>
            </div>
        </div>
    </div>
